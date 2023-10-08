@include('layouts.header')

<div class="col-md-6 mx-auto my-5">
<form method="POST" action="{{route('store')}}">
    @csrf
<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add title">
</div>
<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea class="form-control" name="description" placeholder="Add desscription" rows="3"></textarea>
</div>
    <div align="right">
    <button type="submit" class="btn btn-primary">Oluştur</button>
    </div>

</div>
</form>
