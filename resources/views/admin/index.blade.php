@extends('layouts.admin')

@section('konten')
	<div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Dashboard</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Dashboard</a>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    <div class="row">
        <div class="col-lg-12">
            <section class="box nobox marginBottom0">
                <div class="content-body">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after cc BTC-alt"></div>
                                <i class='pull-left cc BTC-alt icon-md icon-primary mt-10'></i>
                                <div class="stats">
                                    <h3 class="mb-5">{{ Fungsi::saldo_btc(Auth::user()->username) }} BTC</h3>
                                    <span>BTC Wallet Balance </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after cc DASH-alt"></div>
                                <i class='pull-left cc DASH-alt icon-md icon-primary mt-10'></i>
                                <div class="stats">
                                    <h3 class="mb-5">{{ Fungsi::saldo_coin(Auth::user()->username) }} BTX</h3>
                                    <span>BTX Wallet Balance</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after"></div>
                                <i class='pull-left  icon-md icon-primary mt-10'></i>
                                <div class="stats">
                                    <h3 class="mb-5">$ 0.00</h3>
                                    <span>USD Wallet Balance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="box nobox marginBottom0">
                <div class="content-body">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after fa fa-user"></div>
                                <i class='pull-left fa fa-user icon-md icon-primary mt-10'></i>
                                <div class="stats">
                                    <h3 class="mb-5">{{ Fungsi::user_register() }}</h3>
                                    <span>Total Users Registered </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after fa fa-users"></div>
                                <i class='pull-left fa fa-users icon-md icon-primary mt-10'></i>
                                <div class="stats">
                                    <h3 class="mb-5">{{ Fungsi::user_unconfirm() }}</h3>
                                    <span>Unconfirmed Users</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after fa fa-shopping-cart"></div>
                                <i class='pull-left fa fa-shopping-cart icon-md icon-primary mt-10'></i>
                                <div class="stats">
                                    <h3 class="mb-5">0.00000000 BTX</h3>
                                    <span>Total Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">ICO Distribution</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">    
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-xs-12 mt-20">
                                <div id="container"></div>
                                <div class="center-values">
                                    <span class="phx trix">BITXX</span><br />
                                    <h6 class="margin-btm">{{ Fungsi::count_supply() }} </h6>
                                    <span class="phx">Total Supply</span>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-xs-12 progress-div">
                                @foreach($ico as $key=>$ico)
                                    <!-- Green -->
                                    <h6 class="angle-round">Round {{ $key+1 }} ($ {{ $ico->price }}) <span style="margin-left: 126px; color:#ccc;">{{ Fungsi::tanggal($ico->start_date) }} - {{ Fungsi::tanggal($ico->end_date) }}</span><span class="number">{{ $ico->qty }} BTX</span></h6>
                                    <div class="progress progress-cls">
                                    <div class="progress-bar background-two" style="background-color: #a9013f !important;width:{{ Fungsi::sold_persen($ico->id) }}% !important;">$ {{ $ico->price }}</div>
                                    </div>
                                @endforeach
                                
                                   
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>

@endsection

@section('css')
@endsection

@section('js')
@endsection