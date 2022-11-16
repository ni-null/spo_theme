<div class="index-block_4 container ">

    <h4>影音專區</h4>

    <div class="row ">

        <div class="video">

            <div class="card">
                <div class="card-play"></div>
                <div class="card-video">
                    <iframe id="video"
                        src="https://www.youtube.com/embed/SG33GAKQTk0?enablejsapi=1&amp;html5=1&amp;iv_load_policy=3&amp;rel=0&amp;showinfo=0"
                        frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>

    </div>


</div>




<script>
    // Variables
    var player,
        card = document.querySelector('.card'),
        play = document.querySelector('.card-play'),
        video = document.querySelector('.card-video');


    // Shine effect
    card.onmousemove = function (e) {
        const x = e.pageX - card.offsetLeft;
        const y = e.pageY - card.offsetTop;

        card.style.setProperty('--x', x + 'px');
        card.style.setProperty('--y', y + 'px');
    }


    // Youtube API
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('video', {
            events: {
                'onReady': onPlayerReady
            }
        });
    }


    // Player Ready
    function onPlayerReady(event) {
        play.addEventListener('click', function () {
            card.classList.add('video-is-open');
            setTimeout(function () {
                video.style.display = 'block';
                player.playVideo();
            }, 500);
        });
    }


    // Inject YouTube API script
    var tag = document.createElement('script');
    tag.src = "//www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>