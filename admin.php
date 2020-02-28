<?php

$this->on('admin.init', function() {

    // bind dashboard routes
    $this->bind('/', function() {

        return $this->invoke('DashboardGrid\\Controller\\Dashboard', 'dashboard');

    });

    $this->bind('/cockpit/dashboard', function() {

        return $this->invoke('DashboardGrid\\Controller\\Dashboard', 'dashboard');

    });

    // add top area
    $this->on('admin.dashboardgrid.widgets.top', function($areas) {

        $rows    = $this->retrieve('dashboardgrid/top/rows',    1);
        $columns = $this->retrieve('dashboardgrid/top/columns', 2);
        
        $this->renderView('dashboardgrid:views/dashboard_top.php', compact('areas', 'rows', 'columns'));

    }, 100);

    // add bottom area
    $this->on('admin.dashboardgrid.widgets.bottom', function($areas) {

        $rows    = $this->retrieve('dashboardgrid/bottom/rows',    1);
        $columns = $this->retrieve('dashboardgrid/bottom/columns', 6);
        
        $this->renderView('dashboardgrid:views/dashboard_bottom.php', compact('areas', 'rows', 'columns'));

    }, 100);

    // add widgets with content from core app-header-panel
    $this->on('admin.dashboard.widgets', function($widgets) {

        $columns = $this->retrieve('dashboardgrid/widgets/modules/columns', 2);

        $widgets[] = [
            'name'    => 'welcome',
            'content' => $this->view('dashboardgrid:views/widgets/welcome.php'),
            'area'    => 'aside-right'
        ];

        $widgets[] = [
            'name'    => 'modules',
            'content' => $this->view('dashboardgrid:views/widgets/modules.php', compact('columns')),
            'area'    => 'aside-right'
        ];

    }, 100);

});
