@extends('layouts.layout')
@section('content')
<div class="utf_dashboard_content_user">
  <div id="titlebar" class="dashboard_gradient">
    <div class="row">
      <div class="col-md-12">
        <h2>Déposer une annonce</h2>
        <nav id="breadcrumbs">
          <ul>
            <li><a href="{{Route('home')}}">Accueil</a></li>
            <li><a href="{{Route('dashboard')}}">Dashboard</a></li>
            <li>Déposer une annonce</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      {{-- form  --}}
      <form action="{{Route('submitlisting')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div id="utf_add_listing_part">
          <div class="add_utf_listing_section margin-top-45">
            <div class="utf_add_listing_part_headline_part">
              <h3><i class="sl sl-icon-list"></i> Ajouter une nouvelle annonce</h3>
            </div>
            <div class="row with-forms">
              <div class="col-md-6">
                <h5>Nom d'annonce</h5>
                <input type="text" placeholder="Title" name="name">
              </div>
              <div class="col-md-6">
                <h5>Image</h5>
                <input name="image" type="file" placeholder="Image">
              </div>
              <div class="col-md-6">
                <h5>Ville</h5>
                <div class="intro-search-field utf-chosen-cat-single">
                  <select name="ville_id" class="selectpicker default" data-selected-text-format="count" data-size="7"
                    title="Select City">
                    @foreach ($villes as $ville)

                    <option value={{$ville->id}}>{{$ville->name}}</option>
                    @endforeach

                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <h5>Categorie</h5>
                <div class="intro-search-field utf-chosen-cat-single">
                  <select name="categorie_id" class="selectpicker default" data-selected-text-format="count" data-size="7"
                    title="Select Category">
                    <option value="1">Informatique</option>
                    <option value="2">Vetement</option>
                    <option value="3">Santé</option>
                    <option value="4">maison</option>
                    <option value="5">Electronique</option>
                    <option value="6">Voiture</option>
                    <option value="7">Jouets</option>
                    <option value="8">Sport</option>
                    <option value="9">Autres</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <h5>Prix</h5>
                <input type="text" placeholder="Price" name="prix">
              </div>
              <div class="col-md-12">
                <h5>Description</h5>
                <textarea name="description" cols="40" rows="3" id="description" placeholder="Description..."
                  spellcheck="true"></textarea>
              </div>
            </div>
          </div>
          <button  class="button preview">Envoyer</button>
      </form>

      {{-- end form --}}






    </div>
  </div>
  <div class="col-md-12">
    <div class="footer_copyright_part">Copyright © 2021 All Rights Reserved.</div>
  </div>
</div>
</div>
</div>
</div>
@endsection

