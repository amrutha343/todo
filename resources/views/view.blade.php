<html>
 <body>
 <center>
 Todo
  <form method="post" action="">
    {{csrf_field()}}
  <input type="submit" value="view">
  </form>
 @if(isset($todo))
 

<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
</tr>

@foreach($todo as $todo)
<tr>
<td>{{$todo->id}}</td>
<td>{{$todo->title}}</td>
<td>{{$todo->desc}}</td>
<td><a href="/delete/{{$todo->id}}">Delete</a></td>
<td><a href="/edit/{{$todo->id}}">Update</a></td>
</tr>
@endforeach
</table>
@endif
  </center>
  </body>
</html>


