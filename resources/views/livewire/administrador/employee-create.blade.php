<div>
    <div class="card">
        <div class="card-body">
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control'.($errors->has('name') ? ' is-invalid':null), 'wire:model' => 'name']) !!}
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>*{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('lastname', 'Apellido') !!}
            {!! Form::text('lastname', null, ['class' => 'form-control'.($errors->has('lastname') ? ' is-invalid':null), 'wire:model' => 'lastname']) !!}
            @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>*{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'Teléfono') !!}
            {!! Form::text('phone', null, ['class' => 'form-control'.($errors->has('phone') ? ' is-invalid':null), 'wire:model' => 'phone']) !!}
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>*{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('salary', 'Salario') !!}
            {!! Form::text('salary', null, ['class' => 'form-control'.($errors->has('salary') ? ' is-invalid':null), 'wire:model' => 'salary' , 'wire:keyup' => 'calcular_salario()']) !!}
            @error('salary')
                <span class="invalid-feedback" role="alert">
                    <strong>*{{ $message }}</strong>
                </span>
            @enderror
        </div>
        El salario por día de este empleado es: <br>
        $ {{ number_format($salary_per_day) }}<br><br>
        <a class="btn btn-primary btn-sm" wire:click="store()">Crear empleado</a>
        </div>
    </div>
</div>
