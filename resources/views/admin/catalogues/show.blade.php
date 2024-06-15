@php use Illuminate\Support\Facades\Storage;use Illuminate\Support\Str; @endphp
@extends('admin.layouts.master')

@section('title')
    Xem chi tiết sản phẩm: {{$model->name}}
@endsection

@section('content')
    <table>
        <tr>
            <th>Trường thông tin</th>
            <th>Giá trị</th>
        </tr>
        @foreach($model->toArray() as $key => $value)
            <tr>
                <td>{{$key}}</td>
                <td>
                    @php
                        if ($key == 'cover'){
                            $url = Storage::url($value);
                            echo" <img src=\"$url\" width=\"50px\">";
                        }else if(Str::contains($key,'is_')){
                            echo $value ? 'YES' : 'NO';
                        }else{
                            echo $value;
                        }
                    @endphp
                </td>
            </tr>
        @endforeach
    </table>
@endsection

