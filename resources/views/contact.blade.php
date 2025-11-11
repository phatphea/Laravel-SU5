@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="max-w-lg mx-auto bg-white shadow-lg p-8 rounded-2xl">
    <h1 class="text-4xl font-bold text-center mb-6 text-indigo-600">Contact Us</h1>
    <form class="space-y-4">
        <div>
            <label class="block text-left mb-1 font-semibold text-gray-700">Name</label>
            <input type="text" placeholder="Your name" 
                class="w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
            <label class="block text-left mb-1 font-semibold text-gray-700">Email</label>
            <input type="email" placeholder="you@example.com" 
                class="w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
            <label class="block text-left mb-1 font-semibold text-gray-700">Message</label>
            <textarea placeholder="Write your message..." 
                class="w-full border-gray-300 rounded-lg p-2 h-24 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>
        <button type="submit"
            class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
            Send Message
        </button>
    </form>
</div>
@endsection
