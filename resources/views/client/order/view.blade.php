@extends('layouts.app')

@section('title')
    {{ __('Danh sách đơn hàng') }}
@endsection

@php
    $columns = ['Khách hàng', 'Tổng tiền', 'Tổng SL', 'Thời gian đặt', 'Ghi chú', 'Trạng thái', 'Hành động'];
@endphp

@section('content')
    
@endsection

<script>
    setTimeout(() => {
        document.querySelector('#alert')?.remove();
    }, 3000);
</script>
