
//===================================================================================================
// Model Sub-Parcel
//===================================================================================================

// calculate plot ratio
function calcPlotRatio() {
    gfa = $("input[name='gross_floor_area_in_meter']").val();
    subparcelAreaMeter = $("input[name='development_area_in_meter']").val();
    result = gfa / subparcelAreaMeter;
    $("input[name='plot_ratio']").val(result.toFixed(2));
}

$("input[name='gross_floor_area_in_meter']").on('change', function() {
    calcPlotRatio();
});


//DENSITY VALUE CHANGES
$('.density_unit_hect').on('change', function() {
    var hect = checkNumber(parseFloat($(this).find('.density_unit_hect').val()));
    var hectInAcre = hectToAcres(hect);
    $(this).find('.density_unit_acres').val(hectInAcre.formatNumber(2, '.', ''));
});

$('.density_unit_acres').on('change', function() {
    var hect = checkNumber($(this).parents('.sub-parcel-edit-form').find('.density_unit_acres').val());
    var acreInHect = acreToHect(hect);

    $(this).parents('.development').find('.density_unit_hect').val(acreInHect.formatNumber(2, '.', ''));
});
//DENSITY VALUE CHANGES ./


$('.plinth_area_in_meter').on('change', function() {
    var total = 0;
    var a = checkNumber(parseFloat($(this).parents('.development').find('.plinth_area_in_meter').val()));
    var b = checkNumber(parseFloat($(this).parents('.development').find('.soft_landscape_area_in_meter').val()));
    var c = checkNumber(parseFloat($(this).parents('.development').find('.hard_landscape_area_in_meter').val()));
    var d = checkNumber(parseFloat($(this).parents('.development').find('.road_car_park_area_in_meter').val()));
    total = a + b + c + d;
    $(this).parents('.development').find('.development_area_in_meter').val((total).formatNumber(2, '.', ''));
    $(this).parents('.development').find('.development_area_in_hectares').val((total / 10000).formatNumber(2, '.', ''));
    $(this).parents('.development').find('.development_area_in_acres').val((total / 4046.862669715303).formatNumber(2, '.', ''));
    var e = checkNumber(parseFloat($(this).find('.buildable_area_in_meter').val()));
    $(this).parents('.development').find('.building_coverage').val(buildCover(total, e));
    calcPlotRatio();
});

$('.soft_landscape_area_in_meter').on('change', function() {
    var total = 0;
    var a = checkNumber(parseFloat($(this).parents('.development').find('.plinth_area_in_meter').val()));
    var b = checkNumber(parseFloat($(this).parents('.development').find('.soft_landscape_area_in_meter').val()));
    var c = checkNumber(parseFloat($(this).parents('.development').find('.hard_landscape_area_in_meter').val()));
    var d = checkNumber(parseFloat($(this).parents('.development').find('.road_car_park_area_in_meter').val()));
    total = a + b + c + d;
    $(this).parents('.development').find('.development_area_in_meter').val(total.formatNumber(2, '.', ''));
    $(this).parents('.development').find('.development_area_in_hectares').val((total / 10000).formatNumber(2, '.', ''));
    $(this).parents('.development').find('.development_area_in_acres').val((total / 4046.862669715303).formatNumber(2, '.', ''));
    var e = checkNumber(parseFloat($(this).find('.buildable_area_in_meter').val()));
    $(this).parents('.development').find('.building_coverage').val(buildCover(total, e));
    calcPlotRatio()
});

$('.hard_landscape_area_in_meter').on('change', function() {
    var total = 0;
    var a = checkNumber(parseFloat($(this).parents('.development').find('.plinth_area_in_meter').val()));
    var b = checkNumber(parseFloat($(this).parents('.development').find('.soft_landscape_area_in_meter').val()));
    var c = checkNumber(parseFloat($(this).parents('.development').find('.hard_landscape_area_in_meter').val()));
    var d = checkNumber(parseFloat($(this).parents('.development').find('.road_car_park_area_in_meter').val()));
    total = a + b + c + d;
    $(this).parents('.development').find('.development_area_in_meter').val((total).formatNumber(2, '.', ''));
    $(this).parents('.development').find('.development_area_in_hectares').val((total / 10000).formatNumber(2, '.', ''));
    $(this).parents('.development').find('.development_area_in_acres').val((total / 4046.862669715303).formatNumber(2, '.', ''));
    var e = checkNumber(parseFloat($(this).find('.buildable_area_in_meter').val()));
    $(this).parents('.development').find('.building_coverage').val(buildCover(total, e));
    calcPlotRatio()
});

$('.road_car_park_area_in_meter').on('change', function() {
    var total = 0;
    var a = checkNumber(parseFloat($(this).parents('.development').find('.plinth_area_in_meter').val()));
    var b = checkNumber(parseFloat($(this).parents('.development').find('.soft_landscape_area_in_meter').val()));
    var c = checkNumber(parseFloat($(this).parents('.development').find('.hard_landscape_area_in_meter').val()));
    var d = checkNumber(parseFloat($(this).parents('.development').find('.road_car_park_area_in_meter').val()));
    total = a + b + c + d;
    $(this).parents('.development').find('.development_area_in_meter').val(total.formatNumber(2, '.', ''));
    $(this).parents('.development').find('.development_area_in_hectares').val((total / 10000).formatNumber(2, '.', ''));
    $(this).parents('.development').find('.development_area_in_acres').val((total / 4046.862669715303).formatNumber(2, '.', ''));
    var e = checkNumber(parseFloat($(this).find('.buildable_area_in_meter').val()));
    $(this).parents('.development').find('.building_coverage').val(buildCover(total, e));
    calcPlotRatio()
});

