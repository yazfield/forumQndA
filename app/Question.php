<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Reply;

class Question extends Model
{
    protected $guarded = [];
    
    public function path() 
    {
        return '/questions/'. $this->id;
    }

    public function replies() 
    {
        return $this->hasMany(Reply::class);
    }    

    public function creator() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }  

    public function addReply($reply)
    {
        $this->replies()->create($reply);
    }

    public function validateReply(Request $request, Question $question, Reply $reply) 
    {
        $reply->update(['validated' => true]);

        return response ()->json([],200);
    }
}
