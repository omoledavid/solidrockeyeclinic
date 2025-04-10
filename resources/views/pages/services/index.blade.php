<x-app-layout pageName="{{$pageName}}">
    <x-head-banner pageName="{{$pageName}}"></x-head-banner>
    <div class="page-services">
        <div class="container">
            <div class="row">
                @if($services->count())
                    @foreach($services as $service)
                        <x-solidrock.service-card :$service/>
                    @endforeach
                @else
                    <div class="col-lg-3 col-md-12">
                        <p>No service</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
