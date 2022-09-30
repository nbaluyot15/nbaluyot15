<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\ApiClientHelper;

class UserController extends Controller
{
    public function GetUserDetails(Request $request)
    {

        $slug = '';
        $link = '';
        
        $user_details = ApiClientHelper::getRequest($slug, $link);
        return $user_details;
    }
} 
