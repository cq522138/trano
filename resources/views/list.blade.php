@extends('welcome')
{{--@section('title', 'Danh sách khách hàng')--}}
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Danh Sách hoc sinh</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên hoc sinh</th>
                    <th scope="col">email</th>
                    <th scope="col">so dien thoai</th>
                    <th scope="col">ngay sinh</th>
                    <th scope="col">dia chi</th>
                    <th scope="col">nguoi than 1</th>
                    <th scope="col">sdt nguoi than 1</th>
                    <th scope="col">nguoi than 2</th>
                    <th scope="col">sdt nguoi than 2</th>
                    <th></th>
                    <th></th>
                </tr>

                {{--{{$students->links()}}--}}
                {{ $students->appends(request()->query()) }}
                </thead>
                <tbody>
                @if(count($students) == 0)
                    <tr><td colspan="4">Không có dữ liệu</td></tr>
                @else
                    @foreach($students as $key => $student)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone_number }}</td>
                            <td>{{ $student->birthday}}</td>
                            <td>{{ $student->address}}</td>
                            <td>{{ $student->person_contact_1}}</td>
                            <td>{{ $student->phone_person_contact_1}}</td>
                            <td>{{ $student->person_contact_2}}</td>
                            <td>{{ $student->phone_person_contact_2}}</td>
                            <td><a href="{{route('students.edit',$student->id)}}">sửa</a></td>
                            <td><a href="{{route('students.destroy',$student->id)}}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('students.create')}}">Thêm mới</a>
        </div>
    </div>

    <br>

    <div class="col-6">
        <form class="navbar-form navbar-left" action="{{route('students.search')}}">
            @csrf
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="keyword">
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-default">Tìm kiếm</button>
                </div>
            </div>
        </form>
    </div>
@endsection