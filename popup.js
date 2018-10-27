

var outUrl;
var url = document.getElementById("url");
// first get the windowid
chrome.windows.getCurrent(function(window) {
    // then get the current active tab in that window
    chrome.tabs.query({'active': true, 'windowId': chrome.windows.WINDOW_ID_CURRENT},
   function(tabs){
      url.value= tabs[0].url;
   }

);

});