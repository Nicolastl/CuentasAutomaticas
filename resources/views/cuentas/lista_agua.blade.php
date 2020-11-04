@extends('plantilla')
@section('seccion')
    <h1>Lista Agua</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Sector</th>
            <th scope="col">Fecha</th>
            <th scope="col">Cargo Fijo</th>
            <th scope="col">Consumo</th>
            <th scope="col">Consumo (Lt)</th>
            <th scope="col">Recolección</th>
            <th scope="col">Tratamiento</th>
            <th scope="col">Subsidio</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>

        @foreach($agua as $n)
  <?php
        setlocale(LC_ALL,"es_ES");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $mes = $meses[(date("m",strtotime($n->fecha))) - 1];
        $fecha = strftime($mes."/%Y", strtotime($n->fecha));
      ?>
                  <tr>
                      <th scope="row">{{$n->id}}</th>
                <td>Casa</td>
                <td>{{$fecha}}</td>
                <td>${{number_format(intval($n->cargo_fijo/3),0,",",".")}}</td>
                <td>${{number_format(intval($n->consumo_casa * $n->valor_unitario),0,",",".")}}</td>
                <td>{{number_format(intval($n->consumo_casa),0,",",".")}}Lt</td>
                <td>${{number_format(intval($n->recoleccion/3),0,",",".")}}</td>
                <td>${{number_format(intval($n->tratamiento/3),0,",",".")}}</td>
                <td>$-{{number_format(intval($n->subsidio/3),0,",",".")}}</td>
                <td>${{number_format(intval($n->total_casa),0,",",".")}}</td>
            </tr><tr>
                <th scope="row">{{$n->id}}</th>
                <td>General</td>
                <td>{{$fecha}}</td>
                <td>${{number_format(intval($n->cargo_fijo),0,",",".")}}</td>
                <td>${{number_format(intval($n->consumo * $n->valor_unitario),0,",",".")}}</td>
                <td>{{number_format(intval($n->consumo),0,",",".")}}Lt</td>
                <td>${{number_format(intval($n->recoleccion),0,",",".")}}</td>
                <td>${{number_format(intval($n->tratamiento),0,",",".")}}</td>
                <td>$-{{number_format(intval($n->subsidio),0,",",".")}}</td>
                <td>${{number_format(intval($n->total),0,",",".")}}</td>
            </tr>
        @endforeach()
        </tbody>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Sector</th>
            <th scope="col">Fecha</th>
            <th scope="col">Cargo Fijo</th>
            <th scope="col">Consumo</th>
            <th scope="col">Consumo (Lt)</th>
            <th scope="col">Recolección</th>
            <th scope="col">Tratamiento</th>
            <th scope="col">Subsidio</th>
            <th scope="col">Total</th>
        </tr>
    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endsection
