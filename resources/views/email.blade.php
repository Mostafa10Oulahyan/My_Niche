@extends('Layout')
@section('title', 'Email')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-text-main mb-8">Envoyer un email</h2>

            <div class="mb-6">
                @include('incs.flash')
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 transform  transition-all duration-300">
                <form action="{{ route('send.email') }}" method="post" class="space-y-6">
                    @csrf

                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-text-main">Your Email</label>
                        <input type="email"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-eco-green focus:ring-2 focus:ring-green-200 outline-none transition-all duration-200"
                            name="email" id="email" required>
                    </div>

                    <div class="space-y-2">
                        <label for="subject" class="block text-sm font-medium text-text-main">Subject</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-eco-green focus:ring-2 focus:ring-green-200 outline-none transition-all duration-200"
                            name="subject" id="subject" required>
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="block text-sm font-medium text-text-main">Message</label>
                        <textarea
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-eco-green focus:ring-2 focus:ring-green-200 outline-none transition-all duration-200 min-h-[150px]"
                            name="message" id="message" required></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-eco-green hover:bg-green-700 text-white font-bold py-4 rounded-lg shadow-md hover:shadow-lg transform active:scale-95 transition-all duration-200 flex items-center justify-center space-x-2">
                        <span>Send Email</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection