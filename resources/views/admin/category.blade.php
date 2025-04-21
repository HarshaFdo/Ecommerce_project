<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')

  <style type="text/css">
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-top: 30px;
      margin-bottom: 20px;
      font-size: 28px;
    }

    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 40px;
    }

    input[type='text'] {
      width: 350px;
      height: 45px;
      border-radius: 10px;
      border: 1px solid #ccc;
      padding: 10px 15px;
      font-size: 16px;
      margin-right: 10px;
      transition: 0.3s;
    }

    input[type='text']:focus {
      outline: none;
      border-color: #00adb5;
      box-shadow: 0 0 5px rgba(0, 173, 181, 0.3);
    }

    .btn-primary {
      height: 45px;
      border-radius: 10px;
      background-color: #00adb5;
      border: none;
      font-weight: bold;
      padding: 0 25px;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background-color: #007e85;
    }

    .table_deg {
      width: 90%;
      max-width: 800px;
      margin: 0 auto;
      background-color: white;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
    }

    .table_deg th, .table_deg td {
      padding: 16px 20px;
      text-align: center;
    }

    .table_deg th {
      background-color: #00adb5;
      color: white;
      font-size: 16px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .table_deg td {
      font-size: 15px;
      background-color: #f9f9f9;
      border-bottom: 1px solid #e0e0e0;
    }

    .table_deg tr:hover td {
      background-color: #e0f7f7;
      transition: background-color 0.3s ease;
    }

    .btn-success,
    .btn-danger {
      padding: 6px 14px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
    }

    .btn-success {
      background-color: #28a745;
      border: none;
    }

    .btn-success:hover {
      background-color: #218838;
    }

    .btn-danger {
      background-color: #dc3545;
      border: none;
    }

    .btn-danger:hover {
      background-color: #c82333;
    }
  </style>
</head>

<body>
  @include('admin.header')
  @include('admin.sidebar')

  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <h2>Add Category</h2>

        <div class="div_deg">
          <form action="{{url('add_category')}}" method="post">
            @csrf
            <input type="text" name="category" placeholder="Enter Category Name" required>
            <input class="btn btn-primary" type="submit" value="Add Category">
          </form>
        </div>

        <div>
          <table class="table_deg">
            <tr>
              <th>Category Name</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>

            @foreach($data as $data)
            <tr>
              <td>{{$data->category_name}}</td>
              <td>
                <a class="btn btn-success" href="{{url('edit_category/'.$data->id)}}">Edit</a>
              </td>
              <td>
                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category/'.$data->id)}}">Delete</a>
              </td>
            </tr>
            @endforeach

          </table>
        </div>

      </div>
    </div>
  </div>

  <!-- SweetAlert Confirmation -->
  <script type="text/javascript">
    function confirmation(ev) {
      ev.preventDefault();
      var urlToRedirect = ev.currentTarget.getAttribute('href');
      swal({
        title: "Are you sure?",
        text: "This category will be permanently deleted!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
          window.location.href = urlToRedirect;
        }
      });
    }
  </script>

  <!-- JS & SweetAlert CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  @include('admin.js')
</body>

</html>
