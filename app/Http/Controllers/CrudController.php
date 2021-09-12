<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class CrudController extends Controller
{
    //

    public function insertInfo(Request $r){
        if($r->method()=="POST"){
            $r->validate([
                'name' => 'required',
                'contact' => 'required',
                'email' => 'required',
                'description' => 'required',
                'image' => 'required',
            ]);
                $image = time().".".$r->image->extension();
                $r->image->move(public_path('upload'),$image);

                $c = new Info();
                $c->name = $r->name;
                $c->contact = $r->contact;
                $c->email = $r->email;
                $c->description = $r->description;
                $c->image = $image;
                $c->save();

                return redirect('/');

        }
        return view('/addInfo');
    }

    public function info(){
        return view('/home', ['info'=>Info::all()]);
    }

    public function deleteInfo($id){
        Info::find($id)->delete();
        return redirect()->back();
    }

    public function updateInfo($id){
        $data['info'] = Info::find($id);
        return view('updateInfo',$data);

    }

    public function update(Request $r){
        $r->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'description' => 'required',

        ]);

            $c = Info::find($r->info_id);

            $c->name = $r->name;
            $c->contact = $r->contact;
            $c->email = $r->email;
            $c->description = $r->description;
           if($r->hasFile('image')){
                $image = time().".".$r->image->extension();
                $r->image->move(public_path('upload'),$image);
                $c->image = $image;
           }
            $c->save();

            return redirect('/');

    }
}
