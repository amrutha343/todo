<html>
<head>
<title></title>
</head>
 <body>
 <center>
 Todo
  <form method="post" action="/disp">
   <input type="text" name="title" ><br/>
    <input type="text" name="desc" ><br/>
   <input type="submit" value="Submit"> 
  {{csrf_field()}}
  </form>
  
 <form method="post" action="/view">
<input type="Submit" value="View"> 
{{csrf_field()}}
  </form>

  </center>
  </body>
</html>


