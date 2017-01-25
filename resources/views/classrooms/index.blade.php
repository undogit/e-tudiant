@extends('layouts.app')

@section('content')

@include('blocks.menuFormateur')


<div class="tab classroom-index">
    <div id="classroom" class="tab-pane fade in active">
        <div class="title">
            <h3>Classroom</h3>
        </div>
        <div class="tab-content">
            <div class="btn-create">
            {!! link_to_route('classroom.create', 'Ajouter une salle de classe') !!}
            </div>

            @foreach ($classrooms as $classroom)
                <div class="info-line row">
                    <div class="info-name col-sm-3 col-xs-12">Name : {!! $classroom->name !!}</div>
                    <div class="info-module col-sm-3 col-xs-12">Module : {{--{!! $classroom->module->name !!}--}}</div>
                    <div class="info-status col-sm-3 col-xs-12">Statut : {!! $classroom->status ? 'Terminé' : 'En cours' !!}</div>
                    <div class="col-sm-2"></div>
                    <div class="btn-show col-sm-3 col-xs-12">{!! link_to_route('classroom.show', 'Voir', [$classroom->id]) !!}</div>
                    <div class="btn-edit col-sm-3 col-xs-12">{!! link_to_route('classroom.edit', 'Modifier', [$classroom->id]) !!}</div>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['classroom.destroy', $classroom->id]]) !!}
                    <div class="btn-delete col-sm-1 col-xs-12">{!! Form::submit('X') !!}</div>
                    {!! Form::close() !!}
                </div>
            @endforeach
        </div>
    </div>
</div>


    <style>

        .classroom-index.tab{
            background-color: white;
            border: 4px solid black;
        }
        .classroom-index .title{
            background-color: black;
            text-align: center;
            height: 50px;
            display: flex;
        }
        .classroom-index h3{
            color: white;
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            margin: 0;
            margin: auto;
            font-weight: bold;
        }

        .classroom-index .tab-content{
            padding: 15px 20px;
        }

        .classroom-index .btn-create{
            width: 30%;
            height: 40px;
            border: 3px solid black;
            margin: auto;
            display: flex;
            cursor: pointer;
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .classroom-index .btn-create:hover{
            background-color: black;
            transition: 0.2s;
        }

        .classroom-index .btn-create a{
            font-family: 'Tinos', serif;
            font-style: italic;
            font-size: 18px;
            margin: auto;
            text-decoration: none;
            color: black;
        }
        .classroom-index .btn-create:hover a{
            color: white;
        }

        .classroom-index .info-line{
            font-family: Oswald;
            border-bottom: 3px solid #efefef;
            padding: 20px 0px;
        }

        .classroom-index .info-name{
            color: black;
            font-size: 18px;
            padding-left: 30px;
        }

        .classroom-index .btn-show{

        }

        .classroom-index .btn-edit{

        }

    </style>

@endsection()