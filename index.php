<style>
    .back-cell {
        color: #fff;
        display: inline-block;
        /*text-align: center;*/
        font-size: 15px;
        vertical-align: text-bottom;
        font-weight: bold;
        /*margin: 10px 1px;*/
        border-radius: 5px;
        padding: 5px;
        flex: 1;
        /*width: 40px;*/
    }
    .padding-5px {
        padding: 0px 5px 5px 5px;
    }
    .color-red{
        color:red!important;
    }
    .border-bottom{
        border-bottom:1px solid lightgray;
    }
    .float-right{
        float:right;
    }
    .class i{
        float: right;
    /*right: 51px;*/
    /*position: absolute;*/
    font-size:35px;
    color:lightblue;
    /*top: 161px;*/
    }
    
    
    .start-100 {
    left: 98%!important;
    top: 172px;
}
.start-101 {
    left: 98%!important;
    top: 85px;
}
.card-header{
    
    color:white;
    /*font-weight:bold;*/
    font-size:16px;
}
.counter-card img{
    height:30px;
}
.counter-card{
    background:#ffa143;
    box-shadow: inset 0 1px 3px 0 rgb(52 9 9 / 50%);
    color: white !important;
    margin: 0px 10px;
    margin-bottom: 21px;
}
.counter-card:hover{
    background-image: linear-gradient(
    180deg, #DBBC68 0%, #FFDC7A 61%);
    cursor:pointer;
  }
.value{
    position:absolute;
    margin-left:10px;
}
  .counter-section .col-md-2 {
        width: 20%;
    }
   .game-card img {
    height: 65px;
    margin-bottom: 15px;
    width: 65px;
    border: 3px solid #77c358;
    border-radius: 11px;
    
   }
    .games_section{
        display:inline;
    }
    .game-card {
        display: inherit;
    }
    
    .custum-header{
        padding: 5px 10px !important;
        color: #FFF;
        text-transform: uppercase;
        font-weight: bold;
        /*background-color: #3c1404;*/
        border-radius: 5px;
        border: none !important;
        letter-spacing: 1px;
        font-size: 14px !important;
        box-shadow: inset 0 0px 2px 0 rgb(0 0 0 / 20%);
        margin-bottom: 0;
    }
    .card-game p {
    margin-top: 0;
    margin-bottom: 2px;
    font-size: 10px;
    font-weight: 600;
    color:#363333;
}
.counter-card .card-body{
   padding: 0.5rem!important;
}
@media screen and (max-width: 600px) {
  
      .counter-section .col-md-2 {
        width: 36%;
        display: inline;
    }
    .counter-card {
        margin: 0px 5px;
        margin-bottom: 21px;
      }
      .counter-section .dflex {
        overflow-x: scroll;
        margin-bottom: 12px;
    }
    .counter-card {
     width: 110px;
    }
}

@media screen and (min-width: 768px) {
.game-card img {
  
    margin-bottom: 15px;

    border: 3px solid #77c358;
    border-radius: 11px;
    height: 140px !important;
     width: 140px  !important;
}
}

</style>

		 <!--start page wrapper -->
		 <div class="page-wrapper">
		 
			 <div class="page-content counter-section">
			    <?php
			     //   $this->load->view('Client/includes/top_head');
			     //   $this->load->view('Client/includes/counter_section');
			     //   $this->load->view('Client/includes/games_section');
			    ?>
			    <!--new static design -->
			     <div class="tab-design">
			         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item d-none d-lg-block d-md-block" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-inplay" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <img src="<?= base_url()?>assets/images/home/in-play.svg">
                            In-Play
                            <div class="game_count">6</div>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" value="1" data-bs-toggle="pill" data-bs-target="#pills-cricket" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                             <img src="<?= base_url()?>assets/images/home/icon-cricket.svg">
                                Cricket
                                <div class="game_count">6</div>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" value="5"  data-bs-toggle="pill" data-bs-target="#pills-cricket" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                             <img src="<?= base_url()?>assets/images/home/kabaddi.svg">
                            Kabaddi
                            <div class="game_count">6</div>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" value="6"  data-bs-toggle="pill" data-bs-target="#pills-cricket" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                             <img src="<?= base_url()?>assets/images/home/icon-politics.svg">
                            Politics
                            <div class="game_count">10</div>
                        </button>
                      </li>
                      <li class="nav-item d-none d-lg-block d-md-block" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" value="2" data-bs-toggle="pill" data-bs-target="#pills-cricket" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                             <img src="<?= base_url()?>assets/images/home/icon-casino.svg">
                            Casino
                            <div class="game_count">10</div>
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-inplay" role="tabpanel" aria-labelledby="pills-home-tab">
                          <!--slider section-->
                              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img src="<?= base_url()?>assets/images/home/2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="<?= base_url()?>assets/images/home/5.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="<?= base_url()?>assets/images/home/6.jpg" class="d-block w-100" alt="...">
                                    </div>
                                  </div>
                             </div>
                          <!--slider section-->
                          <div class="row casino-game mt-4 mb-4">
                              <div class="col-md-1 col-3">
                                  <img src="<?= base_url()?>assets/images/home/c-1.png" class="mb-2">
                              </div>
                              <div class="col-md-1 col-3">
                                  <img src="<?= base_url()?>assets/images/home/c-2.png" class="mb-2">
                              </div>
                              <div class="col-md-1 col-3">
                                  <img src="<?= base_url()?>assets/images/home/c-3.png" class="mb-2">
                              </div>
                              <div class="col-md-1 col-3">
                                  <img src="<?= base_url()?>assets/images/home/c-4.png" class="mb-2">
                              </div>
                              <div class="col-md-1 col-3">
                                  <img src="<?= base_url()?>assets/images/home/c-6.png" class="mb-2">
                              </div>
                          </div>
                          <h6 class="mb-2 game-heading">Cricket</h6>
                          
                          
                          <!--cricket table-->
                           <div class="mb-3" id="match_table">
                                   <div class="table-row">
                                      <div class="row">
                                          <div class="width-50">
                                              <div class="row">
                                                  <div class="col-md-8 col-8">
                                                      <span class="short_date_time event-list-time">16/09/2023 03:00:00 PM</span>
                                                      <span class="event-title">England Under 19s v Australia Under 19s</span>
                                                      <span class="point-no text-danger font-weight-600">0</span>
                                                  </div>
                                                  <div class="col-md-4 col-4">
                                                      <div class="text-right d-flex mt-3" style="float:right">
                                                          <div class="width-20px"><div class="bling-btn"></div></div>
                                                          <img class="tv-img" src="https://allexchbet.com/allexchbet.com/images/tv.svg">
                                                          <span class="right fancy-active">F</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="width-50 d-none d-lg-block d-md-block">
                                              <div class="row">
                                                  <div class="point-box light-blue"><h4>-</h4>-</div>
                                                  <div class="point-box light-pink"><h4>-</h4>-</div>
                                                  <div class="point-box light-blue"><h4>-</h4>-</div>
                                                  <div class="point-box light-pink"><h4>-</h4>-</div>
                                                  <div class="point-box light-blue"><h4>-</h4>-</div>
                                                  <div class="point-box light-pink"><h4>-</h4>-</div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                         </div>
                          <!--cricket table-->
                          
                          
                          
                           <h6 class="mb-2 game-heading">Kabaddi </h6>
                           <h6 class="mb-2 game-heading">Politics </h6>
                      </div>
                      <div class="tab-pane fade" id="pills-cricket" role="tabpanel" aria-labelledby="pills-profile-tab">
                             <!--cricket table-->
                              <div class="mb-3 pills-cricket-tbl">
                                  <!--<div class="table-row">-->
                                  <!--    <div class="row">-->
                                  <!--        <div class="width-50">-->
                                  <!--            <div class="row">-->
                                  <!--                <div class="col-md-8 col-8">-->
                                  <!--                    <span class="short_date_time event-list-time">16/09/2023 03:00:00 PM</span>-->
                                  <!--                    <span class="event-title">England Under 19s v Australia Under 19s</span>-->
                                  <!--                    <span class="point-no text-danger font-weight-600">0</span>-->
                                  <!--                </div>-->
                                  <!--                <div class="col-md-4 col-4">-->
                                  <!--                    <div class="text-right d-flex mt-3" style="float:right">-->
                                  <!--                        <div class="width-20px"><div class="bling-btn"></div></div>-->
                                  <!--                        <img class="tv-img" src="https://allexchbet.com/allexchbet.com/images/tv.svg">-->
                                  <!--                        <span class="right fancy-active">F</span>-->
                                  <!--                    </div>-->
                                  <!--                </div>-->
                                  <!--            </div>-->
                                  <!--        </div>-->
                                  <!--        <div class="width-50 d-none d-lg-block d-md-block">-->
                                  <!--            <div class="row">-->
                                  <!--                <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                  <!--                <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                  <!--                <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                  <!--                <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                  <!--                <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                  <!--                <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                  <!--            </div>-->
                                  <!--        </div>-->
                                  <!--    </div>-->
                                  <!--  </div>-->
                                    <!--<div class="table-row">-->
                                    <!--  <div class="row">-->
                                    <!--      <div class="width-50">-->
                                    <!--          <div class="row">-->
                                    <!--              <div class="col-md-8 col-8">-->
                                    <!--                  <span class="short_date_time event-list-time">16/09/2023 03:00:00 PM</span>-->
                                    <!--                  <span class="event-title">England Under 19s v Australia Under 19s</span>-->
                                    <!--                  <span class="point-no text-danger font-weight-600">0</span>-->
                                    <!--              </div>-->
                                    <!--              <div class="col-md-4 col-4">-->
                                    <!--                  <div class="text-right d-flex mt-3" style="float:right">-->
                                    <!--                      <div class="width-20px"><div class="bling-btn"></div></div>-->
                                    <!--                      <img class="tv-img" src="https://allexchbet.com/allexchbet.com/images/tv.svg">-->
                                    <!--                      <span class="right fancy-active">F</span>-->
                                    <!--                  </div>-->
                                    <!--              </div>-->
                                    <!--          </div>-->
                                    <!--      </div>-->
                                    <!--      <div class="width-50 d-none d-lg-block d-md-block">-->
                                    <!--          <div class="row">-->
                                    <!--              <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                    <!--          </div>-->
                                    <!--      </div>-->
                                    <!--  </div>-->
                                    <!--</div>-->
                                    <!--<div class="table-row">-->
                                    <!--  <div class="row">-->
                                    <!--      <div class="width-50">-->
                                    <!--          <div class="row">-->
                                    <!--              <div class="col-md-8 col-8">-->
                                    <!--                  <span class="short_date_time event-list-time">16/09/2023 03:00:00 PM</span>-->
                                    <!--                  <span class="event-title">England Under 19s v Australia Under 19s</span>-->
                                    <!--                  <span class="point-no text-danger font-weight-600">0</span>-->
                                    <!--              </div>-->
                                    <!--              <div class="col-md-4 col-4">-->
                                    <!--                  <div class="text-right d-flex mt-3" style="float:right">-->
                                    <!--                      <div class="width-20px"><div class="bling-btn"></div></div>-->
                                    <!--                      <img class="tv-img" src="https://allexchbet.com/allexchbet.com/images/tv.svg">-->
                                    <!--                      <span class="right fancy-active">F</span>-->
                                    <!--                  </div>-->
                                    <!--              </div>-->
                                    <!--          </div>-->
                                    <!--      </div>-->
                                    <!--      <div class="width-50 d-none d-lg-block d-md-block">-->
                                    <!--          <div class="row">-->
                                    <!--              <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                    <!--          </div>-->
                                    <!--      </div>-->
                                    <!--  </div>-->
                                    <!--</div>-->
                                    <!--<div class="table-row">-->
                                    <!--  <div class="row">-->
                                    <!--      <div class="width-50">-->
                                    <!--          <div class="row">-->
                                    <!--              <div class="col-md-8 col-8">-->
                                    <!--                  <span class="short_date_time event-list-time">16/09/2023 03:00:00 PM</span>-->
                                    <!--                  <span class="event-title">England Under 19s v Australia Under 19s</span>-->
                                    <!--                  <span class="point-no text-danger font-weight-600">0</span>-->
                                    <!--              </div>-->
                                    <!--              <div class="col-md-4 col-4">-->
                                    <!--                  <div class="text-right d-flex mt-3" style="float:right">-->
                                    <!--                      <div class="width-20px"><div class="bling-btn"></div></div>-->
                                    <!--                      <img class="tv-img" src="https://allexchbet.com/allexchbet.com/images/tv.svg">-->
                                    <!--                      <span class="right fancy-active">F</span>-->
                                    <!--                  </div>-->
                                    <!--              </div>-->
                                    <!--          </div>-->
                                    <!--      </div>-->
                                    <!--      <div class="width-50 d-none d-lg-block d-md-block">-->
                                    <!--          <div class="row">-->
                                    <!--              <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-blue"><h4>-</h4>-</div>-->
                                    <!--              <div class="point-box light-pink"><h4>-</h4>-</div>-->
                                    <!--          </div>-->
                                    <!--      </div>-->
                                    <!--  </div>-->
                                    <!--</div>-->
                              </div>
                              <!--cricket table-->
                      </div>
                      <div class="tab-pane fade" id="pills-kabaddi" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
                      <div class="tab-pane fade" id="pills-Politics" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
                      <div class="tab-pane fade" id="pills-kabaddi" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
                      <div class="tab-pane fade" id="pills-Casino" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
                    </div>
			     </div>
			    <!--new static design -->
				  <div class="row d-none">
                    <div class="col-md-12">
					  <div class="card card-game">
					      <div class="card-header custum-header" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">CRICKET</div>
						 <div class="card-body collapse show"  id="collapse2">
						  <?php foreach($match_data as $match): 
						  ?>
						  <?php //$teamImg = getTeamImg($match->id); ?>
							 <div class="border-bottom">
							       <div class="row mt-2">
    							     <div class="col-sm-12 col-md-5 col-lg-5 col-5">
    							           <a href="<?= site_url('Client/event_details/'.$match->id); ?>">
    							             <p><?= $match->start_date; ?></p>
        							        <p class="name"> <?php echo $match->title; ?></p>
        							        <!--<p class="color-red"><b>0</b></p>-->
        							        <!--Match Bets : <?= $match->team; ?>-->
        							        <!--Session Bets : <?= $match->session; ?>-->
        							        </a>
    							     </div>
    							     <div class="float-right col-sm-12 col-md-7 col-lg-7 col-7">
    							        <div class="class">
    							            
    							            <div class="display col-sm-12" style="text-align:right">
    							                <!--<span class="active-icon"></span>-->
    							                <!--<button class="btn btn-primary">Old View</button>-->
    							                <!--<img src="<?= base_url()?>assets/images/tv.svg"  class="tv-icon">-->
    							                <!--<span class="blink-btn">BM</span>-->
    							                <!--<span class="blink-btn">F</span>-->
                                                <div class="float-right padding-5px">
                                                    <a href="<?= site_url('Client/game/'.$match->id); ?>">
                                                        <div class="match_odds_front">
                                                            <span class="back-cell" style="background-color: black;">Old View <br></span>
                                                        </div>
                                                    </a>
                                                </div>
    							                <div class="float-right padding-5px">
        							                <a href="<?= site_url('Client/event_details/'.$match->id); ?>">
                                                        <div class="match_odds_front">
                                                            <span class="back-cell" style="background-color: black;">Platinum View <br></span>
                                                        </div>
                                                    </a>
                                                </div>

    							            </div>

    							      </div> 
    							     </div>
    							 </div>
							 </div>
						  <?php endforeach ?>
						  
						 </div>
					  </div>
				    </div>
                 </div>
          <!--end page wrapper -->
          
<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });

    $(document).ready(function(){
        fetch_sport_info(1)
        // added because onclick function not works - start
        $('.nav-link').click(function(){
            sport_id = $(this).attr('value');
            if(sport_id != 'undefined')
            fetch_sport_info2(sport_id);
        })
        //added because onclick function not works - end
        
        function fetch_sport_info(sport_id){
            $.ajax({
                type: "post",
                url: "<?= base_url('Client_Api/event_list') ?>",
                data:{'sport_id':sport_id},
                beforeSend: function(){
                    $('#match_table').html("Loading")
                },
                async: true,
                success: function(response) {
                     let res = JSON.parse(response);
                     let match = ''
                     let mobile_match = ''
                     if(res.success){
                         console.log(res.data)
                         console.log(res.data.events)
                        if(res.data.events.length > 0){
                          
                          res.data.events.forEach(function(d,i){
                               if(d.inPlay=="True"){
                             match = match + ` <div class="table-row">
                                      <div class="row">
                                          <div class="width-50">
                                              <div class="row">
                                                  <div class="col-md-8 col-8">
                                                      <span class="short_date_time event-list-time">${d.created_at}</span>
                                                      <span class="event-title">${d.title}</span>
                                                      <span class="point-no text-danger font-weight-600">0</span>
                                                  </div>
                                                  <div class="col-md-4 col-4">
                                                      <div class="text-right d-flex mt-3" style="float:right">`
                                           
                                                match = match + `<div class="width-20px"><div class="bling-btn"></div></div>`   
                                            
                                                          
                                            if(d.tv=="True"){
                                                match = match + ` <img class="tv-img" src="https://allexchbet.com/allexchbet.com/images/tv.svg">`   
                                            }                
                                        if(d.f=="True"){
                                               match = match + `  <span class="right fancy-active">F</span>`
                                            }
                                        
                                        match = match + `  </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="width-50 d-none d-lg-block d-md-block">
                                              <div class="row">
                                                  <div class="point-box light-blue"><h4>${d.rate[0].k_rate ?? 0}</h4>-</div>
                                                  <div class="point-box light-pink"><h4>${d.rate[0].l_rate ?? 0}</h4>-</div>`
                                                  if(d.rate[2]){
                                                      match = match + `<div class="point-box light-blue"><h4>${d.rate[2].k_rate ?? 0}</h4>-</div>
                                                  <div class="point-box light-pink"><h4>${d.rate[2].l_rate ?? 0}</h4>-</div>` 
                                                  }else{
                                                    match = match + `<div class="point-box light-blue"><h4>-</h4>-</div>
                                                  <div class="point-box light-pink"><h4>-</h4>-</div>`  
                                                  }
                                     match = match + ` <div class="point-box light-blue"><h4>${d.rate[1].k_rate ?? 0}</h4>-</div>
                                                  <div class="point-box light-pink"><h4>${d.rate[1].l_rate ?? 0}</h4>-</div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>`
                        }
                        })
                        }else{
                            match = `<div>
                                           Data Not Found
                                        </div>`;
                            // mobile_match = `<div>
                            //               Data Not Found
                            //             </div>`;
                        }
                     }
                    $('#match_table').html(match)
                    //  $('#match_table_mobile').html(mobile_match)
                     
                }
             })
        }
                
        function fetch_sport_info2(sport_id){
            $.ajax({
                type: "post",
                url: "<?= base_url('Client_Api/event_list') ?>",
                data:{'sport_id':sport_id},
                beforeSend: function(){
                    $('#pills-cricket-tbl').html("Loading")
                },
                async: true,
                success: function(response) {
                     let res = JSON.parse(response);
                     let match = ''
                     let mobile_match = ''
                     if(res.success){
                         console.log(res.data)
                         console.log(res.data.events)
                        if(res.data.events.length > 0){
                          
                          res.data.events.forEach(function(d,i){
                             match = match + ` <div class="table-row">
                                      <div class="row">
                                          <div class="width-50">
                                              <div class="row">
                                                  <div class="col-md-8 col-8">
                                                      <span class="short_date_time event-list-time">${d.created_at}</span>
                                                      <span class="event-title">${d.title}</span>
                                                      <span class="point-no text-danger font-weight-600">0</span>
                                                  </div>
                                                  <div class="col-md-4 col-4">
                                                      <div class="text-right d-flex mt-3" style="float:right">`
                                            if(d.inPlay=="True"){
                                                match = match + `<div class="width-20px"><div class="bling-btn"></div></div>`   
                                            }
                                                          
                                            if(d.tv=="True"){
                                                match = match + ` <img class="tv-img" src="https://allexchbet.com/allexchbet.com/images/tv.svg">`   
                                            }                
                                        if(d.f=="True"){
                                               match = match + `  <span class="right fancy-active">F</span>`
                                            }
                                        
                                        match = match + `  </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="width-50 d-none d-lg-block d-md-block">
                                              <div class="row">
                                                  <div class="point-box light-blue"><h4>${d.rate[0].k_rate ?? 0}</h4>-</div>
                                                  <div class="point-box light-pink"><h4>${d.rate[0].l_rate ?? 0}</h4>-</div>`
                                                  if(d.rate[2]){
                                                      match = match + `<div class="point-box light-blue"><h4>${d.rate[2].k_rate ?? 0}</h4>-</div>
                                                  <div class="point-box light-pink"><h4>${d.rate[2].l_rate ?? 0}</h4>-</div>` 
                                                  }else{
                                                    match = match + `<div class="point-box light-blue"><h4>-</h4>-</div>
                                                  <div class="point-box light-pink"><h4>-</h4>-</div>`  
                                                  }
                                     match = match + ` <div class="point-box light-blue"><h4>${d.rate[1].k_rate ?? 0}</h4>-</div>
                                                  <div class="point-box light-pink"><h4>${d.rate[1].l_rate ?? 0}</h4>-</div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>`
                        })
                        }else{
                            match = `<div>
                                           Data Not Found
                                        </div>`;
                            // mobile_match = `<div>
                            //               Data Not Found
                            //             </div>`;
                        }
                     }
                    $('#pills-cricket').html(match)
                     
                }
             })
        }
        
    });
</script>     
        
