@extends('layouts.admin')

@section('konten')
	<div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">BTC Transaction</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>BTC Transaction</a>
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
                        <h2 class="title pull-left">BTC Transaction Need Confirmation</h2>
                    </div>
                </div>
                
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Wallet</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $var)
                                    <tr>
                                        <td>{{ $var->user }}</td>
                                        <td>{{ $var->wallet }}</td>
                                        <td>{{ $var->jumlah }}</td>
                                        <td>
                                            @if($var->status == '0')
                                                Non Verified
                                            @else
                                                Verified
                                            @endif
                                        </td>
                                        <td>
                                            <a data-toggle="modal" data-target="#conf{{ $var->id }}">
                                                <button class="btn btn-primary">Confirm</button>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="conf{{ $var->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirm Transaction</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form action="#" method="POST">
                                              <div class="modal-body">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $var->id }}">
                                                    <input type="hidden" name="wallet" value="{{ $var->wallet }}">
                                                    <input type="hidden" name="amount" value="{{ $var->jumlah }}">
                                                    Confirm {{ $var->wallet }} transaction for {{ $var->jumlah }} BTC?
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button class="btn btn-primary">Confirm</button>
                                              </div>
                                          </form>
                                              
                                        </div>
                                      </div>
                                    </div>
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


    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title pull-left">BTC Block.IO Received</h2>
                    </div>
                </div>
                
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Send By</th>
                                    <th>Received By</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($block as $var)
                                    <tr>
                                        <td>{{ $var->send_by }}</td>
                                        <td>{{ $var->received_by }} ({{ Fungsi::wallet_siapa($var->received_by) }})</td>
                                        <td>{{ $var->amount }} BTC</td>      
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        {{ $block->links() }}
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