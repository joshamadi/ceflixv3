<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Owl Carousel -->
<script src="vendor/owl-carousel/owl.carousel.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/custom.js"></script>





<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
  //  const axios = require('axios');
    function loadNewvideos() {
        axios.get('/bridge/showRecent')
            .then(function (response) {
                // handle success


                var output = "";
                for(var i=0; i < response.data.data.length; i++ ) {
                    output += '<div class="col-xl-2 col-sm-6 mb-3"><div class="video-card"><div class="video-card-image"style="max-height:130px;over-flow:hidden"><a class="play-icon" href="{{('video')}}"><i class="fas fa-play-circle"></i></a><a href="{{('single_channel')}}"><img  class="img-fluid" src="'+response.data.data[i].thumbnail+'" alt=""></a>  </div> <div class="video-card-body"> <div class="video-title"> <a href="{{('single_channel')}}">'+response.data.data[i].videos_title.substring(0,30).toLowerCase()+'</a> </div> <div class="video-page text-success">'+response.data.data[i].channelName.substring(0,30)+'  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a> </div> <div class="video-view">'+response.data.data[1].numOfViews+' view(s) &nbsp;<i class="fas fa-calendar-alt"></i> '+response.data.data[1].timeAgo+' </div> </div> </div> </div>';
                }

                $("#pinned_videos").append(output);
                $("#spinner_pinned_videos").hide();


               // console.log(response);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });
    }


  function loadFeatureVideos(){

      axios.get('/bridge/showFeatured')
          .then(function (response) {
              // handle success


              var output = "";
              for(var i=0; i < response.data.data.length; i++ ) {
                  output += '<div class="col-xl-2 col-sm-6 mb-3"><div class="video-card"><div class="video-card-image"style="max-height:130px;over-flow:hidden"><a class="play-icon" href="{{('video')}}"><i class="fas fa-play-circle"></i></a><a href="{{('single_channel')}}"><img  class="img-fluid" src="'+response.data.data[i].thumbnail+'" alt=""></a>  </div> <div class="video-card-body"> <div class="video-title"> <a href="{{('single_channel')}}">'+response.data.data[i].videos_title.substring(0,30).toLowerCase()+'</a> </div> <div class="video-page text-success">Channnel name <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a> </div> <div class="video-view">'+response.data.data[1].numOfViews+' view(s) &nbsp;<i class="fas fa-calendar-alt"></i> '+response.data.data[1].timeAgo+' </div> </div> </div> </div>';
              }

              $("#featured_videos").append(output);

              $("#spinner_subVideo").hide();


              console.log(response);
          })
          .catch(function (error) {
              // handle error
              console.log(error);
          })
          .then(function () {
              // always executed
          });

  }


  function showRecommVideos(){

      axios.get('/bridge/showRecomm')
          .then(function (response) {
              // handle success


              var output = "";
              for(var i=0; i < response.data.data.length; i++ ) {
                  output += '<div class="col-xl-2 col-sm-6 mb-3"><div class="video-card"><div class="video-card-image"style="max-height:130px;over-flow:hidden"><a class="play-icon" href="{{('video')}}"><i class="fas fa-play-circle"></i></a><a href="{{('single_channel')}}"><img  class="img-fluid" src="'+response.data.data[i].thumbnail+'" alt=""></a>  </div> <div class="video-card-body"> <div class="video-title"> <a href="{{('single_channel')}}">'+response.data.data[i].videos_title.substring(0,30).toLowerCase()+'</a> </div> <div class="video-page text-success">'+response.data.data[i].description.substring(0,30)+'  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a> </div> <div class="video-view">'+response.data.data[1].numOfViews+' view(s) &nbsp;<i class="fas fa-calendar-alt"></i> timeAgo </div> </div> </div> </div>';
              }

              $("#trending-video").append(output);

              $("#spinner-trending-video").hide();


              console.log(response);
          })
          .catch(function (error) {
              // handle error
              console.log(error);
          })
          .then(function () {
              // always executed
          });

  }
</script>

<script>
    loadNewvideos();
    loadFeatureVideos();
    showRecommVideos();

</script>



</body>
</html>