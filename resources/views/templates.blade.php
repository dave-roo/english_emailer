<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>English Mailer</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  
  <script>
  $( function() {
    $( "input" ).checkboxradio({
      icon: false
    });
  } );
  </script>
  
</head>
<body>

<div class="container">
	<div class="row">
		<div class="widget">
			<label for="humanresources">Human Resources</label>
			<input type="checkbox" id="humanresources">
			
			<label for="itedept">IT Dept</label>
			<input type="checkbox" id="itedept">
			
			<label for="prjmgmt">Project Manager</label>
			<input type="checkbox" id="prjmgmt">
			
			<label for="consultant">Consultant</label>
			<input type="checkbox" id="consultant">
			
			<label for="marketing">Marketing</label>
			<input type="checkbox" id="marketing">
			
			<label for="colleague">Colleague</label>
			<input type="checkbox" id="colleague">
			
			<label for="maintenance">Maintenance</label>
			<input type="checkbox" id="maintenance">
		</div>
	</div>
	
	<div class="row">
		<div class="widget">
		<label for="request">Request</label>
		<input type="checkbox" id="request">
		
		<label for="complaint">Complaint</label>
		<input type="checkbox" id="complaint">
		
		<label for="meeting">Meeting</label>
		<input type="checkbox" id="meeting">
		
		<label for="question">Question</label>
		<input type="checkbox" id="question">
		
		<label for="invitation">Invitation</label>
		<input type="checkbox" id="invitation">
		
		</div>
	</div>
		
	<div class="row">
		<div class="widget">
		<label for="professional">Professional</label>
		<input type="radio" name="tone" id="professional">
		<label for="friendly">Friendly</label>
		<input type="radio" name="tone" id="friendly">
		</div>
	</div>

	<div class="row">
		<div class="col-8" style="background-color:#fbfbfd;" class="emailtemplate">
		Short list
		</div>
	</div>

	<div class="row">
		<div class="col-8" class="emailtemplate">
		@foreach($elooks as $elook)
		<tr>
			<td>{{$elook->dept}}</td></br>
		</tr>
		@endforeach  
		</div>
	</div>

</div>

</body>
</html>