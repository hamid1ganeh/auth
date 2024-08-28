<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

//صفحه اصلی
Breadcrumbs::for('home', function ($trail) {
    $trail->push('صفحه اصلی', route('admin.home'));
});


// داشبورد >  نقش ها
Breadcrumbs::for('roles', function ($trail) {
    $trail->parent('home', $trail);
    $trail->push('نقش ها', route('admin.roles.index'));
});

//  داشبورد >  نقش ها > ایجاد نقش جدید
Breadcrumbs::for('roles.create', function ($trail) {
    $trail->parent('roles', $trail);
    $trail->push('ایجاد نقش جدید', route('admin.roles.create'));
});

// ایجاد داشبورد >  نقش ها > ویرایش نقش
Breadcrumbs::for('roles.edit', function ($trail,$role) {
    $trail->parent('roles', $trail);
    $trail->push('ویرایش نقش', route('admin.roles.edit',$role));
});
