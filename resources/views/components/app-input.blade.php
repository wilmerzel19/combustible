@props([
    'valor'=>'',
    'text'=>'',
    'id'=>'',
    'required'=>false,
])


<div class="col-span-1">
    <label for="{{ $id }}" class="block text-sm font-medium leading-5 text-gray-700">
        {{ $text }}
    </label>
    <div class="relative mt-1 rounded-md shadow-sm">
        <input type="text"
        id="{{ $id }}"
        name="{{ $id }}"
        value="{{ $valor }}"
        class="block w-full p-4 focus:border fofcus:border-red- 500 redorm-input sm:text-sm sm:leading-5"
        required/>
    </div>
</div>
