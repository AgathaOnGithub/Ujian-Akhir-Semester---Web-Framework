@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1 class="mb-4">Dashboard</h1>

    <!-- Tambahkan tombol Create -->
    <a href="{{ route('items.create') }}" class="btn btn-success mb-3">Add New Item</a>

    <!-- Chart Section -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Traffic Summary</h5>
            <canvas id="trafficChart" style="max-width: 400px; max-height: 300px; margin: 0 auto;"></canvas>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $loop->iteration + ($items->currentPage() - 1) * $items->perPage() }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->year }}</td>
                <td>
                    <a href="{{ route('items.edit', $item) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('items.destroy', $item) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-between align-items-center mt-3">
        <!-- Showing per page -->
        <div>
            Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} of {{ $items->total() }} results
        </div>
        
        <!-- Pagination navigation -->
        <div>
            {{ $items->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

<script>
    // Data untuk Chart
    const trafficData = {
        labels: ['24 Jun', '08 Jul', '16 Jul', '24 Jul'],
        datasets: [
            {
                label: 'Web',
                data: [10, 50, 70, 100],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            },
            {
                label: 'Mobile',
                data: [5, 30, 60, 80],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
            },
        ],
    };

    const config = {
        type: 'bar',
        data: trafficData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    };

    const trafficChart = new Chart(
        document.getElementById('trafficChart'),
        config
    );
</script>
@endsection
