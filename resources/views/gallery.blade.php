@extends('layouts.app', [
        'title' => 'Photo Gallery'
])

@section('content')
<div class=" menu ">
   @include('sections.navbar')
        <h1 class="display-3  p-2 "  style="text-shadow: 3px 2px black;">Outright Foods</h1>
        <div class="panel-group">
                <div class="panel panel-info">
                        <div class="panel-heading">
                                <h3>Photo Gallery</h3>
                        </div>
                        <div class="panel-body">
                                <section id="photos">
                                        <img src="/images/image (2).jpg" alt="">
                                        <img src="/images/image (3).jpg" alt="">
                                        <img src="/images/image (4).jpg" alt="">
                                        <img src="/images/image.png" alt="">
                                        <img src="/images/card.jpg" alt="">
                                        <img src="/images/val1.jpg" alt="">
                                        <img src="/images/1.jpg" alt="">
                                        <img src="/images/image (1).jpg" alt="">
                                        <img src="/images/2.jpg" alt="">
                                        <img src="/images/3.jpg" alt="">
                                        <img src="/images/4.jpg" alt="">
                                        <img src="/images/val3.jpg" alt="">
                                        <img src="/images/curry.jpg" alt="">
                                        <img src="/images/fishcakes.jpg" alt="">
                                        <img src="/images/fruit.jpg" alt="">
                                        <img src="/images/fish.jpg" alt="">
                                        <img src="/images/salmon.jpg" alt="">
                                        <img src="/images/puddings.jpg" alt="">
                                        <img src="/images/val2.jpg" alt="">
                                        <img src="/images/salad.jpg" alt="">
                                        <img src="/images/roast.jpg" alt="">
                                </section>
                        </div>
                        <br>
                </div>
        </div>
</div>



@endsection