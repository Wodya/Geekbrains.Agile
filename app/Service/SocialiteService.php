<?php declare(strict_types=1);
namespace App\Service;

use App\Models\User as ModelsUser;
use Auth;
use Laravel\Socialite\Contracts\User;

class SocialiteService {
    public function userLogin(User $user)
    {
        $email = $user->getEmail();
        $userData = ModelsUser::where('email', $email)->first();
        if($userData) {
            $userData->fill([
                'name'=>$user->getName(),
                'avatar'=>$user->getAvatar()
            ])->save();
            Auth::loginUsingId($userData->id);
        }

    }
}