@include('layouts.app')
	<div class="container">
		<div class="card">
			<form method="POST" action="{{route('posts.update', ['post'=>$post->id])}}" enctype="multipart/form-data">

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label>Name of Meal</label>
					<input type="text" name="name" value="{{ $post->name }}"><br><br>
				</div>

				<div>
					<label>Description of Meal</label>
					<input type="text" name="description" value="{{ $post->description }}"><br><br>
				</div>

				<div class="form-group">
					<label for="firstImage">Image</label>
					<input type="file" name="files" ><br><br>
				</div>

				<div>
					<label>Ingredients</label>
					<input type="text" name="ingredients" value="{{ $post->ingredients }}"><br><br>
				</div>

				<div>
					<label>Recipe</label>
					<input type="text" name="recipe" value="{{ $post->recipe }}"><br><br>
				</div>

				<div>
					<input type="submit" name="submit" value="Update">
				</div>
			</form>
		</div>
	</div>
