<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="{{ asset('res/img/profile_small.jpg') }}" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David
                                            Williams</strong>
                                    </span> <span class="text-muted text-xs block">Art Director <b
                                            class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('logout')}}" onclick="
                            event.preventDefault();
                            document.getElementById('logout-form').submit();" >Logout</a></li>

                            {!! Form::open(['method' => 'POST', 'route' => 'logout', 'id'=>'logout-form']) !!}

                            {!! Form::close() !!}
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
                    </li>
                    <li>
                        <a href="{{ route('post.index') }}"><i class="fa fa-list"></i> <span class="nav-label">Post</span></a>
                    </li>
                </ul>
            </div>
        </nav>
