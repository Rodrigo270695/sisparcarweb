<div class="form-group">
    {!! Form::label('placa', 'Placa') !!}
    {!! Form::text('placa', null,["class" => "form-control", "placeholder" =>"Ingrese la placa"]) !!}
</div>
<div class="form-group">
    {!! Form::label('fecha_ingreso', 'Fecha de ingreso') !!}
    {!! Form::datetime('fecha_ingreso', \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', now())->format('d-m-y H:i:s'),["class" => "form-control","disabled"]) !!}
</div>
<div class="form-group">
    {!! Form::label('rates', 'Vehículo') !!}
    {!! Form::select('rate_id',$rate,null,["class" => "form-control"]) !!}
</div>
