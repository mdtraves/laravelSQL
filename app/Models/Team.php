<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'country']; 


    public $name;
    public $country;

    public function __construct($name, $country){
        $this->name = $name;
        $this->country = $country;
    }

    public function introduce(){
        return $this->name . " are from " . $this->country;
    }
   
}
