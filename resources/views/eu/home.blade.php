@extends('layouts.admin')

@section('title')
    Home
@endsection

@section('contentHeader')
    Dashboard
@endsection


{{-- ################################## breadcrumb-item ################## --}}

@section('contentHeaderLink')
@endsection

@section('contentHeaderActive')
@endsection

{{-- ################################## Content ################## --}}
@section('backgroundimg')
    {{-- {{ asset('assets/images/prints.png') }} --}}
@endsection

@section('content')
    <h1>hiiiiiiiiiiiii</h1>
    {{ optional(Auth::user())->name }}
@endsection




{{-- ################################## Styles & Scripts ################## --}}
@section('styles')
@endsection


@section('scripts')
@endsection
