@extends('layout')

@section('page_title') Review @endsection
@section('main_content')
    <form method="post" action="crm/review/check">
        @csrf
        <h1 class="text-center">Review</h1>
        <input type="email" id="email" name="email" placeholder="Email" class="form-control my-3">
        <input type="text" id="subject" name="subject" placeholder="Subject" class="form-control my-3">
        <input type="text" id="message" name="message" placeholder="Message" class="form-control my-3">
        <button type="submit" class="btn btn-success">Send </button>
    </form>
@endsection