$( "#marca" ).on('click', function() {
    $.ajax({
        url : 	"https://www.seminovosbh.com.br/json/modelos/buscamodelo/marca/"+$(this).val()+"/data.js",
         type:   "get",
        dataType:"json",
        async: false,
        

        success: function( data ){	
            var optionModelo  ='<option value="">Escolha um modelo</option>';
            $.each(data, function( index, value ) {
                optionModelo += '<option value="'+value.idModelo+'">'+value.modelo+'</option>';
            });
            $('#modelo').html(optionModelo).show();
        }
    }); 

    $.ajax({
        url : 	"https://www.seminovosbh.com.br/json/index/busca-cidades/veiculo/1/marca/"+$('#marca').val()+"/modelo/0/cidade/0/data.js",
         type:   "get",
        dataType:"json",
        async: false,

        success: function( data ){	
            var optionCidade  ='<option value="0">Todas as cidades</option>';
            $.each(data, function( index, value ) {
                optionCidade += '<option value="'+value.cod_cidades+'">'+value.nome+'</option>';
            });
            $('#cidade').html(optionCidade).show();
        }
    });
});


$( "form" ).on( "submit", function( event ) {
event.preventDefault();
var marca  = $("#marca option:selected").text();
var modelo = $('#modelo').val();
var valor1 = $('#valor1').val();
var valor2 = $('#valor1').val();
var ano1 = $('#ano1').val();
var ano2 = $('#ano2').val();

if($('#ano1').val() > +$('#ano2').val()){
    alert("O ano inicial não pode ser maior que o ano Final");
    $('#ano2').focus();
}


    $.ajax({
        url : 	"http://localhost/123_milhas/crawler.php",
        type:   "post",
        dataType:"json",
        data :{
            marca : marca,
            modelo : modelo,
            valor1 : valor1,
            valor2 : valor2,
            ano1 : ano1,
            ano2 : ano2,
            busca_veiculo : true 
        },

    	success: function( data ){
            location.reload();	
            $('#lista-veiculos').html(data);
    	}
    });



});
