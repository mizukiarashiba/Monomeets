<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'meetsid', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function monos()
    {
        return $this->hasMany(Mono::class);
    }
    
    
    public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimestamps();
    }
    
    
    
    
    public function follow($userId)
{
    // 既にフォローしているかの確認
    $exist = $this->is_following($userId);
    // 自分自身ではないかの確認
    $its_me = $this->id == $userId;

    if ($exist || $its_me) {
        // 既にフォローしていれば何もしない
        return false;
    } else {
        // 未フォローであればフォローする
        $this->followings()->attach($userId);
        return true;
    }
}

public function unfollow($userId)
{
    // 既にフォローしているかの確認
    $exist = $this->is_following($userId);
    // 自分自身ではないかの確認
    $its_me = $this->id == $userId;

    if ($exist && !$its_me) {
        // 既にフォローしていればフォローを外す
        $this->followings()->detach($userId);
        return true;
    } else {
        // 未フォローであれば何もしない
        return false;
    }
    }
    
    public function is_following($userId) {
        return $this->followings()->where('follow_id', $userId)->exists();
    }
    
    
    
    public function feed_monos()
    {
        $follow_user_ids = $this->followings()-> pluck('users.id')->toArray();
        $follow_user_ids[] = $this->id;
        return Mono::whereIn('user_id', $follow_user_ids);
        
        $favorite_user_ids = $this->favoritings()-> pluck('users.id')->toArray();
        $favorite_user_ids[] = $this->id;
        return Mono::whereIn('user_id', $favorite_user_ids);
    }
    
    
    
     public function favoritings()
    {
        return $this->belongsToMany(Mono::class, 'mono_favorite', 'mono_id', 'favorite_id')->withTimestamps();
    }
    
    
    
    
    public function favorite($monoId)
{
    // 既にフォローしているかの確認
    $exist = $this->is_favoriting($monoId);
    // 自分自身ではないかの確認
    
    if ($exist) {
        // 既にフォローしていれば何もしない
        return false;
    } else {
        // 未フォローであればフォローする
        $this->favoritings()->attach($monoId);
        return true;
    }
}

public function unfavorite($monoId)
{
    // 既にフォローしているかの確認
    $exist = $this->is_favoriting($monoId);
    // 自分自身ではないかの確認
    

    if ($exist) {
        // 既にフォローしていればフォローを外す
        $this->favoritings()->detach($monoId);
        return true;
    } else {
        // 未フォローであれば何もしない
        return false;
    }
}

public function is_favoriting($monoId) {
    return $this->favoritings()->where('favorite_id', $monoId)->exists();
}



  
    public function want($monoId)
{
    // 既にフォローしているかの確認
    $exist = $this->is_wanting($monoId);
    // 自分自身ではないかの確認
    
    if ($exist) {
        // 既にフォローしていれば何もしない
        return false;
    } else {
        // 未フォローであればフォローする
        $this->wantings()->attach($monoId);
        return true;
    }
}

public function unwant($monoId)
{
    // 既にフォローしているかの確認
    $exist = $this->is_wanting($monoId);
    // 自分自身ではないかの確認
    

    if ($exist) {
        // 既にフォローしていればフォローを外す
        $this->wantings()->detach($monoId);
        return true;
    } else {
        // 未フォローであれば何もしない
        return false;
    }
}

public function is_wanting($monoId) {
    return $this->wantings()->where('want_id', $monoId)->exists();
}



  public function wantings()
    {
        return $this->belongsToMany(Mono::class, 'mono_want', 'user_id', 'want_id')->withTimestamps();
    }
    

    public function wanters()
    {
        return $this->belongsToMany(Mono::class, 'mono_want', 'want_id', 'user_id')->withTimestamps();
    }




}
