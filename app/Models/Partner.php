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
        return $this->belongsTo(Program::class, 'source_program_id');
    }

    public function destinationProgram()
    {
        return $this->belongsTo(Program::class, 'destination_program_id');
    }
}
