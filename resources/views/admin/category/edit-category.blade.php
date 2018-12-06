@extends('admin.master')

@section('title')
    Edit Category
@endsection
@section('content')
    <br/>
    <div class="col-sm-12">
        <div class="well">
            <h1>{{ Session::get('message') }}</h1>
            <form name="edit_Category_Form" action="{{ url('/update-category') }}"  method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3"> Category Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="category_name" class="form-control" value="{{$categoryById->category_name}}">
                        <input type="hidden" name="category_id" class="form-control" value="{{$categoryById->id}}">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3"> Category Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="category_description" class="form-control"> {{$categoryById->category_description}}</textarea>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Publication Status</label>
                    <div class="col-sm-9">
                        <select name="publication_status" class="form-control">
                            <option>--------select publication status--------</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" value="Update Category Info" name="btn" class="btn btn-success btn-block">
                    </div>
                </div>

            </form>

        </div>


    </div>
    <script>
        document.forms['edit_Category_Form'].elements['publication_status'].value='{{$categoryById->publication_status}}';
    </script>
@endsection
