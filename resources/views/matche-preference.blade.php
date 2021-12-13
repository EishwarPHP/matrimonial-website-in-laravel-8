@include('includes.head')
@include('includes.menu')
<div class="grid_3">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.html"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">Set Partner Preference</li>
                </ul>
            </div>

            <div class="col-md-3 search_left">&nbsp;
            </div>
            <div class="col-md-6 search_left">
                @if (session('alert'))
                    <div class="alert alert-success">
                        {{ session('alert') }}
                    </div>
                @endif
                <form method="post" action="{{ route('sendPreference') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form_but1">
                        <label class="col-sm-5 control-lable1" for="income">Annual Income : </label>
                        <div class="col-sm-7 form_radios">
                            <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                            <select class="form-control" name="pre_income">

                                @foreach ($users as $user)
                                    @if ($user->userid>0)
                                        <option value="{{$user->pre_income}}">{{$user->pre_income}} Selected</option>
                                    @endif
                                @endforeach
                                <option value="">Select Income</option>
                                <option value="1 Lac">1 Lac</option>
                                <option value="2 Lac">2 Lac</option>
                                <option value="3 Lac">3 Lac</option>
                                <option value="4 Lac">4 Lac</option>
                                <option value="5 Lac">5 Lac</option>
                                <option value="6 Lac">6 Lac</option>
                                <option value="7 Lac">7 Lac</option>
                                <option value="8 Lac">8 Lac</option>
                                <option value="9 Lac">9+ Lac</option>

                            </select>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="form_but1">
                        <label class="col-sm-5 control-lable1" for="occupation">Occupation : </label>
                        <div class="col-sm-7 form_radios">
                            <select class="form-control" name="pre_occupation">
                                @foreach ($users as $user)
                                @if ($user->userid!='')
                                    <option value="{{$user->pre_occupation}}">{{$user->pre_occupation}} Selected</option>

                                @endif
                                @endforeach
                                <option value="">Select occupation</option>
                                <option value="Private job">Private job</option>
                                <option value="Government Job">Government Job</option>
                                <option value="Business">Business</option>
                                <option value="All">All</option>
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="form_but1">
                        <label class="col-sm-5 control-lable1" for="family_type">Family Type : </label>
                        <div class="col-sm-7 form_radios">
                            <select class="form-control" name="pre_family_type">
                                @foreach ($users as $user)
                                @if ($user->userid!='')
                                    <option value="{{$user->pre_family_type}}">{{$user->pre_family_type}} Selected</option>

                                @endif
                                @endforeach
                                <option value="">Select Family Type</option>
                                <option value="Joint Family"> Joint Family</option>
                                <option value="Nuclear Family"> Nuclear Family</option>
                                <option value="All">All</option>
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="form_but1">
                        <label class="col-sm-5 control-lable1" for="manglik">Manglik : </label>
                        <div class="col-sm-7 form_radios">
                            <select class="form-control" name="pre_manglik">
                                @foreach ($users as $user)
                                @if ($user->userid!='')
                                    <option value="{{$user->pre_manglik}}">{{$user->pre_manglik}} Selected</option>


                                @endif
                                @endforeach
                                <option value="">Select Manglik</option>
                                <option value="Yes"> Yes</option>
                                <option value="No"> No</option>
                                <option value="Both"> Both</option>
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="form_but1">
                        <div class="profile_search1">
                            <label class="col-sm-5 control-lable1" for="sex">&nbsp;</label>
                            <input type="submit" value="Go">
                        </div>
                    </div>
                </form>

            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
