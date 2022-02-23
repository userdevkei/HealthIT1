@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="form">
            <br>
            <br>
            <br>
            {!! Form::open(['action' => 'ImmunizationController@store', 'method' => 'POST'])!!}
            {{ Form::label('Name:') }}
            {{ Form::text('name','',['class'=>'form-control', 'Placeholder' => 'Type the name']) }}

            {{ Form::label('Gender:') }}
            {!! Form::select('gender',['male' => 'male','female'=>'female','other'=>'other'],null, ['class'=>'form-control','placeholder'=>'Select gender']) !!}
            {{ Form::label('Age:') }}
            {{ Form::text('age','',['class'=>'form-control', 'Placeholder' => 'Type the age']) }}

            {{ Form::label('Location:') }}
            {{ Form::text('location','',['class'=>'form-control', 'rows' => 3, 'Placeholder' => 'Type the vaccine']) }}

            {{ Form::label('Vaccine') }}
            {{ Form::select('type', $immune, null, array('class'=>'form-control', 'placeholder'=>'Please select ...')) }}

            <button onclick="return confirm('You are about to add a vaccination data')"
                    class="submit-btn" type="submit"> submit</button>
            {{ Form::close() }}
        </div>
@endsection
