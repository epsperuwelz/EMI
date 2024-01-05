<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content= "@yield('description')"  name="description"></meta>
        <meta content= "@yield('keywords')"  name="keywords"></meta>
        <meta content= "index,follow"  name="robots"></meta>
        <title>{{config('app.name')}}  |  @yield('title')</title>
        <link href="@yield('canonical')" rel="canonical">
        {{-- Favicon --}}
        <link rel="icon" href="{{asset('template/images/favicon.png')}}">
         {{-- Fonts  --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        {{-- Bootstrap 5.3 --}}
        <link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
        <style>
            .bg-dark,.text-bg-dark{
                background:#18181B!important;
            }
        </style>
    </head>
    <body>

