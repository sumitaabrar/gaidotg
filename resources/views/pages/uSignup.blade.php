@extends('layouts.signup')

@section('content') 
    <!-- Row BrandProfile -->
    <div class="row">
        <div class="col-lg-5 col-xlg-6 col-md-5 col-md-offset-2">
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Log In ID</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" value="password" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Account Number</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Select City</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Karachi</option>
                                            <option>Lahore</option>
                                            <option>Islamabad</option>
                                            <option>Faisalabad</option>
                                            <option>Quetta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                          
                    </div>
                </div>
            </div> 
        </div>
    </div>               
@endsection
            
            



