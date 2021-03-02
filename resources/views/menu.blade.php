@extends('Layout')
        @section('title')
            menu
        @endsection
    @section('links')
       
	<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="owl-carousel.css">
        <link rel="stylesheet" href="home.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4c940fa885.js" crossorigin="anonymous"></script>
    @endsection
	 
  <!-- /* ****************************************** start menue*********************************************** */ -->
  @section('content')
       <!-- **************************************start slider_show**************************************************** -->
     
     <section class="slider">
         <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
             <div class="carousel-inner">
                 <div class="carousel-item active smg" style="background-image: url('imgs/bg_1.jpg');
                                                              background-repeat: no-repeat;
                                                              background-size: cover;">
                    <div class="overlay"></div>
                    <div class="content-of-header">
                    <div class="container">
                         <div class="row text-center justify-content-center align-items-center">
                             <div class="col">
                                 <span>Feliciano</span>
                                 <h1>Best Restaurant</h1>
                             </div>
                         </div>
                    </div>
                    </div>
                 </div>
                 <div class="carousel-item  smg" style="background-image: url(imgs/bg_2.jpg);
                                                              background-repeat: no-repeat;
                                                              background-size: cover;">
                 <div class="overlay"></div>
                 <div class="content-of-header">
                    <div class="container">
                         <div class="row text-center justify-content-center align-items-center">
                             <div class="col">
                                 <span>Feliciano</span>
                                 <h1>Nutritious & Tasty</h1>
                             </div>
                         </div>
                    </div>
                    </div>
                 </div>
                 <div class="carousel-item  smg" style="background-image: url(imgs/bg_3.jpg);
                                                              background-repeat: no-repeat;
                                                              background-size: cover;">
                 <div class="overlay"></div>
                 <div class="content-of-header">
                    <div class="container">
                         <div class="row text-center justify-content-center align-items-center">
                             <div class="col">
                                 <span>Feliciano</span>
                                 <h1>Delicious Specialties</h1>
                             </div>
                         </div>
                    </div>
                    </div>
                 </div>
                 <div class="carousel-item smg" style="background-image: url(imgs/bg_4.jpg);
                                                              background-repeat: no-repeat;
                                                              background-size: cover;">
                 <div class="overlay"></div>
                 <div class="content-of-header">
                    <div class="container">
                         <div class="row text-center justify-content-center align-items-center">
                             <div class="col">
                                 <span>Feliciano</span>
                                 <h1>Best Restaurant</h1>
                             </div>
                         </div>
                    </div>
                    </div>
                 </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
     </section>
      <!-- **************************************end slider_show**************************************************** -->

      <!-- **************************************start menu**************************************************** -->
	 <section class="breakfast-menu my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="breakfast-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="imgs/menus/breakfast_menu.jpg" alt="Breakfast">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>
                                    Breakfast Menu
                                    <a class="btn btn-info" href="{{ route('addmenus') }}">Add</a>
                                </h2>
                                <div id="owl-breackfast" class="owl-carousel owl-theme">
                                    @if($menus->category = "breackfast")
                                    @foreach($menus as $meal)
                                        <div id="owl-breakfast" class="owl-carousel owl-theme">
                                            <div class="item col-md-12">
                                                <div class="food-item">
                                                    <img src="{{$meal->photo}}" alt="">
                                                    <div class="price">{{$meal->price}}</div>
                                                    <div class="text-content">
                                                        <h4>{{$meal->title}}</h4>
                                                        <p>{{$meal->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                    {{ $menus->render() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="lunch-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="lunch-menu-content">
                        <div class="row">
                            <div class="col-md-7">
                                <h2>
                                    Lunch Menu
                                    <a class="btn btn-info" href="{{ route('addmenus') }}">Add</a>
                                </h2>
                                <div id="owl-lunch" class="owl-carousel owl-theme">
                                    @if($menus->category = "lunch")
                                    @foreach($menus as $meal)
                                        <div id="owl-lunch" class="owl-carousel owl-theme">
                                            <div class="item col-md-12">
                                                <div class="food-item">
                                                    <img src="{{$meal->photo}}" alt="">
                                                    <div class="price">{{$meal->price}}</div>
                                                    <div class="text-content">
                                                        <h4>{{$meal->title}}</h4>
                                                        <p>{{$meal->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="imgs/menus/lunch_menu.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dinner-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="dinner-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="imgs/menus/dinner_menu.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>
                                    Dessert Menu
                                    <a class="btn btn-info" href="{{ route('addmenus') }}">Add</a>
                                </h2>
                                <div id="owl-dinner" class="owl-carousel owl-theme">
                                    @if($menus->caregory = "dinner")
                                    @foreach($menus as $meal)
                                    <div id="owl-dinner" class="owl-carousel owl-theme">
                                        <div class="item col-md-12">
                                            <div class="food-item">
                                                <img src="{{$meal->photo}}" alt="">
                                                <div class="price">{{$meal->price}}</div>
                                                <div class="text-content">
                                                    <h4>{{$meal->title}}</h4>
                                                    <p>{{$meal->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- ********************************************************** --> 

<section class="lunch-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="lunch-menu-content">
                        <div class="row">
                            <div class="col-md-7">
                                <h2>
                                    Lunch Menu
                                    <a class="btn btn-info" href="{{ route('addmenus') }}">Add</a>
                                </h2>
                                <div id="owl-dessert" class="owl-carousel owl-theme">
                                    @if($menus->caregory = "dessert")
                                    @foreach($menus as $meal)
                                        <div id="owl-dessert" class="owl-carousel owl-theme">
                                            <div class="item col-md-12">
                                                <div class="food-item">
                                                    <img src="{{$meal->photo}}" alt="">
                                                    <div class="price">{{$meal->price}}</div>
                                                    <div class="text-content">
                                                        <h4>{{$meal->title}}</h4>
                                                        <p>{{$meal->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="imgs/menus/dessert3.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dinner-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="dinner-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="imgs/menus/drink2.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>
                                    Drinks Menu
                                    <a class="btn btn-info" href="{{ route('addmenus') }}">Add</a>
                                </h2>
                                <div id="owl-drink" class="owl-carousel owl-theme">
                                    @if($menus->caregory = "drinks")
                                    @foreach($menus as $meal)
                                        <div id="owl-drink" class="owl-carousel owl-theme">
                                            <div class="item col-md-12">
                                                <div class="food-item">
                                                    <img src="{{$meal->photo}}" alt="">
                                                    <div class="price">{{$meal->price}}</div>
                                                    <div class="text-content">
                                                        <h4>{{$meal->title}}</h4>
                                                        <p>{{$meal->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- /* ******************************************end menue*********************************************** */ -->

    @endsection

    @section('end_links')
    <script>
            $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
            $('.navi').addClass('color-change');
            $('.navi a').addClass('li-change');
            } else {
            $('.navi').removeClass('color-change');
            $('.navi a').removeClass('li-change');
            }
        });
    </script>
    <script src="plugins.js"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    
    @endsection