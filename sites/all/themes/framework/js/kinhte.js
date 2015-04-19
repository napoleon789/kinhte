jQuery(document).ready(function() {
    var danhmuc1 = jQuery(".pane-quicktabs-home-tab1 h2").html();
    var danhmuc2 = jQuery(".pane-quicktabs-home-tab2 h2").html();
    console.log(danhmuc1);
    jQuery("#quicktabs-home_tab1 .item-list").prepend('<h2 class="pane-title tabjs">'+danhmuc1+'</h2>');
    jQuery("#quicktabs-home_tab2 .item-list").prepend('<h2 class="pane-title tabjs">'+danhmuc2+'</h2>');
});