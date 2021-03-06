@extends('admin.layout.table.index')
@section('page-title',"Data")
@section('buttons')

@stop
@section('thead')
    <th>#</th>
    <th>{{trans('language.image')}}</th>
    <th>{{trans('language.name')}}</th>
    <th>{{trans('language.created_at')}}</th>
    <th>{{trans('language.settings')}}</th>
@endsection
@section('tbody')
    @foreach($items as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td> @includeIf("admin.components.image.index" , ["url" => $item->dash_image])</td>
            <td>{{$item->dash_name}}</td>
            <td>{{$item->dash_created}}</td>
            <td>
                @includeIf("admin.components.buttons.edit" , ["href" => "ittos/$item->id/edit"])
                @includeIf("admin.components.buttons.delete",["message" => "($item->dash_name)"  ,  "action" => url("admin/ittos/$item->id")])
            </td>
        </tr>
    @endforeach
@endsection


