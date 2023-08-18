<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>
<body>
<div class="container">
    <a href="{{url('item/cetak')}}" class="btn btn-success">Cetak</a>

    <table>
        <tr>
            <td>ID</td>
            <td>Nama Barang</td>
            <td>Nama User</td>
            <td>Aksi</td>
        </tr>

        @forelse($data as $key => $value)
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['nama_barang']}}</td>
                <td>{{$value['user']['name']}}</td>
                <td>Aksi</td>
            </tr>
        @empty
        @endforelse
    </table>


    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Pegawai</label>
            <select name="user_id" id="user_id">
                <option value=""></option>
                @forelse(\App\Models\User::get() as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @empty
                @endforelse
            </select>
        </div>
    </form>
</div>
</body>
</html>
