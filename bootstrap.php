<?php
/**
 * Custom dashboard with grid for Cockpit CMS
 * 
 * @see       https://github.com/raffaelj/cockpit_DashboardGrid/
 * @see       https://github.com/agentejo/cockpit/
 * 
 * @version   0.1.0
 * @author    Raffael Jesche
 * @license   MIT
 */

if (COCKPIT_ADMIN && !COCKPIT_API_REQUEST) {
    include(__DIR__ . '/admin.php');
}
