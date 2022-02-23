@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="form">
            <br>
            <br>
            <br>
            {!! Form::open(['action' => ['ImmunizationController@update', $immune->id], 'method' => 'PUT'])!!}
            {{ Form::label('Name:') }}
            {{ Form::text('name', $immune->name,['class'=>'form-control', 'Placeholder' => 'Type the name']) }}

            {{ Form::label('Gender:') }}
            {!! Form::select('gender',['male' => 'male','female'=>'female','other'=>'other'], $immune->gender, ['class'=>'form-control','placeholder'=>'Select gender']) !!}
            {{ Form::label('Age:') }}
            {{ Form::text('age', $immune->age,['class'=>'form-control', 'Placeholder' => 'Type the age']) }}

            {{ Form::label('Location:') }}
            {{ Form::text('location', $immune->location,['class'=>'form-control', 'rows' => 3, 'Placeholder' => 'Type the vaccine']) }}

            {{ Form::label('Vaccine') }}
            {{ Form::select('type', $immunes, $immune->type, array('class'=>'form-control', 'placeholder'=>'Please select ...')) }}

            <button onclick="return confirm('You are about to add a vaccination data')"
                    class="submit-btn" type="submit"> submit</button>
            {{ Form::close() }}
        </div>
@endsection
