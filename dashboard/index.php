<?php include('partial/header.php')  ?>


<!-- search-box -->
<?php include('partial/custom.php')  ?>
<?php include('partial/sidebar.php')  ?>

<main class="l-main">
    <div class="dashboard-overview">
        <div class="overview-head">
            <h2>Analaytics Overview</h2>
            <div class="search-right">
                <div class="select-box" id="selectbox1">
                    <div class="select-box__current" tabindex="2">
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="x" value="101" name="abc" checked="checked" />
                            <span class="select-box__input-text">Last 30 Days</span>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="11" value="11" name="abc" />
                            <span class="select-box__input-text">Cream</span>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="12" value="12" name="abc" />
                            <span class="select-box__input-text">Cheese</span>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="13" value="13" name="abc" />
                            <span class="select-box__input-text">Milk</span>
                        </div>
                        <img class="select-box__icon" src="img/arrow-down.png" alt="Arrow Icon" aria-hidden="true" />
                    </div>
                    <ul class="select-box__list">
                        <li>
                            <label class="select-box__option" for="11" aria-hidden="aria-hidden">Cream</label>
                        </li>
                        <li>
                            <label class="select-box__option" for="12" aria-hidden="aria-hidden">Cheese</label>
                        </li>
                        <li>
                            <label class="select-box__option" for="13" aria-hidden="aria-hidden">Milk</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="dasboard-details">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="details-block">
                        <h2>BHM</h2>
                        <h3 class="counter">300</h3>
                        <p>number of students</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="details-block">
                        <h2>BIT</h2>
                        <h3 class="counter">400</h3>
                        <p>number of students</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="details-block">
                        <h2>MIT</h2>
                        <h3 class="counter">600</h3>
                        <p>number of students</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="details-block">
                        <h2>BBA</h2>
                        <h3 class="counter">800</h3>
                        <p>number of students</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dasboard-graph-details">
            <div class="row">
                <div class="col-lg-9 col-md-6">
                    <div class="details-block-">
                        <div class="graph-header">
                            <h2>Department Overview</h2>
                            <p>Client order overview</p>
                        </div>
                        <div class="chart">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                    <div class="dashboard-emp-details">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="details-block">
                                    <i class="las la-users"></i>
                                    <h3>Total Student</h3>
                                    <h2 class="counter">289</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="details-block">
                                    <i class="las la-users"></i>
                                    <h3>Total Teacher</h3>
                                    <h2 class="counter">112</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="details-block">
                                    <i class="las la-users"></i>
                                    <h3>Total Skilled Manpower</h3>
                                    <h2 class="counter">112</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="details-block-">
                        <div class="graph-header graph-side-header">
                            <h2>Client Progressive bar</h2>
                            <p>+80 this month</p>
                        </div>
                        <div class="chart-">
                            <canvas id="pieChart"></canvas>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('partial/footer.php')  ?>
