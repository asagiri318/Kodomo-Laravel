@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-3xl font-bold">新規スポット登録</h1>
    <form method="POST" action="{{ route('spot.store') }}" enctype="multipart/form-data" class="mt-5">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">タイトル</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="prefecture" class="block text-sm font-medium text-gray-700">都道府県</label>
            <input type="text" name="prefecture" id="prefecture" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="city" class="block text-sm font-medium text-gray-700">市区町村</label>
            <input type="text" name="city" id="city" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">内容</label>
            <textarea name="description" id="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required></textarea>
        </div>
        <div class="mb-4">
            <label for="date_visited" class="block text-sm font-medium text-gray-700">日付</label>
            <input type="date" name="date_visited" id="date_visited" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="child_age_range" class="block text-sm font-medium text-gray-700">お子様の年齢</label>
            <input type="text" name="child_age_range" id="child_age_range" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="rating" class="block text-sm font-medium text-gray-700">おすすめ度（☆）</label>
            <input type="number" name="rating" id="rating" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required min="1" max="5">
        </div>
        <div class="mb-4">
            <label for="photo" class="block text-sm font-medium text-gray-700">写真</label>
            <input type="file" name="photo" id="photo" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="spot_url" class="block text-sm font-medium text-gray-700">スポットのURL</label>
            <input type="url" name="spot_url" id="spot_url" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">登録</button>
    </form>
</div>
@endsection
