<!-- Jquery Core Js -->
<script src="{{URL::asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap Core Js -->
<script src="{{URL::asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{URL::asset('js/userjs/vendors.min.js')}}"></script>
<script src="{{URL::asset('js/userjs/jquery.sticky.js')}}"></script>
<script src="{{URL::asset('js/userjs/icheck.min.js')}}"></script>
<script src="{{URL::asset('js/userjs/app-menu.min.js')}}"></script>
<script src="{{URL::asset('js/userjs/app.min.js')}}"></script>
<script src="{{URL::asset('js/userjs/jquery.sparkline.min.js')}}"></script>
<script src="{{URL::asset('js/userjs/bootstrap-typeahead.js')}}"></script>
<script src="{{URL::asset('js/userjs/userscript.js')}}"></script>

<script>
    var Bills=[];
    var Allocation=[];
    var UnallocatedBills=[];
    var pastallocationBills=[];
</script>

@if(isset($billarray))

<script type="text/javascript">


 Bills= {!! json_encode($billarray) !!}
{{--var Allocation= {!! json_encode($allocationarray) !!}--}}


</script>


@endif
@if(isset($pastallocationBills))

<script type="text/javascript">


    pastallocationBills= {!! json_encode($pastallocationBills) !!}
{{--var Allocation= {!! json_encode($allocationarray) !!}--}}


</script>


@endif
@if(isset($UnallocatedBills))

<script type="text/javascript">


    UnallocatedBills= {!! json_encode($UnallocatedBills) !!}
{{--var Allocation= {!! json_encode($allocationarray) !!}--}}


</script>


@endif

@if(isset($allocationarray))

    <script type="text/javascript">


{{--        var Bills= {!! json_encode($billarray) !!}--}}
         Allocation= {!! json_encode($allocationarray) !!}


    </script>


@endif



<script type="text/javascript">
var APP_URL = {!! json_encode(url('/')) !!}
var token = '{!! csrf_token() !!}'
</script>


<script>


$(document).ready(function(){
    console.log(UnallocatedBills);
$('.selectemp').on('change', function () {
var exist = false;
var element = $('.empname')
element.each(function(){
var x=$(this).data('react');
var y= ($('.selectemp option:selected ').val());
if(x==y)
{
    exist = true;
}
})
if(exist){
alert('value exitst');
}else{
var valueemp =  $('.selectemp option:selected ').val();
var txt =$('.selectemp option:selected ').text();
$('.addemploye').after("<a class='dropdown-item empname' data-react='"+valueemp+"'href='javascript:void(0)'>"+txt+'<span style="float: right" class="remove-emp">x</span></a>');
$('.hidden-employee').append("<input type='hidden' name='emp-"+valueemp+"' value='"+valueemp+"' class='emp-"+valueemp+"' data-react='"+valueemp+"' </input>");
}



});
$(document).on('click','.remove-emp' ,function () {
var empVal = $(this).parent().attr('data-react');
$('.hidden-employee').find('.emp-'+empVal).remove();
$(this).parent().remove();
});

$('#allocationNo').typeahead({
source:Allocation
});

$('#billNo').typeahead({
source:Bills
});

$('.unallocatatedBills').typeahead({
    source:UnallocatedBills
})

 $('.pastallocation').typeahead({
     source:pastallocationBills
 })


});


</script>


{{--<script src="{{URL::asset('js/userjs/breadcrumbs-with-stats.min.js')}}"></script>--}}
{{--<script src="{{URL::asset('js/userjs/customizer.min.js')}}"></script>--}}






