@extends('layouts.main')
@section('content')

<div style="margin-top: 20px; display: flex; justify-content: center;">
    <table class="table" style="width: auto; border-collapse: collapse; margin: 0 auto;">
        <thead>
            <tr style="background-color: #667eea;">
                <th style="padding: 8px 16px; text-align: left; border-bottom: 2px solid #dee2e6;">ID</th>
                <th style="padding: 8px 16px; text-align: left; border-bottom: 2px solid #dee2e6;">Задача</th>
                <th style="padding: 8px 16px; text-align: left; border-bottom: 2px solid #dee2e6;">Действие</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($tasks as $task)
    <tr style="border-bottom: 1px solid #dee2e6;">
        <td style="padding: 8px 16px;">{{ $task->id }}</td>
        <td style="padding: 8px 16px;">
            <a href="{{ route('task.show', $task->id) }}" style="text-decoration: none; color: #dee2e6;">
                {{ $task->title }}
            </a>
        </td>
        <td style="padding: 8px 16px;">
        <a href="{{ route('task.edit', $task->id) }}" 
       style="padding: 4px 8px; margin-right: 5px; background-color: #3498db; color: white; text-decoration: none; border-radius: 4px; display: inline-block;">
        Редактировать
    </a>
        <form action = "{{route('task.destroy', $task->id)}}" method="POST">
            @csrf
            @method('DELETE')
         <button type="submit" style="padding: 4px 8px;">Удалить</button>
        </form>    
        </td>
    </tr>
@endforeach
        </tbody>
    </table>
</div>
@endsection 