<main class="calc" role="main" data-ng-app="calculator">
    <div class="container" data-ng-controller="general">
        <div class="row">
            <div class="col w3">
                <span>Выберите тип сайта:</span>

                <div>
                    <input id="calc_vizitka" type="radio" name="type" value="100" data-ng-model="type"/>
                    <label for="calc_vizitka">Сайт визитка</label>
                </div>
                <div>
                    <input id="calc_eshop" type="radio" name="type" value="300" data-ng-model="type"/>
                    <label for="calc_eshop">Интернет магазин</label>
                </div>
                <div>
                    <input id="calc_business" type="radio" name="type" value="200" data-ng-model="type"/>
                    <label for="calc_business">Сайт для Вашего бизнеса</label>
                </div>
            </div>
            <div class="col w3">
                <span>Опции дизайна:</span>

                <div>
                    <input id="calc_design" type="checkbox" data-ng-true-value="100" data-ng-false-value="0"
                           data-ng-model="design"/>
                    <label for="calc_design">Индивидуальный дизайн</label>
                </div>
                <div>
                    <input id="calc_responsive" type="checkbox" data-ng-true-value="50" data-ng-false-value="0"
                           data-ng-model="responsiveDesign"/>
                    <label for="calc_responsive">Отзывчивый дизайн</label>
                </div>
            </div>
            <div class="col w3">
                <span>Дополнительные модули:</span>

                <div>
                    <input id="calc_searchbox" type="checkbox" data-ng-true-value="20" data-ng-false-value="0"
                           data-ng-model="searchbox"/>
                    <label for="calc_searchbox">Поиск по сайту</label>
                </div>
                <div>
                    <input id="calc_feedbackform" type="checkbox" data-ng-true-value="20" data-ng-false-value="0"
                           data-ng-model="feedbackform"/>
                    <label for="calc_feedbackform">Форма обратной связи</label>
                </div>
            </div>
        </div>
        <div class="row">
            Цена: <span>{{ computedTotal() }}</span> euro
        </div>
    </div>
</main>