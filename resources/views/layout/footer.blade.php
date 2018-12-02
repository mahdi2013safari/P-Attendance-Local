<!-- Mainly scripts -->
<script src="{{ asset('dashboard/js/jquery-2.1.1.js') }}"></script>

<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>


<!-- Custom and plugin javascript -->
<script src="{{ asset ('dashboard/js/inspinia.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('dashboard/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

{{--Toastr--}}
<script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

<!-- Jvectormap -->
<script src="{{ asset('dashboard/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- EayPIE -->
<script src="{{ asset('dashboard/js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('dashboard/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/clockpicker/clockpicker.js') }}"></script>
<!-- Sparkline demo data  -->
<script src="{{ asset('dashboard/js/demo/sparkline-demo.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/sweetalert/sweetalert.min.js') }}"></script>
{{-- calnder javascripts --}}

@yield('script')



<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>

{{-- sweet alert --}}
<script>
    $(document).ready(function () {

        $('.demo1').click(function () {
            swal({
                title: "Welcome in Alerts",
                text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
            });
        });

        $('.demo_save').click(function () {
            swal({
                title: "Successfully Save!",
                text: "Data inserted into database!",
                type: "success"
            });
        });

        $('.demo_delete').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function () {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            });
        });

        $('.demo_update').click(function () {
            swal({
                    title: "Are you sure want update software?",
                    text: "this update fix your problem or update software, update not effect on your database data!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, update it it!",
                    cancelButtonText: "No, cancel pls!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        swal("Updated!", "Your Software has been updated.", "success");
                    } else {
                        swal("Cancelled", "Your Software file is safe :)", "error");
                    }
                });
        });


    });
</script>
{{-- sweet alert --}}



</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:12:28 GMT -->
</html>
