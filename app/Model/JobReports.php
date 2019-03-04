<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JobReports extends Model
{
    protected $fillable=[
        'company_name','position','price',
        'content','modify_content','ip','useragent',
        'company_id','status',
    ];
}
