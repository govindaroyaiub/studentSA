<!DOCTYPE html>
<html>

<head>
    <title>Add Notice</title>
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
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="addNoticeTitle">Notice Title</label>
                                <input type="text" class="form-control" id="addNoticeTitle" placeholder="Notice Title">
                            </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="addNoticeDescription">Description</label>
                                    <input type="text" class="form-control" id="addNoticeDescription" placeholder="Notice Description">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary">
                            <button type="button" onclick="window.location.href='/pages/notice'" class="btn btn-primary">Go
                        Back</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        @includes("includes.footer")
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