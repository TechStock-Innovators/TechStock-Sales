<?php

namespace App\helpers;

use App\core\Helpers;
use App\models\Users;

class Authenticator extends Helpers
{
    public function validate(string $user, string $password = "")
    {
        $Users = $this->model("Users");
        $user = $Users::findByUser($user);
        if($user[0]["password"] == $password)
        {
            return true;
        }
        return false;
    }
}

// array(1) { 
//     [0]=> array(5) { 
//         ["id"]=> int(11) 
//         ["user"]=> string(11) "kylejimenez" 
//         ["password"]=> string(10) "nOC941IeN!" 
//         ["nome"]=> string(12) "Kyle Jimenez" 
//         ["created_at"]=> string(10) "2024-07-25" 
//     } 
// }