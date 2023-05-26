function Obrisi(index) {
    var input = document.getElementById('fileInput');
    var files = input.files;
  
    // Convert FileList to an array
    var fileListArr = Array.from(files);
  
    // Remove the file at the specified index
    fileListArr.splice(index, 1);
  
    // Convert the modified array back to a FileList
    var newFiles = new FileList(fileListArr);
  
    // Assign the modified FileList back to the input element
    input.files = newFiles;
  
    console.log(newFiles);
  }
  