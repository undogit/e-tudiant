<h1>Questions</h1>
@if(session()->has('ok'))
    <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
@endif
{!! link_to_route('question.create', 'Ajouter un question') !!}
@foreach ($questions as $question)
    <div>
        Name : {!! $question->name !!}
        {!! link_to_route('question.show', 'Voir', [$question->id]) !!}
        {!! link_to_route('question.edit', 'Modifier', [$question->id]) !!}
        {!! Form::open(['method' => 'DELETE', 'route' => ['question.destroy', $question->id]]) !!}
            {!! Form::submit('Supprimer') !!}
        {!! Form::close() !!}
    </div>
@endforeach
