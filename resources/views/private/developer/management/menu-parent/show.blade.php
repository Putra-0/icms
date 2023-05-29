@extends('private.templates.layout')

@section('header')
    rincian menu parent
@endsection

@section('container')
    <x-button-link href="{{ route('developer.management.user.menu.parent.index') }}" label="kembali"
        class="rounded-pill btn btn-md btn-outline-primary mb-3" icon="fa-fw fas fa-arrow-left" />

    <div class="row">
        <div class="col-12 col-md">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <x-form-input-row-readonly type="text" name="order" label="urutan"
                                value="{{ $menuParent->order }}" class="col-md-4" />
                        </div>
                        <div class="row">
                            <x-form-input-row-readonly type="text" name="name" label="nama"
                                value="{{ $menuParent->name }}" class="col-md-4" />
                        </div>
                        <div class="row">
                            <x-form-input-row-readonly type="text" name="icon" label="warna"
                                value="{{ $menuParent->icon }}" class="col-md-4" />
                        </div>
                        <div class="row">
                            <x-form-input-row-readonly type="text" name="prefix" label="prefix"
                                value="{{ $menuParent->prefix }}" class="col-md-4" />
                        </div>
                        <div class="row">
                            <x-form-input-row-readonly type="text" name="url" label="url"
                                value="{{ $menuParent->url }}" class="col-md-4" />
                        </div>
                        <div class="row">
                            <x-form-input-row-readonly type="text" name="created_at" label="dibuat"
                                value="{{ $menuParent->created_at->diffForHumans() . ', ' . $menuParent->created_at->format('d-m-Y, H:i:s') }}"
                                class="col-md-6" />
                            <x-form-input-row-readonly type="text" name="updated_at" label="diubah"
                                value="{{ $menuParent->updated_at->diffForHumans() . ', ' . $menuParent->updated_at->format('d-m-Y, H:i:s') }}"
                                class="col-md-6" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
