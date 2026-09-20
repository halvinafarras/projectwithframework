<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <x-card>
                <h3 class="text-lg font-semibold mb-2">Ringkasan Hari Ini</h3>
                <p class="text-gray-600">Selamat datang, {{ auth()->user()->name }}.</p>
            </x-card>

            <x-card>
                <h3 class="text-lg font-semibold mb-4">Status Stok Produk</h3>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead>
                            <tr class="border-b">
                                <th class="py-3">Produk</th>
                                <th class="py-3">Stok</th>
                                <th class="py-3 text-right">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="border-b">
                                <td class="py-3">Beras</td>
                                <td class="py-3">25</td>
                                <td class="py-3 text-right">
                                    <x-badge status="Aman" />
                                </td>
                            </tr>

                            <tr class="border-b">
                                <td class="py-3">Minyak Goreng</td>
                                <td class="py-3">7</td>
                                <td class="py-3 text-right">
                                    <x-badge status="Menipis" />
                                </td>
                            </tr>

                            <tr>
                                <td class="py-3">Gula</td>
                                <td class="py-3">0</td>
                                <td class="py-3 text-right">
                                    <x-badge status="Habis" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>