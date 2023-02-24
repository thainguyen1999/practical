<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //
    use HasFactory;
    protected $table = "listsudent";
    protected $fillable = [
        "name",
        "age",
        "address",
        "telephone"
        ];
    public function Students(){
return $this->hasMany(Students::class);
    }

}
