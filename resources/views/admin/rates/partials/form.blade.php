<div class="form-group">
    {!! Form::label('precio_hora', 'Precio Por hora') !!}
    {!! Form::text('precio_hora', null,["class" => "form-control", "placeholder" =>"Ingrese el precio"]) !!}
</div>
<div class="form-group">
    {!! Form::label('precio_dia', 'Precio por día') !!}
    {!! Form::text('precio_dia', null,["class" => "form-control", "placeholder" =>"Ingrese el precio"]) !!}
</div>
<div class="form-group">
    {!! Form::label('vehicle', 'Vehículo') !!}
    {!! Form::select('vehicle_id',$vehicle,null,["class" => "form-control"]) !!}
</div>