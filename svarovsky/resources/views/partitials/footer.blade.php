@if($_SERVER['REQUEST_URI'] != '/kontakt')
    @include('partitials.footer_contact')
@else
    <style>
        footer{
            margin-top: 50px;
        }
    </style>
@endif
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                Copyright
            </div>
        </div>
    </div>
</footer>