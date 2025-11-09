<!DOCTYPE html>
<html>
@extends('layouts.app')

@section('title', 'Data Kategori')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>📂 Data Kategori</h2>
    <a href="{{ route('kategori.create') }}" class="btn btn-success">+ Tambah Kategori</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

