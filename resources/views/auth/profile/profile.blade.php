@extends('layouts.master')

@section('content')

<div  class="uk-container" >
    <div  class="uk-align-right uk-width-2-3@s">
        <div class="uk-grid-column-medium uk-grid-row-large" uk-grid>
            
            {{-- item 1   start  --------------------------------------------  --}}
            
            @include('auth.profile.cards.account_details')
            
            {{-- item 2   start  --------------------------------------------  --}}
            
            @include('auth.profile.cards.address')
            
            {{-- item 3   start  --------------------------------------------  --}}
            
            @include('auth.profile.cards.links')
            
            @if (session()->pull("updateUserSuccess"))
             <script>UIkit.notification({message: 'Done',  status: 'success' ,  pos: 'top-right'}) </script>
            @endif
        
            @if (session()->pull("thisIsNotImage"))
            <script>UIkit.notification({message: 'please select only jpeg or jpg or png or gif ',  status: 'danger' ,  pos: 'top-right'}) </script>
            @endif
                    
            @if (session()->pull("thisIsNotImage"))
            <script>UIkit.notification({message: 'please select only jpeg or jpg or png or gif ',  status: 'danger' ,  pos: 'top-right'}) </script>
            @endif
        </div>
    </div>
    
   
{{-- sid bar    start  --------------------------------------------  --}}
@include('auth.profile.sidbar')
</div>
@endsection