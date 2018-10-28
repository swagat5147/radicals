// Copyright 2018 The Chromium Authors. All rights reserved.
// Use of this source code is governed by a BSD-style license that can be
// found in the LICENSE file.

// 'use strict';

// let changeColor = document.getElementById('changeColor');

// chrome.storage.sync.get('color', function(data) {
//   changeColor.style.backgroundColor = data.color;
//   changeColor.setAttribute('value', data.color);
// });

// changeColor.onclick = function(element) {
//   let color = element.target.value;
//   chrome.tabs.query({active: true, currentWindow: true}, function(tabs) {
//     chrome.tabs.executeScript(
//         tabs[0].id,
//         {code: 'document.body.style.backgroundColor = "' + color + '";'});
//   });
// };
// var pathname = window.location.href;
// var url = document.getElementById("url");
// url.innerHTML = pathname;

// document.getElementById("url").innerHTML = 
// "The full URL of this page is:<br>" + window.location.href;

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