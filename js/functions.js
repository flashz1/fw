/* angular code */
var app = angular.module('calculator', []);

app.controller('general', function($scope) {
    $scope.type = 0;

    $scope.design = false;
    $scope.responsiveDesign = false;
    $scope.searchbox = false;
    $scope.feedbackform = false;

    $scope.computedTotal = function () {
        var total = ($scope.design ? Number($scope.design) : 0) +
                    ($scope.responsiveDesign ? Number($scope.responsiveDesign) : 0) +
                    ($scope.searchbox ? Number($scope.searchbox) : 0) +
                    ($scope.feedbackform ? Number($scope.feedbackform) : 0) +
                    ($scope.type ? Number($scope.type) : 0);
        var perc = 1;
        return perc * total;
    }
});

/* jquery code */
$(document).ready(function(){
   $('#portfolio').portfolioSlider();
});

$.fn.portfolioSlider = function(show) {

    var slider = this,
        sliderVisibleArea = slider.find('.container'),
        sliderContainer = sliderVisibleArea.find('.row'),
        numElem = sliderContainer.find('.col').length,
        widthElem = sliderContainer.find('.col').outerWidth(true),
        sliderWidth = widthElem*numElem,
        toShow = 3,
        visibleWidth = widthElem*toShow;

    sliderContainer.width(sliderWidth+10);
    sliderVisibleArea.width(visibleWidth);

    //buttons
    $('.next').on('click',function(){
        sliderContainer.animate({
            left: -widthElem
        })

    });
    $('.back').on('click',function(){
        var positionSliderContainer = sliderContainer.position().left;
        sliderContainer.animate({
            left: positionSliderContainer == 0 ? 0 : positionSliderContainer+widthElem
        })
    });
};