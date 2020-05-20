<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
    	$this->hasMany(Post::class);
    }
    
    public function author()
    {
    	$this->hasMany(User::class);
    }
    //разрешить коменты
    public function allow()
    {
    	$this->status = 1;
    	$this->save();
    	
    }
    //запретить коменты
    public function disallow()
    {
    	$this->status = 0;
    	$rhis->save();
    }
    //запретитьь и разрешить коментарии
    public function togglestatus()
    {
    	if($this->status =0)
    	{
    		return $this->allow();
    	}
    	    return $this->disallow();
    }
    
    public function remove()
    {
    	$this->delete();
    }

}
