<?php

class Widget extends Eloquent {
    protected $table = 'widgets';
    protected $fillable = ['name', 'color', 'description'];
}
