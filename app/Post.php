<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Post extends Model
{

    public function comments(){

      return $this->hasMany(Comment::class);

    }

    public function addComment($body){

        $this->comments()->create(compact('body'));
        // Take body and use comments table to crete a new row with auto increment id and body
    }
    public function user(){ //$comment->post -> user

        return $this->belongsTo(User::class);
    }

    public function scopeMonth($query,$filters){
        //Get the specific month and year of archives selection
        if($month = $filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
       }

        if($year = $filters['year']){
            $query->whereYear('created_at',$year);
        }

    }

    public static function archives(){

    return static::selectRaw('year(created_at) year,monthname(created_at)month,count(*) published')
                    ->groupBy('year','month')
                    ->orderByRaw('min(created_at) desc')
                    ->get()
                    ->toArray();
    }

    public function tags()
    {

      // 1 post may have many tidy_diagnose
      //Any tag may be applied to many posts

      return $this->belongsToMany(Tag::class);

    }
    protected $guarded = [];
    //$fillable ensures that only the names in the array are place into Database
    //$guarded does not allow those inputs in your array from post request to Database
}
