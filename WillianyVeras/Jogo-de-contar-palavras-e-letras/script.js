$(function(){
    var texto = $('#texto');
    var letras = $('#nLetras');
    var palavras = $('#nPalavras');

    var segundos = 0;
    var minutos = 0;
    var click = 0;
    var cronometro;

    $('textarea').prop('disabled', true);
    
    // EVENTOS 
    //butão iniciar
    $('#btn').click(function () {         
        if(click == 0){
            $('textarea').prop('disabled', false);
            $('#btn').text('Parar');
            cronometro = setInterval(function(){ contar()},1000)
            click++    
            // style:
            $('#btn').css('color','red');
            $('#btn').css('background-color','white');
            $('#btn').css('border','1px solid red');
    
        }else{        
            $('textarea').prop('disabled', true);
            clearInterval(cronometro)
            click = 0 
            btnIniciar()    
        }  
    });//fim butão iniciar
    //contar letras e palavras
    $(document).on('input','#texto',function(){
        $('#nLetras').text($('#texto').val().replace(/ /g,'').length);//Fonte: http://www.jquerybyexample.net/2012/04/strip-or-remove-all-white-spaces-using.html
        $('#nPalavras').text($('#texto').val().split(' ').length);
    });//fim contar letras e palavras
        
    //FUNCOES
    //funcao retonar dois numeros
    function retornarDoisDigitos(tempo){
        if (tempo < 10){
            return '0' + tempo
        }else{
            return tempo
        }
    }//fim retonar dois numeros
    //funcao ao clicar em iniciar
    function btnIniciar(){
        $('#btn').text('Iniciar');
        $('#btn').css('color','white');
        $('#btn').css('background-color','#2A628F');
        $('#btn').css('border','1px solid #2A628F');
    }//fim btn iniciar    
    //funcao contar
    function contar(){
        if(segundos == 59){
            segundos = 0
            $('#seg').text(retornarDoisDigitos(segundos));
            minutos++
            $('#min').text(retornarDoisDigitos(minutos));
        }    
        segundos++
        $('#seg').text(retornarDoisDigitos(segundos));
    }//fim contar     
});