<h1>
    Day la danh sach sinh vien
</h1>
<a href="{{route('create')}}">
    Thêm
</a>


<table border="1px" width="100%">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
{{--            <td>{{$student->first_name}} {{$student->last_name}}</td>--}}
            <td>{{$student->fullname()}}</td>
            <td>{{$student->getAge()}}</td>
            <td>{{$student->getGender()}}</td>
        </tr>

    @endforeach
</table>
