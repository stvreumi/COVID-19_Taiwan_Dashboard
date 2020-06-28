import $ from 'jquery';
import dt from'datatables.net';
import 'datatables.net-dt/css/jquery.datatables.css';
import twCityCode from '../json/taiwan-city-code.json';
import axios from 'axios';

import 'core-js/stable';
import 'regenerator-runtime/runtime';

dt(window, $); // used for datatables
let path = "php/";
let caseNumArr = [];
let cityArr = [];
let arrayCode = [];
let cityCaseArr = [];

async function getTWData() {
  const url = path + "api-TWData.php";

  //TODO: check if axios return JSON object automatically
  const data = await axios.get(url);

  const diagnoseNum = data[0].確診;
  const releaseNum = data[0].解除隔離;
  const deadNum = data[0].死亡;
  const inspectNum = data[0].送驗;
  const excludeNum = data[0]['排除(新)'];
  const ysdDiagnoseNum = data[0].昨日確診;
  const ysdInspectionNum = data[0].昨日送驗;
  const ysdExcludeNum = data[0].昨日排除;

  return {
    diagnoseNum,
    releaseNum,
    deadNum,
    inspectNum,
    excludeNum,
    ysdDiagnoseNum,
    ysdInspectionNum,
    ysdExcludeNum
  };
}

function renderData(TWObjData) {
  const {
    diagnoseNum,
    releaseNum,
    deadNum,
    inspectNum,
    excludeNum,
    ysdDiagnoseNum,
    ysdInspectionNum,
    ysdExcludeNum
  } = TWObjData;

  document.querySelector("#ysdExcludeNum").textContent = ysdExcludeNum;
  document.querySelector("#ysdInspectionNum").textContent = ysdInspectionNum;
  document.querySelector("#excludeNum").textContent = excludeNum;
  document.querySelector("#inspectNum").textContent = inspectNum;
  document.querySelector("#releaseNum").textContent = releaseNum;
  document.querySelector("#ysdDiagnoseNum").textContent = ysdDiagnoseNum;
  document.querySelector("#deadNum").textContent = deadNum;
  document.querySelector("#diagnoseNum").textContent = diagnoseNum;
}

async function render() {
  const TWObjData = await getTWData();
  renderData(TWObjData);
  
  nConVList();
}

async function nConVList() {
  const url = path + "api-nConVList.php";

  const data = await axios.get(url);

  data.forEach((v, i) => {
    // console.log(v);
    const caseSex = v.性別;
    const isOutCase = v.是否為境外移入;
    const caseMonth = v.診斷月份;
    const caseCity = v.縣市;
    const caseAge = v.年齡層;
    const caseNum = v.確定病例數;
    
    const caseCityNum = parseInt(caseNum, 10);
    caseNumArr.push(caseCityNum);
    cityArr.push(caseCity);

    const caseDisplaySex = (caseSex === "F") ? "女" : "男";
    
    const iconClassName = 
      (isOutCase == "是") ? "far fa-circle text-success" : "fas fa-times text-danger";
    
    const isOutCaseIcon = `<i class="${iconClassName}"></i>`
    
    const caseCityObj = findCityCode(caseCity);
    const {
      cityCode: caseCityCode,
      cityName: caseCityName
    } = caseCityObj;
    
    let cityCaseObj = {
      caseCityCode,
      caseCityName,
      caseCityNum
    };
    cityCaseArr.push(cityCaseObj);

    $("#nConVList").append(
      '<tr><td>' + caseMonth + '</td><td data-order="' + caseCityCode + '">' + caseCity +
      '</td><td>' + caseDisplaySex + '</td><td>' +
      caseAge + '</td><td>' + caseNum + '</td><td>' + isOutCaseIcon + '</td></tr>');
  });
  // complete
  cityCaseArr.sort((a, b) => {
    return a.caseCityCode - b.caseCityCode;
  });
  countCityCase(cityCaseArr);
  nCovDataTable();
  renderSVGColor();
  $(".loading").css({
    "display": "none"
  });
}

function rgbToHex(r, g, b) {
  return "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
}

function renderSVGColor() {
  for (let i = 1; i < 22; i++) {
    const cName = $("#TW_" + i + " > th").text();
    const cNum = parseInt($("#TW_" + i + " > td").text(), 10) * 5;
    let r = 255;
    let g = 255 - cNum;
    let b = g;

    if (g <= 0) {
      g = 0;
      b = g;
    }

    const hexColor = rgbToHex(r, g, b);
    // console.log(hexColor);
    $("#tw-map-" + i).css({
      "fill": hexColor,
    });
    // console.log(cName, cNum);
  }
}

function countCityCase(cityCaseArr) {
  let prevCityCode = 1;
  for (const i in cityCaseArr) {

    const currCityCode = cityCaseArr[i].caseCityCode;
    // console.log(currCityCode);
    if (prevCityCode != currCityCode) {
      // console.log(currCityCode, prevCityCode);
      prevCityCode = currCityCode;
      const currCaseCityNum = cityCaseArr[i].caseCityNum;
      $("#TW_" + currCityCode + " > td").html("<span class='text-warning'>" + currCaseCityNum + "</span>");
    } else if (prevCityCode == currCityCode) {
      // console.log("pc:" + currCityCode, prevCityCode);
      const prevCaseCityNum = parseInt($("#TW_" + prevCityCode + " > td").text(), 10);
      const currCaseCityNum = parseInt(cityCaseArr[i].caseCityNum, 10);;
      NewCaseCityNum = prevCaseCityNum + currCaseCityNum;
      $("#TW_" + prevCityCode + " > td").html("<span class='text-warning'>" + NewCaseCityNum + "</span>");
    }
  }
  const TW_1_Num = parseInt($("#TW_1 > td").text(), 10) - 1;
  $("#TW_1 > td").html("<span class='text-warning'>" + TW_1_Num + "</span>");
  // console.log(TW_1_Num);

}

function nCovDataTable() {
  $('#nCoVCaseTable').DataTable({
    "paging": true,
    "searching": false,
    "info": false,
    "pageLength": 5,
    "language": {
      "paginate": {
        'first': '第一頁',
        'previous': '&laquo;',
        'next': '&raquo;',
        'last': '最後一頁',

      },
      "lengthMenu": '顯示 <select>' +
        '<option value="5">5</option>' +
        '<option value="10">10</option>' +
        '<option value="25">25</option>' +
        '<option value="50">50</option>' +
        '<option value="100">100</option>' +
        '<option value="-1">All</option>' +
        '</select> 筆資料'
    }
  });
  $("#cityListTable").DataTable({
    "paging": false,
    "searching": false,
    "info": false,
    "orderFixed": [
      [1, "desc"],
      [0, "desc"]
    ],
    "columns": [{
        "orderable": false
      },
      {
        "orderable": false
      },
    ],
    "columnDefs": [{
      "orderable": false,
      "targets": 0
    }]
  });
}

function findCityCode(queryCityName) {
  for (const city of twCityCode) {
    const cityName = city.cityName;
    if (queryCityName === cityName) {
      return city;
    }
  }
  return undefined;
}


// comment for testing
render();

// for software tesing hw3
export { 
  nConVList, 
  findCityCode,
  getTWData,
  renderData
};
