@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('task.store') }}" method="POST" style="max-width: 800px; margin: 0 auto;">
        @csrf
        
        <div style="margin-bottom: 1.5rem;">
            <label for="title" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Название задачи</label>
            <input 
            type="text" 
            required title="Заполните заголовок задачи"
                id="title" 
                name="title"
                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        
        <div style="margin-bottom: 1.5rem;">
            <label for="description" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Описание</label>
            <textarea 
            required title="Заполните описание задачи"
                id="description" 
                name="description"
                rows="6"
                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; resize: vertical;"></textarea>
        </div>
        
        <button type="submit" style="padding: 10px 25px; background-color: #667eea; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Сохранить 
        </button>
    </form>
</div>
@endsection
