<!DOCTYPE html>
<html>

<head>
    <title>Register Student</title>
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
                    <h4 class="page-title">Register Student</h4>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Full Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Full Name">
                            </div>
                            <br>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address">
                            </div>
                            <br>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputName">Date Of Birth</label>
                                <input type="date" class="form-control" id="inputDOB" placeholder="DOB">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputBloodGroup">Blood Group</label>
                                <input list="bloodgroup" class="form-control" name="bloodgroup"
                                    placeholder="Select Blood Group">
                                <datalist id="bloodgroup">
                                    <option value="A+"></option>
                                    <option value="A-"></option>
                                    <option value="B+"></option>
                                    <option value="B-"></option>
                                    <option value="AB+"></option>
                                    <option value="AB-"></option>
                                    <option value="O+"></option>
                                    <option value="O-"></option>
                                </datalist>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="regligion">Religion</label>
                                <input list="religion" class="form-control" name="religion" placeholder="Religion">
                                <datalist id="religion">
                                    <option value="Muslim"></option>
                                    <option value="Buddhist"></option>
                                    <option value="Hindu"></option>
                                    <option value="Christian"></option>
                                </datalist>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="gender">Gender</label>
                                <input list="gender" class="form-control" name="Gender" placeholder="Gender">
                                <datalist id="gender">
                                    <option value="Male"></option>
                                    <option value="Female"></option>
                                    <option value="Others"></option>
                                </datalist>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="guardiaName">Guardian's Name</label>
                                <input type="text" class="form-control" id="guardianName" placeholder="Guardian's Name">
                            </div>
                            <br>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="guardianPhone">Guardian's Phone Number</label>
                                <input type="text" class="form-control" id="guardianPhone"
                                    placeholder="Guardian's Phone Number">
                            </div>
                        </div>
                        <input type="submit" action="/pages/index" class="btn btn-primary"></input>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='/pages/student'">Go Back</button>
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
<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugin/chartist/chartist.min.js"></script>
<script src="../assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="../assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/js/ready.min.js"></script>
<script src="../assets/js/demo.js"></script>

</html>