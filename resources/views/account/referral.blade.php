@extends('layouts.account')

@section('konten')
    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Referral</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Referral</a>
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
                <h2 class="title pull-left">Referral</h2>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div>
                            <b>Share Your Affiliate</b> <br>
                            <i>https://bitxx.co/account/register?reff={{ Auth::user()->username }}</i>
                        </div>
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Level</th>
                                    <th>Username</th>
                                    <th>ICO</th>
                                    <th>BTX</th>
                                    <th>BTC</th>
                                    <th>USD</th>
                                    <th>Reff</th>
                                    <th>Join Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{ Fungsi::referral(Auth::user()->username) }}
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