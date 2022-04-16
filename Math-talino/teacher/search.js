$(document).ready(function(){
    var s = $('#nav-tab :button').attr('aria-selected', true);
    load(s.attr('id'));
    search(s.attr('id'));
    activetab();
    
});
function search(secs){
    $('#search').keyup(function(){
        var search = $(this).val();
        if(search == '')
        {
            load(secs);
        }
        else
        {
            $.ajax({
                type:'POST',
                url:'search.php',
                data:{
                    search:$('#search').val(),
                    sec:secs,
                },
                success:function(data)
                {
                    $('.result').html(data);
                }
            });
        }
    });
}
function activetab(){
    $('#nav-tab :button').click(function(){
        document.getElementById("search").value = "";
        load($(this).attr('id'));
        search($(this).attr('id'));
    });
}
function load(sec){
    $.ajax({
        type:'POST',
        url:'search.php',
        data:{
            sec:sec,
        },
        success:function(data)
        {
            $('.result').html(data);
        }
    });
}
