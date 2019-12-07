<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {

    protected $table = 'tbl_author';

    protected $fillable = ['name', 'biography'];

    /**
     * 
     *  Note: to search books
     *  use manual query
     * 
     * */    

}

?>