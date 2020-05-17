<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'name', 
        'email', 
        'password', 
        'username', 
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    // /**
    //  * The user repository implementation.
    //  *
    //  * @var UserRepository
    //  */
    // protected $users;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @param  UserRepository  $users
    //  * @return void
    //  */
    // public static function boot()
    // {
    //     parent::boot(); 
    
    //     static::created(function ($user) {
    //         $profile = Profile::create([
    //             'firstname'=> $user('firstname'),
    //             'lastname'=> $user('lastname'),
    //             'age'=> $user('age'),
    //             'height'=> $user('height'),
    //             'weight'=> $user('weight'),
    //             'gender_id'=> $user('gender_id'),
    //             'exercisebehavior_id'=> $user('exercisebehavior_id'),
    //             'user_id'=> auth()->id
    //         ]); 
    
    //         $user->profile()->save($profile); 
    //     }); 
    // }
    
    // /**
    //  * Show the profile for the given user.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function show($id)
    // {
    //     $user = $this->users->find($id);

    //     return view('profile.show', ['user' => $user]);
    // }


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function profile(){
        return $this->hasOne('App\Profile');
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
