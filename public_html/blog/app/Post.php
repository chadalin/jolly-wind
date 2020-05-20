<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Tag;
use App\Category;

class Post extends Model
{
	use Sluggable;
	const IS_DRAFT = 0;
	const IS_PUBLIC = 1;
	protected $fillable = ['title','content', 'date'];
	
	
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    
    public function author()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
    
    public function tags()
    {
    	return $this->belongsToMany(
    		 Tag::class,
    		 'post_tags',
    		 'post_id',
    		 'tag_id'
    		
    		
    		
    		);
    }
    //меняум урля на латиницу
     public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    //добавляем новый пост
    public static function add($fields)
    {
    	$post = new static;
    	$post->fill($fields);
    	$post->user_id = 1;
    	$post->save();

    	return $post;
    }
    //редактируем пост по id
    public function edit($fields)
    {
    	$this->fill($fields);
    	$this->save();
    }
    //удаляем пост
    public function remove()
    {
    	$this->removeImage();
    	$this->delete();
    }
    
    public function removeImage()
    {
    	if ($this->image !=null)
        {
    	Storage::delete('uploads/'.$this->image);
        }
    }
    //загружаем картинку
    public function uploadImage($image)
    {
    	if($image==null){return;}
        $this->removeImage();
    	//$this->image = $filename;
    	$filename = str_random(10).'.'. $image->extension();
    	$image->storeAs('uploads',$filename);
    	$this->image = $filename;
    	$this->save();
    }
    //добавляем категорию
    public function setCategory($id)
    {
    	if($id ==null){return;}
    	$this->category_id = $id;
    	$this->save();
    }
    
    public function getCategoryID()
    {
        return $this->category != null ? $this->category->id : null;
    }
    //сохраняем теги
    public function setTags($ids)
    {
    	if($ids == null){return;}

    	$this->tags()->sync($ids);
    }
    
    public function setDraft()
    {
    	$this->status=Post::IS_DRAFT;
    	$this->save();
    }
    
    public function setPublic()
    {
    	$this->status=Post::IS_PUBLIC;
    	$this->save();
    }
    
    public function toggleStatus($value)
    {
    	if($value==null)
    	{
    	  return $this->setDraft();
    		
    	}else{
    		return $this->setPublic();
    	}
    }
    
    public function setFeatured() 
    {
    	$this->is_featured=1;
    	$this->save();
    }
    
    public function setStandart()
    {
    	$this->status=1;
    	$this->save();
    }
     public function toggleFeatured($value) 
    {
    	if($value==null)
    	{
    	  return $this->setStandart();
    		
    	}else{
    		return $this->setFeatured();
    	}
    }
    
    public function getImage()
    {
    	if($this->image ==null){
    	return '/blog/public/uploads/no_image.png';
    }
    return '/blog/public/uploads/'. $this->image ;
} 

 public function setDateAttribute($value )

{
	$date = Carbon::createFromFormat('m/d/y',$value)->format('Y-m-d');
	$this->attributes['date']= $date;
}

public function getCategoryTitle()
{
	if ($this->category != null)
	{
		return $this->category->title;
	}
	
	return 'net kategorii';
}

public function getTagsTitle()
{
	if (!$this->tags->isEmpty())
	{
	return implode(', ', $this->tags->pluck('title')->all());
	}
	
	return 'нет тегов';
}

}