<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 15/09/2018
 * Time: 08:41 PM
 */

?>

<div class="col-md-3" >
    <div class="card" >
        <div clas class="card-header">{{ __('Social') }}</div>
        <div class="card-body">
            <a href="{{ route('social_auth', ['driver' => 'github']) }}"
               class="btn btn-github btn-lg btn-block"
            >
                {{ __("Github") }} <i class="fa fa-github"></i>
            </a>
            <a href="{{ route('social_auth', ['driver'=>'google']) }}"
               class="btn btn-google btn-lg btn-block "
            >
                {{__('Google')}} <i class="fa fa-google"></i>
            </a>
        </div>
    </div>
</div>
