<!DOCTYPE html>
<html>
<head>
	<title> Edit New Student </title>
</head>
<body>

<form method="POST" action={{route('update',['id' => $student->id])}}>
     {{ csrf_field() }}
  <div class="form-group">
    <label for="fullname">fullname:</label>
    <input type="text" class="form-control" id="fullname" name="fullname" value={{$student->fullname}}>
  </div>
  <div class="form-group">
    <label for="address">address:</label>
    <input type="textarea" class="form-control" id="address" name="address" value={{$student->address}}>
  </div>
    <div class="form-group">
    <label for="phone">phone:</label>
    <input type="text" class="form-control" id="phone" name="phone" value={{$student->phone}}>
  </div> 
   <div class="form-group">
    <label for="birthday">birthday:</label>
    <input type="date" class="form-control" id="birthday" name="birthday" value={{$student->birthday}}>
  </div>
  <div class="form-group">
    <label for="sleep">about student sleep:</label>
    <input type="textarea" class="form-control" id="sleep" name="sleep" value={{$student->sleep}}>
  </div>

  <div class="form-group">
    <label for="use_bus">use our bus:</label>
 	<label class="radio-inline">
  <input type="radio" name="use_bus" id="yes" value="1" >yes</label>
 	<label class="radio-inline"><input type="radio" name="use_bus" id="no" value="0">no</label>
  </div>

  <div class="form-group">
    <label for="number_of_wc">number of wc:</label>
    <input type="number" class="form-control" id="number_of_wc" name="number_of_wc" value={{$student->number_of_wc}}>
  </div> 

 <div class="form-group">
  <label for="clean_level">Student clean level:</label>
  <select  name="clean_level" class="form-control" id="clean_level">
    <option id="fair" value="fair">fair</option>
    <option id="good" value="good">good</option>
    <option id="very good" value="very good">very good</option>
    <option id="excellent" value="excellent" >excellent</option>
  </select>


  <div class="form-group">
  <label for="mood">Student mood:</label>
  <select name="mood"  class="form-control" id="mood">
      <option>happy</option>
      <option>sad</option>
  </select>
 </div> 

 <div class="form-group">

 <label for="class" >class:</label>
      <select name="class_id" class="form-control" id="class">
        @foreach($classes as $class)
        <option value={{$class->id}}>{{$class->name}}</option>
        @endforeach
      </select>
</div>
  <div class="form-group">
    <label for="food">about student food:</label>
    <input type="textarea" class="form-control" id="food" name="food" value={{$student->food}}>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form> 

<div>
@foreach($errors->all() as $error)
<li> {{$error}}</li>
@endforeach
</div>

</body>
</html>