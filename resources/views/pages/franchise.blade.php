@extends('layouts.app')

@section('content')

<section id="franchiseForm" class="mt-5">
    <div class="bg-yellow-gradient">
        <h4 class="pl-3 py-1 mt-4">FRANCHISE ONLINE APPLICATION FORM</h4>
    </div>
        <form action="#">
            <div class="pl-5 mt-3">
                <h6 class="d-inline-block">DO YOU HAVE A PROPOSED SITE?</h6>                
                <input type="checkbox" class="custom-checkbox">
                <label for="siteYes">Yes</label>
                <input type="checkbox" class="custom-checkbox">
                <label for="siteNo">No</label>
            </div>
            <div class="personal-info">
                <div class="bg-red-gradient my-3">
                    <h6 class="p-1 pl-5">APPLICANT PERSONAL INFORMATION</h6>
                </div>
                <div class="pl-5">
                    <div class="row">
                        <div class="col-xl-2">
                            <h6>NAME OF APPLICANT</h6>
                        </div>
                        <div class="col-xl-3">
                            <input type="text">
                            <br>
                            <span>Last Name</span>
                        </div>
                        <div class="col-xl-3">
                            <input type="text">
                            <br>
                            <span>First Name</span>
                        </div>
                        <div class="col-xl-3">
                            <input type="text">
                            <br>
                            <span>Middle Name</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-5">
                <div class="row">
                    <div class="col-xl-2">
                        <h6>DATE OF BIRTH</h6>
                    </div>
                    <div class="col-xl-3">
                        <input type="text">
                        <br>
                        <span>Month</span>
                    </div>
                    <div class="col-xl-3">
                        <input type="text">
                        <br>
                        <span>Date</span>
                    </div>
                    <div class="col-xl-3">
                        <input type="text">
                        <br>
                        <span>Year</span>
                    </div>
                </div>
            </div>
            <div class="pl-5">
                <div class="row">
                    <div class="col-xl-2">
                        <h6>PLACE OF BIRTH</h6>
                    </div>
                    <div class="col-xl-3">
                        <input type="text">
                        <br>
                        <span>City</span>
                    </div>
                    <div class="col-xl-3">
                        <input type="text">
                        <br>
                        <span>Country</span>
                    </div>
                    <div class="col-xl-3">
                        <input type="text">
                        <br>
                        <span>Zip Code</span>
                    </div>
                </div>
            </div>
            <div class="pl-5">
                <div class="row">
                    <div class="col-xl-2">
                        <h6>RESIDENTIAL ADDRESS</h6>
                    </div>
                    <div class="col-xl-10">
                        <input type="text" style="width:97%">
                        <br>
                        <span>(No. Street, Brgy, City, Region, Country)</span>
                    </div>
                </div>
            </div>
            <div class="pl-5 mb-1">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-4">
                                <h6>EMAIL ADDRESS</h6>
                            </div>
                            <div class="col-xl-8">
                                <input type="text" style="width:100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-xl-3">
                                <h6>MOBILE NO.</h6>
                            </div>
                            <div class="col-xl-9">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-5 mb-1">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-4">
                                <h6>HOME TELEPHONE NO.</h6>
                            </div>
                            <div class="col-xl-8">
                                <input type="text" style="width:100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-xl-3">
                                <h6>CIVIL STATUS</h6>
                            </div>
                            <div class="col-xl-9">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-5">
                <div class="row">
                    <div class="col-xl-2">
                        <h6>CITIZENSHIP</h6>
                    </div>
                    <div class="col-xl-10">
                        <input type="text">
                    </div>
                </div>
            </div>
            <div class="pl-5 my-3">
                <div>
                    <h6 class="d-inline-block">IS THIS YOUR FIRST APPLYING FOR A FRANCHISE?</h6>
                    <input type="checkbox">
                     <label for="siteYes">Yes</label>
                     <input type="checkbox">
                     <label for="siteNo">No</label> 
                 </div>
            </div>
            <div class="pl-5 mb-1">
                <div class="row">
                    <div class="col-xl-2">
                        <h6>OCCUPATION</h6>
                    </div>
                    <div class="col-xl-10">
                        <input type="text">
                    </div>
                </div>
            </div>
            <div class="pl-5">
                <div class="row">
                    <div class="col-xl-2">
                        <h6>BUSINESS(IF ANY)</h6>
                    </div>
                    <div class="col-xl-10">
                        <input type="text">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <a href="#" class="btn btn-yellow d-inline-block mr-5 mb-3">SUBMIT</a>
            </div>
        </form>
    
</section>

<div class="mx-5">
    <p>Compliance with the Data Privacy Act. (i) To the extent that Franchisor is processing Personal Information(including Sensitive Personal Information) of the Applicant in connection with the implementation of this application and/or the ensuing Franchise Agreement, such processing shall be perfomed by Franchisor in accordance with its standards and requirements as provided in its Data Privacy Policy and data protection. Franchisor agrees to comply with all applicable privacy and data protection laws with regard to the performance or implementation of this document.</p>

    <p>Applicant hereby consents to the processing of Personal Information(incuding Sensitive Personal Information) by Franchisor and (its authorised agents to facilitate and implement this Application and/or the ensuing Franchise Agreement.</p>
</div>




@endsection