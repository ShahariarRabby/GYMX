
@extends('layouts.users')
@section('title')
    Members
@endsection
@section('tabs1')

    <style>

        #dash{
            display: none;
        }
        #mem{
            display: block;
        }
    </style>

<div id="tabs-3">
    <div class="container">
        <div class="row">
            <h3 class=""><i class="fa fa-users mgr-10 profile-icon"></i> Group Member</h3></div>
        <div class="row">
            @foreach($members as $members)

            <div class="col-lg-3 col-md-3 col-sm-3 col-2 membercard">
                <div class="member">
                    <ul class="">



                        <li>


                            <a href="#">
                                <span class="menu-icon"><img src="{{asset($members->photo ? ("images/".($members->photo->file)):($members->profile->role=="Admin"?"images/2.png":"images/1.png"))}}" alt="{{$members->name}}" >
                                </span>
                            </a>
                            <span class="menu-text"> {{$members->name}}
                                                            <span class="menu-info">
                                                                <span class="menu-action">
                                                                    <span>
                                                                        @if($members->is_active == "Active")
                                                                            <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                                                                            @else
                                                                            <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                                                                            @endif
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                        </li>



                    </ul>
                </div>



            </div>
            @endforeach





        </div>
    </div>




</div>
</div>
@endsection