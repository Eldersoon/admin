@extends('layouts.app')

@section('content')
<page width="10">
    <painel title="Administrator" color="blue">
    <breadcrumbs v-bind:list="{{$breadcrumbsList}}"></breadcrumbs>
        <div class="row"> 
      
            <div class="col-md-3">
                <box quantity="0" title="Posts" url="{{ route('article.index') }}" color="#0258D5" icon="ion ion-document-text"></box>
            </div>
            
            <div class="col-md-3">
                <box quantity="0" title="carousel" url="#" color="#F46513" icon="ion ion-images"></box>
            </div>

            <div class="col-md-3">
                <box quantity="0" title="Visitors" url="#" color="#FF1102" icon="ion ion-pie-graph"></box>
            </div>

            <div class="col-md-3">
                <box quantity="0" title="Statistics" url="#" color="#1FBA00" icon="ion ion-stats-bars"></box>
            </div>

        </div>

    </painel>
</page>
@endsection
