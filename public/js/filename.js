function displayFileNames() {
    var input = document.getElementById('fileInput');
    var files = input.files;
    var label1 = document.getElementById('filename-display');
    var label2 = document.getElementById('filename-display-2');
    var label3 = document.getElementById('filename-display-3');

    if (files.length > 0) {
        label1.innerText = files[0].name;
        document.getElementById("filename").style.visibility = "visible";
        document.getElementById("column2").style.display = "flex";
        document.getElementById("column1").style.display = "none";

        move("myProgress", "myBar", function() {
            // Callback function to be executed after progress is complete
            document.getElementById("column2").style.display = "none";
            document.getElementById("column1").style.display = "flex";
        });


        if (files.length > 1) {
            label2.innerText = files[1].name;
            document.getElementById("filename1").style.visibility = "visible";
            document.getElementById("column4").style.display = "flex";
            document.getElementById("column3").style.display = "none";
            move("myProgress2", "myBar2", function() {
                // Callback function to be executed after progress is complete
                document.getElementById("column4").style.display = "none";
                document.getElementById("column3").style.display = "flex";
            });

            if (files.length > 2) {
                label3.innerText = files[2].name;
                document.getElementById("filename2").style.visibility = "visible";
                document.getElementById("column6").style.display = "flex";
                document.getElementById("column5").style.display = "none";
                move("myProgress3", "myBar3", function() {
                    // Callback function to be executed after progress is complete
                    document.getElementById("column6").style.display = "none";
                    document.getElementById("column5").style.display = "flex";
                });

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

