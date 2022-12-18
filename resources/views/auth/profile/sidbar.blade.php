
<div class="uk-card uk-card-default uk-card-body uk-position-z-index " uk-sticky="end: true ;offset: 80">
  
   @if (!empty(Auth::user()->photo->last()->path))
       <img class=" circular--square uk-align-center " src="{{asset('images/'.Auth::user()->photo->last()->path)}}" width="250" height="50" alt="Border pill" >
   @else
      <img class=" circular--square uk-align-center " src="{{asset('assets/ava.png') }}" width="250" height="50" alt="Border pill" >
   @endif

    <div class="uk-card-badge uk-label">
        <a href="#Upload-image" uk-toggle>Edit Photo <span uk-icon="file-edit"></span> 
        </a>
    </div>

  <ul class="uk-list uk-list-striped">
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
    <li>List item 1</li>
    <li>List item 3</li>
  </ul>

</div>

<!-- This is the modal -->
<div id="Upload-image" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical ">
        <h2 class="uk-modal-title">Upload image </h2>
        <form action={{ route('edit-photo') }} method="post" enctype="multipart/form-data">
            @csrf
            <div class="uk-placeholder uk-text-center">
                <div class="uk-margin" uk-margin>
                    <div uk-form-custom="target: true">
                        <input type="file"  name="photo"  >
                        <input class="uk-input uk-form-width-large" type="text" placeholder="Click here to select image " aria-label="Custom controls" disabled>
                    </div>
                </div>
                       
             </div>
      

         <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary uk-button uk-button-default" type="submit" >Save</button>
             
         </p>
        </form>
    </div>


</div>