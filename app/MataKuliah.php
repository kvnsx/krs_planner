<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataKuliah extends Model
{
    use SoftDeletes;

    public $table = 'mata_kuliah';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama',
        'kode',
        'sks',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function mataKuliahJadwal()
    {
        return $this->hasMany(JadwalKuliah::class, 'mata_kuliah_id', 'id');
    }
}
