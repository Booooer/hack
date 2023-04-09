<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalOrder extends Model
{
    use HasFactory;

    protected $table = "final_order";

    protected $fillable = [
        "kofeinya",	
        "postavshik",
        "element_nomenklatyri",	
        "celevaya", 	
        "pn",	
        "vt", 	
        "sr" ,	
        "cht" ,	
        "pt", 	
        "sb" ,	
        "vs",

    ];
}
