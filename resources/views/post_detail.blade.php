@extends('master')
@section('content')
<!--breadcumb start here-->
<div class="xs-inner-banner inner-banner2" style="background-image">
    <img src="{{asset('images/bg/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="inner-banner">
                    <h2 class="inner-banner-title"></h2>
                    
                </div>
            </div>
        </div>
    </div>
</div><!--breadcumb end here-->
<!-- End welcome section -->



<!-- agency company intro section -->

    <div class="container" style="padding-top:80px;padding-bottom:80px">
        <div class="row">
<div class="col-lg-6"><!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
        <?php          
  $arrayOfFiles = explode('|',$property_detail[0]->image);
  foreach ($arrayOfFiles as $key=>$singleFile) {
  
    ?>
     
    <div class="carousel-item {{$key==0 ?'active':''}}" >
      <img class="d-block w-100 image-carosel" src="{{asset('uploads/'.$singleFile)}}"
        alt="">
    </div>
     
    
    <?php
  }
    ?>
  <!--   <div class="carousel-item active">
      <img class="d-block w-100 image-carosel" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg"
        alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 image-carosel" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg"
        alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 image-carosel" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg"
        alt="Third slide">
    </div> -->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
  <ol class="carousel-indicators">
 
    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" width="100">
    </li>
    <li data-target="#carousel-thumb" data-slide-to="1">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" width="100">
    </li>
    <li data-target="#carousel-thumb" data-slide-to="2">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" width="100">
    </li>
  </ol>
</div>
<p class="detail">{{$property_detail[0]->about_property}}.</p>
</div>

<div class="col-lg-6 col6-border">
   <span style="font-size: 24px!important;color:#000">Property Name </span><br>
   <span style="font-size: 17px;font-weight: bold;color:#000;
    " class="priceFont"><i class="fa fa-inr"></i> /-{{$property_detail[0]->price}}</span><br><br>
    <div class="row" style="padding-bottom: 25px">
        <div class="col-md-6">
            
<p class="deta"><i class="fa fa-cog" aria-hidden="true" id="detail-icon"></i>  Property Type - {{$property_detail[0]->property_type}}</p></div>
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-check" aria-hidden="true" id="detail-icon"></i>
  Property Sub Type -{{$property_detail[0]->type}}</p>
        </div>
</div>
<div class="row pb" >
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-info" aria-hidden="true" id="detail-icon" style="padding-left: 10px"></i>
  Title - {{$property_detail[0]->property_title}}</p>
        </div>
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-area-chart" aria-hidden="true" id="detail-icon" style="padding-left: 10px"></i>
  Total Area - {{$property_detail[0]->total_area}} Sq.Ft.</p>
        </div>
    </div>

    <div class="row pb" >
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-area-chart" aria-hidden="true" id="detail-icon" style="padding-left: 10px"></i>
  BuiltUp Area - {{$property_detail[0]->builtup_area}} Sq.Ft.</p>
        </div>
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-area-chart" aria-hidden="true" id="detail-icon" style="padding-left: 10px"></i>
  Carpet Area - {{$property_detail[0]->carpet_area}}.Ft.</p>
        </div>
    </div>

    <div class="row pb">
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-map-marker" aria-hidden="true" id="detail-icon" style="padding-left: 10px"></i>
  Location - {{$property_detail[0]->location}}</p>
        </div>
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-money" aria-hidden="true" id="detail-icon" style="padding-left: 10px"></i>
  Price - {{$property_detail[0]->price}}-/</p>
        </div>
    </div>

    <div class="row pb">
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-bath" aria-hidden="true" id="detail-icon" style="padding-left: 10px"></i>
  Bathroom - {{$property_detail[0]->bathroom}} Bthroom</p>
        </div>
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-bed" aria-hidden="true" id="detail-icon" style="padding-left: 10px"></i>
  BedRoom - {{$property_detail[0]->bedroom}} BedRoom</p>
        </div>
    </div>

    <div class="row pb">
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-building" aria-hidden="true" id="detail-icon" style="padding-left: 10px"></i>
  Balcony - {{$property_detail[0]->balcony}} Balcony</p>
        </div>
        <div class="col-md-6">
            <p class="deta"><i class="fa fa-building" aria-hidden="true" id="detail-icon" style="padding-left: 10px"></i>
  Floor - {{$property_detail[0]->balcony}} Floors</p>
        </div>
    </div>

    
 </div>

