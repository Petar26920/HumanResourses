function validateFileInput() {
    var fileInput = document.getElementById("fileInput");
    var selectedFiles = fileInput.files;
    var uploadButton = document.getElementById("btnUpload");
  
    if (selectedFiles.length > 3) {
      alert("You can only upload a maximum of 3 files.");
      fileInput.value = "";
      location.reload();
    } else {
      uploadButton.disabled = false;
    }
  }

  