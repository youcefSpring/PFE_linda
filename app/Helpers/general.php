<?php


define('PAGINATION_COUNT',50);

function getFolder(){
    return app()->getLocale() == 'ar' ?'css-rtl' : 'css';
}

function nbrEmp(){
    if (Schema::hasTable('employees')) {
        return DB::table('employees')->count();

    }
}

















?>
