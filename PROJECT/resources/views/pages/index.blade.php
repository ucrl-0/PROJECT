



@extends('app')

@section('content')
<div class="table1">
    <div class="container">
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Descriptiom</th>
                <th>Status</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
            </tr>
            @foreach($posts as $item)

            <tr>
                    <td> {{ $item->id }} </td>
                    <td> {{ $item->title }} </td>
                    <td> {{ $item->description }} </td>
                    <td> {{ $item->status }} </td>
                    <td> {{ $item->created_at }} </td>
                    <td> {{ $item->updated_at }} </td>
                    <td> </td>
            </tr>
          @endforeach
        </table>
    </div>
</div>
@endsection





