@include('layouts.header')

<head>
    <title>2dolist | Silinenler</title>
</head>
<body>
<div class="col-md-6 mx-auto">
    <p><h2>SİLİNENLER</h2>

            @if(count($todos) > 0)
                <table class="table">
                    <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>
                            <div class="d-flex justify-content-end">Seçenekler</div></th>
                    </tr>
                    </thead>
                    <tbody>
            @foreach ($todos as $todo)
                <tr class="table-light">
                    <td>{{$todo->title}}</td>
                    <td>
                        <div class="d-flex justify-content-end">

                            <a href="{{route('recover', $todo->id)}}"><button type="submit" name="recover" class="btn btn-primary">Geri Yükle</button></a>
                            <a href="{{route('delete', $todo->id)}}"><button type="submit" name="recover" class="btn btn-danger">Sil</button></a>
                        </div>
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
            <td><p><h5>Silinenler listeniz boş</h5></td>
            <td>
            </td>
        </tr>
        </tbody>
        </table>
    @endif
</div>
</div>
</body>


