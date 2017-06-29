@extends('admin.layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Laravel Admin
            </div>

            <div class="links">
                <a href="{{url('admin')}}">Admin</a>
                <a href="{{url('admin/log-viewer')}}">LOg Viewer</a>

            </div>
        </div>
    </div>
@endsection