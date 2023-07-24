@extends('layouts.navigation')
@section('main')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Client</title>
    <link rel="stylesheet" href="{{ asset('css/client.css') }}">
    <link href="https://fonts.cdnfonts.com/css/creato-display" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script src="https://kit.fontawesome.com/9b8c178a4c.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/removefile.js') }}"></script>

</head>

<body>
    <form action="{{ route('client.upload') }}" method="POST" enctype="multipart/form-data" id="my-dropzone" class="dropzone">
        @csrf

        <div class="container">
            <div class="okvir">
                <div class="okvirslika">
                    <!-- Elementi slike -->
                    <div class="pic">
                        <img src="Images/klient.jpg" style="max-width: 250px; max-height: 250px; ">
                    </div>
                    <div class="fullrectangle1"></div>
                    <div class="fullrectangle2"></div>
                    <div class="emptyrectancle1"></div>
                    <div class="emptyrectancle2"></div>
                </div>

                <div class="okvirinfo">
                    <!-- Elementi informacija -->
                    <h1>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h1>

                    <div class="okvirpodaci">
                        <!-- Podaci ↓ -->
                        <p class="radnikpodaci" style="margin-top: 20px;">First name: <label style="font-weight: normal;font-size: medium; margin-left:3px;">{{Auth::user()->firstname}}</label></p>

                        <p class="radnikpodaci">Last name: <label style="font-weight: normal;font-size: medium; margin-left:3px;">{{Auth::user()->lastname}}</label></p>

                        <p class="radnikpodaci">Birth date: <label style="font-weight: normal;font-size: medium; margin-left:3px;">NEMAMO DATUM RODJENJA U BAZI</label></p>

                        <p class="radnikpodaci">
                            E-Mail: <input type="hidden" id="email-input" name="email-label" value="todicnikola@gmail.com">

                                    <label style="font-weight:normal;">{{Auth::user()->firstname}}</label>

                        </p>

                        <p class="radnikpodaci">Phone number: <label style="font-weight: normal;font-size: medium; margin-left:3px;">{{Auth::user()->phonenum}}</label></p>

                        <p class="radnikpodaci">Address: <label style="font-weight: normal;font-size: medium; margin-left:3px;">NEAMOM OVO U BAZI</label></p>
                    </div>

                    <div class="okvirCV">
                        <div class="CVpodaci">
                            <p class="cvheader">Upload CV, Motivation Letter:</p>
                            <!-- drag and drop -->
                            <div class="dropcontainer">
                                <div class="dropinfo">
                                    <section class="droparea">
                                        <i class="fa-solid fa-cloud-arrow-down fa-lg" style="color: #c42426;"></i>
                                        <label></label>
                                        <a href="#" style="color: #c42426;" onclick="document.getElementById('fileInput').click(); return false;">Select your CV</a>
                                        <input type="file" id="fileInput" name="file[]" style="display: none;" onchange="displayFileNames(), validateFileInput()">
                                    </section>
                                </div>
                            </div>


                            <div id="drop-zone">
                                <!-- upload info -->
                                <div class="filename" id="filename">
                                    <div class="column1" id="column1">
                                        <!-- file info -->
                                        <i class="fa-regular fa-file fa-flip-vertical fa-lg" style="margin-bottom:2px;color: #000000;"></i>&nbsp;
                                        <div class="prva">
                                            <label id="filename-display" class="fname"></label>
                                        </div>
                                        <div class="druga">
                                            <button type="button" id="btnx1" class="iksic" onclick="removeFile(0)">
                                                <h6 aria-hidden="true">&times;</h6>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="column2" id="column2">
                                        <!-- progressbar -->
                                        <div id="myProgress">
                                            <div id="myBar">0%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filename" id="filename1">
                                    <div class="column1" id="column3">
                                        <i class="fa-regular fa-file fa-flip-vertical fa-lg" style="margin-bottom:2px;color: #000000;"></i>&nbsp;
                                        <div class="prva">
                                            <label id="filename-display-2" class="fname"></label>
                                        </div>
                                        <div class="druga">
                                            <button type="button" id="btnx2" class="iksic" onclick="removeFile(1)">
                                                <h6 aria-hidden="true">&times;</h6>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="column2" id="column4">
                                        <!-- progressbar -->
                                        <div id="myProgress2">
                                            <div id="myBar2">0%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filename" id="filename2">
                                    <div class="column1" id="column5">
                                        <i class="fa-regular fa-file fa-flip-vertical fa-lg" style="margin-bottom:2px;color: #000000;"></i>&nbsp;
                                        <div class="prva">
                                            <label id="filename-display-3" class="fname"></label>
                                        </div>
                                        <div class="druga">
                                            <button type="button" id="btnx3" class="iksic" onclick="removeFile(2)">
                                                <h6 aria-hidden="true">&times;</h6>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="column2" id="column6">
                                        <!-- progressbar -->
                                        <div id="myProgress3">
                                            <div id="myBar3">0%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btnRight">
                                <button type="submit" value="Upload" class="btnUpload" id="btnUpload" disabled>Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line2"></div>
    </form>

    <script src="{{ asset('js/progressbar.js') }}"></script>
    <script src="{{ asset('js/filename.js') }}"></script>
    <script src="{{ asset('js/validacijafajlova.js') }}"></script>


</body>

</html>
@endsection
