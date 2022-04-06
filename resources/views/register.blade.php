@extends('layouts.main')

@section('container')
    
    <div class="form-b">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-7 col-md-6">
                    <div class="form-container shadow-lg">
                        <form class="form-horizontal">
                            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{url('captcha-validation')}}">
                @csrf
                            <h3 class="title">Register Form</h3>
                            <div class="form-group">
                                <label>PIC Name</label>
                                <input type="text" class="form-control" placeholder="PIC Name">
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" class="form-control" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div><br>
                            <div class="form-group">
                                <label>Service Group</label>
                                <select class="form-select text-muted" aria-label="Default select example">
                                    <option selected>Service Group</option>
                                    <option value="1">Shared</option>
                                    <option value="2">Dedicated</option>
                                    <option value="3">OnPrem</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Service Type</label>
                                <select class="form-select text-muted" aria-label="Default select example">
                                    <option selected>Service Type</option>
                                    <option value="1">FAQ</option>
                                    <option value="2">Transactional</option>
                                  </select>
                            </div>
                            <p></p>
                            <h5>Channel</h5>
                            <div class="check-terms form-group">
                                <input type="checkbox" class="checkbox">
                                <span class="check-label">WhatsApp</span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="check-terms form-group">
                                <input type="checkbox" class="checkbox">
                                <span class="check-label">Telegram</span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="check-terms form-group">
                                <input type="checkbox" class="checkbox">
                                <span class="check-label">Slack</span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="check-terms form-group">
                                <input type="checkbox" class="checkbox">
                                <span class="check-label">Coster</span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="check-terms form-group">
                                <input type="checkbox" class="checkbox">
                                <span class="check-label">Costum</span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Channel Name">
                            </div><br>
                            <p></p>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="check-terms">
                                <input type="checkbox" class="checkbox">
                                <span class="check-label">I agree to the terms</span>
                            </div>

                            <div class="form-group mt-4 mb-4">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger ms-2" class="reload" id="reload">
                                        &#x21bb;
                                    </button>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                            </div>
                            <small class="signin-link">Already have an account? Click here to <a href="/login">Login</a></small>
                            <button class="btn btn-md btn-primary mb-2" type="submit">Create Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
@endsection   