<?php

namespace App\Sistem;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SMP extends Model
{
    private function db()
    {
        return DB::table('zonasi');
    }
    public function getAll()
    {
        return $this->db()->get();
    }
    public function get($zon_id)
    {
        return $this->db()->where('zon_id', $zon_id)->get()[0];
    }
}
