<!DOCTYPE html>
<html>
<head>
	<title> Nursery Students </title>
</head>
<body>
<a href={{route('create')}}> Add New Student </a>

@if ($students->isEmpty())
	<h1> There is no student.</h1>
@else
<ul>
	@foreach($students as $student)
		<li>{{$student->fullname}}</li> 
		<a href={{route('edit',['id' => $student->id])}}>Edit</a>
		<a href={{route('delete',['id' => $student->id])}}>Delete</a>
		<a href={{route('profile',['id' => $student->id])}}>profile</a>
	@endforeach
</ul>
@endif

</body>
</html>