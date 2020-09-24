@php
    $pathOffRouteToGroks = 'packages/tallandsassy/tasbranding/resources/views/groks_tasbranding';
@endphp
<x-grok::grok_page_layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Grok
        </h2>
    </x-slot>


    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tall and Sassy: Branding
    </h2>

    <x-grok::action-section title="Installation">
        <x-slot name="description">
            @include('tassy::groks_tasbranding.005_installation.description',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
        </x-slot>

        <x-slot name="content">
            @include('tassy::groks_tasbranding.005_installation.content',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
        </x-slot>
    </x-grok::action-section>

    <x-jet-section-border/>
    <x-grok::action-section title="Config">
        <x-slot name="description">
            @include('tassy::groks_tasbranding.010_config.description',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
        </x-slot>

        <x-slot name="content">
            @include('tassy::groks_tasbranding.010_config.content',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
        </x-slot>
    </x-grok::action-section>

      <x-jet-section-border/>
    <x-grok::action-section title="Logo">
        <x-slot name="description">
            @include('tassy::groks_tasbranding.020_logo.description',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
        </x-slot>

        <x-slot name="content">
            @include('tassy::groks_tasbranding.020_logo.content',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
        </x-slot>
    </x-grok::action-section>


</x-grok::grok_page_layout>
