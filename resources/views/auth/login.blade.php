@extends('layouts.auth', ['title' => 'Login - Admin'])

@section('content')
<div class="flex justify-center items-center h-screen bg-gray-300 px-6">
    <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
        
        {{-- Judul --}}
        <div class="flex justify-center items-center">
            <span class="text-gray-700 font-semibold text-2xl">LOGIN</span>
        </div>

        {{-- Pesan status dari session, misalnya "Berhasil logout" --}}
        @if (session('status'))
            <div class="bg-green-500 text-white p-3 rounded-md shadow-sm mt-3">
                {{ session('status') }}
            </div>
        @endif

        {{-- Form Login --}}
        <form method="POST" class="mt-4" action="{{ route('login') }}">
            @csrf

            {{-- Input Email --}}
            <label class="block">
                <span class="text-gray-700 text-sm">Email</span>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full mt-1 px-3 py-2 border border-gray-400 rounded focus:outline-none focus:ring focus:ring-indigo-300"
                       placeholder="Alamat Email">
                @error('email')
                    <div class="bg-red-200 text-gray-700 text-sm p-2 rounded-md mt-2">
                        {{ $message }}
                    </div>
                @enderror 
            </label>

            {{-- Input Password --}}
            <label class="block mt-3">
                <span class="text-gray-700 text-sm">Password</span>
                <input type="password" name="password"
                       class="w-full mt-1 px-3 py-2 border border-gray-400 rounded focus:outline-none focus:ring focus:ring-indigo-300"
                       placeholder="Password">
                @error('password')
                    <div class="bg-red-200 text-gray-700 text-sm p-2 rounded-md mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </label>

            {{-- Checkbox & Lupa Password --}}
            <div class="flex justify-between items-center mt-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="form-checkbox text-indigo-600">
                    <span class="ml-2 text-gray-600 text-sm">Ingatkan Saya</span>
                </label>

                <a href="{{ route('password.request') }}"
                   class="text-sm text-indigo-700 hover:underline">
                    Lupa Password?
                </a>
            </div>

            {{-- Tombol Login --}}
            <div class="mt-6">
                <button type="submit"
                        class="py-2 px-4 bg-indigo-600 text-white text-sm w-full rounded-md hover:bg-indigo-500 focus:outline-none">
                    LOGIN
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
