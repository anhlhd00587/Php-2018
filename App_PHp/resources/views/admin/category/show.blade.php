@extends('layout.master',['title'=>'TẠo danh mục']);
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="float-left">
                <h2 class="card-title">Thông tin chi tiết danh mục</h2>
            </div>
            <div class="float-right mr-4">
                <a href="/admin/category" title="Danh sách sản phẩm"><i class="fas fa-list"></i> Danh sách danh mục</a>
            </div>
            <div class="clearfix"></div>
            <div class="card-body">
                <div class="row">
                    <label>Tên :</label>
                    {{$obj->name}}
                </div>
                <div class="row">
                    <label>Mô tả :</label>
                    {{$obj->description}}
                </div>
                <div class="row">
                    <label>Ảnh :</label>
                    <img src="{{$obj->image}}" alt="" class="img-thumbnail">
                </div>
                <div class="row mt-3">
                    <a href="/admin/category" class="btn btn-outline-success mr-2">Về danh sách</a>
                    <a href="/admin/category/{{$obj->id}}/edit" class="btn btn-outline-info  mr-2">Sửa</a>
                    <a href="{{$obj->id}}" class="btn btn-outline-danger btn-delete">Xóa</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.btn-delete').click(function () {
            var cateId = $(this).attr('href');
            var user_confirm = confirm('Bạn có chắc muốn xoá sản phẩm này không?');
            if(user_confirm){
                $.ajax({
                    url: '/admin/category/' + cateId,
                    method:'DELETE',
                    data:{
                        '_token': "{{ csrf_token() }}"
                    },
                    success:function (response) {
                        alert('Xoá thành công');
                        window.location.href = "/admin/category";
                    },
                    error:function () {
                        alert('Có lỗi xảy ra, vui lòng thử lại.');
                    }
                });
            }
        });
    </script>
@endsection