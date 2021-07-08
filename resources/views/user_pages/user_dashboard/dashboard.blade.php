@extends('layouts.dashlayout')
@section('dashcontent')
<div class="utf_dashboard_content"> 
    <div id="titlebar" class="dashboard_gradient">
      <div class="row">
        <div class="col-md-12">
          <h2>Dashboard</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index_1.html">Home</a></li>
              <li>Dashboard</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="notification success closeable margin-bottom-30">
          <p>You are currently signed in as <strong>Jonathon Cristy</strong> Has Been Approved!</p>
          <a class="close" href="#"></a> 
        </div>
      </div>
    </div>
    
    <div class="row"> 
      <div class="col-lg-2 col-md-6">
        <div class="utf_dashboard_stat color-1">
          <div class="utf_dashboard_stat_content">
            <h4>0</h4>
            <span>Nombre des annonces</span>
          </div>
          <div class="utf_dashboard_stat_icon"><i class="im im-icon-Map2"></i></div>
        </div>
      </div>
      
      <div class="col-lg-2 col-md-6">
        <div class="utf_dashboard_stat color-2">
          <div class="utf_dashboard_stat_content">
            <h4>0</h4>
            <span>Les annonces accepté</span>
          </div>
          <div class="utf_dashboard_stat_icon"><i class="im im-icon-Add-UserStar"></i></div>
        </div>
      </div>
      
      <div class="col-lg-2 col-md-6">
        <div class="utf_dashboard_stat color-3">
          <div class="utf_dashboard_stat_content">
            <h4>0</h4>
            <span>Les annonces refusé</span>
          </div>
          <div class="utf_dashboard_stat_icon"><i class="im im-icon-Align-JustifyRight"></i></div>
        </div>
      </div>
      
      <div class="col-lg-2 col-md-6">
        <div class="utf_dashboard_stat color-4">
          <div class="utf_dashboard_stat_content">
            <h4>572</h4>
            <span>New Feedbacks</span>
          </div>
          <div class="utf_dashboard_stat_icon"><i class="im im-icon-Diploma"></i></div>
        </div>
      </div>
  
      <div class="col-lg-2 col-md-6">
        <div class="utf_dashboard_stat color-5">
          <div class="utf_dashboard_stat_content">
            <h4>572</h4>
            <span>Total Views</span>
          </div>
          <div class="utf_dashboard_stat_icon"><i class="im im-icon-Eye-Visible"></i></div>
        </div>
      </div>
      
      <div class="col-lg-2 col-md-6">
        <div class="utf_dashboard_stat color-6">
          <div class="utf_dashboard_stat_content">
            <h4>572</h4>
            <span>Total Reviews</span>
          </div>
          <div class="utf_dashboard_stat_icon"><i class="im im-icon-Star"></i></div>
        </div>
      </div>
    </div>
 
      <div class="col-lg-12 col-md-12 mb-4">
        <div class="utf_dashboard_list_box table-responsive recent_booking">
          <h4>Les annonces</h4>
          <div class="dashboard-list-box table-responsive invoices with-icons">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Ville</th>
                  <th>Categoie</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($annonces as $annonce)
                <tr>
                  <td>1</td>
                  <td><img alt="" class="img-fluid rounded-circle shadow-lg" src="{{asset("storage/".$annonce->image)}}" width="50" height="50"></td>
                  <td>{{$annonce->name}}</td>
                  @foreach ($users as $user)
                  @if ($annonce->user_id == $user->id)

                  <td>{{$user->email}}</td>
                  @endif

                  @endforeach
                  @foreach ($villes as $ville)
                  @if ($annonce->ville_id == $ville->id)
                  <td>{{$ville->name}}</td>
                  @endif
                 
                  @endforeach


                  @foreach ($categories as $category)
                  @if ($annonce->categorie_id == $category->id)
                  <td>{{$category->name}}</td>
                  @endif
                 
                  @endforeach
               
                  @if ($annonce->status==0)
                     <form method="Post" action="{{Route('accept_post',['id'=>$annonce->id])}}">
                    @csrf
                    <td class="button gray"><button> Accepter</button>
                    </td>
                  </form>
                      
                  @else
                      
                  <form method="Post" action="{{Route('refuse_post',['id'=>$annonce->id])}}">
                    @csrf
                    <td class="button gray"><button> Refuser </button>
                    </td>
                  </form>
                  @endif   
                  
                
                
                  
                     
                 
                </tr>
                @endforeach
                
                
               
                
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="footer_copyright_part">Copyright © 2021 All Rights Reserved.</div>
      </div>
    </div>
  </div>    
</div>  
@endsection