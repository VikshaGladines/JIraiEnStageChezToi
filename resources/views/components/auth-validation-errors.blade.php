@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            <p class="text-danger">{{ __('Mauvais mot de passe ou adresse mail') }}</p>
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
               
            @endforeach
        </ul>
    </div>
@endif
