

Drupal.behaviors.jsToolsTooltip = function (context) {
  jQuery('.views_view__top_rated_test > .view-content').attr('id', 'top_rated_tooltip');
    var text_ajax;
    var trigger = $('#top_rated_tooltip > div.views-row');

//  trigger.after('<div class=tooltip ></div>');
//    $('.tooltip').html('<div class="top_rated_tooltip_text"></div>');

    trigger.tooltip(
      { offset:[117, -200],
        delay:0,
        effect:'toggle',
        predelay:60

//        onBeforeShow:function (event) {
//
//          $.get('http://127.0.0.1/cs/get_cfs_info/ajax', {}, function(data){
//            console.dir(data);
//            text_ajax=data;
//          });
//
//          this.getTip().children('.top_rated_tooltip_text').text(text_ajax);
//
//        }
      }
    );

};

Drupal.behaviors.cs_fullbody = function(context) {
  $('.button_show_all_body', context).bind('click', function () {
    $.ajax({
      type:"GET",
      url:Drupal.settings.basePath + 'node/get/fullbody/' + parseInt(this.id, 10),
      success:output_full_body,
      dataType: 'json'
    });
    return false;
  });

  var output_full_body = function (response) {
    $('.body-2-car_for_sale-text > p').html(response);
  }
}

//
//Drupal.behaviors.jsToolsTooltip = function (context) {
//  jQuery('.views_view__top_rated_test > .view-content').attr('id', 'top_rated_tooltip');
//    var text_ajax;
//    var trigger = $('#top_rated_tooltip > div.views-row');
//
//  trigger.after('<div class=tooltip ></div>');
//    $('.tooltip').html('<div class="top_rated_tooltip_text"></div>');
//
//    trigger.tooltip(
//      { offset:[117, -200],
//        delay:0,
//        effect:'toggle',
//        predelay:60,
//
//        onBeforeShow:function (event) {
//
//          $.ajax('http://127.0.0.1/cs/get_cfs_info/ajax',
//            { async: false,
//
//            }, function(data){
//            console.dir(data);
//            text_ajax=data;
//
//          });
//
//          this.getTip().children('.top_rated_tooltip_text').text(text_ajax);
//
//        }
//      }
//    );
//
//};