@extends('welcome')
@section('title', 'Thêm mới hoc sinh')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới hoc sinh</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('students.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên hoc sinh</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label>sdt hoc sinh</label>
                        <input type="text" class="form-control" name="phone_number"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="date" class="form-control" name="birthday" required>
                    </div>
                    <div class="form-group">
                        <label>dia chi</label>
                        <input type="text" class="form-control" name="address"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label>ten nguoi lien he khi can 1</label>
                        <input type="text" class="form-control" name="person_contact_1"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label>sdt nguoi lien he khi can 1</label>
                        <input type="text" class="form-control" name="phone_person_contact_1"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label>ten nguoi lien he khi can 2</label>
                        <input type="text" class="form-control" name="person_contact_2"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label>sdt nguoi lien he khi can 2</label>
                        <input type="text" class="form-control" name="phone_person_contact_2"  placeholder="Enter name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection