<div class="content flex column">

    <ul class="settings">
        <li>
            <a href="#" onclick="checkForm(T_OHLC)"><i class="ic3"></i></a> <!-- OHLC -->
        </li>
        <li>
            <a href="#"  onclick="checkForm(T_CANDLE)"><i class="ic2"></i></a> <!-- @lang('messages.CandleStick') -->
        </li>
        <li>
            <a href="#"  onclick="checkForm(T_CLOSE)"><i class="ic1"></i></a> <!-- @lang('messages.Line') -->
        </li>
        <li>
            <a href="#"  onclick="checkForm(T_AREA)"><i class="ic0"></i></a> <!-- @lang('messages.Area') -->
        </li>
        <li class="ind">
            <a href="#"><i class="ic_instrum"></i></a> <!-- @lang('messages.Indicators') -->
            <ul class="sub hidden">
                <li>
                    <a href="#" onclick="checkForm(I_SMA0)">SMA 0<i class="show ic"></i></a>
                    <ul class="sub show_sub">
                        <li>
                            <div class="number number_1">
                                <div class="wrap flex">
                                    <span class="minus1">-</span>
                                    <input type="text" value="7" size="1" id="sma0_value" onchange="checkForm()"/>
                                    <span class="plus1">+</span>
                                </div>
                            </div>
                            <form>
                                <script>
                                    function sma0_range() {
                                        var sma0=document.getElementById('sma0_width');
                                        var sma0_v=document.getElementById('sma0_val');
                                        sma0_v.innerHTML=sma0.value;
                                    }
                                </script>
                                <output for="sma0_width" name="level" id="sma0_val">1</output>
                                <input name="sma0_width" id="sma0_width" type="range" min="1" max="10" value="1" step="1" oninput="sma0_range()" onchange="checkForm()">
                            </form>
                            <input type="color" id="sma0_color" onchange="checkForm()" value="#b41f1f">
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onclick="checkForm(I_SMA1)">SMA 1<i class="show ic"></i></a>
                    <ul class="sub show_sub">
                        <li>
                            <div class="number number_2">
                                <div class="wrap flex">
                                    <span class="minus1">-</span>
                                    <input type="text" value="20" size="1" id="sma1_value" step="1" onchange="checkForm()"/>
                                    <span class="plus1">+</span>
                                </div>
                            </div>
                            <form>
                                <script>
                                    function sma1_range() {
                                        var sma1=document.getElementById('sma1_width');
                                        var sma1_v=document.getElementById('sma1_val');
                                        sma1_v.innerHTML=sma1.value;
                                    }
                                </script>
                                <output for="sma1_width" name="level" id="sma1_val">1</output>
                                <input name="sma1_width" id="sma1_width" type="range" min="1" max="10" value="1" step="1" oninput="sma1_range()" onchange="checkForm()">
                            </form>
                            <input type="color" id="sma1_color" onchange="checkForm()" value="#b41f1f">
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onclick="checkForm(I_EMA2)">EMA<i class="show ic"></i></a>
                    <ul class="sub show_sub">
                        <li>
                            <div class="number number_3">
                                <div class="wrap flex">
                                    <span class="minus1">-</span>
                                    <input type="text" value="10" size="1" id="ema2_value" step="1" onchange="checkForm()"/>
                                    <span class="plus1">+</span>
                                </div>
                            </div>
                            <form>
                                <script>
                                    function ema_range() {
                                        var ema2=document.getElementById('ema2_width');
                                        var ema2_v=document.getElementById('ema2_val');
                                        ema2_v.innerHTML=ema2.value;
                                    }
                                </script>
                                <output for="ema2_width" name="level" id="ema2_val">1</output>
                                <input name="ema2_width" id="ema2_width" type="range" min="1" max="10" value="1" step="1" oninput="ema_range()" onchange="checkForm()">
                            </form>
                            <input type="color" id="ema2_color" onchange="checkForm()" value="#b41f1f">
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="#"><i class="ic"></i>EMA</a>

                </li> -->
                <li>
                    <a href="#" onclick="checkForm(I_MACD)">MACD</a>

                </li>
                <li>
                    <a href="#" onclick="checkForm(I_RSI)">RSI</a>

                </li>
                <li>
                    <a href="#" onclick="AddSupportLine()">@lang('messages.Horizontal_line')</a>

                </li>
                <li>
                    <a href="#" onclick="addTrendline()">@lang('messages.Trend_Line')</a>
                    <ul class="sub show_sub">
                        <li>
                            <div class="number">
                                <div class="wrap flex">
                                    <span class="minus">-</span>
                                    <input type="text" value="1" size="1" id="Trendline_value" step="1"/>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <form>
                                <output for="sma0_width" name="level">1</output>
                                <input name="sma0_width" id="Trendline_width" type="range" min="1" max="10" value="1" step="1">
                            </form>
                            <input type="color" id="Trendline_color" onchange="checkForm()" value="#b41f1f">
                        </li>
                    </ul>
                </li>
                <li class="clear"><a href="#" onclick="delete_indicators()">@lang('messages.Remove_all')</a></li>
            </ul>
        </li>
        <!-- <li class="sup">
            <label for="support_max">Max Y:</label>
            <input type="text" id="support_max" value="0">
            <label for="support_min">Min Y:</label>
            <input type="text" id="support_min" value="0">
            <button class = "btn_fullscreen" onclick="AddSupportLine()">Add support</button>
        </li> -->
        <li class="flex" id="duration_value" onchange="config_time(this.value)">
            <!-- <a href="#" onclick="config_time('1m');">1</a> -->
            <a href="#" onclick="config_time('5m');" class="active">5</a>
            <a href="#" onclick="config_time('15m');">15</a>
            <a href="#" onclick="config_time('30m');">30</a>
            <a href="#" onclick="config_time('45m');">45</a>
            <!-- <a href="#" onclick="config_time('1h');">1H</a> -->
            <!-- <a href="#" onclick="config_time('1d');">1D</a> -->
            <!-- <a href="#" onclick="config_time(60);">1 hour</a> -->
        </li>
        <li class="zum">
            <div class="item zoom">
                <button onclick="zoomChart(0, parseInt(zoom_step_value))"> + </button>
                <select onchange="zoom_step_value = this.value;">
                    <option value="1">&times;1</option>
                    <option value="5">&times;5</option>
                    <option value="10">&times;10</option>
                    <option value="15">&times;15</option>
                </select>
                <button onclick="zoomChart(1, parseInt(zoom_step_value))"> - </button>
            </div>
        </li>
    </ul>

    <script>
        function changeChartType(type)
        {
            checkForm(type+6);
            // const T_OHLC = 6;
            // const T_CANDLE = 7;
            // const T_CLOSE = 8;
            //
            //
            // chartOptions.type = type;
            // chartType();
            // clearChart();
            // dataChart(newData);
        }

        // mozfullscreenerror event handler
        function errorHandler() {
            alert('mozfullscreenerror');
        }
        document.documentElement.addEventListener('mozfullscreenerror', errorHandler, false);

        // toggle full screen
        // function toggleFullScreen() {
        //     if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement) {
        //         if (document.documentElement.requestFullscreen) {
        //             document.documentElement.requestFullscreen();
        //         } else if (document.documentElement.mozRequestFullScreen) {
        //             document.documentElement.mozRequestFullScreen();
        //         } else if (document.documentElement.webkitRequestFullscreen) {
        //             document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        //         }
        //     } else {
        //         if (document.cancelFullScreen) {
        //             document.cancelFullScreen();
        //         } else if (document.mozCancelFullScreen) {
        //             document.mozCancelFullScreen();
        //         } else if (document.webkitCancelFullScreen) {
        //             document.webkitCancelFullScreen();
        //         }
        //     }
        //     checkForm();
        // }
    </script>
    <div class="ttt">
        <!-- <a href="#" class="b_close" onclick="toggleFullScreen();"></a> -->
        <!-- <a href="#" class="open hidden">@lang('messages.Open_sd')</a> -->
        <!-- <a href="#" class="closee hidden">@lang('messages.Close_sd')</a> -->
        <!-- <a href="#" class="open2 hidden">@lang('messages.Instruments')</a> -->
        <!-- <a href="#" class="closee2 hidden">@lang('messages.Close_sd')</a> -->
        <!-- <a href="#" class="button" onclick="toggleFullScreen();checkForm();"></a> -->
    </div>

    <div id="chart_field">
        <!-- <a href="#" class="order">@lang('messages.Open_new_trade')</a> -->
    </div>

</div>
