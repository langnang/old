"use strict";System.register(["lodash"],function(a,b){function c(a){if(Array.isArray(a)){for(var b=0,c=Array(a.length);b<a.length;b++)c[b]=a[b];return c}return Array.from(a)}function d(a){var b=g.map(a,e),d=g.sortBy(b,["h"]);return d=g.chunk(d,h),d=g.map(d,function(a){return g.sortBy(a,"l")}),d=g.flattenDeep(g.zip.apply(g,c(d))),g.map(d,f)}function e(a){}function f(a){}var g,h,i,j,k,l,m,n,o,p;return a("sortColorsByHue",d),a("hexToHsl",e),a("hslToHex",f),{setters:[function(a){g=a["default"]}],execute:function(){a("PALETTE_ROWS",h=4),a("PALETTE_ROWS",h),a("PALETTE_COLUMNS",i=14),a("PALETTE_COLUMNS",i),a("DEFAULT_ANNOTATION_COLOR",j="rgba(0, 211, 255, 1)"),a("DEFAULT_ANNOTATION_COLOR",j),a("OK_COLOR",k="rgba(11, 237, 50, 1)"),a("OK_COLOR",k),a("ALERTING_COLOR",l="rgba(237, 46, 24, 1)"),a("ALERTING_COLOR",l),a("NO_DATA_COLOR",m="rgba(150, 150, 150, 1)"),a("NO_DATA_COLOR",m),a("REGION_FILL_ALPHA",n=.09),a("REGION_FILL_ALPHA",n),o=["#7EB26D","#EAB839","#6ED0E0","#EF843C","#E24D42","#1F78C1","#BA43A9","#705DA0","#508642","#CCA300","#447EBC","#C15C17","#890F02","#0A437C","#6D1F62","#584477","#B7DBAB","#F4D598","#70DBED","#F9BA8F","#F29191","#82B5D8","#E5A8E2","#AEA2E0","#629E51","#E5AC0E","#64B0C8","#E0752D","#BF1B00","#0A50A1","#962D82","#614D93","#9AC48A","#F2C96D","#65C5DB","#F9934E","#EA6460","#5195CE","#D683CE","#806EB7","#3F6833","#967302","#2F575E","#99440A","#58140C","#052B51","#511749","#3F2B5B","#E0F9D7","#FCEACA","#CFFAFF","#F9E2D2","#FCE2DE","#BADFF4","#F9D9F9","#DEDAF7"],a("sortedColors",p=d(o)),a("sortedColors",p),a("default",o)}}});
//# sourceMappingURL=colors.js.map