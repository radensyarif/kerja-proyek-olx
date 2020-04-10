@extends('dashboard.layout')

@section('content')
<div class="page-content__header">
    <div>
        <h2 class="page-content__header-heading">Create New Admin</h2>
    </div>
</div>
<div class="main-container">
    {{-- <div class="form-wizard-e__content"> --}}
    <div class="form-wizard-e__step-content is-current" data-step-content="1">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.store', ['id' => request('id')]) }}" class="form-wizard__step-form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <div class="input-group input-group-icon iconfont icon-right">
                                    <input name="name" class="form-control" id="name" type="text" placeholder="Name" value="{{ $users->name }}" required>
                                    <span class="input-icon ua-icon-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input name="username" type="username" class="form-control" id="username" placeholder="Username" value="{{ $users->username }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group input-group-icon iconfont icon-right">
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{ $users->email }}" required>
                            <span class="input-icon ua-icon-envelope"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input name="phone_number" type="number" class="form-control" id="email" placeholder="Phone Number" value="{{ $users->phone_number }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="whatsapp_number">Whatsapp Number</label>
                                <input name="whatsapp_number" type="number" class="form-control" id="whatsapp_number" placeholder="Whatsapp Number" value="{{ $users->whatsapp_number }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="30" rows="3" class="form-control" placeholder="Address">{{ $users->address }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-info icon-left mr-3">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
