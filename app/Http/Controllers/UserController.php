<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    //
    public function adduser () {

           return view ('user.add_user');
    }
    public function add (Request $req)
    {
         //$data = $req->all();
         //$user = User::create($data);
             $user=new User;
             $user->name=$req->name;
             $user->phone_number=$req->phone_number;
             $user->email=$req->email;
             $user->fonction=$req->fonction;
             $user->solde_conge=$req->solde_conge;
             $user->role=$req->role;
             $user->password=Hash::make($req->password);
             $user->image=$req->image;

             //if ($req->hasfile('image'))
             //{
                 //$file=$req->file('image');
                 //$extention=$file->getClientOriginalExtension();
                 //$filename=time().'.'.$extention;
                 //$file->move('/public/uploads', $filename);
                 //$user->image=$filename;
            // }
             //$user->save();

            return redirect()->back()->with('status','user added succesfully') ;
     }

     public function display(){

        $users = User::all()  ;

          return view('user.users_list', compact('users'));
     }
     public function profile(){

        $users = User::all()  ;

          return view('user.user_profile');
     }

     public function show(User $users)

        {
              return view('user.user_detail', compact('users'));
        }

      public function edit(User $users)

        {
        return view('user.update_user', compact('users'));
        }
        public function editUser(User $users)

        {
        return view('user.update_user_profile', compact('users'));
        }

        public function update(Request $req)
        {
          //dd('gg');
                 $users=User::find($req->id);
                 $users->name=$req->name;
                 $users->phone_number=$req->phone_number;
                 $users->email=$req->email;
                 $users->fonction=$req->fonction;
                 $users->solde_conge=$req->solde_conge;
                 $users->role=$req->role;
                 $users->password=$req->password;
                 $users->image=$req->image;

                 $users->save();

                 return redirect('/user/display');
         }
         public function updateUser(Request $req)
        {

                 $users=User::find($req->id);
                 $users->name=$req->name;
                 $users->phone_number=$req->phone_number;
                 $users->fonction=$req->fonction;

                 $users->image=$req->image;

                 $users->save();

                 return redirect('/user/profile');
         }

         public function destroy(User $users)

            {
            $users->delete();
            return redirect('/user/display');
            }



    }

