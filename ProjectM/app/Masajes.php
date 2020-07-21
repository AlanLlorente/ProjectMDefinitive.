<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Masajes extends Model
{
    use Notifiable;

    /**
     * The attribues that are mass asignable
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'tipo', 'fecha_cita', 'calculated_end', 'observaciones'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha_cita' => 'datetime',
        'calculated_end' => 'datetime'
    ];

    public function path()
    {
        return "/masajes/{$this->id}";
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
