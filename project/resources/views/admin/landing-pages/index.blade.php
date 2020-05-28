@extends('layouts.app')
@section('title', __('headings.admin-users.index'))

@section('page-header')
    <h1>
        <i class="fas fa-user-shield fa-fw mr-2 text-muted"></i>
        @lang('headings.admin-users.index')
    </h1>

    <breadcrumb>
        <breadcrumb-item href="{{ route('home') }}">
            @lang('breadcrumb.common.home')
        </breadcrumb-item>

        <breadcrumb-item active>
            @lang('breadcrumb.users-admin.index')
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
    <data-list
        data-source="{{ route('admin.pagination.landing_pages') }}"
    ></data-list>

    <template id="data-list" slot-scope="modelScope">
        <div>
            <loader :show-loader="isLoading"></loader>
            <div class="card">
                <div class="card-header">
                    <input type="text" v-model="query"
                        class="form-control col-md-4 mb-2 mb-md-0"
                        placeholder="@lang('placeholders.common.search')">
                </div>

                <p v-for="(item, index) in items" :key="index">
                    @{{item}}
                </p>
            </div>
        </div>
    </template>
@endsection
