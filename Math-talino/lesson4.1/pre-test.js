
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
          $('.result').css('display', 'inline-block');
          $('.result').html(data);
          $('.btnnext').css('display', 'block');
          $('.primary').prop('disabled', true);
        }
      });
  }
function checkAns(){
    const key = ['Proper', 'Improper', 'Proper', 'Improper', 'Mixed', 'Proper', 'Improper', 'Proper', 'Mixed', 'Proper'];
    var score = 0;
    for(var i=0;i<10;i++){
    var n = i + 1;
    var num = "num"+ n.toString();
    var radioButtons = document.getElementsByName(num);
    
      for(var j = 0; j < radioButtons.length; j++)
      {
          if(radioButtons[j].checked == true)
          {
            
            if(key[i] == radioButtons[j].value){
              score = score + 1;
            }
            
          }
          
      }
    }
    Score(score);
  }
  function isNotEmpty(){
    var error=0;
    for(let i=0;i<10;i++){
      var n = i + 1;
      var num = "num" + n.toString();
      var radioButtons = document.getElementsByName(num);
      var s = 0;
      for(var j = 0; j < radioButtons.length; j++)
      {
          if(radioButtons[j].checked == true)
          {
              s = s + 1;
          }
          else{
            
          }
          
      }
      if(s==0){
        error++;
        document.getElementById(num).style.color= "red";
      }
      else{
        document.getElementById(num).style.color= "black";
      }
      
    }
    if(error==0){
      checkAns();
    }
  }
$('#btnSubmit').click(function(){
    isNotEmpty();
});