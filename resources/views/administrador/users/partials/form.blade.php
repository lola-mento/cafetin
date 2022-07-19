<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null , ['class' => 'form-control'.($errors->has('name') ? ' is-invalid':null), 'placeholder' => 'Ingrese el nombre completo del usuario']) !!}
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('email', 'Correo electrónico') !!}
    {!! Form::email('email', null , ['class' => 'form-control'.($errors->has('email') ? ' is-invalid':null),'aria-label' => 'Boton para enviar', 'placeholder' => 'Ingrese el correo del usuario']) !!}
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('password', 'Clave') !!}
    {!! Form::password('password', ['class' => 'form-control'.($errors->has('password') ? ' is-invalid':null),'aria-label' => 'Boton para enviar', 'placeholder' => 'Ingrese la clave']) !!}
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>
    @enderror
</div>

