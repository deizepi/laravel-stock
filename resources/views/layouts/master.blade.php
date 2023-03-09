<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ __("Inventory Management System") }}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <link href="{{ asset('datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

       @include('layouts.navbar.nav')

        <div id="page-wrapper">
            <div class="container-fluid">
                                  
                        @yield('content')
              
            </div>
        </div>

    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/metisMenu.min.js') }}"></script>

    <script src="{{ asset('js/sb-admin-2.js') }}"></script>

    <script src="{{ asset('datatables/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('datatables-plugins/dataTables.bootstrap.min.js') }}"></script>

    <script src="{{ asset('datatables-responsive/dataTables.responsive.js') }}"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            language: {
                decimal:        "{{ __('__separatorDecimal__') }}",
                emptyTable:     "{{ __('No data available in table') }}",
                info:           "{{ __('Showing X to Y of Z entries') }}",
                infoEmpty:      "{{ __('Showing X to Y of Z entries') }}",
                infoFiltered:   "({{ __('filtered from X total entries') }})",
                infoPostFix:    "",
                thousands:      "{{ __('__separatorThousands__') }}",
                lengthMenu:     "{{ __('Show X entries') }}",
                loadingRecords: "{{ __('Loading') }}...",
                processing:     "",
                search:         "{{ __('Search') }}:",
                zeroRecords:    "{{ __('No matching records found') }}",
                paginate: {
                    first:      "{{ __('First') }}",
                    last:       "{{ __('Last') }}",
                    next:       "{{ __('Next') }}",
                    previous:   "{{ __('Previous') }}"
                },
                aria: {
                    sortAscending:  ": {{ __('activate to sort column ascending') }}",
                    sortDescending: ": {{ __('activate to sort column descending') }}"
                }
            }
        });
    });

    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>

</body>

</html>
