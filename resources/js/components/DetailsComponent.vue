@extends('layouts.app')
@section('content')

<template>
  <ul>
    <li>Material:100% cotton</li>
    <li>Bio</li>
    <li>V-neck</li>
    <li>Stanley & Stella</li>
    <li>Classic model</li>
    <li>Soft fabric quality 155 g/m²</li>
  </ul>
</template>

<script>
export default {
  mounted() {
    console.log("Details Component mounted.");
  },
};
</script>

 @endsection('content')

