<?php

namespace App\Policies;

use App\User;
use App\models\Jabatan;
use Illuminate\Auth\Access\HandlesAuthorization;

class MasterdataPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function master_data(User $user){
       return $user->level_id === 1;
    }
}