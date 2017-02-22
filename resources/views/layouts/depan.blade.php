<html>

<head>
    <title>Tampilan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="{{ asset('css/aplikasi.css') }}">
</head>

<body>
<nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">
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
        <div class="row vertical-align">
          <div class="col-sm-12">
            <div class="main-content card card-1">
              <div class="row">
                <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-1by1">
                        <video id="video" width="640" height="480" autoplay style="max-width: 100%;"></video>
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                    <hr/>
                    <div class="center">
                      <button class="btn btn-primary btn-lg btn-block ">Snap</button>
                      <button class="btn btn-success btn-lg btn-block">Save</button>

                    </div>
                </div>
                <div class="col-sm-8">
                  <div class="form-group row">
                    <label for="card_id" class="col-sm-3 col-form-label">GUEST CARD ID</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                    <div class="form-check col-sm-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Manual
                      </label>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label for="card_id" class="col-sm-2 col-form-label">ID Type</label>
                    <div class="col-sm-9">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="card_id" class="col-sm-2 col-form-label">ID Nomor</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                    <div class="col-sm-3">
                      <button type="button" class="btn btn-success btn-block" name="button">Check list Guest</button>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="card_id" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="card_id" class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="card_id" class="col-sm-2 col-form-label">Purpose</label>
                    <div class="col-sm-9">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="card_id" class="col-sm-2 col-form-label">Area</label>
                    <div class="col-sm-9">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="area" id="gridRadios1" value="option1">
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="area" id="gridRadios1" value="option1">
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="area" id="gridRadios1" value="option1">
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="card_id" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                     <span style="margin-top : 5px;">Hourse</span>
                  </div>
                  <div class="form-group row">
                    <label for="card_id" class="col-sm-2 col-form-label">Partner</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                     <span style="margin-top : 5px;">People</span>
                  </div>
                  <div class="form-group row">
                    <label for="card_id" class="col-sm-2 col-form-label">Excort</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}" ></script>
<script src="{{ asset('js/bootstrap.min.js') }}" ></script>

</body>
</html>
