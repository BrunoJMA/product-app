<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('categories.list') }}
        </h2>
        <a href="{{ route('categories.create') }}" class="text-white border p-1 rounded-md bg-indigo-600 hover:bg-indigo-700">
            {{ __('categories.create') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto space-y-4">
            @foreach ($categories as $category)
                <div class="bg-white dark:bg-gray-800 p-4 rounded shadow text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold">{{ $category->name }}</h3>
                    <p>{{ $category->description }}</p>
                    <div class="mt-2 space-x-2">
                        <a href="{{ route('categories.edit', $category) }}" class="text-blue-500 hover:underline">{{ __('categories.edit') }}</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">{{ __('categories.delete') }}</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
