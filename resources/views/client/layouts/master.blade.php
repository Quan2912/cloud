<!DOCTYPE html>
<html lang="en">
<head>
      <base href="{{asset('')}}">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Pizza. </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" ></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >

   <!-- custom css file link  -->
   <link rel="stylesheet" href="client/css/style.css">
</head>

<body>
   
<!-- header section starts  -->


@include('client.layouts.header')

<!-- header section ends -->





<!-- header section ends -->





<!-- banner -->
      @include('client.layouts.banner')
<!-- banner -->

<!-- about section starts  -->


<!-- about section ends -->



<!-- menu section starts  -->

@yield('content')

<!-- menu section ends -->

<!-- order section starts  -->


<!-- order section ends -->



<!-- faq section starts  -->


<!-- faq section ends -->



<!-- footer section starts  -->

@include('client.layouts.footer')

<!-- footer section ends -->



@yield('scripts')

<!-- custom js file link  -->
<script src="client/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>