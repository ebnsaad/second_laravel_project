@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Edit Story
                <a href=" {{ route('stories.index') }}" class="float-right">Back</a>
        
        </div>

         <div class="card-body">
               
                <form action="{{ route('stories.update',[$story]) }}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $story->title ) }} "/>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control @error('body') is-invalid @enderror">{{ old('body', $story->body ) }}</textarea>
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" class="form-control @error('type') is-invalid @enderror">
                                <option value="">--Select--</option>
                                <option value="short" {{ 'short' == old('type', $story->type) ? 'selected' : '' }} >Short</option>
                                <option value="long" {{ 'long' == old('type', $story->type) ? 'selected' : '' }}>Long</option>
                            </select>
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                            </div>

                            <div class="form-group">
                            <legend><h6>Status</h6></legend>
                            <div class="form-check @error('status') is-invalid @enderror">
                                <input type="radio" class="form-check-input" name="status" value="1"  {{ '1' == old('status', $story->status) ? 'checked' : '' }}>
                                <label for="active" class="form-check-label">Yes</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="status" value="0"  {{ '0' == old('status', $story->status) ? 'checked' : '' }}>
                                <label for="active" class="form-check-label">No</label>
                            </div>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        
                        </div>

                        <button class="btn btn-primary">Save</button>

                </form>
                
                </div>
            </div>
             </div>
        </div>
    </div>

@endsection
