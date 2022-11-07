@extends('layouts.app')

@section('title')
{{ $product->meta_title }}
@endsection

@section('meta_keywords')
{{ $product->meta_keywords }}
@endsection

@section('meta_description')
{{ $product->meta_description }}
@endsection

@section('content')

     <livewire:frontend.product.view :category="$category" :product="$product" />

@endsection
