function removeFile(index) {
    const dt = new DataTransfer()
    const input = document.getElementById('fileInput')
    const {
        files
    } = input

    
    
    
    for (let i = 0; i < files.length; i++) {
        const file = files[i]
        if (index !== i)
            dt.items.add(file) // here you exclude the file. thus removing it.
        
        if(index == 0)
        {
            document.getElementById("filename").style.visibility="hidden";
        }
        if(index == 1)
        {
            document.getElementById("filename1").style.visibility="hidden";
        }
        if(index == 2)
        {
            document.getElementById("filename2").style.visibility="hidden";
            
        }
        
    }


    input.files = dt.files // Assign the updates list
    const uploadButton = document.getElementById('btnUpload');
    if (input.files.length === 0) {
        uploadButton.disabled = true;
    }
}