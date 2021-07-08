@extends('layouts.layout')
@section('content')
    <div class="utf_dashboard_content-user">
        <div id="titlebar" class="dashboard_gradient">
            <div class="row">
                <div class="col-md-12">
                    <h2>Mon Profile</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index_1.html">Accueil</a></li>

                            <li>Mon Profile</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="utf_dashboard_list_box margin-top-0">
                    <h4 class="gray"><i class="sl sl-icon-user"></i> Mes details</h4>
                    <div class="utf_dashboard_list_box-static">
                        
                        <form action="{{route("addProfile",['id'=>Auth::user()->id])}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="my-profile">
                            <div class="edit-profile-photo"> <img src="{{asset('storage/'.Auth::user()->image)}}" alt="">
                              <div class="change-photo-btn">
                                  <div class="photoUpload"> <span><i class="fa fa-upload"></i> Télecharger une Photo</span>
                                      <input name="image" type="file" class="upload" />
                                  </div>
                              </div>
                          </div>
                            <div class="row with-forms">
                                <div class="col-md-4">
                                    <label>Nom</label>
                                    <input type="text" class="input-text" placeholder="Alex Daniel"
                                        value="{{ Auth::user()->name }}" name="name">
                                </div>
                                <div class="col-md-4">
                                    <label>Télephone</label>
                                    <input type="text" class="input-text" placeholder="(123) 123-456"
                                        value="{{ Auth::user()->phone }}" name="phone">
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                    <input type="text" class="input-text" placeholder="test@example.com"
                                        value="{{ Auth::user()->email }}" name="email">
                                </div>

                                <div class="col-md-6">
                                    <label>Ville</label>
                                    <input type="text" class="input-text" placeholder="London"
                                        value="{{ Auth::user()->ville }}" name="ville">
                                </div>

                                <div class="col-md-6">
                                    <label>Facebook</label>
                                    <input type="text" class="input-text" placeholder="https://www.facebook.com"
                                        value="{{ Auth::user()->facebook }}" name="facebook">
                                </div>

                                <div class="col-md-12">
                                    <label>Address</label>
                                    <textarea value={{ Auth::user()->adresse }} name="Adresse" cols="30"
                                        rows="10">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</textarea>
                                </div>






                            </div>
                        </div>
                        <button class="button preview btn_center_item margin-top-15">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
