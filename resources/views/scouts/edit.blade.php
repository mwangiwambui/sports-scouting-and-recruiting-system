@extends('scouts.layout.admin')
@section('content')
    <h3>Edit Player</h3>

    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-2">
            {!! Form::model($players,array('route' => ['players.update',$players->id],'method'=>'PUT')) !!}
            <div class="form-group">
                {{ Form::label('Firstname', 'Firstname') }}
                {{ Form::text('Firstname', null, array('class' => 'form-control','required'=>'')) }}
            </div>

            <div class="form-group">
                {{ Form::label('Lastname', 'Lastname') }}
                {{ Form::text('Lastname', null, array('class' => 'form-control', 'required'=>'')) }}
            </div>
            <div class="form-group">
                {{ Form::label('Region', 'Region') }}
                {{ Form::text('Region', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('Age', 'Age') }}
                {{ Form::text('Age',  null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('Position', 'Position') }}
                {{ Form::text('Position',null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('Height', 'Height') }}
                {{ Form::text('Height',null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('Stats', 'Stats') }}
                {{ Form::text('Stats',null, array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Update Player', array('class' => 'btn btn-default')) }}


            {!! Form::close() !!}
        </div>
    </div>


@endsection