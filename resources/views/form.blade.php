<h1>Login form</h1>


<!--  -->
<form action="form" method="post">

@csrf
<input type="text" name="name" value=""><br >
<span style="color:red">@error('name'){{$message}}@enderror  </span><br >

<input type="number" name="age" id=""><br >
<span style="color:red">@error('age'){{$message}}@enderror  </span><br >

<button type="submit">Login</button>
</form>