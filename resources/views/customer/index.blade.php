<div><a href="/">Home</a></div>
<a href="{{  route('customers.create') }}">New customers</a>

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
    @forelse($customers as $key => $customer)
        <tr>
            <td>{{  $customers->firstItem() + $key }}.</td>
            <td>{{  $customer->name }}</td>
            <td>{{  $customer->lastname }}</td>
            <td>{{  $customer->identification_card }}</td>
            <td>{{  $customer->cities }}</td>
            <td>
                <a href="{{  route('employees.edit', $customer) }}">Edit</a>

                <form action="{{  route('employees.delete', $customer) }}" method="post">
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
