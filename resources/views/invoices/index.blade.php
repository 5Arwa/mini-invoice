@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Invoices</h2>
        <a href="{{route('invoice.create')}}" class="btn btn-primary">Add New Invoice</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Invoice Name</th>
                <th>Amount</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
          @foreach($invoices as $invoice)
                <tr>
                    <td>{{$invoice->id }}</td>
                    <td>{{$invoice->invoice_name}} </td>
                    <td>{{$invoice->amount}}</td>
                    <td>{{$invoice->due_date}}</td>
                    <td>
                        <a href="{{route('invoice.edit',$invoice->id)}}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{route('invoice.destroy',$invoice->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this invoice?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
           
                {{-- <tr>
                    <td colspan="5" class="text-center">No invoices found</td>
                </tr> --}}
            @endforeach
        </tbody>

    </table>
</div>
@endsection
