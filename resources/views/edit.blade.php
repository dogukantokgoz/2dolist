@include('layouts.header')

<div class="col-md-8 mx-auto">
    <form method="POST" action="{{route('update')}}">
        @method('PUT')
        @csrf
        <input type="hidden" name="todo_id" value="{{$todo->id}}">
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" value="{{$todo->title}}" class="form-control" name="title" placeholder="Add title">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Add desscription" rows="3">{{$todo->description}}</textarea>
        </div>
        <div class="mb-3">
            <select class="form-select" name="status">
                <option value="0" @if($todo->status == 0) selected @endif>Devam Ediyor</option>
                <option value="1" @if($todo->status == 1) selected @endif>Tamamlandı</option>
            </select>
        </div>
<div align="right">
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
    <form style="display:inline-block" method="post" action="{{route('destroy')}}" class="inner">
        @csrf
        @method('DELETE')
        <button value="{{$todo->id}}" type="submit" name="todo_id" class="btn btn-danger">Sil</button>
    </form>
</div>
</div>

