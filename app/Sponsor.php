<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model {
    
    use Notifiable;
	
    protected $primaryKey = 'sponsor_id';
    protected $table = 'sponsor_account';

    public function user(){
        return $this->belongsTo('App\User');
    }
	
    protected $fillable = [
        'user_id',
    	'sponsor_fname',
        'sponsor_lname' ,
        'sponsor_address' ,
        'sponsor_job' ,
        'sponsor_agency',
        'sponsor_agencyaddress'       
    ];
}
