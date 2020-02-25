<div class="row" style="margin-bottom: 15px;">
  <div class="col-lg-12">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation"{{ $address_options_available ? 'class=active' : '' }}>
        <a href="#available_addresses" role="tab" data-toggle="tab">
          <i class="glyphicon glyphicon-check"></i>
          Select Address
        </a>
      </li>
      <li role="presentation"{{ !$address_options_available ? 'class=active' : '' }}>
        <a href="#new_address" role="tab" data-toggle="tab">
          <i class="glyphicon glyphicon-plus"></i>
          Address
        </a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane{{ $address_options_available ? ' active' : '' }}" id="available_addresses">
        <div class="panel panel-default panel-folder">
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 56px;" class="text-center">
                    <i class="glyphicon glyphicon-ok" title="Current address"></i>
                  </th>
                  <th>Address</th>
                  <th>Phone</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                    <input type="radio" name="family[address_id]" value="1">
                  </td>
                  <td>1st Lane Ave, NY, 10245</td>
                  <td>+1(123)4567890</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="tab-pane{{ !$address_options_available ? ' active' : '' }}" id="new_address">
        <div class="panel panel-default panel-folder">
          <div class="panel-body">
            <form action="#">
              @include('addresses/fields')
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
