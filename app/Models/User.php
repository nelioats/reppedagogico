<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'perfil',
        'email',
        'cpf',
        'telefone',
        'ip',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // public function setCpfAttribute($value)
    // {
    //     $this->attributes['cpf'] = $this->clearField($value);
    // }

    // public function setTelefoneAttribute($value)
    // {
    //     $this->attributes['telefone'] = $this->clearField($value);
    // }

    public function setPasswordAttribute($value)
    {
        if (empty($value)) {
            unset($this->attributes['password']);
            return;
        }

        $this->attributes['password'] = bcrypt($value);
    }

    public function getPrimeiroNome(){

        $nome =  explode(" ",Auth::user()->name);

        return $nome[0];

    }



    // private function clearField(?string $param)
    // {
    //     if (empty($param)) {
    //         return '';
    //     }
    //     return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    // }


}
