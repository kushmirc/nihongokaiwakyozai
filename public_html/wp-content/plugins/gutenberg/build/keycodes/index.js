window.wp=window.wp||{},window.wp.keycodes=function(t){var n={};function e(r){if(n[r])return n[r].exports;var o=n[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,e),o.l=!0,o.exports}return e.m=t,e.c=n,e.d=function(t,n,r){e.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:r})},e.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},e.t=function(t,n){if(1&n&&(t=e(t)),8&n)return t;if(4&n&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(e.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&n&&"string"!=typeof t)for(var o in t)e.d(r,o,function(n){return t[n]}.bind(null,o));return r},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},e.p="",e(e.s=448)}({1:function(t,n){t.exports=window.wp.i18n},2:function(t,n){t.exports=window.lodash},448:function(t,n,e){"use strict";e.r(n),e.d(n,"BACKSPACE",(function(){return i})),e.d(n,"TAB",(function(){return c})),e.d(n,"ENTER",(function(){return f})),e.d(n,"ESCAPE",(function(){return d})),e.d(n,"SPACE",(function(){return a})),e.d(n,"LEFT",(function(){return l})),e.d(n,"UP",(function(){return s})),e.d(n,"RIGHT",(function(){return p})),e.d(n,"DOWN",(function(){return b})),e.d(n,"DELETE",(function(){return O})),e.d(n,"F10",(function(){return j})),e.d(n,"ALT",(function(){return y})),e.d(n,"CTRL",(function(){return m})),e.d(n,"COMMAND",(function(){return w})),e.d(n,"SHIFT",(function(){return S})),e.d(n,"ZERO",(function(){return h})),e.d(n,"modifiers",(function(){return C})),e.d(n,"rawShortcut",(function(){return A})),e.d(n,"displayShortcutList",(function(){return E})),e.d(n,"displayShortcut",(function(){return P})),e.d(n,"shortcutAriaLabel",(function(){return _})),e.d(n,"isKeyboardEvent",(function(){return v}));var r=e(2),o=e(1);function u(t=null){if(!t){if("undefined"==typeof window)return!1;t=window}const{platform:n}=t.navigator;return-1!==n.indexOf("Mac")||Object(r.includes)(["iPad","iPhone"],n)}const i=8,c=9,f=13,d=27,a=32,l=37,s=38,p=39,b=40,O=46,j=121,y="alt",m="ctrl",w="meta",S="shift",h=48,C={primary:t=>t()?[w]:[m],primaryShift:t=>t()?[S,w]:[m,S],primaryAlt:t=>t()?[y,w]:[m,y],secondary:t=>t()?[S,y,w]:[m,S,y],access:t=>t()?[m,y]:[S,y],ctrl:()=>[m],alt:()=>[y],ctrlShift:()=>[m,S],shift:()=>[S],shiftAlt:()=>[S,y]},A=Object(r.mapValues)(C,t=>(n,e=u)=>[...t(e),n.toLowerCase()].join("+")),E=Object(r.mapValues)(C,t=>(n,e=u)=>{const o=e(),i={[y]:o?"⌥":"Alt",[m]:o?"⌃":"Ctrl",[w]:"⌘",[S]:o?"⇧":"Shift"};return[...t(e).reduce((t,n)=>{const e=Object(r.get)(i,n,n);return o?[...t,e]:[...t,e,"+"]},[]),Object(r.capitalize)(n)]}),P=Object(r.mapValues)(E,t=>(n,e=u)=>t(n,e).join("")),_=Object(r.mapValues)(C,t=>(n,e=u)=>{const i=e(),c={[S]:"Shift",[w]:i?"Command":"Control",[m]:"Control",[y]:i?"Option":"Alt",
/* translators: comma as in the character ',' */
",":Object(o.__)("Comma"),
/* translators: period as in the character '.' */
".":Object(o.__)("Period"),
/* translators: backtick as in the character '`' */
"`":Object(o.__)("Backtick")};return[...t(e),n].map(t=>Object(r.capitalize)(Object(r.get)(c,t,t))).join(i?" ":" + ")}),v=Object(r.mapValues)(C,t=>(n,e,o=u)=>{const i=t(o),c=function(t){return[y,m,w,S].filter(n=>t[n+"Key"])}(n);return!Object(r.xor)(i,c).length&&(e?n.key===e:Object(r.includes)(i,n.key.toLowerCase()))})}});