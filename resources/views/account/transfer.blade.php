@extends('layouts.account')

@section('konten')
    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Transfer</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Transfer</a>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="r4_counter db_box has-gradient-to-right-bottom">
                <div class="icon-after cc BTC-alt"></div>
                <i class='pull-left cc BTC-alt icon-md icon-white mt-10'></i>
                <div class="stats">
                    <h3 class="color-white mb-5">{{ Fungsi::saldo_btc(Auth::user()->username) }} BTC</h3>
                    <span>Wallet BTC balance</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="r4_counter db_box">
                <div class="icon-after cc DASH-alt"></div>
                <i class='pull-left cc DASH-alt icon-md icon-primary mt-10'></i>
                <div class="stats">
                    <h3 class="mb-5">{{ Fungsi::saldo_coin(Auth::user()->username) }} {{ Fungsi::pengaturan('koin') }}</h3>
                    <span>Wallet {{ Fungsi::pengaturan('koin') }} balance</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="r4_counter db_box">
                <div class="icon-after "></div>
                <i class='pull-left  icon-md icon-primary mt-10'></i>
                <div class="stats">
                    <h3 class="mb-5">$ 0.00</h3>
                    <span>Wallet USD balance</span>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Transfer Bitxx (BTX)</h2>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-xs-12">
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="control-label">Recipient Username </label>
                                    <input type="text" name="username"  class="form-control"  required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="control-label">Amount to Transfer</label>
                                    <input type="text" name="amount" class="form-control" required>
                                    * minimum <b>1 BTX</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block">Transfer</button>
                                </div>
                            </div>
                            
                        </form>
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