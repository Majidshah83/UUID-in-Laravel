<div class="">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($student as $students)
    <tr>
      <th scope="row">1</th>
      <td>{{$students->name}}</td>
      <td>{{$students->email}}</td>
       {{-- URL('/list-profile/'.$logos->id ) --}}
      <td><a href="{{route('get-id',$students->id)}}">Veiw</a></td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
