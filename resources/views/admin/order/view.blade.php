@extends('layouts.dashboard')

@section('title')
    {{ __('Quản lý đơn hàng') }}
@endsection

@php
    $columns = ['Khách hàng', 'Tổng tiền', 'Tổng SL', 'Thời gian đặt', 'Ghi chú', 'Trạng thái', 'Hành động'];
@endphp

@section('content')
    <x-ui.breadcrumb :breadcrumbs="[['url' => 'admin.order', 'label' => 'Quản lý đơn hàng']]" />

    <!-- Start coding here -->
    <x-common.section-action title="Quản lý đơn hàng" description="Danh sách đơn hàng trong hệ thống">
        <x-ui.button :href="route('admin.order.create')">
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-2 -ml-1" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path
                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                </svg>
            </x-slot>

            <span>Tạo đơn tại quầy</span>
        </x-ui.button>
    </x-common.section-action>

    @if (session('success'))
        <x-ui.alert type="success">
            {{ session('success') }}
        </x-ui.alert>
    @endif

    <x-ui.table :columns="$columns">
        <x-slot:body>
            @forelse ($data as $item)
                <x-ui.table-row>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <p>
                            {{ $item->user->name }}
                        </p>

                        <p>
                            {{ $item->user->email }}
                        </p>
                    </th>

                    <td class="px-6 py-4  truncate max-w-[100px]">
                        <a href="{{ route('admin.order.edit', $item->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            {{ $item->formatted_total_price }}
                        </a>
                    </td>

                    <td class="px-6 py-4  truncate max-w-[100px]">
                        {{ $item->total_quantity }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $item->formatted_created_at }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $item->notes }}
                    </td>

                    <td class="px-6 py-4">
                        <x-ui.badge text="{{ $item->formatted_is_paid }}" :color="$item->is_paid ? 'green' : 'red'" />
                    </td>

                    <td class="px-6 py-4 text-nowrap">
                        <a href={{ route('admin.order.edit', $item->id) }}
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline {{ $item->role == 'admin' ? 'hidden' : '' }}">
                            {{ __('Chỉnh sửa') }}
                        </a>

                        <a href={{ route('admin.order.delete', $item->id) }}
                            class="font-medium text-red-600 dark:text-red-500 hover:underline ml-4 {{ $item->role == 'admin' ? 'hidden' : '' }}">
                            {{ __('Xoá') }}
                        </a>
                    </td>
                </x-ui.table-row>
            @empty
                <x-ui.table-row>
                    <td class="px-6 py-4 text-center dark:text-white" colspan="{{ count($columns) }}">
                        Không có dữ liệu
                    </td>
                </x-ui.table-row>
            @endforelse
        </x-slot:body>
    </x-ui.table>

    <div class="mt-4 bg-white dark:bg-gray-800 p-4 rounded-lg shadow sm:flex sm:items-center sm:justify-between">
        <x-common.pagination-info :paginator="$data" unit="đơn hàng" />
        <x-ui.pagination :paginator="$data" />
    </div>
@endsection

<script>
    setTimeout(() => {
        document.querySelector('#alert')?.remove();
    }, 3000);
</script>