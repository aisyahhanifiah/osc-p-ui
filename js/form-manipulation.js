/**
 * Created by User on 11/5/2017.
 */

$(document).on('click' , '.btn-add-row' , function(e){
    var mainTag = $(this).parents('.table');
    var currentEntry = mainTag.find('.row-table:first').find('select').select2('destroy').end();
    var newEntry = $(currentEntry.clone(true,true));

    newEntry.find('.btn-add-row').addClass('btn-remove-row');
    newEntry.find('.btn-remove-row').removeClass('btn-add-row');
    newEntry.find('.fa-plus').addClass('fa-minus');
    newEntry.find('.fa-minus').removeClass('fa-plus');
    newEntry.find('.btn-primary').addClass('btn-danger');
    newEntry.find('.btn-danger').removeClass('btn-primary');
    newEntry.find('.form-control-check').attr('checked', false);
    newEntry.appendTo(mainTag);
    mainTag.find('select').select2();
    e.preventDefault();
    return false;
});

$(document).on('click' , '.btn-add-row-select2' , function(e) {
    var mainTag = $(this).parents('.table'),
        currentEntry = mainTag.find('.row-table:first').find('.select2-other').select2('destroy').end(),
        newEntry = $(currentEntry.clone(true,true));

    newEntry.find('.btn-add-row-select2').addClass('btn-remove-row');
    newEntry.find('.btn-remove-row').removeClass('btn-add-row-select2');
    newEntry.find('.fa-plus').addClass('fa-minus');
    newEntry.find('.fa-minus').removeClass('fa-plus');
    newEntry.find('.btn-primary').addClass('btn-danger');
    newEntry.find('.btn-danger').removeClass('btn-primary');
    newEntry.find('.form-control-check').attr('checked', false);
    newEntry.find('.lot_type').attr('required', true);
    newEntry.find('.owner').attr('required', true);
    newEntry.find('.sub_parcel_no').attr('required', true);
    newEntry.find('.lot_id').remove();
    newEntry.find('.submission_subparcel_id').remove();
    newEntry.find('.subparcel_facility_id').remove();
    newEntry.find('.subparcel_building_id').remove();
    var subparcel_no = parseInt(newEntry.find('.sub_parcel_no').first().val());
    var rows = mainTag.find('.sub_parcel_no').length;
    newEntry.find('.sub_parcel_no').val(subparcel_no + rows);
    newEntry.appendTo(mainTag);
    mainTag.find('.select2-other').select2({
        tags:true
    });
    e.preventDefault();
    return false;
});

$(document).on('click' , '.btn-remove-row' , function(e) {
    var thisControl = $(this).parents('tr');
    // alert(thisControl.html());
    thisControl.remove();
});

$(document).on('click' , '.btn-add-row-edit' , function(e) {
    var mainTag = $(this).parents('tbody'),
        currentEntry = mainTag.find('.row-table:first'),
        newEntry = $(currentEntry.clone(true,true));
    //alert(mainTag.html());

    newEntry.find('.btn-add-row-edit').addClass('btn-remove-row-edit');
    newEntry.find('.btn-remove-row-edit').removeClass('btn-add-row-edit');
    newEntry.find('.fa-plus').addClass('fa-minus');
    newEntry.find('.fa-minus').removeClass('fa-plus');
    newEntry.find('.btn-primary').addClass('btn-danger');
    newEntry.find('.btn-danger').removeClass('btn-primary');
    // newEntry.find('.form-control').val('');
    newEntry.find('.form-control-check').attr('checked', false);
    $(mainTag).append(newEntry);
    e.preventDefault();
    return false;
});

$(document).on('click' , '.btn-remove-row-edit' , function(e) {
    var thisControl = $(this).parents('tr');
    // alert(thisControl.html());
    thisControl.remove();
});