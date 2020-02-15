<div>
    @if(Session::has('sm'))
            <h4>
                <div class="alert alert-success">
                    {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times; --}}
                    {{-- </button> --}}
                    {{-- <span class="label label-primary text-center sm " role="alert"> --}}
                        {{session('sm')}}
                        {{-- {{Session::get('sm')}} --}}
                        {{-- </span> --}}
                </div>
            </h4>
    @endif
    @if($errors)
        @foreach($errors->all() as $message )
            <h4>
                <div class="alert alert-danger alert-important">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{-- <div class="label label-danger text-center " role="alert"> --}}
                            {{$message}}
                            {{-- </div> --}}
                </div>
            </h4>
        @endforeach
    @endif
</div>
<script>
    $('div.alert-success').delay(3000).slideUp(300);
</script>
