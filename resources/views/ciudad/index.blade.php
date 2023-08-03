<div><a href="/">Home</a></div>
<a href="{{  route('cuidad.create') }}">New city</a>

@if(session('message'))
    <div style="color: green;">{{  session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td> No.</td>
        <td>Name</td>
        <td>departamento</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($cuidad as $key => $city)
        <tr>
            <td>{{  $cuidad->firstItem() + $key }}.</td>
            <td>{{  $city->name }}</td>
            <td>{{  $city->created_at->format('F d, Y') }}</td>
            <td>
                <a href="{{  route('$cuidad.edit', $city) }}">Edit</a>

                <form action="{{  route('$cuidad.delete', $city) }}" method="post">
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
