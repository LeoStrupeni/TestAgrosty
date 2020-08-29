<div class="row">
    <div class="col mt-3">
        <div class="table-responsive">
            <table class="table table-light" id="dt">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Asunto</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Spam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listamjs as $mjs)
                    <tr>
                        <td>{{$mjs->fromName}}</td>
                        <td>{{$mjs->toEmail}}</td>
                        <td>{{$mjs->subjectid == 1 ? 'Reclamo' : ($mjs->subjectid == 2 ? 'Solicitud' : 'Queja') }}</td>
                        <td>{{$mjs->body}}</td>
                        <td>{{date("d/m/Y",strtotime($mjs->date))}}</td>
                        <td>{{$mjs->spanScore > 2.5 ? 'Si' : 'No'}}</td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>