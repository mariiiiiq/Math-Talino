var s;
$(document).ready(function(){
    s = $('#nav-tab :button').attr('aria-selected', true);
    load(s.attr('id'));
    search(s.attr('id'));
    activetab();
    $('.btn-close').click(function() {
        $(".btn-close").css('display', 'none');
        $("#name").css('display', 'none');
        $("#lesson").css('display', 'none');
        $("#type").css('display', 'none');
        document.getElementById("filter").selectedIndex = "0";
        document.getElementById("type").selectedIndex = "0";
        document.getElementById("searchname").value = "";
        document.getElementById("searchlesson").value = "";
        load(s.attr('id'));
    });
    $('#filter').on('change', function() {
        if ( this.value == 'type')
        {
          $(".btn-close").css('display', 'block');
          $("#name").css('display', 'none');
          $("#lesson").css('display', 'none');
          $("#type").css('display', 'block');
        }
        else if( this.value == 'lesson')
        {
          $(".btn-close").css('display', 'block');
          $("#name").css('display', 'none');
          $("#lesson").css('display', 'block');
          $("#type").css('display', 'none');
        }
        else if( this.value == 'name')
        {
          $(".btn-close").css('display', 'block');
          $("#name").css('display', 'block');
          $("#lesson").css('display', 'none');
          $("#type").css('display', 'none');
        }
    });
    $('#cbtype').on('change', function() {
        if ( this.value == 'Pre-test')
        {
            filter(s.attr('id'), "Pre-test");
        }
        else if ( this.value == 'Post-test'){
            filter(s.attr('id'), "Post-test");
        }
        else if ( this.value == 'Activity'){
            filter(s.attr('id'), "Activity");
        }
    });
    $('#searchlesson').keypress(function (e) {    
        var charCode = (e.which) ? e.which : event.keyCode    
        if (String.fromCharCode(charCode).match(/[^0-9]/g))   
            return false;                        
    });  
});

function search(secs){
    var search, type;
    $('#searchname').keyup(function(){
        search = $(this).val();
        type = "name";
        if(search == '')
        {
            load(secs);
        }
        else
        {
            txtsearch(secs, search, type);
        }
    });
    $('#searchlesson').keyup(function(){
        search = $(this).val();
        type="lesson";
        if(search == '')
        {
            load(secs);
        }
        else
        {
            txtsearch(secs, search, type);
        }
    });
}
function txtsearch(secs, search, type){
    $.ajax({
        type:'POST',
        url:'filter.php',
        data:{
            type:type,
            search:search,
            sec:secs,
        },
        success:function(data)
        {
            $('.result').html(data);
        }
    });
}
function activetab(){
    $('#nav-tab :button').click(function(){
        s = $(this).attr('aria-selected', true);
        $(".btn-close").css('display', 'none');
        $("#name").css('display', 'none');
        $("#lesson").css('display', 'none');
        $("#type").css('display', 'none');
        document.getElementById("filter").selectedIndex = "0";
        document.getElementById("type").selectedIndex = "0";
        document.getElementById("searchname").value = "";
        document.getElementById("searchlesson").value = "";
        load(s.attr('id'));
        search(s.attr('id'));
    });
}
function load(sec){
    $.ajax({
        type:'POST',
        url:'filter.php',
        data:{
            sec:sec,
        },
        success:function(data)
        {
            $('.result').html(data);
        }
    });
}
function filter(sec, type){
    $.ajax({
        type:'POST',
        url:'filter.php',
        data:{
            search:"filter",
            type:type,
            sec:sec,
        },
        success:function(data)
        {
            $('.result').html(data);
        }
    });
}
