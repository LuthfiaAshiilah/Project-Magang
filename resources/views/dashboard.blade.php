
@extends('partials.navbar')

@section('container')

<div class="container mt-3">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Dashbord</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-7 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="d-flex align-items-center mb-3" style="margin: 10px 10px 10px 10px"><i class="material-icons text-info mr-2">Line Chart</i>Project</h4><hr>
                  <div class="d-flex flex-column align-items-center text-center">
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <h4 class="d-flex align-items-center mb-4" style="margin: 10px 0 0 10px"><i class="material-icons text-info mr-2">Timeline</i>Project</h4>
                <div class="hori-timeline" dir="ltr" style="margin-top: 20px">
                  <ul class="list-inline events">
                      <li class="list-inline-item event-list">
                          <div class="px-4">
                              <div class="event-date bg-soft-primary text-primary">30 Mei</div>
                              <h5 class="font-size-12">Task 1</h5>                              
                          </div>
                      </li>
                      <li class="list-inline-item event-list">
                          <div class="px-4">
                              <div class="event-date bg-soft-success text-success">1 June</div>
                              <h5 class="font-size-12">Task 2</h5>                              
                          </div>
                      </li>
                      <li class="list-inline-item event-list">
                          <div class="px-4">
                              <div class="event-date bg-soft-danger text-danger">11 June</div>
                              <h5 class="font-size-12">Task 3</h5>                              
                          </div>
                      </li>
                      <li class="list-inline-item event-list">
                          <div class="px-4">
                              <div class="event-date bg-soft-warning text-warning">15 June</div>
                              <h5 class="font-size-12">Task 4</h5>
                      </li>
                  </ul>
              </div>


              <style type="text/css">
                .hori-timeline .events {
                    border-top: 3px solid #e9ecef;
                }
                .hori-timeline .events .event-list {
                    display: block;
                    position: relative;
                    text-align: center;
                    padding-top: 70px;
                    margin-right: 0;
                }
                .hori-timeline .events .event-list:before {
                    content: "";
                    position: absolute;
                    height: 36px;
                    border-right: 2px dashed #dee2e6;
                    top: 0;
                }
                .hori-timeline .events .event-list .event-date {
                    position: absolute;
                    top: 38px;
                    left: 0;
                    right: 0;
                    width: 75px;
                    margin: 0 auto;
                    border-radius: 4px;
                    padding: 2px 4px;
                }
                @media (min-width: 1140px) {
                    .hori-timeline .events .event-list {
                        display: inline-block;
                        width: 24%;
                        padding-top: 45px;
                    }
                    .hori-timeline .events .event-list .event-date {
                        top: -12px;
                    }
                }
                .bg-soft-primary {
                    background-color: rgba(64,144,203,.3)!important;
                }
                .bg-soft-success {
                    background-color: rgba(71,189,154,.3)!important;
                }
                .bg-soft-danger {
                    background-color: rgba(231,76,94,.3)!important;
                }
                .bg-soft-warning {
                    background-color: rgba(249,213,112,.3)!important;
                }

              </style>




              </div>
              <div class="card mt-3">
                <h4 class="d-flex align-items-center mb-2" style="margin: 10px 10px 0 10px"><i class="material-icons text-info mr-2">Documents</i>Project</h4><hr>
                <div>
                  <ul class="list-group mt-3 text-white">
                    <li class="list-group-item d-flex justify-content-between align-content-center">
                      <div class="d-flex flex-row">
                        <img src="https://img.icons8.com/color/100/000000/folder-invoices.png" width="40" />
                        <div class="ml-2">
                          <h6 class="mb-0">File PT Bank Mandiri (Persero)<a style="margin-left: 170px; margin-right: 30px">460 MB </a><i class="bi bi-three-dots-vertical"></i> </h6>
                          <div class="about">
                            <span>62 Files</span>
                            <span style="margin-left: 20px">Mei 01, 2022</span>
                          </div>
                        </div>
                      </div>              
                    </li>     

                    <li class="list-group-item d-flex justify-content-between align-content-center">              
                      <div class="d-flex flex-row">
                        <img src="https://img.icons8.com/color/100/000000/folder-invoices.png" width="40" />
                        <div class="ml-2">
                          <h6 class="mb-0">Testing Program Client <a style="margin-left: 220px; margin-right: 30px">570 MB </a><i class="bi bi-three-dots-vertical"></i> </h6>
                          <div class="about">
                            <span>82 Files</span>
                            <span style="margin-left: 20px">April 30, 2022</span>
                          </div>
                        </div>
                      </div>              
                    </li>
              
                    <li class="list-group-item d-flex justify-content-between align-content-center">              
                      <div class="d-flex flex-row">
                        <img src="https://img.icons8.com/color/100/000000/folder-invoices.png" width="40" />
                        <div class="ml-2">
                          <h6 class="mb-0">Project PT Tokopedia <a style="margin-left: 235px; margin-right: 20px">1798 MB </a><i class="bi bi-three-dots-vertical"></i> </h6>
                          <div class="about">
                            <span>182 Files</span>
                            <span style="margin-left: 20px">April 29, 2022</span>
                          </div>
                        </div>
                      </div>
              
                    </li>              
                    <li class="list-group-item d-flex justify-content-between align-content-center">              
                      <div class="d-flex flex-row">
                        <img src="https://img.icons8.com/color/100/000000/folder-invoices.png" width="40" />
                        <div class="ml-2">
                          <h6 class="mb-0">Project SMS Broadcasting <a style="margin-left: 197px; margin-right: 20px">2800 MB </a><i class="bi bi-three-dots-vertical"></i> </h6>
                          <div class="about">
                            <span>802 Files</span>
                            <span style="margin-left: 20px">Jan 29, 2020</span>
                          </div>
                        </div>
                      </div>           
                  </ul>                  
                  </div>
              </div>
              <div class="card mt-3">
                <h4 class="d-flex align-items-center" style="margin: 10px 0 0 10px"><i class="material-icons text-info mr-2">Client</i>Project</h4><hr>
              <div class="card mt-4 border-2 pt-2 active pb-0 px-3">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-12 ">
                            <h4 class="card-title "><b>PT Tokopedia</b></h4>
    
                        </div>
                        <div class="col">
                            <h6 class="card-subtitle mb-2 text-muted">
                                <p class="card-text text-muted small ">
                                    <img src="https://img.icons8.com/color/26/000000/christmas-star.png" class="mr-1 "
                                        width="19" height="19" id="star"> <span class="vl mr-2 ml-0"></span>
    
                                    <i class="fa fa-users text-muted "></i> Public <span class="vl ml-1 mr-2 "></span>
    
                                    <span></span>Updated by <span class="font-weight-bold">Med.net Team</span> on 31 Apr, 2022
                                </p>
                            </h6>
                        </div>
                    </div>
    
                </div>
                <div class="card-footer bg-white px-0 ">
                    <div class="row">
    
                        <div class=" col-md-auto ">
                            <a href="#" class="btn btn-outlined btn-black text-muted bg-transparent"
                                data-wow-delay="0.7s"><img src="https://img.icons8.com/ios/50/000000/settings.png"
                                    width="15" height="15"> <small>SETTINGS</small></a>
    
                            <i class="mdi mdi-settings-outline"></i>

                            <a href="#" class="
                             btn-outlined btn-black text-muted"><img src="https://img.icons8.com/metro/26/000000/link.png"
                                    width="15" height="15" id="plus">
                                <small>PROGRAM LINK</small> </a>
    
                            <a href="#" class="btn btn-outlined btn-black text-muted "><img
                                    src="https://img.icons8.com/metro/26/000000/more.png" width="15" height="15"
                                    class="mr-2 more"><small>MORE</small></a>

                            <span class="vl ml-3"></span>
                        </div>
    
                        <div class="col-md-auto" style="margin-left: 43px">
                            <ul class="list-inline">
                                <li class="list-inline-item"> 
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                        alt="DP" class="  rounded-circle img-fluid " width="25" height="25">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                        alt="DP" class="  rounded-circle img-fluid " width="25" height="25">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                        alt="DP" class="  rounded-circle img-fluid " width="25" height="25">
                                    <img src="https://i.imgur.com/wvxPV9S.png"
                                        alt="DP" class="  rounded-circle img-fluid " width="25" height="25">
                                </li>
                                <li class="list-inline-item"> <img src="https://img.icons8.com/ios/50/000000/plus.png"
                                        width="20" height="20 " class="more"> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="button" style="margin-top: 30px"><a href="/perusahaan" class="link-light">See Details</a></button>
            </div> 
    
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 ">
                <div class="card-body">
                    <h4 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Chart</i>Project Status</h4><hr>
                    <small style="font-family: Verdana, Geneva, Tahoma, sans-serif">1 task completed out of 4</small>
                    <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <canvas id="pieChart"></canvas>
                </div>
              </div>
              <div class="card mb-4 ">
                <div class="card-body">
                    <h4 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Calender</i>Project</h4><hr>
                    <div>
                      <div class="calendar">
                        <div class="month">
                          <i class="fas fa-angle-left prev"></i>
                          <div class="date">
                            <h1></h1>
                            <p></p>
                          </div>
                          <i class="fas fa-angle-right next"></i>
                        </div>
                        <div class="weekdays">
                          <div>Sun</div>
                          <div>Mon</div>
                          <div>Tue</div>
                          <div>Wed</div>
                          <div>Thu</div>
                          <div>Fri</div>
                          <div>Sat</div>
                        </div>
                        <div class="days"></div>
                      </div>
                    </div>

                      <style type="text/css">
                      .calendar {
                        width: auto;
                        height: 280px;
                        background-color: #ffffff;
                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
                      }
                      .month {
                        width: auto;
                        height: auto;
                        background-color: #63bcd3;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 0 10px;
                        text-align: center;
                        text-shadow: 0 5px 5px rgba(0, 0, 0, 0.5);
                      }
                      .month i {
                        font-size: 12
                        cursor: pointer;
                      }
                      .month h1 {
                        font-size: 16;
                        font-weight: auto;
                        text-transform: uppercase;
                        letter-spacing: 2px;
                        margin-bottom: 10px;
                      }
                      .month p {
                        font-size: 12;
                      }
                      .weekdays {
                        width: auto;
                        height: auto;
                        padding: 0 10px;
                        display: flex;
                        align-items: center;
                      }
                      .weekdays div {
                        font-size: 16;
                        font-weight: auto;
                        letter-spacing: 1px;
                        width: calc(100% / 7);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        text-shadow: 0 0.3px 0.5px rgba(0, 0, 0, 0.5);
                      }
                      .days {
                        width: 100%;
                        display: flex;
                        flex-wrap: wrap;
                        padding: 0 10px;
                      }
                      .days div {
                        font-size: 16;
                        width: calc(100% / 7);
                        height: auto;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        text-shadow: 0 0.3px 0.5px rgba(0, 0, 0, 0.5);
                        transition: background-color 0.2s;
                      }
                      .days div:hover:not(.today) {
                        background-color: #262626;
                        border: 0.2px solid #777;cursor: pointer;
                      }
                      .prev-date,
                      .next-date {
                        opacity: 0.5;
                      }
                      .today {
                        background-color: #92cae4;
                      }
                      </style>
                    
                </div>
              </div>
              
                <div class="col-auto">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Team</i>Mambers</h5><hr>
                      <div class="row">
                        <div class="col">
                          <a><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="40"></a>
                        </div>
                        <div class="col">
                          <a><img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Admin" class="rounded-circle" width="40"></a>
                        </div>
                        <div class="col">
                          <a><img src="https://www.bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle" width="40"></a>
                        </div>
                        <div class="col">
                          <a><img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Admin" class="rounded-circle" width="40"></a>
                        </div>
                        <div class="col">
                          <a><img src="https://www.bootdey.com/img/Content/avatar/avatar8.png" alt="Admin" class="rounded-circle" width="40"></a>
                        </div>
                      </div>   
                      <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button" style="margin-top: 30px"><a href="/team" class="link-light">See Details</a></button>
                      </div>                   
                    </div>
                  </div>
                </div>
              </div>
            </div>              
        

          
        </div>
