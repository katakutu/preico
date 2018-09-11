@extends('layouts.admin')

@section('konten')
	<div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">User Data</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>User Data</a>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title pull-left">User Data</h2>
                    </div>
                </div>
                
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>E-Mail</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $var)
                                    <tr>
                                        <td>{{ $var->username }}</td>
                                        <td>{{ $var->email }}</td>
                                        <td>{{ $var->country }}</td>
                                        <td>{{ Fungsi::verifikasi($var->id) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('css')
@endsection

@section('js')
    @if(Session::has('error'))
      <script>
        swal({
        title: "Error!",
        text: "{{ Session::get('error') }}",
        icon: "error",
      });
      </script>
  @endif

  @if(Session::has('success'))
      <script>
        swal({
        title: "success!",
        text: "{{ Session::get('success') }}",
        icon: "success",
      });
      </script>
  @endif
@endsection