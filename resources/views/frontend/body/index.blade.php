@extends('frontend.main')

@section('content')

<!--Home-->
<section id="home">

        <div id="home-cover" class="bg-parallax animated fadeIn">

            <div id="home-content-box">

                <div id="home-content-box-inner" class="text-center">

                    <div id="home-heading" class="animated zoomIn">
                        <h3>Travel Where You Want</h3>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry!!<br/>
                        It is a long established fact that a reader will be distracted</h4>
                    </div>

                    <div id="home-btn" class="animated zoomIn">
                        <a  class="btn btn-lg btn-general btn-white smooth-scroll" href="#services" role="button" title="View our work ">View our work</a>
                    </div>

                </div>

            </div>

        </div>

</section>

    <section id="services">
        <div class="content-box">

            <div class="content-title wow animated fadeInDown " data-wow-duration="1s" data-wow-delay=".2s">
                <h3> Our Services</h3>


                <div class="content-title-underline"></div>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="icon-text">
                                <h3>Electronics</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="icon-text">
                                <h3>Electronics</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="icon-text">
                                <h3>Electronics</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="icon-text">
                                <h3>Electronics</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="icon-text">
                                <h3>Electronics </h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="icon-text">
                                <h3>Electronics</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="products">
        <div class="content-box">

            <div class="content-title wow animated fadeInDown " data-wow-duration="1s" data-wow-delay=".2s">
                <h3> Our Products</h3>

                <div class="content-title-underline"></div>

            </div>
            <div class="container-fluid">
                <div class="row">
                        @foreach ($products as $product)
                    <div class="col-md-2">
                        <div class="card-content">
                            <div class="card">
                            <img class="card-img-top img-responsive" src="../admin/images/{{$product->image}}" alt="Card image cap">
                              <div class="card-body">
                              <h5 class="product-title">{{$product->product_name}}</h5>
                              <h6 class="product-price">Rs. {{$product->price}}</h6>
                              <h6 class="product-brand">{{$product->product_brand}}</h6>

                                <a href="#" class="btn btn-service btn-blue">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
{{--
                <div class="col-md-2">
                    <div class="card-content">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="img/tv2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="product-title">Product Name</h4>
                                <h5 class="product-price">Rs. 1000</h5>
                                <h5 class="product-brand">Product Brand</h5>

                                <a href="#" class="btn btn-service btn-blue">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card-content">
                        <div class="card">
                          <img class="card-img-top img-responsive" src="img/tv3.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="product-title">Product Name</h4>
                            <h5 class="product-price">Rs. 1000</h5>
                            <h5 class="product-brand">Product Brand</h5>

                            <a href="#" class="btn btn-service btn-blue">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card-content">
                    <div class="card">
                      <img class="card-img-top img-responsive" src="img/tv1.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h4 class="product-title">Product Name</h4>
                        <h5 class="product-price">Rs. 1000</h5>
                        <h5 class="product-brand">Product Brand</h5>

                        <a href="#" class="btn btn-service btn-blue">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card-content">
                <div class="card">
                  <img class="card-img-top img-responsive" src="img/tv2.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="product-title">Product Name</h4>
                    <h5 class="product-price">Rs. 1000</h5>
                    <h5 class="product-brand">Product Brand</h5>

                    <a href="#" class="btn btn-service btn-blue">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="card-content">
            <div class="card">
              <img class="card-img-top img-responsive" src="img/tv3.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="product-title">Product Name</h4>
                <h5 class="product-price">Rs. 1000</h5>
                <h5 class="product-brand">Product Brand</h5>

                <a href="#" class="btn btn-service btn-blue">View Details</a>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-2">
        <div class="card-content">
            <div class="card">
              <img class="card-img-top img-responsive" src="img/tv1.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="product-title">Product Name</h4>
                <h5 class="product-price">Rs. 1000</h5>
                <h5 class="product-brand">Product Brand</h5>

                <a href="#" class="btn btn-service btn-blue">View Details</a>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-2">
        <div class="card-content">
            <div class="card">
              <img class="card-img-top img-responsive" src="img/tv2.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="product-title">Product Name</h4>
                <h5 class="product-price">Rs. 1000</h5>
                <h5 class="product-brand">Product Brand</h5>

                <a href="#" class="btn btn-service btn-blue">View Details</a>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-2">
        <div class="card-content">
            <div class="card">
              <img class="card-img-top img-responsive" src="img/tv3.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="product-title">Product Name</h4>
                <h5 class="product-price">Rs. 1000</h5>
                <h5 class="product-brand">Product Brand</h5>

                <a href="#" class="btn btn-service btn-blue">View Details</a>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-2">
        <div class="card-content">
            <div class="card">
              <img class="card-img-top img-responsive" src="img/tv1.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="product-title">Product Name</h4>
                <h5 class="product-price">Rs. 1000</h5>
                <h5 class="product-brand">Product Brand</h5>

                <a href="#" class="btn btn-service btn-blue">View Details</a>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-2">
        <div class="card-content">
            <div class="card">
              <img class="card-img-top img-responsive" src="img/tv3.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="product-title">Product Name</h4>
                <h5 class="product-price">Rs. 1000</h5>
                <h5 class="product-brand">Product Brand</h5>

                <a href="#" class="btn btn-service btn-blue">View Details</a>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-2">
        <div class="card-content">
            <div class="card">
              <img class="card-img-top img-responsive" src="img/tv2.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="product-title">Product Name</h4>
                <h5 class="product-price">Rs. 1000</h5>
                <h5 class="product-brand">Product Brand</h5>

                <a href="#" class="btn btn-service btn-blue">View Details</a>
               </div>
            </div>
        </div>
    </div> --}}


    </div>
    </div>
    </div>
    </section>


    <section id="contact">
        <div class="content-box">

            <div class="content-title wow animated fadeInDown " data-wow-duration="1s" data-wow-delay=".2s">
                <h3> Contact Us</h3>

                <div class="content-title-underline"></div>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 contact-img" style="background-color: #b2bec3">
                        <div class="contact-text">
                            <h3>Feel Free To Contact Us Anytime & For Anything</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="icon">
                                <i class="fa fa-map"></i>
                            </div>
                            <div class="icon-text">
                                <br/>
                                <h5>Jhaukhel-5, ChanguNarayan<br/><br/>
                                Bhaktapur,Nepal</h5>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="icon-text">
                                <br/>
                                <h5>+977-9812343455<br/><br/>
                                01-6610910</h5>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="icon-text">
                                <br/>
                                <h5>Email: hahaha@gmaio.com<br/><br/>
                                huhahaha@gmail.com</h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br/>
                <div class="row form-style">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 ">
                        <form>
                          <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="number" class="form-control" id="phone" placeholder="Phone Number">
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>



                        <button type="submit" class="btn btn-blue btn-service">Submit</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <div class="container-fluid" style="width: 100%; margin-top: 20px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.463073548424!2d85.42591361406991!3d27.672079133649973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aafec32df31%3A0xdda339e731af9bfd!2sBhaktapur+Durbar+Square!5e0!3m2!1sen!2snp!4v1548091457235" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </div>
    </section>

@endsection
