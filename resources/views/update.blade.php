@include('inc/header')
<section class="text-center">
    <div class="container">
      <h2>Update Bill Status</h2>
    </div>
  </section>
<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				{{ Form::open([ 'route' => ['ictapp.update', $entry->id], 'method' => 'PUT'])  }}
				<fieldset>
					{{ Form::label('Do you really want to approve?')}}
					<button type = "submit" id = "sumbit" class = "btn btn-outline-secondary">Submit</button>
					<a href = "javascript:history.back();" id = "cancel" class = "btn btn-outline-secondary">Cancel</a>
				</fieldset>
				{{ Form::close() }}
			</div>
			<!-- contet end here -->
		</div>
		</div>
	</div>
</div>

@include('inc/footer')