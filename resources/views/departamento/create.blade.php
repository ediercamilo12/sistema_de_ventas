<div style="margin-bottom: 1em;">
    <a href="{{  route('departamento.index') }}">departamento List</a>
</div>

<h1>Create Departamento</h1>

@if(session('message'))
    <div style="color: green;">{{  session('message') }}</div>
@endif

<form action="{{  route('departamento.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter departamento">
        @error('name')
        <div style="color: red;">{{  $message }}</div>
        @enderror
    </div>


    <div>
        <button type="submit">Submit</button>
    </div>


</form>
