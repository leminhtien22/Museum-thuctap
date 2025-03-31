@extends('layouts.app')

@section('title')
    {{ __('Danh sách bài viết') }}
@endsection

@php
    $searching = request()->get('q') ?? '';
@endphp

@section('content')
    <div class="px-2">
        <x-ui.breadcrumb :is-admin="0" is-dark :breadcrumbs="[['url' => 'client.exhibition', 'label' => 'Bài viết']]" />

        <h1 class="text-2xl text-white capitalize">
            danh sách bài viết
        </h1>

        <form class="max-w-md mx-auto" action="{{ route('client.post') }}" method="GET">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Tìm</label>

            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" name="q" value="{{ $searching }}"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tìm kiếm bài viết..." required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    {{ __('Tìm kiếm') }}
                </button>
            </div>
        </form>



        <div class="mt-4 grid grid-cols-2 sm:grid-cols-4 gap-4">
            @forelse ($data as $item)
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('client.post.details', $item->id) }}">
                        <img class="rounded-t-lg object-cover aspect-video" src="{{ asset('storage/' . $item->thumbnail) }}"
                            alt="" />
                    </a>

                    <div class="p-5">
                        <a href="{{ route('client.post.details', $item->id) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white truncate">
                                {{ $item->title }}
                            </h5>
                        </a>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-1">
                            {{ $item->content_text }}
                        </p>

                        <p class="font-normal line-clamp-1 text-gray-700">
                            <span class="font-semibold">Tác giả</span>
                            {{ $item->user->name }}
                        </p>

                        <p class="font-normal line-clamp-1 text-gray-700">
                            <span class="font-semibold">Đã tạo lúc</span>
                            {{ $item->formatted_created_at }}
                        </p>

                        <div>
                            <a href="{{ route('client.post.details', $item->id) }}"
                                class="inline-flex mt-3 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Xem chi tiết
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-4">
                    <x-ui.alert type="warning">
                        {{ $searching ? 'Không tìm thấy bài viết với từ khoá ' . $searching . '' : 'Chưa có bài viết nào' }}
                    </x-ui.alert>
                </div>
            @endforelse

        </div>
    </div>
@endsection
