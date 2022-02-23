<style>
    .container{
        margin: auto;
    }
    .form{
        margin: auto;
        width: 50% !important;
        min-height: 50vh;
        background-color: ;
    }
</style>
@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="form">
            <br>
            <br>
            <br>
            {!! Form::open(['action' => 'ImmuneController@store', 'method' => 'POST'])!!}
                    {{ Form::label('Name:') }}
                    {{ Form::text('name','',['class'=>'form-control', 'rows' => 3, 'Placeholder' => 'Type the vaccine']) }}
            <button onclick="return confirm('You are about to send a add a vaccine type')"
                        class="submit-btn" type="submit"> submit</button>
            {{ Form::close() }}
        </div>
        <div class="holder">
            <div class="add-form">

            </div>
        </div>
        <div class="holder">
            <div class="add-kid">

            </div>
        </div>
        <div class="holder">
            <div class="repo">

            </div>
        </div>
    </div>
@endsection
