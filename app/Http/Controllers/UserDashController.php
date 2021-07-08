<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Category;
use App\Models\Post;
use App\Models\Status;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;

class UserDashController extends Controller
{
   public function dashboard()
   {

   $annonces=Post::all();
   $villes=Ville::all();
   $categories=Category::all();
   $users=User::all();
   if(Auth::user()->isadminn==1){
      return view('user_pages.user_dashboard.dashboard',['annonces'=>$annonces,'villes'=>$villes,'categories'=> $categories,'users'=>$users]);

   }
   }
   public function dashboardlayout()
   {

   $state=Status::all();
   $annonces=Post::all(); 
  
    return view('layouts.dashlayout',['annonces'=>$annonces,'state'=>$state]);
   }
   public function addlisting()
   {
      $villes=Ville::all();
     
    return view('user_pages.user_dashboard.addlisting',['villes'=>$villes]);
   }


   public function submitlisting(Request $req)
   {
      $annonce=new Post();
      $annonce->name=$req->name;
      $annonce->description=$req->description;
      $annonce->prix=$req->prix;
      $annonce->status=0;
      $annonce->ville_id=$req->ville_id;
      $annonce->categorie_id=$req->categorie_id;
      $annonce->user_id= Auth::user()->id;
      if($req->hasFile('image'))
      {
          $path=$req->image->store('photos_post');
      }
      
      $annonce->image= isset($req->image) ? $path : $annonce->image;
      $annonce->save();
      $validation=new Status();
      $validation;

       return redirect('/');
    
   }


   
   public function userListings()
   {
      $posts=Post::where("user_id",Auth::user()->id)
     -> where("status",1)->get();
      $villes=Ville::all();
      $users=User::all();
     
    return view('user_pages.user_dashboard.userListings',['posts'=>$posts,'villes'=>$villes,'users'=>$users]);
   }


   public function userListingsDelete($id){
   $posts= Post::find($id);
   $posts->delete();
   return redirect()->back();
   }
   

   public function bookmarks()
   {
      $posts=Post::all();
      $users=User::all();

    return view('user_pages.user_dashboard.bookmarks',['posts'=>$posts,'users'=>$users]);
   }

   public function bookmarkDelete(Request $req,$id)
   {
      
      $post=Post::find($id);
        
      $post->haslike()->wherePivot('id',$req->pivot)->detach(Auth::user()->id);
      return back();

      
   }

   public function userProfile()
   {
    return view('user_pages.user_dashboard.userProfile');
   }

   public function changePassword()
   {
    return view('user_pages.user_dashboard.changePassword');
   }

   public function accept_post($id)
   {
 
      $post=new Post;
      $post=Post::find($id);
      $post->status=1;
      $post->update();

      return redirect('/');
   }

   public function refuse_post($id)
   {
      
      $post=new Post;
      $post=Post::find($id);
      $post->status=0;
      $post->update();

      return redirect('/');
   }
   
public function updateListing($id)
{
   $annonces=Post::find($id);
   $villes=Ville::all();
return view('user_pages/user_dashboard/updateListing',['villes'=>$villes, "annonces"=>$annonces]);
}

public function editListing( Request $req ,$id)
{
   $annonce=Post::find($id);
  $annonce->name=$req->name;
  $annonce->description=$req->description;
  $annonce->prix=$req->prix;
  $annonce->ville_id=$req->ville_id;
  $annonce->categorie_id=$req->categorie_id;
  $annonce->user_id= Auth::user()->id;
  if($req->hasFile('image'))
  {
      $path=$req->image->store('photos_post');
  }
  
  $annonce->image= isset($req->image) ? $path : $annonce->image;
  $annonce->update();
   return redirect('/');

}

public function addProfile(Request $req ,$id)
{
  $profile=User::find($id);
  $profile->name=$req->name;
  $profile->email=$req->email;
  if($req->hasFile('image'))
  {
      $path=$req->image->store('profile_image');
  }
  
  $profile->image= isset($req->image) ? $path : $profile->image;
  $profile->phone=$req->phone;
  $profile->ville=$req->ville;
  $profile->adresse=$req->adresse;
  $profile->facebook=$req->facebook;
  $profile->save();
  return back();
}
public function submitPassword(Request $req)
{
   
  // $users=Auth::user()->id;
// if(!(Hash::check( $req->get('currentPassword'),auth::user()->password ))){
//   return back();
// }
// if(strcmp($req->get('currentPassword'),$req->get('password'))==0){
//    return back();
// }
// $req->validate([
//    'currentPassword'=>'required',
//    'password'=>'required|string|min:6|confirmed'
// ]);
// $user = Auth::user();
// $user->password=bcrypt($req->get('password'));
// $user->save();
// return back();
if(Hash::check( $req->get('currentPassword'),auth::user()->password )){


$req->validate([
   'currentPassword' => ['required'],
   'password' => ['required'],
   'confirmed' => ['same:password'],
]);

User::find(auth()->user()->id)->update(['password'=> Hash::make($req->password)]);

return back();
}
}
public function resetpassword(Request $request)
{
   // $request->validate(['email' => 'required|email']);

   // $status = Password::sendResetLink(
   //     $request->only('email')
   // );

   // return $status === Password::RESET_LINK_SENT
   //             ? back()->with(['status' => __($status)])
   //             : back()->withErrors(['email' => __($status)]);
   return view('resetpassword');

   
}



}