@include('includes.head')
@include('includes.menu')

<div class="grid_3">
    <div class="container">
     <div class="breadcrumb1">
       <ul>
          <a href="index.html"><i class="fa fa-home home_1"></i></a>
          <span class="divider">&nbsp;|&nbsp;</span>
          <li class="current-page">New Matches</li>
       </ul>
     </div>
     <div class="col-md-9 profile_left2">
       <form>
        <div class="form_but2">
          <label class="col-md-2 control-lable1" for="sex">Don't Show : </label>
          <div class="col-md-10 form_radios">
              <input type="checkbox" class="radio_1"> Don't show already viewed &nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="radio_1" checked="checked"> Don't show already contacted &nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="radio_1" checked="checked"> Show profiles with photo
          </div>
          <div class="clearfix"> </div>
        </div>
       </form>
       @foreach ($users as $user)
       <div class="profile_top" style="border: 1px solid #eee;padding:20px 10px"><a href="view_profile.html">
        <div class="col-sm-12">
          <div class="col-sm-3" profile_left-top">
              @if ($user->avatar!='')
              <img src="{{ url('theme/images/'.$user->avatar) }}" class="img-responsive" alt=""/>
              @else
              <img src="{{ url('theme/images/no-photo.jpg') }}" class="img-responsive" alt=""/>
              @endif
          </div>


          <div class="col-sm-3">
            <ul class="login_details1">
               <li><h2>{{ $user->name }}</h2></li>
               <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
            </ul>

          </div>
          <div class="col-sm-6">
              <table class="table_working_hours">
                  <tbody>
                      <tr class="opened_1">
                          <td class="day_label1">Age :</td>
                          <td class="day_value">28, 5ft 5in / 163cm</td>
                      </tr>
                      <tr class="opened">
                          <td class="day_label1">Date of Birth :</td>
                          <td class="day_value">{{ $user->dob}}</td>
                      </tr>
                      <tr class="opened">
                          <td class="day_label1">Occupation :</td>
                          <td class="day_value">{{ $user->occupation}}</td>
                      </tr>
                      <tr class="opened">
                          <td class="day_label1">Income :</td>
                          <td class="day_value">{{ $user->income}} .pa</td>
                      </tr>
                      <tr class="opened">
                          <td class="day_label1">Family Type :</td>
                          <td class="day_value">{{ $user->family_type}}</td>
                      </tr>
                      <tr class="closed">
                          <td class="day_label1">Manglik :</td>
                          <td class="day_value closed"><span>{{ $user->manglik}}</span></td>
                      </tr>

                  </tbody>

             </table>

          </div>
        </div>
        <div class="buttons col-sm-6" >
            <div class="vertical">Send Mail</div>
            <div class="vertical">Shortlisted</div>
            <div class="vertical">Send Interest</div>
        </div>
        <div class="col-sm-6">
            <div class="col-sm-3"><img src="{{ url('theme/images/'.$user->avatar) }}" class="img-responsive" alt=""
            style="height: 50px;width: 50px; border-radius:50%;border:5px solid #ff1949"/></div>
            <div class="col-sm-6">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{rand(70,99)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{rand(70,99)}}%</div>
                  </div>
            </div>
            <div class="col-sm-3"><img src="{{url('theme/images')}}/{{ Auth::user()->avatar }}" class="img-responsive" alt=""
            style="height: 50px;width: 50px; border-radius:50%;border:5px solid #ff1949"/></div>
        </div>
          <div class="clearfix"> </div>
            </a>
        </div>
        @endforeach
        <b class="pagination">{{ $users->links() }}</b>
      {{-- <ul class="pagination">
         <li class="active"><a href="#">1</a></li>
         <li><a href="#">2</a></li>
         <li><a href="#">3</a></li>
         <li><a href="#">4</a></li>
      </ul> --}}
    </div>
    <div class="col-md-3 match_right">
      <ul class="menu">
          <li class="item1"><h3 class="m_2">Show Profiles Created</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">within a week (2) </a></li>
              <li class="subitem2"><a href="#">within a month (4)</a></li>
            </ul>
          </li>
          <li class="item1"><h3 class="m_2">Profile type</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">with Photo (3) </a></li>
            </ul>
          </li>
          <li class="item1"><h3 class="m_2">Marital Status</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">Unmarried (2) </a></li>
            </ul>
          </li>
          <li class="item1"><h3 class="m_2">Mother Tongue</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">English </a></li>
            </ul>
          </li>
          <li class="item1"><h3 class="m_2">Education</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">Bachelors-Engineering </a></li>
              <li class="subitem1"><a href="#">Masters-Engineering </a></li>
            </ul>
          </li>
          <li class="item1"><h3 class="m_2">Occupation</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">Engineer-Non IT (2) </a></li>
              <li class="subitem1"><a href="#">Software Professional (3)</a></li>
            </ul>
          </li>
          <li class="item1"><h3 class="m_2">Physical Status</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">Normal (2) </a></li>
            </ul>
          </li>
          <li class="item1"><h3 class="m_2">Eating Habits</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">Non Vegetarian (3)</a></li>
              <li class="subitem1"><a href="#">Vegetarian (2)</a></li>
            </ul>
          </li>
          <li class="item1"><h3 class="m_2">Smoking</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">Not Specified (3)</a></li>
            </ul>
          </li>
          <li class="item1"><h3 class="m_2">Drinking</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">Not Specified (3)</a></li>
              <li class="subitem1"><a href="#">Never Drinks (3)</a></li>
            </ul>
          </li>
          <li class="item1"><h3 class="m_2">Profile Created by</h3>
            <ul class="cute">
              <li class="subitem1"><a href="#">Self (1)</a></li>
            </ul>
          </li>
        </ul>
     </div>
     <div class="clearfix"> </div>
    </div>
  </div>
@include('includes.footer')

</body>
</html>
