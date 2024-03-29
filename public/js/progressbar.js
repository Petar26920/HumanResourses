function move(progressId, barId, callback) {
    var elem = document.getElementById(barId);
    var width = 10;

    function getRandomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    // Example usage:
    var randomNumber = getRandomNumber(1, 30);

    var id = setInterval(frame, randomNumber);

    function frame() {
        var uploadButton = document.getElementById('btnUpload');

        if (width >= 100) {
            clearInterval(id);
            if (callback) {
                callback(); // Call the callback function after progress is complete
                uploadButton.disabled = false;

            }
        } else {
            width++;
            elem.style.width = width + "%";
            elem.innerHTML = width + "%";
            uploadButton.disabled = true;

        }
    }
}