<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login - Customer e-Services</title>

    <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->

        <link rel="stylesheet" href="Login1.css">

        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- Font Awesome JS -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

    </head>

    <body>
        <div class="wrapper">
                <div class="image-holder">
                    <img src="img/properti3.jpg" class="gambar" alt="">
                </div>

                <div class="form-inner">
                    <br>
                    <form action='/login' method="post">
                        @csrf
                        @if ($errors->any())
                                        <div class="flex p-4 mb-4 text-sm text-red-600 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                            role="alert">
                                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                            </svg>
                                            <span class="sr-only">Error</span>
                                            <div>
                                                <span class="font-medium">Ensure that these requirements are met:</span>
                                                <ul class="mt-1.5 ml-4 list-disc list-inside">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif

                        <div class="form-header">
                        <h1><span style="font-weight: normal;">iGen</span><span style="font-weight: bold;">Protection</span></h1>
                        <h3><span style="font-weight: normal;">Welcome back to tech insurance, enter your</span><span style="font-weight: bold;"> Login</span>
                            <span style="font-weight: normal;"> data to get unlimited access</span></h3>
                        </div>
                        <div class="form-group">
                            <label for="" style="font-size: 15px;">Username (*)</label>
                            <div>
                            <input type="text" class="form-control" id="Username" aria-describedby="loginhelp" minlength="3" maxlength="12"  name="username">
                            </div>
                        </div>

                        <div class="form-group" >
                            <label for="inputPassword3" style="font-size: 15px;">Password (*)</label>
                            <input type="password" class="form-control" id="pass" minlength="7" maxlength="20" aria-describedby="passwordHelpInline"  name="password">
                            <span id="mybutton" onclick="change()"><i class="fas fa-eye fa-sm"></i></span>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1" style="font-size:14px;">Ingat Saya</label>

                        </div>
                        <a href="ForgetPass" style="float: right;font-size:14px;">Lupa Password?</a>

                        <span>
                            <center>
                                <br>
                                <button type="submit" class="btn btn-warning btn-block"><b>Login</b></button>
                                <br>
                            </center>
                            <center>
                            <p style="font-size: 15px;">Belum memiliki akun? <a href="/register">Register</a></p>
                            </center>
                        </span>
                    </form>

                </div>

            </div>



            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <!-- Popper.JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
            <!-- jQuery Custom Scroller CDN -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


    </body>
</html>
