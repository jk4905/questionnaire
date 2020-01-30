<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>来往武汉人员登记表</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>

    <meta name="applicable-device" content="mobile"/>

    <meta name="robots" content="noindex">

    <link rel="stylesheet" href="https://www.wjx.cn/joinnew/css/jqmobo.css?v=1051"/>

    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>

    <script type="text/javascript">
        !window.jQuery && document.write('<script src="/js/jquery-1.10.2.min.js"><\/script>');
    </script>

    <script src="https://www.wjx.cn/joinnew/js/hintinfo.js?v=2" type="text/javascript"></script>

    <script src="https://www.wjx.cn/joinnew/js/jqmobo2.js?v=1051" type="text/javascript"></script>

    <style>


    </style>


</head>
<body>

<div id="divTip"
     style="position:absolute; left: 0; right: 0; z-index: 10; display: none; font-size: 14px; color: #ffffff; line-height: 24px; padding: 8px; background-color: #f95b5b;"></div>
<div id="tipHeight" style="height:40px;display:none;"></div>
<div style="background: #fff; position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 2; display: none;"
     id="divWorkError">
</div>
<form id="form1" method="post" action="{{ route('question.answer') }}"
      style="overflow:hidden;">


    <div id="divLoadAnswer"
         style="display: none; font-size: 14px;line-height:24px;padding:6px 8px;background-color: #fff9f0;">

    </div>

    <div id="toptitle">
        <h1 class="htitle" id="htitle">
            来往武汉人员登记表</h1>
    </div>


    <div id="divBackgroundWrap"></div>
    <div id='divMaxTime'
         style="display: none; background: #FFEAEA; color: #FF5760; font-size: 16px; height: 40px; left: 0; line-height: 40px; position: fixed; text-align: center; top: 0; width: 100%; z-index: 100;">
        <span id="spanTimeTip"></span>&nbsp;<span id='spanMaxTime'></span>
    </div>


    <div id="divContent" class="divContent">

        <!--        <div class="checkInMode__head clearfix" id="divCheckInMode" style="display: none;">-->
        <!--            <div class="wjxCountDown__wrap game_time">-->
        <!--                <div class="countDown__hold">-->
        <!--                    <div class="round round1"></div>-->
        <!--                </div>-->
        <!--                <div class="countDown__hold">-->
        <!--                    <div class="round round2"></div>-->
        <!--                </div>-->
        <!--                <div class="countDown__bg"></div>-->
        <!--                <div class="CountDown__frame"></div>-->
        <!--                <div class="countDown__time">-->
        <!--                    <div class="countDown__time&#45;&#45;num" id="divCGMaxTime">10</div>-->
        <!--                    <div class="countDown__time&#45;&#45;unit">秒</div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="icon decoration-icon pull-left"></div>-->
        <!--            <div class="schedule-wrap pull-right">-->
        <!--                <div id="schedule">1</div>-->
        <!--                / <span id="cgtotal">5</span>题-->
        <!--            </div>-->
        <!--        </div>-->


        <div id="divQuestion">
            <fieldset class='fieldset' style='' id='fieldset1'>
                <div class='field ui-field-contain' id='div5' topic='5' data-role='fieldcontain' type='3'>
                    <div class='field-label'>1. 近一个月来，您是否到过武汉</div>
                    <div class='ui-controlgroup'>
                        <div class='ui-radio'><span class='jqradiowrapper'><input type='radio' value='1' id='q5_1'
                                                                                  name='q5' style='display:none;'/><a
                                    class='jqradio' href='javascript:;'></a></span>
                            <div class='label' for='q5_1'>1.到过</div>
                        </div>
                        <div class='ui-radio'><span class='jqradiowrapper'><input type='radio' value='2' id='q5_2'
                                                                                  name='q5' style='display:none;'/><a
                                    class='jqradio' href='javascript:;'></a></span>
                            <div class='label' for='q5_2'>2.没有到过</div>
                        </div>
                    </div>
                    <div class='errorMessage'></div>
                </div>
                <div class='field ui-field-contain' id='div8' topic='8' data-role='fieldcontain' type='3'>
                    <div class='field-label'>2. 您近期是否与武汉的朋友有过接触？</div>
                    <div class='ui-controlgroup'>
                        <div class='ui-radio'><span class='jqradiowrapper'><input type='radio' value='1' id='q8_1'
                                                                                  name='q8' style='display:none;'/><a
                                    class='jqradio' href='javascript:;'></a></span>
                            <div class='label' for='q8_1'>1.有</div>
                        </div>
                        <div class='ui-radio'><span class='jqradiowrapper'><input type='radio' value='2' id='q8_2'
                                                                                  name='q8' style='display:none;'/><a
                                    class='jqradio' href='javascript:;'></a></span>
                            <div class='label' for='q8_2'>2.没有</div>
                        </div>
                    </div>
                    <div class='errorMessage'></div>
                </div>
                <div class='field ui-field-contain' id='div9' topic='9' data-role='fieldcontain' type='1'>
                    <div class='field-label'>3. 您所在城市？</div>
                    <div class='ui-input-text' style='position:relative;'><input type='text' id='q9' value=''
                                                                                 name='q9'/></div>
                    <div class='errorMessage'></div>
                </div>
            </fieldset>
        </div>
        <div id="divMatrixRel" style="position: absolute; display: none; width: 80%; margin: 0 10%;"
             class="ui-input-text">
            <input type="text" placeholder="请注明..." id="matrixinput"
                   style="min-height: 2em; width: 100%; padding: 0.3em 0.6em;"/>
        </div>
        <div id="divMatrixHeader" class="divMatrixHeader"
             style="position: absolute; display: none; font-size: 12px; color: #333">
        </div>
        <div class="shopcart" id="shopcart" style="display: none;">
        </div>

        <div class="footer">
            <div class="ValError" id="ValError">
            </div>


            <div id="captchaOut">
                <div id="captchaWrap">
                    <span id="captchaTit" style="display:none;color:#42B917;"></span>
                    <div id="captcha" style="margin: 0 auto;"></div>
                </div>
            </div>

            <div id="divSubmit" style="padding: 0px 20px 10px; display: none;">
                <!--                <div id="tdCode" style="display: none; padding-bottom: 15px;">-->
                <!--                    <table>-->
                <!--                        <tr>-->
                <!--                            <td class="ui-input-text nofocus">-->
                <!--                                <input id="yucinput" size="14" maxlength="10" type="text" name="yucinput"/>-->
                <!--                            </td>-->
                <!--                            <td>-->
                <!--                                <div id="divCaptcha" style="display: none;">-->
                <!--                                    <img alt="验证码" title="看不清吗？点击可以刷新" captchaid="" instanceid="">-->
                <!--                                </div>-->

                <!--                            </td>-->
                <!--                            <td>&nbsp;&nbsp;<img id="imgCode" alt="验证码" title="看不清吗？点击可以刷新"-->
                <!--                                                 style="vertical-align: bottom; cursor: pointer; display: none;"/>-->
                <!--                            </td>-->
                <!--                        </tr>-->
                <!--                    </table>-->
                <!--                </div>-->


                <div class="voteDiv">

                    <a id="ctlNext" href="javascript:;" class="button blue">
                        提交</a>
                    <a href="javascript:;" class="button white ctBack" style="display:none"
                       onclick='location.href=getTpMainUrl()'>
                        返回</a>
                </div>
            </div>

            <a href="javascript:;" id="cgstartbutton" style="display: none;"></a>

            <div id="divSearch"
                 style="background: #020d15; color: #7c7c7c; font-size: 18px; height: 50px; left: 0; line-height: 50px; position: fixed; text-align: center; bottom: 0; width: 100%; z-index: 100; display: none;">
            </div>

        </div>

    </div>

    <div class="result" id="outdiv">
        <div class="indiv" id="indiv">
            <i class="icon_close"></i>
            <div id="preView_wrap">
                <img class="imgresult" id="bigimg" src="" alt="">
            </div>
        </div>
    </div>


    <div id="divTimeUp" style="display: none;">
        <div style="padding: 10px; overflow: auto; line-height: 20px; font-size: 16px; text-align: center;"
             id="divTimeUpTip"></div>
    </div>
    <input type="hidden" value="2020/1/29 20:20:14" id="starttime" name="starttime"/>
    <input type="hidden" value="directphone" id="source" name="source"/>