$('.buildable_area_in_meter').on('change', function() {
    var a = checkNumber(parseFloat($(this).parents('.development').find('.development_area_in_meter').val()));
    if (a != 0) {
        var b = checkNumber(parseFloat($(this).parents('.development').find('.buildable_area_in_meter').val()));
        $(this).parents('.development').find('.building_coverage').val(buildCover(a, b));
    }
});

//OPEN
// //calculation for Gross Floor area header

//calculation for Gross Floor area footer
$('.net_floor_area2').on('change', function() {
    total = 0;
    var a = checkNumber(parseFloat($(this).parents('.sub-parcel-edit-form').find('.net_floor_area2').val()));
    var b = checkNumber(parseFloat($(this).parents('.sub-parcel-edit-form').find('.service_floor_area2').val()));
    var t = a + b;
    var feet = t * 10.763909991;
    $('.gross_floor_area_meter').val(t);
    $('.gross_floor_area_feet_building').val(feet.formatNumber('2', '.', ''));
});

$('.service_floor_area2').on('change', function() {
    total = 0;
    var a = checkNumber(parseFloat($(this).parents('.sub-parcel-edit-form').find('.net_floor_area2').val()));
    var b = checkNumber(parseFloat($(this).parents('.sub-parcel-edit-form').find('.service_floor_area2').val()));
    var t = a + b;
    var feet = t * 10.763909991;
    $('.gross_floor_area_meter').val(t);
    $('.gross_floor_area_feet_building').val(feet.formatNumber('2', '.', ''));
});

$('.gross_floor_area_in_meter').on('change', function() {
    var a = $(this).parents('tr').find('.gross_floor_area_in_meter').val();
    $(this).parents('tr').find('.gross_floor_area_in_feet').val((a * 10.763909991).formatNumber('2', '.', ''));
});

$('.gross_floor_area_in_feet').on('change', function() {
    var a = $(this).parents('tr').find('.gross_floor_area_in_feet').val();
    $(this).parents('tr').find('.gross_floor_area_in_meter').val((a / 10.763909991).formatNumber('2', '.', ''));
});


$('.gross_floor_area_m2').on('change', function() {
    var a = $(this).parents('.modal-body').find('.gross_floor_area_m2').val();
    $(this).parents('.modal-body').find('.gross_floor_area_f2').val((a * 10.763909991).formatNumber('2', '.', ''));
});

$('.gross_floor_area_f2').on('change', function() {
    var a = $(this).parents('.modal-body').find('.gross_floor_area_f2').val();
    $(this).parents('.modal-body').find('.gross_floor_area_m2').val((a / 10.763909991).formatNumber('2', '.', ''));
});
//CLOSE

$('.meter2').on('change',function(){
    // alert('testing function');
    var a = $(this).parents('.modal-body').find('.meter2').val();
    $(this).parents('.modal-body').find('.hectare').val((a*0.001).formatNumber('2', '.', ''));
    $(this).parents('.modal-body').find('.acre').val((a*0.000247105).formatNumber('2', '.', ''));
});

$('.hectare').on('change',function(){
    // alert('testing function');
    var a = $(this).parents('.modal-body').find('.meter2').val();
    $(this).parents('.modal-body').find('.meter2').val((a*10000).formatNumber('2', '.', ''));
    $(this).parents('.modal-body').find('.acre').val((a*2.47105).formatNumber('2', '.', ''));
});

$('.acre').on('change',function(){
    // alert('testing function');
    var a = $(this).parents('.modal-body').find('.meter2').val();
    $(this).parents('.modal-body').find('.meter2').val((a*4046.86).formatNumber('2', '.', ''));
    $(this).parents('.modal-body').find('.hectare').val((a*0.404686).formatNumber('2', '.', ''));
});

function buildCover(subArea, buildArea) {
    return (buildArea / subArea * 100).formatNumber(2, '.', '');
}

function checkNumber(value) {
    if ($.isNumeric(value))
        return value;
    else
        return 0;
}


$('.meterToHect').on('change', function(){
    $hect = meterToHect($(this).val());
    $(this).parents('.sub-parcel-edit-form').find('.hectToMeter').val($hect);
});
$('.meterToAcre').on('change', function(){
    $acre = meterToAcre($(this).val());
    $(this).parents('.sub-parcel-edit-form').find('.acreToMeter').val($acre);
});

$('.hectToMeter').on('change', function(){
    $meter = hectToMeter($(this).val());
    $(this).parents('.sub-parcel-edit-form').find('.meterToHect').val($meter);
});
$('.hectToAcre').on('change', function(){
    $acre = hectToAcres($(this).val());
    $(this).parents('.sub-parcel-edit-form').find('.acreToHect').val($acre);
});

$('.acreToMeter').on('change', function(){
    $meter = acreToMeter($(this).val());
    $(this).parents('.sub-parcel-edit-form').find('.meterToAcre').val($meter);
});

$('.acreToHect').on('change', function(){
    $hect = acreToHect($(this).val());
    $(this).parents('.sub-parcel-edit-form').find('.hectToAcre').val($hect);
});


// formula from hect to meter and to acres
function hectToMeter(hect) {
    return hect * 10000;
}

function hectToAcres(hect) {
    return hect * 2.47105;
}

// formula from acre to meter and to hect
function acreToHect(acre) {
    return acre * 0.404686;
}

function acreToMeter(acre) {
    return acre * 4046.86;
}

// formula from meter to feet,acre and hect
function meterToFeet(meter) {
    return meter * 3.28084;
}

function meterToHect(meter) {
    return meter / 10000;
}

function meterToAcre(meter) {
    return meter * 0.000247105;
}

//formula for feet to meter
function feetToMeter(feet) {
    return feet * 0.3048;
}