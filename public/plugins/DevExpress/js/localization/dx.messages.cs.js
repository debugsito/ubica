/*!
* DevExtreme (dx.messages.cs.js)
* Version: 20.1.8
* Build date: Fri Oct 09 2020
*
* Copyright (c) 2012 - 2020 Developer Express Inc. ALL RIGHTS RESERVED
* Read about DevExtreme licensing here: https://js.devexpress.com/Licensing/
*/
"use strict";

! function(root, factory) {
    if ("function" === typeof define && define.amd) {
        define(function(require) {
            factory(require("devextreme/localization"))
        })
    } else {
        if ("object" === typeof module && module.exports) {
            factory(require("devextreme/localization"))
        } else {
            factory(DevExpress.localization)
        }
    }
}(this, function(localization) {
    localization.loadMessages({
        cs: {
            Yes: "Ano",
            No: "Ne",
            Cancel: "Zru\u0161it",
            Clear: "Smazat",
            Done: "Hotovo",
            Loading: "Nahr\xe1v\xe1n\xed...",
            Select: "V\xfdb\u011br...",
            Search: "Hledat",
            Back: "Zp\u011bt",
            OK: "OK",
            "dxCollectionWidget-noDataText": "\u017d\xe1dn\xe1 data k zobrazen\xed",
            "dxDropDownEditor-selectLabel": "V\xfdb\u011br",
            "validation-required": "povinn\xe9",
            "validation-required-formatted": "{0} je povinn\xfdch",
            "validation-numeric": "Hodnota mus\xed b\xfdt \u010d\xedslo",
            "validation-numeric-formatted": "{0} mus\xed b\xfdt \u010d\xedslo",
            "validation-range": "Hodnota je mimo rozsah",
            "validation-range-formatted": "{0} je mimo rozsah",
            "validation-stringLength": "D\xe9lka textov\xe9ho \u0159etezce nen\xed spr\xe1vn\xe1",
            "validation-stringLength-formatted": "D\xe9lka textu {0} nen\xed spr\xe1vn\xe1",
            "validation-custom": "Neplatn\xe1 hodnota",
            "validation-custom-formatted": "{0} je neplatn\xfdch",
            "validation-async": "Neplatn\xe1 hodnota",
            "validation-async-formatted": "{0} je neplatn\xfdch",
            "validation-compare": "Hodnoty se neshoduj\xed",
            "validation-compare-formatted": "{0} se neshoduje",
            "validation-pattern": "Hodnota neodpov\xedd\xe1 vzoru",
            "validation-pattern-formatted": "{0} neodpov\xedd\xe1 vzoru",
            "validation-email": "Neplatn\xfd email",
            "validation-email-formatted": "{0} nen\xed platn\xfd",
            "validation-mask": "Hodnota nen\xed platn\xe1",
            "dxLookup-searchPlaceholder": "Minim\xe1ln\xed po\u010det znak\u016f: {0}",
            "dxList-pullingDownText": "St\xe1hn\u011bte dol\u016f pro obnoven\xed...",
            "dxList-pulledDownText": "Uvoln\u011bte pro obnoven\xed...",
            "dxList-refreshingText": "Obnovuji...",
            "dxList-pageLoadingText": "Nahr\xe1v\xe1m...",
            "dxList-nextButtonText": "V\xedce",
            "dxList-selectAll": "Vybrat v\u0161e",
            "dxListEditDecorator-delete": "Smazat",
            "dxListEditDecorator-more": "V\xedce",
            "dxScrollView-pullingDownText": "St\xe1hn\u011bte dol\u016f pro obnoven\xed...",
            "dxScrollView-pulledDownText": "Uvoln\u011bte pro obnoven\xed...",
            "dxScrollView-refreshingText": "Obnovuji...",
            "dxScrollView-reachBottomText": "Nahr\xe1v\xe1m...",
            "dxDateBox-simulatedDataPickerTitleTime": "Vyberte \u010das",
            "dxDateBox-simulatedDataPickerTitleDate": "Vyberte datum",
            "dxDateBox-simulatedDataPickerTitleDateTime": "Vyberte datum a \u010das",
            "dxDateBox-validation-datetime": "Hodnota mus\xed b\xfdt datum nebo \u010das",
            "dxFileUploader-selectFile": "Vyberte soubor",
            "dxFileUploader-dropFile": "nebo p\u0159eneste soubor sem",
            "dxFileUploader-bytes": "byt\u016f",
            "dxFileUploader-kb": "kb",
            "dxFileUploader-Mb": "Mb",
            "dxFileUploader-Gb": "Gb",
            "dxFileUploader-upload": "Nahr\xe1t",
            "dxFileUploader-uploaded": "Nahr\xe1no",
            "dxFileUploader-readyToUpload": "P\u0159ipraveno k nahr\xe1n\xed",
            "dxFileUploader-uploadFailedMessage": "Nahr\xe1v\xe1n\xed selhalo",
            "dxFileUploader-invalidFileExtension": "",
            "dxFileUploader-invalidMaxFileSize": "",
            "dxFileUploader-invalidMinFileSize": "",
            "dxRangeSlider-ariaFrom": "Od",
            "dxRangeSlider-ariaTill": "Do",
            "dxSwitch-switchedOnText": "ZAP",
            "dxSwitch-switchedOffText": "VYP",
            "dxForm-optionalMark": "voliteln\xfd",
            "dxForm-requiredMessage": "{0} je vy\u017eadov\xe1no",
            "dxNumberBox-invalidValueMessage": "Hodnota mus\xed b\xfdt \u010d\xedslo",
            "dxNumberBox-noDataText": "\u017d\xe1dn\xe1 data",
            "dxDataGrid-columnChooserTitle": "V\xfdb\u011br sloupc\u016f",
            "dxDataGrid-columnChooserEmptyText": "P\u0159esu\u0148te sloupec zde pro skyt\xed",
            "dxDataGrid-groupContinuesMessage": "Pokra\u010dovat na dal\u0161\xed stran\u011b",
            "dxDataGrid-groupContinuedMessage": "Pokra\u010dov\xe1n\xed z p\u0159edchoz\xed strany",
            "dxDataGrid-groupHeaderText": "Slou\u010dit sloupce",
            "dxDataGrid-ungroupHeaderText": "Odd\u011blit",
            "dxDataGrid-ungroupAllText": "Odd\u011blit v\u0161e",
            "dxDataGrid-editingEditRow": "Upravit",
            "dxDataGrid-editingSaveRowChanges": "Ulo\u017eit",
            "dxDataGrid-editingCancelRowChanges": "Zru\u0161it",
            "dxDataGrid-editingDeleteRow": "Smazat",
            "dxDataGrid-editingUndeleteRow": "Obnovit",
            "dxDataGrid-editingConfirmDeleteMessage": "Opravdu chcete smazat tento z\xe1znam?",
            "dxDataGrid-validationCancelChanges": "Zru\u0161it zm\u011bny",
            "dxDataGrid-groupPanelEmptyText": "P\u0159eneste hlavi\u010dku sloupce zde pro slou\u010den\xed",
            "dxDataGrid-noDataText": "\u017d\xe1dn\xe1 data",
            "dxDataGrid-searchPanelPlaceholder": "Hled\xe1n\xed...",
            "dxDataGrid-filterRowShowAllText": "(V\u0161e)",
            "dxDataGrid-filterRowResetOperationText": "Reset",
            "dxDataGrid-filterRowOperationEquals": "Rovn\xe1 se",
            "dxDataGrid-filterRowOperationNotEquals": "Nerovn\xe1 se",
            "dxDataGrid-filterRowOperationLess": "Men\u0161\xed",
            "dxDataGrid-filterRowOperationLessOrEquals": "Men\u0161\xed nebo rovno",
            "dxDataGrid-filterRowOperationGreater": "V\u011bt\u0161\xed",
            "dxDataGrid-filterRowOperationGreaterOrEquals": "V\u011bt\u0161\xed nebo rovno",
            "dxDataGrid-filterRowOperationStartsWith": "Za\u010d\xedn\xe1 na",
            "dxDataGrid-filterRowOperationContains": "Obsahuje",
            "dxDataGrid-filterRowOperationNotContains": "Neobsahuje",
            "dxDataGrid-filterRowOperationEndsWith": "Kon\u010d\xed na",
            "dxDataGrid-filterRowOperationBetween": "Mezi",
            "dxDataGrid-filterRowOperationBetweenStartText": "Za\u010d\xedn\xe1",
            "dxDataGrid-filterRowOperationBetweenEndText": "Kon\u010d\xed",
            "dxDataGrid-applyFilterText": "Pou\u017e\xedt filtr",
            "dxDataGrid-trueText": "Plat\xed",
            "dxDataGrid-falseText": "Neplat\xed",
            "dxDataGrid-sortingAscendingText": "Srovnat vzestupn\u011b",
            "dxDataGrid-sortingDescendingText": "Srovnat sestupn\u011b",
            "dxDataGrid-sortingClearText": "Zru\u0161it rovn\xe1n\xed",
            "dxDataGrid-editingSaveAllChanges": "Ulo\u017eit zm\u011bny",
            "dxDataGrid-editingCancelAllChanges": "Zru\u0161it zm\u011bny",
            "dxDataGrid-editingAddRow": "P\u0159idat \u0159\xe1dek",
            "dxDataGrid-summaryMin": "Min: {0}",
            "dxDataGrid-summaryMinOtherColumn": "Min {1} je {0}",
            "dxDataGrid-summaryMax": "Max: {0}",
            "dxDataGrid-summaryMaxOtherColumn": "Max {1} je {0}",
            "dxDataGrid-summaryAvg": "Pr\u016fm.: {0}",
            "dxDataGrid-summaryAvgOtherColumn": "Pr\u016fm\u011br ze {1} je {0}",
            "dxDataGrid-summarySum": "Suma: {0}",
            "dxDataGrid-summarySumOtherColumn": "Suma {1} je {0}",
            "dxDataGrid-summaryCount": "Po\u010det: {0}",
            "dxDataGrid-columnFixingFix": "Uchytit",
            "dxDataGrid-columnFixingUnfix": "Uvolnit",
            "dxDataGrid-columnFixingLeftPosition": "Vlevo",
            "dxDataGrid-columnFixingRightPosition": "Vpravo",
            "dxDataGrid-exportTo": "Export",
            "dxDataGrid-exportToExcel": "Export do se\u0161itu Excel",
            "dxDataGrid-exporting": "Export...",
            "dxDataGrid-excelFormat": "soubor Excel",
            "dxDataGrid-selectedRows": "Vybran\xe9 \u0159\xe1dky",
            "dxDataGrid-exportSelectedRows": "Export vybran\xfdch \u0159\xe1dk\u016f",
            "dxDataGrid-exportAll": "Exportovat v\u0161echny z\xe1znamy",
            "dxDataGrid-headerFilterEmptyValue": "(pr\xe1zdn\xe9)",
            "dxDataGrid-headerFilterOK": "OK",
            "dxDataGrid-headerFilterCancel": "Zru\u0161it",
            "dxDataGrid-ariaColumn": "Sloupec",
            "dxDataGrid-ariaValue": "Hodnota",
            "dxDataGrid-ariaFilterCell": "Filtrovat bu\u0148ku",
            "dxDataGrid-ariaCollapse": "Sbalit",
            "dxDataGrid-ariaExpand": "Rozbalit",
            "dxDataGrid-ariaDataGrid": "Datov\xe1 m\u0159\xed\u017eka",
            "dxDataGrid-ariaSearchInGrid": "Hledat v datov\xe9 m\u0159\xed\u017ece",
            "dxDataGrid-ariaSelectAll": "Vybrat v\u0161e",
            "dxDataGrid-ariaSelectRow": "Vybrat \u0159\xe1dek",
            "dxDataGrid-filterBuilderPopupTitle": "Tvorba Filtru",
            "dxDataGrid-filterPanelCreateFilter": "Vytvo\u0159it Filtr",
            "dxDataGrid-filterPanelClearFilter": "Smazat",
            "dxDataGrid-filterPanelFilterEnabledHint": "Povolit Filtr",
            "dxTreeList-ariaTreeList": "Tree list",
            "dxTreeList-editingAddRowToNode": "P\u0159idat",
            "dxPager-infoText": "Strana {0} ze {1} ({2} polo\u017eek)",
            "dxPager-pagesCountText": "ze",
            "dxPivotGrid-grandTotal": "Celkem",
            "dxPivotGrid-total": "{0} Celkem",
            "dxPivotGrid-fieldChooserTitle": "V\xfdb\u011br pole",
            "dxPivotGrid-showFieldChooser": "Zobrazit v\xfdb\u011br pole",
            "dxPivotGrid-expandAll": "Rozbalit v\u0161e",
            "dxPivotGrid-collapseAll": "Sbalit v\u0161e",
            "dxPivotGrid-sortColumnBySummary": 'Srovnat "{0}" podle tohoto sloupce',
            "dxPivotGrid-sortRowBySummary": 'Srovnat "{0}" podle tohoto \u0159\xe1dku',
            "dxPivotGrid-removeAllSorting": "Odstranit ve\u0161ker\xe9 t\u0159\xedd\u011bn\xed",
            "dxPivotGrid-dataNotAvailable": "nedostupn\xe9",
            "dxPivotGrid-rowFields": "Pole \u0159\xe1dk\u016f",
            "dxPivotGrid-columnFields": "Pole sloupc\u016f",
            "dxPivotGrid-dataFields": "Pole dat",
            "dxPivotGrid-filterFields": "Filtrovat pole",
            "dxPivotGrid-allFields": "V\u0161echna pole",
            "dxPivotGrid-columnFieldArea": "Zde vlo\u017ete pole sloupc\u016f",
            "dxPivotGrid-dataFieldArea": "Zde vlo\u017ete pole dat",
            "dxPivotGrid-rowFieldArea": "Zde vlo\u017ete pole \u0159\xe1dk\u016f",
            "dxPivotGrid-filterFieldArea": "Zde vlo\u017ete filtr pole",
            "dxScheduler-editorLabelTitle": "P\u0159edm\u011bt",
            "dxScheduler-editorLabelStartDate": "Po\u010d\xe1te\u010dn\xed datum",
            "dxScheduler-editorLabelEndDate": "Koncov\xe9 datum",
            "dxScheduler-editorLabelDescription": "Popis",
            "dxScheduler-editorLabelRecurrence": "Opakovat",
            "dxScheduler-openAppointment": "Otev\u0159\xedt sch\u016fzku",
            "dxScheduler-recurrenceNever": "Nikdy",
            "dxScheduler-recurrenceMinutely": "Minutely",
            "dxScheduler-recurrenceHourly": "Hourly",
            "dxScheduler-recurrenceDaily": "Denn\u011b",
            "dxScheduler-recurrenceWeekly": "T\xfddn\u011b",
            "dxScheduler-recurrenceMonthly": "M\u011bs\xed\u010dn\u011b",
            "dxScheduler-recurrenceYearly": "Ro\u010dn\u011b",
            "dxScheduler-recurrenceRepeatEvery": "Ka\u017ed\xfd",
            "dxScheduler-recurrenceRepeatOn": "Repeat On",
            "dxScheduler-recurrenceEnd": "Konec opakov\xe1n\xed",
            "dxScheduler-recurrenceAfter": "Po",
            "dxScheduler-recurrenceOn": "Zap",
            "dxScheduler-recurrenceRepeatMinutely": "minute(s)",
            "dxScheduler-recurrenceRepeatHourly": "hour(s)",
            "dxScheduler-recurrenceRepeatDaily": "dn\xed",
            "dxScheduler-recurrenceRepeatWeekly": "t\xfddn\u016f",
            "dxScheduler-recurrenceRepeatMonthly": "m\u011bs\xedc\u016f",
            "dxScheduler-recurrenceRepeatYearly": "rok\u016f",
            "dxScheduler-switcherDay": "Den",
            "dxScheduler-switcherWeek": "T\xfdden",
            "dxScheduler-switcherWorkWeek": "Pracovn\xed t\xfdden",
            "dxScheduler-switcherMonth": "M\u011bs\xedc",
            "dxScheduler-switcherAgenda": "Agenda",
            "dxScheduler-switcherTimelineDay": "\u010casov\xe1 osa den",
            "dxScheduler-switcherTimelineWeek": "\u010casov\xe1 osa t\xfdden",
            "dxScheduler-switcherTimelineWorkWeek": "\u010casov\xe1 osa pracovn\xed t\xfdden",
            "dxScheduler-switcherTimelineMonth": "\u010casov\xe1 osa m\u011bs\xedc",
            "dxScheduler-recurrenceRepeatOnDate": "na den",
            "dxScheduler-recurrenceRepeatCount": "v\xfdskyt\u016f",
            "dxScheduler-allDay": "Cel\xfd den",
            "dxScheduler-confirmRecurrenceEditMessage": "Chcete upravit pouze tuto sch\u016fzku nebo celou s\xe9rii?",
            "dxScheduler-confirmRecurrenceDeleteMessage": "Chcete smazat pouze tuto sch\u016fzku nebo celou s\xe9rii?",
            "dxScheduler-confirmRecurrenceEditSeries": "Upravit s\xe9rii",
            "dxScheduler-confirmRecurrenceDeleteSeries": "Smazat s\xe9rii",
            "dxScheduler-confirmRecurrenceEditOccurrence": "Upravit sch\u016fzku",
            "dxScheduler-confirmRecurrenceDeleteOccurrence": "Smazat sch\u016fzku",
            "dxScheduler-noTimezoneTitle": "Bez \u010dasov\xe9 z\xf3ny",
            "dxScheduler-moreAppointments": "{0} nav\xedc",
            "dxCalendar-todayButtonText": "Dnes",
            "dxCalendar-ariaWidgetName": "Kalend\xe1\u0159",
            "dxColorView-ariaRed": "\u010cerven\xe1",
            "dxColorView-ariaGreen": "Zelen\xe1",
            "dxColorView-ariaBlue": "Modr\xe1",
            "dxColorView-ariaAlpha": "Pr\u016fhledn\xe1",
            "dxColorView-ariaHex": "K\xf3d barvy",
            "dxTagBox-selected": "{0} vybr\xe1no",
            "dxTagBox-allSelected": "V\u0161e vybr\xe1no ({0})",
            "dxTagBox-moreSelected": "{0} nav\xedc",
            "vizExport-printingButtonText": "Tisk",
            "vizExport-titleMenuText": "Export/import",
            "vizExport-exportButtonText": "{0} soubor\u016f",
            "dxFilterBuilder-and": "A",
            "dxFilterBuilder-or": "NEBO",
            "dxFilterBuilder-notAnd": "NAND",
            "dxFilterBuilder-notOr": "NOR",
            "dxFilterBuilder-addCondition": "P\u0159idat podm\xednku",
            "dxFilterBuilder-addGroup": "P\u0159idat skupinu",
            "dxFilterBuilder-enterValueText": "<vlo\u017ete hodnotu>",
            "dxFilterBuilder-filterOperationEquals": "Rovn\xe1 se",
            "dxFilterBuilder-filterOperationNotEquals": "Nerovn\xe1 se",
            "dxFilterBuilder-filterOperationLess": "Men\u0161\xed ne\u017e",
            "dxFilterBuilder-filterOperationLessOrEquals": "Men\u0161\xed nebo rovno ne\u017e",
            "dxFilterBuilder-filterOperationGreater": "V\u011bt\u0161\xed ne\u017e",
            "dxFilterBuilder-filterOperationGreaterOrEquals": "V\u011bt\u0161\xed nebo rovno ne\u017e",
            "dxFilterBuilder-filterOperationStartsWith": "Za\u010d\xedn\xe1 na",
            "dxFilterBuilder-filterOperationContains": "Obsahuje",
            "dxFilterBuilder-filterOperationNotContains": "Neobsahuje",
            "dxFilterBuilder-filterOperationEndsWith": "Kon\u010d\xed na",
            "dxFilterBuilder-filterOperationIsBlank": "Je pr\xe1zdn\xe9",
            "dxFilterBuilder-filterOperationIsNotBlank": "Nen\xed pr\xe1zdn\xe9",
            "dxFilterBuilder-filterOperationBetween": "Mezi",
            "dxFilterBuilder-filterOperationAnyOf": "Libovoln\xfd z",
            "dxFilterBuilder-filterOperationNoneOf": "\u017d\xe1dn\xfd z",
            "dxHtmlEditor-dialogColorCaption": "!TODO!",
            "dxHtmlEditor-dialogBackgroundCaption": "!TODO!",
            "dxHtmlEditor-dialogLinkCaption": "!TODO!",
            "dxHtmlEditor-dialogLinkUrlField": "!TODO!",
            "dxHtmlEditor-dialogLinkTextField": "!TODO!",
            "dxHtmlEditor-dialogLinkTargetField": "!TODO!",
            "dxHtmlEditor-dialogImageCaption": "!TODO!",
            "dxHtmlEditor-dialogImageUrlField": "!TODO!",
            "dxHtmlEditor-dialogImageAltField": "!TODO!",
            "dxHtmlEditor-dialogImageWidthField": "!TODO!",
            "dxHtmlEditor-dialogImageHeightField": "!TODO!",
            "dxHtmlEditor-heading": "!TODO!",
            "dxHtmlEditor-normalText": "!TODO!",
            "dxFileManager-newDirectoryName": "TODO",
            "dxFileManager-rootDirectoryName": "TODO",
            "dxFileManager-errorNoAccess": "TODO",
            "dxFileManager-errorDirectoryExistsFormat": "TODO",
            "dxFileManager-errorFileExistsFormat": "TODO",
            "dxFileManager-errorFileNotFoundFormat": "TODO",
            "dxFileManager-errorDirectoryNotFoundFormat": "TODO",
            "dxFileManager-errorWrongFileExtension": "TODO",
            "dxFileManager-errorMaxFileSizeExceeded": "TODO",
            "dxFileManager-errorInvalidSymbols": "TODO",
            "dxFileManager-errorDefault": "TODO",
            "dxFileManager-errorDirectoryOpenFailed": "TODO",
            "dxDiagram-categoryGeneral": "TODO",
            "dxDiagram-categoryFlowchart": "TODO",
            "dxDiagram-categoryOrgChart": "TODO",
            "dxDiagram-categoryContainers": "TODO",
            "dxDiagram-categoryCustom": "TODO",
            "dxDiagram-commandExportToSvg": "TODO",
            "dxDiagram-commandExportToPng": "TODO",
            "dxDiagram-commandExportToJpg": "TODO",
            "dxDiagram-commandUndo": "TODO",
            "dxDiagram-commandRedo": "TODO",
            "dxDiagram-commandFontName": "TODO",
            "dxDiagram-commandFontSize": "TODO",
            "dxDiagram-commandBold": "TODO",
            "dxDiagram-commandItalic": "TODO",
            "dxDiagram-commandUnderline": "TODO",
            "dxDiagram-commandTextColor": "TODO",
            "dxDiagram-commandLineColor": "TODO",
            "dxDiagram-commandLineWidth": "TODO",
            "dxDiagram-commandLineStyle": "TODO",
            "dxDiagram-commandLineStyleSolid": "TODO",
            "dxDiagram-commandLineStyleDotted": "TODO",
            "dxDiagram-commandLineStyleDashed": "TODO",
            "dxDiagram-commandFillColor": "TODO",
            "dxDiagram-commandAlignLeft": "TODO",
            "dxDiagram-commandAlignCenter": "TODO",
            "dxDiagram-commandAlignRight": "TODO",
            "dxDiagram-commandConnectorLineType": "TODO",
            "dxDiagram-commandConnectorLineStraight": "TODO",
            "dxDiagram-commandConnectorLineOrthogonal": "TODO",
            "dxDiagram-commandConnectorLineStart": "TODO",
            "dxDiagram-commandConnectorLineEnd": "TODO",
            "dxDiagram-commandConnectorLineNone": "TODO",
            "dxDiagram-commandConnectorLineArrow": "TODO",
            "dxDiagram-commandFullscreen": "TODO",
            "dxDiagram-commandUnits": "TODO",
            "dxDiagram-commandPageSize": "TODO",
            "dxDiagram-commandPageOrientation": "TODO",
            "dxDiagram-commandPageOrientationLandscape": "TODO",
            "dxDiagram-commandPageOrientationPortrait": "TODO",
            "dxDiagram-commandPageColor": "TODO",
            "dxDiagram-commandShowGrid": "TODO",
            "dxDiagram-commandSnapToGrid": "TODO",
            "dxDiagram-commandGridSize": "TODO",
            "dxDiagram-commandZoomLevel": "TODO",
            "dxDiagram-commandAutoZoom": "TODO",
            "dxDiagram-commandFitToContent": "TODO",
            "dxDiagram-commandFitToWidth": "TODO",
            "dxDiagram-commandAutoZoomByContent": "TODO",
            "dxDiagram-commandAutoZoomByWidth": "TODO",
            "dxDiagram-commandSimpleView": "TODO",
            "dxDiagram-commandCut": "TODO",
            "dxDiagram-commandCopy": "TODO",
            "dxDiagram-commandPaste": "TODO",
            "dxDiagram-commandSelectAll": "TODO",
            "dxDiagram-commandDelete": "TODO",
            "dxDiagram-commandBringToFront": "TODO",
            "dxDiagram-commandSendToBack": "TODO",
            "dxDiagram-commandLock": "TODO",
            "dxDiagram-commandUnlock": "TODO",
            "dxDiagram-commandInsertShapeImage": "TODO",
            "dxDiagram-commandEditShapeImage": "TODO",
            "dxDiagram-commandDeleteShapeImage": "TODO",
            "dxDiagram-commandLayoutLeftToRight": "TODO",
            "dxDiagram-commandLayoutRightToLeft": "TODO",
            "dxDiagram-commandLayoutTopToBottom": "TODO",
            "dxDiagram-commandLayoutBottomToTop": "TODO",
            "dxDiagram-unitIn": "TODO",
            "dxDiagram-unitCm": "TODO",
            "dxDiagram-unitPx": "TODO",
            "dxDiagram-dialogButtonOK": "TODO",
            "dxDiagram-dialogButtonCancel": "TODO",
            "dxDiagram-dialogInsertShapeImageTitle": "TODO",
            "dxDiagram-dialogEditShapeImageTitle": "TODO",
            "dxDiagram-dialogEditShapeImageSelectButton": "TODO",
            "dxDiagram-dialogEditShapeImageLabelText": "TODO",
            "dxDiagram-uiExport": "TODO",
            "dxDiagram-uiProperties": "TODO",
            "dxDiagram-uiSettings": "TODO",
            "dxDiagram-uiShowToolbox": "TODO",
            "dxDiagram-uiSearch": "TODO",
            "dxDiagram-uiStyle": "TODO",
            "dxDiagram-uiLayout": "TODO",
            "dxDiagram-uiLayoutTree": "TODO",
            "dxDiagram-uiLayoutLayered": "TODO",
            "dxDiagram-uiDiagram": "TODO",
            "dxDiagram-uiText": "TODO",
            "dxDiagram-uiObject": "TODO",
            "dxDiagram-uiConnector": "TODO",
            "dxDiagram-uiPage": "TODO",
            "dxDiagram-shapeText": "TODO",
            "dxDiagram-shapeRectangle": "TODO",
            "dxDiagram-shapeEllipse": "TODO",
            "dxDiagram-shapeCross": "TODO",
            "dxDiagram-shapeTriangle": "TODO",
            "dxDiagram-shapeDiamond": "TODO",
            "dxDiagram-shapeHeart": "TODO",
            "dxDiagram-shapePentagon": "TODO",
            "dxDiagram-shapeHexagon": "TODO",
            "dxDiagram-shapeOctagon": "TODO",
            "dxDiagram-shapeStar": "TODO",
            "dxDiagram-shapeArrowLeft": "TODO",
            "dxDiagram-shapeArrowUp": "TODO",
            "dxDiagram-shapeArrowRight": "TODO",
            "dxDiagram-shapeArrowDown": "TODO",
            "dxDiagram-shapeArrowUpDown": "TODO",
            "dxDiagram-shapeArrowLeftRight": "TODO",
            "dxDiagram-shapeProcess": "TODO",
            "dxDiagram-shapeDecision": "TODO",
            "dxDiagram-shapeTerminator": "TODO",
            "dxDiagram-shapePredefinedProcess": "TODO",
            "dxDiagram-shapeDocument": "TODO",
            "dxDiagram-shapeMultipleDocuments": "TODO",
            "dxDiagram-shapeManualInput": "TODO",
            "dxDiagram-shapePreparation": "TODO",
            "dxDiagram-shapeData": "TODO",
            "dxDiagram-shapeDatabase": "TODO",
            "dxDiagram-shapeHardDisk": "TODO",
            "dxDiagram-shapeInternalStorage": "TODO",
            "dxDiagram-shapePaperTape": "TODO",
            "dxDiagram-shapeManualOperation": "TODO",
            "dxDiagram-shapeDelay": "TODO",
            "dxDiagram-shapeStoredData": "TODO",
            "dxDiagram-shapeDisplay": "TODO",
            "dxDiagram-shapeMerge": "TODO",
            "dxDiagram-shapeConnector": "TODO",
            "dxDiagram-shapeOr": "TODO",
            "dxDiagram-shapeSummingJunction": "TODO",
            "dxDiagram-shapeContainerDefaultText": "TODO",
            "dxDiagram-shapeVerticalContainer": "TODO",
            "dxDiagram-shapeHorizontalContainer": "TODO",
            "dxDiagram-shapeCardDefaultText": "TODO",
            "dxDiagram-shapeCardWithImageOnLeft": "TODO",
            "dxDiagram-shapeCardWithImageOnTop": "TODO",
            "dxDiagram-shapeCardWithImageOnRight": "TODO",
            "dxGantt-dialogTitle": "TODO",
            "dxGantt-dialogStartTitle": "TODO",
            "dxGantt-dialogEndTitle": "TODO",
            "dxGantt-dialogProgressTitle": "TODO",
            "dxGantt-dialogResourcesTitle": "TODO",
            "dxGantt-dialogResourceManagerTitle": "TODO",
            "dxGantt-dialogTaskDetailsTitle": "TODO",
            "dxGantt-dialogEditResourceListHint": "TODO",
            "dxGantt-dialogEditNoResources": "TODO",
            "dxGantt-dialogButtonAdd": "TODO",
            "dxGantt-contextMenuNewTask": "TODO",
            "dxGantt-contextMenuNewSubtask": "TODO",
            "dxGantt-contextMenuDeleteTask": "TODO",
            "dxGantt-contextMenuDeleteDependency": "TODO",
            "dxGantt-dialogTaskDeleteConfirmation": "TODO",
            "dxGantt-dialogDependencyDeleteConfirmation": "TODO",
            "dxGantt-dialogResourcesDeleteConfirmation": "TODO",
            "dxGantt-dialogConstraintCriticalViolationMessage": "TODO",
            "dxGantt-dialogConstraintViolationMessage": "TODO",
            "dxGantt-dialogCancelOperationMessage": "TODO",
            "dxGantt-dialogDeleteDependencyMessage": "TODO",
            "dxGantt-dialogMoveTaskAndKeepDependencyMessage": "TODO",
            "dxGantt-undo": "TODO",
            "dxGantt-redo": "TODO",
            "dxGantt-expandAll": "TODO",
            "dxGantt-collapseAll": "TODO",
            "dxGantt-addNewTask": "TODO",
            "dxGantt-deleteSelectedTask": "TODO",
            "dxGantt-zoomIn": "TODO",
            "dxGantt-zoomOut": "TODO",
            "dxGantt-fullScreen": "TODO"
        }
    })
});
