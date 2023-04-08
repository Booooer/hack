@extends('layouts.app')
@section('title','Авторизация')
@section('content')
<main>
    <div class="profile-container">
        <div class="profile">
            @if($user->role == 'admin')
            <div class="panel-add-users">
                <p>Добавление пользователя</p>
                <input type="text" placeholder="введите логин" id="regLogin">
                <input type="text" placeholder="введите пароль" id="regPassword">
                <select name="role" id="regRole">
                    <option value="commandor">Управляющий</option>
                    <option value="buyer">Закупщик</option>
                    <option value="analytic">Аналитик</option>
                </select>
                <button type="submit" id="btnReg" onclick="sendUser()">Добавить</button>
                <div class="reg-answer">

                </div>
            </div>
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
            @endif
        <div>
    </div>
    @if($user->role == 'commandor')
    <div class="addData">
    <form action="" method="post">
        <label for="WorkSpace">Рабочая область:</label>
        <input name="WorkSpace" list="WorkSpaceList" id="WorkSpace">
        <datalist id="WorkSpaceList">
            <option value="WorkSpace_1">Область работы 1</option>
            <option value="WorkSpace_2">Область работы 2</option>
        </datalist>

        <label for="City">Город:</label>
        <input name="City" list="CityList" id="City">
        <datalist id="CityList">
            <option value="Tyumen">Тюмень</option>
            <option value="Moskow">Москва</option>
        </datalist>

        <label for="Brand">Бренд:</label>
        <input name="Brand" list="BrandList" id="Brand">
        <datalist id="BrandList">
            <option value="Parusa">Parusa</option>
        </datalist>
        
        <label for="CoffeeHouse">Кофейня:</label>
        <input name="CoffeeHouse" list="CoffeeHouseList" id="CoffeeHouse">
        <datalist id="CoffeeHouseList">
            <option value="CoffeeHouse">Кофейня</option>
        </datalist>
        
        <label for="NomenclatureСategory">Категория номенклатуры:</label>
        <input name="NomenclatureСategory" list="NomenclatureСategoryList" id="NomenclatureСategory">
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
        <input name="ItemNomenclatureIiko" id="ItemNomenclatureIiko">

        <label for="UnitMeasurementPackageSize">Единица измерения с учетом размера упаковки:</label>
        <input name="UnitMeasurementPackageSize" id="UnitMeasurementPackageSize">
        
        <label for="TargetPrice">Целевая цена:</label>
        <input name="TargetPrice" id="TargetPrice">

        <label for="Supplier">Поставщик:</label>
        <input name="Supplier" list="SupplierList" id="Supplier">
        <datalist id="SupplierList">
            <option value="0">0</option>
            <option value="GlobalFoods">Глобал Фудс</option>
            <option value="GlobalFoodsMetro">Глобал Фудс, Метро</option>
            <option value="IPZakiryanov">ИП Закирьянов</option>
            <option value="KingOfCheeses">Король Сыров</option>
            <option value="TyumenMilk">ТюменьМолоко</option>
        </datalist>
        
        <label for="ItemNomenclature">Элемент номенклатуры:</label>
        <input name="ItemNomenclature" id="ItemNomenclature">

        <label for="ABC">ABC:</label>
        <input name="ABC" list="ABCList" id="ABC">
        <datalist id="ABCList">
            <option value="15%">15%</option>
            <option value="5%">5%</option>
            <option value="80%">80%</option>
        </datalist>

        <label for="LeftoversVersionManagement">Осатки Версия Управ-х, ед изм.:</label>
        <input name="LeftoversVersionManagement" id="LeftoversVersionManagement">

        <label for="RemnantsOfIiko">Осатки IIKO, ед изм.:</label>
        <input name="RemnantsOfIiko" id="RemnantsOfIiko">

        <label for="Predict">Прогноз:</label>
        <input name="Predict" id="Predict">

        <label for="PredictEdIzm">Прогноз, ед.изм.:</label>
        <input name="PredictEdIzm" id="PredictEdIzm">

        <label for="Order">Заказ с учетом остков, ед. изм:</label>
        <input name="Order" id="Order">

        <label for="CorrectionManager">Корретировка управляющего:</label>
        <input name="CorrectionManager" id="CorrectionManager">

        <label for="ManagerComment">Комментарий управляющего:</label>
        <input name="ManagerComment" id="ManagerComment">

        <label for="OrderAdjustmentManager">Заказ с учетом корректировки управляющего:</label>
        <input name="OrderAdjustmentManager" id="OrderAdjustmentManager">

        <label for="Monday">Понедельник:</label>
        <input name="Monday" id="Monday">

        <label for="Tuesday">Вторник:</label>
        <input name="Tuesday" id="Tuesday">
        
        <label for="Wednesday">Среда:</label>
        <input name="Wednesday" id="Wednesday">
        
        <label for="Thursday">Четверг:</label>
        <input name="Thursday" id="Thursday">

        <label for="Friday">Пятница:</label>
        <input name="Friday" id="Friday">
        
        <label for="Saturday">Суббота:</label>
        <input name="Saturday" id="Saturday">
        
        <label for="Sunday">Воскресение:</label>
        <input name="Sunday" id="Sunday">
        

        <label for="Check">Проверка:</label>
        <input name="Check" id="Check">

        <button>Отправить</button>

        <input name="Check" id="Check">       

    </form>
    @endif
    </div>
</main>
<script src="{{ url('/js/addUser.js') }}"></script>
@endsection