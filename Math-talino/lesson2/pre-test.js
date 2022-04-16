
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
          $('.btnnext').css('display', 'block');
          $('.result').css('display', 'inline-block');
          $('.result').html(data);
          $('.primary').prop('disabled', true);
        }
      });
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
function checkAns(){
    const key = ['2', '3', '4', '3', '5', '6', '8', '3', '9', '7'];
    var score = 0;
    var tru;
    for(let i=0;i<10;i++){
      var n = i + 1;
      var num = "num" + n.toString();
      var ans = document.getElementById(num).value;
      if(key[i] == ans){
        score = score + 1;
      }
    }
    Score(score);
  }
$('#btnSubmit').click(function(){
    isNotEmpty();
});