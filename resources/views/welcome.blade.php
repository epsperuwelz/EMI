@extends('layout.default')
@section('title') Inventory Management @endsection
@section('description') Landing page @endsection
@section('keywords') EMI,EAF Material Inventory @endsection
{{-- Pour indiquer aux moteurs de recherche que l'url de la current page est unique(=canonical): --}}
@section('canonical') {{URL::current()}} @endsection
@section('content') 
    <main>
        {{--Si on ne veut pas du copyleft:(penser aussi à retirer my-auto du h1) 
        <div class="d-flex justify-content-center align-items-center vh-100" style="background:#09090B;"> --}}
        <div class="d-flex flex-column justify-content-around align-items-center vh-100" style="background:#09090B;">
            <h1 class="text-center text-white font-extrabold my-auto">Bienvenue sur <span class="rounded-2 text-success fs-3 fw-bold" style="background:#F59E0B;padding:0px 9px;">EMI</span> !</h1>
                {{-- Ne fonctionnent que sur Firefox: --}}
                {{-- <p class="fw-bold" style="color:#F59E0B;"><span  >&#x1f12f; </span>EMI</p> --}}
                {{-- <p class="fw-bold" style="color:#F59E0B;"><span  >&#127279; </span>EMI</p> --}}
            <p class="fw-bold text-success"><span style=" position: relative;top: 1.6px;display:inline-block;transform: rotate(180deg);">&copy; </span> EMI</p>
        </div>
    </main>
@endsection
       