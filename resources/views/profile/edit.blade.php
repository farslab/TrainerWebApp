@extends('app')
@section('title','Profil Bilgileri')
@section('content')

@if($userRole=='customer')
@include('profile.customer-profile')
@elseif($userRole=='trainer')
@include('profile.trainer-profile')
@endif
@endsection