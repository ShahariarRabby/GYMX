<div class="row actskill">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="col-12">
                    <h3 class=""><i class="fa fa-commenting"></i> Message</h3> </div>
                <div class="col-12">


                    <script>
                        function loadUser() {
                            $.get("/xxx",function (data) {
                                $(".xx").html(data);

                            });

                        }
                        setInterval(function () {
                            loadUser();
                        },10);

                    </script>


                    <div class="acvscrole xx" id="chat">
                        @foreach($message as $message)
                            <div class="xx">
                                <h5>{{$message->name}} <small><small><small>{{$message->created_at->diffForHumans()}}</small></small></small> </h5>
                                <p>{{$message->message}}</p>
                            </div>
                        @endforeach

                    </div>
                </div>
                {!! Form::open(['method'=>'POST','action'=>"UserContant@chat"]) !!}
                <input class="form-control" type="text" autocomplete="off" required value="" id="" name="message"  placeholder="Type a message">
                {!! Form::close() !!}


            </div>

            <div class="col-lg-5 col-md-5 col-12 bar">
                <div class="col-12">
                    <h3 class=""><i class="fa fa-flask"></i> SKILL</h3>
                </div>

                <div class="col-12">
                    <h6>Weight Lift</h6>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>


                <div class="col-12">
                    <h6>Weight Lift</h6>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>


                <div class="col-12">
                    <h6>Weight Lift</h6>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>


                <div class="col-12">
                    <h6>Weight Lift1</h6>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>


            </div>


        </div>
    </div>
</div>