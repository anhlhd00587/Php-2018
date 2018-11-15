@extends('layout.master',['title'=>'Tạo danh mục']);
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="float-left">

                <h2 class="card-title " >Danh sách danh mục</h2>
                <h6 class="card-subtitle mb-2 text-muted">Hiển thị danh mục sắp xếp theo thời gian mới nhất</h6>
            </div>
            <div class="float-right mr-4">
                <a href="/admin/category/create" title="Tạo mới sản phẩm"><i class="fas fa-plus-square"></i> Tạo mới</a>
            </div>
            <div class="clearfix"></div>
            <div class="card-body">
                @if($list_obj->count()>0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ảnh đại diện</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list_obj as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>
                                    <div class="card" style="width: 90px;height: 70px;background-image: url('{{$item->image}}'); background-size: cover">
                                    </div>
                                </td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <a href="/admin/category/{{$item->id}}" class="btn btn-outline-success">Xem</a>
                                    <a href="/admin/category/{{$item->id}}/edit" class="btn btn-outline-primary">Sửa</a>
                                    <a href="{{$item->id}}" class="btn btn-outline-danger btn-delete">Xoá</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row float-right mr-3">
                        {{$list_obj->links()}}
                    </div>
                @else
                    <div class="alert alert-primary" role="alert">
                        Hiện tại chưa có sản phẩm nào, vui lòng <a href="/admin/category/create">thêm sản phẩm</a> mới.
                    </div>
                @endif
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
                        window.location.reload();
                    },
                    error:function () {
                        alert('Có lỗi xảy ra, vui lòng thử lại.');
                    }
                });
            }
        });
    </script>
@endsection