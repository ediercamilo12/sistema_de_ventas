<div><a href="/">Home</a></div>
<a href="{{  route('products.create') }}">New Product</a>

@if(session('message'))
    <div style="color: green;">{{  session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td> No.</td>
        <td>Name</td>
        <td>Price</td>
        <td>Category</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($products as $key => $product)
        <tr>
            <td>{{  $products->firstItem() + $key }}.</td>
            <td>{{  $product->name }}</td>
            <td>{{  $product->price }}</td>
            <td>{{  $product->category->name }}</td>
            <td>
                <a href="{{  route('products.edit', $product) }}">Edit</a>

                <form action="{{  route('products.delete', $product) }}" method="post">
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