</div>



<div class="xs-sidebar-group contact-group">
    <div class="xs-overlay black-bg"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading media">
                <div class="media-body">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
            </div>
            <div class="xs-empty-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="agency-section-title text-center style6">
                                <h4 class="main-title">Send Query</h4>
                                <div class="border-multiple">
                                    <span class="first"></span>
                                    <span class="second"></span>
                                    <span class="third"></span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="from-wraper">
                                <form action="#" id="xs-contact-form" class="contact-form style2" method="post">
                                    <input type="hidden" name="_token" value="IXav5YRhnRlxHGc6fMwN9IwHYPoKRdwQYGZyco62">                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="First Name *" name="firstname"
                                                id="xs_contact_name" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Last Name *" name="lastname"
                                                id="xs_contact_last_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="number" placeholder="Phone Number *" name="phonenumber"
                                                id="xs_contact_number" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" placeholder="Email *" name="email" id="xs_contact_email"
                                                class="form-control">
                                        </div>
                                    </div>
                                    
                                    <textarea name="message" id="x_contact_massage" placeholder="Your Message... *"
                                        class="form-control" cols="30" rows="10"></textarea>
                                    <input type="hidden" name="from" id="xs_contact_from">
                                    <div class="btn-wraper">
                                        <input type="submit" name="submit" id="xs_contact_submit"
                                            class="btn btn-primary" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>  
