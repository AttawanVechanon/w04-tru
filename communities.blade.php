<h1>ข้อมูล Communities</h1>
<table border="1">
    <tr><th>ID</th><th>ชื่อชุมชน</th></tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
    </tr>
    @endforeach
</table>