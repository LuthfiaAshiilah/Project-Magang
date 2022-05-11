
@extends('partials.navbar')

@section('container')


<div class="container mt-3 mb-3">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Task List</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="row">
        <div class="column card">
            <div class="mt-3 mb-3 page-todo bootstrap snippets bootdeys">
                <div class="col tasks">
                    <div class="task-list">
                        <div class="priority high"><span>DOING</span></div>
                        <div class="task high">
                            <div class="desc">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <div class="title">PT Telekomunikasi Selular</div>
                                        <div>Review last product for PT Telekomunikasi Selular before presentation</div><br>                                      
                                    </label>
                                </div>                                
                            </div>
                            <div class="time">
                                <div class="date">Jun 1, 2022</div>
                                <div> 21 days</div>
                            </div>
                        </div>
                        <div class="task high">
                            <div class="desc">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <div class="title">PT Bank Mandiri (Persero)</div>
                                        <div>Make product design according to the client</div><br>                                    </label>
                                </div>                                
                            </div>
                            <div class="time">
                                <div class="date">Jun 11, 2022</div>
                                <div>31 days</div>
                            </div>
                        </div>
                        <div class="task high">
                            <div class="desc">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <div class="title">PT Tokopedia</div>
                                        <div>Product result presentation to the client</div><br>                                 </label>
                                </div>                                
                            </div>
                            <div class="time">
                                <div class="date">Jun 15, 2022</div>
                                <div>35 days</div>
                            </div>
                        </div>
                        <div class="task high">
                            <div class="desc">
                                <a href="/addtask" class="link-secondary"><i class="bi bi-plus-circle"></i> Add a task</a>
                            </div>
                        </div>
            
                        <div class="clearfix"></div>		
                    </div>		
                </div>
            </div>
        </div>
      
        <div class="column card">
            <div class="mt-3 mb-3 page-todo bootstrap snippets bootdeys">
                <div class="col tasks">
                    <div class="task-list">
                        <div class="priority medium"><span>DONE</span></div>
                        <div class="task medium">
                            <div class="desc">
                                <div class="title">PT Asuransi Simas Jiwa</div>
                                <div>Project SMS Broadcasting</div><br>
                            </div>
                            <div class="time">
                                <div class="date">Apr 30, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>				
                </div>
            </div>
        </div>
        
    </div>
</div>

    <script src="js/script.js"></script>

@endsection   
