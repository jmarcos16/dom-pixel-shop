<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Catálago de Produtos
        </h2>
    </x-slot>
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-end mb-5">
            <a href="{{ route('products.create') }}"
                class="px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-md hover:bg-green-500">Cadastrar
                Produto</a>
        </div>
        <div class="overflow-hidden border border-gray-200 rounded-lg shadow-md">
            <table class="w-full text-sm text-left text-gray-500 bg-white border-collapse">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Price</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Quantity</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Updated At</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="align-middle border-t border-gray-100 divide-y divide-gray-100">
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-50">
                            <th class="px-6 py-4">{{ $product->id }}</th>
                            <td class="px-6 py-4">{{ $product->name }}</td>
                            <td class="px-6 py-4">R$ {{ $product->price }}</td>
                            <td class="px-6 py-4">{{ $product->quantity }}</td>
                            <td class="px-6 py-4">{{ $product->updated_at->format('d/m/Y H:i:s') }}</td>
                            <td class="px-6 py-4">
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    <form id="destroy" method="POST" action="{{route('products.destroy', $product)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><x-icons.delete /></button>
                                    </form>
                                    <a href="{{route('products.edit', $product)}}">
                                        <x-icons.edit />  
                                    </a>
                                </div>
                            </td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script>
            const formDelete = document.getElementById('destroy');
            
            formDelete.addEventListener('submit', (event) => {
                if(confirm('Deseja realmente excluir este produto?')){
                    formDelete.submit();
                }else{
                    event.preventDefault();
                }
            });
                  



        </script>
    @endpush

</x-app-layout>
