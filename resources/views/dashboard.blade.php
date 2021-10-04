@extends('base')

@section('content')

  <div class="container">
    <h1>Welcome To Your Dashboard  </h1>
  </div>
<body>
    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-light pl-0" id="sidebar" role="navigation">
                <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">
                    <li class="nav-item"><a class="nav-link" href="#">Overview</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Reports▾</a>
                        <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                           <li class="nav-item"><a class="nav-link" href="">Report 1</a></li>
                           <li class="nav-item"><a class="nav-link" href="">Report 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Analytics</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Export</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Snippets</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Flexbox</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Layouts</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Templates</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Themes</a></li>
                </ul>
            </div>
            <!--/col-->
    
            <div class="col main pt-5 mt-3">
                <h1 class="display-4 d-none d-sm-block">
                Bootstrap 4 Dashboard
                </h1>
                <p class="lead d-none d-sm-block">Plus off-canvas sidebar, based on Bootstrap v4</p>
    
                <div class="alert alert-warning fade collapse" role="alert" id="myAlert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Holy guacamole!</strong> It's free.. this is an example theme.
                </div>
                <div class="row mb-3">
                    <div class="col-xl-3 col-sm-6 py-2">
                        <div class="card bg-success text-white h-100">
                            <div class="card-body bg-success">
                                <div class="rotate">
                                    <i class="fa fa-user fa-4x"></i>
                                </div>
                                <h6 class="text-uppercase">Users</h6>
                                <h1 class="display-4">134</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 py-2">
                        <div class="card text-white bg-danger h-100">
                            <div class="card-body bg-danger">
                                <div class="rotate">
                                    <i class="fa fa-list fa-4x"></i>
                                </div>
                                <h6 class="text-uppercase">Posts</h6>
                                <h1 class="display-4">87</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 py-2">
                        <div class="card text-white bg-info h-100">
                            <div class="card-body bg-info">
                                <div class="rotate">
                                    <i class="fa fa-twitter fa-4x"></i>
                                </div>
                                <h6 class="text-uppercase">Tweets</h6>
                                <h1 class="display-4">125</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 py-2">
                        <div class="card text-white bg-warning h-100">
                            <div class="card-body">
                                <div class="rotate">
                                    <i class="fa fa-share fa-4x"></i>
                                </div>
                                <h6 class="text-uppercase">Shares</h6>
                                <h1 class="display-4">36</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
    
                <hr>
                <div class="row placeholders mb-3">
                    <div class="col-6 col-sm-3 placeholder text-center">
                        <img src="//placehold.it/200/dddddd/fff?text=1" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                        <h4>Responsive</h4>
                        <span class="text-muted">Device agnostic</span>
                    </div>
                    <div class="col-6 col-sm-3 placeholder text-center">
                        <img src="//placehold.it/200/e4e4e4/fff?text=2" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                        <h4>Frontend</h4>
                        <span class="text-muted">UI / UX oriented</span>
                    </div>
                    <div class="col-6 col-sm-3 placeholder text-center">
                        <img src="//placehold.it/200/d6d6d6/fff?text=3" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                        <h4>HTML5</h4>
                        <span class="text-muted">Standards-based</span>
                    </div>
                    <div class="col-6 col-sm-3 placeholder text-center">
                        <img src="//placehold.it/200/e0e0e0/fff?text=4" class="center-block img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                        <h4>Framework</h4>
                        <span class="text-muted">CSS and JavaScript</span>
                    </div>
                </div>
    
                <a id="features"></a>
                <hr>
                <p class="lead mt-5">
                    Are you ready for Bootstap 4? It's the 4th generation of this popular responsive framework. Bootstrap 4 will include some interesting 
                    new features such as flexbox, 5 grid sizes (now including xl), cards, `em` sizing, CSS normalization (reboot) and larger font
                    sizes.
                </p>
                <div class="row my-4">
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="//placehold.it/740x180/bbb/fff?text=..." alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Layouts</h4>
                                <p class="card-text">Flexbox provides simpler, more flexible layout options like vertical centering.</p>
                                <a href="#" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                        <div class="card card-inverse bg-inverse mt-3">
                            <div class="card-body">
                                <h3 class="card-title">Flexbox</h3>
                                <p class="card-text">Flexbox is now the default, and Bootstrap 4 supports SASS out of the box.</p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="container">
                            <div class="mb-1 float-end">
                            <a href="{{url('dashboard/create')}}" class="btn btn-primary p-3">
                                Add Item
                            </a>
                            </div>
                            <h1 class="text-blue">LIST OF ITEMS</h1>
                            <table class="table table-sm table-dark">
                            <thead class="bg-primary text-white" style="font-size: 1.1em;">
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach($items as $i)
                                <tr>
                                    <td>{{$i->name}}</td>
                                    <td>{{$i->description}}</td>
                                    <td>{{$i->price}}</td>
                                    <td>{{$i->quantity}}</td>
                                    <td style="width: 150px;">
                                        <a href="{{ url('dashboard/edit/' . $i->id) }}" style="margin-right: 5px;" class="btn btn-primary btn-sm d-inline">
                                            Edit
                                        </a>
                                        <a href="{{ url('dashboard/delete/' . $i->id) }}" class="btn btn-danger btn-sm" type="submit">
                                            Delete
                                        </a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                            </table>
                            </div> 
                        </div>
                    </div>
                </div>
                <!--/row-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</body>

    
@endsection