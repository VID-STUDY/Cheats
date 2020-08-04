<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{


    public function update(Request $request)
    {
      $validatedData = $request->validate([
        'name' => ['required', 'string', 'max:255'],

        ]);

        if($request->get('password')){
         $contact = User::find($request->get('user_id'));
         $contact->name =  $request->get('name');
         $contact->password = $request->get('password');
       }else{
         $contact = User::find($request->get('user_id'));
         $contact->name =  $request->get('name');

         }

         $contact->save();
         return view('pages/settings');
    }


}
