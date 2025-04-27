<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactMessageController extends Controller
{
    public function index()
{
    $messages = Contact::latest()->get();
    return view('admin.contact.index', compact('messages'));
}
public function destroy(Contact $contact)
{
    $contact->delete();
    Alert::success("data deleted succesfully");
    return back();


}
public function show($id)
{
    $message = Contact::findOrFail($id);

    // If the message is unseen, mark it as seen
    if (!$message->status) {
        $message->status = 1;
        $message->save();
    }

    return view('admin.contact.show', compact('message'));
}

}
