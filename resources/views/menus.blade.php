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
                    <a class="card-link" data-toggle="collapse" href="#collapseOne"style="font-size:20px; color:#414858;">
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
                        <hr>
                        <ul style="list-style-type: none;  margin: 0;
                        padding: 0;">
                            <li>Mini Chocolate Fountain</li>
                            <li>(mini Doughnuts, marshmallows)</li>
                            <li style="font-weight:700;">£1.50 per person</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo"style="font-size:20px; color:#414858;">
                        Children's Afternoon Tea
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                            <h5 style="font-weight:600;">£6.50 per person</h5>
                            <ul style="list-style-type: none;  margin: 0;
                            padding: 0;">
                                <li>Trio of Sandwiches</li>
                                <li>(ham, strawberry jam & cheese)</li>
                                <li>Selection of Sweet Treats</li>
                                <li>Mini Fruit & Plain Scones (v)</li>
                                <li>Strawberry Jam (v)</li>
                                <li>Dorset Clotted Cream (v)</li>
                                <li>Strawberry, Banana or Chocolate Milkshake (v)</li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree"style="font-size:20px; color:#414858;">
                        Finger Buffet
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                        <p style="font-weight:600;">Choice of four buffet options, two salads and two desserts - £10</p>
                        <p style="font-weight:600;">Choice of five buffet options, three salads and three desserts - £14</p>
                        <p style="font-weight:600;"> Choice of seven buffet options, four salads and three desserts - £18</p>
                            <ul style="list-style-type: none;  margin: 0;
                            padding: 0;">
                                    <li>Sandwich Selection</li>
                                    <li>(inc vegetarian)</li>
                                    <li>Crudités & Dips (v)</li>
                                    <li>Bruschetta (v)</li>
                                   <li> Cheese & Pineapple (v)</li>
                                    <li>Melon & Cured Ham</li>
                                    <li>Mini Quiche Lorraine</li>
                                    <li>Chicken Satay</li>
                                    <li>Pork Pies & Scotch</li>
                                    <li>Eggs</li>
                                    <li>Cocktail Sausages</li>
                                    <li>Terrines & Pate</li>
                                    <li>Chorizo & Red Onion</li>
                                    <li>Pizza</li>
                                    <li>Mini Burgers</li>
                                    <li>Sausages Rolls</li>
                                    <li>Mini Prawn Cocktails</li>
                                    <li>Falafel (v)</li>
                                    <li>Stuffed Jacket</li>
                                    <li>Potatoes(inc vegetarian)</li>
                                    <li>Mini Spring Rolls</li>
                                    <li>Vegetable Kebabs (v)</li>
                                    <li>Samosas</li>
                                    <li>Salmon Fish Cakes</li>
                                   <li> Lamb Koftas</li>
                            </ul>
                            <hr>
                            <h3>Salads</h3>
                            <ul style="list-style-type: none;  margin: 0;
                            padding: 0;">
                                    <li>Baby Potato Salad (v)</li>
                                    <li>Pasta & Provencal Vegetable (v)</li>
                                    <li>Cous Cous (v)</li>
                                    <li>Coleslaw (v)</li>
                                    <li>Seasonal Mixed Leaf (v)</li>
                                    <li>Tomato, Red Onion & Basil (v)</li>
                                    <li>Waldorf (v)</li>
                            </ul>
                            <hr>
                            <h3>Deserts</h3>
                            <ul style="list-style-type: none;  margin: 0;
                            padding: 0;">
                                   <li>Profiteroles, chocolate sauce (v)</li>
                                   <li>Mini Lemon Meringue Pies (v)</li>
                                   <li>Eton Mess (v)</li>
                                   <li>Victoria Sponge (v)</li>
                                   <li>Mini Banoffee Pies (v)</li>
                                   <li>Fruit Platter (v)</li>
                                   <li>Cheese Platter (v) (£2.50pp supp)</li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour"style="font-size:20px; color:#414858;">
                        Cream Tea
                    </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                            <h5 style="font-weight:600;">£5 per person</h5>
                            <ul style="list-style-type: none;  margin: 0;
                            padding: 0;">
                                    <li>2 Freshly Baked Scones (v)</li>
                                    <li>Strawberry Jam (v)</li>
                                    <li>Dorset Clotted Cream(v)</li>
                                    <li>Tea or Coffee</li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive"style="font-size:20px; color:#414858;">
                        Afternoon Tea
                    </a>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body" style="color:black;">
                    <h5>£12.95 per person</h5>
                    <p style=" text-decoration: underline;">Sandwiches</p>
                    <ul style="list-style-type: none;  margin: 0;
                    padding: 0;">
                              <ul style="list-style-type: none;  margin: 0;
                              padding: 0;">
                                      <li>Egg Mayonnaise & Chive (v)</li>
                                      <li>Tuna Mayonnaise & Cucumber</li>
                                      <li>Glazed Gammon & Wholegrain Mustard</li>
                                      <li>Mature Cheddar & Pickle (v)</li>
                              </ul>
                    </ul>
                    <hr>
                    <p style=" text-decoration: underline;">Sweet Treats</p>
                    <ul style="list-style-type: none;  margin: 0;
                    padding: 0;">
                            <li>Wild Berry Cupcake (v)</li>
                            <li>Lemon Posset, Meringue</li>
                            <li>Chocolate Mousse, Hazelnut Praline (v)</li>
                            <li> Victoria Sponge, Vanilla Cream &
                            Strawberries (v)</li>
                    </ul>
                    <hr>
                    <p style=" text-decoration: underline;">Freshly Baked</p>
                    <ul style="list-style-type: none;  margin: 0;
                    padding: 0;">
                          <li>Plain & Fruit Scones (v)</li>
                          <li>Strawberry Jam & Dorset Clotted
                          Cream (v)</li>
                          <li>Tea or Coffee </li>
                    </ul>
                    <hr>
                    <h5 class="my-2" style="font-weight:600;">Gentleman's Tea</h5>
                    <h5>£12.95 per person</h5>
                    <p style=" text-decoration: underline;">Savouries</p>
                    <ul style="list-style-type: none;  margin: 0;
                    padding: 0;">
                              <ul style="list-style-type: none;  margin: 0;
                              padding: 0;">
                                      <li>Roast Beef & Horseradish</li>
                                      <li>Pork Pie & Piccalilli</li>
                                      <li>Sage & Shallot Sausage Roll</li>
                                      <li>Quiche Lorraine,
                                      Caramelised Onion</li>
                              </ul>
                    </ul>
                    <hr>
                    <p style=" text-decoration: underline;">Sweet Treats</p>
                    <ul style="list-style-type: none;  margin: 0;
                    padding: 0;">
                        <li>Sticky Toffee Cake (v)</li>
                        <li>Treacle Tart (v)</li>
                        <li>Beer Cake (v)</li>
                        <li>Chocolate & Orange Cookies </li>
                    </ul>
                    <hr>
                    <p style=" text-decoration: underline;">Freshly Baked</p>
                    <ul style="list-style-type: none;  margin: 0;
                    padding: 0;">
                          <li>Plain & Fruit Scones (v)</li>
                          <li>Strawberry Jam & Dorset Clotted
                          Cream (v)</li>
                          <li>Tea or Coffee </li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix"style="font-size:20px; color:#414858;">
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
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven"style="font-size:20px;  color:#414858;">
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
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight" style="font-size:20px; color: #414858;">
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