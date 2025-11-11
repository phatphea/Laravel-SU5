@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="text-center max-w-3xl mx-auto">
    <h1 class="text-5xl font-bold mb-6 text-indigo-600">About Us</h1>
    <p class="text-lg text-gray-600 leading-relaxed">
        Welcome to <strong>MyWebsite</strong> — we’re a passionate team of developers dedicated 
        to crafting fast, secure, and elegant web applications. Our mission is to empower businesses 
        with technology that delivers real impact.
    </p>

    <div class="mt-10 flex justify-center">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
             alt="Team"
             class="rounded-2xl shadow-lg w-full max-w-xl">
    </div>
</div>
@endsection
