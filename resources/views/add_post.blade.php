@extends('master')
@section('content')
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
                                <form action="{{route('post.store')}}" id="xs-download-form" class="contact-form style2" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                                                       
                                    <div class="row">
                                        <div class="col-lg-3">
                                             @if ($errors->has('property_type'))
                    <span class="text-danger">{{ $errors->first('property_type') }}</span>
                @endif
                                    <select class="form-control1" id="MainPropertyType" name="property_type" style="border:1px solid #e7e7e7">
                              
        <option value="">Select Property Type</option>
         @foreach($property_type as $property)
        <option value="{{$property->id}}" >{{  $property->property_type}}</option>
        @endforeach
    
                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                             @if ($errors->has('property_sub_type'))
                    <span class="text-danger">{{ $errors->first('property_sub_type') }}</span>
                @endif
                                           <select class="form-control1" name="property_sub_type" id="PropertyType" >
                                    <!-- <option value="">Property Sub Type</option> -->
                                    
                                </select>
                                        </div>

                                        <div class="col-lg-3">
                                            @if ($errors->has('property_title'))
                    <span class="text-danger">{{ $errors->first('property_title') }}</span>
                @endif
                                        <input type="text" placeholder="Title *" name="property_title"
                                                id="xs_download_first_name" class="form-control" value="{{ old('property_title') }}">

                                        </div>
                                        <div class="col-lg-3">
                                             @if ($errors->has('total_area'))
                    <span class="text-danger">{{ $errors->first('total_area') }}</span>
                @endif
                                            <input type="text" name="total_area" id="Area" placeholder="Total Area*" class="form-control1" value="{{ old('total_area') }}">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                             @if ($errors->has('builtup_area'))
                    <span class="text-danger">{{ $errors->first('builtup_area') }}</span>
                @endif
                                     <input type="text" name="builtup_area" id="Area" placeholder="Builtup Area*" class="form-control1" value="{{ old('builtup_area') }}">
                                        </div>
                                        <div class="col-lg-3">
                                            @if ($errors->has('carpet_area'))
                    <span class="text-danger">{{ $errors->first('carpet_area') }}</span>
                @endif
                                           <input type="text" name="carpet_area" id="Area" placeholder="Carpet Area*" class="form-control1" value="{{ old('carpet_area') }}">
                                        </div>
                                        <div class="col-lg-3">
                                             @if ($errors->has('location'))
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                @endif
                                             <input type="text" name="location" id="Area" placeholder="Location*" class="form-control1" value="{{ old('location') }}">
                                        </div>
                                        <div class="col-lg-3">
                                              @if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                                             <input type="text" name="price" id="Area" placeholder="Price*" class="form-control1"  value="{{ old('price') }}">
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col-lg-3">
                                              @if ($errors->has('bathroom'))
                    <span class="text-danger">{{ $errors->first('bathroom') }}</span>
                @endif
                                             <select name="bathroom" class="form-control1">
                                    <option value="">Bathroom</option>
                                     @foreach($bedroom as $bedrooms)
        <option value="{{$bedrooms->id}}" >{{  $bedrooms->bedroom}}</option>
        @endforeach
                                </select>
                                   
                                        </div>
                                        <div class="col-lg-3">
                                            @if ($errors->has('bedroom'))
                    <span class="text-danger">{{ $errors->first('bedroom') }}</span>
                @endif
                                            <select name="bedroom" class="form-control1">
                                        <option value="">Bedroom</option>
                                         @foreach($bathroom as $bathrooms)
        <option value="{{$bathrooms->id}}" >{{  $bathrooms->bathroom}}</option>
        @endforeach
                                    </select>
                                        </div>
                                        <div class="col-lg-3">
                                             @if ($errors->has('balcony'))
                    <span class="text-danger">{{ $errors->first('balcony') }}</span>
                @endif
                                            <select name="balcony" class="form-control1">
                                        <option value="">Select balcony</option>
         @foreach($balcony as $balconies)
        <option value="{{$balconies->id}}" >{{  $balconies->balcony}}</option>
        @endforeach
                                    </select>
                                        </div>
                                        <div class="col-lg-3">
                                             @if ($errors->has('floor'))
                    <span class="text-danger">{{ $errors->first('floor') }}</span>
                @endif
                                            <select name="floor" class="form-control1">
                                    <option value="">Available Floor</option>
                                    @foreach($floor as $floors)
        <option value="{{$floors->id}}" >{{  $floors->floor}}</option>
        @endforeach
                                </select>
                                        </div>
                                        
                                    </div>


                                    <div class="row">
                                        
                                        
                                        <div class="col-lg-6">
                                            @if ($errors->has('about'))
                    <span class="text-danger">{{ $errors->first('about') }}</span>
                @endif
                                            <textarea type="text" name="about" id="Area" placeholder="About Property*" class="form-control1" ></textarea>
                                        </div>

                                        <div class="col-lg-6">
                                           
                                            <input type="file" name="image[]" multiple class="form-control1">
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
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script type="text/javascript">
$(document).ready(function()
{
$("#MainPropertyType").change(function()
{
var property_type_id=$(this).val();
//alert(property_type_id);


 
           
 $.ajax({
    type: "POST",
    url: "{{ route('get_sub_type') }}",
    data: { id: property_type_id, _token: '{{csrf_token()}}' },
    success: function (data) {
         $('#PropertyType').html(data);
    },
    error: function (data, textStatus, errorThrown) {
        console.log(data);

    },
});
 
});
});
</script>