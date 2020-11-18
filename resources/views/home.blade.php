@extends('layouts.landing')

{{-- @section('sidebar')
  @parent
    <div class="welcome-menu"
      <div class="close">
        <i class="fa fa-times" aria-hidden="true" alt="Close"></i>
      </div>
      <div class="logo">
        <a href="/"><img src=".././public/img/mama-mia-logo-pizza-angle.png" alt="Mamma Mia logo" /></a>
      </div>
      <div class="menu">
        <ul>
          <a href="menu"><li>Menu</li></a>
          <a href="offers"><li>Rewards</li></a>
          <a href="waitlist"><li>Wait List</li></a>
          <a href="giftcards"><li>Gift Cards</li></a>
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
    @include('includes.side-menu')
@endsection --}}

@section('title')
  <div class="welcome-jumbo">
    <div class="mobile-burger-menu">
      <button class="mobile-burger-menu__button">
        <div class="mobile-burger-menu__elements">
          <span class="line line01" role="Side Menu button"></span>
          <span class="line line02" role="Side Menu button"></span>
          <span class="line line03" role="Side Menu button"></span>
        </div>
      </button>
    </div>
    <div class="title-container">
      <h1>Mamma Mia' <span>Pizza</span></h1>
      <p>Now That's A Good Pie!</p>
    </div>
    <img src=".././public/img/pizza/pizza-main-cut.png" alt="Pizza" />
  </div>
@endsection

@section('content')
  <!--* Info Section -->
  <section id="information">
    <div class="restaurant-img">
      <img src=".././public/img/pizza/pizzeria-signs.jpg" alt="Pizza Kitchen" />
    </div>
    <div class="restaurant-info">
      <h2 class="info-title"><span>Grand</span> Opening | 2020 </h2>
      <div class="info-title-mobile">Grand Opening <span>2020</span></div>
      <div class="info-content">
        <p>Mamma Mia' Pizza, the recognized world leader in fast artisanal pizza, opened a new location in Chicago – making it easier for local residents to get an upgraded pizza experience, all with best-in-class safety processes and procedures top-of-mind for guests and team members.
        </p>

        <p>The build-your-own pizza concept, known for its chef-driven recipes and casually hip restaurants, opened on Wednesday, May 20, at 9 Du Rhu Drive in Chicago. The brand will offer carry out via pick-up or curbside service, and contactless delivery through its website, mobile app and various third-party delivery partners.
        </p>

        <!-- <p> Operating hours will be from 11am until 8pm, Sunday through Thursday, and 11am until 9pm Friday and Saturday.</p> -->
      </div>
      <a href="#">
        Learn more about our pizzeria
        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
      </a>
    </div>
  </section>

  <!--* Food Preview Section -->
  <section id="food-preview">
    <div class="title">
      <h2>Local Favorites</h2>
      <a class="CTA-menu" href="#">
        Full Menu
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
    <ul class="cards">
          <a href="#HotFireChicken" >
            <li class="card" >
              <div class="background"></div>
              <div class="content">
                <h3 class="card__title">Chicken Pizza</h3>
                <div class="warning">
                  <span>Hot Fire</span>
                  <span>Hot Fire</span>
                  <span>Hot Fire</span>
                  <span>Hot Fire</span>
                  <span>Hot Fire</span>
                  <span>Hot Fire</span>
                </div>
                <p class="card__info">
                  <span pan>Limited Time:</span> Our secret red sauce, fresh local mozzarella, top of the season scorpion pepper chicken meatballs, ghost pepper slaw, finished off with Mikes hot honey drizzle.
                </p>
                <div class="img-container">
                  <img src=".././public/img/hot-fire-pizza-cut.png" class="card__img pizza" alt="Pizza">
                </div>
              </div>
            </li>
          </a>
        <a href="#Tacos">
          <li class="card">
            <div class="background"></div>
            <div class="content">
              <h3 class="card__title">Tacos</h3>
              <p class="card__info">
                Your choice of grass fed Beef, steak, local free range chicken, or fresh shrimp. Our house tacos are topped with cilantro, onion and red pepper. Then wrapped in a homemade tortilla.
              </p>
              <div class="img-container">
                <img src=".././public/img/taco.png" class="card__img" alt="Tacos">
              </div>
            </div>
          </li>
        </a>
        <a href="#Burgers">
          <li class="card">
            <div class="background"></div>
            <div class="content">
              <h3 class="card__title">
                Burgers
              </h3>
              <p class="card__info">
                Our burgers are made from local grass fed beef. The house burger is topped with smoked gouda, fried shallots and fig spread on a butter toasted brioche bun.
              </p>
              <div class="img-container">
                <img src=".././public/img/burger-fries.png" class="card__img" alt="Burger + Fries">
              </div>
            </div>
          </li>
        </a>
        <a href="#Burritos">
          <li class="card">
            <div class="background"></div>
            <div class="content">
              <h3 class="card__title">
                Burritos
              </h3>
              <p class="card__info">
                Your choice of grass fed Beef, steak,  or local free range chicken. Then add jalapeno, cilantro, onion, garlic, bacon, rice, and beans. All topped with avacado and wrapped in a homemade tortilla.
              </p>
              <div class="img-container">
                <img src=".././public/img/burrito.png" class="card__img" alt="Burritos">
              </div>
            </div>
          </li>
        </a>
        <a href="#fish-n-chips">
          <li class="card">
            <div class="background"></div>
            <div class="content">
              <h3 class="card__title">
                Fish-n-Chips
              </h3>
              <p class="card__info">
                Fresh never frozen Cod fillets are coated with local craft beer batter and fried to perfection, served with fresh to order pub fries and Mamma Mia's own tartar sauce and ketchup.
              </p>
              <div class="img-container">
                <img src=".././public/img/fish-n-chips.png" class="card__img" alt="fish-n-chips">
              </div>
            </div>
          </li>
        </a>
    </ul>
    <div class="arrows">
      <div class="left-arrow">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
      </div>
      <div class="right-arrow">
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
      </div>
    </div>
  </section>
@endsection
