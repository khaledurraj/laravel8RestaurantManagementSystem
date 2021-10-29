<x-app-layout>
  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller"> 
    @include("admin.navbar")
    <div class="container">
    <h1>Customer Order</h1>
    <form action="{{ url('/search') }}" method="get">
@csrf
      <input type="text" name="search" style="color:blue" id="">
      <input type="submit" value="search" class="btn btn-success">
    </form>
    <table>
        <tr align="center">
            <td style="padding: 30px">Name</td>
            <td style="padding: 30px">Phone</td>
            <td style="padding: 30px">Address</td>
            <td style="padding: 30px">Food Name</td>
            <td style="padding: 30px">price</td>
            <td style="padding: 30px">Quantity</td>
            <td style="padding: 30px">Total price</td>
        </tr>
        @foreach ($data as $data)
            
        
        <tr align="center" style="background-color:black;">
            <td>{{ $data->name }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->foodname }}</td>
            <td>{{ $data->price }}</td>
            <td>{{ $data->quantity }}</td>
            <td>{{ $data->price *$data->quantity }}</td>
        </tr>
        @endforeach
    </table>
  </div>
</div>
    @include("admin.adminscripts")
       
    
  </body>
</html>