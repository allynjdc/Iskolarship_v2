<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Scholarships extends Model {
     
    use Notifiable;
     
    protected $primaryKey = 'scholarship_id';
    protected $table = 'scholarship';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
     public function sponsor(){
         return $this->belongsTo('App\Sponsor');
     }
     protected $fillable = [
 		'sponsor_id',
    	'scholarship_name',
        'scholarship_desc' ,
        'scholarship_logo',       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
