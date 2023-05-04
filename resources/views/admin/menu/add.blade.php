@extends('admin.main')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="menu">Name Category: </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="menu">Category: </label>
                <select name="parent_id" class="form-control" id="parent_id">
                    <option value="0">Parent Category</option>
                    @foreach ($menus as $menu)
                        <option value="{{$menu->id}}">{{$menu->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="menu">Description: </label>
                <textarea name="description" class="form-control" id="description" cols="20" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="menu">Detailed Description: </label>
                <textarea name="content" class="form-control" id="content" cols="20" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="menu">Enable: </label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                    <label for="no_active" class="custom-control-label">No</label>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
