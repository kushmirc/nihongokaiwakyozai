(window["aioseopjsonp"]=window["aioseopjsonp"]||[]).push([["chunk-0777c24a","chunk-3e49c691"],{"0d56":function(t,e,s){},"35dd":function(t,e,s){"use strict";s("0d56")},"6bfe":function(t,e,s){"use strict";s("ba4a")},9920:function(t,e,s){"use strict";s.r(e);var i=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-link-assistant-domains-report"},[s("base-wp-table",{key:t.tableKey,ref:"table",attrs:{columns:t.columns,rows:t.linkAssistant.domainsReport.rows,totals:t.linkAssistant.domainsReport.totals,"bulk-options":t.bulkOptions,loading:t.wpTableLoading,initialPageNumber:t.linkAssistant.domainsReport.tableFields.paginatedPage,initialSearchTerm:t.linkAssistant.domainsReport.tableFields.searchTerm},on:{"process-bulk-action":t.maybeDoBulkAction,paginate:t.processPagination,search:t.processSearch},scopedSlots:t._u([{key:"domain",fn:function(e){var i=e.row,n=e.index,o=e.editRow;return[s("div",{staticClass:"domain-name"},[s("a",{class:{active:t.isRowActive(n)},attrs:{href:"#"},on:{click:function(e){o(n),t.toggleRow(n)}}},[s("img",{staticClass:"favicon",attrs:{src:"https://www.google.com/s2/favicons?sz=32&domain="+Object.keys(i)[0]}}),s("span",[t._v(" "+t._s(Object.keys(i)[0])+" ")])])]),s("div",{staticClass:"row-actions"},[s("span",[s("a",{staticClass:"view",attrs:{href:"https://"+Object.keys(i)[0],target:"_blank"}},[s("span",[t._v(t._s(t.strings.view))])]),t._v(" | ")]),s("span",[s("a",{staticClass:"delete-all-links",attrs:{href:"#"},on:{click:function(e){return e.preventDefault(),t.maybeDoBulkAction({action:"delete",selectedRows:n})}}},[s("span",[t._v(t._s(t.strings.deleteAllLinks))])])])])]}},{key:"posts",fn:function(e){var i=e.row;return[s("svg-file"),s("span",[t._v(t._s(t.$numbers.numberFormat(t.postCount(i))))])]}},{key:"links",fn:function(e){var i=e.row;return[s("svg-link-external"),s("span",[t._v(t._s(t.$numbers.numberFormat(t.linkCount(i))))])]}},{key:"toggle-button",fn:function(e){var i=e.index,n=e.editRow;return[s("button",{staticClass:"toggle-row-button",class:{active:t.isRowActive(i)},on:{click:function(e){n(i),t.toggleRow(i)}}},[s("svg-caret")],1)]}},{key:"edit-row",fn:function(e){var i=e.row;return[s("DomainsReportInner",{key:t.innerTableKey,attrs:{domain:t.getInnerDomain(i),rows:t.getInnerDomainRows(i),activeDomain:t.activeRow},on:{updated:function(e){t.innerTableKey++}}})]}}])}),s("link-assistant-confirmation-modal",{attrs:{strings:t.modalStrings,showModal:t.showModal,selectedRows:t.selectedRows},on:{doBulkAction:t.doBulkAction,closeModal:function(e){t.showModal=!1}}})],1)},n=[],o=s("5530"),a=(s("b64b"),s("d3b7"),s("2f62")),r=s("c1a2"),l={components:{DomainsReportInner:r["default"]},beforeMount:function(){this.$route.query&&(this.$route.query.hostname&&(this.linkAssistant.domainsReport.tableFields.searchTerm=this.$route.query.hostname,this.processSearch(this.$route.query.hostname)),this.$route.query.fullReport&&(this.linkAssistant.domainsReport.tableFields.searchTerm="",this.processPagination(1)))},data:function(){return{tableKey:0,innerTableKey:0,activeRow:-1,wpTableLoading:!1,showModal:!1,selectedRows:null,action:null,bulkOptions:[{label:this.$t.__("Delete",this.$tdPro),value:"delete"}],strings:{view:this.$t.__("View",this.$tdPro),deleteAllLinks:this.$t.__("Delete All Links",this.$tdPro)},modalStrings:{areYouSureSingle:this.$t.__("Are you sure you want to delete all links for this domain?",this.$tdPro),areYouSureMultiple:this.$t.__("Are you sure you want to delete all links for these domains?",this.$tdPro),areYouSureAll:this.$t.__("Are you sure you want to delete all links for all domains?",this.$tdPro),actionCannotBeUndone:this.$t.__("This action cannot be undone.",this.$tdPro),yesSingle:this.$t.__("Yes, I want to delete this link",this.$tdPro),yesMultiple:this.$t.__("Yes, I want to delete these links",this.$tdPro),yesAll:this.$t.__("Yes, I want to delete all links",this.$tdPro),noChangedMind:this.$t.__("No, I changed my mind",this.$tdPro)}}},computed:Object(o["a"])(Object(o["a"])({},Object(a["e"])(["linkAssistant"])),{},{innerRows:function(){return this.linkAssistant.domainsReport.rows},columns:function(){return[{slug:"domain",label:this.$t.__("Domain",this.$tdPro)},{slug:"posts",label:this.$t.__("Posts",this.$tdPro),width:"90px"},{slug:"links",label:this.$t.__("Links",this.$tdPro),width:"90px"},{slug:"toggle-button",label:"",width:"60px"}]}}),methods:Object(o["a"])(Object(o["a"])(Object(o["a"])({},Object(a["b"])("linkAssistant",["domainsReportPaginate","domainsReportBulk","domainsReportSearch"])),Object(a["d"])("linkAssistant",["setPaginatedPage"])),{},{postCount:function(t){var e=Object.keys(t)[0];return t[e][0].totals.total},linkCount:function(t){var e=Object.keys(t)[0];return t[e][0].totals.totalLinks},isRowActive:function(t){return t===this.activeRow},toggleRow:function(t){this.activeRow!==t?this.activeRow=t:this.activeRow=-1},maybeDoBulkAction:function(t){var e=t.action,s=t.selectedRows;!1!==s&&e&&(this.action=e,this.selectedRows=s,this.showModal=!0)},doBulkAction:function(){var t=this;return this.showModal=!1,this.wpTableLoading=!0,this.domainsReportBulk({action:this.action,searchTerm:this.linkAssistant.domainsReport.tableFields.searchTerm,rowIndexes:this.selectedRows}).finally((function(){t.activeRow=-1,t.wpTableLoading=!1,t.tableKey++}))},processPagination:function(t){var e=this;this.setPaginatedPage({group:"domainsReport",page:t}),this.wpTableLoading=!0,this.domainsReportPaginate({page:t,searchTerm:this.linkAssistant.domainsReport.tableFields.searchTerm}).finally((function(){e.activeRow=-1,e.wpTableLoading=!1,e.tableKey++}))},processSearch:function(t){var e=this;this.wpTableLoading=!0,this.linkAssistant.domainsReport.tableFields.searchTerm=t,this.domainsReportSearch({searchTerm:t,page:1}).finally((function(){e.activeRow=-1,e.wpTableLoading=!1,e.tableKey++}))},getInnerDomain:function(t){return Object.keys(t)[0]},getInnerDomainRows:function(t){return t[this.getInnerDomain(t)]}})},d=l,c=(s("6bfe"),s("2877")),h=Object(c["a"])(d,i,n,!1,null,null,null);e["default"]=h.exports},ba4a:function(t,e,s){},c1a2:function(t,e,s){"use strict";s.r(e);var i=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"domains-report-inner"},[s("base-wp-table",{key:t.tableKey,staticClass:"link-assistant-inner-table",attrs:{columns:t.columns,rows:t.rows,totals:t.rows[0].totals,"bulk-options":t.bulkOptions,loading:t.wpTableLoading,showSearch:!1,showPagination:t.shouldShowPagination,showTableFooter:!1,initialPageNumber:t.initialPageNumber},on:{"process-bulk-action":t.maybeDoBulkAction,paginate:t.processPagination},scopedSlots:t._u([{key:"post_title",fn:function(e){var i=e.row;return[s("strong",[s("a",{staticClass:"edit-link",attrs:{href:i.context.permalink,target:"_blank"}},[t._v(t._s(i.context.postTitle))])]),s("div",{staticClass:"row-actions"},[s("span",{staticClass:"view"},[s("a",{attrs:{href:i.context.permalink,target:"_blank"}},[t._v(t._s(t.strings.viewPost))]),t._v(" | ")]),s("span",{staticClass:"edit"},[s("a",{attrs:{href:i.context.editLink,target:"_blank"}},[t._v(t._s(t.strings.editPost))])])])]}},{key:"phrases",fn:function(e){var i=e.row,n=e.index;return[s("link-assistant-editable-phrase",{attrs:{row:i,rowIndex:n,activeRow:t.activePost,domainsReport:""},on:{delete:t.deleteLink,toggleShowMorePhrases:t.toggleShowMorePhrases,saveModifiedPhrase:t.saveModifiedPhrase}})]}},{key:"publish_date",fn:function(e){var i=e.row;return[s("span",{staticClass:"date"},[t._v(t._s(t.$moment.utc(i.context.publishDate).tz(t.$moment.tz.guess()).format("MMMM D, YYYY")))])]}},{key:"delete",fn:function(e){var i=e.index;return[s("core-tooltip",{attrs:{type:"action"},scopedSlots:t._u([{key:"tooltip",fn:function(){return[t._v(" "+t._s(t.strings.delete)+" ")]},proxy:!0}],null,!0)},[s("svg-trash",{nativeOn:{click:function(e){return t.maybeDoBulkAction({action:"delete",selectedRows:[i]})}}})],1)]}}])}),s("link-assistant-confirmation-modal",{attrs:{strings:t.modalStrings,showModal:t.showModal,selectedRows:t.selectedRows},on:{doBulkAction:t.doBulkAction,closeModal:function(e){t.showModal=!1}}})],1)},n=[],o=s("5530"),a=(s("a9e3"),s("d3b7"),s("b64b"),s("18a5"),s("2f62")),r={props:{domain:{type:String,required:!0},rows:{type:Array,required:!0},activeDomain:{type:Number}},data:function(){return{tableKey:0,activePost:-1,wpTableLoading:!1,showModal:!1,action:"",selectedRows:null,bulkOptions:[{label:this.$t.__("Delete",this.$tdPro),value:"delete"}],strings:{delete:this.$t.__("Delete",this.$tdPro),viewPost:this.$t.__("View Post",this.$tdPro),editPost:this.$t.__("Edit Post",this.$tdPro)},modalStrings:{areYouSureSingle:this.$t.__("Are you sure you want to delete these links for this domain?",this.$tdPro),areYouSureMultiple:this.$t.__("Are you sure you want to delete these links for this domain?",this.$tdPro),areYouSureAll:this.$t.__("Are you sure you want to delete all links for this domain?",this.$tdPro),actionCannotBeUndone:this.$t.__("This action cannot be undone.",this.$tdPro),yesSingle:this.$t.__("Yes, I want to delete these links",this.$tdPro),yesMultiple:this.$t.__("Yes, I want to delete these links",this.$tdPro),yesAll:this.$t.__("Yes, I want to delete all links",this.$tdPro),noChangedMind:this.$t.__("No, I changed my mind",this.$tdPro)}}},computed:Object(o["a"])(Object(o["a"])({},Object(a["e"])(["linkAssistant"])),{},{columns:function(){return[{slug:"post_title",label:this.$t.__("Post Title",this.$tdPro)},{slug:"phrases",label:this.$t.__("Phrases with Links",this.$tdPro)},{slug:"publish_date",label:this.$t.__("Publish Date",this.$tdPro),width:"160px"},{slug:"delete",width:"50px"}]},shouldShowPagination:function(){return 1<this.rows[0].totals.pages},initialPageNumber:function(){if(void 0===this.linkAssistant.domainsReport.innerPagination||void 0===this.linkAssistant.domainsReport.innerPagination[this.domain])return 1;var t=this.linkAssistant.domainsReport.innerPagination[this.domain];return t||1}}),methods:Object(o["a"])(Object(o["a"])(Object(o["a"])({},Object(a["b"])("linkAssistant",["domainsReportInnerBulk","domainsReportInnerPaginate","domainsReportInnerLinkDelete","domainsReportInnerLinkUpdate"])),Object(a["d"])("linkAssistant",["setDomainsReportInnerPaginatedPage"])),{},{toggleShowMorePhrases:function(t){this.activePost!==t?this.activePost=t:this.activePost=-1},deleteLink:function(t){var e=this,s=t.postIndex,i=t.linkIndex;this.wpTableLoading=!0,this.domainsReportInnerLinkDelete({searchTerm:this.linkAssistant.domainsReport.tableFields.searchTerm,rows:this.rows,postIndex:s,linkIndex:i}).then((function(){e.tableKey++,e.$emit("updated")})).finally((function(){e.wpTableLoading=!1}))},saveModifiedPhrase:function(t){var e=this;if(this.linkAssistant.domainsReport.rows[this.activeDomain]){var s=Object.keys(this.linkAssistant.domainsReport.rows[this.activeDomain])[0];s&&this.linkAssistant.domainsReport.rows[this.activeDomain][s][t.postIndex]&&this.linkAssistant.domainsReport.rows[this.activeDomain][s][t.postIndex].links[t.phraseIndex]&&this.linkAssistant.domainsReport.rows[this.activeDomain][s][t.postIndex].links[t.phraseIndex].phrase_html!==t.phraseHtml&&(this.linkAssistant.domainsReport.rows[this.activeDomain][s][t.postIndex].links[t.phraseIndex].phrase=t.phrase,this.linkAssistant.domainsReport.rows[this.activeDomain][s][t.postIndex].links[t.phraseIndex].phrase_html=t.phraseHtml,this.linkAssistant.domainsReport.rows[this.activeDomain][s][t.postIndex].links[t.phraseIndex].anchor=t.anchor,this.wpTableLoading=!0,this.domainsReportInnerLinkUpdate({domainIndex:this.activeDomain,domain:s,link:this.linkAssistant.domainsReport.rows[this.activeDomain][s][t.postIndex].links[t.phraseIndex]}).then((function(){e.tableKey++,e.$emit("updated")})).finally((function(){e.wpTableLoading=!1})))}},maybeDoBulkAction:function(t){var e=t.action,s=t.selectedRows;e&&s.length&&(this.action=e,this.selectedRows=s,this.showModal=!0)},doBulkAction:function(){var t=this;if(this.showModal=!1,"delete"===this.action)return this.wpTableLoading=!0,this.domainsReportInnerBulk({searchTerm:this.linkAssistant.domainsReport.tableFields.searchTerm,action:this.action,domainIndex:this.activeDomain,linkIndexes:this.selectedRows}).then((function(){t.tableKey++,t.$emit("updated")})).finally((function(){t.wpTableLoading=!1}))},processPagination:function(t){var e=this;this.setDomainsReportInnerPaginatedPage({domain:this.domain,page:t}),this.wpTableLoading=!0,this.domainsReportInnerPaginate({domainIndex:this.activeDomain,domain:this.domain,page:t}).then((function(){e.$emit("updated")})).finally((function(){e.wpTableLoading=!1}))}})},l=r,d=(s("35dd"),s("2877")),c=Object(d["a"])(l,i,n,!1,null,null,null);e["default"]=c.exports}}]);