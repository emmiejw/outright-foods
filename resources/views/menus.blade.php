@extends('layouts.app')

@section('content')
<div class="container menu">
    @include('sections.navbar')
    <div class="text-center">
        <h1 class="display-3  p-2 " style="text-shadow: 3px 2px black;">Outright Foods
        </h1>
        <h3>Function & Catering Menu</h3>
        <div>. . . . </div>

        <div id="accordion" class="my-3">
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                        Childrens Buffet Menus
                    </a>
                </div>
                <div id="collapseOne" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                        <h3 style="font-weight:700;">Menu 1</h3>
                        <h5 style="font-weight:600;">£7 per person</h5>
                        <ul style="list-style-type: none;  margin: 0;
                        padding: 0;">
                            <li>Chicken Nuggets</li>
                            <li>Sausage Rolls</li>
                            <li>Cheese Cubes (v)</li>
                            <li>Fruit Plater</li>
                            <li>(Melon, Grapes, Orange, Banana)  (v)</li>
                            <li>Sandwiches (Ham, Cheese  (v) )</li>
                            <li>Crisps</li>
                            <li>(Cheese Puffs, Prawn Cocktail Snacks ) (v)</li>
                            <li>Cheese and Tomato Pizza (v)</li>
                            <li>Bread Sticks  (v)</li>
                            <li>Popcorn  (v)</li>
                            <li>Jelly or Ice lollies</li>
                        </ul>
                        <br>
                        <h3 style="font-weight:700;">Menu 2</h3>
                        <h5 style="font-weight:600;">£9 per person</h5>
                        <ul style="list-style-type: none;  margin: 0;
                        padding: 0;">
                            <li>Chicken Nuggets</li>
                            <li>Sausage Rolls</li>
                            <li>Cheese Cubes (v)</li>
                            <li>Fruit Plater</li>
                            <li>(Strawberries, Grapes, Blueberries, Raspberries)  (v)</li>
                            <li>Sandwiches (Ham, Cheese  (v) )</li>
                            <li>Crisps</li>
                            <li>(Cheese Puffs, Prawn Cocktail Snacks, Bacon Rashers) ) (v)</li>
                            <li>Cheese and Tomato Pizza (v)</li>
                            <li>Crudités (Carrot, Cucumber,
                                    Peppers, Tomatoes) (v</li>
                            <li>Bread Sticks  (v)</li>
                            <li>Popcorn  (v)</li>
                            <li>Jelly or Ice lollies</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        Children's Afternoon Tea
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                   
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        Finger Buffet
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                        Cream Tea
                    </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                    
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                        Afternoon Tea
                    </a>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                    
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                        Hot Fork Buffet
                    </a>
                </div>
                <div id="collapseSix" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                    
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
                        BBQ Menu
                    </a>
                </div>
                <div id="collapseSeven" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                    
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight" style="">
                        Canapes
                    </a>
                </div>
                <div id="collapseEight" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection