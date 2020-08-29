@php
$count_reclamos = 0;
$count_solicitudes = 0;
$count_quejas = 0;

foreach ($listamjs as $mjs) {
    if ($mjs->subjectid == 1) {$count_reclamos++;}
    if ($mjs->subjectid == 2) {$count_solicitudes++;}
    if ($mjs->subjectid == 3) {$count_quejas++;}
}

@endphp

<div class="row justify-content-around">
    <div class="col-12 mt-3">
        <div class="card text-white bg-success mb-3">
            <div class="card-header text-center">Cantidad Total de Mensajes</div>
            <div class="card-body">
              <h3 class="card-title text-center">{{count($listamjs)}}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="card text-white bg-warning mb-3 p-1">
            <div class="card-header text-center">Reclamos</div>
            <div class="card-body">
                <h3 class="card-title text-center"> {{$count_reclamos}}</h3>
                <p class="card-text text-center">{{round($count_reclamos/count($listamjs)*100, 2)}} % </p>                
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="card text-white bg-warning mb-3 p-1">
            <div class="card-header text-center">Solicitudes</div>
            <div class="card-body">
                <h3 class="card-title text-center">{{$count_solicitudes}}</h3>
                <p class="card-text text-center">{{round($count_solicitudes/count($listamjs)*100, 2)}} % </p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="card text-white bg-warning mb-3 p-1">
            <div class="card-header text-center">Quejas</div>
            <div class="card-body">
                <h3 class="card-title text-center">{{$count_quejas}}</h3>
                <p class="card-text text-center">{{round($count_quejas/count($listamjs)*100, 2)}} % </p>
            </div>
        </div>
    </div>

</div>