<div class="xs-sidebar-group download-group">
    <div class="xs-overlay black-bg"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading media">
                <div class="media-body">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
            </div>
            <div class="xs-empty-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="agency-section-title text-center style6">
                                <h4 class="main-title">Post Your Advertisement Here</h4>
                                <div class="border-multiple">
                                    <span class="first"></span>
                                    <span class="second"></span>
                                    <span class="third"></span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div class="from-wraper">
                                <form action="#" id="xs-download-form" class="contact-form style2" method="post"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="IXav5YRhnRlxHGc6fMwN9IwHYPoKRdwQYGZyco62">                                    
                                    <div class="row">
                                        <div class="col-lg-3">
                                    <select class="form-control1" id="MainPropertyType" name="MainPropertyType" required="" style="border:1px solid #e7e7e7">
                                <option>Property type*</option>
                                <option value="Residential">Residential</option>
                                <option value="Commercial">Commercial</option>
                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                           <select class="form-control1" name="PropertyType" id="PropertyType" required="">
                                    <option value="Offices">Property Sub Type</option>
                                    <option value="Offices">Offices</option>
                                    <option value="Retail">Retail</option>
                                    <option value="Commercial Land">Commercial Land</option>
                                    <option value="Industry">Industry</option>
                                    <option value="Storage">Storage</option>
                                    <option value="Hospitality">Hospitality</option>
                                    <option value="Apartment/Flat/Builder Floor">Apartment/Flat/Builder Floor</option>
                                    <option value="Residential Land">Residential Land</option>
                                    <option value="House/Villa">House/Villa</option>
                                    <option value="Farm House">Farm House</option>
                                    <option value="Others">Others</option>
                                </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" placeholder="Title *" name="firstname"
                                                id="xs_download_first_name" class="form-control">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="Area" id="Area" placeholder="Total Area*" class="form-control1"required="">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                     <input type="text" name="Area" id="Area" placeholder="Builtup Area*" class="form-control1"required="">
                                        </div>
                                        <div class="col-lg-3">
                                           <input type="text" name="Area" id="Area" placeholder="Carpet Area*" class="form-control1"required="">
                                        </div>
                                        <div class="col-lg-3">
                                             <input type="text" name="Area" id="Area" placeholder="Location*" class="form-control1"required="">
                                        </div>
                                        <div class="col-lg-3">
                                             <input type="text" name="Area" id="Area" placeholder="Price*" class="form-control1"required="">
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col-lg-3">
                                             <select name="Bathroom" class="form-control1">
                                    <option value="">Bathroom</option>
                                    <option value="0">0 Bathroom</option>
                                    <option value="1">1 Bathroom</option>
                                    <option value="2">2 Bathrooms</option>
                                    <option value="3">3 Bathrooms</option>
                                    <option value="4">4 Bathrooms</option>
                                    <option value="5">5 Bathrooms</option>
                                    <option value="6">6 Bathrooms</option>
                                    <option value="6+">6+ Bathrooms</option>
                                </select>
                                   
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="NumberOfBedroom" class="form-control1">
                                        <option value="">Bedroom</option>
                                        <option value="0">0 Bedroom</option>
                                        <option value="1">1 Bedroom</option>
                                        <option value="2">2 Bedrooms</option>
                                        <option value="3">3 Bedrooms</option>
                                        <option value="4">4 Bedrooms</option>
                                        <option value="5">5 Bedrooms</option>
                                        <option value="6">6 Bedrooms</option>
                                        <option value="6+">6+ Bedrooms</option>
                                    </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="Balcony" class="form-control1">
                                        <option value="">Balcony</option>
                                        <option value="0">0 Balcony</option>
                                        <option value="1">1 Balcony</option>
                                        <option value="2">2 Balconys</option>
                                        <option value="3">3 Balconys</option>
                                        <option value="4">4 Balconys</option>
                                        <option value="5">5 Balconys</option>
                                        <option value="6">6 Balconys</option>
                                        <option value="6+">6+ Balconys</option>
                                    </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="AvailableFloor" class="form-control1">
                                    <option value="">Available Floor</option>
                                    <option value="0">0 Floor</option>
                                    <option value="1">1 Floor</option>
                                    <option value="2">2 Floors</option>
                                    <option value="3">3 Floors</option>
                                    <option value="4">4 Floors</option>
                                    <option value="5">5 Floors</option>
                                    <option value="6">6 Floors</option>
                                    <option value="7">7 Floors</option>
                                    <option value="8">8 Floors</option>
                                    <option value="9">9 Floors</option>
                                    <option value="10">10 Floors</option>
                                    <option value="11">11 Floors</option>
                                    <option value="12">12 Floors</option>
                                    <option value="13">13 Floors</option>
                                    <option value="14">14 Floors</option>
                                    <option value="15">15 Floors</option>
                                    <option value="16">16 Floors</option>
                                    <option value="17">17 Floors</option>
                                    <option value="18">18 Floors</option>
                                    <option value="19">19 Floors</option>
                                    <option value="20">20 Floors</option>
                                </select>
                                        </div>
                                        
                                    </div>


                                    <div class="row">
                                        
                                        
                                        <div class="col-lg-6">
                                            <textarea type="text" name="Area" id="Area" placeholder="About Property*" class="form-control1"required=""></textarea>
                                        </div>

                                        <div class="col-lg-6">
                                            <input type="file" name="files[]" multiple class="form-control1">
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="btn-wraper">
                                        <input type="submit" name="submit" id="xs_download_submit"
                                            class="btn btn-primary" value="Submit">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>  
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay black-bg"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    <i class="icon icon-cross"></i>
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-logo-wraper">
                    <a href="index-2.html">
                        <img src="storage/settings/June2019/NkqJmjVfVYE9cegFgw0V.png" alt="sidebar logo">
                    </a>
                </div>
              
                <ul class="sideabr-list-widget">
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="images/location.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>18, Hartron Complex, Electronic city, Udyog Vihar, Gurgaon ( HR ) India</p>
                                
                            </div>
                        </div> 
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="images/mail.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="mailto:support@vipmanagement.in">support@vipmanagement.in</a>
                                
                            </div>
                        </div> 
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="images/phone.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="tel:(+91) 08383000439">(+91) 8383000439</a>
                                
                            </div>
                        </div> 
                    </li>
                </ul> 
                
                <ul class="social-list version-2">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                </ul> 
                
            </div>
        </div>
    </div>
</div></div>
@endsection