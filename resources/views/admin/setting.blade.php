@extends('layouts.admin')

@section('konten')
	<div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Setting</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Setting</a>
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
                <h2 class="title pull-left">Setting</h2>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-xs-12">
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="control-label">Coin Name</label>
                                    <input type="text" class="form-control" name="nama_koin" value="{{ $data->nama_koin }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="control-label">Transaction Code</label>
                                    <input type="text" class="form-control" name="koin" value="{{ $data->koin }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="control-label">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="{{ $data->status }}">
                                            @if($data->status == '2')
                                                Maintenance
                                            @else
                                                Aktif
                                            @endif
                                        </option>
                                        <option value="">-Ubah Status-</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Maintenance</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-block btn-primary">Save</button>
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
@endsection