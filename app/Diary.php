<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Professor;
use App\User;

class Diary extends Model 
{
    protected $fillable = [
	
        'title','professor_id',
    ];
    public function professor()
    {
    	return $this->belongsTo(Professor::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
