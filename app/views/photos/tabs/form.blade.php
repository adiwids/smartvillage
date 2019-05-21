<div class="panel-body">
  <div class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4 photo-booth">
    <div class="frame pas-photo" id="photo_frame"></div>
    <div id="photo_preview" class="frame pas-photo" style="display: none;">
      <img src="/assets/thumb_missing_photo.jpg" alt="thumb_missing_photo.jpg" class="img">
    </div>
    <div class="form-group text-center">
      <div role="ifcamsupported">
        <button class="btn btn-primary has-icon" type="button" id="snap_button">
          <i class="glyphicon glyphicon-camera"></i> Take photo
        </button>
        <div role="ifcamcaptured" style="display: none;">
          <button class="btn btn-link has-icon" type="button" id="retake_button">
            <i class="glyphicon glyphicon-refresh"></i> Retake
          </button>
        </div>
        <p>or</p>
      </div>
      <input type="file" class="form-control">
    </div>
  </div>
</div>
<div class="panel-footer text-center">
  <button class="btn btn-primary has-icon" type="button" id="upload_button">
    <i class="glyphicon glyphicon-upload"></i> Upload
  </button>
</div>
