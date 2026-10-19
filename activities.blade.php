<h1>ข้อมูล Activities</h1>
<table border="1">
    <tr><th>ID</th><th>ชื่อกิจกรรม</th></tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
    </tr>
    @endforeach
</table>