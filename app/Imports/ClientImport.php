<?php

namespace App\Imports;

use App\Models\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;

class ClientImport implements ToModel
{
    public $capacity = "";

    public function __construct($capacity){
        $this->capacity = $capacity;
    }

    public function model(array $row)
    {
        return new \App\Models\Client([
            'company'        => $row[1],
            'address'        => $row[2],
            'capacity'       => $row[3],
            'type'       => $this->capacity
        ]);
    }
}
