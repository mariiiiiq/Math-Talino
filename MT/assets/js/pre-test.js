
function Score(score){
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
function checkAns(){
    const key = ['P', 'P', 'C', 'C', 'C', 'P', 'C', 'C', 'C', 'P'];
    var score = 0;
    var tru;
    for(let i=0;i<10;i++){
      var n = i + 1;
      var as = "chck" + n.toString();
      var num = "num" + n.toString();
      var ans = document.getElementById(num).value;
      if(key[i] == ans){
        document.getElementById(num).style.border= "1px solid green";
        score = score + 1;
      }
      else{
        document.getElementById(num).style.border= "1px solid red";
      }
    }
    Score(score);
  }
$('#btnSubmit').click(function(){
    checkAns();
});
document.addEventListener("dragstart", function(event) {
    event.dataTransfer.setData("Text", event.target.id);
});
document.addEventListener("dragenter", function(event) {
    if ( event.target.className == "dropzone" ) {
        event.target.style.border = "1px solid #ef7d96";
    }
});
document.addEventListener("dragover", function(event) {
    event.preventDefault();
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