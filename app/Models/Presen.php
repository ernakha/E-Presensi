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
    protected $fillable = ['users_id','keterangan'];

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
