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
        $contact = new MContact();
        $contact->username = $request->username;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
    }
}
