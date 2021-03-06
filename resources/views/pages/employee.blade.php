<!DOCTYPE html>
<html>

<head>
    <title>Employee</title>
    @include("includes.head2")
</head>

<body>
    <div class="wrapper">
        @include("includes.header")
        <div class="sidebar">
            @include("includes.sidebar")
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Employee</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-stats card-success">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Register Employee</p>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="icon-big text-center">
                                                <a href="/pages/register_employee" class="la la-plus" style="text-decoration: none"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-stats card-success">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Add Profession</p>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="icon-big text-center">
                                                <a href="/pages/add_profession" class="la la-plus" style="text-decoration: none"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-stats card-success">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Employee List</p>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="icon-big text-center">
                                                <a href="/pages/employee_list" class="la la-align-justify" style="text-decoration: none"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        @include("includes.footer")
    </footer>
    </div>
    </div>
    </div>
    <!-- Modal -->
</body>
<script src="/js/core/jquery.3.2.1.min.js"></script>
<script src="/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/js/core/popper.min.js"></script>
<script src="/js/core/bootstrap.min.js"></script>
<script src="/js/plugin/chartist/chartist.min.js"></script>
<script src="/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="/js/plugin/chart-circle/circles.min.js"></script>
<script src="/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="/js/ready.min.js"></script>
<script src="/js/demo.js"></script>
</html>