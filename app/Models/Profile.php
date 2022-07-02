<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/C10zSCyxcwTzYWG7wsANO5wp9zIfbEYp0FIVnYiB.jpg';
         return '/storage/' . $imagePath;
    }
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
