<h1>ข้อมูล Staff</h1>
<table border="1">
    <tr><th>ID</th><th>ชื่อ-สกุล</th><th>ตำแหน่ง</th></tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->position }}</td>
    </tr>
    @endforeach
</table>