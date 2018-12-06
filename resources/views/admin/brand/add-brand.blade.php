@extends('admin.master')

@section('title')
    Add Brand
@endsection
@section('content')
    <br/>
    <div class="col-sm-12">
        <div class="well">
            <h1>{{ Session::get('message') }}</h1>
            <form action="{{ url('/new-brand') }}"  method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3"> Brand Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="brand_name" class="form-control">
                        <span style="color: red">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3"> Brand Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="brand_description" class="form-control"></textarea>
                        <span style="color: red">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>

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
                        <input type="submit" value="Save Brand Info" name="btn" class="btn btn-success btn-block">
                    </div>
                </div>

            </form>

        </div>


    </div>
@endsection
