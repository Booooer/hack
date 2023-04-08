@extends('layouts.app')
@section('title','Авторизация')
@section('content')
<main>
    <form action="" method="post">
        <input name="WorkSpace" list="WorkSpaceList" id="WorkSpace">
        
        <datalist id="WorkSpaceList">
            <option value="WorkSpace_1">Область работы 1</option>
            <option value="WorkSpace_2">Область работы 2</option>
        </datalist>

        <input name="City" list="CityList" id="City">
        <datalist id="CityList">
            <option value="Tyumen">Тюмень</option>
            <option value="Moskow">Москва</option>
        </datalist>

        <input name="Brand" list="BrandList" id="Brand">
        <datalist id="BrandList">
            <option value="Parusa">Parusa</option>
        </datalist>
        
        <input name="CoffeeHouse" list="CoffeeHouseList" id="CoffeeHouse">
        <datalist id="CoffeeHouseList">
            <option value="CoffeeHouse">Кофейня</option>
        </datalist>

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
        
        <input name="ItemNomenclatureIiko" id="ItemNomenclatureIiko">

        <input name="UnitMeasurementPackageSize" id="UnitMeasurementPackageSize">
        
        <input name="TargetPrice" id="TargetPrice">

        <input name="Supplier" list="SupplierList" id="Supplier">
        <datalist id="SupplierList">
            <option value="0">0</option>
            <option value="GlobalFoods">Глобал Фудс</option>
            <option value="GlobalFoodsMetro">Глобал Фудс, Метро</option>
            <option value="IPZakiryanov">ИП Закирьянов</option>
            <option value="KingOfCheeses">Король Сыров</option>
            <option value="TyumenMilk">ТюменьМолоко</option>
        </datalist>
        
        <input name="ItemNomenclature" id="ItemNomenclature">

        <input name="ABC" list="ABCList" id="ABC">
        <datalist id="ABCList">
            <option value="15%">15%</option>
            <option value="5%">5%</option>
            <option value="80%">80%</option>
        </datalist>

        <input name="LeftoversVersionManagement" id="LeftoversVersionManagement">

        <input name="RemnantsOfIiko" id="RemnantsOfIiko">

        <input name="Predict" id="Predict">

        <input name="PredictEdIzm" id="PredictEdIzm">

        <input name="Order" id="Order">

        <input name="CorrectionManager" id="CorrectionManager">

        <input name="ManagerComment" id="ManagerComment">

        <input name="OrderAdjustmentManager" id="OrderAdjustmentManager">

        <input name="Monday" id="Monday">

        <input name="Tuesday" id="Tuesday">
        
        <input name="Wednesday" id="Wednesday">
        
        <input name="Thursday" id="Thursday">

        <input name="Friday" id="Friday">
        
        <input name="Saturday" id="Saturday">
        
        <input name="Sunday" id="Sunday">
        
        <input name="Check" id="Check">


        




        
    </form>
</main>
@endsection