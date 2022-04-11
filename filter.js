$(document).ready(function(){
    $('#filter').on('change', function() {
      if ( this.value == 'type')
      {
        $("#type").css('display', 'block');
      }
      else
      {
        $("#type").css('display', 'none');
      }
    });
    $('#cbtype').on('change', function() {
        let sec = document.getElementsByClassName('tab-pane')[0].id;
        if ( this.value == 'Pre-test')
        {
            $.ajax({
                type:'POST',
                url:'filter.php',
                data:{
                    type:'Pre-test',
                    sec:sec,
                },
                success:function(data){
                  $('.result').html(data);
               }
            });
        }
        else if ( this.value == 'Post-test'){
            $.ajax({
                type:'POST',
                url:'filter.php',
                data:{
                    type:'Post-test',
                    sec:sec,
                },
                success:function(data){
                  $('.result').html(data);
               }
            });
        }
        else if ( this.value == 'Activity'){
            $.ajax({
                type:'POST',
                url:'filter.php',
                data:{
                    type:'Activity',
                    sec:sec,
                },
                success:function(data){
                  $('.result').html(data);
               }
            });
        }
      });
});