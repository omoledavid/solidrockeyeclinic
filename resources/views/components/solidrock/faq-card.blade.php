@props(['faq'])
<div class="accordion-item wow fadeInUp">
    <h2 class="accordion-header" id="heading.{{$faq->id }}">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
            {{ $faq->question }}
        </button>
    </h2>
    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading.{{$faq->id }}"
         data-bs-parent="#accordion">
        <div class="accordion-body">
            <p>{{$faq->answer}}</p>
        </div>
    </div>
</div>