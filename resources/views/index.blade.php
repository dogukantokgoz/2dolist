@include('layouts.header')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<head>
    <title>2dolist | Anasayfa</title>
</head>
<body>

<div class="col-md-8 mx-auto">
    <p><h2>Yapılacaklar Listesi</h2>
    <div class="d-flex justify-content-end">
        <a href="{{route('create')}}"><button type="button" name="create" class="btn btn-dark">Oluştur</button></a>
    </div>
    </p>

    @if(count($todos) > 0)

    <table class="table">
        <thead>
        <tr>
            <th>Başlık</th>
            <th>Oluşturulma Tarihi</th>
            <th>Durum</th>
            <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($todos as $todo)
        <tr class="@if($todo->status == 0)table-primary @else table-success @endif">
            <td>{{$todo->title}}</td>
            <td>{{$todo->created_at->diffForHumans()}}</td>
            <td>@if($todo->status == 0) Devam Ediyor @else Tamamlandı @endif</td>
            <td>
                <a href="{{route('edit', $todo->id)}}"><button type="button" class="btn btn-primary">Düzenle</button></a>
                <a href="{{route('show', $todo->id)}}"><button type="button" class="btn btn-secondary">Göster</button></a>
                <form style="display:inline-block" method="post" action="{{route('destroy')}}" class="inner">
                    @csrf
                    @method('DELETE')
                    <button value="{{$todo->id}}" type="submit" name="todo_id" class="btn btn-danger">Sil</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <div class="d-flex justify-content-end"></div></th>
            </tr>
            </thead>
            <tbody>
            <tr class="table-light">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><p><h5>Yapılacaklar listeniz boş</h5>
                </td>
            </tr>
            </tbody>
        </table>
    @endif
</div>
</div>
</body>


