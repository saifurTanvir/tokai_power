<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acheivement extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'acheivements';

    public function createdUser(){
        return $this->belongsTo(AdminUser::class, 'created_by', 'id');
    }

    public function updatedUser(){
        return $this->belongsTo(AdminUser::class, 'updated_by', 'id');
    }

    protected function getStatusAttribute($status){
        return $status ? "Active" : "Inactive";
    }

    protected function setStatusAttribute($status){
        if($status == 1){
            $this->attributes['status'] = 1;
        }else{
            $this->attributes['status'] = 0;
        }
    }

    public function getCreatedAtAttribute($createdAt){
        return Carbon::parse($createdAt)->diffForHumans();
    }

    public function getUpdatedAtAttribute($updatedAt){
        return Carbon::parse($updatedAt)->diffForHumans();
    }
}
