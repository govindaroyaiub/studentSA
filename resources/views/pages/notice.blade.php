<!DOCTYPE html>
<html>

<head>
    <title>Notice</title>
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
                    <h4 class="page-title">Notice</h4>
                    <button type="button" onclick="window.location.href='/pages/add_notice'" class="btn btn-primary">Add Notice</button>
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
<script src="/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="/js/plugin/chart-circle/circles.min.js"></script>
<script src="/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="/js/ready.min.js"></script>
<script src="/js/demo.js"></script>

</html>