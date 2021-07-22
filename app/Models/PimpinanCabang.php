<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PimpinanCabang extends Model
{
    protected $table = 'pc_tb';

    public function member(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasMany('App\Models\Anggota', 'pc_id');
      }
}
