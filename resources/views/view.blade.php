@include('inc/header')
<section class="text-center">
    <div class="container">
      <h2>Bill Details</h2>
    </div>
  </section>
<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">
			<!-- content start here -->
			<div class="col-md-12">
				<table class="table">
					<tr>
						<th>Team Name</th>
						<td>{{ $entry->name }}</td>
					</tr>
					<tr>
						<th>Team Manager</th>
						<td>{{ $entry->team_manager }}</tds>
					</tr>
					<tr>
						<th>Bill amount</th>
						<td>{{ $entry->bill_amount }}</td>
					</tr>
					<tr>
						<th>Bill Number</th>
						<td>{{ $entry->bill_number }}</td>
					</tr>
					<tr>
						<th>Bill date</th>
						<td>{{ $entry->bill_date }}</td>
					</tr>

					<tr>
						<th>Entered by Team manager</th>
						<td>{{ $entry->created_at }}</td>
					</tr>

					<tr>
						<th>Approved by UG Nominee</th>
						<td>{{ $entry->ug_nominee }}</td>
					</tr>
					<tr>
						<th>Approved by Facad</th>
						<td>{{ $entry->facad }}</td>
					</tr>
					<tr>
						<th>Approved by SAC office</th>
						<td>{{ $entry->sac_office }}</td>
					</tr>
					<tr>
						<th>Approved by Dean</th>
						<td>{{ $entry->dean }}</td>
					</tr>
					<tr>
						<th>Approved by Account section</th>
						<td>{{ $entry->account_section }}</td>
					</tr>

				</table>
			</div>
			<!-- contet end here -->
		</div>
	</div>
</div>

@include('inc/footer')