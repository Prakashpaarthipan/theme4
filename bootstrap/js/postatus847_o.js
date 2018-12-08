var myApp2 = angular.module("myApp2", []);
	myApp2.controller("MyController2", function MyController2($scope){ 
		$scope.tomorrow  = [{"srno" : "1", "G_Srno" : "17", "Grpname" : "FANCY ART SAREES", "Seccode" : "59", "Secsrno" : "36", "Secname" : "FANCY ART SAREES(SLM)", "Supcode" : "7330", "Supname" : "SRI MENAKA FABRICS", "Ctyname" : "JALAKANDAPURAM", "Poryear" : "2015-16", "Pornumb" : "36482", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "10/09/2015", "POREDDT" : "14/09/2015", "Diff" : "8", "Typ" : "O", "EmpDet" : "1599-LIYAKATHALI M ", "pormode" : "R", "OrdQ" : "170", "OrdPV" : ".76", "OrdSV" : "1.08", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "170", "PENPV" : ".76", "PENSV" : "1.08"},
		{"srno" : "2", "G_Srno" : "17", "Grpname" : "FANCY ART SAREES", "Seccode" : "59", "Secsrno" : "36", "Secname" : "FANCY ART SAREES(SLM)", "Supcode" : "7146", "Supname" : "SIVA SILK TRADERS", "Ctyname" : "OMALUR", "Poryear" : "2015-16", "Pornumb" : "51874", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "17/09/2015", "POREDDT" : "21/09/2015", "Diff" : "1", "Typ" : "O", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "274", "OrdPV" : "1.83", "OrdSV" : "2.88", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "274", "PENPV" : "1.83", "PENSV" : "2.88"},
		]
		$scope.getTotal = function(){
			var total1 = 0;
			var total2 = 0;
			var total3 = 0;
			var total4 = 0;
			var total5 = 0;
			var total6 = 0;
			for(var i = 0; i < $scope.tomorrow.length; i++){
				var ordqt = $scope.tomorrow[i]["OrdQ"];
				var ordvval = $scope.tomorrow[i]["OrdSV"];
				var resqt = $scope.tomorrow[i]["RecQ"];
				var resvval = $scope.tomorrow[i]["RecSV"];
				var penqt = $scope.tomorrow[i]["PENQ"];
				var penval = $scope.tomorrow[i]["PENSV"];
				
				total1 = +total1 + +ordqt;
				total2 = +total2 + +ordvval;
				total3 = +total3 + +resqt;
				total4 = +total4 + +resvval;
				total5 = +total5 + +penqt;
				total6 = +total6 + +penval;
				
			}
			total = total1+"@"+total2.toFixed(2)+"@"+total3+"@"+total4.toFixed(2)+"@"+total5+"@"+total6.toFixed(2);
			 //var values = value.split(",")
			//alert(total);
			return total;
		}
		});
		angular.element(document).ready(function() {
		angular.bootstrap(document.getElementById('App2'),['myApp2']);
		});