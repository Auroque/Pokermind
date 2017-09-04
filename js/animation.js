function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
        {
            document.getElementById(el).style.display = 'block';
        }
    
        if (el != 'tabela1')
        {
            document.getElementById('tabela1').style.display = 'none';
        }
        if (el != 'tabela2')
        {
                document.getElementById('tabela2').style.display = 'none';
        }
        if (el != 'tabela3')
        {
                document.getElementById('tabela3').style.display = 'none';
        }
        if (el != 'tabela4')
        {
                document.getElementById('tabela4').style.display = 'none';
        }
        if (el != 'tabela5')
        {
                document.getElementById('tabela5').style.display = 'none';
        }
        if (el != 'tabela6')
        {
                document.getElementById('tabela6').style.display = 'none';
        }
}

function MudarestadoPacotes(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
        {
            document.getElementById(el).style.display = 'block';
        }
    
        if (el != 'tabela1')
        {
            document.getElementById('tabela1').style.display = 'none';
        }
        if (el != 'tabela2')
        {
                document.getElementById('tabela2').style.display = 'none';
        }
        if (el != 'tabela3')
        {
                document.getElementById('tabela3').style.display = 'none';
        }
}


window.onload = function() {
  focusbtn();
};

function focusbtn() {
    document.getElementById('btn1').focus();
}


/*
Todas as informações deste arquivo é referente ao Layout.
Plugins JQuery
*/

//ANIMAÇÃO DA BUSCA
$( ".busca" ).click(function() {
  $( ".campo_busca" ).slideToggle( "1000" );
});


// link das animações da página
new WOW().init();
