<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public $table = array('Dyskietka','Dysk twardy','Dysk ssd','error');

    public function show($drives){
        if($drives=='fdd'){
            return $this->table[0];
        }else if($drives=='hdd'){
            return $this->table[1];
        }else if($drives=='sdd'){
            return $this->table[2];
        }else{
            return $this->table[3];
        }
    }
}
