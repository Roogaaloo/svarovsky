<div class="meeting-popup">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 meeting-popup-body">
                <div class="close">x</div>

                <form method="post" action="{{ route('contact.addMeeting') }}">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Jméno a příjmení</label>
                            <input class="form-control" type="text" name="name" placeholder="Jméno a příjmení" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Lokalita</label>
                            <input class="form-control" type="text" name="local" placeholder="Brno, Sránská 5" value="{{ old('locale') }}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Telefon</label>
                            <input class="form-control" type="text" name="phone" placeholder="Telefon" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>E-mail</label>
                            <input class="form-control" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 option">
                                <label for="bydleni"><i class="fa fa-home"></i> Chci řešit bydlení</label>
                                <input type="checkbox" id="bydleni" class="form-control" name="bydleni" value="Chci řešit bydlení">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 option">
                                <label for="pojisteni"><i class="fa fa-leaf"></i> Potřebuji pojištění</label>
                                <input type="checkbox" id="pojisteni" class="form-control" name="pojisteni" value="Potřebuji pojištění">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 option">
                                <label for="clean"><i class="fa fa-stack-overflow"></i> Chci pořádek ve smlouvách</label>
                                <input type="checkbox" id="clean" class="form-control" name="clean" value="Chci udělat pořádek ve smlouvách">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 option">
                                <label for="make"><i class="fa fa-check"></i> Chci zhodnocení a vydělávat</label>
                                <input type="checkbox" id="make" class="form-control" name="make" value="Chci zhodnocení a vydělávat">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 option">
                                <label for="store"><i class="fa fa-database"></i> Chci ušetřit</label>
                                <input type="checkbox" id="store" class="form-control" name="store" value="Chci ušetřit">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 option">
                                <label for="analyse"><i class="fa fa-line-chart"></i> Chci komplexní finanční analýzu</label>
                                <input type="checkbox" id="analyse" class="form-control" name="analyse" value="Chci komplexní finanční analýzu">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <br />
                                <label>Zpráva</label>
                                <textarea class="form-control" rows="5" name="text" placeholder="Zpráva">{{ old('text') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="checkbox" id="agree" name="agree"> Souhlasím se zpracováním osobních údajů k přečtení.

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 text-right">
                                <input type="submit" name="submit" value="Odeslat" class="btn">
                            </div>
                        </div>
                    </div>

                    <p></p>

                </form>
            </div>
        </div>
    </div>
</div>