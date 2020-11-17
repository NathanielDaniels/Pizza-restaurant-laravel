@extends('layouts.landing-page')

@section('title', 'Page Title')

@section('sidebar')
    @parent

       <div class="welcome-menu">
          <div class="close">
            <i class="fa fa-times" aria-hidden="true" alt="Close"></i>
          </div>
          <div class="logo">
            <img src=".././public/img/mama-mia-logo-pizza-angle.png" alt="Mamma Mia logo" />
          </div>
          <div class="menu">
            <ul>
              <a href="#food-preview"><li>Menu</li></a>
              <a href="#rewards"><li>Rewards</li></a>
              <a href="#waitList"><li>Wait List</li></a>
              <a href="#giftCards"><li>Gift Cards</li></a>
            </ul>
            <ul class="social-icons">
              <li>
                <a href="www.facebook.com">

                  <img
                    src=".././public/img/icons/facebook.png"
                    alt="Facebook"
                    title="Facebook"
                  />
                </a>
              </li>
              <li>
                <a href="www.twitter.com">
                  <img
                    src=".././public/img/icons/twitter.png"
                    alt="Twitter"
                    title="Twitter"
                  />
                </a>
              </li>
              <li>
                <a href="www.instagram.com">
                  <img
                    src=".././public/img/icons/instagram.png"
                    alt="Instagram"
                    title="Instagram"
                  />
                </a>
              </li>
            </ul>
          </div>
          <div class="location">
            <div class="address">1234 Main St.<br />Chicago, IL</div>
            <div class="phone-number">
              <a href="tel:+7085551234">(708)555-1234</a>
            </div>
          </div>
        </div>
@endsection

@section('content')
    <h1 style="padding: 1em; color: white">Testing Layout</h1>
@endsection
