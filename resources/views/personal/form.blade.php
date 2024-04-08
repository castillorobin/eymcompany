<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" value="{{ old('Nombre', $personal?->Nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('Nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="d_u_i" class="form-label">{{ __('Dui') }}</label>
            <input type="text" name="DUI" class="form-control @error('DUI') is-invalid @enderror" value="{{ old('DUI', $personal?->DUI) }}" id="d_u_i" placeholder="Dui">
            {!! $errors->first('DUI', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fehca_ingreso" class="form-label">{{ __('Fehca Ingreso') }}</label>
            <input type="text" name="Fehca_ingreso" class="form-control @error('Fehca_ingreso') is-invalid @enderror" value="{{ old('Fehca_ingreso', $personal?->Fehca_ingreso) }}" id="fehca_ingreso" placeholder="Fehca Ingreso">
            {!! $errors->first('Fehca_ingreso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cargo" class="form-label">{{ __('Cargo') }}</label>
            <input type="text" name="Cargo" class="form-control @error('Cargo') is-invalid @enderror" value="{{ old('Cargo', $personal?->Cargo) }}" id="cargo" placeholder="Cargo">
            {!! $errors->first('Cargo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nacimiento" class="form-label">{{ __('Nacimiento') }}</label>
            <input type="text" name="Nacimiento" class="form-control @error('Nacimiento') is-invalid @enderror" value="{{ old('Nacimiento', $personal?->Nacimiento) }}" id="nacimiento" placeholder="Nacimiento">
            {!! $errors->first('Nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contacto" class="form-label">{{ __('Contacto') }}</label>
            <input type="text" name="Contacto" class="form-control @error('Contacto') is-invalid @enderror" value="{{ old('Contacto', $personal?->Contacto) }}" id="contacto" placeholder="Contacto">
            {!! $errors->first('Contacto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="parentesco" class="form-label">{{ __('Parentesco') }}</label>
            <input type="text" name="Parentesco" class="form-control @error('Parentesco') is-invalid @enderror" value="{{ old('Parentesco', $personal?->Parentesco) }}" id="parentesco" placeholder="Parentesco">
            {!! $errors->first('Parentesco', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" value="{{ old('Telefono', $personal?->Telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('Telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="Direccion" class="form-control @error('Direccion') is-invalid @enderror" value="{{ old('Direccion', $personal?->Direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('Direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>