@extends('layouts.app')

@section('title')
    {{ __('Chi tiết bài viết') }}
@endsection

@section('content')
    <div class="text-white px-2">
        <x-ui.breadcrumb :is-admin="0" is-dark :breadcrumbs="[
            ['url' => 'client.post', 'label' => 'Bài viết'],
            ['url' => 'client.post.details', 'param' => $data->id, 'label' => 'Chi tiết bài viết'],
        ]" />

        <h1 class="text-2xl capitalize mt-2">
            {{ $data->title }}
        </h1>

        <div class="mb-3 mt-5">
            <h2>Tác giản:</h2>
            <p class="mb-3 font-normal text-gray-400 test-sm">{{ $data->user->name }} ( {{ $data->user->email }})</p>
        </div>

        <div class="mb-3 mt-5">
            <h2 class="mb-1 font-bold tracking-tight text-gray-100">Ngày tạo:</h2>
            <p class="mb-3 font-normal text-gray-400 test-sm">{{ $data->formatted_created_at }}</p>
        </div>

        <div>
            <h2 class="mb-1 font-bold tracking-tight text-gray-100">Ảnh tiêu đề:</h2>
            <img src="{{ asset('storage/' . $data->thumbnail ?? '') }}" alt="{{ $data->title }}" class="size-52 rounded-md">
        </div>

        <div class="mb-3 mt-5">
            <h2 class="mb-1 font-bold tracking-tight text-gray-100">Nội dung bài viết:</h2>

            <div class="mb-3 font-normal text-gray-400 test-sm">
                {!! $data->content_html !!}
            </div>
        </div>
    </div>
@endsection


<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            fetch("{{ route('post.increase.view', $data->id) }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json"
                }
            });
        }, 5000);
    });
</script>
