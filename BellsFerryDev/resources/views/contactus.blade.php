@extends('layouts.ui')



@section('xcss')

@endsection




@section('content');

@include('partials.contactUs.title')

@include('partials.contactUs.content')




@endsection

@section('xjs')
{{-- <script type="text/javascript">
    $(document).ready(function() {
      $('.main-breadcrumb').css({
      "background": "url('{{contentImage(setting('site.site_banner'))}}') no-repeat center center fixed",
      "background-size": "cover"
    });

    });

    
    

</script>  --}}
@endsection