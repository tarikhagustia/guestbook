<html>

<head>
    <title>Tampilan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/aplikasi.css') }}">
</head>

<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="">
            <div class="">
                <div class="row">
                    <div class="col-sm-12 vcenter">
                        <!--<input class="btn btn-primary" id="btnn" type="submit" value="Home" style="width: 120px; margin-top: 10px; margin-left: 10px;" />
                        <input class="btn btn-primary" id="btnn" type="submit" value="Check In" style="width: 120px; margin-top: 10px; margin-left: 10px;" />
                        <input class="btn btn-primary" id="btnn" type="submit" value="Check Out" style="width: 120px; margin-top: 10px; margin-left: 10px;" />
                        <input class="btn btn-primary" id="btnn" type="submit" value="Appoinment" style="width: 120px; margin-top: 10px; margin-left: 10px;" />
                        <input class="btn btn-primary" id="btnn" type="submit" value="Report" style="width: 120px; margin-top: 10px; margin-left: 10px;" />
                        <input class="btn btn-primary" id="btnn" type="submit" value="Sign Out" style="width: 120px; margin-top: 10px; margin-left: 10px;" /><br>-->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="embed-responsive embed-responsive-1by1">
                                    <video id="video" width="640" height="480" autoplay style="max-width: 100%;"></video>   
                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                                <hr/>
                                <div class="center">
                                <button class="btn btn-primary btn-lg">Snap</button>
                                </div>
                                
                            </div>
                            <div class="col-sm-8"></div>
                        </div>
                        <form action="/guest/save" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="photo" />
                            <table style="margin-top: 10px;">
                                <tr>
                                    <td rowspan="11" style="max-width: 100%;">
                                        
                                    </td>
                                    <tr>
                                        <td colspan="2"><label style="margin-right: 20px; margin-left: 10px;">GUEST CARD ID</label></td>
                                        <td colspan="2"><input type="text" class="form-control" style="width: 300px; margin-top: 5px; margin-right: 20px;" name="manual_card_no" /></td>
                                        <td><input type="checkbox" name="Manual_Card" style="margin-right: 5px;" /><label>Manual Card No</label></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <hr style="margin-left: 10px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label style="margin-right: 10px; margin-left: 10px;">ID Type</label></td>
                                        @foreach($types as $type)
                                        <td><input type="radio" style="margin-right: 5px; margin-left: 10px;" name="id_type" value="{{ $type->id }}" /><label>{{ $type->name }}</label></td>
                                        @endforeach
                                        
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="4"><input type="radio" style="margin-left: 10px; margin-right: 5px;" /><label>Other</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="margin-right: 20px; margin-left: 10px;">ID No.</label></td>
                                        <td colspan="2"><input type="text" class="form-control" style="width: 330px; margin-right: 20px;" name="id_nomor" /></td>
                                        <td colspan="2"><input type="submit" class="btn btn-primary" value="Check List Of Guest" style="width: 100%;margin-right: 5px;" /></td>
                                    </tr>
                                    <tr>
                                        <td><label style="margin-right: 20px; margin-left: 10px;">Name</label></td>
                                        <td colspan="4"><input type="text" class="form-control" style="width: 100%;margin-top: 10px;" name="name_guest" /></td>
                                    </tr>
                                    <tr>
                                        <td><label style="margin-right: 20px; margin-left: 10px;">Company</label></td>
                                        <td colspan="4"><input type="text" class="form-control" style="width: 100%;margin-top: 10px;" name="company" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <hr style="margin-left: 10px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label style="margin-right: 10px; margin-left: 10px;">Purpose</label></td>
                                        @foreach($purposes as $purpose)
                                        <td><input type="radio" style="margin-right: 5px; margin-left: 10px;" name="purpose" value="{{ $purpose->id }}" /><label>{{ $purpose->name }}</label></td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td></td>
                                        
                                    </tr>
                                </tr>
                                <tr>
                                    <td><input class="btn btn-primary" type="button" id="snap" style="width: 230px; margin-top: 10px; margin-left: 10px;" value="SNAP" /><br></td>
                                    <td><label style="margin-left: 10px;">Area</label></td>
                                    @foreach($areas as $area)
                                    <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px;" value="{{ $area->id }}" name="area" /><label>{{ $area->name }}</label><br></td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td><input class="btn btn-primary" type="submit" style="width: 230px; margin-top: 10px; margin-left: 10px;" value="CANCEL" /></td>
                                    <td></td>
                                    
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><label style="margin-left: 10px;">Duration</label></td>
                                    <td><input type="text" class="form-control" style="width: 100%;" name="duration" /></td>
                                    <td><label style="margin-left: 10px;">Hours</label></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><label style="margin-left: 10px;">Partner</label></td>
                                    <td><input type="text" class="form-control" style="width: 100%; margin-top: 10px;" name="partner" /></td>
                                    <td><label style="margin-left: 10px;">People</label></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><label style="margin-left: 10px;">Excourt</label></td>
                                    <td colspan="4"><input type="text" class="form-control" style="width: 100%; margin-top: 10px;" name="excourt" /></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="5">
                                        <hr style="margin-left: 10px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2"><input type="submit" class="btn btn-primary" value="Save" style="width: 90%;margin-right: 5px;" /></td>
                                    <td colspan="2"><input type="reset" class="btn btn-primary" value="Cancel" style="width: 90%;margin-right: 5px;" /></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="col-sm-12">
                        <canvas id="canvas" width="640" height="480"></canvas>
                    </div>    
                </div>
            </div>
        </div>
        
    </div>
</body>
<script>

    // Elements for taking the snapshot
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var video = document.getElementById('video');

    // Trigger photo take
    document.getElementById("snap").addEventListener("click", function() {
        context.drawImage(video, 0, 0, 640, 480);

        var dataURL = canvas.toDataURL();
        
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

</html>