</form>

<a id='lnkCity' style="display: none;"></a>

<script type="text/javascript">
    var isYdb = 0;
    var isPub = 0;
    var isQywx = 0;
    var cqType = 1;
    var isDingDing = 0;
    var ddcorpid = "";
    var sojumpParm = '';
    var parmsign = '';
    var isKaoShi = 0;
    var lastTopic = 0;
    var Password = window.Password ? window.Password : "";
    var PasswordExt = window.PasswordExt ? window.PasswordExt : "";
    var pwdExt = "";
    var emailName = "";
    var displayExt = "";
    var phoneName = "";
    var wxNickName = "";
    var guid = "";
    var udsid = 0;
    var fromsour = "";
    var langVer = 0;
    var cProvince = "";
    var cCity = "";
    var cIp = "";
    var divTip = document.getElementById("divTip");
    var displayPrevPage = "none";
    var inviteid = '';
    var jbkid = '';
    var access_token = "";
    var openid = "";
    var wxUserId = "";
    var ddUserId = "";
    var isQQLogin = 0;
    var wxthird = 0;
    var parterts = "";
    var parterjoiner = "";
    var partersign = "";
    var parterrealname = "";
    var parterextf = "";
    var parterdept = "";
    var parterpuser = "";
    var relusername = "";
    var relts = "";
    var relsign = "";
    var relrealname = "";
    var reldept = "";
    var relext = "";
    var nbk = 0;
    var corpId = "";
    var flist = 0;
    var isPvw = 0;
    var user_token = "";
    var IsSampleService = 0;
    var hashb = 0;
    var sjUser = '';
    var sjts = '';
    var sjsign = '';
    var outuser = '';
    var sourcelink = '';
    var outsign = '';
    var sourceurl = '';
    var sourcename = "";
    var isSimple = '';
    var jiFenBao = 0;
    var cAlipayAccount = "";
    var isRunning = 1;
    var SJBack = '';
    var jiFen = "0";
    var FromSj = 0;
    var ItemDicData = "";
    var rndnum = "3086456383.30560924";
    var totalPage = 1;
    var totalCut = 0;
    var cepingCandidate = "";
    var allowPart = 0;
    var OneaTime = 0;
    var cpid = "";
    var needSaveJoin = 0;
    var isChuangGuan = 0;
    var jqnonce = "93c5a578-9f78-4b2e-ba6e-1fc6c7db692b";
    var maxCgTime = 0;
    var maxOpTime = 0;
    var qBeginDate = "1579682031423";
    var randomMode = 0;
    var fisrtLoadTime = new Date().getTime();
    var canAward = 1;
    var allowAward = 1;
    var isVip = 0;
    var LogStoreLocal = 0;

    var needLogCompanyId = 0;
    var needHBAlert = 0;
    var isPromoteing = 0;
    var prsjts = "";
    var prsjsign = "";
    var cityPeiEQues = "";

    if (needHBAlert && !window.needLogin) {
        if (needHBAlert == -1) {
            var hbmsg = $("#spanTip").text();
            alertNew(hbmsg);
        } else if (needHBAlert == -2)
            alertNew("请注意：抽中红" + "包后答卷还需要发布者审核，通过审核后才能发放红" + "包！");
        else if (needHBAlert == -4) {
            var hbmsg = $("#spanTip").text();
            alertNew(hbmsg);
        } else if (needHBAlert < 0) {
            alertNew("请注意：每个参与者填完问卷后有" + (needHBAlert * -1) + "%的概率抽中红" + "包");
        } else
            alertNew("请注意：每个参与者填完问卷后有1/" + needHBAlert + "的概率抽中红" + "包");
    }
    var needAwardAlert = 0;
    var leftSeconds = 0 - 10;
    if (needAwardAlert && !window.needLogin) {
        var divawardalert = document.getElementById("divawardalert");
        var awt = $.trim($(divawardalert).text());
        if (awt)
            alert(awt);
    }
    var hasChuangGuanEnd = false;
    var IsPar = 0;
    var curProvince = "";
    var curCity = "";
    var curIp = "183.193.114.106";
    var curFuHe = 0;
    var curCheckResult = 0;
    var addtoHis = 0;
    var isForein = 0;
</script>


<script type="text/javascript">
    var needAvoidCrack = 0;
    var tdCode = "tdCode";
    var imgCode = $("#imgCode")[0];
    var submit_text = $("#yucinput")[0];
    var tCode = $("#" + tdCode)[0];
    var hasTouPiao = 0

</script>

</body>
</html>
