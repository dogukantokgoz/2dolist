@include('layouts.header')

<br>
<div class="col-md-8 mx-auto">
<ol class="list-group list-group">
    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">Title</div>
            {{$todo->title}}
        </div>
    </li>
</ol>
    <br>
    <ol class="list-group list-group">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Description</div>
                {{$todo->description}}
            </div>
        </li>
    </ol>
    <br>
    <ol class="list-group list-group">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Status</div>
                @if($todo->status == 1)
                    <span class="text-success">Tamamlandı</span>
                @else
                    <span class="text-primary">Devam Ediyor</span>
                @endif
            </div>
                @if($todo->status == 0) <span class="badge bg-primary "> {{$todo->created_at->diffForHumans()}}
                @else <span class="badge bg-success "> ✓ @endif</span>
        </li>
    </ol>
</div>
