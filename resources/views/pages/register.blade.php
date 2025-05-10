@extends('layouts.app')

@section('title', 'Registrasi - VROOM')

@section('content')
    <div class="w-full max-w-sm bg-white/95 rounded-xl shadow-lg p-6 text-center">
        <div class="mb-4">
            <img src="gambarberanda/Logo 6 - Copy.png" alt="Logo VROOM" class="mx-auto w-24">
        </div>
        <h2 class="text-lg font-semibold text-gray-800 mb-4">
            Buat Akun Anda<br>Untuk Memulai!
        </h2>

        <form action="#" method="POST" class="flex flex-col gap-4">
            @csrf
            <input type="text" name="name" placeholder="Nama Pengguna" required
                   class="px-4 py-2 border border-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" />

            <input type="email" name="email" placeholder="Email" required
                   class="px-4 py-2 border border-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" />

            <input type="password" name="password" placeholder="Kata Sandi" required
                   class="px-4 py-2 border border-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" />

            <input type="number" name="phone" placeholder="Nomor Handphone" required
                   class="px-4 py-2 border border-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" />

            <button type="submit"
                    class="bg-blue-900 text-white py-2 font-bold rounded-md hover:bg-blue-800 transition">
                DAFTAR
            </button>
        </form>

        <p class="text-sm mt-4">
            Sudah Memiliki Akun?
            <a href="{{ route('login') }}" class="text-blue-900 font-semibold hover:underline">Masuk</a>
        </p>
    </div>
@endsection
