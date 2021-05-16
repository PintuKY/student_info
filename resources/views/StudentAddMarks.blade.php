<!DOCTYPE html>
<html>
<head>
	<title>Student Marks Add in Database</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	<h1 style="text-align:center;">Student Marks Info Add in Database</h1>

	<section style="padding-top:60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card-header" style="background-color: green;">
						Add New Student Marks Details
					</div>
					<div class="card-body">
						@if(Session::has('student_marks'))
						<div class="alert alert-success" role="alert">
							{{Session::get('student_marks')}}
						</div>
						@endif
						<form method="post" action="{{route('student.marks')}}"/>
							@csrf
							<div class="form-group">
								<label for="name">Math</label>
								<input type="number" name="math" class="form-control" placeholder="Enter Math Marks" />
							</div>
							<div class="form-group">
								<label for="name">Hindi</label>
								<input type="number" name="hindi" class="form-control" placeholder="Enter Hindi Marks" />
							</div>
							<div class="form-group">
								<label for="name">English.</label>
								<input type="number" name="english" class="form-control" placeholder="Enter English marks" />
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