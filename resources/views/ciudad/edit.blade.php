<div style="margin-bottom: 1em;">
    <a href="{{  route('cuidad.index') }}">lista de cuidades</a>
</div>

<h1>Edit city</h1>

@if(session('message'))
    <div style="color: green;">{{  session('message') }}</div>
@endif

<form action="{{  route('cuidad.edit', $city) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter cuidad" value="{{  $city->name }}">
        @error('name')
        <div style="color: red;">{{  $message }}</div>
        @enderror
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>
