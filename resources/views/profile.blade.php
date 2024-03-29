@extends('layouts.app')
@section('title','Авторизация')
@section('content')
<main>
    <div class="profile-info">
        <img src="/images/logo.jpg" alt="">
        <h1>Личный кабинет</h1>
        <div class="profile-role">
            <p>Ваша роль:&nbsp;</p>
            <p>{{ $user->role }}</p>
        </div>
        <div class="logout">
            <a href="/logout">Выход</a>
        </div>
    </div>
    <div class="profile-container">
        <div class="profile">
        @if(Auth::user()->role == 'Админ')

            <!-- вкладки -->
            <div class="choiceAddPanel">
                <div class="addUsersPanel" onclick="selectUserPanel()">
                    Пользователи
                </div>
                <div class="addProductsPanel" onclick="selectProductPanel()">
                    Товары
                </div>
                <div class="addItogZakazPanel" onclick="selectItogZakazPanel()">
                    Итоговый заказ
                </div>
            </div>

            <!-- пользователи -->

            <div class="panel-add-users">
                <div>
                    <p>Добавление пользователя</p>
                    <input type="text" placeholder="введите логин" id="regLogin">
                    <input type="text" placeholder="введите пароль" id="regPassword">
                    <select name="role" id="regRole">
                        <option value="Управляющий">Управляющий</option>
                        <option value="Закупщик">Закупщик</option>
                        <option value="Аналитик">Аналитик</option>
                    </select>
                    <button type="submit" id="btnReg" class="btnReg" onclick="sendUser()">Добавить</button>
                    <div class="reg-answer">

                    </div>
                </div>

                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Логин</th>
                                <th>Роль</th>
                                <th>Новая роль</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <form action="{{ route('updateRole') }}" method="POST">
                            @csrf
                            <tr>
                                <td>
                                    <input type="hidden" name="login" value="{{$user->login}}">{{$user->login}}</div>
                                </td>
                                <td>
                                    <div id="{{$user->role}}">{{$user->role}}</div>
                                </td>
                                <td>
                                    <select name="role" id="role">
                                        <option value="Аналитик">Аналитик</option>
                                        <option value="Управляющий">Управляющий</option>
                                        <option value="Закупщик">Закупщик</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="submit">Изменить</button>
                                </td>
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- продукты -->

            <div class="panel-add-products">
                <p>Добавление товара</p>
                <input type="text" placeholder="Элемент номенклатуры" id="elementNm">
                <select name="category" id="categoryNm">
                    <option value="Кофе зерновой">Кофе зерновой</option>
                    <option value="Молочная продукция">Молочная продукция</option>
                    <option value="Прочее">Прочее</option>
                    <option value="Соуса">Соуса</option>
                    <option value="Специи">Специи</option>
                    <option value="Хлеб">Хлеб</option>
                    <option value="Альтернативное молоко">Альтернативное молоко</option>
                    <option value="Мороженое">Мороженое</option>
                    <option value="Паста ореховая">Паста ореховая</option>
                    <option value="Чай">Чай</option>
                    <option value="Консервы">Консервы</option>
                    <option value="Шоколад">Шоколад</option>
                    <option value="Пищевые добавки">Пищевые добавки</option>
                    <option value="Рыба">Рыба</option>
                    <option value="Яйца">Яйца</option>
                    <option value="Крупы">Крупы</option>
                </select>
                <input type="text" placeholder="Итог" id="total">
                <button type="submit" id="btnReg" onclick="sendProducts()">Добавить</button>
                <div class="product-answer">

                </div>
            </div>
            
            <!-- итоги заказов -->

            <div class="panel-add-itog-zakaz">

                <table>
                    <thead>
                        <tr>
                            <th>Элемент номенклатуры</th>
                            <th>Категория</th>
                            <th>Итог</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->element_nomenklatyri }}</td>
                            <td>{{ $product->categorya_nomenklatyri }}</td>
                            <td>{{ $product->itog }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <div>
            </div>
        <div>
    </div>
    @endif
    @if(Auth::user()->role == 'Управляющий')
            <div class="addData">
                <form action="" method="post">
                    <label for="City">Город:</label>
                    <input name="City" id="City" value="{{ $works->Город}}">

                    <label for="Brand">Бренд:</label>
                    <input name="Brand" id="Brand" value="{{ $works->Бренд}}">

                    <label for="yrFace">Юр. лицо:</label>
                    <input name="yrFace" id="yrFace" value="{{ $works->Юр_лицо}}">

                    <label for="CoffeeHouse">Кофейня:</label>
                    <input name="CoffeeHouse" list="CoffeeHouseList" id="CoffeeHouse" value="{{ $works->Кофейня}}">
                    

                    <label for="NomenclatureСategory">Категория номенклатуры:</label>
                    <input name="NomenclatureСategory" list="NomenclatureСategoryList" id="NomenclatureСategory" value="{{ $works->Категория_номенклатуры}}">
                    <datalist id="NomenclatureСategoryList">
                        <option value="AlternativeMilk">Альтернативное молоко</option>
                        <option value="Preserves">Консервы</option>
                        <option value="CoffeeBeans">Кофе зерновой</option>
                        <option value="Cereals">Крупы</option>
                        <option value="DairyProducts">Молочная продукция</option>
                        <option value="IceCream">Мороженное</option>
                        <option value="Meat">Мясо</option>
                        <option value="NutPaste">Ореховая паста</option>
                        <option value="FoodAdditives">Пищевые добавки</option>
                        <option value="Other">Прочее</option>
                        <option value="Fish">Рыба</option>
                        <option value="Sauce">Соуса</option>
                        <option value="Spices">Специи</option>
                        <option value="Bread">Хлеб</option>
                        <option value="Tea">Чай</option>
                        <option value="Chocolate">Шоколад</option>
                        <option value="Eggs">Яйца</option>
                    </datalist>

                    <label for="ItemNomenclatureIiko">Элемент номенклатуры iiko:</label>
                    <input name="ItemNomenclatureIiko" id="ItemNomenclatureIiko" value="{{ $works->Элемент_номенклатуры_iiko}}">
                    
                    <label for="successDealler">Одобренные поставщики:</label>
                    <input name="successDealler" id="successDealler" value="{{ $works->Одобренные_поставщики}}">

                    <label for="UnitMeasurementPackageSize">Единица измерения с учетом размера упаковки:</label>
                    <input name="UnitMeasurementPackageSize" id="UnitMeasurementPackageSize" value="{{ $works->Единица_измерения_с_учетом_размера_упаковки}}">
                    
                    <label for="highTemp">Рекоменд заказ при t-ре выше 22˚:</label>
                    <input name="highTemp" id="highTemp" value="{{ $works->Рекоменд_заказ_при_t_ре_выше_22˚}}">
                    
                    <label for="lowTemp">Рекоменд заказ при t-ре ниже 22˚:</label>
                    <input name="lowTemp" id="lowTemp" value="{{ $works->Рекоменд_заказ_при_t_ре_ниже_22˚}}">

                    <label for="TargetPrice">Целевая цена:</label>
                    <input name="TargetPrice" id="TargetPrice" value="{{ $works->Целевая_цена}}">

                    <label for="Supplier">Поставщик:</label>
                    <input name="Supplier" list="SupplierList" id="Supplier" value="{{ $works->Поставщик}}">
                    <datalist id="SupplierList">
                        <option value="0">0</option>
                        <option value="GlobalFoods">Глобал Фудс</option>
                        <option value="GlobalFoodsMetro">Глобал Фудс, Метро</option>
                        <option value="IPZakiryanov">ИП Закирьянов</option>
                        <option value="KingOfCheeses">Король Сыров</option>
                        <option value="TyumenMilk">ТюменьМолоко</option>
                    </datalist>

                    <label for="ItemNomenclature">Элемент номенклатуры:</label>
                    <input name="ItemNomenclature" id="ItemNomenclature" value="{{ $works->Элемен_номенклатуры}}">

                    <label for="ABC">ABC:</label>
                    <input name="ABC" list="ABCList" id="ABC" value="{{ $works->АВС}}">

                    <label for="LeftoversVersionManagement">Осатки Версия Управ-х, ед изм.:</label>
                    <input name="LeftoversVersionManagement" id="LeftoversVersionManagement" value="{{ $works->Остатки_Версия_Управ_х_ед_изм}}">

                    <label for="RemnantsOfIiko">Осатки IIKO, ед изм.:</label>
                    <input name="RemnantsOfIiko" id="RemnantsOfIiko" value="{{ $works->Остатки_IIKO_ед_изм}}">

                    <label for="Predict">Прогноз:</label>
                    <input name="Predict" id="Predict" value="{{ $works->Прогноз}}">

                    <label for="PredictEdIzm">Прогноз, ед.изм.:</label>
                    <input name="PredictEdIzm" id="PredictEdIzm" value="{{ $works->Прогноз_ед_изм}}">

                    <label for="Order">Заказ с учетом остков, ед. изм:</label>
                    <input name="Order" id="Order" value="{{ $works->Заказ_с_учетом_остатков_ед_изм}}">

                    <label for="CorrectionManager">Корретировка управляющего:</label>
                    <input name="CorrectionManager" id="CorrectionManager" value="{{ $works->Корректировка_управляющего}}">

                    <label for="ManagerComment">Комментарий управляющего:</label>
                    <input name="ManagerComment" id="ManagerComment" value="{{ $works->Комментарий_управляющего}}">

                    <label for="OrderAdjustmentManager">Заказ с учетом корректировки управляющего:</label>
                    <input name="OrderAdjustmentManager" id="OrderAdjustmentManager" value="{{ $works->Заказ_с_учетом_корректировки_управляющего}}">

                    <label for="Monday">Понедельник:</label>
                    <input name="Monday" id="Monday" value="{{ $works->	ПН}}">

                    <label for="Tuesday">Вторник:</label>
                    <input name="Tuesday" id="Tuesday" value="{{ $works->ВТ}}">

                    <label for="Wednesday">Среда:</label>
                    <input name="Wednesday" id="Wednesday" value="{{ $works->СР}}">

                    <label for="Thursday">Четверг:</label>
                    <input name="Thursday" id="Thursday" value="{{ $works->ЧТ}}">

                    <label for="Friday">Пятница:</label>
                    <input name="Friday" id="Friday" value="{{ $works->ПТ}}">

                    <label for="Saturday">Суббота:</label>
                    <input name="Saturday" id="Saturday" value="{{ $works->СБ}}">

                    <label for="Sunday">Воскресение:</label>
                    <input name="Sunday" id="Sunday" value="{{ $works->ВС}}">


                    <label for="Check">Проверка:</label>
                    <input name="Check" id="Check" value="{{ $works->Проверка}}">

                    <button>Отправить</button>
                </form>
                @endif
                @if(Auth::user()->role == 'Закупщик')
                <p>Заказ поставщику</p>
                <table>
                    <thead>
                        <tr>
                            <th>Кофейня</th>
                            <th>Поставщик</th>
                            <th>Элемент номенклатуры</th>
                            <th>Цена</th>
                            <th>ПН</th>
                            <th>ВТ</th>
                            <th>СР</th>
                            <th>ЧТ</th>
                            <th>ПТ</th>
                            <th>СБ</th>
                            <th>ВС</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($finals as $final)
                        <tr>
                            <td>{{ $final->kofeinya }}</td>
                            <td>{{ $final->postavshik }}</td>
                            <td>{{ $final->element_nomenklatyri }}</td>
                            <td>{{ $final->celevaya }}</td>
                            <td>{{ $final->pn }}</td>
                            <td>{{ $final->vt }}</td>
                            <td>{{ $final->sr }}</td>
                            <td>{{ $final->cht }}</td>
                            <td>{{ $final->pt }}</td>
                            <td>{{ $final->sb }}</td>
                            <td>{{ $final->vs }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" id="btnHandler">В обработку</button>
                @endif
            </div>
</main>
<script src="{{ url('/js/addUserValidate.js') }}"></script>
<script src="{{ url('/js/addUser.js') }}"></script>
<script src="{{ url('/js/choiceAddPanel.js') }}"></script>
@endsection