@props(['_method' => 'post', 'caption' => ''])
<div class="flex flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        {{-- <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
            alt="Your Company"> --}}
        <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">{{ $caption }}
        </h2>
    </div>

    <div class="mt-1 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6"{{ $attributes }}>
            @method($_method)
            @csrf
            {{ $slot }}
        </form>
    </div>
</div>
