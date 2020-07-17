<?php 
if (!isset($_SESSION['active'])) {
$_SESSION['active'] = 'dashboard';
}
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4" >
<!-- Brand Logo -->
<a href="dashboard.php" class="brand-link">
<span class="brand-text font-weight-light">My Hao</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item has-treeview menu-open">
<a href="dashboard.php" class="nav-link <?php if ($_SESSION['active']=='dashboard'): ?>
active
<?php endif ?>">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Dashboard
</p>
</a>
</li>
<?php if ($_SESSION['type'] == 'property_developer'): ?>
<li class="nav-item">
<a href="properties.php" class="nav-link 
<?php if ($_SESSION['active']=='properties'): ?>
active
<?php endif ?>">
<i class="nav-icon fas fa-th"></i>
<p>
Properties
</p>
</a>
</li>
<?php endif ?>
<?php if ($_SESSION['type'] == 'admin'): ?>
<li class="nav-item">
<a href="properties2.php" class="nav-link 
<?php if ($_SESSION['active']=='properties'): ?>
active
<?php endif ?>">
<i class="nav-icon fas fa-th"></i>
<p>
Properties
</p>
</a>
</li>
<li class="nav-item">
<a href="users.php" class="nav-link 
<?php if ($_SESSION['active']=='users'): ?>
active
<?php endif ?>">
<i class="nav-icon fas fa-th"></i>
<p>
Users
</p>
</a>
</li>
<?php endif ?>
<li class="nav-item">
<a href="?logout" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
logout
</p>
</a>
</li>
</ul>
</nav>
</div>
</aside>