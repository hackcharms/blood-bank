<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

          <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
    <body>
            <header class="continer-fluid ">
                <div class="header-top">
                    <div class="container">
                        <div class="row col-det">
                            <div class="col-lg-6 d-none d-lg-block">
                                <ul class="ulleft">
                                    <li>
                                        <i class="far fa-envelope"></i>
                                        sales@testapp.com
                                        <span>|</span></li>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        {{__('Service Time : 12:AM')}}</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <ul class="ulright">
                                    <li>
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        {{__('Upload Video')}}
                                        <span>|</span></li>
                                    <li>
                                        <i class="fas fa-user"></i>
                                        {{__('Login')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu-jk" class="header-bottom">
                    <div class="container">
                        <div class="row nav-row">
                            <div class="col-md-3 logo">
                                <img src="{{asset('images/logo.jpg')}}" alt="">
                            </div>
                            <div class="col-md-9 nav-col">
                                <nav class="navbar navbar-expand-lg navbar-light">

                                    <button
                                        class="navbar-toggler"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#navbarNav"
                                        aria-controls="navbarNav"
                                        aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#">{{__('Home')}}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#about">{{__('About')}} Us</a>
                                            </li>
                                        
                                            <li class="nav-item">
                                                <a class="nav-link" href="#gallery">{{__('Gallery')}}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#process">{{__('Process')}}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#blog">{{__('Blog')}}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#contact">{{__('Contact US')}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            
        <!-- ################# Slider Starts Here#######################--->

        <div class="slider-detail">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('images/slider/slide-02.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class=" bounceInDown">{{__('Donate Blood & Save a Life')}}</h5>
                            <p class=" bounceInLeft">{{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, <br>
                                aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                                sed sagittis at, sagittis quis neque. Praesent.')}}</p>

                            <div class=" vbh">

                                <div class="btn btn-success  bounceInUp"> {{__('Book Appointment')}} </div>
                                <div class="btn btn-success  bounceInUp"> {{__('Contact US')}} </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/slider/slide-03.jpg')}}" alt="Third slide">
                        <div class="carousel-caption vdg-cur d-none d-md-block">
                            <h5 class=" bounceInDown">{{__('Donate Blood & Save a Life')}}</h5>
                            <p class=" bounceInLeft">
                                {{('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, <br>
                                aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                                sed sagittis at, sagittis quis neque. Praesent.')}}
                                </p>

                            <div class=" vbh">

                                <div class="btn btn-danger  bounceInUp"> {{__('Donate Now')}} </div>
                                <div class="btn btn-danger  bounceInUp"> {{__('Contact US')}} </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{__('Previous')}}</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{__('Next')}}</span>
                </a>
            </div>


        </div>
        
        <!--*************** About Us Starts Here ***************-->
    <section id="about" class="contianer-fluid about-us">
        <div class="container">
            <div class="row session-title">
                <h2>{{__('About Us')}}</h2>
                <p>
                    {{__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has')}}
                </p>
            </div>
                <div class="row">
                    <div class="col-md-6 text">
                        <h2>{{__('About Blood Doners')}}</h2>
                        <p>{{__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.')}}</p>
                        <p> {{__('It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.')}}</p>
                        <p>{{__('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some formhumour, or randomised words which don\'t look even slightly believable. If you are going to use a passage. industry\'s standard dummy has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.')}}</p>
                        <p>{{__('Industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.')}}</p>
                    </div>
                    <div class="col-md-6 image">
                        <img src="{{asset('images/about.jpg')}}" alt="">
                    </div>
                </div>
        </div>
    </section>
        
            
        
        <!-- ################# Gallery Start Here #######################--->
        
        <div id="gallery" class="gallery container-fluid">
            <div class="container">
                <div class="row session-title">
                    <h2>{{__('Checkout Our Gallery')}}</h2>
                </div>
                <div class="gallery-row row">
                        <div id="gg-screen"></div>
                        <div class="gg-box">
                                <div class="gg-element">
                                    <img src="{{asset('images/gallery/g1.jpg')}}">
                                </div>
                                <div class="gg-element">
                                    <img src="{{asset('images/gallery/g2.jpg')}}">
                                </div>
                                <div class="gg-element">
                                    <img src="{{asset('images/gallery/g3.jpg')}}">
                                </div>
                                <div class="gg-element">
                                    <img src="{{asset('images/gallery/g4.jpg')}}">
                                </div>
                                <div class="gg-element">
                                    <img src="{{asset('images/gallery/g5.jpg')}}">
                                </div>
                                <div class="gg-element">
                                    <img src="{{asset('images/gallery/g6.jpg')}}">
                                </div>
                                <div class="gg-element">
                                    <img src="{{asset('images/gallery/g7.jpg')}}">
                                </div>
                                <div class="gg-element">
                                    <img src="{{asset('images/gallery/g8.jpg')}}">
                                </div>
                                <div class="gg-element">
                                    <img src="{{asset('images/gallery/g9.jpg')}}">
                                </div>
                                <div class="gg-element">
                                    <img src="{{asset('images/gallery/g10.jpg')}}">
                                </div>
                                
                                
                            </div>
                </div>
            </div>
        </div>
        
        
        
        <!-- ################# Donation Process Start Here #######################--->
        
        <section id="process" class="donation-care">
            <div class="container">
            <div class="row session-title">
                <h2>{{__('Donation Process')}}</h2>
                <p>{{__('The donation process from the time you arrive center until the time you leave')}}</p>
            </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 vd">
                        <div class="bkjiu">
                        <img src="{{asset('images/gallery/g1.jpg')}}" alt="">
                        <h4><b>1 - </b>{{__('Registration')}}</h4>
                        <p>{{__('Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis')}}</p>
                        <button class="btn btn-sm btn-danger">{{__('Readmore')}} <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 vd">
                        <div class="bkjiu">
                        <img src="{{asset('images/gallery/g2.jpg')}}" alt="">
                            <h4><b>2 - </b>{{__('Seeing')}}</h4>
                        <p>{{__('Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis')}}</p>
                        <button class="btn btn-sm btn-danger">{{__('Readmore')}} <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 vd">
                        <div class="bkjiu">
                        <img src="{{asset('images/gallery/g3.jpg')}}" alt="">
                            <h4><b>3 - </b>{{__('Donation')}}</h4>
                        <p>{{__('Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis')}}</p>
                        <button class="btn btn-sm btn-danger">{{__('Readmore')}} <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 vd">
                        <div class="bkjiu">
                            <img src="{{asset('images/gallery/g4.jpg')}}" alt="">
                            <h4><b>4 - </b>{{__('Save Life')}}</h4>
                            <p>{{__('Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis')}}</p>
                            <button class="btn btn-sm btn-danger">{{__('Readmore')}} <i class="fas fa-arrow-right"></i></button>
                        </div> 
                    </div>
                </div>
                
                
            </div>
        </section>
        
        
        
        
            <!--################### Our Blog Starts Here #######################--->
            <div id="blog" class="blog-container contaienr-fluid">
                <div class="container">
                    <div class="session-title row">
                    <h2>{{__('Latest Blog')}}</h2>
                    <p>{{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit velit consectetur adipiscing elit')}}.</p>
                    </div>
                    <div class="row news-row">
                        <div class="col-md-6">
                            <div class="news-card">
                                <div class="image">
                                    <img src="{{asset('images/blog/blog')}}_01.jpg" alt="">
                                </div>
                                <div class="detail">
                                    <h3>{{__('Latest News about Us')}}</h3>
                                    <p>{{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. ')}}</p>
                                    <p class="footp">
                                        {{__('27 Comments')}} <span>/</span>
                                        {{__('Blog Design')}} <span>/</span>
                                        {{__('Read More')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-card">
                                <div class="image">
                                    <img src="{{asset('images/blog/blog')}}_02.jpg" alt="">
                                </div>
                                <div class="detail">
                                    <h3>{{__('Apple Launch its New Phone')}}</h3>
                                    <p>{{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit.')}} </p>
                                    <p class="footp">
                                        {{__('27 Comments')}} <span>/</span>
                                        {{__('Blog Design')}} <span>/</span>
                                        {{__('Read More')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-card">
                                <div class="image">
                                    <img src="{{asset('images/blog/blog')}}_03.jpg" alt="">
                                </div>
                                <div class="detail">
                                    <h3>{{__('About Windows 10 Update')}}</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                    <p class="footp">
                                        {{__('27 Comments')}} <span>/</span>
                                        {{__('Blog Design')}} <span>/</span>
                                        {{__('Read More')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-card">
                                <div class="image">
                                    <img src="{{asset('images/blog/blog')}}_04.jpg" alt="">
                                </div>
                                <div class="detail">
                                    <h3>{{__('Latest News about Us')}}</h3>
                                    <p>{{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. ')}}</p>
                                    <p class="footp">
                                        {{__('27 Comments')}} <span>/</span>
                                        {{__('Blog Design')}} <span>/</span>
                                        {{__('Read More')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
        

    
        <!--*************** Footer  Starts Here *************** -->
        <footer id="contact" class="container-fluid">
            <div class="container">
                
                <div class="row content-ro">
                    <div class="col-lg-4 col-md-12 footer-contact">
                        <h2>{{__('Contact Informatins')}}</h2>
                        <div class="address-row">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                                <p>{{__('46-29 Indra Street, Southernbank, Tigaione, Toranto, 3006 Canada')}}</p>
                            </div>
                        </div>
                        <div class="address-row">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="detail">
                                <p>sales@testapp.com <br> support@testapp.com</p>
                            </div>
                        </div>
                        <div class="address-row">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="detail">
                                <p>+91 9751791203 <br> +91 9159669599</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 footer-links">
                    <div class="row no-margin mt-2">
                        <h2>{{__('Quick Links')}}</h2>
                        <ul>
                            <li>{{__('Home')}}</li>
                            <li>{{__('About Us')}}</li>
                            <li>{{__('Contacts')}}</li>
                            <li>{{__('Pricing')}}</li>
                            <li>{{__('Gallery')}}</li>
                            <li>{{__('Features')}}</li>

                        </ul>
                        </div>
                    <div class="row no-margin mt-1">
                        <h2 class="m-t-2">{{__('More Products')}}</h2>
                        <ul>
                            <li>{{__('Forum ')}}</li>
                            <li>{{__('Edu Smart')}}</li>
                            <li>{{__('Smart Event')}}</li>
                            <li>{{__('Smart School')}}</li>


                        </ul>
                    </div>

                    </div>
                    <div class="col-lg-4 col-md-12 footer-form">
                        <div class="form-card">
                            <div class="form-title">
                                <h4>{{__('Quick Message')}}</h4>
                            </div>
                            <div class="form-body">
                                <input type="text" placeholder="Enter Name" class="form-control">
                                <input type="text" placeholder="Enter Mobile no" class="form-control">
                                <input type="text" placeholder="Enter Email Address" class="form-control">
                                <input type="text" placeholder="Your Message" class="form-control">
                                <button class="btn btn-sm btn-primary w-100">{{__('Send Request')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copy">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <p>Copyright © <a href="#">testapp.com</a> | All right reserved.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 socila-link">
                            <ul>
                                <li><a><i class="fab fa-github"></i></a></li>
                                <li><a><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a><i class="fab fa-twitter"></i></a></li>
                                <li><a><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        
    </body>

</html>
