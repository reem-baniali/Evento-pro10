<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Event;
use App\Models\User;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Category;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function backendindex()
    {
        $categories=Category::all();
        $events=Event::all();
        $users=User::all();

        return view('backend.manage_admin',compact('categories','events','users'));
    }
    public function index()
    {
        $categories=Category::all();
        $users=User::all();

        return view('publicSite.createEvent',compact('categories','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function backendcreate()
    {
        return view('backend.manage_admin');
    }
    public function create()
    {
        return view('publicSite.createEvent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function backendstore(StoreAdminRequest $request)
    {
        
        // $this->validate($request,[
        //     'name'=>'required|max:250',
        //     'email'=>'required|max:250',
           
        //   ]);
        if($request->hasFile('image1')){
            $file=$request->image1;
            $new_file1=time().$file->getClientOriginalName();
            $file->move('storage/event_images/',$new_file1);
        }
        if($request->hasFile('image2')){
            $file=$request->image2;
            $new_file2=time().$file->getClientOriginalName();
            $file->move('storage/event_images/',$new_file2);
        }
        if($request->hasFile('image3')){
            $file=$request->image3;
            $new_file3=time().$file->getClientOriginalName();
            $file->move('storage/event_images/',$new_file3);
        }
          Event::create([
              "name"=>$request->name,
              "category_id"=>$request->category,
              "user_id"=>$request->user,
              "description"=>$request->description,
              "speaker"=>$request->speaker,
              "city"=>$request->city,
              "location"=>$request->location,
              "date"=>$request->date,
              "start_time"=>$request->start_time,
              "end_time"=>$request->end_time,
              "seats"=>$request->seats,
              "price"=>$request->price,
              "contact_email"=>$request->contact_email,
              "contact_phone"=>$request->contact_phone,
              "image1" => 'storage/event_images/' . $new_file1,
              "image2" => 'storage/event_images/' . $new_file2,
              "image3" => 'storage/event_images/' . $new_file3,

              

         ]);
         return redirect()->back();
    }
    public function store(StoreAdminRequest $request)
    {
        
        // $this->validate($request,[
        //     'name'=>'required|max:250',
        //     'email'=>'required|max:250',
           
        //   ]);
        if($request->hasFile('image1')){
            $file=$request->image1;
            $new_file1=time().$file->getClientOriginalName();
            $file->move('storage/event_images/',$new_file1);
        }
        if($request->hasFile('image2')){
            $file=$request->image2;
            $new_file2=time().$file->getClientOriginalName();
            $file->move('storage/event_images/',$new_file2);
        }
        if($request->hasFile('image3')){
            $file=$request->image3;
            $new_file3=time().$file->getClientOriginalName();
            $file->move('storage/event_images/',$new_file3);
        }
          Event::create([
              "name"=>$request->name,
              "category_id"=>$request->category,
              "user_id"=>$request->user,
              "description"=>$request->description,
              "speaker"=>$request->speaker,
              "city"=>$request->city,
              "location"=>$request->location,
              "date"=>$request->date,
              "start_time"=>$request->start_time,
              "end_time"=>$request->end_time,
              "seats"=>$request->seats,
              "price"=>$request->price,
              "contact_email"=>$request->contact_email,
              "contact_phone"=>$request->contact_phone,
              "image1" => 'storage/event_images/' . $new_file1,
              "image2" => 'storage/event_images/' . $new_file2,
              "image3" => 'storage/event_images/' . $new_file3,

              

         ]);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function backendshow(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function backendedit($id)
    {
        $event=Event::find($id);
        $categories=Category::all();
        return view('backend.updates.admin_update',compact('event','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function backendupdate(UpdateAdminRequest $request, $id)
    {
        $event=Event::find($id);
       
        if($request->hasFile('image1')){
            $file1=$request->image1;
            $new_file1=time().$file1->getClientOriginalName();
            $file1->move('storage/event_images/',$new_file1);
            $event->image1='storage/event_images/'.$new_file1;
        }
        if($request->hasFile('image2')){
            $file2=$request->image2;
            $new_file2=time().$file2->getClientOriginalName();
            $file2->move('storage/event_images/',$new_file2);
            $event->image2='storage/event_images/'.$new_file2;
        }
        if($request->hasFile('image3')){
            $file3=$request->image3;
            $new_file3=time().$file3->getClientOriginalName();
            $file3->move('storage/event_images/',$new_file3);
            $event->image3='storage/event_images/'.$new_file3;
        }

        $event->name=$request->name;
        $event->category_id=$request->category;
        $event->description=$request->description;
        $event->speaker= $request->speaker;
        $event->city=$request->city;
        $event->location=$request->location;
        $event->date=$request->date;
        $event->start_time=$request->start_time;
        $event->end_time=$request->end_time;
        $event->seats =$request->seats;
        $event->price=$request->price;
        $event->contact_email=$request->contact_email;
        $event->contact_phone=$request->contact_phone;

        $event->update();
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function backenddestroy($id)
    {
        $event=Event::find($id);
        $event->destroy($id);

        return redirect()->route('event.index');
    }
}
