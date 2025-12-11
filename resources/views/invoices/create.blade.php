@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Invoice</h2>

    <form action="{{route('invoice.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Invoice Name</label>
            <input type="text" name="invoice_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Amount</label>
            <input type="number" step="0.01" name="amount" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Due Date</label>
            <input type="date" name="due_date" class="form-control" required>
        </div>

        <button class="btn btn-success">Save</button>
        <a href="{{ route('invoice.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
