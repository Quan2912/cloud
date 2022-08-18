<!-- header section starts  -->

<header class="header">


    <section class="flex">
 
       <a href="{{route('client.index')}}" class="logo">Pizza.</a>
 
       <nav class="navbar">
          <a href="{{route('client.index')}}">home</a>
          <div class="dropdown">
            <button class="dropbtn"><a>category</a></button>
            <div class="category-content">
               
                  @foreach(App\Models\Category::all() as $cat)
                  <a href="{{url('viewCategory/'.$cat->name)}}">
                  <li class="option" value="{{$cat->id}}">{{$cat->name}}</li>
                  </a>
                  @endforeach
               
            </div>
          </div>
          <a href="{{route('client.about')}}">about</a>
          <a href="{{route('client.menu')}}">menu</a>
          <a href="{{route('client.order')}}">order</a>
          <a href="{{route('client.faq')}}">faq</a>
       </nav>
 
       <div class="icons">
          <a id="menu-btn" class="fas fa-bars"></a>
          <a class="fas fa-user" href="{{route('login')}}"></a>
          <a href="#" class="fas fa-box"></a>
          <div class="dropdown">
            <button type="button" class="btn btn-info" data-toggle="dropdown">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
            </button>
            <div class="dropdown-menu">
                <div class="row total-header-section">
                    <div class="col-lg-6 col-sm-6 col-6">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </div>
                    @php $total = 0 @endphp
                    @foreach((array) session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                    @endforeach
                    <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                        <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                    </div>
                </div>
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        <div class="row cart-detail">
                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                <img src="{{ $details['image'] }}" />
                            </div>
                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                <p>{{ $details['name'] }}</p>
                                <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                        <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                    </div>
                </div>
            </div>
        </div>
       </div>
 
    </section>
 
 </header>
 
 <!-- header section ends -->
