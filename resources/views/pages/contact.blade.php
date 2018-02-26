@extends('layouts.default')
@section('content')
    <div class="card mt-2 pl-2 pr-2">
        <div class="card-title"><h1>Contact</h1><p class="lead">Please use this form to contact the site owner.</p></div>
        <div class="card-body">
            <form action="{{route('contact.store')}}" method="post">
                {{ csrf_field() }}
                <div class = "row">
                    <div class = "col-md-6">
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input name="name" type="name" class="form-control" id="name" placeholder="Name" autocomplete="off">
                        </div>
                    </div>
                    <div class = "col-md-6">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" autocomplete="off">
                        </div>
                    </div>
                    <div class = "col-md-6">
                        <div class="form-group">
                            <label for="Subject">Subject</label>
                            <input name="subject" type="subject" class="form-control" id="subject" placeholder="Subject" autocomplete="off">
                        </div>
                    </div>
                    <div class = "col-md-12">
                        <div class="form-group">
                            <label for="body">Message</label>
                            <textarea name="body" class="form-control" id="body" rows="3" autocomplete="off"></textarea>
                        </div>
                    </div>
                    <div class = "col-md-12">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection