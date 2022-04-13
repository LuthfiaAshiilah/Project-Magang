
@extends('partials.navbar')

@section('container')

<div class="container mt-3">
    <h4> Projects </h4>
</div>

<div class="container mt-3 mb-3">
    <div class="row">
        <div class="column card">
            <div class="mt-3 mb-3 page-todo bootstrap snippets bootdeys">
                <div class="col tasks">
                    <div class="task-list">
                        <div class="priority high"><span>DOING</span></div>
                        <div class="task high">
                            <div class="desc">
                                <div class="title">PT Telekomunikasi Selular</div>
                                <div>Review last product for PT Telekomunikasi Selular before presentation</div><br>
                            </div>
                            <div class="time">
                                <div class="date">Apr 21, 2022</div>
                                <div> 7 days</div>
                            </div>
                        </div>
                        <div class="task high">
                            <div class="desc">
                                <div class="title">PT Bank Mandiri (Persero)</div>
                                <div>Make product design according to the client</div><br>
                            </div>
                            <div class="time">
                                <div class="date">Mei 10, 2022</div>
                                <div>20 days</div>
                            </div>
                        </div>
                        <div class="task high">
                            <div class="desc">
                                <div class="title">PT Tokopedia</div>
                                <div>Product result presentation to the client</div><br>
                            </div>
                            <div class="time">
                                <div class="date">Mei 14, 2022</div>
                                <div> 24 days</div>
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
                                <div class="date">Apr 1, 2022</div>
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
