<html>

<head>
    <link href="asset/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="asset/css/gaya.css" type="text/css" rel="stylesheet" />
    <title>Tampilan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <input class="btn btn-primary" id="btnn" type="submit" value="Home" style="width: 120px; margin-top: 10px; margin-left: 10px;" />
                <input class="btn btn-primary" id="btnn" type="submit" value="Check In" style="width: 120px; margin-top: 10px; margin-left: 10px;" />
                <input class="btn btn-primary" id="btnn" type="submit" value="Check Out" style="width: 120px; margin-top: 10px; margin-left: 10px;" />
                <input class="btn btn-primary" id="btnn" type="submit" value="Appoinment" style="width: 120px; margin-top: 10px; margin-left: 10px;" />
                <input class="btn btn-primary" id="btnn" type="submit" value="Report" style="width: 120px; margin-top: 10px; margin-left: 10px;" />
                <input class="btn btn-primary" id="btnn" type="submit" value="Sign Out" style="width: 120px; margin-top: 10px; margin-left: 10px;" /><br>

                <table style="margin-top: 10px;">
                    <tr>
                        <td rowspan="11" style="max-width: 100%;">
                            <video autoplay="true" id="videoElement" style="max-width: 100%;"></video>
                        </td>
                        <tr>
                            <td colspan="2"><label style="margin-right: 20px; margin-left: 10px;">GUEST CARD ID</label></td>
                            <td colspan="2"><input type="text" class="form-control" style="width: 300px; margin-top: 5px; margin-right: 20px;" /></td>
                            <td><input type="checkbox" name="Manual_Card" style="margin-right: 5px;" /><label>Manual Card No</label></td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <hr style="margin-left: 10px;">
                            </td>
                        </tr>
                        <tr>
                            <td><label style="margin-right: 10px; margin-left: 10px;">ID Type</label></td>
                            <td><input type="radio" style="margin-right: 5px; margin-left: 10px;" /><label>Citizen ID</label></td>
                            <td><input type="radio" style="margin-right: 5px; margin-left: 10px;" /><label>Driving License</label></td>
                            <td><input type="radio" style="margin-left: 10px; margin-right: 5px;" /><label>Passport</label></td>
                            <td><input type="radio" style="margin-left: 10px; margin-right: 5px;" /><label>Student ID</label></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="4"><input type="radio" style="margin-left: 10px; margin-right: 5px;" /><label>Other</label></td>
                        </tr>
                        <tr>
                            <td><label style="margin-right: 20px; margin-left: 10px;">ID No.</label></td>
                            <td colspan="2"><input type="text" class="form-control" style="width: 330px; margin-right: 20px;" /></td>
                            <td colspan="2"><input type="submit" class="btn btn-primary" value="Check List Of Guest" style="width: 100%;margin-right: 5px;" /></td>
                        </tr>
                        <tr>
                            <td><label style="margin-right: 20px; margin-left: 10px;">Name</label></td>
                            <td colspan="4"><input type="text" class="form-control" style="width: 100%;margin-top: 10px;" /></td>
                        </tr>
                        <tr>
                            <td><label style="margin-right: 20px; margin-left: 10px;">Company</label></td>
                            <td colspan="4"><input type="text" class="form-control" style="width: 100%;margin-top: 10px;" /></td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <hr style="margin-left: 10px;">
                            </td>
                        </tr>
                        <tr>
                            <td><label style="margin-right: 10px; margin-left: 10px;">Purpose</label></td>
                            <td><input type="radio" style="margin-right: 5px; margin-left: 10px;" /><label>Meeting</label></td>
                            <td><input type="radio" style="margin-right: 5px; margin-left: 10px;" /><label>Visit</label>
                                <input type="radio" style="margin-right: 5px; margin-left: 10px;" /><label>Benchmark</label></td>
                            <td><input type="radio" style="margin-left: 10px; margin-right: 5px;" /><label>Audit</label></td>
                            <td><input type="radio" style="margin-left: 10px; margin-right: 5px;" /><label>Investigation</label></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="radio" style="margin-left: 10px; margin-right: 5px;" /><label>Daily Working</label></td>
                            <td colspan="3"><input type="radio" style="margin-left: 10px; margin-right: 5px;" /><label>Other</label></td>
                        </tr>
                    </tr>
                    <tr>
                        <td><input class="btn btn-primary" type="submit" style="width: 230px; margin-top: 10px; margin-left: 10px;" value="SNAP" /><br></td>
                        <td><label style="margin-left: 10px;">Area</label></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px;" /><label>Security Pos</label><br></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px;" /><label>Workshop 1</label><br></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px;" /><label>Workshop 2</label><br></td>
                    </tr>
                    <tr>
                        <td><input class="btn btn-primary" type="submit" style="width: 230px; margin-top: 10px; margin-left: 10px;" value="CANCEL" /></td>
                        <td></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px;" /><label>Hangar 1</label><br></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px;" /><label>Hangar 2</label><br></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px;" /><label>Hangar 3</label><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px; margin-top: 15px;" /><label>Engine Shop</label><br></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px; margin-top: 15px;" /><label>Material Building</label><br></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px; margin-top: 15px;" /><label>GSE Building</label><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px; margin-top: 15px;" /><label>Facility Building</label><br></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px; margin-top: 15px;" /><label>Marketing Building</label><br></td>
                        <td><input type="checkbox" style="margin-left: 10px; margin-right: 5px; margin-top: 15px;" /><label>IWWT Building</label><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label style="margin-left: 10px;">Duration</label></td>
                        <td><input type="text" class="form-control" style="width: 100%;" /></td>
                        <td><label style="margin-left: 10px;">Hours</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label style="margin-left: 10px;">Partner</label></td>
                        <td><input type="text" class="form-control" style="width: 100%; margin-top: 10px;" /></td>
                        <td><label style="margin-left: 10px;">People</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label style="margin-left: 10px;">Excourt</label></td>
                        <td colspan="4"><input type="text" class="form-control" style="width: 100%; margin-top: 10px;" /></td>
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
                        <td colspan="2"><input type="submit" class="btn btn-primary" value="Cancel" style="width: 90%;margin-right: 5px;" /></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    var video = document.querySelector("#videoElement");

    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

    if (navigator.getUserMedia) {
        navigator.getUserMedia({
            video: true
        }, handleVideo, videoError);
    }

    function handleVideo(stream) {
        video.src = window.URL.createObjectURL(stream);
    }

    function videoError(e) {
        // do something
    }
</script>

</html>