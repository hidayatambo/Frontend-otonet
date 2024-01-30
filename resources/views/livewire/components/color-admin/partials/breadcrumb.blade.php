<div>
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item">{{ Str::title($activePage)  }}</li>
        <li class="breadcrumb-item active">{{ Str::title(str_replace('_', ' ', $subActivePage)) }}</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header">{{ Str::title(str_replace('_', ' ', $subActivePage)) }}</h1>
    <!-- END page-header -->
</div>
