var z = 0; 
function Type(filename){
    $('#drg').css("display", "none");
    let splitname = filename.split('.');
    if(filename.length >= 10){
        filename = splitname[0].substring(0, 6) + "... ." + splitname[1];
    }
    if(splitname[1]=="docx"){
        $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-docx' style='color:#3066a0'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "doc" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-doc' style='color:#3066a0'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "pptx"){$('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-pptx' style='color:#AA4344'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "ppt" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-ppt' style='color:#AA4344'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "xlsx" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-xlsx' style='color:#117f43'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "xls" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-xls' style='color:#117f43'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "txt" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-txt' style='color:#947d9e'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "jpg" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-jpg' style='color:#3066a0'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "png" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-png' style='color:#3066a0'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "pdf" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-pdf' style='color:#AA4344'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "mp4" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-filetype-mp4' style='color:#3066a0'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "zip" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-file-earmark-zip' style='color:#808080'></i><p>" 
        + filename + "</p></span></div>");
        z = z + 1;
    }
    if(splitname[1]== "rar" ){ $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-file-earmark-zip' style='color:#f3f1ee'></i><p>" 
    + filename + "</p></span></div>");
        z = z + 1;
    }
    while(z>2){
        var q = z - 1;
        $('.uploadfilearea').append("<div class='filecard mt-3 ms-3'><span><i class='bi bi-file-earmark' style='color:#588157'></i><p>" 
            + q + " more files</p></span></div>");
    }
   
      alert(z);
      return filename;
}
function upload(){
    $.ajax({
        type:'POST',
        url:'../lessons/save.php',
        data:{
          score:score,
          act:"save",
        },
        success:function(data){
          $('#output').html(data);
        }
    });
}