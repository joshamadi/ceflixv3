<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Owl Carousel -->
<script src="vendor/owl-carousel/owl.carousel.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/custom.js"></script>



<script src="js/main.js"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    axios.get('/user', {
        params: {
            ID: getResult2
        }
    })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        })
        .then(function () {
            // always executed
        });


    //                                const axios = require('axios');
    //
    //                                // Make a request for a user with a given ID
    //                                axios.get('http://ceflixv3.loc/bridge/showRecent')
    //                                    .then(function (response) {
    //                                        // handle success
    //                                        console.log(response);
    //                                    })
    //                                    .catch(function (error) {
    //                                        // handle error
    //                                        console.log(error);
    //                                    })
    //                                    .then(function () {
    //                                        // always executed
    //                                    });


    //                                function performGetRequest2() {
    //                                    var resultElement = document.getElementById('getResult2');
    //                                    var todoId = document.getElementById('todoId').value;
    //                                    resultElement.innerHTML = '';
    //
    //                                    axios.get('http://ceflixv3.loc/bridge/showRecent', {
    //                                        params: {
    //                                            id: todoId
    //                                        }
    //                                    })
    //                                        .then(function (response) {
    //                                            console.log(response);
    //                                            resultElement.innerHTML = generateSuccessHTMLOutput(response);
    //                                        })
    //                                        .catch(function (error) {
    //                                            resultElement.innerHTML = generateErrorHTMLOutput(error);
    //                                        });
    //                                }



    function Song(title, artist, duration){
        this.title = title;
        this.artist = artist;
        this.duration = duration;

    }

    Song.prototype.play = function(){
        this.isPlaying = true;
    }
    Song.prototype.stop = function(){
        this.isPlaying = false;
    }
    Song.prototype.toHTML = function(){

    }



    function Playlist(){
        this.songs = [];
        this.nowPlayingIndex = 0;
    }
    Playlist.prototype.add = function(){
        this.songs.push(song);
    }
    Playlist.prototype.play = function(){
        var currentSong  = this.songs[this.nowPlayingIndex];
        currentSong.stop();
    }
    Playlist.prototype.stop = function(){
        var currentSong  = this.songs[this.nowPlayingIndex];
        currentSong.stop();
    }
    Playlist.prototype.next = function(){
        this.stop();
        this.nowPlayingIndex++;
        if(this.nowPlayingIndex === this.songs.length)
            this.nowPlayingIndex = 0;
    }
    Playlist.prototype.renderIn = function(){

    }


    var playlist = new Playlist();

    var hereComesTheSun = new Song("Here come the sun", "the Battles", "2.35");
    var walkingInTheSun = new Song("walking in the sun", "matchless love", "3.35");

    Playlist.add(hereComesTheSun);
    Playlist.add(walkingInTheSun);

</script>

</body>
</html>