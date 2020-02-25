window.$ = jQuery.noConflict();

window.isBlank = function(arg) {
  return (typeof arg == 'null') || (typeof arg == 'undefined') ||
    (typeof arg == 'string' && arg.length == 0);
};

window.remoteAnchorOnClickListener = function(evt) {
  evt.preventDefault();
  var href = $(this).attr('href');
  var method = $(this).attr('data-method');
  var confirm_message =$(this).attr('data-confirm');

  if(!isBlank(confirm_message)) {
    if(confirm(confirm_message)) {
      sendRemote(href, method);
    } else {
      return false;
    }
  } else {
    sendRemote(href, method);
  }
};

window.sendRemote = function(href, method) {
  $.ajax({
    url: href,
    method: method,
    type: 'script',
    complete: function(request, status) {
      console.debug(status);
    },
    success: function(script, status, request) {
      console.debug(status);
      eval(script);
    },
    error: function(request, status, error) {
      console.debug(status);
    }
  });
};

window.initDateTimePicker = function(selector, options = {}) {
  var defaultOptions = { locale: $('html').attr('lang') };
  $(selector).datetimepicker(Object.assign(defaultOptions, options));
};

$(document).ready(function() {
  console.info("Application ready with jQuery %s loaded", jQuery.fn.jquery);
  moment.locale($(document).attr('lang'));
  $('[data-toggle="popover"]').each(function() {
    var _el = $(this);
    var html = _el.data('html') !== null || _el.data('html') !== undefined;
    $(this).popover({
      html: html,
      content: function() {
        var _content = _el.data('content');
        if(html) {
          _content = _el.next(`.popover-content${_el.data('html-content')}`).html();
        }
        return _content;
      }
    });
  });
  $('[data-toggle="checktablerows"]').each(function() {
    var _el = $(this);
    _el.change(function() {
      var checked = _el.is(':checked');
      var checkboxes = _el.closest('table').find(`input:checkbox${_el.data('target')}`);
      checkboxes.each(function() {
        $(this).prop('checked', checked);
        if(checked) {
          $(this).attr('checked', 'checked');
        } else {
          $(this).removeAttr('checked');
        }
      });
    });
  });
  $('a[data-remote="true"]').each(function() {
    $(this).click(remoteAnchorOnClickListener);
  });
  initDateTimePicker('.birthdate.date-picker', { format: 'L', maxDate: moment() });
  initDateTimePicker('.year-picker', { format: 'YYYY', maxDate: moment() });
});
