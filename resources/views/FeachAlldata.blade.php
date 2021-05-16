<!DOCTYPE html>
<html>
<head>
	<title>All List of Student Data</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
			<div class="col-md-12 offset-md-0">
				<div class="card">
					<div class="card-header" style="background-color: black; color: white;">
						List Of Student
					</div>
					<div class="card-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Father_Name</th>
									<th>DOB</th>
									<th>Profile_image</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($fetchData as $item)
								<tr>
									<td>{{$item->id}}</td>
									<td>{{$item->name}}</td>
									<td>{{$item->F_name}}</td>
									<td>{{$item->DOB}}</td>

									<td><img src="{{asset('images')}}/{{$item->Image}}" style="max-width: 50px; margin-top: 30px;">
									</td>

									<td><a href="/Edit_student_Data/{{$item->id}}" class="btn btn-info"	>Edit</a>
									<a href="/Show_all_details/{{$item->id}}" class="btn btn-info">Details</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>