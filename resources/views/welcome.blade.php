<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mamma Mia!</title>

        <link rel="apple-touch-icon" sizes="180x180" href=".././public/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href=".././public/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href=".././public/favicon-16x16.png">
        <link rel="manifest" href=".././public/site.webmanifest">
        <!-- <link rel="stylesheet" href="/css/styles.css" /> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
          *{box-sizing:border-box}html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}@keyframes menuSlide{0%{transform:translateX(-15em)}100%{transform:translateX(0em)}}@keyframes titleFade{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@keyframes pizzaSlide{0%{display:none;right:-15em}1%{display:block;opacity:0}100%{display:block;right:-5em;opacity:1}}section#welcome{display:-ms-flexbox;display:flex;-ms-flex-pack:justify;justify-content:space-between;-ms-flex-align:center;align-items:center;height:100em;max-height:100vh;width:100%;overflow:hidden;background:#800922;background:linear-gradient(140deg, #800922 0%, #5f0417 50%);border-bottom:2px solid black}section#welcome .welcome-menu{border-right:2px solid black;width:14em;background:#eee;min-height:100vh;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:justify;justify-content:space-between;position:relative;animation:menuSlide 1s 1 ease-in-out}section#welcome .welcome-menu .close{display:none;position:absolute;top:0;right:0;color:#5f0417;margin:0.2em;font-size:1.5em;z-index:1000;cursor:pointer}section#welcome .welcome-menu .logo{margin:.5em 0;font-size:1.5rem;text-align:center}section#welcome .welcome-menu .logo img{position:relative;width:6em}section#welcome .welcome-menu .menu{margin-top:-50px}section#welcome .welcome-menu .menu ul{text-align:right}section#welcome .welcome-menu .menu ul a{text-decoration:none;font-size:2.1rem;color:#333333;width:100%}section#welcome .welcome-menu .menu ul a li{padding:0.3em 0.3em;transition:border-left .3s ease-in-out}section#welcome .welcome-menu .menu ul a li:hover,section#welcome .welcome-menu .menu ul a li:focus{border-left:10px solid #ee9b08}section#welcome .welcome-menu .menu .social-icons{float:right;padding:.5em;width:80%;display:-ms-flexbox;display:flex;-ms-flex-pack:end;justify-content:flex-end}section#welcome .welcome-menu .menu .social-icons li a{margin:0 .2em;text-decoration:none}section#welcome .welcome-menu .menu .social-icons li a img{color:#4b4b4b;opacity:0.8;width:1em;transition:background .3s ease-in-out;border-radius:50%}section#welcome .welcome-menu .menu .social-icons li a img:hover,section#welcome .welcome-menu .menu .social-icons li a img:focus{background:#ee9b08}section#welcome .welcome-menu .location{padding:1em;font-size:1.2rem;color:#4b4b4b;text-align:right}section#welcome .welcome-menu .location .address{line-height:1.2}section#welcome .welcome-menu .location .phone-number{font-size:1.3rem;margin-top:0.4em}section#welcome .welcome-menu .location .phone-number a{text-decoration:none;color:#5f0417}section#welcome .welcome-jumbo{cursor:default;position:relative;height:100vh;width:calc(100% - 14em)}section#welcome .welcome-jumbo .mobile-burger-menu__button{display:none}section#welcome .welcome-jumbo .title-container{animation:titleFade 2.5s 1 ease-in-out;text-align:center;max-width:80%;width:40em;position:relative;top:50%;left:50%;transform:translateX(calc(-50% - 11em)) translateY(-50%);color:#fff;text-shadow:0px 1px 4px #5f0417, 0px -1px 4px #5f0417, -1px 0px 4px #5f0417, 1px 0px 4px #5f0417}section#welcome .welcome-jumbo .title-container h1{font-size:clamp(5.3rem, 1vw, 1rem);line-height:0.8}section#welcome .welcome-jumbo .title-container h1 span{position:relative;text-transform:uppercase;font-size:11rem;color:#ee9b08;font-weight:600}section#welcome .welcome-jumbo .title-container p{font-size:2.8rem;margin-top:-3px;color:rgba(255,255,255,0.6)}section#welcome .welcome-jumbo img{animation:pizzaSlide 1s 1 ease-in-out;position:absolute;right:-5em;top:50%;transform:translateY(-50%);max-width:50%;min-width:20em;filter:drop-shadow(-10px 0px 10px rgba(0,0,0,0.4))}@media screen and (max-width: 1200px){section#welcome .welcome-menu{transform:translateX(-15em);position:absolute;z-index:100;box-shadow:2px 0px 5px #2c020b;transition:all 0.3s ease-in-out;animation:none !important}section#welcome .welcome-menu div.close{display:block}section#welcome .welcome-menu .logo{font-size:1.5rem !important}section#welcome .welcome-jumbo{width:100%}section#welcome .welcome-jumbo .mobile-burger-menu__button{display:block;background:transparent;border:transparent;border-radius:50%;margin:.5em;position:relative;cursor:pointer}section#welcome .welcome-jumbo .mobile-burger-menu__button:focus{outline:thin dashed;outline-color:#ee9b08;padding:0 5px}section#welcome .welcome-jumbo .mobile-burger-menu__button .mobile-burger-menu__elements{width:35px;height:35px;position:relative;top:5px}section#welcome .welcome-jumbo .mobile-burger-menu__button .mobile-burger-menu__elements:hover .line,section#welcome .welcome-jumbo .mobile-burger-menu__button .mobile-burger-menu__elements:focus .line{background:#fff}section#welcome .welcome-jumbo .mobile-burger-menu__button .mobile-burger-menu__elements .line{position:absolute;width:35px;height:4px;left:0px;background:#ee9b08;border-radius:2.5px;transition:all 0.2s cubic-bezier(0.42, 0, 0.68, 1.78)}section#welcome .welcome-jumbo .mobile-burger-menu__button .mobile-burger-menu__elements .line01{top:5%}section#welcome .welcome-jumbo .mobile-burger-menu__button .mobile-burger-menu__elements .line02{top:30%}section#welcome .welcome-jumbo .mobile-burger-menu__button .mobile-burger-menu__elements .line03{top:55%}section#welcome .welcome-jumbo .mobile-burger-menu__button .mobile-burger-menu__elements.close .line01{transform:rotate(45deg);top:30%;background:yellow}section#welcome .welcome-jumbo .mobile-burger-menu__button .mobile-burger-menu__elements.close .line02,section#welcome .welcome-jumbo .mobile-burger-menu__button .mobile-burger-menu__elements.close .line03{background:yellow;top:30%;transform:rotate(-45deg)}section#welcome .welcome-jumbo .title-container{left:50%;top:40%;transform:translate(-50%, -50%);z-index:5;max-width:100%}section#welcome .welcome-jumbo .title-container h1{font-size:5.3rem}section#welcome .welcome-jumbo img{top:4em;position:absolute;transform:rotate(90deg);max-width:100%}}@media screen and (max-width: 800px){section#welcome div.welcome-jumbo div.title-container{top:30%}section#welcome div.welcome-jumbo div.title-container h1{font-size:4.1rem}section#welcome div.welcome-jumbo div.title-container h1 span{font-size:8.4rem}section#welcome div.welcome-jumbo div.title-container p{font-size:2.2rem}}@keyframes infoSlide{0%{transform:translateX(5em)}100%{transform:translateX(0em)}}*{box-sizing:border-box}#information{overflow:hidden;display:-ms-flexbox;display:flex;background:#b3b5b8;position:relative}#information .restaurant-img{width:50%}#information .restaurant-img img{width:100%;height:100%;object-fit:cover}#information .restaurant-info{animation:infoSlide 1s 1 ease-in-out;z-index:100;width:50%;min-width:50em;padding:0em 1em;right:5%;top:2em;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:space-evenly;justify-content:space-evenly;-ms-flex-align:center;align-items:center;background:rgba(255,255,255,0.9);border-top-left-radius:10px;border-bottom-left-radius:10px;box-shadow:0px 5px 15px rgba(0,0,0,0.5)}#information .restaurant-info .info-title{color:#5f0417;text-transform:capitalize;font-size:3rem;text-align:center;font-weight:500;line-height:55px;padding:.5em 0}#information .restaurant-info .info-title span{line-height:20px}#information .restaurant-info .info-title-mobile{display:none}#information .restaurant-info .info-content{display:-ms-flexbox;display:flex}#information .restaurant-info .info-content p{font-weight:400;padding:0 1em;font-size:18px;line-height:30px}#information .restaurant-info a{text-transform:capitalize;font-size:1.5rem;margin:0.5em 1em;padding:1em;cursor:pointer;text-decoration:none;color:#000;transition:background 0.3s ease-in-out;border-radius:10px}#information .restaurant-info a:hover i{color:red;transform:scale(1.3) rotate(360deg)}#information .restaurant-info a i{color:#5f0417;font-size:1.5rem;transition:.3s ease-in-out}@media screen and (max-width: 1200px){section#information{-ms-flex-direction:column;flex-direction:column;background:#252525;display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center;padding:0 .5em}section#information .restaurant-img{display:none}section#information .restaurant-info{animation:none;width:100%;position:static;-ms-flex-direction:row;flex-direction:row;-ms-flex-pack:space-evenly;justify-content:space-evenly;background:transparent;padding:0;border-radius:0px;box-shadow:none;z-index:0}section#information .restaurant-info .info-title{display:none}section#information .restaurant-info .info-title-mobile{display:block;text-align:right;font-size:4.5rem;width:30%;color:#ee9b08;padding:0;padding-right:0.4em;line-height:70px}section#information .restaurant-info .info-title-mobile span{position:relative;top:10px}section#information .restaurant-info .info-content{width:50%;padding:2em 0;background:#b3b3b3;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center;-ms-flex-line-pack:center;align-content:center}section#information .restaurant-info .info-content p:nth-child(1){margin-bottom:1em}section#information .restaurant-info a{text-align:left;width:20%;font-size:3rem;color:#fff;padding:0;padding-left:.5em;margin:0}section#information .restaurant-info a:hover{background:transparent}section#information .restaurant-info a i{font-size:2.5rem;color:#ee9b08}}@media screen and (max-width: 1000px){section#information{background:#21262b;width:100%}section#information div.mobile-img{display:block;width:100%}section#information div.mobile-img img{display:block;object-fit:fill}section#information div.restaurant-info{background:transparent;width:100%;min-width:100%;right:0;top:0;z-index:0;position:relative;animation:none;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:space-evenly;justify-content:space-evenly;padding:3em 0;border-radius:0px;box-shadow:none}section#information div.restaurant-info div.info-title-mobile{width:100%;text-align:center;font-size:3.5rem;color:#ee9b08;padding-right:0}section#information div.restaurant-info div.info-title-mobile span{top:0px}section#information div.restaurant-info div.info-content{width:100%;min-width:100%;background:transparent;color:rgba(255,255,255,0.6);-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center;padding:2em 0}section#information div.restaurant-info div.info-content p{width:95%;margin:0 auto}section#information div.restaurant-info div.info-content p:nth-child(1){margin-bottom:1.5em}section#information div.restaurant-info a{color:black;width:100%;text-align:center;text-transform:capitalize;font-size:2rem;cursor:pointer;text-decoration:none;color:#fff;transition:background 0.3s ease-in-out;line-height:40px;padding:0 .5em}section#information div.restaurant-info a i{font-size:2rem}}@media screen and (max-width: 600px){section#information div.restaurant-info div.info-title-mobile{text-align:center}section#information div.restaurant-info div.info-title-mobile span{width:100%;font-size:10rem;line-height:8rem;font-weight:300}}@keyframes warningSlide{0%{transform:translate3d(0, 0, 0)}100%{transform:translate3d(calc(1.69em * 4), 0, 0)}}#food-preview{overflow:hidden;padding:6em 0;border-top:2px solid black;position:relative;width:100%;background:#b90027;background:radial-gradient(circle, #b90027 0%, #540012 75%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#b90027",endColorstr="#540012",GradientType=1)}#food-preview .title{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;width:100%;-ms-flex-pack:distribute;justify-content:space-around;margin:0 auto 4em;position:relative}#food-preview .title h2{font-size:5rem;font-weight:500;color:#fff;z-index:100}#food-preview .title .CTA-menu{position:relative;text-decoration:none;text-transform:uppercase;color:#fff;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;background:rgba(51,0,11,0.8);padding:1em 2.5em;border-radius:5px;font-size:1.5rem;letter-spacing:1.5px}#food-preview .title .CTA-menu:hover{background:#ee9b08;transition:background .5s;transition-delay:.25s}#food-preview .title .CTA-menu:hover span:nth-child(1){transform:scaleY(1);transform-origin:bottom;transition:transform 0.25s}#food-preview .title .CTA-menu:hover span:nth-child(2){transform:scaleX(1);transform-origin:left;transition:transform 0.25s}#food-preview .title .CTA-menu:hover span:nth-child(3){transform:scaleY(1);transform-origin:top;transition:transform 0.25s}#food-preview .title .CTA-menu:hover span:nth-child(4){transform:scaleX(1);transform-origin:right;transition:transform 0.25s}#food-preview .title .CTA-menu span{position:absolute;background:#ee9b08}#food-preview .title .CTA-menu span:nth-child(1){left:0;bottom:0;width:2px;height:100%;transform:scaleY(0);transform-origin:top;transition:tranform .25s}#food-preview .title .CTA-menu span:nth-child(2){left:0;top:0;width:100%;height:2px;transform:scaleX(0);transform-origin:right;transition:tranform 0.25s;transition-delay:.25s}#food-preview .title .CTA-menu span:nth-child(3){left:100%;top:0;width:2px;height:100%;transform:scaleY(0);transform-origin:bottom;transition:tranform 0.25s;transition-delay:0.5s}#food-preview .title .CTA-menu span:nth-child(4){left:0;bottom:0;width:100%;height:2px;transform:scaleX(0);transform-origin:left;transition:tranform 0.25s;transition-delay:0.75s}#food-preview .cards{width:100%;display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;-ms-flex-wrap:wrap;flex-wrap:wrap;overflow:hidden;position:relative;left:0}#food-preview .cards a{text-decoration:none;cursor:pointer}#food-preview .cards a .card{background:#fff;position:relative;margin:0.2em;width:8em;height:14em;list-style:none;color:#000;font-size:2rem;border-radius:5px;overflow:hidden}#food-preview .cards a .card:hover .background,#food-preview .cards a .card:focus .background{color:#fff;background:#ec9909;transform:translate3d(-50px, -340px, 0) rotate(10deg)}#food-preview .cards a .card .background{background:#fff;position:absolute;top:0;bottom:0;height:150%;width:150%;z-index:1;transition:all .3s ease-in-out}#food-preview .cards a .card .content{position:absolute;width:8em;height:14em;list-style:none;color:#000;font-size:2rem;border-radius:5px;z-index:2}#food-preview .cards a .card .content .card__title{text-align:center;padding:0.5em;color:#5f0417;font-size:2rem;font-weight:600}#food-preview .cards a .card .content .warning{font-size:0.7rem;font-weight:300;width:7em;height:2em;background:#800922;color:white;position:absolute;padding:0.2em 1em;border-radius:5px;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;text-align:center;right:2em;top:4.5em;text-transform:uppercase;letter-spacing:1px}#food-preview .cards a .card .content .warning span{position:absolute}#food-preview .cards a .card .content .warning span i{padding-left:0.3em;font-size:0.8rem}#food-preview .cards a .card .content .card__info{margin:2em 0;padding:0 1em;font-size:1rem;line-height:1.4rem;letter-spacing:.4px}#food-preview .cards a .card .content .card__info span{font-weight:500;border-radius:5px;padding:.1em .5em;color:#fff;background:#ec9909}#food-preview .cards a .card .content .img-container{height:10rem}#food-preview .cards a .card .content .img-container .card__img{position:relative;width:8em;top:0em;filter:drop-shadow(0px 4px 5px rgba(0,0,0,0.4));transition:top 0.5s ease-in-out}#food-preview .cards a .card .content .img-container .card__img.pizza{top:-.6em}#food-preview .cards a .card .content:hover,#food-preview .cards a .card .content:focus{color:#fff}#food-preview .cards a .card .content:hover .card__title,#food-preview .cards a .card .content:focus .card__title{color:#fff;text-shadow:0 1px 2px red}#food-preview .cards a .card .content:hover .warning,#food-preview .cards a .card .content:focus .warning{background:red;width:calc((6em) * 4);right:0em;top:5em;font-weight:500;display:-ms-flexbox;display:flex;-ms-flex-pack:space-evenly;justify-content:space-evenly;border-radius:0px;letter-spacing:2px;transition:all 0.3s ease-in-out}#food-preview .cards a .card .content:hover .warning span,#food-preview .cards a .card .content:focus .warning span{width:6.5em;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center;margin:0 2em;position:relative;animation:warningSlide 6s linear infinite}#food-preview .cards a .card .content:hover .card__info span,#food-preview .cards a .card .content:focus .card__info span{background:red}#food-preview .cards a .card .content:hover .img-container .pizza,#food-preview .cards a .card .content:focus .img-container .pizza{top:-.8em}#food-preview .cards a .card .content:hover .card__img,#food-preview .cards a .card .content:focus .card__img{top:-.2em}#food-preview .arrows{display:none;color:#fff;font-size:2.5rem;margin:1em;float:right;transition:transform .3s ease-in-out}#food-preview .arrows .left-arrow i,#food-preview .arrows .right-arrow i{cursor:pointer}#food-preview .arrows .left-arrow i:hover,#food-preview .arrows .right-arrow i:hover{transform:scale(1.1);color:#ee9b08}#food-preview .arrows .left-arrow{margin-right:1em}@media screen and (max-width: 1000px){#food-preview{padding:4em 0}#food-preview .title{width:100%;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center;-ms-flex-align:start;align-items:flex-start;margin:0 0 2em 2em;left:0em}#food-preview .title h2{font-size:3.5rem;margin-bottom:.5em}#food-preview .title .CTA-menu{padding:1em 5.3em}#food-preview .cards{padding:0 1em;margin:0 auto;-ms-flex-pack:start;justify-content:flex-start;overflow-x:scroll;overflow-y:hidden;-ms-flex-wrap:nowrap;flex-wrap:nowrap}#food-preview .cards::-webkit-scrollbar{display:none}#food-preview .cards .title-container:nth-child(1){margin-left:0}#food-preview .arrows{display:-ms-flexbox;display:flex}}*{scroll-behavior:smooth}body{background:#5f0417;font-family:'Inter', sans-serif;cursor:default}

        </style>

        <style>
            body {
                background: #5f0417;
                font-family: 'Inter', "Roboto", sans-serif;
                cursor: default;
            }
        </style>
    </head>
    <body>
       <!--* main section -->
      <section id="welcome">
        <!--! Left Side (menu -->
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
        <!--! Right Side -->
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
      </section>

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

      <!--! Javascript -->
      <script type="text/javascript" src="vanilla-tilt.js"></script>
      <script type="text/javascript">
        function mobileMenu () {
          const menu = document.querySelector('.welcome-menu')
          const closeMenuBtn = document.querySelector('.welcome-menu > .close')
          const mobileBurgerBtn = document.querySelector('.mobile-burger-menu__elements')

          closeMenuBtn.addEventListener('click', closeMenu)

          function closeMenu () {
            menu.style.transform = 'translateX(-15em)'
          }

          mobileBurgerBtn.addEventListener('click', function () {
            console.log('clicked')
            menu.style.transform = 'translateX(0em)'
            // $(this).toggleClass('close')
          })

          //! Close btn SideBar Nav Menu
          // document
          // 	.querySelector('#mobile-nav-menu ul li a')
          // 	.addEventListener('click', function () {
          // 		document.querySelector('#mobile-nav-menu').removeClass('active')
          // 		// $menu.removeClass('close')
          // 	})
        }
        mobileMenu()

        function arrowClick() {
          const arrows = document.querySelector('.arrows')
          const leftArrow = document.querySelector('.left-arrow')
          const rightArrow = document.querySelector('.right-arrow')
          const cards = document.querySelectorAll('.card')

          // const screenWidth = window.innerWidth;
          // const screenHeight = window.innerHeight;

          let counter = 0;
          leftArrow.addEventListener('click', () => {
            // console.log('left arrow click')
            if (counter > 0 && counter < 5) {
              counter--;
              console.log(counter);
              for (let i = 0; i < cards.length; i++) {
                // let moveRight = '';
                let moveRight = (parseInt(cards[i].style.left, 10) || 0) + 8;
                // if (screenWidth <= "600") {
                //   console.log("left arrow under 600");
                //   moveRight = (parseInt(cards[i].style.left, 10) || 0) + 250;
                // }
                // if (screenWidth <= "900" && screenWidth > "600") {
                //   console.log("left arrow under 900");
                //   moveRight = (parseInt(cards[i].style.left, 10) || 0) + 190;
                // }
                // if (screenWidth < "1000" && screenWidth > "900") {
                //   console.log("left arrow under 1200");
                //   moveRight = (parseInt(cards[i].style.left, 10) || 0) + 110;
                // }
                cards[i].style.position = "relative";
                // cards[i].style.left = moveRight + "px";
                cards[i].style.left = moveRight + "em";
              }
              }
              else if (counter <= 0) {
                counter = 0;
                leftArrow.disabled = true;
              }
            })

          rightArrow.addEventListener('click', () => {

            if (counter >= 0 && counter < 4) {
              counter++;
              console.log(counter);
              for (let i = 0; i < cards.length; i++) {
                // let moveLeft = '';
                let moveLeft= (parseInt(cards[i].style.left, 10) || 0) - 8;
                // if (screenWidth <= "600") {
                //   console.log("left arrow under 600");
                //   moveLeft = (parseInt(cards[i].style.left, 10) || 0) - 250;
                // }
                // if (screenWidth <= "900" && screenWidth > "600") {
                //   console.log('right arrow click under 900px')
                //   moveLeft = (parseInt(cards[i].style.left, 10) || 0) - 190;
                // }
                // if (screenWidth <= "1000" && screenWidth > "900") {
                //   console.log('right arrow click under 1000px')
                //   moveLeft = (parseInt(cards[i].style.left, 10) || 0) - 110;
                // }
                cards[i].style.position = "relative";
                // cards[i].style.left = moveLeft + "px";
                cards[i].style.left = moveLeft + "em";

              }
            } else if (counter === 4) {
              rightArrow.disabled = true;
            }
          })
        }
        arrowClick()


      </script>
    </body>
</html>
