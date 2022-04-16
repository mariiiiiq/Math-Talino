$(document).ready(function(){
    load();
    search();
    $('#filter').on('change', function() {
        if ( this.value == 'usertype')
        {
          $(".btn-close").css('display', 'block');
          $("#searchdiv").css('display', 'none');
          $("#type").css('display', 'block');
        }
        else if( this.value == 'name')
        {
          $(".btn-close").css('display', 'block');
          $("#searchdiv").css('display', 'block');
          $("#type").css('display', 'none');
        }
    });
    $('.btn-close').click(function() {
        $(".btn-close").css('display', 'none');
        $("#searchdiv").css('display', 'none');
        $("#type").css('display', 'none');
        document.getElementById("filter").selectedIndex = "0";
        document.getElementById("type").selectedIndex = "0";
        document.getElementById("search").value = "";
        load();
    });
    $('#cbtype').on('change', function() {
        if ( this.value == 'Teacher')
        {
            filter("Teacher");
        }
        else if ( this.value == 'Student'){
            filter("Student");
        }
    });
});
function load(){
    $.ajax({
        type:'POST',
        url:'fill.php',
        success:function(data)
        {
            $('.result').html(data);
        }
    });
}
function search(){
    $('#search').keyup(function(){
        var search = $(this).val();
        if(search == '')
        {
            load();
        }
        else{
            $.ajax({
                type:'POST',
                url:'fill.php',
                data:{
                    search:$('#search').val(),
                },
                success:function(data)
                {
                    $('.result').html(data);
                }
            });
        }
    });
    
}
function filter(usertype){
    $.ajax({
        type:'POST',
        url:'fill.php',
        data:{
            usertype:usertype,
        },
        success:function(data)
        {
            $('.result').html(data);
        }
    });
}
