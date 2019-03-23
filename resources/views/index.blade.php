@extends('templates.main')
@section('title', 'Inicio')
@section('content')
<a href="https://es.aliexpress.com/" class="btn btn-success">Test</a>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endsection
