<?php

use SimaoCoutinho\Store\AdminController;

Route::get('calculator', [AdminController::class, "index"]);
