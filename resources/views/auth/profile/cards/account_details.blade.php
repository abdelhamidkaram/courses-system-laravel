<div>
    <div class="uk-card uk-card-default uk-card-body ">
        
        <div  class="uk-container" >
           <h3> {{__("account.accountDetails")}} </h3>
           <hr>
            <form action="{{ route('update-user') }}" method="POST"class="uk-grid-small " uk-grid>
                @csrf

                <div class="uk-width-1-1">
                    <label > {{__("account.first_name")}} </label>
                    <input class="uk-input" type="text"  name="first_name" value="{{$user->first_name}}" >
                </div>

                <div class="uk-width-1-1@s">
                    <label > {{__("account.last_name")}} </label>
                    <input  value="{{$user->last_name}}"  name="last_name" class="uk-input" type="text"  >
                </div>
        
                <div class="uk-width-1-1@s">
                    <label > {{__("account.email")}} </label>
                    <input value="{{$user->email}}" name="email"class="uk-input" type="text" >
                </div>
                
                <div class="uk-width-1-1@s">
                                       
                </div>
                 
                <div class="uk-margin-medium-top uk-width-1-2@s uk-align-center">
                    <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">
                        {{ __('account.update') }}
                    </button>
               
                </div>
            </form>
                          
        </div>
        

    </div>
</div>
