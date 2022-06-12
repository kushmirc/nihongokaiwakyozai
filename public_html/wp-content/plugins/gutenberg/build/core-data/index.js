window.wp=window.wp||{},window.wp.coreData=function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=423)}({0:function(e,t){e.exports=window.wp.element},1:function(e,t){e.exports=window.wp.i18n},162:function(e,t,n){"use strict";var r="undefined"!=typeof crypto&&crypto.getRandomValues&&crypto.getRandomValues.bind(crypto)||"undefined"!=typeof msCrypto&&"function"==typeof msCrypto.getRandomValues&&msCrypto.getRandomValues.bind(msCrypto),i=new Uint8Array(16);function o(){if(!r)throw new Error("crypto.getRandomValues() not supported. See https://github.com/uuidjs/uuid#getrandomvalues-not-supported");return r(i)}for(var s=/^(?:[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}|00000000-0000-0000-0000-000000000000)$/i,c=function(e){return"string"==typeof e&&s.test(e)},u=[],a=0;a<256;++a)u.push((a+256).toString(16).substr(1));t.a=function(e,t,n){var r=(e=e||{}).random||(e.rng||o)();if(r[6]=15&r[6]|64,r[8]=63&r[8]|128,t){n=n||0;for(var i=0;i<16;++i)t[n+i]=r[i];return t}return function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,n=(u[e[t+0]]+u[e[t+1]]+u[e[t+2]]+u[e[t+3]]+"-"+u[e[t+4]]+u[e[t+5]]+"-"+u[e[t+6]]+u[e[t+7]]+"-"+u[e[t+8]]+u[e[t+9]]+"-"+u[e[t+10]]+u[e[t+11]]+u[e[t+12]]+u[e[t+13]]+u[e[t+14]]+u[e[t+15]]).toLowerCase();if(!c(n))throw TypeError("Stringified UUID is invalid");return n}(r)}},18:function(e,t){e.exports=window.wp.url},2:function(e,t){e.exports=window.lodash},29:function(e,t,n){"use strict";var r,i;function o(e){return[e]}function s(){var e={clear:function(){e.head=null}};return e}function c(e,t,n){var r;if(e.length!==t.length)return!1;for(r=n;r<e.length;r++)if(e[r]!==t[r])return!1;return!0}r={},i="undefined"!=typeof WeakMap,t.a=function(e,t){var n,u;function a(){n=i?new WeakMap:s()}function d(){var n,r,i,o,s,a=arguments.length;for(o=new Array(a),i=0;i<a;i++)o[i]=arguments[i];for(s=t.apply(null,o),(n=u(s)).isUniqueByDependants||(n.lastDependants&&!c(s,n.lastDependants,0)&&n.clear(),n.lastDependants=s),r=n.head;r;){if(c(r.args,o,1))return r!==n.head&&(r.prev.next=r.next,r.next&&(r.next.prev=r.prev),r.next=n.head,r.prev=null,n.head.prev=r,n.head=r),r.val;r=r.next}return r={val:e.apply(null,o)},o[0]=null,r.args=o,n.head&&(n.head.prev=r,r.next=n.head),n.head=r,r.val}return t||(t=o),u=i?function(e){var t,i,o,c,u,a=n,d=!0;for(t=0;t<e.length;t++){if(!(u=i=e[t])||"object"!=typeof u){d=!1;break}a.has(i)?a=a.get(i):(o=new WeakMap,a.set(i,o),a=o)}return a.has(r)||((c=s()).isUniqueByDependants=d,a.set(r,c)),a.get(r)}:function(){return n},d.getDependants=t,d.clear=a,a(),d}},30:function(e,t){e.exports=window.wp.apiFetch},34:function(e,t){e.exports=window.wp.dataControls},4:function(e,t){e.exports=window.wp.data},423:function(e,t,n){"use strict";n.r(t),n.d(t,"store",(function(){return Lt})),n.d(t,"EntityProvider",(function(){return jt})),n.d(t,"useEntityId",(function(){return wt})),n.d(t,"useEntityProp",(function(){return Tt})),n.d(t,"useEntityBlockEditor",(function(){return kt})),n.d(t,"__experimentalFetchLinkSuggestions",(function(){return St})),n.d(t,"__experimentalFetchRemoteUrlData",(function(){return At}));var r={};n.r(r),n.d(r,"__unstableAcquireStoreLock",(function(){return _})),n.d(r,"__unstableEnqueueLockRequest",(function(){return g})),n.d(r,"__unstableReleaseStoreLock",(function(){return v})),n.d(r,"__unstableProcessPendingLockRequests",(function(){return O}));var i={};n.r(i),n.d(i,"receiveUserQuery",(function(){return S})),n.d(i,"receiveCurrentUser",(function(){return A})),n.d(i,"addEntities",(function(){return U})),n.d(i,"receiveEntityRecords",(function(){return C})),n.d(i,"receiveCurrentTheme",(function(){return x})),n.d(i,"receiveThemeSupports",(function(){return P})),n.d(i,"receiveEmbedPreview",(function(){return L})),n.d(i,"deleteEntityRecord",(function(){return D})),n.d(i,"editEntityRecord",(function(){return M})),n.d(i,"undo",(function(){return N})),n.d(i,"redo",(function(){return V})),n.d(i,"__unstableCreateUndoLevel",(function(){return q})),n.d(i,"saveEntityRecord",(function(){return F})),n.d(i,"__experimentalBatch",(function(){return Q})),n.d(i,"saveEditedEntityRecord",(function(){return G})),n.d(i,"__experimentalSaveSpecifiedEntityEdits",(function(){return Y})),n.d(i,"receiveUploadPermissions",(function(){return B})),n.d(i,"receiveUserPermission",(function(){return $})),n.d(i,"receiveAutosaves",(function(){return H}));var o={};n.r(o),n.d(o,"isRequestingEmbedPreview",(function(){return _e})),n.d(o,"getAuthors",(function(){return ge})),n.d(o,"__unstableGetAuthor",(function(){return ve})),n.d(o,"getCurrentUser",(function(){return Oe})),n.d(o,"getUserQueryResults",(function(){return Re})),n.d(o,"getEntitiesByKind",(function(){return je})),n.d(o,"getEntity",(function(){return we})),n.d(o,"getEntityRecord",(function(){return Te})),n.d(o,"__experimentalGetEntityRecordNoResolver",(function(){return ke})),n.d(o,"getRawEntityRecord",(function(){return Ie})),n.d(o,"hasEntityRecords",(function(){return Se})),n.d(o,"getEntityRecords",(function(){return Ae})),n.d(o,"__experimentalGetDirtyEntityRecords",(function(){return Ue})),n.d(o,"getEntityRecordEdits",(function(){return Ce})),n.d(o,"getEntityRecordNonTransientEdits",(function(){return xe})),n.d(o,"hasEditsForEntityRecord",(function(){return Pe})),n.d(o,"getEditedEntityRecord",(function(){return Le})),n.d(o,"isAutosavingEntityRecord",(function(){return De})),n.d(o,"isSavingEntityRecord",(function(){return Me})),n.d(o,"isDeletingEntityRecord",(function(){return Ne})),n.d(o,"getLastEntitySaveError",(function(){return Ve})),n.d(o,"getLastEntityDeleteError",(function(){return qe})),n.d(o,"getUndoEdit",(function(){return Qe})),n.d(o,"getRedoEdit",(function(){return Ge})),n.d(o,"hasUndo",(function(){return Ye})),n.d(o,"hasRedo",(function(){return Be})),n.d(o,"getCurrentTheme",(function(){return $e})),n.d(o,"getThemeSupports",(function(){return He})),n.d(o,"getEmbedPreview",(function(){return Ke})),n.d(o,"isPreviewEmbedFallback",(function(){return We})),n.d(o,"canUser",(function(){return ze})),n.d(o,"getAutosaves",(function(){return Xe})),n.d(o,"getAutosave",(function(){return Je})),n.d(o,"hasFetchedAutosaves",(function(){return Ze})),n.d(o,"getReferenceByDistinctEdits",(function(){return et})),n.d(o,"__experimentalGetTemplateForLink",(function(){return tt}));var s={};n.r(s),n.d(s,"getAuthors",(function(){return rt})),n.d(s,"__unstableGetAuthor",(function(){return it})),n.d(s,"getCurrentUser",(function(){return ot})),n.d(s,"getEntityRecord",(function(){return st})),n.d(s,"getRawEntityRecord",(function(){return ct})),n.d(s,"getEditedEntityRecord",(function(){return ut})),n.d(s,"getEntityRecords",(function(){return at})),n.d(s,"getCurrentTheme",(function(){return dt})),n.d(s,"getThemeSupports",(function(){return lt})),n.d(s,"getEmbedPreview",(function(){return ft})),n.d(s,"canUser",(function(){return pt})),n.d(s,"getAutosaves",(function(){return yt})),n.d(s,"getAutosave",(function(){return Et})),n.d(s,"__experimentalGetTemplateForLink",(function(){return bt}));var c={};n.r(c),n.d(c,"__unstableGetPendingLockRequests",(function(){return mt})),n.d(c,"__unstableIsLockAvailable",(function(){return ht}));var u=n(4),a=n(34),d=n(2),l=n(50),f=n.n(l),p=e=>t=>(n,r)=>void 0===n||e(r)?t(n,r):n,y=e=>t=>(n,r)=>t(n,e(r)),E=n(1),b=n(162),m=n(18);function h(e,t){return{type:"RECEIVE_ITEMS",items:Object(d.castArray)(e),persistedEdits:t}}function*_(e,t,{exclusive:n}){const r=yield*g(e,t,{exclusive:n});return yield*O(),yield Object(a.__unstableAwaitPromise)(r)}function*g(e,t,{exclusive:n}){let r;const i=new Promise(e=>{r=e});return yield{type:"ENQUEUE_LOCK_REQUEST",request:{store:e,path:t,exclusive:n,notifyAcquired:r}},i}function*v(e){yield{type:"RELEASE_LOCK",lock:e},yield*O()}function*O(){yield{type:"PROCESS_PENDING_LOCK_REQUESTS"};const e=yield u.controls.select("core","__unstableGetPendingLockRequests");for(const t of e){const{store:e,path:n,exclusive:r,notifyAcquired:i}=t;if(yield u.controls.select("core","__unstableIsLockAvailable",e,n,{exclusive:r})){const o={store:e,path:n,exclusive:r};yield{type:"GRANT_LOCK_REQUEST",lock:o,request:t},i(o)}}}var R=n(30),j=n.n(R);async function w(e){const t=await j()({path:"/v1/batch",method:"POST",data:{validation:"require-all-validate",requests:e.map(e=>({path:e.path,body:e.data,method:e.method,headers:e.headers}))}});return t.failed?t.responses.map(e=>({error:null==e?void 0:e.body})):t.responses.map(e=>{const t={};return e.status>=200&&e.status<300?t.output=e.body:t.error=e.body,t})}function T(e=w){let t=0,n=[];const r=new k;return{add(e){const i=++t;r.add(i);const o=e=>new Promise((t,o)=>{n.push({input:e,resolve:t,reject:o}),r.delete(i)});return Object(d.isFunction)(e)?Promise.resolve(e(o)).finally(()=>{r.delete(i)}):o(e)},async run(){let t;r.size&&await new Promise(e=>{const t=r.subscribe(()=>{r.size||(t(),e())})});try{if(t=await e(n.map(({input:e})=>e)),t.length!==n.length)throw new Error("run: Array returned by processor must be same size as input array.")}catch(e){for(const{reject:t}of n)t(e);throw e}let i=!0;for(const[e,{resolve:r,reject:s}]of Object(d.zip)(t,n)){var o;null!=e&&e.error?(s(e.error),i=!1):r(null!==(o=null==e?void 0:e.output)&&void 0!==o?o:e)}return n=[],i}}}class k{constructor(...e){this.set=new Set(...e),this.subscribers=new Set}get size(){return this.set.size}add(...e){return this.set.add(...e),this.subscribers.forEach(e=>e()),this}delete(...e){const t=this.set.delete(...e);return this.subscribers.forEach(e=>e()),t}subscribe(e){return this.subscribers.add(e),()=>{this.subscribers.delete(e)}}}var I={async REGULAR_FETCH({url:e}){const{data:t}=await window.fetch(e).then(e=>e.json());return t},GET_DISPATCH:Object(u.createRegistryControl)(({dispatch:e})=>()=>e)};function S(e,t){return{type:"RECEIVE_USER_QUERY",users:Object(d.castArray)(t),queryID:e}}function A(e){return{type:"RECEIVE_CURRENT_USER",currentUser:e}}function U(e){return{type:"ADD_ENTITIES",entities:e}}function C(e,t,n,r,i=!1,o){let s;return"postType"===e&&(n=Object(d.castArray)(n).map(e=>"auto-draft"===e.status?{...e,title:""}:e)),s=r?function(e,t={},n){return{...h(e,n),query:t}}(n,r,o):h(n,o),{...s,kind:e,name:t,invalidateCache:i}}function x(e){return{type:"RECEIVE_CURRENT_THEME",currentTheme:e}}function P(e){return{type:"RECEIVE_THEME_SUPPORTS",themeSupports:e}}function L(e,t){return{type:"RECEIVE_EMBED_PREVIEW",url:e,preview:t}}function*D(e,t,n,r,{__unstableFetch:i=null}={}){const o=yield Z(e),s=Object(d.find)(o,{kind:e,name:t});let c,u=!1;if(!s)return;const l=yield*_("core",["entities","data",e,t,n],{exclusive:!0});try{yield{type:"DELETE_ENTITY_RECORD_START",kind:e,name:t,recordId:n};try{let o=`${s.baseURL}/${n}`;r&&(o=Object(m.addQueryArgs)(o,r));const c={path:o,method:"DELETE"};u=i?yield Object(a.__unstableAwaitPromise)(i(c)):yield Object(a.apiFetch)(c),yield function(e,t,n,r=!1){return{type:"REMOVE_ITEMS",itemIds:Object(d.castArray)(n),kind:e,name:t,invalidateCache:r}}(e,t,n,!0)}catch(e){c=e}return yield{type:"DELETE_ENTITY_RECORD_FINISH",kind:e,name:t,recordId:n,error:c},u}finally{yield*v(l)}}function*M(e,t,n,r,i={}){const o=yield u.controls.select("core","getEntity",e,t);if(!o)throw new Error(`The entity being edited (${e}, ${t}) does not have a loaded config.`);const{transientEdits:s={},mergedEdits:c={}}=o,a=yield u.controls.select("core","getRawEntityRecord",e,t,n),l=yield u.controls.select("core","getEditedEntityRecord",e,t,n),f={kind:e,name:t,recordId:n,edits:Object.keys(r).reduce((e,t)=>{const n=a[t],i=l[t],o=c[t]?{...i,...r[t]}:r[t];return e[t]=Object(d.isEqual)(n,o)?void 0:o,e},{}),transientEdits:s};return{type:"EDIT_ENTITY_RECORD",...f,meta:{undo:!i.undoIgnore&&{...f,edits:Object.keys(r).reduce((e,t)=>(e[t]=l[t],e),{})}}}}function*N(){const e=yield u.controls.select("core","getUndoEdit");e&&(yield{type:"EDIT_ENTITY_RECORD",...e,meta:{isUndo:!0}})}function*V(){const e=yield u.controls.select("core","getRedoEdit");e&&(yield{type:"EDIT_ENTITY_RECORD",...e,meta:{isRedo:!0}})}function q(){return{type:"CREATE_UNDO_LEVEL"}}function*F(e,t,n,{isAutosave:r=!1,__unstableFetch:i=null}={}){const o=yield Z(e),s=Object(d.find)(o,{kind:e,name:t});if(!s)return;const c=n[s.key||K],l=yield*_("core",["entities","data",e,t,c||Object(b.a)()],{exclusive:!0});try{for(const[r,i]of Object.entries(n))if("function"==typeof i){const o=i(yield u.controls.select("core","getEditedEntityRecord",e,t,c));yield M(e,t,c,{[r]:o},{undoIgnore:!0}),n[r]=o}let o,f;yield{type:"SAVE_ENTITY_RECORD_START",kind:e,name:t,recordId:c,isAutosave:r};try{const l=`${s.baseURL}${c?"/"+c:""}`,f=yield u.controls.select("core","getRawEntityRecord",e,t,c);if(r){const r=yield u.controls.select("core","getCurrentUser"),s=r?r.id:void 0,c=yield u.controls.select("core","getAutosave",f.type,f.id,s);let p={...f,...c,...n};p=Object.keys(p).reduce((e,t)=>(["title","excerpt","content"].includes(t)&&(e[t]=Object(d.get)(p[t],"raw",p[t])),e),{status:"auto-draft"===p.status?"draft":p.status});const y={path:l+"/autosaves",method:"POST",data:p};if(o=i?yield Object(a.__unstableAwaitPromise)(i(y)):yield Object(a.apiFetch)(y),f.id===o.id){let n={...f,...p,...o};n=Object.keys(n).reduce((e,t)=>(["title","excerpt","content"].includes(t)?e[t]=Object(d.get)(n[t],"raw",n[t]):e[t]="status"===t?"auto-draft"===f.status&&"draft"===n.status?n.status:f.status:Object(d.get)(f[t],"raw",f[t]),e),{}),yield C(e,t,n,void 0,!0)}else yield H(f.id,o)}else{let r=n;s.__unstablePrePersist&&(r={...r,...s.__unstablePrePersist(f,r)});const u={path:l,method:c?"PUT":"POST",data:r};o=i?yield Object(a.__unstableAwaitPromise)(i(u)):yield Object(a.apiFetch)(u),yield C(e,t,o,void 0,!0,r)}}catch(e){f=e}return yield{type:"SAVE_ENTITY_RECORD_FINISH",kind:e,name:t,recordId:c,error:f,isAutosave:r},o}finally{yield*v(l)}}function*Q(e){const t=T(),n=yield{type:"GET_DISPATCH"},r={saveEntityRecord:(e,r,i,o)=>t.add(t=>n("core").saveEntityRecord(e,r,i,{...o,__unstableFetch:t})),saveEditedEntityRecord:(e,r,i,o)=>t.add(t=>n("core").saveEditedEntityRecord(e,r,i,{...o,__unstableFetch:t})),deleteEntityRecord:(e,r,i,o,s)=>t.add(t=>n("core").deleteEntityRecord(e,r,i,o,{...s,__unstableFetch:t}))},i=e.map(e=>e(r)),[,...o]=yield Object(a.__unstableAwaitPromise)(Promise.all([t.run(),...i]));return o}function*G(e,t,n,r){if(!(yield u.controls.select("core","hasEditsForEntityRecord",e,t,n)))return;const i={id:n,...yield u.controls.select("core","getEntityRecordNonTransientEdits",e,t,n)};return yield*F(e,t,i,r)}function*Y(e,t,n,r,i){if(!(yield u.controls.select("core","hasEditsForEntityRecord",e,t,n)))return;const o=yield u.controls.select("core","getEntityRecordNonTransientEdits",e,t,n),s={};for(const e in o)r.some(t=>t===e)&&(s[e]=o[e]);return yield*F(e,t,s,i)}function B(e){return{type:"RECEIVE_USER_PERMISSION",key:"create/media",isAllowed:e}}function $(e,t){return{type:"RECEIVE_USER_PERMISSION",key:e,isAllowed:t}}function H(e,t){return{type:"RECEIVE_AUTOSAVES",postId:e,autosaves:Object(d.castArray)(t)}}const K="id",W=[{label:Object(E.__)("Base"),name:"__unstableBase",kind:"root",baseURL:""},{label:Object(E.__)("Site"),name:"site",kind:"root",baseURL:"/wp/v2/settings",getTitle:e=>Object(d.get)(e,["title"],Object(E.__)("Site Title"))},{label:Object(E.__)("Post Type"),name:"postType",kind:"root",key:"slug",baseURL:"/wp/v2/types",baseURLParams:{context:"edit"}},{name:"media",kind:"root",baseURL:"/wp/v2/media",baseURLParams:{context:"edit"},plural:"mediaItems",label:Object(E.__)("Media")},{name:"taxonomy",kind:"root",key:"slug",baseURL:"/wp/v2/taxonomies",baseURLParams:{context:"edit"},plural:"taxonomies",label:Object(E.__)("Taxonomy")},{name:"sidebar",kind:"root",baseURL:"/wp/v2/sidebars",plural:"sidebars",transientEdits:{blocks:!0},label:Object(E.__)("Widget areas")},{name:"widget",kind:"root",baseURL:"/wp/v2/widgets",baseURLParams:{context:"edit"},plural:"widgets",transientEdits:{blocks:!0},label:Object(E.__)("Widgets")},{name:"widgetType",kind:"root",baseURL:"/wp/v2/widget-types",baseURLParams:{context:"edit"},plural:"widgetTypes",label:Object(E.__)("Widget types")},{label:Object(E.__)("User"),name:"user",kind:"root",baseURL:"/wp/v2/users",baseURLParams:{context:"edit"},plural:"users"},{name:"comment",kind:"root",baseURL:"/wp/v2/comments",baseURLParams:{context:"edit"},plural:"comments",label:Object(E.__)("Comment")},{name:"menu",kind:"root",baseURL:"/__experimental/menus",baseURLParams:{context:"edit"},plural:"menus",label:Object(E.__)("Menu")},{name:"menuItem",kind:"root",baseURL:"/__experimental/menu-items",baseURLParams:{context:"edit"},plural:"menuItems",label:Object(E.__)("Menu Item")},{name:"menuLocation",kind:"root",baseURL:"/__experimental/menu-locations",baseURLParams:{context:"edit"},plural:"menuLocations",label:Object(E.__)("Menu Location"),key:"name"}],z=[{name:"postType",loadEntities:function*(){const e=yield Object(a.apiFetch)({path:"/wp/v2/types?context=edit"});return Object(d.map)(e,(e,t)=>{const n=["wp_template","wp_template_part"].includes(t);return{kind:"postType",baseURL:"/wp/v2/"+e.rest_base,baseURLParams:{context:"edit"},name:t,label:e.labels.singular_name,transientEdits:{blocks:!0,selection:!0},mergedEdits:{meta:!0},getTitle:e=>{var t;return(null==e||null===(t=e.title)||void 0===t?void 0:t.rendered)||(null==e?void 0:e.title)||(n?Object(d.startCase)(e.slug):String(e.id))},__unstablePrePersist:n?void 0:X}})}},{name:"taxonomy",loadEntities:function*(){const e=yield Object(a.apiFetch)({path:"/wp/v2/taxonomies?context=edit"});return Object(d.map)(e,(e,t)=>({kind:"taxonomy",baseURL:"/wp/v2/"+e.rest_base,baseURLParams:{context:"edit"},name:t,label:e.labels.singular_name}))}}],X=(e,t)=>{const n={};return"auto-draft"===(null==e?void 0:e.status)&&(t.status||n.status||(n.status="draft"),t.title&&"Auto Draft"!==t.title||n.title||null!=e&&e.title&&"Auto Draft"!==(null==e?void 0:e.title)||(n.title="")),n},J=(e,t,n="get",r=!1)=>{const i=Object(d.find)(W,{kind:e,name:t}),o="root"===e?"":Object(d.upperFirst)(Object(d.camelCase)(e)),s=Object(d.upperFirst)(Object(d.camelCase)(t))+(r?"s":"");return`${n}${o}${r&&i.plural?Object(d.upperFirst)(Object(d.camelCase)(i.plural)):s}`};function*Z(e){let t=yield u.controls.select("core","getEntitiesByKind",e);if(t&&0!==t.length)return t;const n=Object(d.find)(z,{name:e});return n?(t=yield n.loadEntities(),yield U(t),t):[]}var ee=function(e){return"string"==typeof e?e.split(","):Array.isArray(e)?e:null},te=function(e){const t=new WeakMap;return e=>{let n;return t.has(e)?n=t.get(e):(n=function(e){const t={stableKey:"",page:1,perPage:10,fields:null,include:null},n=Object.keys(e).sort();for(let r=0;r<n.length;r++){const i=n[r];let o=e[i];switch(i){case"page":t[i]=Number(o);break;case"per_page":t.perPage=Number(o);break;case"include":t.include=ee(o).map(Number);break;default:"_fields"===i&&(t.fields=ee(o),o=t.fields.join()),t.stableKey+=(t.stableKey?"&":"")+Object(m.addQueryArgs)("",{[i]:o}).slice(1)}}return t}(e),Object(d.isObjectLike)(e)&&t.set(e,n)),n}}();const ne=Object(d.flowRight)([p(e=>"query"in e),y(e=>e.query?{...e,...te(e.query)}:e),(re="stableKey",e=>(t={},n)=>{const r=n[re];if(void 0===r)return t;const i=e(t[r],n);return i===t[r]?t:{...t,[r]:i}})])((e=null,t)=>{const{type:n,page:r,perPage:i,key:o=K}=t;return"RECEIVE_ITEMS"!==n?e:function(e,t,n,r){if(1===n&&-1===r)return t;const i=(n-1)*r,o=Math.max(e.length,i+t.length),s=new Array(o);for(let n=0;n<o;n++){const r=n>=i&&n<i+t.length;s[n]=r?t[n-i]:e[n]}return s}(e||[],Object(d.map)(t.items,o),r,i)});var re,ie=Object(u.combineReducers)({items:function(e={},t){switch(t.type){case"RECEIVE_ITEMS":const n=t.key||K;return{...e,...t.items.reduce((t,r)=>{const i=r[n];return t[i]=function(e,t){if(!e)return t;let n=!1;const r={};for(const i in t)Object(d.isEqual)(e[i],t[i])?r[i]=e[i]:(n=!0,r[i]=t[i]);if(!n)return e;for(const t in e)r.hasOwnProperty(t)||(r[t]=e[t]);return r}(e[i],r),t},{})};case"REMOVE_ITEMS":return Object(d.omit)(e,t.itemIds)}return e},itemIsComplete:function(e={},t){const{type:n,query:r,key:i=K}=t;if("RECEIVE_ITEMS"!==n)return e;const o=!r||!Array.isArray(te(r).fields);return{...e,...t.items.reduce((t,n)=>{const r=n[i];return t[r]=e[r]||o,t},{})}},queries:(e={},t)=>{switch(t.type){case"RECEIVE_ITEMS":return ne(e,t);case"REMOVE_ITEMS":const n={...e},r=t.itemIds.reduce((e,t)=>(e[t]=!0,e),{});return Object(d.forEach)(n,(e,t)=>{n[t]=Object(d.filter)(e,e=>!r[e])}),n;default:return e}}});function oe(e,t){const n={...e};let r=n;for(const e of t)r.children={...r.children,[e]:{locks:[],children:{},...r.children[e]}},r=r.children[e];return n}function se(e,t){let n=e;for(const e of t){const t=n.children[e];if(!t)return null;n=t}return n}function ce({exclusive:e},t){return!(!e||!t.length)||!(e||!t.filter(e=>e.exclusive).length)}const ue={requests:[],tree:{locks:[],children:{}}};function ae(e){return Object(d.flowRight)([p(t=>t.name&&t.kind&&t.name===e.name&&t.kind===e.kind),y(t=>({...t,key:e.key||K}))])(Object(u.combineReducers)({queriedData:ie,edits:(e={},t)=>{switch(t.type){case"RECEIVE_ITEMS":const n={...e};for(const e of t.items){const r=e[t.key],i=n[r];if(!i)continue;const o=Object.keys(i).reduce((n,r)=>(Object(d.isEqual)(i[r],Object(d.get)(e[r],"raw",e[r]))||t.persistedEdits&&Object(d.isEqual)(i[r],t.persistedEdits[r])||(n[r]=i[r]),n),{});Object.keys(o).length?n[r]=o:delete n[r]}return n;case"EDIT_ENTITY_RECORD":const r={...e[t.recordId],...t.edits};return Object.keys(r).forEach(e=>{void 0===r[e]&&delete r[e]}),{...e,[t.recordId]:r}}return e},saving:(e={},t)=>{switch(t.type){case"SAVE_ENTITY_RECORD_START":case"SAVE_ENTITY_RECORD_FINISH":return{...e,[t.recordId]:{pending:"SAVE_ENTITY_RECORD_START"===t.type,error:t.error,isAutosave:t.isAutosave}}}return e},deleting:(e={},t)=>{switch(t.type){case"DELETE_ENTITY_RECORD_START":case"DELETE_ENTITY_RECORD_FINISH":return{...e,[t.recordId]:{pending:"DELETE_ENTITY_RECORD_START"===t.type,error:t.error}}}return e}}))}const de=[];let le;de.offset=0;var fe=Object(u.combineReducers)({terms:function(e={},t){switch(t.type){case"RECEIVE_TERMS":return{...e,[t.taxonomy]:t.terms}}return e},users:function(e={byId:{},queries:{}},t){switch(t.type){case"RECEIVE_USER_QUERY":return{byId:{...e.byId,...Object(d.keyBy)(t.users,"id")},queries:{...e.queries,[t.queryID]:Object(d.map)(t.users,e=>e.id)}}}return e},currentTheme:function(e,t){switch(t.type){case"RECEIVE_CURRENT_THEME":return t.currentTheme.stylesheet}return e},currentUser:function(e={},t){switch(t.type){case"RECEIVE_CURRENT_USER":return t.currentUser}return e},taxonomies:function(e=[],t){switch(t.type){case"RECEIVE_TAXONOMIES":return t.taxonomies}return e},themes:function(e={},t){switch(t.type){case"RECEIVE_CURRENT_THEME":return{...e,[t.currentTheme.stylesheet]:t.currentTheme}}return e},themeSupports:function(e={},t){switch(t.type){case"RECEIVE_THEME_SUPPORTS":return{...e,...t.themeSupports}}return e},entities:(e={},t)=>{const n=function(e=W,t){switch(t.type){case"ADD_ENTITIES":return[...e,...t.entities]}return e}(e.config,t);let r=e.reducer;if(!r||n!==e.config){const e=Object(d.groupBy)(n,"kind");r=Object(u.combineReducers)(Object.entries(e).reduce((e,[t,n])=>{const r=Object(u.combineReducers)(n.reduce((e,t)=>({...e,[t.name]:ae(t)}),{}));return e[t]=r,e},{}))}const i=r(e.data,t);return i===e.data&&n===e.config&&r===e.reducer?e:{reducer:r,data:i,config:n}},undo:function(e=de,t){switch(t.type){case"EDIT_ENTITY_RECORD":case"CREATE_UNDO_LEVEL":let n="CREATE_UNDO_LEVEL"===t.type;const r=!n&&(t.meta.isUndo||t.meta.isRedo);let i;if(n?t=le:r||(le=Object.keys(t.edits).some(e=>!t.transientEdits[e])?t:{...t,edits:{...le&&le.edits,...t.edits}}),r){if(i=[...e],i.offset=e.offset+(t.meta.isUndo?-1:1),!e.flattenedUndo)return i;n=!0,t=le}if(!t.meta.undo)return e;if(!n&&!Object.keys(t.edits).some(e=>!t.transientEdits[e]))return i=[...e],i.flattenedUndo={...e.flattenedUndo,...t.edits},i.offset=e.offset,i;i=i||e.slice(0,e.offset||void 0),i.offset=i.offset||0,i.pop(),n||i.push({kind:t.meta.undo.kind,name:t.meta.undo.name,recordId:t.meta.undo.recordId,edits:{...e.flattenedUndo,...t.meta.undo.edits}});const o=Object.values(t.meta.undo.edits).filter(e=>"function"!=typeof e),s=Object.values(t.edits).filter(e=>"function"!=typeof e);return f()(o,s)||i.push({kind:t.kind,name:t.name,recordId:t.recordId,edits:n?{...e.flattenedUndo,...t.edits}:t.edits}),i}return e},embedPreviews:function(e={},t){switch(t.type){case"RECEIVE_EMBED_PREVIEW":const{url:n,preview:r}=t;return{...e,[n]:r}}return e},userPermissions:function(e={},t){switch(t.type){case"RECEIVE_USER_PERMISSION":return{...e,[t.key]:t.isAllowed}}return e},autosaves:function(e={},t){switch(t.type){case"RECEIVE_AUTOSAVES":const{postId:n,autosaves:r}=t;return{...e,[n]:r}}return e},locks:function(e=ue,t){switch(t.type){case"ENQUEUE_LOCK_REQUEST":{const{request:n}=t;return{...e,requests:[n,...e.requests]}}case"GRANT_LOCK_REQUEST":{const{lock:n,request:r}=t,{store:i,path:o}=r,s=[i,...o],c=oe(e.tree,s),u=se(c,s);return u.locks=[...u.locks,n],{...e,requests:e.requests.filter(e=>e!==r),tree:c}}case"RELEASE_LOCK":{const{lock:n}=t,r=[n.store,...n.path],i=oe(e.tree,r),o=se(i,r);return o.locks=o.locks.filter(e=>e!==n),{...e,tree:i}}}return e}}),pe=n(29),ye=n(90),Ee=n.n(ye);const be=new WeakMap,me=Object(pe.a)((e,t={})=>{let n=be.get(e);if(n){const e=n.get(t);if(void 0!==e)return e}else n=new Ee.a,be.set(e,n);const r=function(e,t){const{stableKey:n,page:r,perPage:i,include:o,fields:s}=te(t);let c;if(Array.isArray(o)&&!n?c=o:e.queries[n]&&(c=e.queries[n]),!c)return null;const u=-1===i?0:(r-1)*i,a=-1===i?c.length:Math.min(u+i,c.length),l=[];for(let t=u;t<a;t++){const n=c[t];if(Array.isArray(o)&&!o.includes(n))continue;if(!e.items.hasOwnProperty(n))return null;const r=e.items[n];let i;if(Array.isArray(s)){i={};for(let e=0;e<s.length;e++){const t=s[e].split("."),n=Object(d.get)(r,t);Object(d.set)(i,t,n)}}else{if(!e.itemIsComplete[n])return null;i=r}l.push(i)}return l}(e,t);return n.set(t,r),r}),he=[],_e=Object(u.createRegistrySelector)(e=>(t,n)=>e("core/data").isResolving("core","getEmbedPreview",[n]));function ge(e,t){const n=Object(m.addQueryArgs)("/wp/v2/users/?who=authors&per_page=100",t);return Re(e,n)}function ve(e,t){return Object(d.get)(e,["users","byId",t],null)}function Oe(e){return e.currentUser}const Re=Object(pe.a)((e,t)=>{const n=e.users.queries[t];return Object(d.map)(n,t=>e.users.byId[t])},(e,t)=>[e.users.queries[t],e.users.byId]);function je(e,t){return Object(d.filter)(e.entities.config,{kind:t})}function we(e,t,n){return Object(d.find)(e.entities.config,{kind:t,name:n})}function Te(e,t,n,r,i){const o=Object(d.get)(e.entities.data,[t,n,"queriedData"]);if(!o)return;if(void 0===i){if(!o.itemIsComplete[r])return;return o.items[r]}const s=o.items[r];if(s&&i._fields){const e={},t=ee(i._fields);for(let n=0;n<t.length;n++){const r=t[n].split("."),i=Object(d.get)(s,r);Object(d.set)(e,r,i)}return e}return s}function ke(e,t,n,r){return Te(e,t,n,r)}const Ie=Object(pe.a)((e,t,n,r)=>{const i=Te(e,t,n,r);return i&&Object.keys(i).reduce((e,t)=>(e[t]=Object(d.get)(i[t],"raw",i[t]),e),{})},e=>[e.entities.data]);function Se(e,t,n,r){return Array.isArray(Ae(e,t,n,r))}function Ae(e,t,n,r){const i=Object(d.get)(e.entities.data,[t,n,"queriedData"]);return i?me(i,r):he}const Ue=Object(pe.a)(e=>{const{entities:{data:t}}=e,n=[];return Object.keys(t).forEach(r=>{Object.keys(t[r]).forEach(i=>{const o=Object.keys(t[r][i].edits).filter(t=>Pe(e,r,i,t));if(o.length){const t=we(e,r,i);o.forEach(o=>{var s;const c=Le(e,r,i,o);n.push({key:c[t.key||K],title:(null==t||null===(s=t.getTitle)||void 0===s?void 0:s.call(t,c))||"",name:i,kind:r})})}})}),n},e=>[e.entities.data]);function Ce(e,t,n,r){return Object(d.get)(e.entities.data,[t,n,"edits",r])}const xe=Object(pe.a)((e,t,n,r)=>{const{transientEdits:i}=we(e,t,n)||{},o=Ce(e,t,n,r)||{};return i?Object.keys(o).reduce((e,t)=>(i[t]||(e[t]=o[t]),e),{}):o},e=>[e.entities.config,e.entities.data]);function Pe(e,t,n,r){return Me(e,t,n,r)||Object.keys(xe(e,t,n,r)).length>0}const Le=Object(pe.a)((e,t,n,r)=>({...Ie(e,t,n,r),...Ce(e,t,n,r)}),e=>[e.entities.data]);function De(e,t,n,r){const{pending:i,isAutosave:o}=Object(d.get)(e.entities.data,[t,n,"saving",r],{});return Boolean(i&&o)}function Me(e,t,n,r){return Object(d.get)(e.entities.data,[t,n,"saving",r,"pending"],!1)}function Ne(e,t,n,r){return Object(d.get)(e.entities.data,[t,n,"deleting",r,"pending"],!1)}function Ve(e,t,n,r){return Object(d.get)(e.entities.data,[t,n,"saving",r,"error"])}function qe(e,t,n,r){return Object(d.get)(e.entities.data,[t,n,"deleting",r,"error"])}function Fe(e){return e.undo.offset}function Qe(e){return e.undo[e.undo.length-2+Fe(e)]}function Ge(e){return e.undo[e.undo.length+Fe(e)]}function Ye(e){return Boolean(Qe(e))}function Be(e){return Boolean(Ge(e))}function $e(e){return e.themes[e.currentTheme]}function He(e){return e.themeSupports}function Ke(e,t){return e.embedPreviews[t]}function We(e,t){const n=e.embedPreviews[t],r='<a href="'+t+'">'+t+"</a>";return!!n&&n.html===r}function ze(e,t,n,r){const i=Object(d.compact)([t,n,r]).join("/");return Object(d.get)(e,["userPermissions",i])}function Xe(e,t,n){return e.autosaves[n]}function Je(e,t,n,r){if(void 0===r)return;const i=e.autosaves[n];return Object(d.find)(i,{author:r})}const Ze=Object(u.createRegistrySelector)(e=>(t,n,r)=>e("core").hasFinishedResolution("getAutosaves",[n,r])),et=Object(pe.a)(()=>[],e=>[e.undo.length,e.undo.offset,e.undo.flattenedUndo]);function tt(e,t){const n=Ae(e,"postType","wp_template",{"find-template":t});return null!=n&&n.length?n[0]:null}var nt=(e,t)=>function*(...n){(yield u.controls.select("core","hasStartedResolution",t,n))||(yield*e(...n))};function*rt(e){const t=Object(m.addQueryArgs)("/wp/v2/users/?who=authors&per_page=100",e),n=yield Object(a.apiFetch)({path:t});yield S(t,n)}function*it(e){const t="/wp/v2/users?who=authors&include="+e,n=yield Object(a.apiFetch)({path:t});yield S("author",n)}function*ot(){const e=yield Object(a.apiFetch)({path:"/wp/v2/users/me"});yield A(e)}function*st(e,t,n="",r){const i=yield Z(e),o=Object(d.find)(i,{kind:e,name:t});if(!o)return;const s=yield*_("core",["entities","data",e,t,n],{exclusive:!1});try{void 0!==r&&r._fields&&(r={...r,_fields:Object(d.uniq)([...ee(r._fields)||[],o.key||K]).join()});const i=Object(m.addQueryArgs)(o.baseURL+"/"+n,{...o.baseURLParams,...r});if(void 0!==r&&(r={...r,include:[n]},yield u.controls.select("core","hasEntityRecords",e,t,r)))return;const c=yield Object(a.apiFetch)({path:i});yield C(e,t,c,r)}catch(e){}finally{yield*v(s)}}const ct=nt(st,"getEntityRecord"),ut=nt(ct,"getRawEntityRecord");function*at(e,t,n={}){const r=yield Z(e),i=Object(d.find)(r,{kind:e,name:t});if(!i)return;const o=yield*_("core",["entities","data",e,t],{exclusive:!1});try{var s;n._fields&&(n={...n,_fields:Object(d.uniq)([...ee(n._fields)||[],i.key||K]).join()});const r=Object(m.addQueryArgs)(i.baseURL,{...n,context:"edit"});let c=Object.values(yield Object(a.apiFetch)({path:r}));if(n._fields&&(c=c.map(e=>(n._fields.split(",").forEach(t=>{e.hasOwnProperty(t)||(e[t]=void 0)}),e))),yield C(e,t,c,n),null===(s=n)||void 0===s||!s._fields){const n=i.key||K,r=c.filter(e=>e[n]).map(r=>[e,t,r[n]]);yield{type:"START_RESOLUTIONS",selectorName:"getEntityRecord",args:r},yield{type:"FINISH_RESOLUTIONS",selectorName:"getEntityRecord",args:r}}}finally{yield*v(o)}}function*dt(){const e=yield Object(a.apiFetch)({path:"/wp/v2/themes?status=active"});yield x(e[0])}function*lt(){const e=yield Object(a.apiFetch)({path:"/wp/v2/themes?status=active"});yield P(e[0].theme_supports)}function*ft(e){try{const t=yield Object(a.apiFetch)({path:Object(m.addQueryArgs)("/oembed/1.0/proxy",{url:e})});yield L(e,t)}catch(t){yield L(e,!1)}}function*pt(e,t,n){const r={create:"POST",read:"GET",update:"PUT",delete:"DELETE"}[e];if(!r)throw new Error(`'${e}' is not a valid action.`);const i=n?`/wp/v2/${t}/${n}`:"/wp/v2/"+t;let o,s;try{o=yield Object(a.apiFetch)({path:i,method:n?"GET":"OPTIONS",parse:!1})}catch(e){return}s=Object(d.hasIn)(o,["headers","get"])?o.headers.get("allow"):Object(d.get)(o,["headers","Allow"],"");const c=Object(d.compact)([e,t,n]).join("/"),u=Object(d.includes)(s,r);yield $(c,u)}function*yt(e,t){const{rest_base:n}=yield u.controls.resolveSelect("core","getPostType",e),r=yield Object(a.apiFetch)({path:`/wp/v2/${n}/${t}/autosaves?context=edit`});r&&r.length&&(yield H(t,r))}function*Et(e,t){yield u.controls.resolveSelect("core","getAutosaves",e,t)}function*bt(e){let t;try{t=yield(n=Object(m.addQueryArgs)(e,{"_wp-find-template":!0}),{type:"REGULAR_FETCH",url:n})}catch(e){}var n;if(!t)return;yield st("postType","wp_template",t.id);const r=yield u.controls.select("core","getEntityRecord","postType","wp_template",t.id);r&&(yield C("postType","wp_template",[r],{"find-template":e}))}function mt(e){return e.locks.requests}function ht(e,t,n,{exclusive:r}){const i=[t,...n],o=e.locks.tree;for(const e of function*(e,t){let n=e;yield n;for(const e of t){const t=n.children[e];if(!t)break;yield t,n=t}}(o,i))if(ce({exclusive:r},e.locks))return!1;const s=se(o,i);if(!s)return!0;for(const e of function*(e){const t=Object.values(e.children);for(;t.length;){const e=t.pop();yield e,t.push(...Object.values(e.children))}}(s))if(ce({exclusive:r},e.locks))return!1;return!0}at.shouldInvalidate=(e,t,n)=>("RECEIVE_ITEMS"===e.type||"REMOVE_ITEMS"===e.type)&&e.invalidateCache&&t===e.kind&&n===e.name,bt.shouldInvalidate=e=>("RECEIVE_ITEMS"===e.type||"REMOVE_ITEMS"===e.type)&&e.invalidateCache&&"postType"===e.kind&&"wp_template"===e.name;var _t=n(0),gt=n(8);const vt=[],Ot={...W.reduce((e,t)=>(e[t.kind]||(e[t.kind]={}),e[t.kind][t.name]={context:Object(_t.createContext)()},e),{}),...z.reduce((e,t)=>(e[t.name]={},e),{})},Rt=(e,t)=>{if(!Ot[e])throw new Error(`Missing entity config for kind: ${e}.`);return Ot[e][t]||(Ot[e][t]={context:Object(_t.createContext)()}),Ot[e][t]};function jt({kind:e,type:t,id:n,children:r}){const i=Rt(e,t).context.Provider;return Object(_t.createElement)(i,{value:n},r)}function wt(e,t){return Object(_t.useContext)(Rt(e,t).context)}function Tt(e,t,n,r){const i=wt(e,t),o=null!=r?r:i,{value:s,fullValue:c}=Object(u.useSelect)(r=>{const{getEntityRecord:i,getEditedEntityRecord:s}=r("core"),c=i(e,t,o),u=s(e,t,o);return c&&u?{value:u[n],fullValue:c[n]}:{}},[e,t,o,n]),{editEntityRecord:a}=Object(u.useDispatch)("core");return[s,Object(_t.useCallback)(r=>{a(e,t,o,{[n]:r})},[e,t,o,n]),c]}function kt(e,t,{id:n}={}){const r=wt(e,t),i=null!=n?n:r,{content:o,blocks:s}=Object(u.useSelect)(n=>{const{getEditedEntityRecord:r}=n("core"),o=r(e,t,i);return{blocks:o.blocks,content:o.content}},[e,t,i]),{__unstableCreateUndoLevel:c,editEntityRecord:a}=Object(u.useDispatch)("core");Object(_t.useEffect)(()=>{if(o&&"function"!=typeof o&&!s){const n=Object(gt.parse)(o);a(e,t,i,{blocks:n},{undoIgnore:!0})}},[o]);const d=Object(_t.useCallback)((n,r)=>{const{selection:o}=r,u={blocks:n,selection:o};if(s===u.blocks)return c(e,t,i);u.content=({blocks:e=[]})=>Object(gt.__unstableSerializeAndClean)(e),a(e,t,i,u)},[e,t,i,s]),l=Object(_t.useCallback)((n,r)=>{const{selection:o}=r;a(e,t,i,{blocks:n,selection:o})},[e,t,i]);return[null!=s?s:vt,l,d]}var It=n(44),St=async(e,t={},n={})=>{const{isInitialSuggestions:r=!1,type:i,subtype:o,page:s,perPage:c=(r?3:20)}=t,{disablePostFormats:u=!1}=n,a=[];return i&&"post"!==i||a.push(j()({path:Object(m.addQueryArgs)("/wp/v2/search",{search:e,page:s,per_page:c,type:"post",subtype:o})}).then(e=>e.map(e=>({...e,meta:{kind:"post-type",subtype:o}}))).catch(()=>[])),i&&"term"!==i||a.push(j()({path:Object(m.addQueryArgs)("/wp/v2/search",{search:e,page:s,per_page:c,type:"term",subtype:o})}).then(e=>e.map(e=>({...e,meta:{kind:"taxonomy",subtype:o}}))).catch(()=>[])),u||i&&"post-format"!==i||a.push(j()({path:Object(m.addQueryArgs)("/wp/v2/search",{search:e,page:s,per_page:c,type:"post-format",subtype:o})}).catch(()=>[])),Promise.all(a).then(e=>e.reduce((e,t)=>e.concat(t),[]).filter(e=>!!e.id).slice(0,c).map(e=>{var t;return{id:e.id,url:e.url,title:Object(It.decodeEntities)(e.title||"")||Object(E.__)("(no title)"),type:e.subtype||e.type,kind:null==e||null===(t=e.meta)||void 0===t?void 0:t.kind}}))},At=async e=>{const t={url:Object(m.prependHTTP)(e)};return j()({path:Object(m.addQueryArgs)("/__experimental/url-details",t)})};const Ut=W.reduce((e,t)=>{const{kind:n,name:r}=t;return e[J(n,r)]=(e,t)=>Te(e,n,r,t),e[J(n,r,"get",!0)]=(e,...t)=>Ae(e,n,r,...t),e},{}),Ct=W.reduce((e,t)=>{const{kind:n,name:r}=t;e[J(n,r)]=e=>st(n,r,e);const i=J(n,r,"get",!0);return e[i]=(...e)=>at(n,r,...e),e[i].shouldInvalidate=(e,...t)=>at.shouldInvalidate(e,n,r,...t),e},{}),xt=W.reduce((e,t)=>{const{kind:n,name:r}=t;return e[J(n,r,"save")]=e=>F(n,r,e),e[J(n,r,"delete")]=(e,t)=>D(n,r,e,t),e},{}),Pt={reducer:fe,controls:{...I,...a.controls},actions:{...i,...xt,...r},selectors:{...o,...Ut,...c},resolvers:{...s,...Ct}},Lt=Object(u.createReduxStore)("core",Pt);Object(u.register)(Lt)},44:function(e,t){e.exports=window.wp.htmlEntities},50:function(e,t){e.exports=window.wp.isShallowEqual},8:function(e,t){e.exports=window.wp.blocks},90:function(e,t,n){"use strict";function r(e){return(r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function i(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function o(e,t){var n=e._map,r=e._arrayTreeMap,i=e._objectTreeMap;if(n.has(t))return n.get(t);for(var o=Object.keys(t).sort(),s=Array.isArray(t)?r:i,c=0;c<o.length;c++){var u=o[c];if(void 0===(s=s.get(u)))return;var a=t[u];if(void 0===(s=s.get(a)))return}var d=s.get("_ekm_value");return d?(n.delete(d[0]),d[0]=t,s.set("_ekm_value",d),n.set(t,d),d):void 0}var s=function(){function e(t){if(function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.clear(),t instanceof e){var n=[];t.forEach((function(e,t){n.push([t,e])})),t=n}if(null!=t)for(var r=0;r<t.length;r++)this.set(t[r][0],t[r][1])}var t,n;return t=e,(n=[{key:"set",value:function(t,n){if(null===t||"object"!==r(t))return this._map.set(t,n),this;for(var i=Object.keys(t).sort(),o=[t,n],s=Array.isArray(t)?this._arrayTreeMap:this._objectTreeMap,c=0;c<i.length;c++){var u=i[c];s.has(u)||s.set(u,new e),s=s.get(u);var a=t[u];s.has(a)||s.set(a,new e),s=s.get(a)}var d=s.get("_ekm_value");return d&&this._map.delete(d[0]),s.set("_ekm_value",o),this._map.set(t,o),this}},{key:"get",value:function(e){if(null===e||"object"!==r(e))return this._map.get(e);var t=o(this,e);return t?t[1]:void 0}},{key:"has",value:function(e){return null===e||"object"!==r(e)?this._map.has(e):void 0!==o(this,e)}},{key:"delete",value:function(e){return!!this.has(e)&&(this.set(e,void 0),!0)}},{key:"forEach",value:function(e){var t=this,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:this;this._map.forEach((function(i,o){null!==o&&"object"===r(o)&&(i=i[1]),e.call(n,i,o,t)}))}},{key:"clear",value:function(){this._map=new Map,this._arrayTreeMap=new Map,this._objectTreeMap=new Map}},{key:"size",get:function(){return this._map.size}}])&&i(t.prototype,n),e}();e.exports=s}});