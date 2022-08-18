@extends('client.layouts.master')
@section('content')

<section id="detail" class="detail">

    <h1 class="heading">detail food</h1>
 
    <div class="container">
 
       <div class="row">
        <!--<div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card-p-2">
                
                <div class="price">$<span>{$products->price}}</span></div>
                <img src="uploads/img{$products->image}}" alt="">
                <div class="name">{$products->name}}</div>
                <div class="description">{$products->description}}</div>
                <form action="" method="post">
                   <input type="number" min="1" max="100" value="1" class="qty" name="qty">
                   <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                </form>

            </div>
        </div>
        -->
            <div class="col-md-4">
                <img src="{{asset('uploads/img/'.$products->image)}}" class="W-100" alt="">
            </div> 
            <div class="col-md-8">
                <div class="price">$<span>{{$products->price}}</span></div>
                <h2 class="mb-0">{{$products->name}}</h2>
                <h4 class="mt-3">{{$products->description}}</h4>

                <form action="" method="post">
                    <input type="number" min="1" max="100" value="1" class="qty" name="qty">
                    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                 </form>
            </div>

       </div>