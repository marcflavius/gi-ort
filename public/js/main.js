
var activeTicket = $('tr.ticket');
var clickedTicket = $('tr.ticket');


activeTicket.on('click', function () {
    var activeTickedId = $(this).attr('data-content');
    // localStorage.setItem('active_ticket_id', activeTickedId);
    $('.ticket-description').empty();
    $('.ticket-description').append(activeTickedId);
});
