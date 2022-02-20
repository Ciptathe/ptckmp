<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rab extends Model
{
    protected $table = 'rab';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['no','uraian_pekerjaan','satuan','volume','harga_satuan','jumlah'];
}
