@extends('layouts.app', [
    'title' => 'Contact Us'
])

@section('content')
<div class="menu" >
        @include('sections.navbar')
        <h1 class="display-3  p-2 "  style="text-shadow: 3px 2px black;">Outright Foods</h1>
       <div>
                <h3>Contact Us</h3>
              <p>
                  For any enquires and bookings, please contact us on:
                  <br>
                  <i class="fas fa-phone m-2" style="color:lightgray;"></i>
                  <br>
                  <a href="tel:+07507697251"  style="font-size:x-large; color:white;">
                        07507697251
                  </a>
                  <br> 
                  or 
                  <br>
                  <a href="tel:+07568089709"  style="font-size:x-large; color:white;">
                        07568089709
                  </a>
                  <br>
                  <i class="far fa-envelope m-2" style="color:lightgray;"></i>
                  <br>
                  <a href="mailto: outrightfoods@gmail.com"style="font-size:x-large; color:white;"> outrightfoods@gmail.com</a>
                  <br>
                  <h3 class="m-2">Thank you for visiting & we look forward to hear from you soon </h3>
              </p>
              <img src="/images/puddings.jpg" alt="">
              <br>
       </div>
</div>


@endsection