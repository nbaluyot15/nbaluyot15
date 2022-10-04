@section('content')
    {{-- content starts here --}}

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-white"  style="margin-top: 57px;" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->
    {{-- {{ Form::open(['url' => route('reportsDSPT.index'), 'method' => 'POST']) }} --}}
    @csrf

    <!-- Main content -->
    <div class="content" style="width:100%; margin:auto;">
        <div class="container-fluid">

            <div class="card bg-light" style="max-width: 100%;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">FRAMESET</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

        </div>
    </div>
    <!-- /.content -->
  </div>
</div>

@endsection