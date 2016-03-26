@extends('layouts.main')

@section('title')
    Page Management

    <div class="pull-right">
        <a href="/admin/pages/create" class="btn btn-primary">Create</a>
    </div>
@endsection
@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Created</th>
            </tr>
        </thead>

        <tbody>
            @foreach($pages as $page)
            <tr>
                <td>{{ $page->name }}</td>
                <td>{{ $page->slug }}</td>
                <td>{{ $page->created_at->toFormattedDateString() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection