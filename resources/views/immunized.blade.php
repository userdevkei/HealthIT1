@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <br>
        <div class="table table-responsive">
            <a class="btn btn-sm btn-info" href="{{ route('Immunization.create') }}">add</a>
            @if(count($immunes) > 0 )
                <table class="table table-responsive-sm table-borderless table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Age</th>
                        <th scope="col">Location</th>
                        <th scope="col">Vaccine type</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($immunes as $im)
                        <tr>
                            <td nowrap="">{{$im -> name}}</td>
                            <td nowrap="">{{$im-> gender}}</td>
                            <td nowrap="">{{$im -> age}}</td>
                            <td nowrap="">{{$im -> location}}</td>
                            <td nowrap="">{{$im -> type}}</td>
                            <td nowrap="">
                                <a href="{{route('Immunization.edit', $im->id)}}" class="btn btn-sm btn-info" title="update record"
                                >edit</a>
                            </td>
                            <td nowrap="">
                                {!! Form::open(['action' => ['ImmunizationController@destroy', $im ->id], 'method' => 'POST']) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                <button onclick="return confirm('Do you want to delete this job?')" class="btn btn-sm btn-danger" type="submit" title="delete record">
                                    delete</button>
                                {!! Form::close(); !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @else
                <td><p class="text-muted">No vaccinated children yet</p></td>
            @endif
        </div>
    </div>
@endsection
