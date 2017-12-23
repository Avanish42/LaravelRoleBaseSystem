$(document).ready(function() {

    $('.addNewAllocation').click(function (e) {
        e.preventDefault();
        $('.loading').css("display", 'block');
        // console.log("click");

        var toValue = $('.toValue').val();
        var fromValue = $('.fromValue').val();
        var singleValue = $('.singleValue').val();
        var formData = $('#formData').serialize();


        // console.log(formData);
        $.ajax({
            url: APP_URL + "/allocateBillsByAjax",
            type: "post",
            data: formData,
            success: function (resultData) {
                if (resultData.code == 400) {
                    $('.errormessage').text(resultData.message);
                    $('.ajaxerror').show();
                }

                if (resultData.code == 100) {

                    $('.successmessage').text(resultData.message);
                    $('.ajaxsuccess').show();
                }
                else {
                    $('#currentSuppluId').nextAll().remove();
                    $('#currentSuppluId').after(resultData);

                }
                $('.loading').css("display", 'none');

            }
        });
        //saveData.error(function() { console.log("error");});

    });



    $(document).on('click', '.allocationid', function () {
        // console.log("test");

        var data1 = $(this).attr('data-reactid');
        var data2= $(this).attr(('data-reactAllocation'));
        // console.log(data);

        var data = {
              "_token":token,
            "id": data1,
            'allocation':data2
        }


        $.ajax({
            url: APP_URL + "/removeCurrentAllocationByAjax",
            type: "post",
            data: data,
            success: function (resultData) {
                if (resultData.code == 400) {
                    // console.log('if');

                    $('.errormessage').text(resultData.message);
                    $('.ajaxerror').show();
                }

                else if (resultData.code == 100) {
                    // console.log('else if');

                    $('.successmessage').text(resultData.message);
                    $('.ajaxsuccess').show();
                }

                else {
                    // console.log('else');
                    $('#currentSuppluId').nextAll().remove();
                    $('#currentSuppluId').after(resultData);

                }


            }
        });

        //
        // $('.allocationid').click( function (e) {
        //
        //        e.preventDefault();
        //    // var data= $(this).val();
        //     console.log("test");
        // });


    });

    $(document).on('click', '.pastAllocation', function (e) {
        // console.log('pastallocationform');
            e.preventDefault();
        $('.loading').css("display", 'block');

        var formpastData = $('.pastallocationform').serialize();
        //console.log(formpastData);
      //  return false;

        $.ajax({
            url: APP_URL + "/pastAllocateBillsByAjax",
            type: "post",
            data: formpastData,
            success: function (resultData) {
                if (resultData.code == 400) {
                    $('.errormessage').text(resultData.message);
                    $('.ajaxerror').show();
                }

                else if (resultData.code == 100) {

                    $('.successmessage').text(resultData.message);
                    $('.ajaxsuccess').show();
                }
                else {
                    $('#pastSupplyId').nextAll().remove();
                    $('#pastSupplyId').after(resultData);

                  }


                $('.loading').css("display", 'none');
            }
        });//ajax end


    });

    $(document).on('click', '.allocationidpast', function () {
        // console.log("test");

        var data1 = $(this).attr('data-reactid');
        var data2= $(this).attr(('data-reactAllocation'));
        console.log(data);

        var data = {
            "_token":token,
            "id": data1,
            'allocation':data2
        }



        $.ajax({
            url: APP_URL + "/removePastAllocationByAjax",
            type: "post",
            data: data,
            success: function (resultData) {
                if (resultData.code == 400) {
                    // console.log('if');

                    $('.errormessage').text(resultData.message);
                    $('.ajaxerror').show();
                }

                else if (resultData.code == 100) {
                    // console.log('else if');
                    $('.successmessage').text(resultData.message);
                    $('.ajaxsuccess').show();
                }
                else {
                    // console.log('else');
                    $('#currentSuppluId').nextAll().remove();
                    $('#currentSuppluId').after(resultData);

                }


            }
        });

        //
        // $('.allocationid').click( function (e) {
        //
        //        e.preventDefault();
        //    // var data= $(this).val();
        //     console.log("test");
        // });


    });

});