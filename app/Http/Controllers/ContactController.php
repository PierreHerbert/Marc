<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Contact;
  
class ContactController extends Controller
{


    // retourne la vue contact
    public function index()
    {
        return view('contact');
    }


    // fonction qui enregistre l'email envoyer
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Merci pour votre message ! Nous vous contacterons dans les plus brefs délais.']);
    }
}