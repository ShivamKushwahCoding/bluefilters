var dTable = $('.dt-responsive').dataTable({
    processing: true,
    serverSide: true,
    searching: true,
    "bLengthChange": true,
    "bInfo" : false,
    "bSort" : false,
    "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-6'i><'col-sm-6'p>>"+
        '<"clear">',
    scrollX:true,
    "lengthMenu": [[10, 25, 50,100 ,-1], [10, 25, 50,100,"All"]],
    oLanguage: {
        //sProcessing: showMessage()
    },
    "initComplete": function (settings, json) {
        $(".checkall").closest("th").removeClass("sorting_asc");
    },
    ajax: {
        url: ajax_datatable,
        type: 'post',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: function (d) {
        }
    },
    columns: [
        {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        {data: 'status', name: 'status'},
        {data: 'action', name: 'action'},
    ],
    "fnRowCallback" : function(nRow, aData, iDisplayIndex){
        var oSettings = dTable.fnSettings();
        $("td:first", nRow).html(oSettings._iDisplayStart+iDisplayIndex +1);
        return nRow;
    },
});

$(document).on("click", ".customSwitches", function (e) {
    var status =  $(this).data('status');
    var id =  $(this).data('id');
    $.ajax({
        type: "GET",
        url: ajax_status_change,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            status:status,
            id: id,
        },
        success: function (data, textStatus, xhr) {
            toastr.success(data.message);
            dTable.fnDraw();
        }
        , error: function (error) {
            console.log(error);
            toastr.error(error);
        }
    });
});

$(document).on("click", ".customSwitches2", function (e) {
    var status =  $(this).data('status');
    var id =  $(this).data('id');
    $.ajax({
        type: "GET",
        url: ajax_estatus_change,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            status:status,
            id: id,
        },
        success: function (data, textStatus, xhr) {
            toastr.success(data.message);
            dTable.fnDraw();
        }
        , error: function (error) {
            console.log(error);
            toastr.error(error);
        }
    });
});

$(document).on("click", ".deletetechnology", function (e) {
    
        var urlda = $(this).attr('data-href');
        swal({
            text: "Are you sure you want to delete Technology?",
            type: 'info',
            showCancelButton: true,
            confirmButtonClass: 'blue_button alert_btn mr-40',
            cancelButtonClass: 'blue_border_button alert_btn',
            confirmButtonText: 'Yes'
        }).then(function (isConfirm) {
            $.ajax({
                type: "GET",
                url: urlda,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data, textStatus, xhr) {
                    toastr.success(data.message);
                    dTable.fnDraw();
                }
                , error: function (error) {
                    console.log(error);
                    toastr.error(error);
                }
            });
        });        
});