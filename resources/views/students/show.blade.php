<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<h1>{{$student->fullname}}</h1>

address:{{$student->address}}<br>
phone:{{$student->phone}}<br>
birthday:{{$student->birthday}}<br>
about student sleep:{{$student->sleep}}<br>
use our bus:{{ ($student->use_bus == 0)? "no" : "yes" }}<br>
number of wc: {{ $student->number_of_wc }}<br>
Student clean level: {{ $student->clean_level }}<br>
Student mood:{{ $student->mood }}<br>
about student food: {{ $student->food }}<br>
class:{{ $class->name }}
</body>
</html>