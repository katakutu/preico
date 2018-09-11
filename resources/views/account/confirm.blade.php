@extends('layouts.account')

@section('konten')
	<div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Deposit</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Deposit</a>
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
                <h2 class="title pull-left">Deposit Bitcoin (BTC)</h2>
            </header>
            <div class="content-body">

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-responsive">
                            <tr>
                                <td rowspan="7" width="50%">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=bitcoin:{{ Fungsi::mywallet() }}" alt="" style="width: 68%;">
                                </td>
                                <td><b>BITCOIN (BTC) Deposit Address</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-success">{{ Fungsi::mywallet() }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td><i>Amount = minimum 0.005 BTC (6 confirmations)</i></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>

    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">History Transaction</h2>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th width="7%">No. Transaction</th>
                                    <th>Amount</th>
                                    <th>Send To</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $var)
                                    <tr>
                                        <td><b>#{{ $var->id }}</b></td>
                                        <td>{{ $var->jumlah }} BTC</td>
                                        <td>{{ $var->wallet }}</td>
                                        <td>
                                            @if($var->status == '0')
                                                Non Verified
                                            @else
                                                Verified
                                            @endif
                                        </td>
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
@endsection