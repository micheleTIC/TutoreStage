<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Recruteurs extends Model{
    protected $fillable=[ 'firm_name','email','phone','website','username','password'];
    public $timestamps = false;
}
