<!DOCTYPE html>
<html>

<head>
	<title> Import and Export Excel data to database Using Laravel 5.8 </title>
	<link rel="stylesheet"
		href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>
	<h6> Import and Export Excel data to
	
	</h6>
	<div class="container">
        @if(session('status'))
        
        @endif
		<div class="card bg-light mt-3">
			<div class="card-header">
			<span class="alert alert-success">{{session('status')}}</span>
			</div>
			<div class="card-body">
				<form action="{{ route('store') }}"
					method="POST"
					enctype="multipart/form-data">
					@csrf
					<input type="file" name="file"
						class="form-control">
					<br>
					<button class="btn btn-success">
						student
					</button>
                 
				</form>
			</div>
			<div class="card-body">
			<form action="{{ route('science') }}"
					method="POST"
					enctype="multipart/form-data">
					@csrf
					<input type="file" name="file"
						class="form-control">
					<br>
					<button class="btn btn-success">
						Import User Data
					</button>
                 
				</form>
			</div>
			<!-- user -->
			<div class="card-body">

			<form action="{{ route('science') }}"
					method="POST"
					enctype="multipart/form-data">
					@csrf
					<input type="file" name="file"
						class="form-control">
					<br>
					<button class="btn btn-success">
						user
					</button>
                 
				</form>
			</div>
			<!-- admisission -->
			<div class="card-body">

			<form action="{{ route('science') }}"
					method="POST"
					enctype="multipart/form-data">
					@csrf
					<input type="file" name="file"
						class="form-control">
					<br>
					<button class="btn btn-success">
						admission
					</button>
                 
				</form>
			</div>
				<a class="btn btn-warning"
                       href="{{ route('export-data') }}">
                              Export User Data
                      </a>
			</div>
		</div>
	</div>

</body>

</html>
