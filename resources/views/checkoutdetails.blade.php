@extends('checkout')

@section('checkout_content')
<div class="row">
  <div class="col-lg-6">
    @foreach($datas as $row)
    <p>
      <strong>{{ $row->guest->name }}</strong><br>
      Dari :  {{ $row->guest->company }}<br>
      Jam Masuk : {{ $row->guest->created_at }}<br>
    </p>
    <div class="row">
      <div class="col-sm-2">
        <form class="" action="/checkout/guest" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $row->guest->id }}">
          <button type="submit" class="btn btn-success" name="button">checkout now</button>
        </form>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
