<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $table = 'partners';

    public function sourceProgram()
    {
        return $this->belongsTo(TransferProgram::class, 'source_program_id');
    }

    public function destinationProgram()
    {
        return $this->belongsTo(TransferProgram::class, 'destination_program_id');
    }
}
