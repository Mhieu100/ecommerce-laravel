@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <h3>Add Product
                        <a href="{{ url('admin/products') }}" class="btn btn-primary text-white btn-sm float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seotag-tab" data-bs-toggle="tab"
                                data-bs-target="#seotag-tab-pane" type="button" role="tab"
                                aria-controls="seotag-tab-pane" aria-selected="false">Seo-Tags</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                                data-bs-target="#details-tab-pane" type="button" role="tab"
                                aria-controls="details-tab-pane" aria-selected="false">Details</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <div class="mb-3">
                                <label for="">Category</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab"
                            tabindex="0">...</div>
                        <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab"
                            tabindex="0">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection