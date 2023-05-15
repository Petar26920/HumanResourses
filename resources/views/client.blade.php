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
    <script>
        const initApp = () => {
            const droparea = document.querySelector('.droparea');
            const filenameDisplay = document.querySelector('#filename-display');

            const active = () => droparea.classList.add("green-border");
            const inactive = () => droparea.classList.remove("green-border");
            const prevents = (e) => e.preventDefault();

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(evtName => {
                droparea.addEventListener(evtName, prevents);
            });

            ['dragenter', 'dragover'].forEach(evtName => {
                droparea.addEventListener(evtName, active);
            });

            ['dragleave', 'drop'].forEach(evtName => {
                droparea.addEventListener(evtName, inactive);
            });

            droparea.addEventListener("drop", handleDrop);

            let dropZone = document.getElementById("drop-zone");
            let counter = 0;

            dropZone.addEventListener("drop", handleDrop, false);

            function handleDrop(e) {
                e.preventDefault();
                let file = e.dataTransfer.files[0];
                let fileName = file.name;

                counter++;
                let labelId = "filename-display";
                if (counter === 2) {
                    labelId = "filename-display-2";
                } else if (counter === 3) {
                    labelId = "filename-display-3";
                }

                let label = document.getElementById(labelId);
                label.innerHTML = fileName;
            }
        }

        document.addEventListener("DOMContentLoaded", initApp);
    </script>
    <script src="https://kit.fontawesome.com/9b8c178a4c.js" crossorigin="anonymous"></script>

    <script>
function displayFileNames() {
    var input = document.getElementById('fileInput');
    var files = input.files;
    var label1 = document.getElementById('filename-display');
    var label2 = document.getElementById('filename-display-2');
    var label3 = document.getElementById('filename-display-3');
    if (files.length > 0) {
        label1.innerText = files[0].name;
        if (files.length > 1) {
            label2.innerText = files[1].name;
            if (files.length > 2) {
                label3.innerText = files[2].name;
            } else {
                label3.innerText = "";
            }
        } else {
            label2.innerText = "";
            label3.innerText = "";
        }
    } else {
        label1.innerText = "";
        label2.innerText = "";
        label3.innerText = "";
    }
}
</script>
</head>

<body>
    <div class="container">
        <div class="okvir">
            <div class="okvirslika">
                <!-- Elementi slike -->
                <div class="pic">
                    <img src="Images/proba.png" style="max-width: 250px; max-height: 250px;">
                </div>
                <div class="fullrectangle1"></div>
                <div class="fullrectangle2"></div>
                <div class="emptyrectancle1"></div>
                <div class="emptyrectancle2"></div>
            </div>

            <div class="okvirinfo">
                <!-- Elementi informacija -->
                <h1>Nikola Todić</h1>

                <div class="okvirpodaci">
                    <!-- Podaci ↓ -->
                    <p class="radnikpodaci">Frist name: <label style="font-weight: normal;font-size: 17px;">Nikola</label></p>

                    <p class="radnikpodaci">Last name: <label style="font-weight: normal;font-size: 17px;">Todic</label></p>

                    <p class="radnikpodaci">Birth date: <label style="font-weight: normal;font-size: 17px;">25.11.1998.</label></p>

                    <p class="radnikpodaci">E-Mail: <label style="font-weight: normal;font-size: 17px;">todicnikola@gmail.com</label></p>

                    <p class="radnikpodaci">Phone number: <label style="font-weight: normal;font-size: 17px;">+381 61 234 5678</label></p>

                    <p class="radnikpodaci">Adress: <label style="font-weight: normal;font-size: 17px;">Beograd 11000</label></p>
                </div>

                <div class="okvirCV">
                    <div class="CVpodaci">
                        <p class="cvheader">Upload CV, Motivation Letter:</p>
                        <!-- drag and drop -->
                        <div class="dropcontainer">
                            <div class="dropinfo">
                                <section class="droparea">
                                    <i class="fa-solid fa-cloud-arrow-down fa-lg" style="color: #c42426;"></i>
                                    <label>Drag and drop or</label>
                                    <a href="#" style="color: #c42426;" onclick="document.getElementById('fileInput').click(); return false;">browse files</a>
                                    <input type="file" id="fileInput" name="file[]" style="display: none;" multiple onchange="displayFileNames()">
                                </section>
                            </div>
                        </div>

                        <div id="drop-zone">
                            <!-- upload info -->
                            <div class="filename">
                                <div class="column1">
                                    <!-- file info -->
                                    <i class="fa-regular fa-file fa-flip-vertical" style="color: #000000;"></i>
                                    <label id="filename-display"></label>
                                </div>
                                <div class="column2">
                                    <!-- progressbar -->
                                    <label>progressbar</label>
                                </div>
                            </div>
                            <div class="filename">
                                <div class="column1">
                                    <!-- file info -->
                                    <i class="fa-regular fa-file fa-flip-vertical" style="color: #000000;"></i>
                                    <label id="filename-display-2"></label>
                                </div>
                                <div class="column2">
                                    <!-- progressbar -->
                                    <label>progressbar</label>
                                </div>
                            </div>
                            <div class="filename">
                                <div class="column1">
                                    <!-- file info -->
                                    <i class="fa-regular fa-file fa-flip-vertical" style="color: #000000;"></i>
                                    <label id="filename-display-3"></label>
                                </div>
                                <div class="column2">
                                    <!-- progressbar -->
                                    <label>progressbar</label>
                                </div>
                            </div>
                        </div>
                        <div class="line2"></div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>