function reserveMatch(matchId){

    $.post('../scripts.php/reservation.script.php' ,
    {
        ajaxRequest:"reserve-match",
        match_Id:matchId,
    },
    function(data, status, jqXHR) {
        document.getElementById('ticket-reserved-counter').innerText = data;
    },
    'json'
);



}