<a href="#" class="has-icon" data-toggle="popover"
                             data-html="true"
                             data-html-content="#{{ implode('_', [$resource, 'row', $id]) }}"
                             data-placement="top"
                             data-trigger="focus">
  <i class="glyphicon glyphicon-option-vertical"></i>
</a>
<div class="popover-content hidden" id="{{ implode('_', [$resource, 'row', $id]) }}">
  <ul class="nav">
    <li>
      <a href="/{{ implode('/', [$resource, $id, 'edit']) }}" class="has-icon">
        <i class="glyphicon glyphicon-pencil"></i>
        Edit
      </a>
    </li>
    <li>
      <a href="/{{ implode('/', [$resource, $id]) }}" class="has-icon text-danger" data-remote="true"
                                                                                  data-method="delete"
                                                                                  data-confirm="Are you sure?">
        <i class="glyphicon glyphicon-trash"></i>
        Delete
      </a>
    </li>
  </ul>
</div>
