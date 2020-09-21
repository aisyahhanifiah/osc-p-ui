$('.area').on('change',function(){
  var area = $(this).parents('tr').find('.area').val();
  var perUnit = $(this).parents('table').find('.perUnit').html();
  var minArea = $(this).parents('table').find('.minArea').html();
  var kadar = $(this).parents('tr').find('.kadar').val();
  var fiMin = $(this).parents('tr').find('.fiMin').html();


  var unit = Math.ceil(area / perUnit);
  $(this).parents('tr').find('.unit').val(unit);

  var bayaran = unit * kadar;
  var Fbayaran = Math.max(fiMin,bayaran);
  $(this).parents('tr').find('.bayaran').val(Fbayaran);

  var sum = 0;
  $('.bayaran').each(function(){
    sum += parseFloat(this.value);
    $(this).parents('.box-body').find('.totalPayment').val(sum);
  });
  var sumArea = 0;
  $('.area').each(function(){
    sumArea += parseFloat(Math.max(0,this.value));
    $(this).parents('.box-body').find('.totalArea').val(sumArea);
  });
});




// ==================================================================================
// Permit Fee
// ==================================================================================
$('.qty').on('change', function(){
  var q = $(this).val();
  var d = Math.max($(this).parents('tr').find('.duration').val(), 0);
  var f = $(this).parents('tr').find('.rate').val();

  var fi = q * d * f;

  $(this).parents('tr').find('.fi').val(fi);
  var totalFi = 0;
  $('.fi').each(function(){
    totalFi += parseFloat(Math.max(0,this.value));
    $(this).parents('.box-body').find('.totalFiPermit').val(totalFi);
  });
});
$('.duration').on('change', function(){
  var q = $(this).val();
  var d = Math.max($(this).parents('tr').find('.duration').val(), 0);
  var f = $(this).parents('tr').find('.rate').val();

  var fi = q * d * f;

  $(this).parents('tr').find('.fi').val(fi);
  var totalFi = 0;
  $('.fi').each(function(){
    totalFi += parseFloat(Math.max(0,this.value));
    $(this).parents('.box-body').find('.totalFiPermit').val(totalFi);
  });
});



$('.qty2').on('change', function(){
  var q = $(this).val();
  var f = $(this).parents('tr').find('.rate').val();

  var fi = q * f;

  $(this).parents('tr').find('.fi').val(fi);
});




window.onload = function() {
  $('.area').each(function(){
    var area = $(this).parents('tr').find('.area').val();
    if(area != ''){
      var perUnit = $(this).parents('table').find('.perUnit').html();
      var minArea = $(this).parents('table').find('.minArea').html();
      var kadar = $(this).parents('tr').find('.kadar').val();
      var fiMin = $(this).parents('tr').find('.fiMin').html();


      var unit = Math.ceil(area / perUnit);
      $(this).parents('tr').find('.unit').val(unit);

      var bayaran = unit * kadar;
      var Fbayaran = Math.max(fiMin,bayaran);
      $(this).parents('tr').find('.bayaran').val(Fbayaran);

      var sum = 0;
      $('.bayaran').each(function(){
        sum += parseFloat(this.value);
        $(this).parents('.box').find('.totalPayment').val(sum);
      });

      var sumArea = 0;
      $('.area').each(function(){
        sumArea += parseFloat(Math.max(0,this.value));
        $(this).parents('.box').find('.totalArea').val(sumArea);
      });
    }
  });




  // Permit Fee
  $('.qty').each(function(){
    var q = $(this).val();
    var d = Math.max($(this).parents('tr').find('.duration').val(), 0);
    var f = $(this).parents('tr').find('.rate').val();

    var fi = q * d * f;

    $(this).parents('tr').find('.fi').val(fi);
    var totalFi = 0;
    $('.fi').each(function(){
      totalFi += parseFloat(Math.max(0,this.value));
      $(this).parents('.box').find('.totalFiPermit').val(totalFi);
    });
  });



  $('.qty2').each(function(){
    var q = $(this).val();
    var f = $(this).parents('tr').find('.rate').val();

    var fi = q * f;

    $(this).parents('tr').find('.fi').val(fi);
  });

};

$('.qty9').on('change',function(){
 var q = Math.ceil($(this).val() / 9);
 var f = $(this).parents('tr').find('.rate').val();

 $(this).parents('tr').find('.fi').val(q * f);
});



















































