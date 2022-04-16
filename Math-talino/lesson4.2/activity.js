function Score(score){
    $.ajax({
        type:'POST',
        url:'save.php',
        data:{
          score:score,
          type:"activity",
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
    const key = ['3', '4', '1', '7', '11'];
    var score = 0;
    for(let i=0;i<5;i++){
        var n = i + 1;
        var num = "num" + n.toString();
        var ans = document.getElementById(num).value;
        if(key[i] == ans){
            score = score + 1;
            document.getElementById(num).style.border= "1px solid green";
        }
        else{
            document.getElementById(num).style.border= "1px solid red";
        }
    }
    Score(score);

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
$('#btnSubmit').click(function(){
    isNotEmpty();
});
$('#btnShow').click(function(){
  showAns();
});
function showAns(){
  const key = ['3', '4', '1', '7', '11'];
  for(let i=0;i<5;i++){
    var n = i + 1;
    var num = "num" + n.toString();
    document.getElementById(num).value = key[i];
  }
}