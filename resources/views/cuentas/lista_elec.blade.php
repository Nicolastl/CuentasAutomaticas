@extends('plantilla')
@section('seccion')
    <h1>Lista Electricidad</h1>
    <table id="example23" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Sector</th>
            <th scope="col">Fecha</th>
            <th scope="col">Administracion</th>
            <th scope="col">Valor Electricidad</th>
            <th scope="col">Consumo KWh</th>
            <th scope="col">Coordinacion</th>
            <th scope="col">Otro</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>

        @foreach($elec as $n)
            <tr>
                <th scope="row">{{$n->id}}</th>
                <td>Casa</td>
                <td>{{$n->fecha}}</td>
                <td>{{number_format(intval($n->admin/3),0,",",".")}}</td>
                <td>{{number_format(intval(($n->electricidad / $n->kwhtotal)*$n->consumo_casa),0,",",".")}}</td>
                <td>{{number_format(intval($n->consumo_casa),0,",",".")}}</td>
                <td>{{number_format(intval($n->coordinacion/3),0,",",".")}}</td>
                <td>{{number_format(intval($n->otro/3),0,",",".")}}</td>
                <td>{{number_format(intval($n->valor_casa),0,",",".")}}</td>
            </tr><tr>
                <th scope="row">{{$n->id}}</th>
                <td>General</td>
                <td>{{$n->fecha}}</td>
                <td>{{number_format(intval($n->admin),0,",",".")}}</td>
                <td>{{number_format(intval($n->electricidad),0,",",".")}}</td>
                <td>{{number_format(intval($n->kwhtotal),0,",",".")}}</td>
                <td>{{number_format(intval($n->coordinacion),0,",",".")}}</td>
                <td>{{number_format(intval($n->otro),0,",",".")}}</td>
                <td>{{number_format(intval($n->valor_total),0,",",".")}}</td>
            </tr>
        @endforeach()
        </tbody>
    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endsection



<!-- start - This is for export functionality only -->

<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>

<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<!-- end - This is for export functionality only -->


<script type="text/javascript">



    $(document).ready(function() {
        $('#example23').DataTable();
    } );

</script>
