@extends('layouts.app_user')
@section('title','Like')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
            @foreach($products ?? [] as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}" target="_blank" title="{{ $item->pro_name }}">{{ $item->pro_name }}</a>
                    </td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
