@section('content')
    {{-- content starts here --}}

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="margin-top: 40px;" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->
    {{-- {{ Form::open(['url' => route('reportsDSPT.index'), 'method' => 'POST']) }} --}}
    @csrf

    <!-- Main content -->
    <div class="content" style="width:100%; margin:auto;">
      <div class="container-fluid">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="card card-primary card-tabs">
                    <div class="card-header p-0">
                    <div class="modal-header" style="margin-bottom: -20px; background-color: blue; align: center;">
                    </div>
                    <div class="modal-header" style="margin-bottom: -34px; background-color: #fcc200; align: center;">
                    </div>
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist" style="margin-top: 5px; background-color: #ffffff;">
                        <l id="titlePage" style="font-family:'Calibri'; border-bottom: none; font-size: 35px; margin-top: 10px; margin:auto; color: #002e63;">FRAMESET</l>
                    </ul>
                    </div>
              <div class="card-body">

                   <table class="table table-bordered table-striped table-layout:auto;" style="font-size: 12px;">
                                  <tr>
                                    <td>test</td>
                                  </tr>
                   </table>
              </div>
            </div>
          </div>
    </div>
    <!-- /.content -->
  </div>
</div>

@endsection