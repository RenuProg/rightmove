@extends('master')
@section('content')
           
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
                                <form action="{{route('postquery.store')}}" id="xs-contact-form" class="contact-form style2" method="post">
                                    @csrf
                                 <div class="row">
                                        <div class="col-lg-6">
                                             @if ($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
                                            <input type="text" placeholder="First Name *" name="first_name"
                                                id="xs_contact_name" class="form-control" value="{{old('first_name')}}">
                                        </div>
                                        <div class="col-lg-6">
                                             @if ($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
                                            <input type="text" placeholder="Last Name *" name="last_name"
                                                id="xs_contact_last_name" class="form-control" value="{{old('last_name')}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                             @if ($errors->has('phone_number'))
                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                @endif
                                            <input type="number" placeholder="Phone Number *" name="phone_number"
                                                id="xs_contact_number" class="form-control" value="{{old('phone_number')}}">
                                        </div>
                                        <div class="col-lg-6">
                                            @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                                            <input type="email" placeholder="Email *" name="email" id="xs_contact_email"
                                                class="form-control" value="{{old('email')}}">
                                        </div>
                                    </div>
                                     @if ($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                @endif
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
       
@endsection
