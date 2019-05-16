$(document).ready(function() {
  var frame = $('#photo_frame');
  var preview = $('#photo_preview');
  var dimension = {
    width: frame.width(),
    height: frame.height()
  };
  Webcam.set({
    width: dimension.width * 2,
    height: dimension.height * 2,
    dest_width: dimension.width * 2,
    dest_height: dimension.height * 2,
    crop_width: dimension.width,
    crop_height: dimension.height,
    image_format: 'jpeg',
    jpeg_quality: 90
  });
  Webcam.setSWFLocation('/assets/webcam.swf');
  if(frame.length > 0) {
    Webcam.reset();
    Webcam.attach(`#${frame.attr('id')}`);
  } else {
    try {
      Webcam.reset();
    } catch(e) { console.error(e); }
  }
  $('#snap_button').click(function() {
    var snap = $(this);
    Webcam.snap(function(uri) {
      frame.hide();
      preview.find('img').attr('src', uri).attr('alt', moment().unix());
      preview.show();
      snap.hide();
      snap.next().show();
    });
  });
  $('#retake_button').click(function() {
    var retake = $(this);
    frame.show();
    preview.hide();
    preview.find('img').attr('src', '');
    retake.parent().hide();
    retake.parent().prev('#snap_button').show();
  });
});
