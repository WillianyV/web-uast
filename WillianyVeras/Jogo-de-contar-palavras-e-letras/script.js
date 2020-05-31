$(function(){
    var texto = $('#texto');
    var letras 
    var palavras 

    var segundos = 15;
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
        letras = $('#nLetras').text($('#texto').val().replace(/ /g,'').length);//Fonte: http://www.jquerybyexample.net/2012/04/strip-or-remove-all-white-spaces-using.html
        palavras = $('#nPalavras').text($('#texto').val().split(' ').length);
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
        if(segundos == 0){ 
            clearInterval(cronometro)
            segundos = 16
            $('#seg').text(retornarDoisDigitos(0)) 
            $('textarea').prop('disabled', true) 
            btnIniciar()  
            jogo()              
        }  
        segundos--
        $('#seg').text(retornarDoisDigitos(segundos))
               
    }//fim contar
    
    function jogo(){  
        alert("entrou1")      
        if($('#qtdLetras').val() >= letras && $('#qtdPalavras').val() >= palavras){
            $('#msg').fadein(500);
            alert("entrou 2")
        }else{
            $('#msg').text('Você Perdeu! Tente novamente').fadein(500);
            alert("entrou 3")
        }
    }
});