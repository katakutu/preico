@extends('layouts.account')

@section('konten')
    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Transaction History</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Transaction History</a>
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
                <h2 class="title pull-left">Bitxx Transaction (BTX)</h2>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Transaction</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($btx as $a)
                                    <tr>
                                        <td>{{ $a->created_at }}</td>
                                        <td>{{ $a->transaksi }}</td>
                                        <td>{{ $a->jumlah }} BTX</td>
                                        <td>{{ Fungsi::stat_transaction($a->status) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Bitcoin Transaction (BTC)</h2>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($btc as $b)
                                    <tr>
                                        <td>{{ $b->created_at }}</td>
                                        <td>{{ $b->jumlah }} BTC</td>
                                        <td>{{ Fungsi::stat_transaction($b->status) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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