@php use App\Enums\ArticleStatusEnum; @endphp
@if($data->status == ArticleStatusEnum::ACTIVE->value)
    <span class="badge text-bg-success"> Publish</span>
@else
    <span class="badge text-bg-danger"> Draft</span>
@endif
