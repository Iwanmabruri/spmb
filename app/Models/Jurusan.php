<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'bidang_keahlian',
        'program_keahlian',
        'kons_keahlian',
        'deskripsi',
        'foto',
        'status'
    ];

    public $timestamps = false; // pakai created_at & updated_at
    public function murid()
    {
        return $this->hasMany(Murid::class, 'jurusan_id');
    }
}
