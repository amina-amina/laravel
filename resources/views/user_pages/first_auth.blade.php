@extends('layouts.layout')
@section('content')
<div id="dialog_signin_part" class="">
    <div class="small_dialog_header">
      <h3>Sign In</h3>
    </div>
    <div class="utf_signin_form style_one">
      <ul class="utf_tabs_nav">
        <li class=""><a href="#tab1">Log In</a></li>
        <li><a href="#tab2">Register</a></li>
      </ul>
      <div class="tab_container alt"> 
        <div class="tab_content" id="tab1" style="">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <a href="javascript:void(0);" class="social_bt facebook_btn"><i class="fa fa-facebook"></i>Login with Facebook</a>
            <a href="javascript:void(0);" class="social_bt google_btn"><i class="fa fa-google-plus"></i>Login with Google</a>	
            <p class="utf_row_form utf_form_wide_block">
              <label for="username">
                <x-input id="email" placeholder="Username" class="input-text" type="email" name="email" :value="old('email')" required autofocus />
              </label>
            </p>
            <p class="utf_row_form utf_form_wide_block">
              <label for="password">
                <x-input id="password" class="input-text" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
              </label>
            </p>
            <div class="utf_row_form utf_form_wide_block form_forgot_part"> <span class="lost_password fl_left"> <a href="javascript:void(0);">Forgot Password?</a> </span>
              <div class="checkboxes fl_right">
                <input id="remember-me" type="checkbox" name="check">
                <label for="remember-me">Remember Me</label>
              </div>
            </div>
            <div class="utf_row_form">
              <x-button class="button border margin-top-5">{{ __('Log in') }}</x-button>
            </div>
          </form>
        </div>
        {{-- /////register --}}
        <div class="tab_content" id="tab2" style="">
          <form class="register" method="POST" action="{{ route('register') }}">
            @csrf
            <p class="utf_row_form utf_form_wide_block">
              <label for="username2">
                <x-input id="name" placeholder="Username" class="input-text" type="text" name="name" :value="old('name')" required autofocus />
              </label>
            </p>
            <p class="utf_row_form utf_form_wide_block">
              <label for="email2">
                <x-input id="email" placeholder="Email" class="input-text" type="email" name="email" :value="old('email')" required />
              </label>
            </p>
            <p class="utf_row_form utf_form_wide_block">
              <label for="password1">
                <x-input id="password" class="input-text" placeholder="Password" type="password" name="password"  required autocomplete="new-password" />
              </label>
            </p>
            <p class="utf_row_form utf_form_wide_block">
              <label for="password2">
                <x-input id="password_confirmation" class="input-text" placeholder="Confirm Password" type="password"  name="password_confirmation" required />
              </label>
            </p>
            <x-button class="button border fw margin-top-10" >
              {{ __('Register') }}
          </x-button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
