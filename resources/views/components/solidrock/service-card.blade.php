@props(['service'])
<div class="col-lg-3 col-md-6">
    <!-- Service Item Start -->
    <div class="service-item wow fadeInUp">
        <div class="icon-box">
            <div class="img">
                <img src="{{asset($service->icon)}}" alt="">
            </div>
        </div>
        <div class="service-body">
            <h3>{{$service->name}}</h3>
            <p>{{$service->description}}</p>
        </div>
        <div class="read-more-btn">
            <a href="{{route('services.show',$service->slug)}}">read more</a>
        </div>
    </div>
    <!-- Service Item End -->
</div>
