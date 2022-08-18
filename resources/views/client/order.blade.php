
@extends('client.layouts.master')


@section('content')


<!-- order section starts  -->

<section class="order" id="order">

    <h1 class="heading">order now</h1>
 
    <form action="" method="post">
 
       <div class="display-orders">
          <p>pizza-1 <span>( $3/- x 2 )</span></p>
          <p>pizza 03 <span>( $2/- x 1 )</span></p>
          <p>pizza 06 <span>( $4/- x 4 )</span></p>
          <p>pizza 07 <span>( $2/- x 1 )</span></p>
       </div>
 
       <div class="flex">
          <div class="inputBox">
             <span>your name :</span>
             <input type="text" name="name" class="box" required placeholder="enter your name" maxlength="20">
          </div>
          <div class="inputBox">
             <span>your number :</span>
             <input type="number" name="number" class="box" required placeholder="enter your number" min="0">
          </div>
          <div class="inputBox">
             <span>payment method</span>
             <select name="method" class="box">
                <option value="cash on delivery">cash on delivery</option>
                <option value="credit card">credit card</option>
                <option value="paytm">paytm</option>
                <option value="paypal">paypal</option>
             </select>
          </div>
          <div class="inputBox">
             <span>address line 01 :</span>
             <input type="text" name="flat" class="box" required placeholder="e.g. flat no." maxlength="50">
          </div>
          <div class="inputBox">
             <span>address line 02 :</span>
             <input type="text" name="street" class="box" required placeholder="e.g. street name." maxlength="50">
          </div>
          <div class="inputBox">
             <span>pin code :</span>
             <input type="number" name="pin_code" class="box" required placeholder="e.g. 123456" min="0">
          </div>
       </div>
 
       <input type="submit" value="order now" class="btn" name="order">
 
    </form>
 
 </section>
 
 <!-- order section ends -->

 @endsection