<?php
function generateSidebar(){
echo '
<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="nav-active">
                        <a href="index.php">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-active">
                    <a href="dataTable.php">
						<i class="fa fa-table" aria-hidden="true"></i>
							<span>Data Table</span>
						</a>
                    </li>
                    <li class="nav-active">
                    <a href="dataTable-realtime.php">
						<i class="fa fa-table" aria-hidden="true"></i>
							<span>Data Table Realtime</span>
						</a>
                    </li>
                    <li class="nav-active">
                    <a href="dataCharts.php">
						<i class="fa fa-bar-chart-o" aria-hidden="true"></i>
							<span>Data Charts</span>
						</a>
                    </li>
                    <li class="nav-active">
                    <a href="dataCharts - realtime.php">
                        <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                            <span>Data Charts Realtime</span>
                        </a>
                    </li>
                    <li class="nav-active">
                    <a href="map.php">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
							<span>Data Map</span>
						</a>
                    </li>
                </ul>
            </nav>

            <hr class="separator" />
            </div>
        </div>


</aside>
<!-- end: sidebar -->
';
}
?>