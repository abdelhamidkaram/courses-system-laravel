<div>
    <div class="uk-card uk-card-default uk-card-body">
        
        <div  class="uk-container" >
           <h3> {{__("account.links")}} </h3>
           <hr>
            <form action="{{ route('add-links') }}" method="POST"class="uk-grid-small " uk-grid>
                @csrf
                <div class="uk-width-1-1">
                    <label > {{__("account.twitter")}} </label>
                    <input class="uk-input" type="text" value='{{($links->twitter) ?? "xcxc "}}' name="twitter">
                </div>
                <div class="uk-width-1-1@s">
                    <label > {{__("account.facebook")}} </label>
                    <input  value='{{($links->facebook) ?? " "}}' name="facebook" class="uk-input" type="text"  >
                </div>
          
                <div class="uk-width-1-1@s">
                    <label > {{__("account.youtube")}} </label>
                    <input value='{{($links->youtube) ?? " "}}'name="youtube"class="uk-input" type="text" >
                </div>
                <div class="uk-width-1-1@s">
                    <label > {{__("account.linkedin")}} </label>
                    <input value='{{($links->linkedin) ?? " "}}'name="linkedin" class="uk-input" type="text" >
                </div>
              
                <div class="uk-width-1-1@s">
                                       
                </div>

                <div class="uk-margin-medium-top uk-width-1-2@s uk-align-center ">
                    <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">
                        {{ __('account.update') }}
                    </button>
               
                </div>
                


            </form>
                          
        </div>
        

    </div>
</div>
