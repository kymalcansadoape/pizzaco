@extends('layouts.home')
@section('title', 'Menu | ')

@section('content')

@include('main.menu.hero')
@include('main.menu.pizza')
@include('main.menu.burger')
@include('main.menu.bevarages')



@include('components.subscription-cta')
