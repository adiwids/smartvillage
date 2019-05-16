<div class="panel-body">
  <div class="col-lg-8 col-md-8">
    <table class="table">
      <thead>
        <tr>
          <th>
            <label for="check_all_photos">
              <input type="checkbox" id="check_all_photos" data-toggle="checktablerows" data-target=".row-checkbox">
            </label>
          </th>
          <th>Thumbnail</th>
          <th>Alt. Text</th>
          <th style="width: 80px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="width: 24px;">
            <input type="checkbox" name="bulk_ids[]" class="row-checkbox" value="1">
          </td>
          <td>
            <img src="/assets/thumb_missing_photo.jpg" alt="thumb_missing_photo.jpg" class="img img-thumbnail">
          </td>
          <td>thumb_missing_photo.jpg</td>
          <td>
            @include('shared/row_elipsis_menu', ['resource' => 'photos',  'id' => 1])
          </td>
        </tr>
      </tbody>
    </table>
    <div class="row">
      <div class="col-lg-8 col-md-8">
        @include('shared/pagination_bar', ['_class' => ['on-foot']])
      </div>
      <div class="col-lg-4 col-md-4 text-right">
        Displaying 1 of 1 record(s)
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="photo-booth">
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
            <button class="btn btn-link has-icon" type="button" id="upload_button">
              <i class="glyphicon glyphicon-upload"></i> Upload
            </button>
          </div>
          <p>or</p>
        </div>
        <div class="input-group">
          <input type="file" class="form-control">
          <div class="input-group-btn">
            <button class="btn btn-default has-icon">
              <i class="glyphicon glyphicon-upload"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
