<?php

namespace App;

use http\Env\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Storage;
class User extends Authenticatable
{
    use Notifiable;
    const IS_BANNED = 1;
    const IS_ACTIVE = 0;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','file','password'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //связываем пост один ко многим
    public function posts()
    {
        $this->hasMany(Post::class);
    }

    //связываем коменты один ко многис
    public function comments()
    {
        $this->hasMany(Comment::class);
    }

    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->save();

        return $user;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        if ($fields['password'] != null) {
            $this->password = bcrypt($fields['password']);
        }
        $this->save();
    }

    public function remove()
    {
        Storage::delete('uploads/' . $this->avatar);
        $this->delete();
    }

    public function removeAvatar()
    {
        Storage::delete('uploads/' . $this->image);
        $this->delete();
    }

    public function uploadAvatar($image)
    {
        if ($image == null) {
            return;
        }

        $this->removeAvatar();

        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->avatar = $filename;
        $this->save();
    }

    public function getAvatar()
    {
        if ($this->avatar == null) {
            return '/blog/public/uploads/no_user_image.png';
        }
        return '/blog/public/uploads/' . $this->avatar;
    }

    public function makeAdmin()
    {
        $this->is_admin = 1;
        $this->save();
    }

    public function makeNormal()
    {
        $this->is_admin = 0;
        $this->save();
    }

    public function toggleAdmin($value)
    {
        if ($value == null) {
            return $this->makeNormal();
        }
        return $this->makeAdmin();
    }

    public function ban()
    {
        $this->status = Users::IS_BANNED;
        $this->save();
    }

    public function unban()
    {
        $this->status = Users::IS_ACTIVE;
        $this->save();
    }

    public function toggleBan($value)
    {
        if ($value == null) {
            return $this->ban();
        }

        return $this->unban();
    }

    public function getImage()
    {
        if ($this->avatar == null) {
            return '/blog/public/uploads/no_user_image.png';
        }
        return '/blog/public/uploads/' . $this->avatar;
    }

    public function generatePassword($password)
    {
        if ($password != null) {
            $this->password = bcrypt($password);
            $this->save();
        }
    }
    //загружаем аватар

}
