@extends('layout')

@section('content')
    {{-- content starts here --}}
    <div class="row">

        <div class="col-md-4">
            <div class="card w-90 m-5 mt-1 mb-0 bg-transparent">
                <img class="animate__animated animate__fadeIn card-img-top img-fluid" src="{{ asset('images/nelson.jpg') }}" alt="Card image cap">
                <div class="card-body text-center">NELSON P. BALUYOT</div>
            </div>     
            <div class="mx-5 mt-1 w-90 card bg-transparent">
                <button class="btn btn-outline-primary">DOWNLOAD CV</button>    
            </div>       
        </div>

        <div class="col-md-8">
           <h5 class="main_color mt-2">CODE WITH NELSON</h5>
           <h1 class="animate__animated animate__fadeInDown"> <strong class="main_color">WEB APP DEVELOPER</strong></h1>
           <h6>at I-Remit, Inc. (OCT 2021 - JAN 2023)</h6>
           <br>
           <div class="col-md-8 p-0 m-0">
                <ul>
                    <li>
                        Write high quality, efficient code and unit tests
                        to meet project quality targets and deadlines in
                        a fast-paced agile development environment.
                    </li>
                    <li>
                        Create system layout/user interface by using
                        standard HTML/CSS practices.
                    </li>
                    <li>
                        Integrate data from various back-end services
                        and databases.
                    </li>
                    <li>
                        Create and maintain software.
                    </li>
                    <li>
                        Enhancement of existing software.
                    </li>
                    <li>
                        Gather and refine specifications and 
                        requirements based on technical needs.
                    </li>
                    <li>
                        Investigation and resolution of issues reported
                        by internal and external customers.
                    </li>
                </ul>
           </div>

           <h1 class="animate__animated animate__fadeInDown"> <strong class="main_color">DESKTOP APP DEVELOPER</strong></h1>
           <h6>at Genie Technologies, Inc. (JAN 2023 - PRESENT)</h6>
           <div class="col-md-8 p-0 m-0">
            <ul>
                <li>
                    Write high quality, efficient code and unit tests
                    to meet project quality targets and deadlines in
                    a fast-paced agile development environment.
                </li>
                <li>
                    Integrate data from various back-end services
                    and databases.
                </li>
                <li>
                    Create and maintain software.
                </li>
                <li>
                    Enhancement of existing software.
                </li>
                <li>
                    Gather and refine specifications and 
                    requirements based on technical needs.
                </li>
                <li>
                    Investigation and resolution of issues reported
                    by internal and external customers.
                </li>
            </ul>
       </div>
        </div>

    </div>

    @include('pages.about')
@endsection