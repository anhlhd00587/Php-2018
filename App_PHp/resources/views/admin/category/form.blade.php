@extends('layout.master',['title'=>'Tạo danh mục']);
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="float-left">
                <h2 class="card-title">Tạo mới danh mục</h2>
                <h6 class="card-subtitle mb-2 text-muted">Vui lòng nhập đầy đủ các thông tin bên dưới</h6>
            </div>
            <div class="float-right mr-4">
                <a href="/admin/category" title="Danh sách sản phẩm"><i class="fas fa-list"></i> Danh sách danh mục</a>
            </div>
            <div class="clearfix"></div>
            <div class="card-body">
                <form action="/admin/category" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Tên :</label>
                        <input type="text" name="name" class="form-control w-50">
                    </div>
                    <div class="form-group">
                        <label>Mô tả :</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div> <div class="form-group">
                        <input type="submit" value="Lưu thông tin" class="btn btn-outline-primary">
                        <input type="reset" value="Làm lại" class="btn btn-outline-dark">
                    </div>
                    <div class="form-group">
                        <label>Ảnh :</label>
                        <input type="text" name="image" class="form-control w-50">
                    </div>

                </form>
@endsection