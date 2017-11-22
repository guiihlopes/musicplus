$(document).ready(function () {
  var myPlaylist = new jPlayerPlaylist({
    jPlayer: "#jplayer_N",
    cssSelectorAncestor: "#jp_container_N"
  }, [
      {
        title: "Bubble",
        artist: "Miaow",
        mp3: "http://flatfull.com/themes/assets/musics/Miaow-07-Bubble.mp3",
        oga: "http://flatfull.com/themes/assets/musics/Miaow-07-Bubble.ogg",
      },
    ], {
      playlistOptions: {
        enableRemoveControls: true,
        autoPlay: true
      },
      swfPath: "js/jPlayer",
      supplied: "webmv, ogv, m4v, oga, mp3",
      smoothPlayBar: true,
      keyEnabled: true,
      audioFullScreen: false
    });

  const itemOverlay = $('.composicao-item .item-overlay');
  const itemPlayButton = itemOverlay.find('.center a');

  const removeAllActives = () => {
    itemPlayButton.removeClass('active');
    itemOverlay.removeClass('active');
  };

  itemPlayButton.click(function (ev) {
    ev.preventDefault();
    const isActiveButton = this.classList.contains('active');
    const parentItem = $(this).parent().parent().parent().parent();
    const overlay = parentItem.find('.item-overlay');
    const isActiveOverlay = overlay.hasClass('active');
    const href = $(this).attr('href');
    const musicInfo = parentItem.find('.padder-v');
    const musicTitle = musicInfo.find('a:first-child').text();
    const artistName = musicInfo.find('a:last-child').text();
    const music = {
      title: musicTitle,
      artist: artistName,
      mp3: href,
    };

    removeAllActives();
    if (!isActiveOverlay) {
      overlay.addClass('active');
    }
    if (!isActiveButton) {
      this.classList.add('active');
      myPlaylist.add(music);
      const lastItem = myPlaylist.playlist.length;
      myPlaylist.play(lastItem - 1);
    } else {
      myPlaylist.pause();
    }
  });

  $(document).on($.jPlayer.event.pause, myPlaylist.cssSelector.jPlayer, function () {
    $('.musicbar').removeClass('animate');
    $('.jp-play-me').removeClass('active');
    $('.jp-play-me').parent('li').removeClass('active');
  });

  $(document).on($.jPlayer.event.play, myPlaylist.cssSelector.jPlayer, function () {
    $('.musicbar').addClass('animate');
  });

  $(document).on('click', '.jp-play-me', function (e) {
    e && e.preventDefault();
    var $this = $(e.target);
    if (!$this.is('a')) $this = $this.closest('a');

    $('.jp-play-me').not($this).removeClass('active');
    $('.jp-play-me').parent('li').not($this.parent('li')).removeClass('active');

    $this.toggleClass('active');
    $this.parent('li').toggleClass('active');
    if (!$this.hasClass('active')) {
      myPlaylist.pause();
    } else {
      var i = Math.floor(Math.random() * (1 + 7 - 1));
      myPlaylist.play(i);
    }

  });

});