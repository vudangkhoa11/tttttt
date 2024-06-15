@extends('admin.layouts.master')

@section('title')
Danh sách danh mục sản phẩm
@endsection

@section('content')
    <a href="{{route('admin.catalogues.create')}}" class="btn mb-3 btn-primary">Thêm mới</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Cover</th>
        <th>Is Active</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Action</th>
    </tr>
    @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>
                <img src="{{Storage::url($item->cover)}}" width="50px">
            </td>
            <td>{{$item->is_active ? 'YES' : 'NO'}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td>
                <a href="{{route('admin.catalogues.show',$item->id)}}" class="btn mb-3 btn-info">Xem chi tiết</a>
                <a href="{{route('admin.catalogues.edit',$item->id)}}" class="btn mb-3 btn-warning">Sửa</a>
                <a href="{{route('admin.catalogues.destroy',$item->id)}}"
                   onclick="return confirm('Bạn muốn xóa không?')"
                   class="btn mb-3 btn-danger">Xóa</a>
            </td>
        </tr>
    @endforeach
</table>
    {{ $data->links() }}
@endsection
