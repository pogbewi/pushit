@extends('templates.master')

@section('styles')
    <link rel="stylesheet" href="/assets/auth/css/authenticate.css">
@endsection

@section('content')
    <section class="features1 authenticate" id="features1-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mx-auto">
            <!-- multistep form -->
            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                    <!-- something here -->
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Account Login</h2>
                    <h3 class="fs-subtitle">This is step 1</h3>
                    <input type="text" name="email" placeholder="Email" />
                    <input type="password" name="pass" placeholder="Password" />
                    <input type="button" name="previous" class="previous action-button" value="Cancel" />
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
            </form>
            </div>
           </div>
        </div>
    </section>
@endsection
@push('scripts')
<script src="/assets/auth/js/authenticate.js"></script>
@endpush
