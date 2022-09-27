<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function form()
    {
        return view("form");
    }

    public function form_post(ContactRequest $request)
    {
        $input = $request->all();
        // $input->fullname = $request->familyname.$request->name; //migration変更するかも //できない
        unset($input['_token']);
        $request->session()->put("form_input", $input);
        return redirect(route('confirm_menu'));
    }

    public function confirm(Request $request)
    {
        $input = $request->session()->get("form_input");

        if(!$input){
			return redirect(route("form_menu"));
		}
        return view("confirm",["input" => $input]);
    }

    public function create(Request $request)
    {
        $input = $request->session()->get("form_input");

        if($request->has("back")){
            return redirect(route("form_menu"))->withInput($input);
        }

        if(!$input){
			return redirect(route("form_menu"));
		}
        
        unset($input['_token']);

        $form = new Contact;
        $form->familyname = $input->familyname;
        $form->name = $input->name;
        $form->gender = $input->gender;
        $form->email = $input->email;
        $form->postcode = $input->postcode;
        $form->address = $input->address;
        $form->building_name = $input->building_name;
        $form->option = $input->option;
        //失敗　Attempt to read property "familyname" on array
        //fullnameない
        $form->save();
        $request->session()->forget("form_input");
        return redirect('/thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }

    // この先間に合わない可能性大
    // public function management(Request $request)
    // {
        
    // }

    // public function research(Request $request)
    // {
        
    // }

    // public function delete(Request $request)
    // {
        
    // }
}
