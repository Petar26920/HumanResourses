var dropzone = document.getElementById('dropzone');

    dropzone.addEventListener('dragover', function(e) {
      e.preventDefault();
      dropzone.style.backgroundColor = 'lightblue';
    });

    dropzone.addEventListener('dragleave', function(e) {
      e.preventDefault();
      dropzone.style.backgroundColor = '';
    });

    dropzone.addEventListener('drop', function(e) {
      e.preventDefault();
      dropzone.style.backgroundColor = '';

      var files = e.dataTransfer.files;
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        console.log('Dropped file:', file.name);
        // Perform further actions with the dropped files
      }
    });