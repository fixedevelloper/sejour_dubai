<?php


namespace App\Http\Controllers;


use App\Helper\ContactExport;
use App\Helper\InscriptionExport;
use App\Models\Contact;
use App\Models\Message;
use App\Models\RegisterOnline;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class backendController extends Controller
{
    function dashboard(){
        return view('bakend.dashboard',[

        ]);
    }
    function inscription(Request $request){
        if ($request->has('download')){
            return Excel::download(new InscriptionExport,'inscriptions.xlsx');
        }
        $inscriptions=RegisterOnline::query()->orderByDesc('id')->paginate(20);
        return view('bakend.inscription',[
            'inscriptions'=>$inscriptions
        ]);
    }
    function contacts(Request $request){
        if ($request->has('download')){
          return Excel::download(new ContactExport,'contacts.xlsx');
        }
        $contacts=Contact::query()->orderByDesc('id')->paginate(20);
        return view('bakend.contact',[
            'contacts'=>$contacts
        ]);
    }
    function emails(Request $request){
        $messages=Message::query()->orderByDesc('id')->paginate(20);
        return view('bakend.emails',[
            'messages'=>$messages
        ]);
    }
}
