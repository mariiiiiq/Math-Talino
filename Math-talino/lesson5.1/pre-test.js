
function Score(score){
    $.ajax({
        type:'POST',
        url:'save.php',
        data:{
          score:score,
          type:"pretest",
          act:"save",
        },
        success:function(data){
          $$('.result').css('display', 'inline-block');
          $('.result').html(data);
          $('.btnnext').css('display', 'block');
          $('.primary').prop('disabled', true);
        }
      });
  }
  function isNotEmpty(){
    var error=0;
    for(let i=0;i<5;i++){
      var n = i + 1;
      var num = "num" + n.toString();
      var ans = document.getElementById(num).value;
      if(ans==""){
        error++;
        document.getElementById(num).style.border= "1px solid red";
      }
      else{
        document.getElementById(num).style.border= "1px solid black";
      }
    }
    if(error==0){
      checkAns();
    }
  }
  function checkAns(){
      const key = ['T', 'F', 'F', 'T', 'T'];
      var score = 0;
      var tru;
      for(let i=0;i<5;i++){
        var n = i + 1;
        var as = "chck" + n.toString();
        var num = "num" + n.toString();
        var ans = document.getElementById(num).value.toUpperCase();
        if(key[i] == ans){
          score = score + 1;
        }
      }
      Score(score);
    }
  $('#btnSubmit').click(function(){
    isNotEmpty();
  });
document.addEventListener("dragstart", function(event) {
    event.dataTransfer.setData("text", event.target.id);
});
document.addEventListener("dragenter", function(event) {
    if ( event.target.className == "dropzone" ) {
        event.target.style.border = "1px solid #ef7d96";
    }
});
document.addEventListener("dragover", function(event) {
    event.preventDefault();
    if ( event.target.className == "dropzone" ) {
      event.target.style.border = "1px dotted #ef7d96";
  }
});
document.addEventListener("dragleave", function(event) {
    if ( event.target.className == "dropzone" ) {
        event.target.style.border = "";
    }
});
document.addEventListener("drop", function(event) {
    event.preventDefault();
    if ( event.target.className == "dropzone" ) {
        var data = event.dataTransfer.getData("Text");
        var inputid = event.target.id;
        var input = document.getElementById(inputid).value;
        if(input==""){
            document.getElementById(inputid).value = data;
        }
        else{
            document.getElementById(inputid).value = data;
        }
        event.target.style.border = "1px solid black";
    }
});