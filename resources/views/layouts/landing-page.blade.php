<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mamma Mia!</title>

        <!-- Title Icon -->
        <link rel="apple-touch-icon" sizes="180x180" href=".././public/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href=".././public/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href=".././public/favicon-16x16.png">
        <link rel="manifest" href=".././public/site.webmanifest">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="./css/app.css" />
    </head>
    <body>
       <!--* main section -->
      <section id="welcome">
        <!--! Left Side menu -->
        @yield('sidebar')
        <!--! Right Side -->
        @yield('title')
      </section>

      @yield('content')

      

      <!--! Javascript -->
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
          })
        }
        mobileMenu()

        function arrowClick() {
          const arrows = document.querySelector('.arrows')
          const leftArrow = document.querySelector('.left-arrow')
          const rightArrow = document.querySelector('.right-arrow')
          const cards = document.querySelectorAll('.card')

          let counter = 0;
          leftArrow.addEventListener('click', () => {
            if (counter > 0 && counter < 5) {
              counter--;
              console.log(counter);
              for (let i = 0; i < cards.length; i++) {
                let moveRight = (parseInt(cards[i].style.left, 10) || 0) + 8;
                cards[i].style.position = "relative";
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
                let moveLeft= (parseInt(cards[i].style.left, 10) || 0) - 8
                cards[i].style.position = "relative";
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
