<?php


namespace App\Http\Controllers;



use App\Helper\Helper;
use App\Models\Contact;
use App\Models\Message;
use App\Models\RegisterOnline;
use Flasher\Prime\Flasher;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\IpUtils;

class HomeController extends Controller
{

    public function home()
    {

        return view('home', [

        ]);
    }
    public function about()
    {

        return view('about', [

        ]);
    }
    public function contact(Request $request)
    {
        //Helper::mailajet();
        if ($request->method()=='POST'){
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'message' => 'required',
                'email' => 'required|email'
            ]);
            if ($validator->fails()) {
                flash()->error('Operation Failed');
                return back();
            }
            $recaptcha = $request->input('g-recaptcha-response');

            if (is_null($recaptcha)) {
                flash()->error("  Please complete the recaptcha again to proceed. ");
                return redirect()->back();
            }

            $url = "https://www.google.com/recaptcha/api/siteverify";
            $resp=new Client();
            $params = [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $recaptcha,
                'remoteip' => IpUtils::anonymize($request->ip())
            ];
           // $response= $resp->post($url, $params);

            //$result = json_decode($response);

            DB::beginTransaction();
            $contact=Contact::query()->firstWhere(['email'=>$request->email]);
            if (is_null($contact)){
                $contact=new Contact();
                $contact->email=$request->email;
            }
            $contact->name=$request->name;
            $contact->save();
            $message=new Message();
            $message->message=$request->message;
            $message->contact_id=$contact->id;
            $message->save();
            Helper::send_contact([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message
            ]);
            DB::commit();
            flash()->success('Operation completed successfully');
        }
        return view('contact', [

        ]);
    }
    public function comingsoon()
    {

        return view('comingsoon', [

        ]);
    }
    public function service()
    {

        return view('service', [

        ]);
    }
    public function package()
    {
        $pakages=[

        ];
        return view('package', [

        ]);
    }
    public function procedure()
    {

        return view('procedure', [

        ]);
    }
    public function package_investor()
    {

        return view('services.investor', [

        ]);
    }
    public function etudiant_card()
    {

        return view('services.etudiant_card', [

        ]);
    }
    public function family_card()
    {

        return view('services.family_card', [

        ]);
    }
    public function freelance_card()
    {

        return view('services.freelance_card', [

        ]);
    }
    public function professional_card()
    {

        return view('services.proffessionel_card', [

        ]);
    }
    public function retraite_card()
    {

        return view('services.retraite_card', [

        ]);
    }
    public function representation_congo()
    {

        return view('representation_congo', [

        ]);
    }
    public function representation_rdc()
    {

        return view('representation_rdc', [

        ]);
    }
    public function faq()
    {

        return view('faq', [

        ]);
    }
    public function formation()
    {

        return view('formation', [

        ]);
    }
    function registerFormation(Request $request){
        if ($request->method()=='POST'){
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'phone' => 'required',
                'service' => 'required',
                'email' => 'required|email'
            ]);
            if ($validator->fails()) {
                flash()->error('Operation echec.');
                return back()->with($validator->errors()->getMessages());
            }
            DB::beginTransaction();
            $contact=Contact::query()->firstWhere(['email'=>$request->email]);
            if (is_null($contact)){
                $contact=new Contact();
                $contact->email=$request->email;
            }
            $contact->name=$request->name;
            $contact->save();
            $register=new RegisterOnline();
            $register->date_born=$request->date_born;
            $register->service=$request->service;
            $register->contact_id=$contact->id;
            $register->save();
            Helper::send_contact([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message
            ]);
            DB::commit();
            flash()->success('Operation completed successfully');
        }
        return view('form.register');
    }
    function registerNewletter(Request $request){
        //toastr()->success('Data has been saved successfully!');
        if ($request->method()=='POST'){
            $validator = Validator::make($request->all(), [
                'email' => 'required|email'
            ]);
            if ($validator->fails()) {
                flash()->error('Adresse email non valide');
                return back()->with($validator->errors()->getMessages());
            }
            DB::beginTransaction();
            $contact=Contact::query()->firstWhere(['email'=>$request->email]);
            if (is_null($contact)){
                $contact=new Contact();
                $contact->email=$request->email;
            }
            $contact->name=$request->name;
            $contact->save();
            Helper::send_contact([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message
            ]);
            DB::commit();
            flash()->success('Operation completed successfully');
        }
        return back();
    }
}
