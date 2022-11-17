<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MContact extends Model
{
    use HasFactory;
    public function contactUs($request)
    {
        return DB::table('m_contacts')
        ->insert([
            "username" => $request->username,
            "email" => $request->email,
            "message" => $request->message
        ]);
    }
}
