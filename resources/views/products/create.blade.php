<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Cadastrar Produto
        </h2>
    </x-slot>
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="p-4 bg-white rounded-lg shadow sm:p-8">
            <form method="post" action="{{ route('products.store') }}" class="space-y-6">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="block mt-1 lg:w-3/6" required
                        placeholder="Nome do produto" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <x-text-input id="description" description="description" type="text" class="block mt-1 lg:w-3/6"
                        required placeholder="Description do produto" />
                    <x-input-error class="mt-2" :messages="$errors->get('description')" />
                </div>

                <div>
                    <x-input-label for="price" :value="__('Price')" />
                    <x-text-input id="price" name="price" type="text" class="block mt-1 lg:w-3/6" required
                        placeholder="Preço do produto" />
                    <x-input-error class="mt-2" :messages="$errors->get('price')" />
                </div>

                <div>
                    <x-input-label for="quantity" :value="__('Quantity')" />
                    <x-text-input id="quantity" name="quantity" type="number" class="block mt-1 lg:w-3/6" required
                        placeholder="Quantidade do produto" />
                    <x-input-error class="mt-2" :messages="$errors->get('quantity')" />
                </div>

                {{-- button submit --}}
                <div class="flex justify-start gap-3">
                    <x-primary-button>Cadastrar</x-primary-button>

                    <x-secondary-button>Cancelar</x-secondary-button>
                </div>


            </form>
        </div>

    </div>


</x-app-layout>
