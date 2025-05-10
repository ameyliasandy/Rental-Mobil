@extends('layout.appauth')
@section('title', 'Registrasi - VROOM')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen px-4">
    <div class="bg-white bg-opacity-100 p-8 rounded-xl shadow-md max-w-md w-full">
        <div class="mb-6 text-center">
            <img src="/gambarberanda/Logo 6 - Copy.png" alt="Logo VROOM" class="mx-auto w-24">
            <h2 class="text-2xl font-bold text-gray-800 mt-4">
                Buat Akun Anda<br>
                <span class="text-base font-medium">Untuk Memulai!</span>
            </h2>
        </div>

        <form action="{{ route('registerpage.post') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Nama Pengguna" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <input type="email" name="email" placeholder="Email" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <input type="password" name="password" placeholder="Kata Sandi" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <input type="tel" name="phone" placeholder="Nomor Handphone" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />

            <button type="submit"
                    class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                DAFTAR
            </button>
        </form>

        <p class="text-center text-sm text-gray-700 mt-6">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-blue-900 font-semibold hover:underline">Masuk</a>
        </p>
    </div>
</div>
@endsection
