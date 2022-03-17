<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    protected $fillable = ['title','deadline'];
    protected $appends = ['DeadlineLocal'];

    public function getDeadlineLocalAttribute(){
        return utcToLocal($this->deadline,get_local_time())->toDayDateTimeString();
    }

}
