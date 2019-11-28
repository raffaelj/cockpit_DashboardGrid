# DashboardGrid

Custom dashboard with grid for [Cockpit CMS][1]

This addon adds a top and a bottom area around the core dashboard widget areas. The number of columns and rows can be adjusted via config file.

**Important:** If you don't want to use this addon anymore, you have to move all widgets to one of the core areas before you remove it (or you have to delete the options in the `cockpit/options` table manually). Otherwise Cockpit will throw a fatal error, because it tries to call a function on a non-existent object in the dashboard function.

## Installation

Copy this repository into `/addons` and name it `DashboardGrid` or

```bash
cd path/to/cockpit
git clone https://github.com/raffaelj/cockpit_DashboardGrid.git addons/DashboardGrid
```

## Configuration

Add these options to `cockpit/config/config.yaml`:

```yaml
dashboardgrid:
    top:
        rows: 2         # default: 1
        columns: 4      # default: 2
    bottom:
        rows: 1         # default: 1
        columns: 4      # default: 6
    widgets:
        modules:        # number of columns for modules widget
            columns: 3  # default: 2
```

## Screenshot

![dashboard with a lot of widgets in a grid view](cockpit_dashboardgrid_screenshot.png)

[1]: https://github.com/agentejo/cockpit
