//基本显示地图
var map = new AMap.Map('map-canvas', {
	resizeEnable: true,
	zoom:16,
	center: [113.649843,34.785331]

});
//显示标记
var markers =[113.649843,34.785331];
var marker = new AMap.Marker({
	position: [113.649843,34.785331]
})
marker.setMap(map);
//信息提示框
var info = new AMap.InfoWindow({
	content:'郑州风擎科技--1单元802室'
})
info.open(map, [113.649843,34.785331]);

//圆形区域
var circle = new AMap.Circle({
	center: markers,
	radius:40,
	fillOpacity:0.1,
	strokeWeight:1
})

circle.setMap(map);