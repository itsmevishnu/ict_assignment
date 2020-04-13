@include('inc/header')
<section class="text-center">
    <div class="container">
      <h2>Approve the Entries: Options</h2>
    </div>
  </section>
<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      @if(session()->has('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error</strong> {{ session()->get('error') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <div class="row">
        <!-- col1 -->
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <div class="card-body">
              <p class="card-text">
                Approve by UG Nominee
              </p>
              <a href="{{ route('ug_nominee')  }}" class="btn btn-sm btn-outline-secondary">Click Here</a>
            </div>
          </div>
        </div>
        <!-- col2 -->
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <div class="card-body">
              <p class="card-text">
                Approve by Fac Ad
              </p>
              <a href="facad" class="btn btn-sm btn-outline-secondary">Click Here</a>
            </div>
          </div>
        </div>
        <!-- col3 -->
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <div class="card-body">
              <p class="card-text">
                Approve by SAC Office
              </p>
              <a href="{{ route('sac') }}" class="btn btn-sm btn-outline-secondary">Click Here</a>
            </div>
          </div>
        </div>
        <!-- col4 -->
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <div class="card-body">
              <p class="card-text">
                Approve by Dean
              </p>
              <a href="{{ route('dean') }}" class="btn btn-sm btn-outline-secondary">Click Here</a>
            </div>
          </div>
        </div>
      </div> <!-- row end -->
      <div class="row">
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <div class="card-body">
              <p class="card-text">
                Approve by Account Section
              </p>
              <a href="{{ route('account')  }}" class="btn btn-sm btn-outline-secondary">Click Here</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- contaier end -->
  </div> <!-- album end -->
</main>
@include('inc/footer')