<div style="margin-bottom: 1em;">
    <a href="{{  route('customers.index') }}">customers List</a>
</div>

<h1>Create customers</h1>

@if(session('message'))
    <div style="color: green;">{{  session('message') }}</div>
@endif

<form action="{{  route('customers.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter customers" value="{{  old('name') }}">
        @error('name')
        <div style="color: red;">{{  $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="description">lastname</label>
        <input type="text" name="lastname" id="lastname" placeholder="Enter lastname" value="{{  old('lastname') }}">
        @error('price')
        <div style="color: red;">{{  $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="identification_card">identification card</label>
        <input type="number" name="identification_card" id="identification_card " placeholder="Enter identification card" value="{{  old('identification_card') }}">
        @error('price')
        <div style="color: red;">{{  $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="cities_id">city</label>
        <select name="cities_id" id="cities_id">
            <option value="">Select</option>
            @foreach($cities as $city)
                <option
                    @if($city->id === (int)old('cities_id'))
                        selected
                @endif
                value="{{  $city->id }}">{{  $city->name }}</option>
            @endforeach
        </select>
        @error('cities_id')
        <div style="color: red;">{{  $message }}</div>
        @enderror()
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>


</form>
