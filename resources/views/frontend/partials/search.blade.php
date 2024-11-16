
<!-- SEARCH SECTION -->

<section class="indigo darken-2 white-text center">
    <div class="container">
        <div class="row m-b-0">
            <div class="col s12">

                <form action="{{ route('search')}} " method="GET">

                    <div class="searchbar">
                        <div class="input-field col s12 m3">
                            <input type="text" name="city" id="autocomplete-input" class="autocomplete custominputbox" autocomplete="off">
                            <label for="autocomplete-input">Город \ Регион</label>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="type" class="browser-default">
                                <option value="" disabled selected>Выберите тип</option>
                                <option value="apartment">Апартаменты</option>
                                <option value="house">Дома</option>
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="purpose" class="browser-default">
                                <option value="" disabled selected>Предложение</option>
                                <option value="rent">Аренда</option>
                                <option value="sale">Продажа</option>
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="bedroom" class="browser-default">
                                <option value="" disabled selected>Спальни</option>
                                @if(isset($bedroomdistinct))
                                    @foreach($bedroomdistinct as $bedroom)
                                        <option value="{{$bedroom->bedroom}}">{{$bedroom->bedroom}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <input type="text" name="maxprice" id="maxprice" class="custominputbox">
                            <label for="maxprice">Макс.цена</label>
                        </div>
                        
                        <div class="input-field col s12 m1">
                            <button class="btn btnsearch waves-effect waves-light w100" type="submit">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>