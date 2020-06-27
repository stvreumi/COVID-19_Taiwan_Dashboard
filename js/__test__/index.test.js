import { 
  nConVList, 
  findCityCode,
  getTWData
} from '../index';

import $ from 'jquery';
import axios from 'axios';

import 'core-js/stable';
import 'regenerator-runtime/runtime';

describe('test `getTWData`', () => {
  it('should return TWObjData', async () => {
    axios.get = jest
      .fn()
      .mockResolvedValue({
        "0": {
          確診: 447,
          解除隔離: 435,
          死亡: 7,
          送驗: "76,209",
          "排除(新)": "75,264",
          昨日確診: 0,
          昨日排除: 147,
          昨日送驗: 177,
        },
      });

    const TWObjData = await getTWData();
    expect(TWObjData).toMatchObject({
      diagnoseNum: expect.any(Number),
      releaseNum: expect.any(Number),
      deadNum: expect.any(Number),
      inspectNum: expect.any(String),
      excludeNum: expect.any(String),
      ysdDiagnoseNum: expect.any(Number),
      ysdInspectionNum: expect.any(Number),
      ysdExcludeNum: expect.any(Number)
    })
  })
})

describe('test `findCityCode`', () => {
  it('should return city object', () => {
    const expectObj = {
      'cityCode': 2,
      'cityName': '台北市'
    };

    expect(findCityCode('台北市')).toEqual(expectObj);
  });
});

describe('logic coverage in `nConVList`, include PC, CC, CACC', () => {
  let path;
  let caseNumArr;
  let cityArr;
  let arrayCode;
  let cityCaseArr;

  beforeEach(() => {
    path = "php/";
    caseNumArr = [];
    cityArr = [];
    arrayCode = [];
    cityCaseArr = [];
  });

  it('sex === "F"(T), isOutCase == "是"(T)', () => {
    $.ajax = jest.fn().mockReturnValue(undefined);

    // Set up our document body
    document.body.innerHTML = '<div id="nConVList"></div>';
    
    nConVList();
    // check if ajax has been called 
    expect($.ajax).toHaveBeenCalledTimes(1);
    let successFn = $.ajax.mock.calls[0][0].success;
    successFn('[{\
      "診斷月份": 3, "縣市": "高雄市", "性別": "F", \
      "是否為境外移入": "是", "年齡層": "50-54", "確定病例數": 3 \
    }]');
    // check results
    expect($("#nConVList tr td:nth-child(3)").text()).toBe('女');
    expect($("#nConVList tr td:nth-child(6)").html())
      .toBe('<i class="far fa-circle text-success"></i>');
    //console.log($("#nConVList tr").html());
  });

  it('sex === "F"(F), isOutCase == "是"(F)', () => {
    $.ajax = jest.fn().mockReturnValue(undefined);

    // Set up our document body
    document.body.innerHTML = '<div id="nConVList"></div>';
    
    nConVList();
    // check if ajax has been called 
    expect($.ajax).toHaveBeenCalledTimes(1);
    let successFn = $.ajax.mock.calls[0][0].success;
    successFn('[{\
      "診斷月份": 4, "縣市": "新北市", "性別": "M", \
      "是否為境外移入": "否", "年齡層": "35-39", "確定病例數": 1 \
    }]');
    // check results
    expect($("#nConVList tr td:nth-child(3)").text()).toBe('男');
    expect($("#nConVList tr td:nth-child(6)").html())
      .toBe('<i class="fas fa-times text-danger"></i>');
    //console.log($("#nConVList tr").html());
  });
});