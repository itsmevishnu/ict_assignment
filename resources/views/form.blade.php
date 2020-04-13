@include('inc/header')
<section class="text-center">
    <div class="container">
      <h2>New Bills</h2>
    </div>
  </section>
<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">
			<!-- content start here -->
			<div class="col-md-8 offset-md-2">
				{{ Form::open(['route' => 'ictapp.store']) }}
				<fieldset>
					<div class="form-group">
						{{ Form::label('team_name', 'Team Name') }}
						{{ Form::text('team_name', '', ['class' => 'form-control', 'placeholder' => "Enter the Team  Name"]) }}
					</div>
					<div class="form-group">
						{{ Form::label('team_manager', 'Team Manager') }}
						{{ Form::text('team_manager', '', ['class' => 'form-control', 'placeholder' => "Enter the Team   Manager Name"]) }}
					</div>
					<div class="form-group">
						{{ Form::label('total', 'Total Bill Amount') }}
						{{ Form::text('total', '', ['class' => 'form-control', 'placeholder' => "Enter Total Bill Amount"]) }}
					</div>
					<div class="form-group">
						{{ Form::label('bill_date', 'Bill Date') }}
						{{ Form::text('bill_date', '', ['class' => 'form-control', 'id'=>'date', 'placeholder' => "Enter Bill Date"]) }}
					</div>
					<div class="form-group">
						{{ Form::label('bill_number', 'Bill Number') }}
						{{ Form::text('bill_number', '', ['class' => 'form-control', 'placeholder' => "Enter Bill Number"]) }}
					</div>
					<button type = "submit" id = "sumbit" class = "btn btn-outline-secondary">Submit</button>
				</fieldset>
				{{ Form::close() }}
			</div>
			<!-- contet end here -->
		</div>
	</div>

</div>
@push('scripts')
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>

	$(document).ready(function() { 

		$(function() { 
			$( "#date" ).datepicker(); 
		}); 
	}) 
</script>
@endpush

@include('inc/footer')