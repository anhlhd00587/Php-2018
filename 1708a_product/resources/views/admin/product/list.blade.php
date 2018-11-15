@extends('admin.layout.master', ['current_page'=>'product_manager'])
@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">{{__('mymessage.list_pig')}}</h5>
            <a href="/admin/product/create" class="float-right"><i class="far fa-plus-square"></i> Tạo mới</a>
            <div class="clearfix"></div>
            <div class="row mt-3 mb-3 ml-1">
                <form action="" class="form-inline">
                    <div class="form-group">
                        <label class="mr-3">{{__('mymessage.category')}}</label>
                        <select name="categoryId" class="form-control mr-3">
                            <option value="0">{{__('mymessage.all_category')}}</option>
                            @foreach($categories as $item)
                                <option value="{{$item->id}}" {{$categoryId == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Lọc" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" class="w-25">{{__('mymessage.image')}}</th>
                    <th scope="col">{{__('mymessage.name')}}</th>
                    <th scope="col">{{__('mymessage.category')}}</th>
                    <th scope="col">{{__('mymessage.price')}}</th>
                    <th scope="col">{{__('mymessage.action')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products_in_view as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>
                        <div class="card" style="background-image: url('{{$item->image}}'); background-size: cover; width: 77px; height: 60px">
                        </div>
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <a href="/admin/product/{{$item -> id}}/edit">{{__('mymessage.edit')}}</a>&nbsp;&nbsp;
                        <a href="/admin/product/{{$item -> id}}">{{__('mymessage.delete')}}</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row float-right mr-2">
                {{$products_in_view->links()}}
            </div>
        </div>
    </div>
@endsection