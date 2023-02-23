<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('serviceImg') }}
            {{ Form::text('serviceImg', $service->serviceImg, ['class' => 'form-control' . ($errors->has('serviceImg') ? ' is-invalid' : ''), 'placeholder' => 'Serviceimg']) }}
            {!! $errors->first('serviceImg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $service->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $service->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descriptionSm') }}
            {{ Form::text('descriptionSm', $service->descriptionSm, ['class' => 'form-control' . ($errors->has('descriptionSm') ? ' is-invalid' : ''), 'placeholder' => 'Descriptionsm']) }}
            {!! $errors->first('descriptionSm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descriptionLg') }}
            {{ Form::text('descriptionLg', $service->descriptionLg, ['class' => 'form-control' . ($errors->has('descriptionLg') ? ' is-invalid' : ''), 'placeholder' => 'Descriptionlg']) }}
            {!! $errors->first('descriptionLg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location') }}
            {{ Form::text('location', $service->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
            {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $service->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>