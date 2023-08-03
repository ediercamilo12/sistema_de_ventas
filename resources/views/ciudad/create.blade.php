<div style="margin-bottom: 1em;">
    <a href="{{  route('cuidad.index') }}">departamento List</a>
</div>

<h1>Create Departamento</h1>

@if(session('message'))
    <div style="color: green;">{{  session('message') }}</div>
@endif

<form action="{{  route('ciudad.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter city">
        @error('name')
        <div style="color: red;">{{  $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="departamento_id">departamento</label>
        <select name="departamento_id" id="departamento_id">
            <option value="">Select</option>
            @foreach($departamento as $department)
                <option
                    @if($department->id === (int)old('departamento_id'))
                        selected
                    @endif
                    value="{{  $department->id }}">{{  $department->name }}</option>
            @endforeach
        </select>
        @error('departamento_id')
        <div style="color: red;">{{  $message }}</div>
        @enderror()
    </div>


    <div>
        <button type="submit">Submit</button>
    </div>


</form>
