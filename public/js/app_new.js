  $(function () {

  $('#select-tipcliente').on('change', onSelectTipClienteChange);

  })

function onSelectTipClienteChange(){
  var tipcliente_id = $(this).val();

  if(!tipcliente_id){
  	$('#select-cliente').html('<option value="">Seleccione</option>');
  	return;
  }

//AJAX
$.get('/api/estacionesclirep/'+tipcliente_id+'/clientes', function(data) {
	var html_select = '<option value="">Seleccione</option>';
	for (var i=0; i<data.length; i++)

		html_select += '<option value="'+data[i].cedula+'">'+data[i].cedula+'-'+data[i].nombres+'</option>';
	$('#select-cliente').html(html_select);

})
}
