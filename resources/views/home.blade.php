@extends('base')


@section('content')

    <div class="container-fluid mt-5">
        <div class="card border-0 shadow p-3 py-5">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

                @foreach ($info as $i)
                    <tr>
                        <td class="fw-bold">{{$i->id }}</td>
                        <td>{{$i->name }}</td>
                        <td>{{$i->contact }}</td>
                        <td>{{$i->email }}</td>
                        <td>{{$i->description }}</td>
                        <td>
                            <img src="{{asset('upload/'. $i->image)}}" style="height: 150px; width: 200px;" alt="">
                        </td>
                        <td class="">
                            <a href=" {{route('info-update', ['id'=>$i->id])}} " class="btn btn-light"><i class="fas fa-pencil-alt"></i></a>

                            <form action=" {{route('info-delete',['id'=>$i->id])}} " method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-light"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
