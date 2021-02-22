<?php 

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Contact; 
use Mail; 

class ContactController extends Controller { 

      public function getContact() { 

       return view('contact'); 
      } 

     public function saveContact(Request $request) { 
        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required|email',
            'msg' => 'required'
           
        ]);

        $contact = new Contact;

        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->msg = $request->msg;
       
        $contact->save();

        \Mail::send('contact_email',
             array(
                 'nom' => $request->get('nom'),
                 'email' => $request->get('email'),
                 'msg' => $request->get('msg'),
                 
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('samiaelle24799@gmail.com');
               });

          return back()->with('success', 'merci de nous contacter');

    }
}