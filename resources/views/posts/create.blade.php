@include('layouts.app')
<head>
  <title>Bootstrap Example</title>

</head>
	<div class="container meal-form-div">
		<div class="meal-form">
			<form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data" class="card">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-content">
					<div class="row">
						<div class="col-md-6">
							<label>Name of Meal</label>
							<input type="text" name="name"><br><br>
						</div>
						<div class="col-md-6">
							<label>Description of Meal</label>
							<textarea name="description" rows="8" cols="80"></textarea>
						</div>
					</div><br><br>
					<div class="row">
						<div class="col-md-4">
							<label for="firstImage">Image 1</label>
							<input type="file" name="files1" ><br><br>
						</div>
						<div class="col-md-4">
							<label for="firstImage">Image 2</label>
							<input type="file" name="files2" ><br><br>
						</div>
						<div class="col-md-4">
							<label for="firstImage">Image 3</label>
							<input type="file" name="files3" ><br><br>
						</div>
					</div><br><br>
					<div class="row">
						<div class="col-md-4">
							<label for="firstImage">Image 4</label>
							<input type="file" name="files4" ><br><br>
						</div>
						<div class="col-md-4">
							<label for="firstImage">Image 5</label>
							<input type="file" name="files5" ><br><br>
						</div>
						<div class="col-md-4">
							<label for="firstImage">Image 6</label>
							<input type="file" name="files6" ><br><br>
						</div>
					</div><br><br>
					<div class="row">
						<div class="col-md-6">
							<label>Ingredients</label><br>
							<textarea name="ingredients" rows="20" cols="50"></textarea>
						</div>
						<div class="col-md-6">
							<label>Recipe</label><br>
							<textarea name="recipe" rows="20" cols="50"></textarea>
						</div>
					</div><br><br>
					<div class="btn-div">
						<input type="submit" name="submit" value="Upload" class="btn btn-primary">
						{{-- <input type="submit" name="submit" value="Cancel" class="btn btn-danger"> --}}
            <a href="/" class="btn btn-danger">CANCEL</a>
					</div>
				</div>
			</form>
		</div>
	</div>
