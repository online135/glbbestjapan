<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home Page
Breadcrumbs::for('index', function (BreadcrumbTrail $trail) {
    $trail->push('ホームページ', route('index'));
});


// About
Breadcrumbs::for('About', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('Global Best Japanとは', route('about'));
});

Breadcrumbs::for('Culture', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('Global Best Japanとは', route('about'));
    $trail->push('私たちが大切にしていること', route('culture'));
});


// Outline
Breadcrumbs::for('Outline', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('会社概要', route('outline'));
});

Breadcrumbs::for('Message', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('会社概要', route('outline'));
    $trail->push('代表メッセージ', route('message'));
});

Breadcrumbs::for('Interview', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('会社概要', route('outline'));
    $trail->push('INTERVIEW', route('interview'));
});

Breadcrumbs::for('Privacy-Policy', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('会社概要', route('outline'));
    $trail->push('プライバシーポリシー', route('privacy-policy'));
});

// Business
Breadcrumbs::for('Business', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('事業案内', route('business'));
});

// Recruit
Breadcrumbs::for('Recruit', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('採用情報', route('recruit'));
});

// Contact
Breadcrumbs::for('Contact', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('お問い合わせ', route('contact'));
});