@extends('layouts.account')

@section('konten')
	<div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">ICO</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>ICO</a>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    <div class="col-lg-12">
        
    </div>

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

    @if($cek_ico == null)
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <br>
                </header>
                <div class="content-body">
                    <h1>BITXX ICO Hasn't Start Yet</h1> <br>
                    ICO Start at <b>{{ Fungsi::tanggal($cek->start_date) }}</b>
                </div>
            </section>
        </div>
    @else
        <div class="col-lg-8">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    
                    <div class="row">
                        <div class="col-md-10">
                            <h2 class="title pull-left">Buy Bitxx</h2>
                        </div>
                        <div class="col-md-2">
                            <h2 class="title pull-right">$ {{ $cek->price }} &nbsp;&nbsp;&nbsp;&nbsp;</h2>
                        </div>
                    </div>
                </header>
                <div class="content-body">    
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="transfer-wraper">
                                <div class="form-group no-mb">
                                    <label class="form-label">BTX</label>
                                    <div class="input-group mb-10">
                                        <span class="input-group-addon">
                                            <span class="arrow"></span>
                                            <i></i>    
                                        </span>
                                        <input type="text" class="form-control" value="BTX Balance" disabled>
                                    </div>


                                    <label class="form-label">Payment method</label>
                                    <div class="input-group mb-10">
                                        <span class="input-group-addon">
                                            <span class="arrow"></span>
                                            <i></i>    
                                        </span>
                                        <input type="text" class="form-control" value="BTC Balance" disabled>
                                    </div>
                                    <form action="#" method="POST">
                                        @csrf
                                        <div class="col-lg-5 no-pl">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Exchange amount" aria-describedby="basic-addon2" onKeyUp="calcBTC()" id="btx_amount" name="btx_amount" required>
                                                <span class="input-group-addon" id="basic-addon1">BTX</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="exchange-img-wrapper">
                                                <img src="../data/icons/exchange-arrows.png" class="mt-5 center-block" style="width:25px" alt="" /></div>
                                            </div>
                                        <div class="col-lg-5 no-pr">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Equivalent amount" aria-describedby="basic-addon2" id="btc_amount" name="btc_amount" readonly />
                                                <span class="input-group-addon" id="basic-addon2">BTC</span>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%">Buy BITXX</button>
                                    </form>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-4">
            <br>
            <div class="tile-progress bg-accent no-mb">
                <div class="content">
                    <h4 ><i class="fa fa-dollar icon-sm"></i> Current Price</h4>
                    <span>
                        <h2 style="color: #fff;">$ {{ $cek->price }}</h2>
                    </span>
                </div>
            </div>
            <br>
            <div class="tile-progress bg-accent no-mb">
                <div class="content">
                    <h4><i class="fa fa-flask icon-sm"></i> Stage ICO Complete</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: {{ $persen }}%"></div>
                    </div>
                    <span>{{ $persen }}% complete</span>
                </div>
            </div>
            <br>
            <div class="tile-progress bg-accent no-mb">
                <div class="content">
                    <h4 ><i class="fa fa-dollar icon-sm"></i> BTX Available</h4>
                    <span>
                        <h2 style="color: #fff;">{{ $sisa }} BTX</h2>
                    </span>
                </div>
            </div>
        </div>
    @endif

    
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
    <script>
        function calcBTC() {
            var total = document.getElementById("btx_amount").value * {{ $harga }}; {{-- harga btc * $2 --}}
            document.getElementById("btc_amount").value = total;
        }
    </script>
@endsection