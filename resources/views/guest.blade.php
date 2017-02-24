@extends('layouts.depan')

@section('content')
<div class="container">
    <div class="row vertical-align">
      <div class="col-sm-12">
        <div class="main-content card card-1">
          <form class="" action="{{ route('guest_save') }}" method="post">
            {{ csrf_field() }}
            <canvas id="canvas" width="640" height="480" hidden></canvas>
            <input type="hidden" name="photo" />
            <div class="row">
                <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-1by1">
                        <video id="video" width="640" height="480" autoplay style="max-width: 100%;"></video>
                    </div>
                    <hr/>
                    <div class="center">
                      <button type="button" class="btn btn-primary btn-lg btn-block" id="snap">Snap</button>
                      <button class="btn btn-success btn-lg btn-block">Save</button>
                    </div>
                </div>
                <div class="col-sm-8">
                <div class="form-group row {{ $errors->has('card_id') ? ' has-danger' : '' }}">
                  <label for="card_id" class="col-sm-3 col-form-label">GUEST CARD ID</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputEmail3" name="card_id" />
                    @if ($errors->has('card_id'))
                        <span class="form-control-feedback">
                            <strong>{{ $errors->first('card_id') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-check col-sm-3">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Manual
                    </label>
                  </div>
                </div>
                <hr>
                <div class="form-group row {{ $errors->has('idtype_id') ? ' has-danger' : '' }}">
                  <label for="card_id" class="col-sm-2 col-form-label">ID Type</label>
                  <div class="col-sm-9">
                    <div class="form-check">
                      @foreach($types as $row)
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="idtype_id" id="gridRadios1" value="{{ $row->id }}">
                        {{ $row->name }}
                      </label>
                      @endforeach
                      @if ($errors->has('idtype_id'))
                          <span class="form-control-feedback">
                              <strong>{{ $errors->first('idtype_id') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group row {{ $errors->has('nomor_id') ? ' has-danger' : '' }}">
                  <label for="card_id" class="col-sm-2 col-form-label">ID Nomor</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="nomor_id" value="">
                    @if ($errors->has('nomor_id'))
                        <span class="form-control-feedback">
                            <strong>{{ $errors->first('nomor_id') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-sm-3">
                    <button type="button" class="btn btn-success btn-block" name="button">Check list Guest</button>
                  </div>
                </div>
                <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
                  <label for="card_id" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="">
                    @if ($errors->has('name'))
                        <span class="form-control-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group row {{ $errors->has('company') ? ' has-danger' : '' }}">
                  <label for="card_id" class="col-sm-2 col-form-label">Company</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="company" value="">
                    @if ($errors->has('company'))
                        <span class="form-control-feedback">
                            <strong>{{ $errors->first('company') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group row {{ $errors->has('purpose_id') ? ' has-danger' : '' }}">
                  <label for="card_id" class="col-sm-2 col-form-label">Purpose</label>
                  <div class="col-sm-9">
                    <div class="form-check">
                      @foreach($purposes as $row)
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="purpose_id" id="gridRadios1" value="{{ $row->id }}">
                        {{ $row->name }}
                      </label>
                      @endforeach
                      @if ($errors->has('purpose_id'))
                          <span class="form-control-feedback">
                              <strong>{{ $errors->first('purpose_id') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group row {{ $errors->has('area_id') ? ' has-danger' : '' }}">
                  <label for="card_id" class="col-sm-2 col-form-label">Area</label>
                  <div class="col-sm-9">
                    <div class="form-check">
                      @foreach($areas as $row)
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="area_id" value="{{ $row->id }}">
                        {{ $row->name }}
                      </label>
                      @endforeach
                      @if ($errors->has('area_id'))
                          <span class="form-control-feedback">
                              <strong>{{ $errors->first('area_id') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group row {{ $errors->has('duration') ? ' has-danger' : '' }}">
                  <label for="card_id" class="col-sm-2 col-form-label">Duration</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="duration" value="">
                    @if ($errors->has('duration'))
                        <span class="form-control-feedback">
                            <strong>{{ $errors->first('duration') }}</strong>
                        </span>
                    @endif
                  </div>
                   <span style="margin-top : 5px;">Hourse</span>
                </div>
                <div class="form-group row">
                  <label for="card_id" class="col-sm-2 col-form-label">Partner</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="partner" value="">
                  </div>
                   <span style="margin-top : 5px;">People</span>
                </div>
                <div class="form-group row {{ $errors->has('excourt') ? ' has-danger' : '' }}">
                  <label for="card_id" class="col-sm-2 col-form-label">Excort</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="excourt" value="">
                    @if ($errors->has('excourt'))
                        <span class="form-control-feedback">
                            <strong>{{ $errors->first('excourt') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
</div>
</div>
@endsection

@section('javascript')
<script type="text/javascript">
// Elements for taking the snapshot
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
    context.drawImage(video, 0, 0, 640, 480);

    $('button[id="snap"]').attr( "disabled", true);
    // $('#snap').disable(true);
    $(canvas).show();
    var dataURL = canvas.toDataURL();
    console.log(dataURL);
    $('input[name=photo]').val(dataURL);
});
// Grab elements, create settings, etc.
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        video.src = window.URL.createObjectURL(stream);
        video.play();
    });
}

/* Legacy code below: getUserMedia
else if(navigator.getUserMedia) { // Standard
    navigator.getUserMedia({ video: true }, function(stream) {
        video.src = stream;
        video.play();
    }, errBack);
} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
    navigator.webkitGetUserMedia({ video: true }, function(stream){
        video.src = window.webkitURL.createObjectURL(stream);
        video.play();
    }, errBack);
} else if(navigator.mozGetUserMedia) { // Mozilla-prefixed
    navigator.mozGetUserMedia({ video: true }, function(stream){
        video.src = window.URL.createObjectURL(stream);
        video.play();
    }, errBack);
}
*/
</script>
@endsection
