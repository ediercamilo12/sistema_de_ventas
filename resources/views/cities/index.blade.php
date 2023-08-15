<div><a href="/">Home</a></div>
<a href="{{  route('cities.create') }}">New City</a>

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
    @forelse($City as $key => $cities)
        <tr>
            <td>{{  $City->firstItem() + $key }}.</td>
            <td>{{  $cities->name }}</td>
            <td>{{  $cities->created_at->format('F d, Y') }}</td>
            <td>
                <a href="{{  route('cities.edit', $cities) }}">Edit</a>

                <form action="{{  route('cities.delete', $cities) }}" method="post">
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
