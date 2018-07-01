$(document).ready(function () {
  var myPlaylist = new jPlayerPlaylist({
    jPlayer: "#jplayer_N",
    cssSelectorAncestor: "#jp_container_N"
  }, [], {
      playlistOptions: {
        enableRemoveControls: true,
        autoPlay: false
      },
      swfPath: "js/jPlayer",
      supplied: "webmv, ogv, m4v, oga, mp3",
      smoothPlayBar: true,
      keyEnabled: true,
      audioFullScreen: false
    });

  const item = $('.composicao-item');
  const itemPlayButton = item.find('a:first-child');

  const removeAllActives = () => {
    itemPlayButton.removeClass('btn-info');
  };

  itemPlayButton.click(function (ev) {
    ev.preventDefault();
    const isActiveButton = this.classList.contains('btn-success');
    const parentItem = $(this).parent().parent().parent().parent();
    const href = $(this).attr('href');
    const musicColor = $(this).data('color');
    const musicId = $(this).data('id');
    const musicTitle = $('.composicao-title').text();
    const artistName = $('.composicao-autor').text();
    const music = {
      id: musicId,
      title: musicTitle,
      artist: artistName,
      mp3: href,
    };

    $(".vbox > footer").css('background', musicColor);

    removeAllActives();
    if (!isActiveButton) {
      this.classList.add('btn-success');
      var musicIndex = null;
      myPlaylist.playlist.map((obj, index) => {
        if (obj.id == musicId) {
          musicIndex = index;
        }
      });
      if (musicIndex !== null) {
        if (musicIndex == myPlaylist.current) {
          myPlaylist.play();
        } else {
          myPlaylist.play(musicIndex);
        }
      } else {
        myPlaylist.add(music);
        const lastItem = myPlaylist.playlist.length;
        myPlaylist.play(lastItem - 1);
      }
    } else {
      myPlaylist.pause();
      $(".vbox > footer").css('background', '#5a6a7a');
      itemPlayButton.removeClass('btn-success').addClass('btn-info');
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