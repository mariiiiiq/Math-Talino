
function Score(score){
    $.ajax({
        type:'POST',
        url:'save.php',
        data:{
          score:score,
          type:"posttest",
          act:"save",
        },
        success:function(data){
          $('.result').css('display', 'inline-block');
          $('.result').html(data);
          $('#btnSubmit').prop('disabled', true);
          $('#btnShow').css('display', 'inline-block');
        }
      });
  }
function checkAns(){
    const key = ['6', '9', '12', '15', '8', '12', '16', '20', '12', '12'];
    var score = 0;
    var tru;
    for(let i=0;i<10;i++){
      var n = i + 1;
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
  function isNotEmpty(){
    var error=0;
    for(let i=0;i<10;i++){
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
$('#btnSubmit').click(function(){
    isNotEmpty();
});
$('#btnShow').click(function(){
  showAns();
});
function showAns(){
  const key = ['6', '9', '12', '15', '8', '12', '16', '20', '12', '12'];
  for(let i=0;i<10;i++){
    var n = i + 1;
    var num = "num" + n.toString();
    document.getElementById(num).value = key[i];
  }
}