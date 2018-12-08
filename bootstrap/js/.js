var myApp = angular.module("myApp", []);
	myApp.controller("MyController", function MyController($scope){ 
		$scope.sample_det = [
		{'url' : 'S18697P4328D6Z0N5200M7995IHLA9507913.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '18697','PRDCODE' : '4328','ITMDESG' : '6','ITMSIZE' : '0','NETRATE' : '5200','RATE' : '7995','ITMCODE' : 'HLA9507913','PRODUCT_NAME' : '','ival' : '1'},
		{'url' : 'S18697P4328D10Z0N5200M7995IHLA9507917.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '18697','PRDCODE' : '4328','ITMDESG' : '10','ITMSIZE' : '0','NETRATE' : '5200','RATE' : '7995','ITMCODE' : 'HLA9507917','PRODUCT_NAME' : '','ival' : '2'},
		{'url' : 'S18697P4328D12Z0N5200M7995IHLA9507919.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '18697','PRDCODE' : '4328','ITMDESG' : '12','ITMSIZE' : '0','NETRATE' : '5200','RATE' : '7995','ITMCODE' : 'HLA9507919','PRODUCT_NAME' : '','ival' : '3'},
		{'url' : 'S7593P4328D23Z0N9800M11995IHLC9799639.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4328','ITMDESG' : '23','ITMSIZE' : '0','NETRATE' : '9800','RATE' : '11995','ITMCODE' : 'HLC9799639','PRODUCT_NAME' : '','ival' : '4'},
		{'url' : 'S7593P4328D24Z0N7500M11995IHLC9799640.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4328','ITMDESG' : '24','ITMSIZE' : '0','NETRATE' : '7500','RATE' : '11995','ITMCODE' : 'HLC9799640','PRODUCT_NAME' : '','ival' : '5'},
		{'url' : 'S7593P4537D20Z0N8550M13995IHLC9799636.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4537','ITMDESG' : '20','ITMSIZE' : '0','NETRATE' : '8550','RATE' : '13995','ITMCODE' : 'HLC9799636','PRODUCT_NAME' : '','ival' : '6'},
		{'url' : 'S23238P55027D1Z0N14995M14995IHLA9365086.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '23238','PRDCODE' : '55027','ITMDESG' : '1','ITMSIZE' : '0','NETRATE' : '14995','RATE' : '14995','ITMCODE' : 'HLA9365086','PRODUCT_NAME' : '','ival' : '7'},
		{'url' : 'S7593P4606D3Z0N9700M16995IHLC9799616.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4606','ITMDESG' : '3','ITMSIZE' : '0','NETRATE' : '9700','RATE' : '16995','ITMCODE' : 'HLC9799616','PRODUCT_NAME' : '','ival' : '8'},
		{'url' : 'S7593P4328D17Z0N10900M16995IHLC9799633.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4328','ITMDESG' : '17','ITMSIZE' : '0','NETRATE' : '10900','RATE' : '16995','ITMCODE' : 'HLC9799633','PRODUCT_NAME' : '','ival' : '9'},
		{'url' : 'S7593P4328D18Z0N10600M16995IHLC9799634.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4328','ITMDESG' : '18','ITMSIZE' : '0','NETRATE' : '10600','RATE' : '16995','ITMCODE' : 'HLC9799634','PRODUCT_NAME' : '','ival' : '10'},
		{'url' : 'S7593P4783D1Z0N10600M17995IHLC9799614.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4783','ITMDESG' : '1','ITMSIZE' : '0','NETRATE' : '10600','RATE' : '17995','ITMCODE' : 'HLC9799614','PRODUCT_NAME' : '','ival' : '11'},
		{'url' : 'S7593P4328D14Z0N11600M17995IHLC9799630.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4328','ITMDESG' : '14','ITMSIZE' : '0','NETRATE' : '11600','RATE' : '17995','ITMCODE' : 'HLC9799630','PRODUCT_NAME' : '','ival' : '12'},
		{'url' : 'S7593P4783D2Z0N12150M19995IHLC9799615.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4783','ITMDESG' : '2','ITMSIZE' : '0','NETRATE' : '12150','RATE' : '19995','ITMCODE' : 'HLC9799615','PRODUCT_NAME' : '','ival' : '13'},
		{'url' : 'S7593P4328D21Z0N15700M24995IHLC9799637.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4328','ITMDESG' : '21','ITMSIZE' : '0','NETRATE' : '15700','RATE' : '24995','ITMCODE' : 'HLC9799637','PRODUCT_NAME' : '','ival' : '14'},
		{'url' : 'S7145P4783D272Z0N15200M24995IIAA0003871.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7145','PRDCODE' : '4783','ITMDESG' : '272','ITMSIZE' : '0','NETRATE' : '15200','RATE' : '24995','ITMCODE' : 'IAA0003871','PRODUCT_NAME' : '','ival' : '15'},
		{'url' : 'S7145P4783D272Z0N15200M24995IIAA0003872.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7145','PRDCODE' : '4783','ITMDESG' : '272','ITMSIZE' : '0','NETRATE' : '15200','RATE' : '24995','ITMCODE' : 'IAA0003872','PRODUCT_NAME' : '','ival' : '16'},
		{'url' : 'S7145P4783D272Z0N15200M24995IIAA0003873.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7145','PRDCODE' : '4783','ITMDESG' : '272','ITMSIZE' : '0','NETRATE' : '15200','RATE' : '24995','ITMCODE' : 'IAA0003873','PRODUCT_NAME' : '','ival' : '17'},
		{'url' : 'S7145P4783D272Z0N15200M24995IIAA0003874.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7145','PRDCODE' : '4783','ITMDESG' : '272','ITMSIZE' : '0','NETRATE' : '15200','RATE' : '24995','ITMCODE' : 'IAA0003874','PRODUCT_NAME' : '','ival' : '18'},
		{'url' : 'S7593P4328D16Z0N16600M26995IHLC9799632.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4328','ITMDESG' : '16','ITMSIZE' : '0','NETRATE' : '16600','RATE' : '26995','ITMCODE' : 'HLC9799632','PRODUCT_NAME' : '','ival' : '19'},
		{'url' : 'S7145P4796D256Z0N16500M27995IIAA0003875.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7145','PRDCODE' : '4796','ITMDESG' : '256','ITMSIZE' : '0','NETRATE' : '16500','RATE' : '27995','ITMCODE' : 'IAA0003875','PRODUCT_NAME' : '','ival' : '20'},
		{'url' : 'S7145P4512D223Z0N23800M42995IIAA0043713.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7145','PRDCODE' : '4512','ITMDESG' : '223','ITMSIZE' : '0','NETRATE' : '23800','RATE' : '42995','ITMCODE' : 'IAA0043713','PRODUCT_NAME' : '','ival' : '21'},
		{'url' : 'S7145P4512D223Z0N23800M42995IIAA0043714.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7145','PRDCODE' : '4512','ITMDESG' : '223','ITMSIZE' : '0','NETRATE' : '23800','RATE' : '42995','ITMCODE' : 'IAA0043714','PRODUCT_NAME' : '','ival' : '22'},
		{'url' : 'S7145P4512D247Z0N23800M42995IIAA0043712.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7145','PRDCODE' : '4512','ITMDESG' : '247','ITMSIZE' : '0','NETRATE' : '23800','RATE' : '42995','ITMCODE' : 'IAA0043712','PRODUCT_NAME' : '','ival' : '23'},
		{'url' : 'S7593P4512D22Z0N37000M57995IHLC9799638.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7593','PRDCODE' : '4512','ITMDESG' : '22','ITMSIZE' : '0','NETRATE' : '37000','RATE' : '57995','ITMCODE' : 'HLC9799638','PRODUCT_NAME' : '','ival' : '24'},
		{'url' : 'S7145P4512D248Z0N32500M59995IIAA0043489.png','BRNCODE' : '','ENTYEAR' : '','ENTNUMB' : '','ENTSRNO' : '','SUPPLIER' : '7145','PRDCODE' : '4512','ITMDESG' : '248','ITMSIZE' : '0','NETRATE' : '32500','RATE' : '59995','ITMCODE' : 'IAA0043489','PRODUCT_NAME' : '','ival' : '25'},
		]
		$scope.sample = [
		{'url' : 'bran_images/P4328D10.png','BRNCODE' : '1','PRDCODE' : '4328','ITMDESG' : '10','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '1'},
		{'url' : 'bran_images/P4328D12.png','BRNCODE' : '1','PRDCODE' : '4328','ITMDESG' : '12','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '2'},
		{'url' : 'bran_images/P4328D14.png','BRNCODE' : '1','PRDCODE' : '4328','ITMDESG' : '14','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '3'},
		{'url' : 'bran_images/P4328D16.png','BRNCODE' : '1','PRDCODE' : '4328','ITMDESG' : '16','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '4'},
		{'url' : 'bran_images/P4328D17.png','BRNCODE' : '1','PRDCODE' : '4328','ITMDESG' : '17','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '5'},
		{'url' : 'bran_images/P4328D18.png','BRNCODE' : '1','PRDCODE' : '4328','ITMDESG' : '18','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '6'},
		{'url' : 'bran_images/P4328D21.png','BRNCODE' : '1','PRDCODE' : '4328','ITMDESG' : '21','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '7'},
		{'url' : 'bran_images/P4328D23.png','BRNCODE' : '1','PRDCODE' : '4328','ITMDESG' : '23','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '8'},
		{'url' : 'bran_images/P4328D24.png','BRNCODE' : '1','PRDCODE' : '4328','ITMDESG' : '24','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '9'},
		{'url' : 'bran_images/P4328D6.png','BRNCODE' : '1','PRDCODE' : '4328','ITMDESG' : '6','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '10'},
		{'url' : 'bran_images/P4512D22.png','BRNCODE' : '1','PRDCODE' : '4512','ITMDESG' : '22','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '11'},
		{'url' : 'bran_images/P4512D223.png','BRNCODE' : '1','PRDCODE' : '4512','ITMDESG' : '223','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '2','iv' : '12'},
		{'url' : 'bran_images/P4512D247.png','BRNCODE' : '1','PRDCODE' : '4512','ITMDESG' : '247','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '13'},
		{'url' : 'bran_images/P4512D248.png','BRNCODE' : '1','PRDCODE' : '4512','ITMDESG' : '248','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '14'},
		{'url' : 'bran_images/P4537D20.png','BRNCODE' : '1','PRDCODE' : '4537','ITMDESG' : '20','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '15'},
		{'url' : 'bran_images/P4606D3.png','BRNCODE' : '1','PRDCODE' : '4606','ITMDESG' : '3','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '16'},
		{'url' : 'bran_images/P4783D1.png','BRNCODE' : '1','PRDCODE' : '4783','ITMDESG' : '1','PRODUCT_NAME' : 'SWAROVSKI ELEMENTS WORK','TOTAL_CNT' : '1','iv' : '17'},
		{'url' : 'bran_images/P4783D2.png','BRNCODE' : '1','PRDCODE' : '4783','ITMDESG' : '2','PRODUCT_NAME' : 'D/S COLOURS JAKKARD','TOTAL_CNT' : '1','iv' : '18'},
		{'url' : 'bran_images/P4783D272.png','BRNCODE' : '1','PRDCODE' : '4783','ITMDESG' : '272','PRODUCT_NAME' : 'D/S COLOURS JAKKARD','TOTAL_CNT' : '4','iv' : '19'},
		{'url' : 'bran_images/P4796D256.png','BRNCODE' : '1','PRDCODE' : '4796','ITMDESG' : '256','PRODUCT_NAME' : 'D/S COLOURS JAKKARD','TOTAL_CNT' : '1','iv' : '20'},
		{'url' : 'bran_images/P55027D1.png','BRNCODE' : '1','PRDCODE' : '55027','ITMDESG' : '1','PRODUCT_NAME' : 'D/S COLOURS JAKKARD','TOTAL_CNT' : '1','iv' : '21'},
		]
		 $scope.view = function(brn,prd,desnum,ival) {
		
		
		var chk1 = brn +'/'+  prd +'/'+ desnum +'/'+ ival +'/'+ 21;
		
		window.open('product_detail_1.php?num='+chk1, 'name', 'width=1800, height=900');
		 };
		});
		