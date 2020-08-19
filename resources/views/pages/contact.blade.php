@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="/" role="button">{{__('messages.go_back')}}</a>
    <hr>
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <br>
        <div class="row">
            <div class="col-6">
                <ul class="text-left">
                    <li>Phone: +372 55 83 273</li>
                    <li>E-mail: rasmuskilk@gmail.com</li>
                    <li>LinkedIn: <a target="_blank" href="//www.linkedin.com/in/rasmus-kilk">linkedin.com/in/rasmus-kilk</a></li>
                </ul>
            </div>
            <div class="col-6">
                <h4 style="color: red" class="mb-4">*** This is just placeholder ***</h4>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection
