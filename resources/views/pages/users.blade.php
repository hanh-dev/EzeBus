<div class="container">
    <h2 class="mb-4">Danh sách người dùng</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @if($users)
                @foreach($users as $id => $user)
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $user['name'] ?? 'Không có tên' }}</td>
                        <td>{{ $user['email'] ?? 'Không có email' }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" class="text-center">Không có dữ liệu</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>