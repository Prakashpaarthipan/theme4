var myApp1 = angular.module("myApp1", []);
	myApp1.controller("MyController1", function MyController1($scope){ 
		$scope.today = [{"srno" : "1", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "30237", "Supname" : "SANGHVI DRESSES", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "11581", "Pordisc" : "6", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "24/06/2015", "POREDDT" : "28/06/2015", "Diff" : "86", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "1458", "OrdPV" : "7.1", "OrdSV" : "11.59", "RecQ" : "972", "RecPV" : "4.75", "RecSV" : "7.73", "PENQ" : "486", "PENPV" : "2.36", "PENSV" : "3.86"},
		{"srno" : "2", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "24580", "Supname" : "S.MONI", "Ctyname" : "KOLKATTA", "Poryear" : "2015-16", "Pornumb" : "12282", "Pordisc" : "10", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "28/06/2015", "POREDDT" : "02/07/2015", "Diff" : "82", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "1575", "OrdPV" : "8.47", "OrdSV" : "12.52", "RecQ" : "1212", "RecPV" : "6.52", "RecSV" : "9.64", "PENQ" : "363", "PENPV" : "1.95", "PENSV" : "2.89"},
		{"srno" : "3", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "31553", "Supname" : "M.S.GARMENTS", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "36632", "Pordisc" : "5", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "10/08/2015", "POREDDT" : "14/08/2015", "Diff" : "39", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "312", "OrdPV" : ".89", "OrdSV" : "1.45", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "312", "PENPV" : ".89", "PENSV" : "1.45"},
		{"srno" : "4", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "31554", "Supname" : "NEW BENZER DRESSES", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "36512", "Pordisc" : "3", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "10/08/2015", "POREDDT" : "14/08/2015", "Diff" : "39", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "189", "OrdPV" : ".4", "OrdSV" : ".66", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "189", "PENPV" : ".4", "PENSV" : ".66"},
		{"srno" : "5", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "31806", "Supname" : "NAVRANG GARMENT", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "36411", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "10/08/2015", "POREDDT" : "14/08/2015", "Diff" : "39", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "189", "OrdPV" : ".44", "OrdSV" : ".76", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "189", "PENPV" : ".44", "PENSV" : ".76"},
		{"srno" : "6", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "25528", "Supname" : "DREAM COLLECTION", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "36809", "Pordisc" : "5", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "11/08/2015", "POREDDT" : "15/08/2015", "Diff" : "38", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "339", "OrdPV" : ".92", "OrdSV" : "1.54", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "339", "PENPV" : ".92", "PENSV" : "1.54"},
		{"srno" : "7", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "24305", "Supname" : "KAJOL DRESSES PVT.LTD", "Ctyname" : "KOLKATTA", "Poryear" : "2015-16", "Pornumb" : "39864", "Pordisc" : "10", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "19/08/2015", "POREDDT" : "23/08/2015", "Diff" : "30", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "450", "OrdPV" : "1.78", "OrdSV" : "2.68", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "450", "PENPV" : "1.78", "PENSV" : "2.68"},
		{"srno" : "8", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "24668", "Supname" : "MANISH DRESSES", "Ctyname" : "INDORE", "Poryear" : "2015-16", "Pornumb" : "39900", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "19/08/2015", "POREDDT" : "23/08/2015", "Diff" : "30", "Typ" : "T", "EmpDet" : "1368-SENTHILNATHAN T", "pormode" : "R", "OrdQ" : "2100", "OrdPV" : "2.18", "OrdSV" : "3.5", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "2100", "PENPV" : "2.18", "PENSV" : "3.5"},
		{"srno" : "9", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "28200", "Supname" : "GURIA FASHION", "Ctyname" : "KOLKATTA", "Poryear" : "2015-16", "Pornumb" : "39888", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "19/08/2015", "POREDDT" : "23/08/2015", "Diff" : "30", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "1440", "OrdPV" : "3.67", "OrdSV" : "6.12", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "1440", "PENPV" : "3.67", "PENSV" : "6.12"},
		{"srno" : "10", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "29345", "Supname" : "K.TUTUL DRESSES", "Ctyname" : "KOLKATTA", "Poryear" : "2015-16", "Pornumb" : "39892", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "19/08/2015", "POREDDT" : "23/08/2015", "Diff" : "30", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "1440", "OrdPV" : "2.88", "OrdSV" : "4.97", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "1440", "PENPV" : "2.88", "PENSV" : "4.97"},
		{"srno" : "11", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "26979", "Supname" : "DYNESTY", "Ctyname" : "KOLKATTA", "Poryear" : "2015-16", "Pornumb" : "33872", "Pordisc" : "15", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "20/08/2015", "POREDDT" : "24/08/2015", "Diff" : "29", "Typ" : "T", "EmpDet" : "1368-SENTHILNATHAN T", "pormode" : "A", "OrdQ" : "780", "OrdPV" : ".94", "OrdSV" : "1.52", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "780", "PENPV" : ".94", "PENSV" : "1.52"},
		{"srno" : "12", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "28252", "Supname" : "NEYA APPARELS", "Ctyname" : "RAJAPALAYAM", "Poryear" : "2015-16", "Pornumb" : "33874", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "20/08/2015", "POREDDT" : "24/08/2015", "Diff" : "29", "Typ" : "T", "EmpDet" : "-", "pormode" : "A", "OrdQ" : "180", "OrdPV" : ".17", "OrdSV" : ".26", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "180", "PENPV" : ".17", "PENSV" : ".26"},
		{"srno" : "13", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "31712", "Supname" : "EVERYTHING LABLE IND (M&M EUDORA DRESS)", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "26770", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "26/08/2015", "POREDDT" : "30/08/2015", "Diff" : "23", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "210", "OrdPV" : "1.69", "OrdSV" : "3.38", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "210", "PENPV" : "1.69", "PENSV" : "3.38"},
		{"srno" : "14", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "31713", "Supname" : "EVERYTHING LABLE IND ( G.L FROCK )", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "25699", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "26/08/2015", "POREDDT" : "30/08/2015", "Diff" : "23", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "240", "OrdPV" : ".59", "OrdSV" : "1.19", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "240", "PENPV" : ".59", "PENSV" : "1.19"},
		{"srno" : "15", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "22671", "Supname" : "VINI ART", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "30322", "Pordisc" : "5", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "27/08/2015", "POREDDT" : "31/08/2015", "Diff" : "22", "Typ" : "T", "EmpDet" : "1368-SENTHILNATHAN T", "pormode" : "R", "OrdQ" : "1280", "OrdPV" : "5.47", "OrdSV" : "8.9", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "1280", "PENPV" : "5.47", "PENSV" : "8.9"},
		{"srno" : "16", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "26965", "Supname" : "R.J.M.DRESSES", "Ctyname" : "KOLKATTA", "Poryear" : "2015-16", "Pornumb" : "33458", "Pordisc" : "10", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "03/09/2015", "POREDDT" : "07/09/2015", "Diff" : "15", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "390", "OrdPV" : ".64", "OrdSV" : ".96", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "390", "PENPV" : ".64", "PENSV" : ".96"},
		{"srno" : "17", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "30123", "Supname" : "MISBAHI", "Ctyname" : "KOLKATTA", "Poryear" : "2015-16", "Pornumb" : "33472", "Pordisc" : "15", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "03/09/2015", "POREDDT" : "07/09/2015", "Diff" : "15", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "1170", "OrdPV" : "4.78", "OrdSV" : "6.75", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "1170", "PENPV" : "4.78", "PENSV" : "6.75"},
		{"srno" : "18", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "30723", "Supname" : "PRITI PRODUCTS", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "45831", "Pordisc" : "5", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "03/09/2015", "POREDDT" : "07/09/2015", "Diff" : "15", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "925", "OrdPV" : "10.46", "OrdSV" : "16.9", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "925", "PENPV" : "10.46", "PENSV" : "16.9"},
		{"srno" : "19", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "25926", "Supname" : "LITTLE DOLL (CHILDREN WEAR)", "Ctyname" : "KOLKATTA", "Poryear" : "2015-16", "Pornumb" : "42776", "Pordisc" : "12", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "04/09/2015", "POREDDT" : "08/09/2015", "Diff" : "14", "Typ" : "T", "EmpDet" : "-", "pormode" : "A", "OrdQ" : "18", "OrdPV" : ".03", "OrdSV" : ".04", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "18", "PENPV" : ".03", "PENSV" : ".04"},
		{"srno" : "20", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "30723", "Supname" : "PRITI PRODUCTS", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "45834", "Pordisc" : "5", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "05/09/2015", "POREDDT" : "09/09/2015", "Diff" : "13", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "175", "OrdPV" : "2.22", "OrdSV" : "3.49", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "175", "PENPV" : "2.22", "PENSV" : "3.49"},
		{"srno" : "21", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "14471", "Supname" : "GANESHDAS SHYAMLAL", "Ctyname" : "KOLKATTA", "Poryear" : "2015-16", "Pornumb" : "34782", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "06/09/2015", "POREDDT" : "10/09/2015", "Diff" : "12", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "1200", "OrdPV" : "1.74", "OrdSV" : "2.94", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "1200", "PENPV" : "1.74", "PENSV" : "2.94"},
		{"srno" : "22", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "24668", "Supname" : "MANISH DRESSES", "Ctyname" : "INDORE", "Poryear" : "2015-16", "Pornumb" : "34612", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "06/09/2015", "POREDDT" : "10/09/2015", "Diff" : "12", "Typ" : "T", "EmpDet" : "1368-SENTHILNATHAN T", "pormode" : "R", "OrdQ" : "810", "OrdPV" : ".93", "OrdSV" : "1.58", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "810", "PENPV" : ".93", "PENSV" : "1.58"},
		{"srno" : "23", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "25528", "Supname" : "DREAM COLLECTION", "Ctyname" : "MUMBAI", "Poryear" : "2015-16", "Pornumb" : "34763", "Pordisc" : "5", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "06/09/2015", "POREDDT" : "10/09/2015", "Diff" : "12", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "900", "OrdPV" : "2.49", "OrdSV" : "4.1", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "900", "PENPV" : "2.49", "PENSV" : "4.1"},
		{"srno" : "24", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "26910", "Supname" : "ANNS", "Ctyname" : "KERALA", "Poryear" : "2015-16", "Pornumb" : "34613", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "07/09/2015", "POREDDT" : "11/09/2015", "Diff" : "11", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "5", "OrdPV" : ".22", "OrdSV" : ".39", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "5", "PENPV" : ".22", "PENSV" : ".39"},
		{"srno" : "25", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "14527", "Supname" : "SAURABH ENTERPRISES", "Ctyname" : "INDORE", "Poryear" : "2015-16", "Pornumb" : "35648", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "08/09/2015", "POREDDT" : "12/09/2015", "Diff" : "10", "Typ" : "T", "EmpDet" : "1368-SENTHILNATHAN T", "pormode" : "R", "OrdQ" : "8000", "OrdPV" : "7.29", "OrdSV" : "10.32", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "8000", "PENPV" : "7.29", "PENSV" : "10.32"},
		{"srno" : "26", "G_Srno" : "2", "Grpname" : "GIRLS READYMADE", "Seccode" : "164", "Secsrno" : "113", "Secname" : "GIRLS RM FROCK", "Supcode" : "26968", "Supname" : "TOP LINE", "Ctyname" : "KOLKATTA", "Poryear" : "2015-16", "Pornumb" : "35556", "Pordisc" : "0", "Porspdc" : "0", "Porpcls" : "0", "despstat" : "N", "PORDEDT" : "08/09/2015", "POREDDT" : "12/09/2015", "Diff" : "10", "Typ" : "T", "EmpDet" : "-", "pormode" : "R", "OrdQ" : "1200", "OrdPV" : "3.72", "OrdSV" : "6.54", "RecQ" : "0", "RecPV" : "0", "RecSV" : "0", "PENQ" : "1200", "PENPV" : "3.72", "PENSV" : "6.54"},
		]
		$scope.getTotal = function(){
			var total1 = 0;
			var total2 = 0;
			var total3 = 0;
			var total4 = 0;
			var total5 = 0;
			var total6 = 0;
			for(var i = 0; i < $scope.today.length; i++){
				var ordqt = $scope.today[i]["OrdQ"];
				var ordvval = $scope.today[i]["OrdSV"];
				var resqt = $scope.today[i]["RecQ"];
				var resvval = $scope.today[i]["RecSV"];
				var penqt = $scope.today[i]["PENQ"];
				var penval = $scope.today[i]["PENSV"];
				
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
		angular.bootstrap(document.getElementById('App1'),['myApp1']);
		});