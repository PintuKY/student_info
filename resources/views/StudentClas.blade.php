<!DOCTYPE html>
<html>
<head>
	<title>Student Class Information</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	<h1 style="text-align:center;">Student class Info Add in Database</h1>

	<section style="padding-top:60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card-header" style="background-color: green;">
						Add New Student Class Details
					</div>
					<div class="card-body">
						@if(Session::has('Student_clas'))
						<div class="alert alert-success" role="alert">
							{{Session::get('Student_clas')}}
						</div>
						@endif
						<form method="post" action="{{route('student.clas')}}"/>
							@csrf
							<div class="form-group">
								<label for="name">Class</label>
								<input type="text" name="clas" class="form-control" placeholder="Class" />
							</div>
							<div class="form-group">
								<label for="name">User_ID</label>
								<input type="text" name="U_ID" class="form-control" placeholder="User_ID" />
							</div>
							<div class="form-group">
								<label for="name">Roll_No.</label>
								<input type="text" name="rollno" class="form-control" placeholder="Roll_No" />
							</div>
							<div class="form-group">
								<label for="name">Section.</label>
								<input type="text" name="section" class="form-control" placeholder="Section" />
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>