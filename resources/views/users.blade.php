
<x-header  />


@include('inner');
<h1>User page </h1>

 

@foreach ($users as $user) 
<h2>{{$user}}</h2>
@endforeach