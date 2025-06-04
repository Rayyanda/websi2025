<style>
    p{
        text-align: justify;
    }
</style>
<div class="prose mb-4 fade-in fade-in-delay-1 rich-text">
    {{-- {!! nl2br(e($data['text'])) !!} --}}
    {!! str($data['text'])->sanitizeHtml() !!}
</div>
