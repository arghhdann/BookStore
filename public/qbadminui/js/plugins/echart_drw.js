// Chart bar in Dashboard version 1
'use strict';
var _extends = Object.assign || function (target) { 
    for (var i = 1; i < arguments.length; i++) {
        var source = arguments[i]; 
        for (var key in source) { 
            if (Object.prototype.hasOwnProperty.call(source, key)) {
                target[key] = source[key]; 
            } 
        } 
    } return target; 
};

var echartElemBar = document.getElementById('echartBar');
if (echartElemBar) {
    var echartBar = echarts.init(echartElemBar);
    echartBar.setOption({
        legend: {
            borderRadius: 0,
            orient: 'horizontal',
            x: 'right',
            data: ['Lulus', 'Gagal']
        },
        grid: {
            left: '8px',
            right: '8px',
            bottom: '0',
            containLabel: true
        },
        tooltip: {
            show: true,
            backgroundColor: 'rgba(0, 0, 0, .8)'
        },
        xAxis: [{
            type: 'category',
            data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            axisTick: {
                alignWithLabel: true
            },
            splitLine: {
                show: false
            },
            axisLine: {
                show: true
            }
        }],
        yAxis: [{
            type: 'value',
            axisLabel: {
                // formatter: '${value}'
            },
            min: 0,
            max: 1000,
            interval: 250,
            axisLine: {
                show: false
            },
            splitLine: {
                show: true,
                interval: 'auto'
            }
        }],

        series: [{
            name: 'Lulus',
            data: [350, 690, 225, 600, 500, 500, 300, 800, 700, 600, 200, 305],
            label: { show: false, color: '#0168c1' },
            type: 'bar',
            barGap: 0,
            color: '#003E61',
            smooth: true,
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowOffsetY: -2,
                    shadowColor: 'rgba(0, 0, 0, 0.3)'
                }
            }
        }, {
            name: 'Gagal',
            data: [450, 820, 350, 930, 710, 890, 490, 910, 802, 860, 350, 450],
            label: { show: false, color: '#639' },
            type: 'bar',
            color: '#86AED8',
            smooth: true,
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowOffsetY: -2,
                    shadowColor: 'rgba(0, 0, 0, 0.3)'
                }
            }
        }]
    });
    $(window).on('resize', function () {
        setTimeout(function () {
            echartBar.resize();
        }, 500);
    });
}

// Chart in Dashboard version 1
var echartElemPie = document.getElementById('echartPie');
if (echartElemPie) {
    var echartPie = echarts.init(echartElemPie);
    echartPie.setOption({
        color: ['#003E61', '#356187', '#5E87AF', '#86AFD9', '#B0D8FF'],
        tooltip: {
            show: true,
            backgroundColor: 'rgba(0, 0, 0, .8)'
        },

        series: [{
            name: 'Permohonan Mengikut Negeri',
            type: 'pie',
            radius: '60%',
            center: ['50%', '50%'],
            data: [
                { value: 535, name: 'Johor' }, 
                { value: 310, name: 'Selangor' }, 
                { value: 234, name: 'Perak' }, 
                { value: 155, name: 'Pulau Pinang' }, 
                { value: 130, name: 'Kedah' }
            ],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }]
    });
    $(window).on('resize', function () {
        setTimeout(function () {
            echartPie.resize();
        }, 500);
    });
}

// Chart in Dashboard version 1
var echartElem1 = document.getElementById('echart1');
if (echartElem1) {
    var echart1 = echarts.init(echartElem1);
    echart1.setOption(_extends({}, echartOptions.lineFullWidth, {
        series: [_extends({
            data: [30, 40, 20, 50, 40, 80, 90]
        }, echartOptions.smoothLine, {
            markArea: {
                label: {
                    show: true
                }
            },
            areaStyle: {
                color: 'rgba(102, 51, 153, .2)',
                origin: 'start'
            },
            lineStyle: {
                color: '#663399'
            },
            itemStyle: {
                color: '#663399'
            }
        })]
    }));
    $(window).on('resize', function () {
        setTimeout(function () {
            echart1.resize();
        }, 500);
    });
}
// Chart in Dashboard version 1
var echartElem2 = document.getElementById('echart2');
if (echartElem2) {
    var echart2 = echarts.init(echartElem2);
    echart2.setOption(_extends({}, echartOptions.lineFullWidth, {
        series: [_extends({
            data: [30, 10, 40, 10, 40, 20, 90]
        }, echartOptions.smoothLine, {
            markArea: {
                label: {
                    show: true
                }
            },
            areaStyle: {
                color: 'rgba(255, 193, 7, 0.2)',
                origin: 'start'
            },
            lineStyle: {
                color: '#FFC107'
            },
            itemStyle: {
                color: '#FFC107'
            }
        })]
    }));
    $(window).on('resize', function () {
        setTimeout(function () {
            echart2.resize();
        }, 500);
    });
}
// Chart in Dashboard version 1
var echartElem3 = document.getElementById('echart3');
if (echartElem3) {
    var echart3 = echarts.init(echartElem3);
    echart3.setOption(_extends({}, echartOptions.lineNoAxis, {
        series: [{
            data: [40, 80, 20, 90, 30, 80, 40, 90, 20, 80, 30, 45, 50, 110, 90, 140, 120, 135, 120, 140],
            lineStyle: _extends({
                color: '#136C89',
                width: 4
            }, echartOptions.lineShadow),
            label: { show: true, color: '#6DC37D' },
            type: 'line',
            smooth: true,
            itemStyle: {
                borderColor: 'rgba(102, 51, 153, 1)'
            }
        }]
    }));
    $(window).on('resize', function () {
        setTimeout(function () {
            echart3.resize();
        }, 500);
    });
}

// DonutChart in Dashboard version 1
var echartElemPie = document.getElementById('donutChart');
if (echartElemPie) {
    var echartPie = echarts.init(echartElemPie);
    echartPie.setOption({
        color: ['#003E61', '#356187', '#5E87AF', '#86AFD9'],
        tooltip: {
            show: true,
            backgroundColor: 'rgba(0, 0, 0, .8)'
        },

        series: [{
            name: 'Permohonan',
            type: 'pie',
            radius: '60%',
            center: ['50%', '50%'],
            data: [
                { value: 535, name: 'Jumlah Diterima' }, 
                { value: 310, name: 'Jumlah Lulus' }, 
                { value: 234, name: 'Jumlah Gagal' }, 
                { value: 155, name: 'Jumlah Pengguna' }, 
            ],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }]
    });
    $(window).on('resize', function () {
        setTimeout(function () {
            echartPie.resize();
        }, 500);
    });
}

//linechart
var echartElem3 = document.getElementById('echart4');
if (echartElem3) {
    var echart4 = echarts.init(echartElem3);
    echart4.setOption(_extends({}, echartOptions.lineNoAxis, {
        series: [{
            data: [40, 80, 20, 90, 30, 80, 40, 90, 20, 80, 30, 45, 50],
            lineStyle: _extends({
                color: '#136C89',
                width: 4
            }, echartOptions.lineShadow),
            label: { show: true, color: '#6DC37D' },
            type: 'line',
            smooth: true,
            itemStyle: {
                borderColor: 'rgba(102, 51, 153, 1)'
            }
        }]
    }));
    $(window).on('resize', function () {
        setTimeout(function () {
            echart4.resize();
        }, 500);
    });
}

