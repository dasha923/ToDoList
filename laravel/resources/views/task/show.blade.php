@extends('layouts.main')
@section('content')
<div style="margin-top: 20px; margin-bottom: 15px; padding: 15px; border: 1px solid #dee2e6;; border-radius: 6px;">
    <a href="{{ route('task.show', $task->id) }}" style="text-decoration: none; color: #eee; font-weight:bold;">
        <div><strong style="color: #dee2e6;">Зaдача:</strong> {{ $task->title }}</div>
        <div style="margin-top: 10px;">
            <strong style="color: #dee2e6;">Описание:</strong>
            <div style="margin-top: 5px; color:  #eee; font-weight:bold; padding-left: 10px;">
                {{ $task->description }}
            </div>
        </div>
    </a>
</div>
@endsection