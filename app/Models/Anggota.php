<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota_tb';

    public function pc(){
        return $this->BelongsTo('App\Models\PimpinanCabang', 'pc_id');
      }
}
