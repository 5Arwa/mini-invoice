@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Invoice</h2>

    <form action="{{route('invoice.update',$invoice->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Customer Name</label>
            <input type="text" name="invoice_name" value="{{ $invoice->invoice_name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Amount</label>
            <input type="number" step="0.01" name="amount" value="{{ $invoice->amount }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Due Date</label>
            <input type="date" name="due_date" value="{{ $invoice->due_date }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('invoice.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
