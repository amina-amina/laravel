@extends('layouts.layout')
@section('content')
<div class="utf_dashboard_content_user"> 
    <div id="titlebar" class="dashboard_gradient">
      <div class="row">
        <div class="col-md-12">
          <h2>Change Password</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index_1.html">Home</a></li>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li>Change Password</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-lg-12 col-md-12">
        <div class="utf_dashboard_list_box margin-top-0">
          <h4 class="gray"><i class="sl sl-icon-key"></i> Change Password</h4>
          <div class="utf_dashboard_list_box-static"> 
            <div class="my-profile">
              <div class="row with-forms">
                <form action="{{Route('submitPassword')}}" method="post">
                @csrf
                  <div class="col-md-4">
                      <label>Current Password</label>						
                      <input type="password" class="input-text" name="currentPassword" placeholder="*********" value="">
                  </div>
                  <div class="col-md-4">
                      <label>New Password</label>						
                      <input type="password" class="input-text" name="password" placeholder="*********" value="">
                  </div>
                  <div class="col-md-4">
                      <label>Confirm New Password</label>
                      <input type="password" class="input-text" name="confirmed" placeholder="*********" value="">
                  </div>
                  <div class="col-md-12">
                      <button class="button btn_center_item margin-top-15">Change Password</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection