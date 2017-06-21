
<footer>
    @if($_SERVER['REQUEST_URI'] != '/kontakt')
        @include('partitials.footer_contact')
    @else
        <style>
            footer{
                margin-top: 50px;
            }
        </style>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                Copyright &copy; <span class="number">2017 @if(date('Y') != 2017) - {{ date('Y') }} @endif</span> Jiří Svarovský. Všechna práva vyhrazena.
            </div>
        </div>
    </div>
</footer>