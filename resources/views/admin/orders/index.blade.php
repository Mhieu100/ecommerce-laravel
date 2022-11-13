@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <h3>My Orders</h3>
                </div>
                <div class="card-body bg-contents">

                    <form action="" method="get">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Filler by Date</label>
                                <input type="date" name="date"  value=" {{ Request::get('status') == '' ? 'selected' : '' }} 'date') ?? date('Y-m-d') }}" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="">Filler by Status</label>
                                <select name="status" class="form-control p-3" id="">
                                    <option value="">Select All Status</option>
                                    <option value="is progress" {{ Request::get('status') == 'is progress' ? 'selected' : '' }} >Is Progress</option>
                                    <option value="completed" {{ Request::get('status') == 'completed' ? 'selected' : '' }} >Completed</option>
                                    <option value="pending" {{ Request::get('status') == 'pending' ? 'selected' : '' }} >Pending</option>
                                    <option value="cancelled" {{ Request::get('status') == 'cancelled' ? 'selected' : '' }} >Cancelled</option>
                                    <option value="out-for-delivery" {{ Request::get('status') == 'out-for-delivery' ? 'selected' : '' }} >Our For Delivery</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>Order ID</th>
                                <th>Tracking No</th>
                                <th>Username</th>
                                <th>Payment Mode</th>
                                <th>Ordered Date</th>
                                <th>Status Message</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->tracking_no }}</td>
                                        <td>{{ $order->fullname }}</td>
                                        <td>{{ $order->payment_mode }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->status_message }}</td>
                                        <td>
                                            <a href="{{ url('admin/orders/' . $order->id) }}"
                                                class="btn btn-primary btn-sm">Vỉew</a>
                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="7">No Orders Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
