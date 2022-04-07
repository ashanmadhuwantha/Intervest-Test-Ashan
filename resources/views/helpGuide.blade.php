@extends('layouts.app')

@section('content')
    <div class="container p-50">
        <div class="row pb-3">
            @guest
            @else
                <div class="col-12">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new help and
                        guide</button>
                </div>
            @endguest

        </div>
        <div class="row help-section">
            @if (count($allHelpGuides) > 0)
                @foreach ($allHelpGuides as $item)
                    <div class="col-6" style="padding-top: 30px;">

                        <div class="card bg-light">
                            <div class="card-body" style="color: rgb(27, 27, 27); ">
                                <h3><i class="bi bi-person-fill mr-5"></i>{{ $item->name }}</h3>
                                <p>Posted on - [{{ $item->created_at }}]</p>
                                <hr>
                                <p>{{ \Illuminate\Support\Str::limit($item->description, 300, $end = '...') }}</p>
                                <a href="{{ $item->link }}" target="_blank">
                                    <p>Read More..</p>
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            @else
                <div class="row" style="text-align: center;">
                    <p> -- NO DATA AVAILABLE -- </p>
                </div>
            @endif

        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Help Guide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('create.help.guide') }}" method="POST" id="helpform">
                        @csrf
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-12">
                                    <label for="exampleFormControlInput1" class="form-label">Link</label>
                                    <input type="text" class="form-control" id="helplink" name="helplink"
                                        placeholder="add link here" required>
                                </div>
                                <div class="col-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" id="helpdescription" name="helpdescription" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
