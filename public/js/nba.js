document.addEventListener('click', function(event){
    let curr = document.getElementById('Player-name').value;
    event.preventDefault();
    loadNBA(curr);
});
function loadNBA(arg){
    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://free-nba.p.rapidapi.com/players/"+arg,
        "method": "GET",
        "headers": {
            "X-RapidAPI-Key": "6abade47d1mshe77160a763317b2p1fa160jsnb69082ed9506",
            "X-RapidAPI-Host": "free-nba.p.rapidapi.com"
        }
    };
    
    $.ajax(settings).done(function (response) {
        console.log(response);
    });
}