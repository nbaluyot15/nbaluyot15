<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\ApiClientHelper;

class UserController extends Controller
{
    public function GetUserDetails(Request $request)
    {
        $agent_id = $request->input('agent_id');
        $user_id = $request->input('user_id');

        $slug = '?AgentId='.$agent_id.'&UID='.$user_id;
        $link = '/api/user/GetUIDUsers';
        
        $user_details = ApiClientHelper::getRequest($slug, $link);
        return $user_details;
    }
} 
