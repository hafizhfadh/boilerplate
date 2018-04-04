<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel {{ app()->version() }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            .hero.is-large .hero-body {
                padding-bottom: 0;
                padding-top: 10rem;
            }
            .hero figure {
                height: 0;
                padding-bottom: 75%;
                overflow: hidden;
            }
            figure.image {
                padding-left: 50px;
                padding-right: 50px;
            }
            .bg-white {
                background-color: #ffffff;
            }
            .bg-light {
                background-color: #faf6fb;
            }
            .media-left {
                padding-left: 15px;
            }
            .media-left .icon {
                margin-top: 15px;

            }

            .media-content {
                padding-left: 25px;
            }

            .media {
                background-color: #ffffff;
                padding: 25px;
            }

            .section {
                padding: 7rem 5rem;
            }

            .content h1 {
                margin-bottom: 2em;
            }

            #stn-download {
                color: #ffffff;
                background-image: linear-gradient( 135deg, rgba(60, 8, 118, 0.8) 0%, rgba(250, 0, 118, 0.8) 100%);
            }

            .hero.is-landing {
                color: #ffffff;
                background-image: linear-gradient( 135deg, rgba(60, 8, 118, 0.8) 0%, rgba(250, 0, 118, 0.8) 100%);
            }

            .hero.is-landing * {
                color: #ffffff;
            }

            #stn-download h1 {
                color: #ffffff;
            }

            .button.button-store {
                border-radius: 3px;
                background: #FFF;
                box-shadow: 0px 9px 32px 0px rgba(0, 0, 0, 0.26);
                font-size: 14px;
                font-weight: 500;
                color: #633991;
                margin: 0.5rem;
                padding: 0.7rem 1.6rem;
                line-height: 1.8;
                height: auto;
                text-transform: uppercase;
                transition: all 0.3s ease;

                display: inline-block;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
            }

            .button.button-store:hover {
                color: #000000;
                background-color: #faf6fb;
            }

            .button.button-store img {
                margin-right: 0.4rem;
                vertical-align: text-bottom;
            }
        </style>
    </head>
    <body>
      <div class="content-wrapper">

          <section class="hero is-landing is-large">
              <div class="hero-head">
                  <nav class="navbar">
                      <div class="container">
                          <div class="navbar-brand">
                              <a class="navbar-item">
                                  MOBILE APP
                              </a>
                              <span class="navbar-burger burger" data-target="mainNavbar">
                                  <span></span>
                                  <span></span>
                                  <span></span>
                              </span>
                          </div>
                          <div id="mainNavbar" class="navbar-menu">
                              <div class="navbar-end">
                                  <a class="navbar-item">
                                      Features
                                  </a>
                                  <a class="navbar-item">
                                      FAQs
                                  </a>
                                  <span class="navbar-item">
                                      <a class="button is-info is-inverted is-outlined">
                                          <span>Download</span>
                                      </a>
                                  </span>
                              </div>
                          </div>
                      </div>
                  </nav>
              </div>

              <div class="hero-body">
                  <div class="container has-text-centered">

                      <div class="columns">
                          <div class="column is-6 is-offset-3">
                              <h1 class="title is-1">
                                  Mobile App
                              </h1>
                              <h2 class="subtitle is-4">
                                  The one and only solution for any kind of mobila app landing needs.
                              </h2>

                              <figure class="image">
                                  <img src="img/iphonex.png" alt="" width="768">
                              </figure>
                          </div>
                      </div>
                  </div>
              </div>
          </section>


          <section class="bg-light">
              <div class="container section">
                  <div class="content has-text-centered">
                      <h1>Features you love</h1>
                  </div>

                  <nav class="columns">
                      <div class="column has-text-centered">
                          <article class="media">
                              <figure class="media-left">
                                  <span class="icon has-text-danger">
                                      <i class="fas fa-cog fa-3x"></i>
                                  </span>
                              </figure>
                              <div class="media-content">
                                  <div class="content">
                                      <h4 class="heading"><strong>Simple</strong></h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque
                                      </p>
                                  </div>
                              </div>
                          </article>
                      </div>

                      <div class="column has-text-centered">
                          <article class="media">
                              <figure class="media-left">
                                  <span class="icon has-text-danger">
                                      <i class="fas fa-cog fa-3x"></i>
                                  </span>
                              </figure>
                              <div class="media-content">
                                  <div class="content">
                                      <h4 class="heading"><strong>Simple</strong></h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque
                                      </p>
                                  </div>
                              </div>
                          </article>
                      </div>
                      <div class="column has-text-centered">
                          <article class="media">
                              <figure class="media-left">
                                  <span class="icon has-text-danger">
                                      <i class="fas fa-cog fa-3x"></i>
                                  </span>
                              </figure>
                              <div class="media-content">
                                  <div class="content">
                                          <h4 class="heading"><strong>Simple</strong></h4>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque
                                          </p>
                                  </div>
                              </div>
                          </article>
                      </div>
                  </nav>
              </div>
          </section>

          <section class="bg-white">
              <div class="container section">
                  <div class="columns is-vcentered">
                      <div class="column">
                          <figure class="image">
                              <img src="img/iphonex.png" alt="">
                          </figure>
                      </div>
                      <div class="column ">
                              <div class="content">
                                  <h1>Discover your app</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, debitis delectus doloribus dolorum eos est ex </p>

                                  <a href="" class="button is-danger">Discover</a>
                              </div>

                      </div>
                  </div>
              </div>
          </section>

          <section class="bg-light">
              <div class="container section">
                  <div class="content has-text-centered">
                      <h1>Frequently Ask Questions</h1>
                  </div>

                  <div class="columns">
                      <div class="column is-half">
                          <div class="title is-4">Can I try before I buy?</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante.</p>
                      </div>

                      <div class="column is-half">
                          <div class="title is-4">Can I try before I buy?</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante.</p>
                      </div>
                  </div>

                  <div class="columns">
                      <div class="column is-half">
                          <div class="title is-4">Can I try before I buy?</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante.</p>
                      </div>

                      <div class="column is-half">
                          <div class="title is-4">Can I try before I buy?</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante.</p>
                      </div>
                  </div>

              </div>
          </section>


          <section id="stn-download">
              <div class="container section has-text-centered">
                  <div class="columns">
                      <div class="column is-half is-offset-one-quarter">

                          <h1 class="title is-2">Download Anywhere</h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>

                          <a href="#" class="button button-store">
                              <img src="img/appleicon.png" alt="icon"> Apple Store
                          </a>

                          <a href="#" class="button button-store">
                              <img src="img/playicon.png" alt="icon"> Google play
                          </a>
                      </div>
                  </div>

              </div>
          </section>

          <footer class="footer">
              <div class="container">
                  <div class="content has-text-centered">
                      <p>
                          Mobile App built
                          with
                          <span class="icon has-text-danger">
                              <i class="fas fa-heart"></i>
                          </span>
                          by <a href="https://petehouston.com">Pete Houston</a>
                          @ 2018.
                      </p>
                  </div>
              </div>
          </footer>
      </div>
    </body>
</html>
