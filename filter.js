$(document).ready(function(){
    $('.btn-close').click(function() {
        $(".btn-close").css('display', 'none');
        $("#name").css('display', 'none');
        $("#type").css('display', 'none');
        document.getElementById("filter").selectedIndex = "0";
        document.getElementById("type").selectedIndex = "0";
        document.getElementById("searchname").value = "";
        $.ajax({
            type:'POST',
            url:'getScores.php',
            success:function(data){
              $('.output').html(data);
           }
          });
    });
    $('#filter').on('change', function() {
      if ( this.value == 'type')
      {
        $(".btn-close").css('display', 'block');
        $("#name").css('display', 'none');
        $("#type").css('display', 'block');
      }
      else if( this.value == 'name')
      {
        $(".btn-close").css('display', 'block');
        $("#name").css('display', 'block');
        $("#type").css('display', 'none');
      }
    });
    let sec = document.getElementsByClassName('tab-pane')[0].id;
    $('#searchname').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            $.ajax({
                type:'POST',
                url:'filter.php',
                data:{
                    act:'search',
                    search:$('#searchname').val(),
                    sec:sec,
                },
                success:function(data)
                {
                    $('.result').html(data);
                }
            });
        }
        else
        {
        }
       });
    $('#cbtype').on('change', function() {
        
        if ( this.value == 'Pre-test')
        {
            $.ajax({
                type:'POST',
                url:'filter.php',
                data:{
                    act:'filter',
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
                    act:'filter',
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
                    act:'filter',
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
