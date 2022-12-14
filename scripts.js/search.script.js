
let  carouselMatchContainer = document.getElementById('carousel-matchs-container-id');

let height = carouselMatchContainer.offsetHeight;











function search(value){
    carouselMatchContainer.style.minHeight = height +'px';
    carouselMatchContainer.innerHTML = `

    <div class="carousel-item active">
        <div class="row">

            <h1>no data</h1>        
        </div>
    </div>
    
    `;


    $.post('../scripts.php/search.php' ,
    {
        ajaxRequest:"Search",
        message:value,
        property:'country'
    },
    function(data, status, jqXHR) {
        // for(let i=0 ; i<3 && i < data.length ; i++){
            carouselMatchContainer.innerHTML = `

            <div class="carousel-item active">
                <div class="row">

                ${drawcardsMathes(data , 0)}
                
                </div>
            </div>
            `;

            for(let i=3 ; i<data.length ; i+=3){
                carouselMatchContainer.innerHTML+= `
                    <div class="carousel-item">
                        <div class="row">
        
                        ${drawcardsMathes(data , i)}
                        
                        </div>
                    </div>
                    `;
            }
        // }
    },
    'json'
    );

}


function drawcardsMathes(matches , indis){
    let row = "";
    for(let i=indis ; i<indis+3 && i < matches.length ; i++){
        row+= drawcardMatch(matches[i]);
    }
    return row;
}








function drawcardMatch(match){
    return `
            <div class="col-md-4 mb-3 ">
                <div class="card">
                    <form class="w-100 h-100" action="ticketpage.php" method="POST">
                        <button value="${match['id']}" type="submit" name="match-id"  class="w-100    bg-white border border-0 ">
                            <div class="position-relative w-100">
                                <img class="card-img-top " alt="100%x280" src="../assets/img/general/card_background.png">
                                <img class="flag position-absolute top-50 start-0 translate-middle-y"   src="../assets/img/flag/${match['logo-1']}" alt="${match['teame-1']}">
                                <img class="flag position-absolute top-50 end-0 translate-middle-y"   src="../assets/img/flag/${match['logo-2']}" alt="${match['teame-2']}">
                            </div>
                            <div class="card-body">
                                <p class="fw-semibold">${match['teame-1']} vs ${match['teame-2']}</p>
                                <div class=" d-flex my-2 justify-content-between">
                                    <div>${match['date-time']}</div>
                                    <div>$ ${match['price']}</div>
                                </div>
                                <div class="mt-3"> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> ${match['stad']}</div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>

    `;
}



function drawTicket(i){





}








