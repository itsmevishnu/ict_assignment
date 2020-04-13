@include('inc/header')
<section class="text-center">
    <div class="container">
      <h2>All Bills</h2>
    </div>
  </section>
<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">
			<!-- content start here -->
			<div class="col-md-12">
				<table class="table">
					<thead class="custom-thead">
						<th>Team Name</th>
						<th>Team Manager</th>
						<th>Bill amount</th>
						<th>Bill Number</th>
						<th>Bill date</th>
						<th>UG Nominee</th>
						<th>Fac Ad</th>
						<th>SAC Offie</th>
						<th>Dean Office</th>
						<th>Account Office</th>
						<th>Option</th>
					</thead>
					<tbody id="content">
					@foreach($lists as $list)
					<tr>
						<td>{{ $list->name }}</td>
						<td>{{ $list->team_manager }}</td>
						<td>{{ $list->bill_amount }}</td>
						<td>{{ $list->bill_number }}</td>
						<td>{{ date( "d-m-Y", strtotime( $list->bill_date ) ) }}</td>
						<td>{{ is_null( $list->ug_nominee ) ? 'NA' : 'Done' }}</td>
						<td>{{ is_null( $list->facad ) ? 'NA' : 'Done' }}</td>
						<td>{{ is_null( $list->sac_office ) ? 'NA' : 'Done' }}</td>
						<td>{{ is_null( $list->dean ) ? 'NA' : 'Done' }}</td>
						<td>{{ is_null( $list->account_section ) ? 'NA' : 'Done' }}</td>
						<td><a href="{{ route('ictapp.show', $list->id) }}">View</a></td>
					</tr>
					@endforeach
					</tbody>
				</table>
				{{ $lists->links() }}
			</div>
			<!-- contet end here -->
		</div>
	</div>
</div>

@include('inc/footer')