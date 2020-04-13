<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ICTApp extends Model
{
    protected $table = 'reimbursement';

    public static $entries = [
    	'ug_nominee' => 'UG Nominee',
    	'facad' => 'Fac Ad',
    	'sac_office' => 'SAC Office',
    	'dean' => 'Dean',
    	'account_section' => 'Account Section'
    ];
}
