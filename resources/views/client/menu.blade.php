
@extends('client.layouts.master')


@section('content')

<!-- menu section starts  -->

<section id="menu" class="menu">

    <h1 class="heading">our menu</h1>
 
    <div class="box-container">
 
       <div class="box">
          <div class="price">$<span>2</span>/-</div>
          <img src="client/images/pizza-1.jpg" alt="">
          <div class="name">pizza 1</div>
          <form action="" method="post">
             <input type="number" min="1" max="100" value="1" class="qty" name="qty">
             <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          </form>
       </div>
 
       <div class="box">
          <div class="price">$<span>4</span>/-</div>
          <img src="client/images/pizza-2.jpg" alt="">
          <div class="name">pizza 2</div>
          <form action="" method="post">
             <input type="number" min="1" max="100" value="1" class="qty" name="qty">
             <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          </form>
       </div>
 
       <div class="box">
          <div class="price">$<span>2</span>/-</div>
          <img src="client/images/pizza-3.jpg" alt="">
          <div class="name">pizza 3</div>
          <form action="" method="post">
             <input type="number" min="1" max="100" value="1" class="qty" name="qty">
             <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          </form>
       </div>
 
       <div class="box">
          <div class="price">$<span>3</span>/-</div>
          <img src="client/images/pizza-4.jpg" alt="">
          <div class="name">pizza 4</div>
          <form action="" method="post">
             <input type="number" min="1" max="100" value="1" class="qty" name="qty">
             <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          </form>
       </div>
 
       <div class="box">
          <div class="price">$<span>2</span>/-</div>
          <img src="client/images/pizza-5.jpg" alt="">
          <div class="name">pizza 5</div>
          <form action="" method="post">
             <input type="number" min="1" max="100" value="1" class="qty" name="qty">
             <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          </form>
       </div>
 
       <div class="box">
          <div class="price">$<span>4</span>/-</div>
          <img src="client/images/pizza-6.jpg" alt="">
          <div class="name">pizza 6</div>
          <form action="" method="post">
             <input type="number" min="1" max="100" value="1" class="qty" name="qty">
             <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          </form>
       </div>
 
       <div class="box">
          <div class="price">$<span>2</span>/-</div>
          <img src="client/images/pizza-7.jpg" alt="">
          <div class="name">pizza 7</div>
          <form action="" method="post">
             <input type="number" min="1" max="100" value="1" class="qty" name="qty">
             <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          </form>
       </div>
 
       <div class="box">
          <div class="price">$<span>3</span>/-</div>
          <img src="client/images/pizza-8.jpg" alt="">
          <div class="name">pizza 8</div>
          <form action="" method="post">
             <input type="number" min="1" max="100" value="1" class="qty" name="qty">
             <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          </form>
       </div>
 
       <div class="box">
          <div class="price">$<span>4</span>/-</div>
          <img src="client/images/pizza-9.jpg" alt="">
          <div class="name">pizza 9</div>
          <form action="" method="post">
             <input type="number" min="1" max="100" value="1" class="qty" name="qty">
             <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          </form>
       </div>
 
    </div>
 
 </section>
 
 <!-- menu section ends -->

 @endsection