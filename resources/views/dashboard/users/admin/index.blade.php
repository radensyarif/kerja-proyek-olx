@extends('dashboard.layout')

@section('content')
<div class="page-content__header">
    <div>
        <h2 class="page-content__header-heading">Admin</h2>
    </div>
    <div class="align-right">
        <a href="{{ route('admin.form') }}" class="btn btn-success mb-2 mr-3" type="button">
            <span class="ua-icon-plus-circle-alt m-im-sidenav__template-add-icon mr-2"></span>
            Add
        </a>
    </div>
</div>
<div class="col-lg-12">
    <div class="main-container table-container">
        <table class="table table__actions">
            <thead>
                <tr>
                    {{-- <th class="table__checkbox">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch5">
                            <label class="custom-control-label" for="ch5"></label>
                        </div>
                    </th> --}}
                    <th>No.</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                {{-- <tr class="is-selected">
                    <td class="table__checkbox">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" checked="" id="ch6">
                            <label class="custom-control-label" for="ch6"></label>
                        </div>
                    </td>
                </tr> --}}
                @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone_number }}</td>
                    <td>{{ $item->address }}</td>
                    <td class="table__cell-actions">
                        <div class="table__cell-actions-wrap">
                            <a href="{{ route('admin.form',['id' => $item->id]) }}" class="table__cell-actions-item table__cell-actions-icon" data-toggle="tooltip" data-placement="top" title="Edit">
                                <span class="ua-icon-profile-edit m-social-feed__nav-menu-icon"></span>
                            </a>
                            <a href="{{ route('admin.delete',['id' => $item->id]) }}" class="table__cell-actions-item table__cell-actions-icon" data-toggle="tooltip" data-placement="top" title="Delete">
                                <span class="ua-icon-trash m-im-toolbox__item-icon"></span>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
