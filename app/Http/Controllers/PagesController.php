<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
   public function home()
   {
      $villes=Ville::all();
      $categories=Category::all();
      $posts=Post::all();
      
    return view('user_pages.main',['villes'=>$villes,'categories'=>$categories,'posts'=>$posts]);
   }
   // public function selectform(Request $req)
   // {
   
      
   //    $villes=Ville::where('name',$req->villeSelect)->get();
   //    $categories=Category::where('name',$req->categorieSelect)->get();
   //    $posts=Post::where('name', 'like', '%' . $req->searchselect . '%')->get();
   //    $users=User::all();
   //    return view('user_pages.selectform',['villes'=>$villes,'categories'=>$categories,'posts'=>$posts,'users'=>$users]);

   // }
   
   public function searchform( Request $req)
   {
      // $villes=Ville::where('name',$req->villeSelect)->get();
      // $categories=Category::where('name',$req->categorieSelect)->get();
      // $posts=Post::where('name', 'like', '%' . $req->searchselect . '%')->get();()
      $posts=Post::where(function($q) use($req) {
         //ville
         if($req->villeSelect)
            $q->where('ville_id', $req->villeSelect);

         //category
         if($req->categorieSelect)
            $q->where('categorie_id', $req->categorieSelect);
      })
      ->where('name', 'like', '%'.$req->searchselect.'%')->get();
     return view('user_pages.selectform',['posts'=>$posts]);
   }

   public function filtreCategorie($id)
   {
      $categories=Category::all();
     // $posts=Post::find($id)->get();
       $posts=Post::where('categorie_id',$id)->get();
      return view('user_pages.filtreCategorie',['posts'=>$posts,'categories'=>$categories]);

   }

   
   public function allListings()
   {
      
      $villes=Ville::all();
      $categories=Category::all();
      $posts=Post::all();
      $users=User::all();
    return view('user_pages.listings',['villes'=>$villes,'categories'=>$categories,'posts'=>$posts,'users'=>$users]);
   }
   public function bookmarkPost(Request $req)
   {
      $user=User::find(Auth::user()->id);

      $user->canlike()->attach(Auth::user()->id, ["post_id"=>$req->post_id]);
      return back();

   }



   public function detaillisting($id)
   {
      $posts=Post::find($id);
      $users=User::all();
      return view('user_pages.detaillisting',['posts'=>$posts,'users'=>$users]);

   }

   public function blog()
   {
    return view('user_pages.blog');
   }

   public function FAQ()
   {
    return view('user_pages.FAQ');
   }

   public function contact()
   {
    return view('user_pages.contact');
   }
   
}