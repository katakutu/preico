@extends('layouts.account')

@section('konten')
    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Support</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Support</a>
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
                <h2 class="title pull-left">Support</h2>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Ready to start your next success with us? That's great!</p>
                        <p>Send us an email and we will get back to you as soon as possible!</p>
                        <p><strong><a href="mailto:Support@bitxx.co" target="_blank">Support@bitxx.co</a></strong></p>
                        
                        <hr/>
                        
                        <h5>Help & Support :</h5><br/>
                        
                        <p>Email : <strong><a href="mailto:Support@bitxx.co" target="_blank">Support@bitxx.co</a></strong></p>
                        <p>Facebook : <strong><a href="https://facebook.com/bitxx.co " target="_blank">https://www.facebook.com/bitxx.co </a></strong></p>
                        <p>Instagram : <strong><a href="https://instagram.com/bitxx.co" target="_blank">https://instagram.com/bitxx.co</a></strong></p>
                        <p>Twitter : <strong><a href="#" target="_blank">https://twitter.com/bitxx.co</a></strong></p>
                        <p>Telegram : <strong><a href="https://t.me/joinchat/xadnaxada" target="_blank">https://t.me/joinchat/xadnaxada</a></strong></p>
                        
                        <hr/>
                        
                        <p><em>We will respond to your request within 1 to 24 hours on our business day.</em></p>
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