<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;


class PartnerController extends Controller
{
    /**
     * Display all non-expired transfer partner rates
     * api/partners?page=1
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDateTime = now();

        $transferPartners = Partner::join('programs as source_program', 'partners.source_program_id', '=', 'source_program.id')
            ->join('programs as destination_program', 'partners.destination_program_id', '=', 'destination_program.id')
            ->select(
                'partners.source_program_id',
                'partners.destination_program_id',
                'source_program.name as source_program_name',
                'destination_program.name as destination_program_name',
                'partners.transfer_rate',
                'partners.transfer_time',
                'partners.transfer_time_units',
                'bonus_rate',
                'bonus_expiration',
            )
            ->where(function ($query) use ($currentDateTime) {
                $query->where('bonus_rate', '=', 0)
                    ->orWhere('bonus_expiration', '>=', $currentDateTime);
            })
            ->paginate(25);

        return response()->json($transferPartners, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = Partner::create($request->all());
        return response()->json($partner, 201);
    }

    /**
     * Search for partners by source program id, returns all rates and info for all current offers
     *
     * @param  \App\Models\Partner  $partner
     * api//partners/search/{id}?page=1
     * @return \Illuminate\Http\Response
     */
    public function search($id)
    {
        $currentDateTime = now();

        $relevantPartners = Partner::where('source_program_id', '=', $id)
            ->join('programs as source_program', 'partners.source_program_id', '=', 'source_program.id')
            ->join('programs as destination_program', 'partners.destination_program_id', '=', 'destination_program.id')
            ->select(
                'partners.source_program_id',
                'partners.destination_program_id',
                'source_program.name as source_program_name',
                'destination_program.name as destination_program_name',
                'partners.transfer_rate',
                'partners.transfer_time',
                'partners.transfer_time_units',
                'bonus_rate',
                'bonus_expiration',
            )
            ->where(function ($query) use ($currentDateTime) {
                $query->where('bonus_rate', '=', 0)
                    ->orWhere('bonus_expiration', '>=', $currentDateTime);
            })
            ->paginate(25);

        return response()->json($relevantPartners, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $partner->update($request->all());
        return response()->json($partner, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return response()->json(null, 204);
    }
    /**
     * Return all current partner programs given a specific program ID
     * @param int $source_program_id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $currentDateTime = now();

        $relevantPartners = Partner::where('source_program_id', '=', $id)
            ->join('programs as source_program', 'partners.source_program_id', '=', 'source_program.id')
            ->join('programs as destination_program', 'partners.destination_program_id', '=', 'destination_program.id')
            ->select(
                'partners.destination_program_id',
                'destination_program.name as destination_program_name',
            )
            ->distinct('partners.source_program_id')
            ->where(function ($query) use ($currentDateTime) {
                $query->where('bonus_rate', '=', 0)
                    ->orWhere('bonus_expiration', '>=', $currentDateTime);
            })
            ->get();

        return response()->json($relevantPartners, 200);
    }

    /**
     * Return transfer rate and time given a source program ID and a destination program ID
     *
     * @return \Illuminate\Http\Response
     */

    public function getTransferRateAndTime(Request $request)
    {
        $source_program_id = $request->query('source');
        $destination_program_id = $request->query('destination');

        // Check if the source and destination programs exist
        if (!Program::where('id', $source_program_id)->exists() || !Program::where('id', $destination_program_id)->exists()) {
            return response()->json(['error' => 'Invalid source or destination program ID.'], 404);
        }

        $transferDetails = Partner::join('programs as source_program', 'partners.source_program_id', '=', 'source_program.id')
            ->join('programs as destination_program', function ($join) use ($destination_program_id) {
                $join->on('partners.destination_program_id', '=', 'destination_program.id')
                    ->where('destination_program.id', '=', $destination_program_id);
            })
            ->select(
                'partners.transfer_rate',
                'partners.transfer_time',
                'partners.transfer_time_units',
                'source_program.name as source_program_name',
                'destination_program.name as destination_program_name'
            )
            ->where('partners.source_program_id', '=', $source_program_id)
            ->where(function ($query) {
                $query->where('partners.bonus_rate', '=', 0) // Reg rates
                    ->orWhere(function ($subquery) {
                        $subquery->where('partners.bonus_rate', '=', 1) // Bonus rates
                            ->where('partners.bonus_expiration', '>', now()); // Not expired
                    });
            })
            ->get();

        return response()->json($transferDetails, 200);
    }
}
