@extends('layout.appauth')
@section('title', 'Produk')

@section('content')
<div class="max-w-6xl mx-auto mt-20 px-4">
    <div class="bg-white p-6 rounded-xl shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Daftar Produk</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-md shadow-sm text-sm">
                <thead class="bg-gray-100 text-gray-700 text-left">
                    <tr>
                        <th class="py-3 px-4 border-b">No</th>
                        <th class="py-3 px-4 border-b">Nama Produk</th>
                        <th class="py-3 px-4 border-b">Deskripsi Produk</th>
                        <th class="py-3 px-4 border-b">Harga Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nama as $index => $item)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">{{ $index + 1 }}</td>
                            <td class="py-2 px-4 border-b">{{ $item }}</td>
                            <td class="py-2 px-4 border-b">{{ $desc[$index] }}</td>
                            <td class="py-2 px-4 border-b">Rp{{ number_format($harga[$index], 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           <div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('/path/to/your/background.jpg');">
  <form action="{{ route('produk.simpan') }}" method="POST" class="bg-white bg-opacity-90 p-6 rounded shadow w-full max-w-md">
    @csrf
    <h1 class="text-2xl font-bold text-center mb-6">Input Produk</h1>

    <div class="mb-4 flex items-center">
      <label for="nama" class="w-24 font-semibold text-black">Nama:</label>
      <input type="text" id="nama" name="nama" class="flex-1 border border-gray-400 p-1 rounded" required>
    </div>

    <div class="mb-4 flex items-start">
      <label for="deskripsi" class="w-24 font-semibold text-black mt-1">Deskripsi:</label>
      <textarea id="deskripsi" name="deskripsi" class="flex-1 border border-gray-400 p-1 rounded" rows="3" required></textarea>
    </div>

    <div class="mb-4 flex items-center">
      <label for="harga" class="w-24 font-semibold text-black">Harga:</label>
      <input type="number" id="harga" name="harga" class="flex-1 border border-gray-400 p-1 rounded" required>
    </div>

    <div class="text-left">
      <button type="submit" class="border border-gray-600 px-2 py-1 rounded text-sm hover:bg-gray-100">
        Simpan
      </button>
    </div>
  </form>
        </div>
    </div>
</div>
@endsection

