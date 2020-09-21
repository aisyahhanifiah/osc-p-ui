        <footer class="footer text-center" style="display:none">
    Dibangunkan bersama oleh Perbadanan Putrajaya dan <a href="https://basicinception.com" style="color:#fff">Basic Inception</a>.
</footer>
    </div>


</div>


<script src="js/app.js?id=6d4f7650cf88c1a97d34"></script>
<script src="js/theme.js"></script>
<script src="js/resumable.js"></script>
<script src="js/form-manipulation.js"></script>
<script src="js/calculate-field.js?v=1.1"></script>
<script src="js/bootbox.min.js"></script>
<script src="plugins/daterangepicker/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script>
    // Configure/customize these variables.
    var showChar = 180; // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Info penuh >";
    var lesstext = "Info kurang";

    $('.more').each(function () {
        var content = $(this).html();

        if (content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink no-loading">' + moretext + '</a></span>';

            $(this).html(html);
        }
    });

    $(".morelink").click(function () {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });

    // Configure/customize these variables.
    var showChar2 = 200; // How many characters are shown by default
    var ellipsestext2 = "...";
    var moretext2 = "Info penuh >";
    var lesstext2 = "Info kurang";

    $('.more2').each(function () {
        var content = $(this).html();

        if (content.length > showChar2) {

            var c = content.substr(0, showChar2);
            var h = content.substr(showChar2, content.length - showChar2);

            var html = c + '<span class="moreellipses">' + ellipsestext2 + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink2 no-loading">' + moretext2 + '</a></span>';

            $(this).html(html);
        }
    });

    $(".morelink2").click(function () {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext2);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext2);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var inputs = document.getElementsByTagName("INPUT");
        var selects = document.getElementsByTagName("SELECT");
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].oninvalid = function(e) {
                e.target.setCustomValidity("");
                if (!e.target.validity.valid) {
                    e.target.setCustomValidity("Isi maklumat yang betul di kotak ini.");
                }
            };
            inputs[i].oninput = function(e) {
                e.target.setCustomValidity("");
            };
        }

        for (var i = 0; i < selects.length; i++) {
            selects[i].oninvalid = function(e) {
                e.target.setCustomValidity("");
                if (!e.target.validity.valid) {
                    e.target.setCustomValidity("Sila buat pilihan dari senarai ini.");
                }
            };
            selects[i].oninput = function(e) {
                e.target.setCustomValidity("");
            };
        }
    })
    $('#datatable').dataTable({
        "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
        "pageLength": 50,
        "aaSorting": []
    });
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    $(".select2").select2();
    $("#fontplus").click(function () {
        var fontSize = parseInt($('body').css("font-size"));
        fontSize = fontSize + 1 + "px";
        $('body').css({
            'font-size': fontSize
        });
    });
    $("#fontminus").click(function () {
        var fontSize = parseInt($('body').css("font-size"));
        fontSize = fontSize - 1 + "px";
        $('body').css({
            'font-size': fontSize
        });
    });
    $("#fontdefault").click(function () {
        var fontSize = parseInt($('body').css("font-size"));
        fontSize = fontSize - 1 + "px";
        $('body').css({
            'font-size': ''
        });
    });

    $('.datetimepicker').datetimepicker({
        stepping:1,
        format: 'DD-MM-YYYY HH:mm',
        maxDate: new Date(),
        defaultDate: new Date(),
    });

    $('.datepicker').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'dd-mm-yyyy'
    });
    $('.monthpicker').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'mm-yyyy',
        viewMode: "months",
        minViewMode: "months"
    });

    $('input.date-range').daterangepicker({
        //autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear',
            format: 'DD-MM-YYYY',
            separator: ' : '
        }
    });

    var msg = '';
    var color = '';

    toastr.options = {
        // "closeButton": true,
        "positionClass": "toast-bottom-right",
        "timeOut": "3000",
        "extendedTimeOut": "3000",
    };

    if (msg) {
        switch (color) {
            case 'success':
                toastr.success(msg);
                break;
            case 'info':
                toastr.info(msg);
                break;
            case 'warning':
                toastr.warning(msg);
                break;
            case 'error':
                toastr.error(msg);
                break;
        }
    }

</script>
        
    <script>

    </script>

    <script>
        var datatable;

        $('.filter-by-status').click(function (){
        	  $('.filter-by-status').removeClass('active');
        	  $(this).addClass('active');
            datatable.draw();
        });
        $(function() {
            datatable = $('#datatable-draft').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json'
                },
                ajax: {
                	url: '/sp/applications/draft',
                  data: {
	                  'statusFilter': function() {
		                  var statusFilter = $('.filter-by-status.active').data('status');
		                  return statusFilter;
                    }
                	}
                },
                order: [
                    [ 3, "desc" ]
                ],
                columns: [
                    {
                        className: 'text-left',
                        render: function (data, type, row) {
                            return "<b>"+row.type+"</b><br>"+row.form;
                        }
                    },
                    {className:'text-center', data:'number', name:'number'},
                    {className:'more', data:'title', name:'title'},
                    {className:'text-center', data:'created_at', name:'created_at'},
                    {className:'text-center', data:'status', name:'status'},
                    {
                        className: 'text-center', orderable: false,
                        render: function (data, type, row) {
                                return "<a href='/sp/draft/"+row.id+"/general' class='btn btn-sm btn-primary'>Kemaskini</a><br><form method='get' class='draft-delete' action='/sp/draft/delete/"+row.id+"/"+row.code+"'><button type='submit' class='btn btn-sm btn-warning delete' >Padam</button></form>"
                        }
                    }
                ]
            });
            console.log(a);
        });

        $('#datatable-draft').on('click', '.delete', function (e) {
            e.preventDefault();
            var currentForm = $(this).closest("form");
            bootbox.confirm(
                    {
                        title:'Buang permohonan ini',
                        message: 'Adakah anda pasti untuk membuang Permohonan ini?',
                        callback: function(result) {
                            if (result) {
                                $('#progressBar').show();
                                currentForm.submit();
                            }
                        },
                        buttons: {
                            confirm: {
                                label: 'Pasti!',
                            },
                            cancel: {
                                label: 'Batal',
                            }
                        }
                    });
        });


    </script>
<script href="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/bm.js"></script>
<script>

    function getDob(nric) {
        var nricYear = nric.substr(0, 2);
        var nricMonth = nric.substr(2, 2);
        var nricDay = nric.substr(4, 2);
        var tahun = nricYear < 50 ? '20'+nricYear : '19'+nricYear;
        return nricDay+'-'+nricMonth+'-'+tahun;
    }

    function calcAge(nric) {
        var nricYear = nric.substr(0, 2);
        var tahun = nricYear < 50 ? '20'+nricYear : '19'+nricYear;
        var age = moment().format('YYYY') - tahun;
        return age <= 0 ? 'Kurang 1 Tahun' : age;
    }

    Number.prototype.formatNumber = function (c, d, t) {
        var n = this,
                c = isNaN(c = Math.abs(c)) ? 2 : c,
                d = d == undefined ? "." : d,
                t = t == undefined ? "," : t,
                s = n < 0 ? "-" : "",
                i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
                j = (j = i.length) > 3 ? j % 3 : 0;
        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };

    function progressBarShow() {
        $('#progressBar').show();
    }

    function progressBarHide() {
        $('#progressBar').hide();
    }

    function preloaderShow() {
        $('.preloader').show();
    }

    function preloaderHide() {
        $('.preloader').fadeOut();
    }

</script>
</body>

</html>