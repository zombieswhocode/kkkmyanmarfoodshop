@include('includes.head')
<!-- Body -->
<body>
@include('includes.loading')
@include('includes.navbar')


    <!-- Main Container -->
    <div class="main-container container-fluid">
    <!-- Page Container -->
        <div class="page-container">

            @include('includes.sidebar')
            <!-- Page Content -->
            <div class="page-content">

                @include('includes.breadcrumb')
                @include('includes.pageheader')


                <!-- Page Body -->
                <div class="page-body">
                
                    <!-- Your Content Goes Here -->
					@yield('content')

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

   
@include('includes.footer')
