@extends('layouts.account')

@section('konten')
	<div class="col-xs-12">
		<div class="page-title">
	        <div class="pull-left">
	            <!-- PAGE HEADING TAG - START -->
	            <h1 class="title">Dashboard</h1>
	            <!-- PAGE HEADING TAG - END -->
	        </div>

	    </div>
	</div>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-primary alert-dismissible fade in">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Refferal Link :</strong> <i>"https://bitxx.co/account/register?reff=harjulianto"</i>
            </div>
        </div>
    </div>
    

	<div class="col-lg-12">
		<section class="box nobox marginBottom0">
			<div class="content-body">
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
			</div>
		</section>
        <div class="clearfix"></div>
        <div class="col-lg-8">
                    <section class="box" style="border-left: 3px solid #e77512;">
                        <header class="panel_header">
                            <h2 class="title pull-left">Recent 5 trading activities</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-small-font no-mb table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Deal ID Number</th>
                                                    <th data-priority="1">Trade Time</th>
                                                    <th data-priority="3">Status</th>
                                                    <th data-priority="1">Amount</th>
                                            </tr></thead>
                                            <tbody>
                                                @foreach($data as $var)
                                                    <tr>
                                                        <th><i class="fa fa-dot-circle-o complete"></i> Transaction #{{ $var->id }}</th>
                                                        <td>{{ $var->created_at }}</td>
                                                        <td><span class="status-complete">complete</span></td>
                                                        <td><i class="fa fa-plus complete normal"></i>{{ $var->jumlah }} BTX</td>
                                                    </tr>
                                                @endforeach
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
        <div class="col-lg-4">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Live crypto prices</h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                        <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                        <a class="box_close fa fa-times"></a>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-xs-12 mt-5">
                            <script>
                                baseUrl = "https://widgets.cryptocompare.com/";
                                var scripts = document.getElementsByTagName("script");
                                var embedder = scripts[scripts.length - 1];
                                (function() {
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if (appName == "") {
                                        appName = "local";
                                    }
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl + 'serve/v1/coin/multi?fsyms=BTC,ETH,XMR,LTC,XRP,NEO,DASH&tsyms=USD,EUR,CNY,GBP';
                                    s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                })();
                            </script>
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