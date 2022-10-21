<?php

namespace App\Http\Controllers;

use App\Models\MPrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $privacy_policys = MPrivacyPolicy::where('del_flg', 0)
            ->get();
        return inertia('PrivacyPolicy', ['privacy_policys' => $privacy_policys]);
    }
}
