
<div class="row">
    <div class="col-6">
        <h4>{{ Str::title(str_replace('_', ' ', $subActivePage)) }}</h4>
    </div>
    <div class="col-6">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">
                    <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                    </svg></a></li>
            <li class="breadcrumb-item">{{ Str::title($activePage)  }}</li>
            <li class="breadcrumb-item active">{{ Str::title(str_replace('_', ' ', $subActivePage)) }}</li>
        </ol>
    </div>
</div>
