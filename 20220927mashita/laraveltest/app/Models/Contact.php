<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['fullname','familyname','name','gender','email','postcode','address','building_name','option'];

    public function getFullNameAttribute() {
        return $this->familyname.$this->name;
    }
}
