<!-- internal javascript, so it can mix javascript with PHP -->
<script type="text/javascript">
/* <![CDATA[ */  
$j(document).ready(function() {



<?php if (get_option('wp_expandbrowseby') == 'Expand') { ?>
	$j('#collapseOneHouses').addClass('in');
	$j('#collapseOneIdx').addClass('in');
	$j('#collapseOneBoth').addClass('in');
	$j('#collapseOneCars').addClass('in');
<?php } ?>

<?php if (get_option('wp_expandsearch_realestate') == 'Expand') { ?>
	$j('#collapseTwoHouses').addClass('in');
	$j('#collapseThreeBoth').addClass('in');
<?php } ?>

<?php if (get_option('wp_expandsearch_idx') == 'Expand') { ?>
	$j('#collapseTwoIdx').addClass('in');
	$j('#collapseTwoBoth').addClass('in');
<?php } ?>

<?php if (get_option('wp_expandsearch_cars') == 'Expand') { ?>
	$j('#collapseTwoCars').addClass('in');
<?php } ?>


$j('.dsidx-search-button input[type=submit]').val('<?php echo get_option('wp_searchbutton_text') ?>');

 





  $j('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#slider2'
  });
   
  $j('#slider2').flexslider({
    animation: "fade",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
  
$j('.textwidget').fitVids();

$j('.dropdown-toggle').dropdown();

/* force nth of type to work on old IE */
$j.expr[':']['nth-of-type'] = function(elem, i, match) {
    var parts = match[3].split("+");
    return (i + 1 - (parts[1] || 0)) % parseInt(parts[0], 10) === 0;
};


$j('.detailpagebigimage').hover(function() {
	$j(this).stop().animate({"opacity" : .8});
	$j('.imagehover').stop().animate({"opacity" : .8});
}, function(){
	$j(this).stop().animate({"opacity" : 1});
	$j('.imagehover').stop().animate({"opacity" : 0});
});


$j('#secondaryheadermenu > li:nth-child(1)').before($j('#login > li').show());


$j('div#form form').attr('name', 'form');
$j('div.textwidget iframe').attr('frameborder', '0');
$j('div.textwidget iframe').attr('scrolling', 'no');
$j('div.textwidget iframe').attr('marginheight', '0');
$j('div.textwidget iframe').attr('marginwidth', '0');

$j('.dsidx-search-button input[type=submit]').addClass('btn btn-large btn-block btn-inverse');

$j('ul.wp-tag-cloud').addClass('menu-sub');
$j('ul.wp-tag-cloud li a').addClass('menu-subbutton');
$j('ul.wp-tag-cloud li a').wrapInner('<span class="menu-label" />');



$j('.personresultblock:odd').after('<div style="clear: both;"></div>');
$j('.personresultblock:even').addClass('alpha');
$j('.personresultblock:odd').addClass('omega');

$j('.homepageblogitem:nth-of-type(4n+1)').addClass('alpha');
$j('.homepageblogitem:nth-of-type(4n+4)').addClass('omega');
$j('.homepageblogitem:nth-of-type(4n+4)').after('<div style="clear: both;"></div>');

$j('.blogpageblogitem:nth-of-type(3n+1)').addClass('alpha');
$j('.blogpageblogitem:nth-of-type(3n+3)').addClass('omega');
$j('.blogpageblogitem:nth-of-type(3n+3)').after('<div style="clear: both;"></div>');

$j('.specslist.fourcolumns li.four.columns:nth-child(3n+1) ').addClass('alpha');
$j('.specslist.fourcolumns li.four.columns:nth-child(3n+3) ').addClass('omega');

$j('.listingblockgrid:nth-of-type(3n+1)').addClass('alpha');
$j('.listingblockgrid:nth-of-type(3n+3)').addClass('omega');
$j('.listingblockgrid:nth-of-type(3n+3)').after('<div style="clear: both;"></div>');




$j('h2.bar, h3.bar, h4.bar').wrapInner('<span />');
// $j('.wp-post-image, img.border').wrap('<div class="imgborder" />');
$j('#slider i').addClass('icon-white');

$j('.wpcf7 input[type=submit]').addClass('btn btn-large');
$j('.agentbox .wpcf7 input[type=submit]').addClass('btn-block btn-colorscheme');

$j('.dsidx-search-button br').addClass('hide');

$j('.mc-button, .dsidx-contact-form-submit').addClass('btn');

$j('input[type=submit]').addClass('btn');

$j('.reduced, .servicehistoryicon, #socialheader a, .qtrans_language_chooser a, a.tt, a.printbutton').tooltip();
$j('.servicehistoryicon, .reduced').click(function() {
	return false;
});

$j("a[rel^='prettyPhoto']").prettyPhoto();




$j('#rentorbuy select').change(function() {

	var value = $j(this).val();
	if (value == "rent") {
		$j('#buyprices').hide();
		$j('#rentprices').show();
	} 
	
	if (value == "buy" || value == "") {
		$j('#buyprices').show();
		$j('#rentprices').hide();
	} 
	
});


$j('#customsearch input[type=submit]').click(function() {
	var value = $j('#rentorbuy select').val();
	if (value == "rent") {
		$j('#buyprices').hide();
		$j('#rentprices').show();
	} 
	
	if (value == "buy" || value == "") {
		$j('#buyprices').show();
		$j('#rentprices').hide();
	} 

});


$j('#loancalculator_cars button').click(function() {
	LoanAmount = $j('#LoanAmount').val();
	DownPayment= $j('#DownPayment').val();

	
	
	if ($j('#InterestRate').val() == "0") {
		AnnualInterestRate = "0.0001";
	} else {
		AnnualInterestRate = ($j('#InterestRate').val())/100;
	}
	Years =  $j('#NumberOfYears').val();
	MonthRate = AnnualInterestRate/12;
	NumPayments = Years * 12;
	Prin = LoanAmount - DownPayment;
	MonthPayment=Math.floor((Prin*MonthRate)/(1-Math.pow((1+MonthRate),(-1*NumPayments)))*100)/100;
	$j('#NumberOfPayments').val(NumPayments);
	$j('#MonthlyPayment').val(MonthPayment);
	$j('#MonthlyPayment').addClass('calculatorresult');
	return false;
});

//$j("#sliderimage").preloadify({ imagedelay:300 });



$j('.calltoactionblock img').hover(function() {
	$j('.imagehover').show();
	$j(this).stop().animate({"opacity" : 1});									
}, function(){
	$j('.imagehover').hide();
	$j(this).stop().animate({"opacity" : .8});	
});


$j("#contactagent").insertAfter('#agentcontainer');


$j('.comment-body').append("<div class='comment_pointer' />");

  $j("ul.sf-menu").supersubs({ 
	minWidth:    17,   // minimum width of sub-menus in em units 
	maxWidth:    25,   // maximum width of sub-menus in em units 
	extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
					   // due to slight rounding differences and font-family 
}).superfish();  // call supersubs first, then superfish, so that subs are 
				 // not display:none when measuring. Call before initialising 
				 // containing tabs for same reason. 


function remember( selector ){
$j(selector).each(
function(){
//if this item has been cookied, restore it
var name = $j(this).attr('name');
if( $j.cookie( name ) ){
$j(this).val( $j.cookie(name) );
}
//assign a change function to the item to cookie it
$j(this).change(
function(){
$j.cookie(name, $j(this).val(), { path: '/', expires: 365 });
}
);
}
);
}
remember( '[name=manufacturer_level2]' );

});



/* ]]> */
</script>