@extends('layout')

@section('title')
All messages
@endsection

<h3>All messages</h3>
@foreach($data as $el)
    <div class="alert-info">
        {{ $el->name }}
        {{ $el->email }}

        <small>{{ $el->created_at }}</small>
        <button class="btn btn-primary text-light"><a href="{{ route('contact-update-page', $el->id)}}">Update</a></button>
        <button class="btn btn-danger text-light"><a href="{{ route('contact-delete', $el->id)}}">Delete</a></button>
    </div>
@endforeach
@endsection