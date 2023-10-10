<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar Produto {{$product->name}}
        </h2>
    </x-slot>
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="p-4 bg-white rounded-lg shadow sm:p-8">
            <form method="post" action="{{ route('products.update', $product) }}" class="space-y-6">
                @csrf
                @method('PUT')
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="block mt-1 lg:w-3/6" required
                        placeholder="Nome do produto" :value="old('name', $product->name)" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <x-text-input id="description" name="description" type="text" class="block mt-1 lg:w-3/6"
                        required placeholder="Description do produto"
                        :value="old('description', $product->description)"/>
                        <x-input-error class="mt-2" :messages="$errors->get('description')" />
                </div>

                <div>
                    <x-input-label for="price" :value="__('Price')" />
                    <x-text-input id="price" name="price" type="text" class="block mt-1 lg:w-3/6" required
                        placeholder="Preço do produto" :value="old('price', $product->price)" />
                    <x-input-error class="mt-2" :messages="$errors->get('price')" />
                </div>

                <div>
                    <x-input-label for="quantity" :value="__('Quantity')" />
                    <x-text-input id="quantity" name="quantity" type="number" class="block mt-1 lg:w-3/6" required
                        placeholder="Quantidade do produto" :value="old('quantity', $product->quantity)" />
                    <x-input-error class="mt-2" :messages="$errors->get('quantity')" />
                </div>

                {{-- button submit --}}
                <div class="flex justify-start gap-3">
                    <x-primary-button>Atualizar</x-primary-button>

                    <a href="{{route('products.index')}}">
                        <x-secondary-button>Cancelar</x-secondary-button>
                    </a>
                </div>


            </form>
        </div>

    </div>

    @push('scripts')
    <script>
        const price = document.getElementById('price');

            price.addEventListener('keyup', (e) => {
                price.value = price.value.replace(/\D/g, '');
                price.value = price.value.replace(/(\d)(\d{2})$/, '$1.$2');
            });

    </script>
    @endpush

</x-app-layout>