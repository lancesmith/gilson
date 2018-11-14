var feed = new Instafeed({
      get: 'user',
      userId: '364303126',
      accessToken: '364303126.1677ed0.5914a1763fd64398bce35952707e4ad5',
      template: '<div class="insta-wrapper"><div class="inner-wrapper"><a href="{{link}}"><img src="{{image}}" /></a></div><a href="{{link}}" target="_blank"><div class="likes-comments"><div class="inner-spans"><span class="fas fa-heart"><p>{{likes}}</p></span> <span class="fas fa-comment"><p>{{comments}}</p></span></div></a></div></div>',
      limit: 3,
      resolution: 'low_resolution'
  });
  feed.run();