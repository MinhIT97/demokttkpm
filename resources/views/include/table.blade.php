<div class="check-table table-responsive py-20">
    <table class="table  table-bordered text-center table-md">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>SDT</th>
                <th>Giới Tính</th>
                <th>Sinh nhật</th>
                <th>Địa chỉ</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            ?>
            @foreach($users as $u)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>

                <td>{{$u->phone}}</td>
                <td><?php if (($u->gender) == 1) : ?>
                        <?php echo "Nữ"; ?>
                    <?php else : echo "Nam"; ?></td>
            <?php endif ?>



            <td>{{$u->birthday}}</td>
            <td>{{$u->address}}</td>
            <th><a href="{{route('deluser',['id'=>$u->id])}}" class="btn btn-outline-danger"><i class="fas fa-trash mr-1"></i>Xóa</a></th>
            <th><a href="{{route('edituser',['id'=>$u->id])}}" class="btn btn-outline-primary"><i class="far fa-edit mr-1"></i>Sửa</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="clearfix">
        {{$users->appends(request()->only('_search'))->links()}}

    </div>
</div>