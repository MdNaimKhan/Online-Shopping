@extends('admin.master')

@section('title')
    Add Category
@endsection
@section('content')
    <br/>
    <div class="col-sm-12">
        <div class="well">
            <h1>{{ Session::get('message') }}</h1>
            <form action="{{ url('/new-category') }}"  method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3"> Category Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="category_name" class="form-control">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3"> Category Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="category_description" class="form-control"></textarea>

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
                        <input type="submit" value="Save Category Info" name="btn" class="btn btn-success btn-block">
                    </div>
                </div>

            </form>

        </div>


    </div>
@endsection
