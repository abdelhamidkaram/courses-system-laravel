<div>
    <div class="uk-card uk-card-default uk-card-body">
        
        <div  class="uk-container" >
           <h3> {{__("account.address")}} </h3>
           <hr>
            <form action="{{ route('add-address') }}" method="POST"class="uk-grid-small " uk-grid>
                @csrf
                <div class="uk-width-1-2">
                    <label > {{__("account.street")}} </label>
                    <input class="uk-input" type="text" value='{{($address->street_number) ?? " "}}' name="street_number">
                </div>
                <div class="uk-width-1-2@s">
                    <label > {{__("account.unit")}} </label>
                    <input  value='{{($address->unit_number) ?? " "}}' name="unit_number" class="uk-input" type="text"  >
                </div>
          
                <div class="uk-width-1-1@s">
                    <label > {{__("account.city")}} </label>
                    <input value='{{($address->city) ?? " "}}'name="city"class="uk-input" type="text" >
                </div>
                <div class="uk-width-1-1@s">
                    <label > {{__("account.state")}} </label>
                    <input value='{{($address->state) ?? " "}}'name="state" class="uk-input" type="text" >
                </div>
                <div class="uk-width-1-2@s">
                    <label >{{__("account.postCode")}}  </label>
                    <input value='{{($address->post_code) ?? ""}}' name="post_code" class="uk-input" type="text" >
                </div>
                <div class="uk-width-1-2@s">
                    <label > {{__("account.country")}}  </label>
                    <input value='{{($address->country) ?? ""}}'name="country" class="uk-input" type="text">
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
