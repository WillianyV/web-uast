var nomeCidadde = document.getElementById("nomeCidadade")
var texto = document.getElementById("texto")

function verificar(){
    var ajax = new XMLHttpRequest();
    ajax.open("GET","https://api.openweathermap.org/data/2.5/weather?q=" 
    + nomeCidadde.value 
    + "&appid=408164e6bc2b07eb3f6617e819fd5a95&lang=pt_br&units=metric", true)
    ajax.onreadystatechange = function(){
        if(ajax.readyState===4 && ajax.status===200){
            var response = JSON.parse(ajax.responseText)
            texto.innerText = "Temperatura na cidade de " 
            + nomeCidadde.value 
            + " é de " + response.main.temp + " °C";
        }else if(ajax.readyState===4 && ajax.status===404){
            alert("Nome da cidade errado!")
        }
    }
    ajax.send()
}