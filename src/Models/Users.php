<?php

namespace Fin\Models;

use Illuminate\Database\Eloquent\Model;
use Jasny\Auth\User as JasnyAuthUser;

class Users extends Model implements JasnyAuthUser, UserInterface
{
    protected $table = 'users';

    //Mass Assignment
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password'
    ];

    /**
     * Get user id
     *
     * @return int|string
     */
    public function getId():int
    {
        return (int)$this->id;
    }

    /**
     * Get user's username
     *
     * @return string
     */
    public function getUsername():string
    {
        return $this->email;
    }

    /**
     * Get user's hashed password
     *
     * @return string
     */
    public function getHashedPassword():string
    {
        return $this->password;
    }

    /**
     * Event called on login.
     *
     * @return boolean  false cancels the login
     */
    public function onLogin()
    {
        // TODO: Implement onLogin() method.
    }

    /**
     * Event called on logout.
     *
     * @return void
     */
    public function onLogout()
    {
        // TODO: Implement onLogout() method.
    }

    public function getFullname(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}