@extends('layouts.admin')

@section('konten')
	<div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">ICO Setting</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>ICO Setting</a>
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
                <h2 class="title pull-left">ICO Setting</h2>
            </header>
            <div class="content-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <td>Start Date</td>
                            <td>End Date</td>
                            <td>Quantity</td>
                            <td>Bonus</td>
                            <td>Sold</td>
                            <td>Price</td>
                            <td>Sold</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $var)
                            <tr>
                                <td>{{ Fungsi::tanggal($var->start_date) }}</td>
                                <td>{{ Fungsi::tanggal($var->end_date) }}</td>
                                <td>{{ $var->qty }} BTX</td>
                                <td>{{ $var->bonus }}%</td>
                                <td>{{ $var->sold }} BTX</td>
                                <td>{{ $var->price }} USD</td>
                                <td>{{ $var->sold }} BTX</td>
                                <td>{{ Fungsi::status($var->status) }}</td>
                                <td>
                                    <a data-toggle="modal" data-target="#view{{ $var->id }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a data-toggle="modal" data-target="#edit{{ $var->id }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a data-toggle="modal" data-target="#del{{ $var->id }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            
                            <!-- Modal -->
                            <div id="view{{ $var->id }}" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">view ICO</h4>
                                  </div>
                                  <form action="{{ url('admin/ico/status/'.$var->id.'') }}" method="POST">
                                    {{ csrf_field() }}
                                      <div class="modal-body">
                                        <div class="row">
                                            @if($var->status == '0')
                                                <div class="col-md-12">
                                                    Are you sure to start ico {{ $var->start_date }} / {{ $var->end_date }}?
                                                    <input type="hidden" name="status" value="1">
                                                </div>
                                            @elseif($var->status == '1')
                                                <div class="col-md-12">
                                                    Are you sure to end ico {{ $var->start_date }} / {{ $var->end_date }}?
                                                    <input type="hidden" name="status" value="2">
                                                </div>
                                            @endif
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger">Save</button>
                                        </div>
                                    </div>
                                   </form>
                                </div>
                              </div>
                            </div> 

                            <!-- Modal -->
                            <div id="edit{{ $var->id }}" class="modal fade" role="dialog">
                              <div class="modal-dialog modal-lg">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit ICO</h4>
                                  </div>
                                  <form action="{{ url('admin/ico/edit/'.$var->id.'') }}" method="POST">
                                    {{ csrf_field() }}
                                      <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="" class="control-label">Start Date</label>
                                                <input type="date" class="form-control" name="start_date" value="{{ $var->start_date }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">End Date</label>
                                                <input type="date" class="form-control" name="end_date" value="{{ $var->end_date }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="" class="control-label">Quantity</label>
                                                <input type="text" class="form-control" name="qty" value="{{ $var->qty }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">Price</label>
                                                <input type="text" class="form-control" name="price" value="{{ $var->price }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="" class="control-label">Bonus</label>
                                                <input type="text" class="form-control" name="bonus" value="{{ $var->bonus }}">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn btn-default btn-primary" >Save</button>
                                      </div>
                                  </form>
                                </div>

                              </div>
                            </div>

                            <!-- Modal -->
                            <div id="del{{ $var->id }}" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">delete ICO</h4>
                                  </div>
                                  <form action="{{ url('admin/ico/del/'.$var->id.'') }}" method="POST">
                                    {{ csrf_field() }}
                                      <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                Are you sure to delete ico {{ $var->start_date }} / {{ $var->end_date }}?
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                   </form>
                                </div>
                              </div>
                            </div> 
                        @endforeach
                    </tbody>
                </table>
                <br>
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#add">Add ICO</button>
            </div>
        </section>
    </div>

<!-- Modal -->
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add ICO</h4>
      </div>
      <form action="#" method="POST">
        {{ csrf_field() }}
          <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="control-label">Start Date</label>
                    <input type="date" class="form-control" name="start_date">
                </div>
                <div class="col-md-6">
                    <label for="" class="control-label">End Date</label>
                    <input type="date" class="form-control" name="end_date">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="control-label">Quantity</label>
                    <input type="text" class="form-control" name="qty">
                </div>
                <div class="col-md-6">
                    <label for="" class="control-label">Price</label>
                    <input type="text" class="form-control" name="price">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="control-label">Bonus</label>
                    <input type="text" class="form-control" name="bonus">
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default btn-primary" >Save</button>
          </div>
      </form>
    </div>

  </div>
</div>
@endsection

@section('css')
@endsection

@section('js')
@endsection