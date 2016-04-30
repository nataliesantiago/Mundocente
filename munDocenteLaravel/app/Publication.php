<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;
use MunDocente\TypeOfPublication;
use MunDocente\TypeOfScientificMagazine;
use MunDocente\Place;
use MunDocente\User;

class Publication extends Model
{
    protected $table = 'publications';


    public function typeOfPublication()
    {
    	return $this->belongsTo('MunDocente\TypeOfPublication', 'type');
    }

    public function typeScientificMagazine()
    {
    	return $this->belongsTo('MunDocente\TypeOfScientificMagazine', 'category');
    }

    public function place()
    {
    	return $this->belongsTo('MunDocente\Place', 'place');
    }

    public function user(){
    	return $this->belongsTo('MunDocente\User', 'user_id');
    }
}
