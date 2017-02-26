@extends('layouts.depan')

@section('content')
<div class="container">
    <div class="row vertical-align">
      <div class="col-sm-12">
        <div class="main-content card-1 ">
          <br>
          <h1 class="text-center">Tempel kartu anda</h1>
          <br>
          <div class="row">
            <div class="offset-sm-3 col-sm-6">
              <form class="" action="/checkout" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" class="form-control" name="card_id" value="" autofocus placeholder="Tempel kartu anda ..">
                </div>
              </form>
            </div>
          </div>

          <hr>
          @yield('checkout_content')
        </div>
      </div>
    </div>
</div>
@endsection
