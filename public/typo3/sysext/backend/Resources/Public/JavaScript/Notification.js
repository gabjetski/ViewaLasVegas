/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
define(["require","exports","./Enum/Severity","./Severity"],(function(e,i,t,a){"use strict";var n,s=function(){function e(){}return e.notice=function(i,a,n){e.showMessage(i,a,t.SeverityEnum.notice,n)},e.info=function(i,a,n){e.showMessage(i,a,t.SeverityEnum.info,n)},e.success=function(i,a,n){e.showMessage(i,a,t.SeverityEnum.ok,n)},e.warning=function(i,a,n){e.showMessage(i,a,t.SeverityEnum.warning,n)},e.error=function(i,a,n){void 0===n&&(n=0),e.showMessage(i,a,t.SeverityEnum.error,n)},e.showMessage=function(e,i,n,s){void 0===s&&(s=this.duration);var r=a.getCssClass(n),o="";switch(n){case t.SeverityEnum.notice:o="lightbulb-o";break;case t.SeverityEnum.ok:o="check";break;case t.SeverityEnum.warning:o="exclamation";break;case t.SeverityEnum.error:o="times";break;case t.SeverityEnum.info:default:o="info"}s=void 0===s?this.duration:"string"==typeof s?parseFloat(s):s,null===this.messageContainer&&(this.messageContainer=$('<div id="alert-container"></div>').appendTo("body"));var c=$('<div class="alert alert-'+r+' alert-dismissible fade" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span><span class="sr-only">Close</span></button><div class="media"><div class="media-left"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-'+o+' fa-stack-1x"></i></span></div><div class="media-body"><h4 class="alert-title"></h4><p class="alert-message text-pre-wrap"></p></div></div></div>');c.find(".alert-title").text(e),c.find(".alert-message").text(i),c.on("close.bs.alert",(function(e){e.preventDefault();var i=$(e.currentTarget);i.clearQueue().queue((function(e){i.removeClass("in"),e()})).slideUp((function(){i.remove()}))})),c.appendTo(this.messageContainer),c.delay(200).queue((function(e){c.addClass("in"),e()})),s>0&&c.delay(1e3*s).queue((function(e){c.alert("close"),e()}))},e.duration=5,e.messageContainer=null,e}();try{parent&&parent.window.TYPO3&&parent.window.TYPO3.Notification&&(n=parent.window.TYPO3.Notification),top&&top.TYPO3.Notification&&(n=top.TYPO3.Notification)}catch(e){}return n||(n=s,"undefined"!=typeof TYPO3&&(TYPO3.Notification=n)),n}));