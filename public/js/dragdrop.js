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
        document.getElementById("filename").style.visibility = "visible";

        move("myProgress", "myBar", function() {
            // Callback function to be executed after progress is complete
            document.getElementById("column2").style.display = "none";
            document.getElementById("column1").style.display = "flex";
        });

        if (counter === 2) {
            labelId = "filename-display-2";
            document.getElementById("filename1").style.visibility = "visible";

            move("myProgress2", "myBar2", function() {
                // Callback function to be executed after progress is complete
                document.getElementById("column4").style.display = "none";
                document.getElementById("column3").style.display = "flex";
            });

        } else if (counter === 3) {
            labelId = "filename-display-3";
            document.getElementById("filename2").style.visibility = "visible";

            move("myProgress3", "myBar3", function() {
                // Callback function to be executed after progress is complete
                document.getElementById("column6").style.display = "none";
                document.getElementById("column5").style.display = "flex";
            });

        }

        let label = document.getElementById(labelId);
        label.innerHTML = fileName;
    }
}

document.addEventListener("DOMContentLoaded", initApp);