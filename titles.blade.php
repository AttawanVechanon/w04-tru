<h1>ข้อมูล Titles</h1>
<table border="1">
    <tr><th>ID</th><th>คำนำหน้า</th></tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->title_name }}</td>
    </tr>
    @endforeach
</table>