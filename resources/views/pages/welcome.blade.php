@extends('main')
@section('title', 'Homepage')
@section('content')

     <div class="container" >
        <div class ="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                    <h2><b>Welcome to 2016 online Voting Portal</b></h2>
                    <h4><i>Helping to Conduct a violent free and fair Voting Experience</i></h4>
                    </div><!--end jumbotron-->    
                </div><!--end column-->
        </div><!--end of .row-->

       <div class="row">
            <div class="col-md-8">
                <a href="#"><h2>Cast Vote</h2></a>
                <a href="#"><h2>View Candidates</h2></a>
                
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h3>Sidebar</h3>

            <p><u>Live Vote count monitor</u></p>
             
            </div>
        </div>
   @endsection