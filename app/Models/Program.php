<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';

    public function sourcePartners()
    {
        return $this->hasMany(Partner::class, 'source_program_id');
    }

    public function destinationPartners()
    {
        return $this->hasMany(Partner::class, 'destination_program_id');
    }

}
