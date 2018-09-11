@extends('layouts.admin')

@section('konten')
	<div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Inject BTX</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Inject BTX</a>
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
                    <div class="col-md-8">
                        <h2 class="title pull-left">Inject BTX</h2>
                    </div>
                    <div class="col-md-4">
                        <h4 class="title pull-right">
                            Saldo : {{ Fungsi::saldo_coin(Auth::user()->username) }} BTX &nbsp;&nbsp;&nbsp;
                        </h4>
                    </div>
                </div>
                
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="control-label">Username</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="control-label">Amount</label>
                                    <input type="text" class="form-control" name="amount" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block">INJECT</button>
                                </div>
                            </div>
                        </form>        
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title pull-left">Transaction History</h2>
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
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $var)
                                    <tr>
                                        <td>{{ $var->user }}</td>
                                        <td>{{ $var->jumlah }} BTX</td>
                                        <td>{{ $var->created_at }}</td>
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