<h1>ข้อมูล Organizations</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>ชื่อองค์กร</th>
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td> <!-- เปลี่ยน 'name' ให้ตรงกับชื่อคอลัมน์ใน DB -->
    </tr>
    @endforeach
</table>