function openLoad(){
    $('#load-page').remove();
    $('body').append('<div id="load-page"><i class="fa fa-cog fa-spin"></i></div>');
    $('#load-page').css({'background-color':'rgba(0, 0, 0, 0.5)','position':'fixed','top':'0px','left':'0px','width':'100%','height':'100%','z-index':'999999','text-align':'center','font-size':'70px','color':'#FFF','padding-top':'250px'});
}

function closeLoad(){
    $('#load-page').fadeOut();
}
