@extends('layouts.master')
 
@section('content')
 
    <h1>Liste des contacts</h1>
    <p class="lead">Here's a list of all your contacts. <a href="{{ route('contacts.create') }}">Ajouter un contact?</a></p>
    <hr>
 
    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
 
    @foreach($contacts as $contact)
        <h3>{{ $contact->Nom . ‘ ‘ . $contact->Prenom }}</h3>
        <p>{{ $task->profil}}</p>
 
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route(contacts.show', $contact->id) }}" class="btn btn-info">Afficher le contact</a>
                <a href="{{ route(contacts.edit', $contact->id) }}" class="btn btn-primary">Modifier le contact</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['contacts.destroy', $contact->id]
                ]) !!}
                {!! Form::submit('Supprimer ce contact?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <hr>
    @endforeach
 
@stop
