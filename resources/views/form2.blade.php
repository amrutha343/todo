<html>
<head>
<title></title>
</head>
 <body>
 <center>
 Todo
  <form method="post" action="/new">
 
 Id:  <input type="text" name="id" value="{{$todo->id}}" ><br/>
 Title:  <input type="text" name="title" value="{{$todo->title}}" ><br/>
 Description:  <input type="text" name="desc" value="{{$todo->desc}}" ><br/>
  {{csrf_field()}}
  <input type="Submit" value="Update"> 

  </form>
  </center>
  </body>
</html>


