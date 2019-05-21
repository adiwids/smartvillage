<div class="panel-body">
  <div class="bulk-action pull-right">
    @include('shared/row_bulk_action_menu')
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>
          <label for="check_all_photos">
            <input type="checkbox" id="check_all_photos" data-toggle="checktablerows" data-target=".row-checkbox">
          </label>
        </th>
        <th style="width: 72px;">Thumbnail</th>
        <th>Alt. Text</th>
        <th style="width: 24px;">Current?</th>
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
        <td class="text-center">
          <input type="radio" name="photo[default]" value="1" checked>
        </td>
        <td>
          <a href="/photos/1" class="has-icon text-danger" data-remote="true"
                                                           data-method="delete"
                                                           data-confirm="Are you sure?">
            <i class="glyphicon glyphicon-trash"></i>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<div class="panel-footer">
  <div class="row">
    <div class="col-lg-8 col-md-8">
      @include('shared/pagination_bar', ['_class' => ['on-foot']])
    </div>
    <div class="col-lg-4 col-md-4 text-right">
      Displaying 1 of 1 record(s)
    </div>
  </div>
</div>
