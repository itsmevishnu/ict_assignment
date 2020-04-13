@include('inc/header')
<section class="text-center">
    <div class="container">
      <h2>Approve the Entries</h2>
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
						<th>Action</th>
					</thead>
					<tbody id="content">
						@forelse($lists as $list)
						<tr>
							<td>{{ $list->name }}</td>
							<td>{{ $list->team_manager }}</td>
							<td>{{ $list->bill_amount }}</td>
							<td>{{ $list->bill_number }}</td>
							<td>{{ date( "d-m-Y", strtotime( $list->bill_date ) ) }}</td>
							<td><a href="{{ route('ictapp.edit',$list) }}" class="btn btn-sm btn-outline-secondary">Approve</a></td>
						</tr>
						@empty
						<tr>
							<td colspan="5">(No entry found!)</td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</div>
			<!-- contet end here -->
		</div>
	</div>
</div>

@include('inc/footer')