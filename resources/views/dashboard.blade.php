@extends('layout.index')

@section('content')
    <div>Hello this is the dashboard file</div>



    @can('isAdmin')
        <h3>Admin Dashboard</h3>
    @endcan

    @can('isManager')
        <h3>User Dashboard</h3>
    @endcan

    @can('isEmployee')
        <h3>Author Dashboard</h3>
    @endcan

    @can('isCustomer')
        <h3>Editor Dashboard</h3>
    @endcan
@endsection
