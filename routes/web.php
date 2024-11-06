<?php

use App\Livewire\OrganizationsCreate;
use App\Livewire\OrganizationsEdit;
use App\Livewire\OrganizationsTable;
use Illuminate\Support\Facades\Route;

Route::get('/organizations', OrganizationsTable::class)->name('organizations.show');
Route::get('/organizations/{organization}/edit', OrganizationsEdit::class)->name('organizations.edit');
Route::get('/organizations/create', OrganizationsCreate::class)->name('organizations.create');
