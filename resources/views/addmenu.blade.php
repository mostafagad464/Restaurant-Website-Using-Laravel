@extends('Layout')
        @section('title')
            ADD menue
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
    
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <form method="POST" action="{{ route('storemenus') }}" enctype="multipart/form-data" class="py-5">
                    @csrf
                    <div class="form-group ">
                        <label  class="h2">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="enter menu title" value="{{ old('title')}}" >
                    </div>
                    <div class="form-group">
                        <label  class="h2">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="enter menu price" value="{{ old('price')}}" >
                    </div>
                    <div class="form-group">
                        <label  class="h2">Offer</label><br>
                        <input type="radio" name="offer" value="1" class="" >Yes
                        <input type="radio" name="offer" value="0" class="" >No
                    </div>
                    <div class="form-group">
                        <label  class="h2">Description</label>
                        <input  type="text" name="description" class="form-control" placeholder="enter menu description" value="{{ old('description')}}" >
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleFormControlFile1" class="h2">Uplode Image</label>
                        <input type="file" name="photo">
                    </div> -->
                    <!-- <div class="form-group">
                        <label  class="h2">Category</label>
                        <input  type="text" name="category" class="form-control" placeholder="enter menu category" value="{{ old('category')}}" >
                    </div> -->
                    <div class="form-group">
                        <label class="h2">category</label>
                        <select name="category" class="form-control">
                            <option value="breackfast" selected="selected">breackfast</option>
                            <option value="lunch" >lunch</option>
                            <option value="dinner" >dinner</option>
                            <option value="dessert">dessert</option>
                            <option value="drinks" >drinks</option>
                        </select>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Add Menu</button>
                </form>
            </div>
        </main>
    </div>

      <!-- **************************************start form**************************************************** -->
                
         <!-- /* ******************************************end form*********************************************** */ -->

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
