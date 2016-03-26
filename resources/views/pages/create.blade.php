@extends('layouts.main')

@section('title')
    Create New Page
@endsection
@section('content')

    <form action="" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
            <div class="col-sm-3">Page Name</div>
            <div class="col-lg-7">
                <input type="text" name="name" id="title" class="form-control" value="" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3">Meta Title</div>
            <div class="col-lg-7">
                <input type="text" name="m_title" class="form-control" value="" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3">Meta Description</div>
            <div class="col-lg-7">
                <input type="text" name="m_description" class="form-control" value="" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3">Content</div>
            <div class="col-lg-7">
                <textarea name="" class="form-control" rows="6"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3">Slug/URL</div>
            <div class="col-lg-7">
                <input type="text" name="slug" class="form-control" id="slug" disabled>
                <div class="help-block">The slug field is automatically set</div>
            </div>
        </div>

        <div class="form-group">
          <div class="col-lg-3">
             <button class="btn btn-success">Create</button>
          </div>
        </div>

    </form>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#title').change(function() {
                $('#slug').val($(this).val());
            });
        });
    </script>
@endsection