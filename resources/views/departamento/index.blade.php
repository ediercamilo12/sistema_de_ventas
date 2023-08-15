<div><a href="/">Home</a></div>
<a href="{{  route('departamento.create') }}">New departamento</a>

@if(session('message'))
    <div style="color: green;">{{  session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td> No.</td>
        <td>Name</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($departamento as $key => $department)
        <tr>
            <td>{{  $departamento->firstItem() + $key }}.</td>
            <td>{{  $department->name }}</td>
            <td>{{  $department->created_at->format('F d, Y') }}</td>
            <td>
                <a href="{{  route('departamento.edit', $department) }}">Edit</a>

                <form action="{{  route('departamento.delete', $department) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
