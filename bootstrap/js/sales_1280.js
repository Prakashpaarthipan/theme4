var myApp = angular.module("myApp", []);
	myApp.controller("MyController", function MyController($scope){ 
		$scope.sample_det = [
		
		{'url' : 'S29536P34656D1380Z6N138M225ILDD5915145.png','BRNCODE' : '1','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPCODE' : '29536','SUPNAME' : 'RICHHPAL RAM PRAMOD KUMAR','CTYNAME' : 'KOLKATTA','PRDCODE' : '34656','ITMDESG' : '1380','NETRATE' : '138','RATE' : '225','ITMCODE' : 'LDD5915145','PRODUCT_NAME' : '29536-BOYS B/SUIT WASH','ival' : '1'},
		{'url' : 'S23572P15485D1771Z1N295M475ILEC9545479.png','BRNCODE' : '1','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPCODE' : '23572','SUPNAME' : 'C.M.CLOTHING CO','CTYNAME' : 'INDORE','PRDCODE' : '15485','ITMDESG' : '1771','NETRATE' : '295','RATE' : '475','ITMCODE' : 'LEC9545479','PRODUCT_NAME' : '23572-BABA SUIT FANCY','ival' : '2'},
		{'url' : 'S23615P14824D2900Z3N290M495ILFD6601467.png','BRNCODE' : '1','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPCODE' : '23615','SUPNAME' : 'K.ARVIND KUMAR','CTYNAME' : 'AHMEDABAD','PRDCODE' : '14824','ITMDESG' : '2900','NETRATE' : '290','RATE' : '495','ITMCODE' : 'LFD6601467','PRODUCT_NAME' : '23615-BABA SUIT PRINT','ival' : '3'},
		{'url' : 'S36364P100454D5950Z3N340M595ILGE2671134.png','BRNCODE' : '1','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPCODE' : '36364','SUPNAME' : 'HASANA CREATION','CTYNAME' : 'DINDIGUL','PRDCODE' : '100454','ITMDESG' : '5950','NETRATE' : '340','RATE' : '595','ITMCODE' : 'LGE2671134','PRODUCT_NAME' : '36364-BABA SUIT O/C','ival' : '4'},
		{'url' : 'S36364P100454D5950Z2N340M595ILGE2670465.png','BRNCODE' : '1','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPCODE' : '36364','SUPNAME' : 'HASANA CREATION','CTYNAME' : 'DINDIGUL','PRDCODE' : '100454','ITMDESG' : '5950','NETRATE' : '340','RATE' : '595','ITMCODE' : 'LGE2670465','PRODUCT_NAME' : '36364-BABA SUIT O/C','ival' : '5'},
		{'url' : 'S36364P100454D5950Z5N340M595ILGE2671431.png','BRNCODE' : '1','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPCODE' : '36364','SUPNAME' : 'HASANA CREATION','CTYNAME' : 'DINDIGUL','PRDCODE' : '100454','ITMDESG' : '5950','NETRATE' : '340','RATE' : '595','ITMCODE' : 'LGE2671431','PRODUCT_NAME' : '36364-BABA SUIT O/C','ival' : '6'},
		{'url' : 'S36364P100454D5950Z1N340M595ILGE2670396.png','BRNCODE' : '1','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPCODE' : '36364','SUPNAME' : 'HASANA CREATION','CTYNAME' : 'DINDIGUL','PRDCODE' : '100454','ITMDESG' : '5950','NETRATE' : '340','RATE' : '595','ITMCODE' : 'LGE2670396','PRODUCT_NAME' : '36364-BABA SUIT O/C','ival' : '7'},
		{'url' : 'S36364P100454D5950Z5N340M595ILGE2671389.png','BRNCODE' : '1','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPCODE' : '36364','SUPNAME' : 'HASANA CREATION','CTYNAME' : 'DINDIGUL','PRDCODE' : '100454','ITMDESG' : '5950','NETRATE' : '340','RATE' : '595','ITMCODE' : 'LGE2671389','PRODUCT_NAME' : '36364-BABA SUIT O/C','ival' : '8'},
		{'url' : 'S36364P100454D5950Z4N340M595ILGE2671329.png','BRNCODE' : '1','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPCODE' : '36364','SUPNAME' : 'HASANA CREATION','CTYNAME' : 'DINDIGUL','PRDCODE' : '100454','ITMDESG' : '5950','NETRATE' : '340','RATE' : '595','ITMCODE' : 'LGE2671329','PRODUCT_NAME' : '36364-BABA SUIT O/C','ival' : '9'},
		{'url' : 'S36364P100454D5950Z3N340M595ILGE2671120.png','BRNCODE' : '1','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPCODE' : '36364','SUPNAME' : 'HASANA CREATION','CTYNAME' : 'DINDIGUL','PRDCODE' : '100454','ITMDESG' : '5950','NETRATE' : '340','RATE' : '595','ITMCODE' : 'LGE2671120','PRODUCT_NAME' : '36364-BABA SUIT O/C','ival' : '10'},
		]
		$scope.sample1 = [{'SECTION':'BUBLEE BABA SUIT'},]
		$scope.sample = [
		]
		
		 $scope.view = function(prd,desnum,ival,type) {
		var brn=document.getElementById('sel_brn').value
		
		var chk1 =prd +'/'+ desnum +'/'+ ival +'/'+ 377 +'/'+ type;
		var w = 1500;var h = 800;var left = Number((screen.width/2)-(w/2)); var tops = Number((screen.height/2)-(h/2));
		window.open('sales_prd_detail.php?num='+chk1+'&brn='+brn, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+tops+', left='+left);
		 };
		 });
		