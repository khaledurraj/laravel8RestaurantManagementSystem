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
    <div >
    <form action="{{ url('/uploadchef') }}" method="Post" enctype="multipart/form-data">
      @csrf
      <div>
        <label for="">Name</label>
        <input style="color: blue" type="text" name="name" id="" required placeholder="Enter Name">
      </div>
      <div>
        <label for="">Speciality</label>
        <input style="color: blue" type="text" name="speciality" id="" required placeholder="Speciality">
      </div>
      
      <div>
        <input type="file" name="image" id="">
      </div>
      <div>
        <input style="color: cadetblue" type="submit" value="save">
      </div>
    </form>
  </div>
<div>
    <table bgclor="black">
      <tr>
        <th style="padding: 30px">Chef name</th>
        <th style="padding: 30px">Speciality</th>
        <th style="padding: 30px">Image</th>
        <th style="padding: 30px">Action</th>
        <th style="padding: 30px">Action2</th>
      </tr>
      @foreach ($data as $data)
          
      
      <tr align="center">
        <td>{{ $data->name }}</td>
        <td>{{ $data->speciality }}</td>
        <td><img height="100" width="100" src="chefimage/{{ $data->image }}" alt=""></td>
        <td><a href="{{ url('/updatechef',$data->id) }}">Update</a></td>
        <td><a href="{{ url('/deletechef',$data->id) }}">Delete</a></td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
    @include("admin.adminscripts")
       
    
  </body>
</html>