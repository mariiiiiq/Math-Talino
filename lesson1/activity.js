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
          $('.scroll').css('display', 'inline-block');
          $('.result').css('display', 'inline-block');
          $('.result').html(data);
          $('.speechtext').html("Good job");
          $('#btnSubmit').prop('disabled', true);
          $('#btnShow').css('display', 'inline-block');
        }
      });
  }
  function isNotEmpty(){
    var error=0;
    for(let i=0;i<5;i++){
      var n = i + 1;
      var num = "num" + n.toString();
      var ans = document.getElementById(num).value;
      var numf = "numf" + n.toString();
      var ansf = document.getElementById(numf).value;
      if(ans==""){
        error++;
        document.getElementById(num).style.border= "1px solid red";
      }
      else{
        document.getElementById(num).style.border= "1px solid black";
      }
      if(ansf==""){
        error++;
        document.getElementById(numf).style.border= "1px solid red";
      }else{
        document.getElementById(numf).style.border= "1px solid black";
      }
    }
    if(error==0){
      checkAns();
    }
  }
function checkAns(){
    const keyf = ['6', '6', '4', '2', '2'];
    const key = [ 'COMPOSITE', 'COMPOSITE', 'COMPOSITE','PRIME', 'PRIME'];
    var scoref = 0;
    var score = 0;
    for(let i=0;i<5;i++){
        var n = i + 1;
        var numf = "numf" + n.toString();
        var ansf = document.getElementById(numf).value;
        if(keyf[i] == ansf){
            score = score + 1;
            document.getElementById(numf).style.border= "1px solid green";
        }
        else{
            document.getElementById(numf).style.border= "1px solid red";
        } 
        var num = "num" + n.toString();
        var ans = document.getElementById(num).value.toUpperCase();
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
  $('#btnSubmit').click(function(){
    isNotEmpty();
});
$('#btnShow').click(function(){
  showAns();
});
function showAns(){
  const keyf = ['6', '6', '4', '2', '2'];
  const key = [ 'COMPOSITE', 'COMPOSITE', 'COMPOSITE','PRIME', 'PRIME'];
  for(let i=0;i<5;i++){
    var n = i + 1;
    var numf = "numf" + n.toString();
    var num = "num" + n.toString();
    document.getElementById(numf).value = keyf[i];
    document.getElementById(num).value = key[i];
  }
}