var input = document.querySelector('input');
var preview = document.querySelector('.preview');

var img = new Image(50, 50);
img.src = "elements/permis-oui-hover.png";

input.style.opacity = 0;

input.addEventListener('change', updateImageDisplay);

function updateImageDisplay(){
  while(preview.firstChild){
    preview.removeChild(preview.firstChild);
  }

  var curFiles = input.files;
  if (curFiles.length === 0) {
    var para = document.createElement('p');
    para.textContent = 'Pas de fichier chargé pour le moment';
    preview.appendChild(para);
  }
  else {
    var list = document.createElement('p');
    preview.appendChild(list);
    for (var i = 0; i < curFiles.length; i++){
      var fileTypes = [
        'application/pdf'
      ]



      function validFileType(file) {
        for(var i = 0; i < fileTypes.length; i++) {
          if(file.type === fileTypes[i]) {
            return true;
          }
        }
        return false;
      }


      if(validFileType(curFiles[i])){

        list.textContent = curFiles[i].name + img;
      }
      else {
        list.textContent = curFiles[i].name + ' : Fichier non valide.';
      }

      list;
    }
  }
}
