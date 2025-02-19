<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use App\Models\Categorie;

class ContactController extends Controller
{
    public function index()
    {
        $content = Categorie::all();
        $request = [
            "items" => $content,
        ];
        return view("user.index", $request);
    }

    public function verifyForm(ContactFormRequest $request)
    {
        $phone = $request->input('phone.0') . $request->input('phone.1') . $request->input('phone.2');
        $contact = $request->only([
            'category_id',
            'first_name',
            'last_name',
            'gender',
            'email',
            'phone.0',
            'phone.1',
            'phone.2',
            'address',
            'building',
            'categry',
            'detail',
        ]);
        $contact['tel'] = $phone;
        return view('user.confirm', compact('contact'));
    }

    public function thanks(Request $request)
    {
        $form = [
            'category_id' => $request->category_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'tel' => $request->tel,
            'address' => $request->address,
            'building' => $request->building,
            'detail' => $request->detail,
        ];
        // dd($form);
        Contact::create($form);

        return view('user.thanks');
    }
}
