<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'csr';

    public function user(){
        return $this->belongsTo(AdminUser::class, 'id', 'id');
    }

    protected function getStatusAttribute($status){
        return $status ? "Active" : "Inactive";
    }

    public function getCreatedAtAttribute($createdAt){
        return Carbon::parse($createdAt)->diffForHumans();
    }

    public function getUpdatedAtAttribute($updatedAt){
        return Carbon::parse($updatedAt)->diffForHumans();
    }
}
