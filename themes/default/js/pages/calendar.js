$('.fc-button').hover(
    function() {
        $(this).addClass('fc-state-hover');
    },
    function() {
        $(this).removeClass('fc-state-hover');
    }
);

$('td.calendar-day').click(function() {
    dindex = $(this).data('index');
    dtime = $(this).data('time');
    
    url = admin_url;
    if(dindex == '0')
    {
        url += '/calendar/create/' + dtime;
    }
    else
    {
        url += '/calendar/edit/' + dindex + '/' + dtime;
    }
    
    document.location.href = url;
});