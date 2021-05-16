<!DOCTYPE html>
<html>
<head>
	<title>All Ifnormation Student </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	<h2 style="text-align: center;">All Information Student</h2>

	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
			<div class="col-md-6 offset-md-0">
				<div class="card">
					<div class="card-header" style="background-color: black; color: white;">
						List Of Student
					</div>
					<div class="card-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Class</th>
									<th>User_Id</th>
									<th>Roll_No</th>
									<th>Section</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									@foreach($Addcls  as $item)
									<tr>
									<td>{{$item->id}}</td>
									<td>{{$item->class}}</td>
									<td>{{$item->User_ID}}</td>
									<td>{{$item->Roll_no}}</td>
									<td>{{$item->Section}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
			<div class="card">
				<div class="card-header" style="background-color: black; color: white;">
						List Of Student
				</div>
					<div class="card-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>MATH</th>
									<th>HINDI</th>
									<th>ENGLISH</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									@foreach($Admrk  as $items)
									<tr>
									<td>{{$items->id}}</td>
									<td>{{$items->Math_Marks}}</td>
									<td>{{$items->Hindi_Marks}}</td>
									<td>{{$items->Engli_marks}}</td>
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