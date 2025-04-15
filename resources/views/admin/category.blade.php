<!DOCTYPE html>
</admincss /html>

<head>
  @include('admin.css')

  <style type="text/css">
    input[type='text'] {
      width: 400px;
      height: 43px;
    }

    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  @include('admin.header')
  @include('admin.sidebar')
  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <h2 style="color: white">Add Category</h2>
        <div class="div_deg">

          <form action="{{url('add_category')}}" method="post">
            @csrf
            <div>
              <input type="text" name="category">
              <input class="btn btn-primary" type="submit" value="Add Category">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
  <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
  <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
  <script src="{{asset('/admincss/js/front.js')}}"></script>
</body>

</html>