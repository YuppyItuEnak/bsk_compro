<x-layouts.users.layout>
    <div class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl rounded-xl">
                <div class="p-8 sm:p-10 bg-white">

                    <div class="pb-6 border-b border-gray-100">
                        <h3 class="text-2xl font-extrabold text-gray-800 tracking-tight">Informasi Akun</h3>
                        <p class="mt-1 text-sm text-gray-500">Perbarui detail profil, email, dan nomor kontak Anda.</p>
                    </div>

                    <form method="POST" action="{{ route('auth.update', $user->id) }}" class="mt-8"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                            <div class="md:col-span-1 flex flex-col items-center pt-2">
                                <label for="image_url" class="block text-sm font-semibold text-gray-700 mb-4">Foto
                                    Profil</label>

                                <img src="{{ $user->image_url ? asset('storage/' . $user->image_url) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&color=ffffff&background=4f46e5&size=128' }}"
                                    alt="Foto Profil"
                                    class="w-32 h-32 rounded-full object-cover ring-4 ring-offset-2 ring-indigo-400 shadow-xl mb-4">

                                <label for="file_upload"
                                    class="cursor-pointer bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    <i class="fas fa-camera mr-2"></i> Ganti Foto
                                    <input id="file_upload" name="file_upload" type="file" class="sr-only">
                                </label>

                                <p class="text-xs text-gray-400 mt-2">Max. 2MB (JPG/PNG)</p>
                            </div>

                            <div class="md:col-span-2 space-y-6">

                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nama
                                        Lengkap</label>
                                    <input type="text" name="name" id="name"
                                        value="{{ old('name', $user->name) }}" required
                                        class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-3">
                                    @error('name')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" id="email"
                                        value="{{ old('email', $user->email) }}" required
                                        class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-3">
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Nomor
                                        Telepon</label>
                                    <input type="tel" name="phone" id="phone"
                                        value="{{ old('phone', $user->phone) }}"
                                        class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-3">
                                    @error('phone')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <hr class="my-10 border-gray-200">

                        <div class="pb-6">
                            <h3 class="text-2xl font-extrabold text-gray-800 tracking-tight">Perbarui Kata Sandi</h3>
                            <p class="mt-1 text-sm text-gray-500">Pastikan Anda menggunakan kata sandi yang panjang dan
                                acak untuk tetap aman.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi
                                    Baru</label>
                                <input type="password" name="password" id="password" autocomplete="new-password"
                                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-3">
                                <p class="text-gray-400 text-xs mt-1">Biarkan kosong jika tidak ingin mengubah.</p>
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password_confirmation"
                                    class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    autocomplete="new-password"
                                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-3">
                            </div>
                        </div>

                        <div class="flex justify-end mt-10 pt-4 border-t border-gray-100">
                            <button type="submit"
                                class="inline-flex items-center justify-center py-3 px-8 border border-transparent shadow-lg text-base font-semibold rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                                <i class="fas fa-save mr-2"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.users.layout>
