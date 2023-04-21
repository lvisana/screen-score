@if ($errors->has($name ?? $name))
    <span class="text-danger"> {{$errors->first($name ?? $name)}} </span>
@endif