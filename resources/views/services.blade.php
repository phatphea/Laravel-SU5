@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
<div class="text-center">
    <h1 class="text-5xl font-bold mb-8 text-indigo-600">Our Services</h1>
    <p class="max-w-2xl mx-auto text-gray-600 mb-12">
        We provide end-to-end digital solutions to help your business thrive in the modern world.
    </p>

    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-indigo-600 mb-2">Web Development</h3>
            <p>Modern, responsive websites and web apps built with the latest technologies.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-indigo-600 mb-2">UI/UX Design</h3>
            <p>Beautiful, user-centered interfaces designed to deliver a great experience.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-indigo-600 mb-2">API Integration</h3>
            <p>We connect your systems with third-party services and custom-built APIs.</p>
        </div>
    </div>
</div>
@endsection
