<div><a href="/">Home</a></div>
<a href="{{  route('employees.create') }}">New employee</a>

@if(session('message'))
    <div style="color: green;">{{  session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td> No.</td>
        <td>Name</td>
        <td>lastname</td>
        <td>identification card</td>
        <td>city</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($employees as $key => $employee)
        <tr>
            <td>{{  $employees->firstItem() + $key }}.</td>
            <td>{{  $employee->name }}</td>
            <td>{{  $employee->lastname }}</td>
            <td>{{  $employee->identification_card }}</td>
            <td>{{  $employee->cities }}</td>
            <td>
                <a href="{{  route('employees.edit', $employee) }}">Edit</a>

                <form action="{{  route('employees.delete', $employee) }}" method="post">
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
