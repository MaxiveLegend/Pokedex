@extends('layout')
@section('title', 'Pokemon - ' . $name)

@section('content')
    <pokemon name="{{$name}}"/>
@endsection
<script>
    import Pokemon from "../js/components/Pokemon";
    export default {
        components: {Pokemon}
    }
</script>
