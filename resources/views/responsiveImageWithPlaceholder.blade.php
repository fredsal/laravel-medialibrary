<img{!! $attributeString !!}@if($loadingAttributeValue) loading="{{ $loadingAttributeValue }}"@endif srcset="{{ $media->getSrcset($conversion) }}" onload="if(!(width=this.getBoundingClientRect().width))return;this.onload=null;this.sizes=Math.ceil(width/window.innerWidth*100)+'vw';" sizes="1px" src="{{ $media->getUrl($conversion) }}" width="{{ $width }}">
