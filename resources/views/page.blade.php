@include('inc/header')
<main role="main">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Reimbursement Application</h1>
      <p class="lead text-muted">Solution for bringing transparency in the ITSP reimbursement procedure.</p>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      @if(session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucess</strong> {{ session()->get('message') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <div class="row">
        <!-- col1 -->
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-body">
              <p class="card-text">
                New Bill
              </p>
              <a href="{{ route('ictapp.create')  }}" class="btn btn-sm btn-outline-secondary">Click Here</a>
            </div>
          </div>
        </div>
        <!-- col2 -->
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-body">
              <p class="card-text">
                Update Bill Status
              </p>
              <a href="{{ route('options') }}" class="btn btn-sm btn-outline-secondary">Click Here</a>
            </div>
          </div>
        </div>
        <!-- col3 -->
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-body">
              <p class="card-text">
                View Bill Status
              </p>
              <a href="{{ route('ictapp.index') }}" class="btn btn-sm btn-outline-secondary">Click Here</a>
            </div>
          </div>
        </div>

      </div> <!-- row end -->
    </div> <!-- contaier end -->
  </div> <!-- album end -->
</main>
@include('inc/footer')