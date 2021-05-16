<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<h1 style="text-align:center; margin-top: 10px;" >Edit Student information</h1>

<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				@if(Session::has('Student_updat'))
						<div class="alert alert-success" role="alert">
							{{Session::get('Student_updat')}}
						</div>
					@endif
			<div class="col-md-4 offset-md-0">
				<div class="card">
					<div class="card-header" style="background-color: black; color: white;">
						Edit Here Student ID_Info
					</div>
					<div class="card-body">
						<form method="post" action="{{route('update.data')}}" enctype="multipart/form-data">
							@csrf
							<input type="hidden" name="id" value="{{$Adname->id}}"/>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" value="{{$Adname->name}}" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="name">Father_Name</label>
								<input type="text" name="F_name" value="{{$Adname->F_name}}" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="name">DOB</label>
								<input type="text" name="dob" value="{{$Adname->DOB}}" class="form-control"/>
							</div>
						<div class="form-group">
							<label for="file">Choose Profile Image</label>
							<input type="file" name="file" class="form-control" onchange="previewFile(this)" />
							<img id="previewImg" src="{{asset('images')}}/{{$Adname->Image}}" alt="profile img" style="max-width:50px; margin-top: 40px;"/>
						</div>
					</div>
				</div>
			</div>
					
					<div class="col-md-4">
						<div class="card">
						<div class="card-header" style="background-color:black; color:white;">
								Edit Here Student Class 
							</div>

						<div class="form-group">
								<label for="name">Class</label>
								<input type="text" name="clas" value="{{$Addcls->class}}" class="form-control" placeholder="Class" />
							</div>
							<div class="form-group">
								<label for="name">User_ID</label>
								<input type="text" name="U_ID" value="{{$Addcls->User_Id}}" class="form-control" placeholder="User_ID" />
							</div>
							<div class="form-group">
								<label for="name">Roll_No.</label>
								<input type="text" name="rollno" value="{{$Addcls->Roll_no}}" class="form-control" placeholder="Roll_No" />
							</div>
							<div class="form-group">
								<label for="name">Section.</label>
								<input type="text" name="section" value="{{$Addcls->Section}}" class="form-control" placeholder="Section"/>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
						<div class="card-header" style="background-color:black; color: white;">
							Edit Here Student Marks
						</div>
							<div class="form-group">
								<label for="name">Math</label>
								<input type="number" name="math" value="{{$Admrk->Math_Marks}}" class="form-control" placeholder="Enter Math Marks" />
							</div>
							<div class="form-group">
								<label for="name">Hindi</label>
								<input type="number" name="hindi" value="{{$Admrk->Hindi_Marks}}" class="form-control" placeholder="Enter Hindi Marks" />
							</div>
							<div class="form-group">
								<label for="name">English.</label>
								<input type="number" name="english" value="{{$Admrk->Engli_marks}}" class="form-control" placeholder="Enter English marks" />
							</div>
						 <input type="submit" class="btn btn-info" value="update"/>
						</div>
					</div>	
						</form>
					</div>
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