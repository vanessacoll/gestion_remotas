    <script src="{{asset("assets/template_dark/js/popper.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/anchor.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/is.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/chart.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/countUp.umd.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/echarts.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/dayjs.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/all.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/lodash.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/prism.js")}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset("assets/template_dark/js/list.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/theme.js")}}"></script>
    {{-- <scriptsrc="{{asset("assets/template_dark/js/choices.min.js") }}"></script>--}}
    <script src="{{asset("assets/template_dark/js/jquery-3.6.0.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/select2.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/inputmask/jquery.inputmask.min.js")}}"></script>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {
         $('#tipo_cliente').on('change',function(e) {
            var id_tip = e.target.value;
            $.ajax({
            url:"{{ route('reporte') }}",
            type:"POST",
            data: {
            id_tip: id_tip
            },
            success:function (data) {
                alert(data.clientes[0].cedula);
         $('#cliente').empty();
         $('#cliente').append('<option>Seleccione</option>');
            for (var i=0; i<data.clientes.length; i++){
                $('#cliente').append('<option value="'+data.clientes[i].cedula+'">'+data.clientes[i].cedula+'-'+data.clientes[i].nombres+'</option>');
            }
           }
          })
         });
        });
        </script>

<script>
$(document).ready(function() {

    $('.js-basic-single').select2();

    $('[data-mask]').inputmask()

});
</script>

<script>
  function mostrarAlerta() {
    var alerta = document.getElementById("alerta");
    alerta.style.display = "block";
    setTimeout(function() {
      alerta.style.display = "none";
    }, 6000); // La alerta desaparecerá después de 6 segundos
  }
</script>

