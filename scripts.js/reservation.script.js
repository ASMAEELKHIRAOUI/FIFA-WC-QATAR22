let ticketNumber = document.getElementById("ticket-reserved-number-id");
document.getElementById("reserv-confirme-id").disabled = true;
document.getElementById("btn-print-ticket-id").disabled = true;

function confirmNumberReserv(){
    if(ticketNumber.value == "") {
        document.getElementById("reserv-confirme-id").disabled = true;
        document.getElementById("btn-print-ticket-id").disabled = true;
    }
    else document.getElementById("reserv-confirme-id").disabled = false;
}


function printTicket(){
    window.print();
    document.getElementById('ticket-reserved-counter').innerText = 0;
    ticketNumber.value = 0;
    document.getElementById("reserv-confirme-id").disabled = true;
    document.getElementById("btn-print-ticket-id").disabled = true;

}





function reserveMatch(matchId){

    console.log(matchId);
    


    $.post('../scripts.php/reservation.script.php' ,
    {
        ajaxRequest:"reserve-match",
        match_Id:matchId,
        ticket_Number:ticketNumber.value,
    },
    function(data, status, jqXHR) {
        document.getElementById('ticket-reserved-counter').innerText = data;
        if(ticketNumber.value !=0) {
            document.getElementById("btn-print-ticket-id").disabled = false;
        }

        document.getElementById("model-close-id").click();

    },
    'json'
);
}