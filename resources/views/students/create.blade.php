<!DOCTYPE html>
<html>
<head>
	<title> Add New Student </title>
</head>
<body>

<form method="POST" action={{route('store')}}>
     {{ csrf_field() }}
  <div class="form-group">
    <label for="fullname">fullname:</label>
    <input type="text" class="form-control" id="fullname" name="fullname">
  </div>
  <div class="form-group">
    <label for="address">address:</label>
    <input type="textarea" class="form-control" id="address" name="address">
  </div>
    <div class="form-group">
    <label for="phone">phone:</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div> 
   <div class="form-group">
    <label for="birthday">birthday:</label>
    <input type="date" class="form-control" id="birthday" name="birthday">
  </div>
  <div class="form-group">
    <label for="sleep">about student sleep:</label>
    <input type="textarea" class="form-control" id="sleep" name="sleep">
  </div>

  <div class="form-group">
    <label for="use_bus">use our bus:</label>
 	<label class="radio-inline"><input type="radio" name="use_bus" value="1">yes</label>
 	<label class="radio-inline"><input type="radio" name="use_bus" value="0">no</label>
  </div>

  <div class="form-group">
    <label for="number_of_wc">number of wc:</label>
    <input type="number" class="form-control" id="number_of_wc" name="number_of_wc">
  </div> 

 <div class="form-group">
  <label for="clean_level">Student clean level:</label>
  <select  name="clean_level" class="form-control" id="clean_level">
    <option  value="fair">fair</option>
    <option value="good">good</option>
    <option value="very good">very good</option>
    <option value="excellent" >excellent</option>
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
    <input type="textarea" class="form-control" id="food" name="food">
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