<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register - Customer e-Services</title>

    <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->

        <link rel="stylesheet" href="Login.css">

        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- Font Awesome JS -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    </head>

    <body>
        <div class="wrapper">
                <div class="image-holder">
                    <img src="img/properti.jpg" class="gambar" alt="">
                </div>

                <div class="form-inner">
                    <form id="FormPass" action="/register" method="post">
                        @csrf
                        <div class="form-header">
                            <br>
                            <h1><span style="font-weight: normal;">iGen</span><span style="font-weight: bold;">Protection</span></h1>
                            <h3>Form Registrasi</h3>

                        </div>
                        <div class="form-group">
                            <label for="">Nomor Loyalty Card (*)</label>
                            <div>
                            <input type="text" class="form-control" id="LAC" aria-describedby="loginhelp" minlength="16" maxlength="16" required name="lac">
                            <small id="loginhelp" class="text-muted my-auto">16 Digit Nomor LAC</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">No Polis (*)</label>
                            <div>
                            <input type="text" class="form-control" id="NoPol" aria-describedby="loginhelp" minlength="12" maxlength="12" required name="no_polis">

                            <small id="loginhelp" class="text-muted my-auto">Salah satu dari polis yang dimiliki - 12 digit</small>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="">Username (*)</label>
                            <div>
                            <input type="text" class="form-control" id="Username" aria-describedby="loginhelp" minlength="3" maxlength="12" required name="username">
                            <small id="loginhelp" class="text-muted my-auto">Masukkan 3 - 12 karakter</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Email (*)</label>
                            <div>
                            <input type="email" class="form-control" id="Email" aria-describedby="loginhelp" minlength="3" maxlength="30" required name="email">
                            </div>
                        </div>
                        <div class="form-group" >
                            <label for="inputPassword3">Password (*)</label>
                            <div>
                                <input type="password" class="form-control" id="passbaru" minlength="7" maxlength="20" aria-describedby="passwordHelpInline" required name="password">
                                <span id="mybutton" onclick="change()"><i class="fas fa-eye fa-sm"></i></span>
                                <small id="passwordHelpInline" class="text-muted my-auto" style="float: right;">Masukkan 7-20 Karakter.</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3">Konfirmasi Password (*)</label>
                            <div>
                            <input type="password" class="form-control" id="passbaru2" minlength="7" maxlength="20" aria-describedby="passwordHelpInline" required>
                            <span id="mybutton2" onclick="show()"><i class="fas fa-eye fa-sm"></i></span>
                            <small id="passwordHelpInline" class="text-muted my-auto">Masukkan 7-20 Karakter.</small>
                            </div>
                        </div>

                        <span>
                            <center>

                                <button class="btn btn-warning btn-block" type="submit"><b>Daftar</b></button>
                                <br>
                            </center>
                        </span>

                        <center>
                            <p style="font-size: 15px;">Sudah memiliki akun? <a href="/login">Login</a></p>
                        </center>
                    </form>
                </div>

            </div>

            <!-- Modal Alert Register -->
        <div class="modal fade" tabindex="-1" id="PassBerhasil" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fas fa-edit"></i> Proses Pendaftaran Akun</h4>
                </div>
                <div class="modal-body">
                        <div class="progress pass5">
                            <div class="progress-bar passprog bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                        </div>

                        <div class="alert alertpass alert-success" role="alert">Akun Anda Telah Didaftarkan <a href="/login" class="alert-link">Klik disini untuk melakukan login</a></div>
                </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <!-- Popper.JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
            <!-- jQuery Custom Scroller CDN -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

            <script type="text/javascript">
                window.onload = function () {
                    document.getElementById("passbaru").onchange = validatePassword;
                    document.getElementById("passbaru2").onchange = validatePassword;
                }

                function validatePassword(){
                var pass2=document.getElementById("passbaru2").value;
                var pass1=document.getElementById("passbaru").value;
                if(pass1!=pass2)
                    document.getElementById("passbaru2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
                else
                    document.getElementById("passbaru2").setCustomValidity('');
                }
            </script>


            {{-- <script>
                $('#FormPass').on('submit', function(e){
                    document.getElementById("LAC").value = "";
                    document.getElementById("NoPol").value = "";
                    document.getElementById("Username").value = "";
                    document.getElementById("Email").value = "";
                    document.getElementById("passbaru").value = "";
                    document.getElementById("passbaru2").value = "";
                    $('#PassBerhasil').modal('show');
                    e.preventDefault();
                });
            </script>

            <script>
                    $('#FormPass').on('submit', function(e){
                    $('.passprog').each(function() {
                        var $coba = $('.pass5');
                        var $alert = $('.alertpass');
                        $('.passprog').css('width', '0%').attr('aria-valuenow', 0);
                        $alert.hide();
                        $coba.show();

                        var $bar = $(this);
                        var progress = setInterval(function() {

                        var currWidth = parseInt($bar.attr('aria-valuenow'));
                        var maxWidth = parseInt($bar.attr('aria-valuemax'));

                        //update the progress
                            $bar.width(currWidth+'%');
                            $bar.attr('aria-valuenow',currWidth+10);

                        //clear timer when max is reach
                        if (currWidth >= maxWidth){
                            clearInterval(progress);
                            $coba.hide();
                            $alert.show();
                        }

                        }, 500);
                        });
                    });
            </script>

            <script type="text/javascript">
                function change()
                {
                    var x = document.getElementById('passbaru').type;

                    if (x == 'password')
                    {
                    document.getElementById('passbaru').type = 'text';
                    document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye-slash fa-sm"></i>';
                    }
                    else
                    {
                    document.getElementById('passbaru').type = 'password';
                    document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye fa-sm"></i>';
                    }
                }
            </script>
            <script type="text/javascript">
                function show()
                {
                    var x = document.getElementById('passbaru2').type;

                    if (x == 'password')
                    {
                    document.getElementById('passbaru2').type = 'text';
                    document.getElementById('mybutton2').innerHTML = '<i class="fas fa-eye-slash fa-sm"></i>';
                    }
                    else
                    {
                    document.getElementById('passbaru2').type = 'password';
                    document.getElementById('mybutton2').innerHTML = '<i class="fas fa-eye fa-sm"></i>';
                    }
                }
            </script> --}}


    </body>
</html>
