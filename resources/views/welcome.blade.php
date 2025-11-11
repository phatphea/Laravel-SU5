@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="text-center py-20 bg-linear-to-br from-indigo-600 to-purple-600 text-white rounded-3xl shadow-xl">
    <h1 class="text-5xl font-bold mb-4">Welcome to MyWebsite</h1>
    <p class="text-lg mb-8 max-w-2xl mx-auto">
        We help businesses grow with modern web solutions — crafted with performance, scalability, and design in mind.
    </p>
    <a href="/services"
       class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded-full hover:bg-indigo-100 transition">
        Explore Our Services
    </a>
</section>

<!-- Features Section -->
<section class="mt-20">
    <h2 class="text-3xl font-bold text-center mb-10 text-indigo-600">Why Choose Us?</h2>
    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-indigo-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Fast Delivery</h3>
            <p class="text-gray-600">We deliver high-quality web solutions on time, every time.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-indigo-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Trusted Quality</h3>
            <p class="text-gray-600">Our code is clean, secure, and scalable to meet your growing needs.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-indigo-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0a9 9 0 0118 0z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Expert Support</h3>
            <p class="text-gray-600">Our team is ready to assist you with any technical challenges 24/7.</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="mt-24 text-center">
    <h2 class="text-3xl font-bold text-indigo-600 mb-4">Ready to start your next project?</h2>
    <p class="text-gray-600 mb-6">Let’s collaborate and build something amazing together!</p>
    <a href="/contact"
       class="bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition font-semibold">
       Get In Touch
    </a>
</section>
@endsection
