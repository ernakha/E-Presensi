<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presen extends Model
{
    use HasFactory;
    protected $table = 'presen';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    public function guru(){
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
