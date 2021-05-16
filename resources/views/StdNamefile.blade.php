<!DOCTYPE html>
<html>
<head>
	<title>Student_name_Details</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
	<h1 style="text-align:center;">New Student Add</h1>
	<section style="padding-top:60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card-header">
						Add New Student Name
					</div>
					<div class="card-body">
						@if(Session::has('Student_data'))
						<div class="alert alert-success" role="alert">
							{{Session::get('Student_data')}}
						</div>
						@endif
<form method="post" action="{{route('student.add')}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control" placeholder="Name" />
							</div>
							<div class="form-group">
								<label for="name">Father Name</label>
								<input type="text" name="F_name" class="form-control" placeholder="Father name" />
							</div>
							<div class="form-group">
								<label for="name">DOB</label>
								<input type="text" name="dob" class="form-control" placeholder="DOB" />
							</div>

				<div class="form-group">
				<label for="file">Choose Profile Image</label>
				<input type="file" name="file" class="form-control" onchange="previewFile(this)"/>
				<img id="previewImg" alt="profile img" style="max-width:130px; margin-top: 40px;"/>
				</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
	function previewFile(input){
		var file=$("input[type=file]").get(0).files[0];
		if(file)
		{
			var reader =new FileReader();
			reader.onload=function()
			{
				$('#previewImg').attr("src", reader.result);
			}
			reader.readAsDataURL(file);
		}
	}
</script>
</body>
</html>