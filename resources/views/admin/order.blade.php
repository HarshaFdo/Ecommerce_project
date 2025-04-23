<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')

  <style>
    .page-content {
      padding: 30px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
      border-radius: 12px;
      overflow: hidden;
      table-layout: fixed;
    }

    th {
      background-color: #14b8a6;
      /* teal-500 */
      color: #ffffff;
      padding: 16px 20px;
      text-align: center;
      font-size: 16px;
      font-weight: 600;
    }

    td {
      padding: 16px 20px;
      text-align: center;
      font-size: 15px;
      color: #333;
      border-bottom: 1px solid #e0e0e0;
    }

    tr:hover {
      background-color: #f9f9f9;
    }

    img {
      width: 80px;
      /* Larger size for the product image */
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .container-fluid {
      max-width: 1000px;
      margin: auto;
    }

    .action-buttons {
      display: flex;
      justify-content: center;
      gap: 8px;
      flex-wrap: wrap;
    }

    .action-buttons a {
      text-decoration: none;
      padding: 8px 16px;
      font-size: 14px;
      border-radius: 6px;
      white-space: nowrap;
      max-width: 120px;
      display: inline-block;
      text-align: center;
    }

    .status-in-progress {
      color: red;
    }

    .status-on-the-way {
      color: blue;
    }

    .status-delivered {
      color: green;
    }

    .btn {
      font-size: 14px;
      padding: 8px 16px;
      border-radius: 6px;
      text-align: center;
    }

    .btn-primary {
      background-color: #14b8a6;
      color: white;
    }

    .btn-danger {
      background-color: #dc3545;
      color: white;
    }

    .btn-secondary {
      background-color: #6c757d;
      color: white;
    }

    /* Print styles */
    @media print {
      body {
        margin: 0;
        padding: 0;
      }

      .page-content {
        padding: 0;
      }

      table {
        width: 100%;
        table-layout: fixed;
      }

      th,
      td {
        padding: 8px 12px;
        font-size: 12px;
        /* Adjust font size for printing */
      }

      .action-buttons {
        display: none;
        /* Hide action buttons when printing */
      }

      .btn {
        padding: 6px 12px;
        /* Smaller buttons for print */
        font-size: 12px;
      }

      img {
        width: 60px;
        /* Adjust image size for print */
      }

      .container-fluid {
        margin: 0;
        max-width: 100%;
        /* Full-width table in print */
      }
    }
  </style>
</head>

<body>
  @include('admin.header')
  @include('admin.sidebar')

  <div class="page-content">
    <div class="container-fluid">
      <table>
        <thead>
          <tr>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Product Title</th>
            <th>Price</th>
            <th>Image</th>
            <th>Status</th>
            <th>Change Status</th>
            <th>Print PDF</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $data)
          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->rec_address}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->product->title}}</td>
            <td>{{$data->product->price}}</td>
            <td>
              <img src="products/{{$data->product->image}}">
            </td>
            <td>
              <span class="status-{{ str_replace(' ', '-', strtolower($data->status)) }}">
                {{$data->status}}
              </span>
            </td>
            <td>
              <div class="action-buttons">
                <a class="btn btn-primary" href="{{url('on_the_way/'.$data->id)}}">On the Way</a>
                <a class="btn btn-danger" href="{{url('delivered/'.$data->id)}}">Delivered</a>
              </div>
            </td>
            <td>
              <a class="btn btn-secondary" href="{{url('print_pdf/'.$data->id)}}">PDF</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @include('admin.js')
</body>

</html>