<?php
// Config pagination
$config = [
    'base_url' => 'http://localhost/ci-app/peoples/index',
    'num_links' => 5,

    'full_tag_open' => '<nav><ul class="pagination">',
    'full_tag_close' => '</ul></nav>',

    'first_tag_open' => '<li class="page-item">',
    'first_tag_close' => '</li>',

    'last_tag_open' => '<li class="page-item">',
    'last_tag_close' => '</li>',

    'next_link' => '&raquo',
    'next_tag_open' => '<li class="page-item">',
    'next_tag_close' => '</li>',

    'prev_link' => '&laquo',
    'prev_tag_open' => '<li class="page-item">',
    'prev_tag_close' => '</li>',

    'cur_tag_open' => '<li class="page-item active"><a class="page-link" href="#">',
    'cur_tag_close' => '</a></li>',

    'num_tag_open' => '<li class="page-item">',
    'num_tag_close' => '</li>',

    'attributes' => array('class' => 'page-link')
];
