<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venus extends Model
{
    protected $table = 'venus';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['instansi','lokasi','jumlah','keterangan','bayar','belumbayar'];
}
