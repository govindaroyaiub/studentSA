<!DOCTYPE html>
<html>

<head>
    <title>Create Holiday</title>
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
                    <h4 class="page-title">Create Holiday</h4>
                    <form>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="holidayFrom">From</label>
                                    <input type="date" class="form-control" id="holidayFrom"
                                        placeholder="Starting Date">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="holidayTo">To</label>
                                    <input type="date" class="form-control" id="holidayTo"
                                        placeholder="Ending Date">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputReason">Holiday Occasion</label>
                                    <input type="text" class="form-control" id="inputHoliday" placeholder="Holiday Ocassion">
                                </div>
                                <br>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='/pages/index'">Go
                                Back</button>
                        </form>
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