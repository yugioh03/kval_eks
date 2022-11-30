document.querySelector("#submitBtn").addEventListener('click', loadNBA);
function loadNBA(){
    let url = "https://free-nba.p.rapidapi.com/stats?page=0&per_page=25"

    var data = null

    const data = null;

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
	if (this.readyState === this.DONE) {
		console.log(this.responseText);
	}
});

xhr.open("GET",url,  true );
xhr.setRequestHeader("X-RapidAPI-Key", "6abade47d1mshe77160a763317b2p1fa160jsnb69082ed9506");
xhr.setRequestHeader("X-RapidAPI-Host", "free-nba.p.rapidapi.com");

xhr.onload = function(){
if(this.status ===200){
    const response = JSON.parse(this.responseText);

    console.log(response)
}

}

xhr.send(data);


}