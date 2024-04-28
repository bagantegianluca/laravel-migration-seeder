@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @forelse ($trains as $train)
        <div class="col">
            <div class="card">
                <div class="card-head">
                    <div class="company">
                        <h5>Azienda</h5>
                        <div>{{$train->company}}</div>
                    </div>
                    <div class="class">
                        <h5>Classe</h5>
                        <div>{{$train->class}}</div>
                    </div>
                </div>

                <div class="card-title">
                    <table>
                        <thead>
                            <th>
                                Da
                            </th>
                            <th>
                                A
                            </th>
                            <th>
                                Partenza
                            </th>
                            <th>
                                Arrivo
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {{$train->start_station}}
                                </td>
                                <td>
                                    {{$train->end_station}}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($train->start_time)->format('d/m/y H:i') }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($train->end_time)->format('d/m/y H:i') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
            
        @empty
        <div class="col">
            <p>No results</p>
        </div>
            
        @endforelse
    </div>
</div>

@endsection