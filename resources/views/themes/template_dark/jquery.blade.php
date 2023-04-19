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
    <script src="{{asset("assets/template_dark/js/choices.min.js")}}"></script>
    <script src="{{asset("assets/template_dark/js/jquery-3.6.0.min.js")}}"></script>


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
