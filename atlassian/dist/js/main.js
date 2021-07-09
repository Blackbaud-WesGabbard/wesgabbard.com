(function() {
  angular.module('atlassianApp', ['ngSanitize', 'ngRoute', 'ngMaterial', 'atlassianAppControllers']);

  angular.module('atlassianAppControllers', []);

  angular.module('atlassianAppControllers').constant('APP_INFO', {
    version: '0.0.1'
  });

  angular.module('atlassianApp').run([
    '$rootScope', 'APP_INFO', function($rootScope, APP_INFO) {
      $rootScope.nonSecurePath = 'http://vateam.convio.net/site/';
      $rootScope.securePath = 'https://secure2.convio.net/vateam/site/';
      return $rootScope.apiKey = '123456789';
    }
  ]);

  angular.module('atlassianApp').factory('sessionService', [
    '$http', '$timeout', function($http, $timeout) {
      return {
        getSession: function(callback) {
          return $http({
            method: 'GET',
            url: 'sessions.json',
            headers: {
              'Content-Type': 'application/json'
            }
          }).then(function(response) {
            return response;
          });
        }
      };
    }
  ]);

  angular.module('atlassianAppControllers').controller('MainCtrl', [
    '$scope', 'sessionService', '$anchorScroll', function($scope, sessionService, $anchorScroll) {
      var tabCheck;
      $scope.tabs = [];
      tabCheck = [];
      $scope.loading = true;
      Array.prototype.inArray = function(comparer) {
        var i;
        i = 0;
        while (i < this.length) {
          if (comparer(this[i])) {
            return true;
          }
          i++;
        }
        return false;
      };
      Array.prototype.pushIfNotExist = function(element, comparer) {
        if (!this.inArray(comparer)) {
          this.push(element);
        }
      };
      sessionService.getSession().then(function(response) {
        $scope.items = response.data.Items;
        angular.forEach($scope.items, function(item) {
          var element, tabId, tabTitle;
          tabTitle = item.Track.Title;
          tabId = item.Id;
          element = {
            'title': tabTitle,
            'id': tabId
          };
          return $scope.tabs.pushIfNotExist(element, function(e) {
            return e.title === element.title;
          });
        });
        return $scope.loading = false;
      });
      $scope.showContent = function(id) {
        $scope.showItem = id;
        return $anchorScroll('tab-container');
      };
      return $scope.resetContent = function(tab) {
        var $dataRoot, id;
        $dataRoot = angular.element('md-list-item:first-child');
        id = $dataRoot.data('item-id');
        return $scope.showItem = id;
      };
    }
  ]);

}).call(this);
