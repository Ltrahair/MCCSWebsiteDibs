<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public $name="";
    public $href="";
    function __construct($name,$href){
        $this->$name=$name;
        $this->$href=$href;
    }
}
