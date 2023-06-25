let fileInput = document.getElementById("file-upload-input");
let fileSelect = document.getElementsByClassName("file-upload-select")[0];
fileSelect.onclick = function() {
    fileInput.click();
}
fileInput.onchange = function() {
    let filename = fileInput.files[0].name;
    let selectName = document.getElementsByClassName("file-select-name")[0];
    selectName.innerText = filename;
}


let Input = document.getElementById("file-input");
let Select = document.getElementsByClassName("file-select")[0];
Select.onclick = function() {
    Input.click();
}
Input.onchange = function() {
    let filename = Input.files[0].name;
    let selectName = document.getElementsByClassName("file-name")[0];
    selectName.innerText = filename;
}
