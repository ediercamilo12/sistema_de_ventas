<div style="margin-bottom: 1em;">
    <a href="{{  route('cities.index') }}">Category list</a>
</div>

<h1>Edit City</h1>

@if(session('message'))
    <div style="color: green;">{{  session('message') }}</div>
@endif

<form action="{{  route('cities.edit', $city) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter City" value="{{  $city->name }}">
        @error('name')
        <div style="color: red;">{{  $message }}</div>
        @enderror


    </div>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>
