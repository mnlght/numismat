function syncList(){} //Определяем функцию конструктор

syncList.prototype.sync = function()

{

    for (var i=0; i < arguments.length-1; i++)   document.getElementById(arguments[i]).onchange = (function (o,id1,id2){return function(){o._sync(id1,id2);};})(this, arguments[i], arguments[i+1]);

    document.getElementById(arguments[0]).onchange();//запускаем обработчик onchange первого селекта, чтобы при загрузке страницы заполнить дочерние селекты значениями.

}

//служебный метод _sync - срабатывает при смене выбранного элемента в текущем (старшем) элементе SELECT (по его событию onChange) и изменяет содержимое зависимого селекта на основании значения выбранного в старшем селекте.

syncList.prototype._sync = function (firstSelectId, secondSelectId)

{

    var firstSelect = document.getElementById(firstSelectId);

    var secondSelect = document.getElementById(secondSelectId);

    secondSelect.length = 0; //обнуляем второй (подчиненный) SELECT

    if (firstSelect.length>0)//если первый (старший) SELECT не пуст

    {

        var optionData = this.dataList[ firstSelect.options[firstSelect.selectedIndex==-1 ? 0 : firstSelect.selectedIndex].value ];

        for (var key in optionData || null) secondSelect.options[secondSelect.length] = new Option(optionData[key], key);

        if (firstSelect.selectedIndex == -1) setTimeout( function(){ firstSelect.options[0].selected = true;}, 1 );

        if (secondSelect.length>0) setTimeout( function(){ secondSelect.options[0].selected = true;}, 1 );

    }
    secondSelect.onchange && secondSelect.onchange();

};