</div>


    <script src="js/script.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      //line
      var ctxL = document.getElementById("lineChart").getContext('2d');
      var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
          labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Desember"],
          datasets: [{
            label: "Product Result 2021",
            data: [10, 11, 8, 7, 15, 23, 30, 27, 12, 11, 17, 34],
            backgroundColor: [
              'rgba(105, 0, 132, .2)',
            ],
            borderColor: [
              'rgba(128, 192, 229)',
            ],
            borderWidth: 2
          },
        ]
      },
      options: {
        responsive: true
      }
    });
    </script>

    <script>
      //pie
      var ctxP = document.getElementById("pieChart").getContext('2d');
      var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
          labels: ["Doing", "Done"],
          datasets: [{
            data: [3, 1],
            backgroundColor: ["#63bcd3", "#F7464A"],
            hoverBackgroundColor: ["#63bcd3d7", "#FF5A5E"]
          }]
        },
        options: {
          responsive: true
        }
      });
    </script>
    
    <script>
      const date = new Date();
      const renderCalendar = () => {
        date.setDate(1);
        
        const monthDays = document.querySelector(".days");
        const lastDay = new Date(
          date.getFullYear(),
          date.getMonth() + 1,
          0
          ).getDate();
          
          const prevLastDay = new Date(
            date.getFullYear(),
            date.getMonth(),
            0
            ).getDate();
            
            const firstDayIndex = date.getDay();
            const lastDayIndex = new Date(
              date.getFullYear(),
              date.getMonth() + 1,
              0
              ).getDay();
              const nextDays = 7 - lastDayIndex - 1;
              const months = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
              ];
              
              document.querySelector(".date h1").innerHTML = months[date.getMonth()];
              document.querySelector(".date p").innerHTML = new Date().toDateString();
              let days = "";
              for (let x = firstDayIndex; x > 0; x--) {
                days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
              }
              
              for (let i = 1; i <= lastDay; i++) {
                if (
                  i === new Date().getDate() &&

                  date.getMonth() === new Date().getMonth()
                  ) {
                    days += `<div class="today">${i}</div>`;
                  } else {
                    days += `<div>${i}</div>`;
                  }
                }
                
                for (let j = 1; j <= nextDays; j++) {
                  days += `<div class="next-date">${j}</div>`;
                  monthDays.innerHTML = days;
                }
              };

              document.querySelector(".prev").addEventListener("click", () => {
                date.setMonth(date.getMonth() - 1);
                renderCalendar();
              });
              
              document.querySelector(".next").addEventListener("click", () => {
                date.setMonth(date.getMonth() + 1);
                renderCalendar();
              });
              
              renderCalendar();
    </script>

@endsection   
