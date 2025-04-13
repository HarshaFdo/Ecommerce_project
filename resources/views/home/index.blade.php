<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    @include('home.slider')
  </div>
  @include('home.product')
  @include('home.contact')
  <br><br><br>
  @include('home.footer')
</body>

</html>