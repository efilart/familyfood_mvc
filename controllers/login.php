<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Login extends CI_Controller {
	protected $SESSION_FLOW_2_CODES = array(
		"1_1" => 'NI-1.1 10633', 
		"1_2" => 'NI-1.2 10634', 
		"1_3" => 'NI-1.3 10635', 
		"1_4" => 'NI-1.4 10636', 
		"1_5" => 'NI-1.5 10637', 
		"2_1" => 'NI-2.1 10639', 
		"2_2" => 'NI-2.2 10640', 
		"2_3" => 'NI-2.3 10641', 
		"2_4" => 'NI-2.4 10642', 
		"2_5" => 'NI-2.5 11142', 
		"2_6" => 'NI-2.6 11143', 
		"2_7" => 'NI-2.7 10644', 
		"2_8" => 'NI-2.8 10645', 
		"2_9" => 'NI-2.9 11144', 
		"2_10" => 'NI-2.10 11145', 
		"2_11" => 'NI-2.11 10647', 
		"3_1" => 'NI-3.1 10649', 
		"3_2" => 'NI-3.2 10650', 
		"4_1_1" => 'NI-4.1.1 11077', 
		"4_1_2" => 'NI-4.1.2 11078', 
		"4_1_3" => 'NI-4.1.3 11080', 
		"4_1_4" => 'NI-4.1.4 11079', 
		"4_1_5" => 'NI-4.1.5 11076', 
		"4_2_1" => 'NI-4.2.1 11084', 
		"4_2_2" => 'NI-4.2.2 11085', 
		"4_2_3" => 'NI-4.2.3 11087', 
		"4_2_4" => 'NI-4.2.4 11086', 
		"4_2_5" => 'NI-4.2.5 11081', 
		"4_2_6" => 'NI-4.2.6 11083', 
		"4_2_7" => 'NI-4.2.7 11082', 
		"4_3" => 'NI-4.3 10654', 
		"5_1" => 'NI-5.1 10656', 
		"5_2" => 'NI-5.2 10658', 
		"5_3" => 'NI-5.3 10659', 
		"5_4" => 'NI-5.4 10660', 
		"5_5_1 10662" => 'NI-5.5.1 10662', 
		"5_5_2" => 'NI-5.5.2 10658', 
		"5_5_3" => 'NI-5.5.3 10854', 
		"5_6_1" => 'NI-5.6.1 10666', 
		"5_6_2" => 'NI-5.6.2 10667', 
		"5_6_3" => 'NI-5.6.3 10855', 
		"5_7_1" => 'NI-5.7.1 12007', 
		"5_8_1" => 'NI-5.8.1 10670', 
		"5_8_2" => 'NI-5.8.2 10671', 
		"5_8_3" => 'NI-5.8.3 10856', 
		"5_8_4" => 'NI-5.8.4 10673"&gt;', 
		"5_8_5" => 'NI-5.8.5 10675', 
		"5_8_6" => 'NI-5.8.6 10676', 
		"5_9_1_1" => '(1) 10679', 
		"5_9_1_2" => '(2) 10680', 
		"5_9_1_3" => '(3) 10681', 
		"5_9_1_4" => '(4) 10682', 
		"5_9_1_5" => '(5) 10683', 
		"5_9_1_6" => '(6) 10684', 
		"5_9_1_7" => '(7) 10685', 
		"5_9_1_8" => '(8) 10686', 
		"5_9_1_9" => '(9) 10687', 
		"5_9_1_10" => '(10) 10688', 
		"5_9_1_11" => '(11) 10689', 
		"5_9_1_12" => '3 10690', 
		"5_9_1_13" => '(13) 10691', 
		"5_9_2_2" => '(1) 10694', 
		"5_9_2_3" => '(2) 10695', 
		"5_9_2_4" => '(3) 10696', 
		"5_9_2_5" => '(4) 10697', 
		"5_9_2_6" => '(5) 10698', 
		"5_9_2_7" => '(6) 10699', 
		"5_9_2_8" => '(7) 10700', 
		"5_9_2_9" => '(8) 10701', 
		"5_9_2_10" => '(9) 10702', 
		"5_9_2_11" => '(10) 10703', 
		"5_9_2_12" => '(11) 10704', 
		"5_9_2_13" => '(12) 10705', 
		"5_9_2_14" => '(13) 10706', 
		"5_10_1_1" => '(1) 10710', 
		"5_10_1_2" => '(2) 10711', 
		"5_10_1_3" => '(3) 10712', 
		"5_10_1_4" => '(4) 10713', 
		"5_10_1_5" => '(5) 10714', 
		"5_10_1_6" => '(6) 10715', 
		"5_10_1_7" => '(7) 10716', 
		"5_10_1_8" => '(8) 10717', 
		"5_10_1_9" => '(9) 10718', 
		"5_10_1_10" => '(10) 10719', 
		"5_10_1_11" => '(11) 10720', 
		"5_10_1_12" => '(12) 10721', 
		"5_10_1_13" => '(13) 10722', 
		"5_10_1_14" => '(14) 10723', 
		"5_10_1_15" => '(15) 10724', 
		"5_10_1_16" => '(16) 10725', 
		"5_10_1_17" => '(17) 10726', 
		"5_10_1_18" => '(18) 10727', 
		"5_10_2_1" => '(1) 10730', 
		"5_10_2_2" => '(2) 10731', 
		"5_10_2_3" => '(3) 10732', 
		"5_10_2_4" => '(4) 10733', 
		"5_10_2_5" => '(5) 10734', 
		"5_10_2_6" => '(6) 10735', 
		"5_10_2_7" => '(7) 10736', 
		"5_10_2_8" => '(8) 10737', 
		"5_10_2_9" => '(9) 10738', 
		"5_10_2_10" => '(10) 10739', 
		"5_10_2_11" => '(11) 10740', 
		"5_10_2_12" => '(12) 10741', 
		"5_10_2_13" => '(13) 10742', 
		"5_10_2_14" => '(14) 10743', 
		"5_10_2_15" => '(15) 10744', 
		"5_10_2_16" => '(16) 10745', 
		"5_10_2_17" => '(17) 10746', 
		"5_10_2_18" => '(18) 10747', 
		"5_11_1" => 'NI-5.11.1 10750', 
		"5_11_2" => 'NI-5.11.2 10751', 
		"NC_1_1" => 'NC-1.1 10754', 
		"NC_1_2" => 'NC-1.2 10755', 
		"NC_1_3" => 'NC-1.3 10756', 
		"NC_1_4" => 'NC-1.4 10757', 
		"NC_1_5" => 'NC-1.5 11146', 
		"NC_2_1" => 'NC-2.1 10759', 
		"NC_2_2" => 'NC-2.2 10760', 
		"NC_2_3" => 'NC-2.3 10761', 
		"NC_2_4" => 'NC-2.4 10762', 
		"NC_3_1" => 'NC-3.1 10764', 
		"NC_3_2" => 'NC-3.2 10765', 
		"NC_3_3_1" => 'NC-3.3.1 10767', 
		"NC_3_3_2" => 'NC-3.3.2 10768', 
		"NC_3_3_3" => 'NC-3.3.3 10769', 
		"NC_3_3_4" => 'NC-3.3.4 10818', 
		"NC_3_3_5" => 'NC-3.3.5 10819', 
		"NC_3_4" => 'NC-3.4 10770', 
		"NC_3_5" => 'NC-3.5 10802', 
		"NC_3_6" => 'NC-3.6 10803', 
		"NC_4_1_1" => 'NC-4.1.1 11130', 
		"NC_4_1_2" => 'NC-4.1.2 11131', 
		"NC_4_1_3" => 'NC-4.1.3 11132', 
		"NB_1_1" => 'NB-1.1 10773', 
		"NB_1_2" => 'NB-1.2 10857', 
		"NB_1_3" => 'NB-1.3 10775', 
		"NB_1_4" => 'NB-1.4 10776', 
		"NB_1_5" => 'NB-1.5 10777', 
		"NB_1_6" => 'NB-1.6 10778', 
		"NB_1_7" => 'NB-1.7 10779', 
		"NB_2_1" => 'NB-2.1 10782', 
		"NB_2_2" => 'NB-2.2 10783', 
		"NB_2_3" => 'NB-2.3 10780', 
		"NB_2_4" => 'NB-2.4 10785', 
		"NB_2_5" => 'NB-2.5 10786', 
		"NB_2_6" => 'NB-2.6 10787', 
		"NB_3_1" => 'NB-3.1 10789', 
		"NB_3_2" => 'NB-3.2 12009', 
		"NB_3_3" => 'NB-3.3 10791', 
		"NB_3_4" => 'NB-3.4 12010', 
		"NO_1_1" => 'NO-1.1 10795'
	);

	protected $SESSION_FLOW_3_CODES = array(
		"1_1" => 'ND-1.1 10489', "1_2" => ' ', "1_2_1_1" => 'ND-1.2.1.1 10914', "1_2_1_2" => 'ND-1.2.1.2 10915', "1_2_1_3" => 'ND-1.2.1.3 10916', 
		"1_2_1_4" => 'ND-1.2.1.4 10865', "1_2_1_5" => 'ND-1.2.1.5 10866', "1_2_1_6" => 'ND-1.2.1.6 10867', "1_2_1_7" => 'ND-1.2.1.7 10868', 
		"1_2_2_1" => 'ND-1.2.2.1 10935', "1_2_2_2" => 'ND-1.2.2.2 10936', "1_2_3_1" => 'ND-1.2.3.1 10896', "1_2_3_2" => 'ND-1.2.3.2 10972', 
		"1_2_3_3" => 'ND-1.2.3.3 10973', "1_2_3_4" => 'ND-1.2.3.4 10999', "1_2_3_5" => 'ND-1.2.3.5.1 11027', "1_2_3_5_1" => 'ND-1.2.3.5.1 11027', 
		"1_2_3_6_1_1" => 'ND-1.2.3.6.1.1 10974', "1_2_3_6_1_2" => 'ND-1.2.3.6.1.2 10975', "1_2_3_6_2_1" => 'ND-1.2.3.6.2.1 10976', "1_2_3_6_2_2" => 'ND-1.2.3.6.2.2 10977', 
		"1_2_3_6_3_1" => 'ND-1.2.3.6.3.1 10978', "1_2_3_6_3_2" => 'ND-1.2.3.6.3.2 10979', "1_2_3_6_4" => 'ND-1.2.3.6.4 10980', "1_2_3_6_5_1" => 'ND-1.2.3.6.5.1 10981', 
		"1_2_3_6_5_2" => 'ND-1.2.3.6.5.2 10982', "1_2_3_6_6_1" => 'ND-1.2.3.6.6.1 10983', "1_2_3_6_6_2" => 'ND-1.2.3.6.6.2 10984', "1_2_3_6_7_1" => 'ND-1.2.3.6.7.1 10985', 
		"1_2_3_6_7_2" => 'ND-1.2.3.6.7.2 10986', "1_2_3_6_8_1" => 'ND-1.2.3.6.8.1 10987', "1_2_3_6_8_2" => 'ND-1.2.3.6.8.2 10988', "1_2_3_6_9_1" => 'ND-1.2.3.6.9.1 11971', 
		"1_2_3_6_9_2" => 'ND-1.2.3.6.9.2 10989', "1_2_3_6_10_1" => 'ND-1.2.3.6.10.1 10990', "1_2_3_6_10_2" => 'ND-1.2.3.6.10.2 10991', "1_2_3_6_11_1" => 'ND-1.2.3.6.11.1 10992', 
		"1_2_3_6_11_2" => 'ND-1.2.3.6.11.2 10993', "1_2_3_6_12" => 'ND-1.2.3.6.12 10994', "1_2_3_6_13_1" => 'ND-1.2.3.6.13.1 10995', "1_2_3_6_13_2" => 'ND-1.2.3.6.13.2 10996', 
		"1_2_3_6_14_1" => 'ND-1.2.3.6.14.1 10997', "1_2_3_6_14_2" => 'ND-1.2.3.6.14.2 10998', "1_2_4_1" => 'ND-1.2.4.1 10860', "1_2_4_2_1" => 'ND-1.2.4.2.1 11972', 
		"1_2_4_2_2" => 'ND-1.2.4.2.2 11973', "1_2_4_3_1" => 'ND-1.2.4.3.1 11974', "1_2_4_3_2" => 'ND-1.2.4.3.2 11975', "1_2_4_4_1" => 'ND-1.2.4.4.1 11976', 
		"1_2_4_4_2" => 'ND-1.2.4.4.2 10932', "1_2_4_5_1" => 'ND-1.2.4.5.1 11977', "1_2_4_5_2" => 'ND-1.2.4.5.2 10933', "1_2_4_6_1" => 'ND-1.2.4.6.1 11979', 
		"1_2_4_6_2" => 'ND-1.2.4.6.2 11980', "1_2_5_1" => 'ND-1.2.5.1 10937', "1_2_5_2" => 'ND-1.2.5.2 10938', "1_2_5_3_1" => 'ND-1.2.5.3.1 10939', 
		"1_2_5_3_2" => 'ND-1.2.5.3.2 10940', "1_2_5_4_1_1" => 'ND-1.2.5.4.1.1 11981', "1_2_5_4_2_1" => 'ND-1.2.5.4.2.1 11982', "1_2_5_5_1_1" => 'ND-1.2.5.5.1.1 10943', 
		"1_2_5_6_1" => 'ND-1.2.5.6.1 10944', "1_2_5_7_1_1" => 'ND-1.2.5.7.1.1 11985', "1_2_5_7_1_2" => 'ND-1.2.5.7.1.2 11986', "1_2_5_7_1_3" => 'ND-1.2.5.7.1.3 11987', 
		"1_2_5_7_2_1" => 'ND-1.2.5.7.2.1 11989', "1_2_5_7_2_2" => 'ND-1.2.5.7.2.2 11990', "1_2_5_7_2_3" => 'ND-1.2.5.7.2.3 11991', "1_2_5_8_1" => 'ND-1.2.5.8.1 11993', 
		"1_2_5_8_2" => 'ND-1.2.5.8.2 11994', "1_2_6_1" => 'ND-1.2.6.1 10934', "1_2_7_1" => 'ND-1.2.7.1 10945', "1_2_7_2" => 'ND-1.2.7.2 10946', 
		"1_2_7_3_1" => 'ND-1.2.7.3.1 10948', "1_2_7_3_2" => 'ND-1.2.7.3.2 10949', "1_2_7_4_1" => 'ND-1.2.7.4.1 10951', "1_2_7_4_2" => 'ND-1.2.7.4.2 10952', 
		"1_2_8_1" => 'ND-1.2.8.1 10874', "1_2_8_2" => 'ND-1.2.8.2 10873', "1_2_8_3" => 'ND-1.2.8.3 10876', "1_2_8_4" => 'ND-1.2.8.4 10877', 
		"1_2_9" => 'ND-1.2.9 10836', "1_2_10_1_1" => 'ND-1.2.10.1.1 11013', "1_2_10_1_2" => 'ND-1.2.10.1.2 11014', "1_2_10_2_1" => 'ND-1.2.10.2.1 11019', 
		"1_2_10_2_2" => 'ND-1.2.10.2.2 11020', "1_2_10_3_1" => 'ND-1.2.10.3.1 11021', "1_2_10_3_2" => 'ND-1.2.10.3.2 11022', "1_2_10_4_1" => 'ND-1.2.10.4.1 11023', 
		"1_2_10_4_2" => 'ND-1.2.10.4.2 11024', "1_2_10_5_1" => 'ND-1.2.10.5.1 11025', "1_2_10_5_2" => 'ND-1.2.10.5.2 11026', "1_2_10_6_1" => 'ND-1.2.10.6.1 11011', 
		"1_2_10_6_2" => 'ND-1.2.10.6.2 11012', "1_2_10_7_1" => 'ND-1.2.10.7.1 11009', "1_2_10_7_2" => 'ND-1.2.10.7.2 11010', "1_2_10_8_1" => 'ND-1.2.10.8.1 11005', 
		"1_2_10_8_2" => 'ND-1.2.10.8.2 11006', "1_2_10_9_1" => 'ND-1.2.10.9.1 11003', "1_2_10_9_2" => 'ND-1.2.10.9.2 11004', "1_2_10_10_1" => 'ND-1.2.10.10.1 11015', 
		"1_2_10_10_2" => 'ND-1.2.10.10.2 11016', "1_2_10_11_1" => 'ND-1.2.10.11.1 11017', "1_2_10_11_2" => 'ND-1.2.10.11.2 11018', "1_2_10_12_1" => 'ND-1.2.10.12.1 11007', 
		"1_2_10_12_2" => 'ND-1.2.10.12.2 11008', "1_2_10_13_1" => 'ND-1.2.10.13.1 11001', "1_2_10_13_2" => 'ND-1.2.10.13.2 11002', "1_2_11_1_1" => 'ND-1.2.11.1.1 10953', 
		"1_2_11_1_2" => 'ND-1.2.11.1.2 10954', "1_2_11_2" => 'ND-1.2.11.2 10880', "1_2_11_3_1" => 'ND-1.2.11.3.1 10960', "1_2_11_3_2" => 'ND-1.2.11.3.2 10961', 
		"1_2_11_4_1" => 'ND-1.2.11.4.1 10962', "1_2_11_4_2" => 'ND-1.2.11.4.2 10963', "1_2_11_5_1" => 'ND-1.2.11.5.1 10966', "1_2_11_5_2" => 'ND-1.2.11.5.2 10967', 
		"1_2_11_6_1" => 'ND-1.2.11.6.1 10964', "1_2_11_6_2" => 'ND-1.2.11.6.2 10965', "1_2_11_7_1" => 'ND-1.2.11.7.1 10968', "1_2_11_7_2" => 'ND-1.2.11.7.2 10969', 
		"1_2_11_8_1" => 'ND-1.2.11.8.1 10970', "1_2_11_8_2" => 'ND-1.2.11.8.2 10971', "1_2_11_9" => 'ND-1.2.11.9 10894', "1_2_11_10" => 'ND-1.2.11.10 10884', 
		"1_2_11_11_1" => 'ND-1.2.11.11.1 10956', "1_2_11_11_2" => 'ND-1.2.11.11.2 10957', "1_2_11_12_1" => 'ND-1.2.11.12.1 10958', "1_2_11_12_2" => 'ND-1.2.11.12.2 10959', 
		"1_2_11_13" => 'ND-1.2.11.13 10892', "1_2_11_14" => 'ND-1.2.11.14 10888', "1_2_11_15_1" => 'ND-1.2.11.15.1 10955', "1_2_11_16" => 'ND-1.2.11.16 10889', 
		"1_2_11_17" => 'ND-1.2.11.17 10878', "1_2_11_18" => 'ND-1.2.11.18 10882', "1_3_1" => 'ND-1.3.1 11995', "1_4_1" => 'ND-1.4.1 11996', 
		"1_4_2_1" => 'ND-1.4.2.1 11998', "1_4_2_2" => 'ND-1.4.2.2 11999', "1_4_3_1" => 'ND-1.4.3.1 12001', "1_4_4_1" => 'ND-1.4.4.1 12003', 
		"1_4_4_2_1" => 'ND-1.4.4.2.1 12005', "1_5" => 'ND-1.5 10493', "2_1_1" => 'ND-2.1.1 10503', "2_1_2" => 'ND-2.1.2 10502', 
		"2_1_3" => 'ND-2.1.3 10500', "2_1_4" => 'ND-2.1.4 10501', "2_1_5" => 'ND-2.1.5 10504', "2_1_6" => 'ND-2.1.6 10792', 
		"2_1_7" => 'ND-2.1.7 10497', "2_1_8" => 'ND-2.1.8 10498', "2_1_9" => 'ND-2.1.9 10499', "2_2_1" => 'ND-2.2.1 10511', 
		"2_2_2" => 'ND-2.2.2 10510', "2_2_3" => 'ND-2.2.3 10509', "2_2_4" => 'ND-2.2.4 11141', "2_2_5" => 'ND-2.2.5 10512', 
		"2_2_6" => 'ND-2.2.6 10793', "2_2_7" => 'ND-2.2.7 10507', "2_2_8" => 'ND-2.2.8 10508', "3_1_1" => 'ND-3.1.1 10515', 
		"3_1_2" => 'ND-3.1.2 10516', "3_1_3" => 'ND-3.1.3 10517', "3_1_4" => 'ND-3.1.4 10518', "3_1_5" => 'ND-3.1.5 10519', 
		"3_2_1" => 'ND-3.2.1 10521', "3_2_2" => 'ND-3.2.2 10522', "3_2_3_1" => '(1) 10524', "3_2_3_2" => '(2) 10525', 
		"3_2_3_3" => '(3) 10526', "3_2_3_4" => '(4) 10527', "3_2_3_5" => '(5) 10528', "3_2_3_6" => '(6) 10529', 
		"3_2_3_7" => '(7) 10530', "3_2_3_8" => '(8) 10531', "3_2_3_9" => '(9) 10532', "3_2_3_10" => '(10) 10533', 
		"3_2_3_11" => '(11) 10534', "3_2_3_12" => '(12) 10535', "3_2_3_13" => '(13) 10536', "3_2_4_1" => '(1) 10539', 
		"3_2_4_2" => '(2) 10540', "3_2_4_3" => '(3) 10541', "3_2_4_4" => '(4) 10542', "3_2_4_5" => '(5) 10543', 
		"3_2_4_6" => '(6) 10544', "3_2_4_7" => '(7) 10545', "3_2_4_8" => '(8) 10546', "3_2_4_9" => '(9) 10547', 
		"3_2_4_10" => '(10) 10548', "3_2_4_11" => '(11) 10549', "3_2_4_12" => '(12) 10550', "3_2_4_13" => '(13) 10551', 
		"3_2_4_14" => '(14) 10552', "3_2_4_15" => '(15) 10553', "3_2_4_16" => '(16) 10554', "3_2_4_17" => '(17) 10555', 
		"3_2_4_18" => '(18) 10556', "3_3_1" => 'ND-3.3.1 10559', "3_3_2" => 'ND-3.3.2 10816', "3_3_3" => 'ND-3.3.3 10561', 
		"3_3_4" => 'ND-3.3.4 10817', "3_3_5" => 'ND-3.3.5 10563', "3_3_6" => 'ND-3.3.6 10564', "3_3_7" => 'ND-3.3.7 10565', 
		"3_3_8" => 'ND-3.3.8 10566', "3_3_9" => 'ND-3.3.9 10567', "4_1" => 'ND-4.1 10808', "4_2" => 'ND-4.2 10570', 
		"4_3" => 'ND-4.3 10571', "4_4" => 'ND-4.4 10572', "4_5" => 'ND-4.5 10809', "4_6" => 'ND-4.6 10573', 
		"5_1" => 'ND-5.1 10575', "5_2" => 'ND-5.2 10576', "5_3" => 'ND-5.3 10577', "5_4" => 'ND-5.4 10578', 
		"5_5" => 'ND-5.5 10849', "5_6" => 'ND-5.6 10580', "5_7" => 'ND-5.7 10810', "5_8" => 'ND-5.8 10811', 
		"5_9" => 'ND-5.9 10581', "6_1" => 'ND-6.1 10839', "6_2" => 'ND-6.2 10584', "6_3" => 'ND-6.3 10799', 
		"E1_1" => 'E-1.1 10588', "E1_2" => 'E-1.2 10589', "E1_3" => 'E-1.3 10590', "E1_4" => 'E-1.4 10591', 
		"E1_5" => 'E-1.5 10592', "E1_6" => 'E-1.6 10593', "E1_7" => 'E-1.7 10594', "E1_8" => 'E-1.8 12012', 
		"E2_1" => 'E-2.1 10596', "E2_2" => 'E-2.2 10597', "E2_3" => 'E-2.3 10598', "1_2" => 'ND-1.2 10828', 
		"1_2_1" => 'ND-1.2.1 10829', "1_2_2" => 'ND-1.2.2 10830', "1_2_3" => 'ND-1.2.3 10831', "1_2_3_6" => 'ND-1.2.3.6 10897', 
		"1_2_3_6_1" => 'ND-1.2.3.6.1 10898', "1_2_3_6_2" => 'ND-1.2.3.6.2 10899', "1_2_3_6_3" => 'ND-1.2.3.6.3 10900', "1_2_3_6_5" => 'ND-1.2.3.6.5 10902', 
		"1_2_3_6_6" => 'ND-1.2.3.6.6 10903', "1_2_3_6_7" => 'ND-1.2.3.6.7 10904', "1_2_3_6_8" => 'ND-1.2.3.6.8 10905', "1_2_3_6_9" => 'ND-1.2.3.6.9 10906', 
		"1_2_3_6_10" => 'ND-1.2.3.6.10 10907', "1_2_3_6_11" => 'ND-1.2.3.6.11 10908', "1_2_3_6_13" => 'ND-1.2.3.6.13 10910', "1_2_3_6_14" => 'ND-1.2.3.6.14 10911', 
		"1_2_4" => 'ND-1.2.4 10832', "1_2_4_2" => 'ND-1.2.4.2 10930', "1_2_4_3" => 'ND-1.2.4.3 10931', "1_2_4_4" => 'ND-1.2.4.4 10861', 
		"1_2_4_5" => 'ND-1.2.4.5 10862', "1_2_4_6" => 'ND-1.2.4.6 11978', "1_2_5" => 'ND-1.2.5 10833', "1_2_5_3" => 'ND-1.2.5.3 10869', 
		"1_2_5_4" => 'ND-1.2.5.4 10870', "1_2_5_4_1" => 'ND-1.2.5.4.1 10941', "1_2_5_4_2" => 'ND-1.2.5.4.2 10942', "1_2_5_5" => 'ND-1.2.5.5 10871', 
		"1_2_5_5_1" => 'ND-1.2.5.5.1 10871', "1_2_5_6" => 'ND-1.2.5.6 10872', "1_2_5_7" => 'ND-1.2.5.7 11983', "1_2_5_7_1" => 'ND-1.2.5.7.1 11984', 
		"1_2_5_7_2" => 'ND-1.2.5.7.2 11988', "1_2_5_8" => 'ND-1.2.5.8 11992', "1_2_6" => 'ND-1.2.6 10863', "1_2_7" => 'ND-1.2.7 10834', 
		"1_2_7_3" => 'ND-1.2.7.3 10947', "1_2_7_4" => 'ND-1.2.7.4 10950', "1_2_8" => 'ND-1.2.8 10835', "1_2_10" => 'ND-1.2.10 10837', 
		"1_2_10_1" => 'ND-1.2.10.1 10923', "1_2_10_2" => 'ND-1.2.10.2 10926', "1_2_10_3" => 'ND-1.2.10.3 10927', "1_2_10_4" => 'ND-1.2.10.4 10928', 
		"1_2_10_5" => 'ND-1.2.10.5 10929', "1_2_10_6" => 'ND-1.2.10.6 10922', "1_2_10_7" => 'ND-1.2.10.7 10921', "1_2_10_8" => 'ND-1.2.10.8 10919', 
		"1_2_10_9" => 'ND-1.2.10.9 10918', "1_2_10_10" => 'ND-1.2.10.10 10924', "1_2_10_11" => 'ND-1.2.10.11 10925', "1_2_10_12" => 'ND-1.2.10.12 10920', 
		"1_2_10_13" => 'ND-1.2.10.13 10917', "1_2_11" => 'ND-1.2.11 10838', "1_2_11_1" => 'ND-1.2.11.1 10879', "1_2_11_3" => 'ND-1.2.11.3 10886', 
		"1_2_11_4" => 'ND-1.2.11.4 10887', "1_2_11_5" => 'ND-1.2.11.5 10891', "1_2_11_6" => 'ND-1.2.11.6 10890', "1_2_11_7" => 'ND-1.2.11.7 10893', 
		"1_2_11_8" => 'ND-1.2.11.8 10895', "1_2_11_11" => 'ND-1.2.11.11 10883', "1_2_11_12" => 'ND-1.2.11.12 10885', "1_2_11_15" => 'ND-1.2.11.15 10881', 
		"1_3" => 'ND-1.3 10815', "1_4" => 'ND-1.4 10492', "1_4_2" => 'ND-1.4.2 11997', "1_4_3" => 'ND-1.4.3 12000', 
		"1_4_4" => 'ND-1.4.4 12002', "1_4_4_2" => 'ND-1.4.4.2 12004', "2_1" => 'Enteral Nutrition (2.1)', "2_2" => 'Parenteral Nutrition/IV Fluids (2.2)', 
		"3_1" => 'Medical Food Supplement Therapy (3.1)', "3_2" => 'Vitamin and Mineral Supplement Therapy (3.2)', "3_2_3" => 'ND-3.2.3 10523', "3_2_4" => 'ND-3.2.4 10538', "3_3" => 'Bioactive Substance Management (3.3)'
	);
	function __construct(){
	    parent::__construct();
	    /* Standard Libraries of codeigniter are required */
        $this->load->helper('url');
	    $this->load->model('Familyfood_model');
		$this->load->library('encrypt');
		$this->load->library('session');
		$this->load->driver('cache');
		$this->load->library('email');
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        session_start();
		ob_start();
	}

	function confirmMail(){
		$appointment_id = $this->input->get( 'confid' );
		$this->Familyfood_model->confirmAppointment( $appointment_id );
		$this->load->view( 'confirm_appointment.php' );

	}

	function resourceuser(){
		$this->load->view( 'user_resource.php' );

	}
	
		function nutritionwebinars(){
		$this->load->view( 'user_resource_webinars.php' );

	}
	
		function grocerytour(){
		$this->load->view( 'user_resource_grocerytour.php' );

	}

	function downloadClientList(){
		$file = date('dmY-His');
		header("Content-type: text/csv");
		header("Content-Disposition: attachment; filename=visitors-$file.csv");
		header("Pragma: no-cache");
		header("Expires: 0");

		$company_id = $this->input->get( 'company_id' );

	    $output = "First Name, Last Name, Email, Gender, Birthday, Phone Number, Cell Number, Address \n";
	    $output1 = $this->Familyfood_model->getClientsByCompany( $company_id );
	    foreach ($output1->result() as $row)
	    {
	        $output .= "\"".$row->firstname."\",\"".$row->lastname."\",\"".$row->userid."\",\"".$row->gender."\",\"".$row->birthday."\",\"".$row->phonenumber."\",\"".$row->cellnumber."\",\"".$row->address."\"";
	    	$output = $output . "\n";
	    }

		$filename = "Company_clients.csv";

		header('Content-type: application/csv');

		header('Content-Disposition: attachment; filename='.$filename);

	    echo $output;
	}

	function sessionReports(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['usertype'] = 0; // 1:admin; 2:cservice

		$sessionvalue = $this->session->userdata('userid');

		$sessionvalue1 = $this->session->userdata('cservice');

		$sessionvalue2 = $this->session->userdata('conuser');

		if ( $sessionvalue == "" && $sessionvalue1 == "" && $sessionvalue2 == "" ) {
			redirect("login/logins");
		} else {
			$usertype = ( $sessionvalue != "" ) ? 1 : ( ( $sessionvalue1 != "" ) ? 2 : ( ( $sessionvalue2 != "" ) ? 3 : 0 ) );
			$data['usertype'] = $usertype;
			$this->load->view( 'admin_report_list.php', $data );
		}
	}

	function sessionNotesDaily(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');
		$data['uid'] = 0;
		$data['dietAdvice'] = array( 'da_goalMet', 'da_nutritionalGoal', 'da_physicalGoal','da_socialGoal', 'da_q1', 'da_q2', 'da_q3', 'da_q4', 'da_q5', 'da_q6' );
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "") {

		    redirect('login/logins');

		}else {
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');
			$uid = $this->session->userdata('session_note_id');
			$data['user_full_name'] = "";
			$data['dob'] = "";

			if( $this->input->post() || ( $uid != "" && $uid > 0 ) ){
				// uid is get
				if( $uid == "" ){
					$uid = $this->input->get( 'uid' );
					$this->session->set_userdata( 'session_note_id', $uid );
				}else{
					if( $uid != $this->input->get( 'uid') && $this->input->get( 'uid' ) != "" ){
						$uid = $this->input->get( 'uid' );
						$this->session->set_userdata( 'session_note_id', $uid );
					}
				}
				$data['uid'] = $uid;
				if( $userName_email = $this->getUserByUid( $uid ) ){
					$data['user_full_name'] = $userName_email->name;
					$data['dob'] = $userName_email->birthday;
				}

				$userid = $this->session->userdata('session_note_userid');

				if( $uid != "" && $uid > 0 ){
					$dietAdvice = (array)$this->Familyfood_model->getAdvice_byUID( $uid );
					// $session_note1 = (array)$this->Familyfood_model->getSessionNote1_byUID( $uid );

					$data['dietAdvice'] = $dietAdvice;
					// $data['session_note_details'] = $session_note1;
				}else{
					$data['error'] = "Please select client";
				}

				$postData = $this->input->post();

				if( !empty( $postData ) ){
					$handouts = '';
					$hand_out = $this->input->post( 'handout' );
					if( !empty( $hand_out ) ){
						$handouts = implode( ',', $this->input->post( 'handout' ) );
					}

					$now = date( 'Y-m-d H:i:s' );

					$diet_advice = array();
					$diet_advice['da_goalMet'] = $this->input->post( 'da_goalMet' );
					$diet_advice['da_nutritionalGoal'] = $this->input->post( 'da_nutritionalGoal' );
					$diet_advice['da_physicalGoal'] = $this->input->post( 'da_physicalGoal' );
					$diet_advice['da_socialGoal'] = $this->input->post( 'da_socialGoal' );
					$diet_advice['da_q1'] = $this->input->post( 'q1' );
					$diet_advice['da_q2'] = $this->input->post( 'q2' );
					$diet_advice['da_q3'] = $this->input->post( 'q3' );
					$diet_advice['da_q4'] = $this->input->post( 'q4' );
					$diet_advice['da_q5'] = $this->input->post( 'q5' );
					$diet_advice['da_q6'] = $this->input->post( 'q6' );
					$diet_advice['da_handouts'] = $handouts;
					$diet_advice['da_date_updated'] = $now;

					$data['dietAdvice'] = $diet_advice;

					// insert advice 
					if( !empty( $dietAdvice ) ){
						if( !$this->Familyfood_model->updateAdvice( $diet_advice, $dietAdvice['da_id'] ) ){
							$data['error'] = "Error on saving advice";
						}
					}else{
						if( !$this->Familyfood_model->insertDietAdvice( $diet_advice, $uid ) ){
							$data['error'] = "Error on saving advice";
						}
					}

					if( $this->input->post( 'submit' ) == 1 ){
						redirect('login/sessionflow3');
					}
				}
			}else{
				redirect('login/sessionflow');
			}
			$data['cl_name'] = '';
			$data['date'] = '';

			$this->load->view("diet_session_reports.php", $data);
		}
	}

	function viewReport(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');

		$adminSession = $this->session->userdata('userid');

		$cService = $this->session->userdata('cservice');

		if ( $sessionvalue == "" && $adminSession == "" && $cService == "" ) {

		    redirect('login/logins');

		}else {
			$data['ID_1_1'] = "";
			$data['ID_1_2'] = "";
			$data['ID_1_3'] = "";
			$data['ID_1_4'] = "";
			$data['ID_1_5'] = "";
			$data['ID_2_1'] = "";
			$data['ID_2_2'] = "";
			$data['ID_2_3'] = "";
			$data['ID_2_4'] = "";
			$data['ID_2_5'] = "";
			$data['ID_2_6'] = "";
			$data['ID_2_7'] = "";
			$data['ID_2_8'] = "";
			$data['ID_2_9'] = "";
			$data['ID_2_10'] = "";
			$data['ID_2_11'] = "";
			$data['ID_3_1'] = "";
			$data['ID_3_2'] = "";
			$data['ID_4_1_1'] = "";
			$data['ID_4_1_2'] = "";
			$data['ID_4_1_3'] = "";
			$data['ID_4_1_4'] = "";
			$data['ID_4_1_5'] = "";
			$data['ID_4_2_1'] = "";
			$data['ID_4_2_2'] = "";
			$data['ID_4_2_3'] = "";
			$data['ID_4_2_4'] = "";
			$data['ID_4_2_5'] = "";
			$data['ID_4_2_6'] = "";
			$data['ID_4_2_7'] = "";
			$data['ID_4_3'] = "";
			$data['ID_5_1'] = "";
			$data['ID_5_2'] = "";
			$data['ID_5_3'] = "";
			$data['ID_5_4'] = "";
			$data['ID_5_5_1'] = "";
			$data['ID_5_5_2'] = "";
			$data['ID_5_5_3'] = "";
			$data['ID_5_6_1'] = "";
			$data['ID_5_6_2'] = "";
			$data['ID_5_6_3'] = "";
			$data['ID_5_7_1'] = "";
			$data['ID_5_8_1'] = "";
			$data['ID_5_8_2'] = "";
			$data['ID_5_8_3'] = "";
			$data['ID_5_8_4'] = "";
			$data['ID_5_8_5'] = "";
			$data['ID_5_8_6'] = "";
			$data['ID_5_9_1'] = "";
			$data['ID_5_9_1_1'] = "";
			$data['ID_5_9_1_2'] = "";
			$data['ID_5_9_1_3'] = "";
			$data['ID_5_9_1_4'] = "";
			$data['ID_5_9_1_5'] = "";
			$data['ID_5_9_1_6'] = "";
			$data['ID_5_9_1_7'] = "";
			$data['ID_5_9_1_8'] = "";
			$data['ID_5_9_1_9'] = "";
			$data['ID_5_9_1_10'] = "";
			$data['ID_5_9_1_11'] = "";
			$data['ID_5_9_1_12'] = "";
			$data['ID_5_9_1_13'] = "";
			$data['ID_5_9_2'] = "";
			$data['ID_5_9_2_2'] = "";
			$data['ID_5_9_2_3'] = "";
			$data['ID_5_9_2_4'] = "";
			$data['ID_5_9_2_5'] = "";
			$data['ID_5_9_2_6'] = "";
			$data['ID_5_9_2_7'] = "";
			$data['ID_5_9_2_8'] = "";
			$data['ID_5_9_2_9'] = "";
			$data['ID_5_9_2_10'] = "";
			$data['ID_5_9_2_11'] = "";
			$data['ID_5_9_2_12'] = "";
			$data['ID_5_9_2_13'] = "";
			$data['ID_5_9_2_14'] = "";
			$data['ID_5_10_1'] = "";
			$data['ID_5_10_1_1'] = "";
			$data['ID_5_10_1_2'] = "";
			$data['ID_5_10_1_3'] = "";
			$data['ID_5_10_1_4'] = "";
			$data['ID_5_10_1_5'] = "";
			$data['ID_5_10_1_6'] = "";
			$data['ID_5_10_1_7'] = "";
			$data['ID_5_10_1_8'] = "";
			$data['ID_5_10_1_9'] = "";
			$data['ID_5_10_1_10'] = "";
			$data['ID_5_10_1_11'] = "";
			$data['ID_5_10_1_12'] = "";
			$data['ID_5_10_1_13'] = "";
			$data['ID_5_10_1_14'] = "";
			$data['ID_5_10_1_15'] = "";
			$data['ID_5_10_1_16'] = "";
			$data['ID_5_10_1_17'] = "";
			$data['ID_5_10_1_18'] = "";
			$data['ID_5_10_2'] = "";
			$data['ID_5_10_2_1'] = "";
			$data['ID_5_10_2_2'] = "";
			$data['ID_5_10_2_3'] = "";
			$data['ID_5_10_2_4'] = "";
			$data['ID_5_10_2_5'] = "";
			$data['ID_5_10_2_6'] = "";
			$data['ID_5_10_2_7'] = "";
			$data['ID_5_10_2_8'] = "";
			$data['ID_5_10_2_9'] = "";
			$data['ID_5_10_2_10'] = "";
			$data['ID_5_10_2_11'] = "";
			$data['ID_5_10_2_12'] = "";
			$data['ID_5_10_2_13'] = "";
			$data['ID_5_10_2_14'] = "";
			$data['ID_5_10_2_15'] = "";
			$data['ID_5_10_2_16'] = "";
			$data['ID_5_10_2_17'] = "";
			$data['ID_5_10_2_18'] = "";
			$data['ID_5_11_1'] = "";
			$data['ID_5_11_2'] = "";
			$data['ID_NC_1_1'] = "";
			$data['ID_NC_1_2'] = "";
			$data['ID_NC_1_3'] = "";
			$data['ID_NC_1_4'] = "";
			$data['ID_NC_1_5'] = "";
			$data['ID_NC_2_1'] = "";
			$data['ID_NC_2_2'] = "";
			$data['ID_NC_2_3'] = "";
			$data['ID_NC_2_4'] = "";
			$data['ID_NC_3_1'] = "";
			$data['ID_NC_3_2'] = "";
			$data['ID_NC_3_3'] = "";
			$data['ID_NC_3_3_1'] = "";
			$data['ID_NC_3_3_2'] = "";
			$data['ID_NC_3_3_3'] = "";
			$data['ID_NC_3_3_4'] = "";
			$data['ID_NC_3_3_5'] = "";
			$data['ID_NC_3_4'] = "";
			$data['ID_NC_3_5'] = "";
			$data['ID_NC_3_6'] = "";
			$data['ID_NC_4_1'] = "";
			$data['ID_NC_4_1_1'] = "";
			$data['ID_NC_4_1_2'] = "";
			$data['ID_NC_4_1_3'] = "";
			$data['ID_NO_1_1'] = "";
			$data['ID_NB_1_1'] = "";
			$data['ID_NB_1_2'] = "";
			$data['ID_NB_1_3'] = "";
			$data['ID_NB_1_4'] = "";
			$data['ID_NB_1_5'] = "";
			$data['ID_NB_1_6'] = "";
			$data['ID_NB_1_7'] = "";
			$data['ID_NB_2_1'] = "";
			$data['ID_NB_2_2'] = "";
			$data['ID_NB_2_3'] = "";
			$data['ID_NB_2_4'] = "";
			$data['ID_NB_2_5'] = "";
			$data['ID_NB_2_6'] = "";
			$data['ID_NB_3_1'] = "";
			$data['ID_NB_3_2'] = "";
			$data['ID_NB_3_3'] = "";
			$data['ID_NB_3_4'] = "";
			
			$data['IDENTIFIER_1_1'] = '';
			$data['IDENTIFIER_1_2'] = '';
			$data['IDENTIFIER_1_2_1'] = '';
			$data['IDENTIFIER_1_2_1_1'] = '';
			$data['IDENTIFIER_1_2_1_2'] = '';
			$data['IDENTIFIER_1_2_1_3'] = '';
			$data['IDENTIFIER_1_2_1_4'] = '';
			$data['IDENTIFIER_1_2_1_5'] = '';
			$data['IDENTIFIER_1_2_1_6'] = '';
			$data['IDENTIFIER_1_2_1_7'] = '';
			$data['IDENTIFIER_1_2_2'] = '';
			$data['IDENTIFIER_1_2_2_1'] = '';
			$data['IDENTIFIER_1_2_2_2'] = '';
			$data['IDENTIFIER_1_2_3'] = '';
			$data['IDENTIFIER_1_2_3_1'] = '';
			$data['IDENTIFIER_1_2_3_2'] = '';
			$data['IDENTIFIER_1_2_3_3'] = '';
			$data['IDENTIFIER_1_2_3_4'] = '';
			$data['IDENTIFIER_1_2_3_5'] = '';
			$data['IDENTIFIER_1_2_3_5_1'] = '';
			$data['IDENTIFIER_1_2_3_6'] = '';
			$data['IDENTIFIER_1_2_3_6_1'] = '';
			$data['IDENTIFIER_1_2_3_6_1_1'] = '';
			$data['IDENTIFIER_1_2_3_6_1_2'] = '';
			$data['IDENTIFIER_1_2_3_6_2'] = '';
			$data['IDENTIFIER_1_2_3_6_2_1'] = '';
			$data['IDENTIFIER_1_2_3_6_2_2'] = '';
			$data['IDENTIFIER_1_2_3_6_3'] = '';
			$data['IDENTIFIER_1_2_3_6_3_1'] = '';
			$data['IDENTIFIER_1_2_3_6_3_2'] = '';
			$data['IDENTIFIER_1_2_3_6_4'] = '';
			$data['IDENTIFIER_1_2_3_6_5'] = '';
			$data['IDENTIFIER_1_2_3_6_5_1'] = '';
			$data['IDENTIFIER_1_2_3_6_5_2'] = '';
			$data['IDENTIFIER_1_2_3_6_6'] = '';
			$data['IDENTIFIER_1_2_3_6_6_1'] = '';
			$data['IDENTIFIER_1_2_3_6_6_2'] = '';
			$data['IDENTIFIER_1_2_3_6_7'] = '';
			$data['IDENTIFIER_1_2_3_6_7_1'] = '';
			$data['IDENTIFIER_1_2_3_6_7_2'] = '';
			$data['IDENTIFIER_1_2_3_6_8'] = '';
			$data['IDENTIFIER_1_2_3_6_8_1'] = '';
			$data['IDENTIFIER_1_2_3_6_8_2'] = '';
			$data['IDENTIFIER_1_2_3_6_9'] = '';
			$data['IDENTIFIER_1_2_3_6_9_1'] = '';
			$data['IDENTIFIER_1_2_3_6_9_2'] = '';
			$data['IDENTIFIER_1_2_3_6_10'] = '';
			$data['IDENTIFIER_1_2_3_6_10_1'] = '';
			$data['IDENTIFIER_1_2_3_6_10_2'] = '';
			$data['IDENTIFIER_1_2_3_6_11'] = '';
			$data['IDENTIFIER_1_2_3_6_11_1'] = '';
			$data['IDENTIFIER_1_2_3_6__11_2'] = '';
			$data['IDENTIFIER_1_2_3_6_12'] = '';
			$data['IDENTIFIER_1_2_3_6_13'] = '';
			$data['IDENTIFIER_1_2_3_6_13_1'] = '';
			$data['IDENTIFIER_1_2_3_6_13_2'] = '';
			$data['IDENTIFIER_1_2_3_6_14'] = '';
			$data['IDENTIFIER_1_2_3_6_14_1'] = '';
			$data['IDENTIFIER_1_2_3_6_14_2'] = '';
			$data['IDENTIFIER_1_2_4'] = '';
			$data['IDENTIFIER_1_2_4_1'] = '';
			$data['IDENTIFIER_1_2_4_2'] = '';
			$data['IDENTIFIER_1_2_4_2_1'] = '';
			$data['IDENTIFIER_1_2_4_2_2'] = '';
			$data['IDENTIFIER_1_2_4_3'] = '';
			$data['IDENTIFIER_1_2_4_3_1'] = '';
			$data['IDENTIFIER_1_2_4_3_2'] = '';
			$data['IDENTIFIER_1_2_4_4'] = '';
			$data['IDENTIFIER_1_2_4_4_1'] = '';
			$data['IDENTIFIER_1_2_4_4_2'] = '';
			$data['IDENTIFIER_1_2_4_5'] = '';
			$data['IDENTIFIER_1_2_4_5_1'] = '';
			$data['IDENTIFIER_1_2_4_5_2'] = '';
			$data['IDENTIFIER_1_2_4_6'] = '';
			$data['IDENTIFIER_1_2_4_6_1'] = '';
			$data['IDENTIFIER_1_2_4_6_2'] = '';
			$data['IDENTIFIER_1_2_5'] = '';
			$data['IDENTIFIER_1_2_5_1'] = '';
			$data['IDENTIFIER_1_2_5_2'] = '';
			$data['IDENTIFIER_1_2_5_3'] = '';
			$data['IDENTIFIER_1_2_5_3_1'] = '';
			$data['IDENTIFIER_1_2_5_3_2'] = '';
			$data['IDENTIFIER_1_2_5_4'] = '';
			$data['IDENTIFIER_1_2_5_4_1'] = '';
			$data['IDENTIFIER_1_2_5_4_1_1'] = '';
			$data['IDENTIFIER_1_2_5_4_2'] = '';
			$data['IDENTIFIER_1_2_5_4_2_1'] = '';
			$data['IDENTIFIER_1_2_5_5'] = '';
			$data['IDENTIFIER_1_2_5_5_1'] = '';
			$data['IDENTIFIER_1_2_5_5_1_1'] = '';
			$data['IDENTIFIER_1_2_5_6'] = '';
			$data['IDENTIFIER_1_2_5_6_1'] = '';
			$data['IDENTIFIER_1_2_5_7'] = '';
			$data['IDENTIFIER_1_2_5_7_1'] = '';
			$data['IDENTIFIER_1_2_5_7_1_1'] = '';
			$data['IDENTIFIER_1_2_5_7_1_2'] = '';
			$data['IDENTIFIER_1_2_5_7_1_3'] = '';
			$data['IDENTIFIER_1_2_5_7_2'] = '';
			$data['IDENTIFIER_1_2_5_7_2_1'] = '';
			$data['IDENTIFIER_1_2_5_7_2_2'] = '';
			$data['IDENTIFIER_1_2_5_7_2_3'] = '';
			$data['IDENTIFIER_1_2_5_8'] = '';
			$data['IDENTIFIER_1_2_5_8_1'] = '';
			$data['IDENTIFIER_1_2_5_8_2'] = '';
			$data['IDENTIFIER_1_2_6'] = '';
			$data['IDENTIFIER_1_2_6_1'] = '';
			$data['IDENTIFIER_1_2_7'] = '';
			$data['IDENTIFIER_1_2_7_1'] = '';
			$data['IDENTIFIER_1_2_7_2'] = '';
			$data['IDENTIFIER_1_2_7_3'] = '';
			$data['IDENTIFIER_1_2_7_3_1'] = '';
			$data['IDENTIFIER_1_2_7_3_2'] = '';
			$data['IDENTIFIER_1_2_7_4'] = '';
			$data['IDENTIFIER_1_2_7_4_1'] = '';
			$data['IDENTIFIER_1_2_7_4_2'] = '';
			$data['IDENTIFIER_1_2_8'] = '';
			$data['IDENTIFIER_1_2_8_1'] = '';
			$data['IDENTIFIER_1_2_8_2'] = '';
			$data['IDENTIFIER_1_2_8_3'] = '';
			$data['IDENTIFIER_1_2_8_4'] = '';
			$data['IDENTIFIER_1_2_9'] = '';
			$data['IDENTIFIER_1_2_10'] = '';
			$data['IDENTIFIER_1_2_10_1'] = '';
			$data['IDENTIFIER_1_2_10_1_1'] = '';
			$data['IDENTIFIER_1_2_10_1_2'] = '';
			$data['IDENTIFIER_1_2_10_2'] = '';
			$data['IDENTIFIER_1_2_10_2_1'] = '';
			$data['IDENTIFIER_1_2_10_2_2'] = '';
			$data['IDENTIFIER_1_2_10_3'] = '';
			$data['IDENTIFIER_1_2_10_3_1'] = '';
			$data['IDENTIFIER_1_2_10_3_2'] = '';
			$data['IDENTIFIER_1_2_10_4'] = '';
			$data['IDENTIFIER_1_2_10_4_1'] = '';
			$data['IDENTIFIER_1_2_10_4_2'] = '';
			$data['IDENTIFIER_1_2_10_5'] = '';
			$data['IDENTIFIER_1_2_10_5_1'] = '';
			$data['IDENTIFIER_1_2_10_5_2'] = '';
			$data['IDENTIFIER_1_2_10_6'] = '';
			$data['IDENTIFIER_1_2_10_6_1'] = '';
			$data['IDENTIFIER_1_2_10_6_2'] = '';
			$data['IDENTIFIER_1_2_10_7'] = '';
			$data['IDENTIFIER_1_2_10_7_1'] = '';
			$data['IDENTIFIER_1_2_10_7_2'] = '';
			$data['IDENTIFIER_1_2_10_8'] = '';
			$data['IDENTIFIER_1_2_10_8_1'] = '';
			$data['IDENTIFIER_1_2_10_8_2'] = '';
			$data['IDENTIFIER_1_2_10_9'] = '';
			$data['IDENTIFIER_1_2_10_9_1'] = '';
			$data['IDENTIFIER_1_2_10_9_2'] = '';
			$data['IDENTIFIER_1_2_10_10'] = '';
			$data['IDENTIFIER_1_2_10_10_1'] = '';
			$data['IDENTIFIER_1_2_10_10_2'] = '';
			$data['IDENTIFIER_1_2_10_11'] = '';
			$data['IDENTIFIER_1_2_10_11_1'] = '';
			$data['IDENTIFIER_1_2_10_11_2'] = '';
			$data['IDENTIFIER_1_2_10_12'] = '';
			$data['IDENTIFIER_1_2_10_12_1'] = '';
			$data['IDENTIFIER_1_2_10_12_2'] = '';
			$data['IDENTIFIER_1_2_10_13'] = '';
			$data['IDENTIFIER_1_2_10_13_1'] = '';
			$data['IDENTIFIER_1_2_10_13_2'] = '';
			$data['IDENTIFIER_1_2_11'] = '';
			$data['IDENTIFIER_1_2_11_1'] = '';
			$data['IDENTIFIER_1_2_11_1_1'] = '';
			$data['IDENTIFIER_1_2_11_1_2'] = '';
			$data['IDENTIFIER_1_2_11_2'] = '';
			$data['IDENTIFIER_1_2_11_3'] = '';
			$data['IDENTIFIER_1_2_11_3_1'] = '';
			$data['IDENTIFIER_1_2_11_3_2'] = '';
			$data['IDENTIFIER_1_2_11_4'] = '';
			$data['IDENTIFIER_1_2_11_4_1'] = '';
			$data['IDENTIFIER_1_2_11_4_2'] = '';
			$data['IDENTIFIER_1_2_11_5'] = '';
			$data['IDENTIFIER_1_2_11_5_1'] = '';
			$data['IDENTIFIER_1_2_11_5_2'] = '';
			$data['IDENTIFIER_1_2_11_6'] = '';
			$data['IDENTIFIER_1_2_11_6_1'] = '';
			$data['IDENTIFIER_1_2_11_6_2'] = '';
			$data['IDENTIFIER_1_2_11_7'] = '';
			$data['IDENTIFIER_1_2_11_7_1'] = '';
			$data['IDENTIFIER_1_2_11_7_2'] = '';
			$data['IDENTIFIER_1_2_11_8'] = '';
			$data['IDENTIFIER_1_2_11_8_1'] = '';
			$data['IDENTIFIER_1_2_11_8_2'] = '';
			$data['IDENTIFIER_1_2_11_9'] = '';
			$data['IDENTIFIER_1_2_11_10'] = '';
			$data['IDENTIFIER_1_2_11_11'] = '';
			$data['IDENTIFIER_1_2_11_11_1'] = '';
			$data['IDENTIFIER_1_2_11_11_2'] = '';
			$data['IDENTIFIER_1_2_11_12'] = '';
			$data['IDENTIFIER_1_2_11_12_1'] = '';
			$data['IDENTIFIER_1_2_11_12_2'] = '';
			$data['IDENTIFIER_1_2_11_13'] = '';
			$data['IDENTIFIER_1_2_11_14'] = '';
			$data['IDENTIFIER_1_2_11_15'] = '';
			$data['IDENTIFIER_1_2_11_15_1'] = '';
			$data['IDENTIFIER_1_2_11_16'] = '';
			$data['IDENTIFIER_1_2_11_17'] = '';
			$data['IDENTIFIER_1_2_11_18'] = '';
			$data['IDENTIFIER_1_3'] = '';
			$data['IDENTIFIER_1_3_1'] = '';
			$data['IDENTIFIER_1_4'] = '';
			$data['IDENTIFIER_1_4_1'] = '';
			$data['IDENTIFIER_1_4_2'] = '';
			$data['IDENTIFIER_1_4_2_1'] = '';
			$data['IDENTIFIER_1_4_2_2'] = '';
			$data['IDENTIFIER_1_4_3'] = '';
			$data['IDENTIFIER_1_4_3_1'] = '';
			$data['IDENTIFIER_1_4_4'] = '';
			$data['IDENTIFIER_1_4_4_1'] = '';
			$data['IDENTIFIER_1_4_4_2'] = '';
			$data['IDENTIFIER_1_4_4_2_1'] = '';
			$data['IDENTIFIER_1_5'] = '';
			$data['IDENTIFIER_2_1'] = '';
			$data['IDENTIFIER_2_1_1'] = '';
			$data['IDENTIFIER_2_1_2'] = '';
			$data['IDENTIFIER_2_1_3'] = '';
			$data['IDENTIFIER_2_1_4'] = '';
			$data['IDENTIFIER_2_1_5'] = '';
			$data['IDENTIFIER_2_1_6'] = '';
			$data['IDENTIFIER_2_1_7'] = '';
			$data['IDENTIFIER_2_1_8'] = '';
			$data['IDENTIFIER_2_1_9'] = '';
			$data['IDENTIFIER_2_2'] = '';
			$data['IDENTIFIER_2_2_1'] = '';
			$data['IDENTIFIER_2_2_2'] = '';
			$data['IDENTIFIER_2_2_3'] = '';
			$data['IDENTIFIER_2_2_4'] = '';
			$data['IDENTIFIER_2_2_5'] = '';
			$data['IDENTIFIER_2_2_6'] = '';
			$data['IDENTIFIER_2_2_7'] = '';
			$data['IDENTIFIER_2_2_8'] = '';
			$data['IDENTIFIER_3_1'] = '';
			$data['IDENTIFIER_3_1_1'] = '';
			$data['IDENTIFIER_3_1_2'] = '';
			$data['IDENTIFIER_3_1_3'] = '';
			$data['IDENTIFIER_3_1_4'] = '';
			$data['IDENTIFIER_3_1_5'] = '';
			$data['IDENTIFIER_3_2'] = '';
			$data['IDENTIFIER_3_2_1'] = '';
			$data['IDENTIFIER_3_2_2'] = '';
			$data['IDENTIFIER_3_2_3'] = '';
			$data['IDENTIFIER_3_2_3_1'] = '';
			$data['IDENTIFIER_3_2_3_2'] = '';
			$data['IDENTIFIER_3_2_3_3'] = '';
			$data['IDENTIFIER_3_2_3_4'] = '';
			$data['IDENTIFIER_3_2_3_5'] = '';
			$data['IDENTIFIER_3_2_3_6'] = '';
			$data['IDENTIFIER_3_2_3_7'] = '';
			$data['IDENTIFIER_3_2_3_8'] = '';
			$data['IDENTIFIER_3_2_3_9'] = '';
			$data['IDENTIFIER_3_2_3_10'] = '';
			$data['IDENTIFIER_3_2_3_11'] = '';
			$data['IDENTIFIER_3_2_3_12'] = '';
			$data['IDENTIFIER_3_2_3_13'] = '';
			$data['IDENTIFIER_3_2_4'] = '';
			$data['IDENTIFIER_3_2_4_1'] = '';
			$data['IDENTIFIER_3_2_4_2'] = '';
			$data['IDENTIFIER_3_2_4_3'] = '';
			$data['IDENTIFIER_3_2_4_4'] = '';
			$data['IDENTIFIER_3_2_5'] = '';
			$data['IDENTIFIER_3_2_6'] = '';
			$data['IDENTIFIER_3_2_7'] = '';
			$data['IDENTIFIER_3_2_8'] = '';
			$data['IDENTIFIER_3_2_9'] = '';
			$data['IDENTIFIER_3_2_10'] = '';
			$data['IDENTIFIER_3_2_11'] = '';
			$data['IDENTIFIER_3_2_12'] = '';
			$data['IDENTIFIER_3_2_13'] = '';
			$data['IDENTIFIER_3_2_14'] = '';
			$data['IDENTIFIER_3_2_15'] = '';
			$data['IDENTIFIER_3_2_16'] = '';
			$data['IDENTIFIER_3_2_17'] = '';
			$data['IDENTIFIER_3_2_18'] = '';
			$data['IDENTIFIER_3_3'] = '';
			$data['IDENTIFIER_3_3_1'] = '';
			$data['IDENTIFIER_3_3_2'] = '';
			$data['IDENTIFIER_3_3_3'] = '';
			$data['IDENTIFIER_3_3_4'] = '';
			$data['IDENTIFIER_3_3_5'] = '';
			$data['IDENTIFIER_3_3_6'] = '';
			$data['IDENTIFIER_3_3_7'] = '';
			$data['IDENTIFIER_3_3_8'] = '';
			$data['IDENTIFIER_3_3_9'] = '';
			$data['IDENTIFIER_4_1'] = '';
			$data['IDENTIFIER_4_2'] = '';
			$data['IDENTIFIER_4_3'] = '';
			$data['IDENTIFIER_4_4'] = '';
			$data['IDENTIFIER_4_5'] = '';
			$data['IDENTIFIER_4_6'] = '';
			$data['IDENTIFIER_5_1'] = '';
			$data['IDENTIFIER_5_2'] = '';
			$data['IDENTIFIER_5_3'] = '';
			$data['IDENTIFIER_5_4'] = '';
			$data['IDENTIFIER_5_5'] = '';
			$data['IDENTIFIER_5_6'] = '';
			$data['IDENTIFIER_5_7'] = '';
			$data['IDENTIFIER_5_8'] = '';
			$data['IDENTIFIER_5_9'] = '';
			$data['IDENTIFIER_6_1'] = '';
			$data['IDENTIFIER_6_2'] = '';
			$data['IDENTIFIER_6_3'] = '';
			$data['IDENTIFIER_E1_1'] = '';
			$data['IDENTIFIER_E1_2'] = '';
			$data['IDENTIFIER_E1_3'] = '';
			$data['IDENTIFIER_E1_4'] = '';
			$data['IDENTIFIER_E1_5'] = '';
			$data['IDENTIFIER_E1_6'] = '';
			$data['IDENTIFIER_E1_7'] = '';
			$data['IDENTIFIER_E1_8'] = '';
			$data['IDENTIFIER_E2_1'] = '';
			$data['IDENTIFIER_E2_2'] = '';
			$data['IDENTIFIER_E2_3'] = '';
			$data['IDENTIFIER_C1_1'] = '';
			$data['IDENTIFIER_C1_2'] = '';
			$data['IDENTIFIER_C1_3'] = '';
			$data['IDENTIFIER_C1_4'] = '';
			$data['IDENTIFIER_C1_5'] = '';
			$data['IDENTIFIER_C2_1'] = '';
			$data['IDENTIFIER_C2_2'] = '';
			$data['IDENTIFIER_C2_3'] = '';
			$data['IDENTIFIER_C2_4'] = '';
			$data['IDENTIFIER_C2_5'] = '';
			$data['IDENTIFIER_C2_6'] = '';
			$data['IDENTIFIER_C2_7'] = '';
			$data['IDENTIFIER_C2_8'] = '';
			$data['IDENTIFIER_C2_9'] = '';
			$data['IDENTIFIER_C2_10'] = '';
			$data['IDENTIFIER_C2_11'] = '';
			$data['IDENTIFIER_RC1_1'] = '';
			$data['IDENTIFIER_RC1_2'] = '';
			$data['IDENTIFIER_RC1_3'] = '';
			$data['IDENTIFIER_RC1_4'] = '';
			$data['IDENTIFIER_RC1_5'] = '';
			$data['IDENTIFIER_RC1_6'] = '';
			$data['IDENTIFIER_RC2_1'] = '';
			$data['IDENTIFIER_RC2_2'] = '';
			$data['IDENTIFIER_RC2_3'] = '';
			$data['sn3_t1'] = '';
			$data['sn3_t2'] = '';
			$data['sn3_t3'] = '';
			$data['sn3_t4'] = '';
			$data['sn3_t5'] = '';
			$data['sn3_t6'] = '';
			$data['sn3_t7'] = '';
			$data['sn3_t8'] = '';
			$data['sn3_t9'] = '';
			$data['sn3_t10'] = '';
			$data['sn3_t11'] = '';
			$data['sn3_t12'] = '';

			$data['session_note_details2'] = array( 'bundle1' => array(), 'bundle2' => array(), 'bundle3' => array(), 'bundle4' => array(), 'bundle5' => array(),
				'bundle6' => array(), 'bundle7' => array(), 'bundle8' => array(), 'bundle9' => array(), 'bundle10' => array(),
				'bundle11' => array(), 'bundle12' => array(), 'bundle13' => array(), 'bundle14' => array(), 'bundle15' => array(),
				'bundle16' => array(), 'bundle17' => array(), 'bundle18' => array(), 'bundle19' => array(), 'bundle20' => array(), 
				'q1' => '', 'q2' => '', 'q3' => '' );

			$uid = $this->input->get( 'sn_uid' );
			$date_created = $this->input->get( 'sn_date_created' );
			// $session_note1 = (array)$this->Familyfood_model->getSessionNote1_byUID( $uid );
			$session_note1 = (array)$this->Familyfood_model->getReport_session1( $date_created, $uid );

			$dietAdvice = (array)$this->Familyfood_model->getReport_advice( $date_created, $uid );

			$data['dietAdvice'] = $dietAdvice;
			$session2Details = $this->Familyfood_model->getReport_session2( $date_created, $uid );
				if( !empty( $session2Details ) ){
					//$data['session_note_details2'] = array( 
						$bundle1 = preg_split('/\h*[][]/', $session2Details->sn2_bundle1, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle2 = preg_split('/\h*[][]/', $session2Details->sn2_bundle2, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle3 = preg_split('/\h*[][]/', $session2Details->sn2_bundle3, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle4 = preg_split('/\h*[][]/', $session2Details->sn2_bundle4, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle5 = preg_split('/\h*[][]/', $session2Details->sn2_bundle5, -1, PREG_SPLIT_NO_EMPTY );
						$bundle6 = preg_split('/\h*[][]/', $session2Details->sn2_bundle6, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle7 = preg_split('/\h*[][]/', $session2Details->sn2_bundle7, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle8 = preg_split('/\h*[][]/', $session2Details->sn2_bundle8, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle9 = preg_split('/\h*[][]/', $session2Details->sn2_bundle9, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle10 = preg_split('/\h*[][]/', $session2Details->sn2_bundle10, -1, PREG_SPLIT_NO_EMPTY );
						$bundle11 = preg_split('/\h*[][]/', $session2Details->sn2_bundle11, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle12 = preg_split('/\h*[][]/', $session2Details->sn2_bundle12, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle13 = preg_split('/\h*[][]/', $session2Details->sn2_bundle13, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle14 = preg_split('/\h*[][]/', $session2Details->sn2_bundle14, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle15 = preg_split('/\h*[][]/', $session2Details->sn2_bundle15, -1, PREG_SPLIT_NO_EMPTY );
						$bundle16 = preg_split('/\h*[][]/', $session2Details->sn2_bundle16, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle17 = preg_split('/\h*[][]/', $session2Details->sn2_bundle17, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle18 = preg_split('/\h*[][]/', $session2Details->sn2_bundle18, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle19 = preg_split('/\h*[][]/', $session2Details->sn2_bundle19, -1, PREG_SPLIT_NO_EMPTY ); 
						$bundle20 = preg_split('/\h*[][]/', $session2Details->sn2_bundle10, -1, PREG_SPLIT_NO_EMPTY );
						$sn2_q1 = $session2Details->sn2_q1;
						$sn2_q2 = $session2Details->sn2_q2;
						$sn2_q3 = $session2Details->sn2_q3;
					//);

					for( $i = 1; $i <= 20; $i++ ){
						$holder = 'bundle'.$i;
						$passed = $$holder;
						//print_r( $passed[0] );exit;
						$sess2Data = explode( ',', $passed[0] );
			
						foreach( $sess2Data as $select ){
							$data['ID_'.$select] = 'class="selected"';
						}

						$data['bundle'.$i.'_1'] = ( isset($passed[1]) && $passed[1] !== 'NULL' ) ? '<span style="color:black;">'.$passed[1].'</span>' : 'N/A';
						$data['bundle'.$i.'_2'] = ( isset($passed[2]) && $passed[2] !== 'NULL' ) ? '<span style="color:black;">'.$passed[2].'</span>' : 'N/A';
						$data['bundle'.$i.'_3'] = ( isset($passed[3]) && $passed[3] !== 'NULL' ) ? '<span style="color:black;">'.$passed[3].'</span>' : 'N/A';
						$data['bundle'.$i.'_4'] = ( isset($passed[4]) && $passed[4] !== 'NULL' ) ? '<span style="color:black;">'.$passed[4].'</span>' : 'N/A';
					}
				}else{
					for( $i = 1; $i <= 20; $i++ ){
						$holder = 'bundle'.$i;
						//$passed = $$holder;
						//print_r( $passed[0] );exit;
						//$sess2Data = explode( ',', $passed[0] );
			
						//foreach( $sess2Data as $select ){
						//	$data['ID_'.$select] = 'class="selected"';
						//}

						$data['bundle'.$i.'_1'] = 'N/A';
						$data['bundle'.$i.'_2'] = 'N/A';
						$data['bundle'.$i.'_3'] = 'N/A';
						$data['bundle'.$i.'_4'] = 'N/A';
					}
				}
			$sesssion3Details = $this->Familyfood_model->getReport_session3( $date_created, $uid );
			if( !empty( $sesssion3Details->sn3_details ) ){
				$sess3 = explode( ',', $sesssion3Details->sn3_details );
				foreach( $sess3 as $session3 ){
					$data['IDENTIFIER_'.$session3] = 'class="selected"';
				}
				$data['sn3_t1'] = $sesssion3Details->sn3_t1;
				$data['sn3_t2'] = $sesssion3Details->sn3_t2;
				$data['sn3_t3'] = $sesssion3Details->sn3_t3;
				$data['sn3_t4'] = $sesssion3Details->sn3_t4;
				$data['sn3_t5'] = $sesssion3Details->sn3_t5;
				$data['sn3_t6'] = $sesssion3Details->sn3_t6;
				$data['sn3_t7'] = $sesssion3Details->sn3_t7;
				$data['sn3_t8'] = $sesssion3Details->sn3_t8;
				$data['sn3_t9'] = $sesssion3Details->sn3_t9;
				$data['sn3_t10'] = $sesssion3Details->sn3_t10;
				$data['sn3_t11'] = $sesssion3Details->sn3_t11;
				$data['sn3_t12'] = $sesssion3Details->sn3_t12;
			}
			if( $userName_email = $this->getUserByUid( $uid ) ){
					$data['user_full_name'] = $userName_email->name;
				}
			
			$data['session_note_details'] = $session_note1;
			$data['session_note_details3'] = $sesssion3Details;

			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');
			$data['content'] = $this->input->get( 'content');
			$data['sn_date_created'] = $this->input->get( 'sn_date_created');
			$data['sn_uid'] = $this->input->get( 'sn_uid');
			$diet_details = $this->Familyfood_model->getDietitianByID( $dietAdvice['da_diet_id'] );
			$data['diet_details'] = $diet_details;
        
			$this->load->view("diet_view_report.php", $data);

		}
	}

	function downloadPDF(){
		$this->load->view("diet_view_report.php", $data);
	}

	function getReportList(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');

		$adminSession = $this->session->userdata('userid');

		$cService = $this->session->userdata('cservice');

		if ( $sessionvalue == "" && $adminSession == "" && $cService = "" ) {

		    echo 'Login Failed';

		}else {
			if( $this->input->get() ){
				$search_details = $this->input->get( 'search_details' );
				$sort = $this->input->get('sort');
				$limit = $this->input->get('limit');
				$offset = $this->input->get('offset');
				$order = $this->input->get('order');
				if( $search_details['uid'] !== '' || $search_details['date'] !== '' ){
					$reportList = $this->Familyfood_model->getReportList( $search_details, $sort, $limit, $offset, $order )->result_array();
					
					die( json_encode( array( 'rows' => $reportList ) ) );
				}else{
					echo 'Client and name required';
				}
			}
		}
		exit;
	}

	function downloadReport(){
		// $file = date('dmY-His');
		// header("Content-type: text/csv");
		// header("Content-Disposition: attachment; filename=visitors-$file.csv");
		// header("Pragma: no-cache");
		// header("Expires: 0");

	    $output1 = $this->Familyfood_model->getReportSess1( $this->input->get('client_id'), $this->input->get('date') );
	    $name = '';
	    
	    $output = array();
		if( !empty( $output1 ) ){
			$row = $output1->result();
		    $output [] = array( sess1_score , $row->sn_score );
		    $output [] = array( sess1_q4 , $row->sn_quest4 );
	    	$output [] = array( sess1_q5 , $row->sn_quest5 );
		    $output [] = array( sess1_q6 , $row->sn_quest6 );
			$output [] = array( sess1_q8 , $row->sn_quest8 );
        	$output [] = array( sess1_q12 , $row->sn_quest12 );
    	    $output [] = array( sess1_q13 , $row->sn_quest13 );
	        $output [] = array( sess1_q14 , $row->sn_quest14 );
        	$output [] = array( sess1_q15 , $row->sn_quest15 );
    	    $output [] = array( sess1_q16 , $row->sn_quest16 );
	        $output [] = array( sess1_q17 , $row->sn_quest17 );
    	    $output [] = array( sess1_q18 , $row->sn_quest18 );
        	$output [] = array( sess1_q19 , $row->sn_quest19 );
	        $output [] = array( sess1_q20 , $row->sn_quest20 );
    	    $output [] = array( sess1_q21 , $row->sn_quest21 );
    	    $output [] = array( sess1_q21 , $row->sn_quest22 );
    	    $output [] = array( sess1_q21 , $row->sn_quest23 );
		    die( json_encode( $output ) );
		
		}
	    
	    // foreach ($output1->result() as $row)
	    // {
	    // 	$name = $row->client_name;
	    //     // $output .= "\"".sess1_score."\",\"".$row->sn_score."\"\n
	    //     // \"".sess1_q14."\",\"".$row->sn_quest4."\"\n
	    //     // \"".sess1_q5."\",\"".$row->sn_quest5."\"\n
	    //     // \"".sess1_q6."\",\"".$row->sn_quest6."\"\n
	    //     // \"".sess1_q8."\",\"".$row->sn_quest8."\"\n
	    //     // \"".sess1_q12."\",\"".$row->sn_quest12."\"\n
	    //     // \"".sess1_q13."\",\"".$row->sn_quest13."\"\n
	    //     // \"".sess1_q14."\",\"".$row->sn_quest14."\"\n
	    //     // \"".sess1_q15."\",\"".$row->sn_quest15."\"\n
	    //     // \"".sess1_q16."\",\"".$row->sn_quest16."\"\n
	    //     // \"".sess1_q17."\",\"".$row->sn_quest17."\"\n
	    //     // \"".sess1_q18."\",\"".$row->sn_quest18."\"\n
	    //     // \"".sess1_q19."\",\"".$row->sn_quest19."\"\n
	    //     // \"".sess1_q20."\",\"".$row->sn_quest20."\"\n
	    //     // \"".sess1_q21."\",\"".$row->sn_quest21."\"\n";
	    //     $output .= sprintf( '
	    //     	"%s", "%s"
	    //     	"%s", "%s"
	    //     	"%s", "%s"
	    //     	"%s", "%s
	    //     	"%s", "%s"
	    //     	"%s", "%s"
	    //     	"%s", "%s"
	    //     	"%s", "%s"
	    //     	"%s", "%s"
	    //     	"%s", "%s"
	    //     	"%s", "%s"
	    //     	"%s", "%s"
	    //     	"%s", "%s"
	    //     	"%s", "%s"',
	    //     	sess1_score,$row->sn_score,
		   //      sess1_q14,$row->sn_quest4,
		   //      sess1_q5,$row->sn_quest5,
		   //      sess1_q6,$row->sn_quest6,
		   //      sess1_q8,$row->sn_quest8,
		   //      sess1_q12,$row->sn_quest12,
		   //      sess1_q13,$row->sn_quest13,
		   //      sess1_q14,$row->sn_quest14,
		   //      sess1_q15,$row->sn_quest15,
		   //      sess1_q16,$row->sn_quest16,
		   //      sess1_q17,$row->sn_quest17,
		   //      sess1_q18,$row->sn_quest18,
		   //      sess1_q19,$row->sn_quest19,
		   //      sess1_q20,$row->sn_quest20,
		   //      sess1_q21,$row->sn_quest21 );

	    // }

		// $filename = $name."_session1_report_".$this->input->get('date').".csv";

		// header('Content-type: application/csv');

		// header('Content-Disposition: attachment; filename='.$filename);

	    // echo $output;
	}

	function saveUserDetails(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');
		$admin = $this->session->userdata('userid');
		$cservice = $this->session->userdata('cservice');

		if ( $sessionvalue == "" && $admin == "" && $cservice == "" ) {

		    redirect('login/logins');

		} else {
			$comp = $this->Familyfood_model->getAllCompanyNames();
			$data['companies'] = $comp->result_array();
			$data['locations'] = $this->Familyfood_model->getAllLocationNames("");
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');

			if( $this->input->post() ){
				
				$uid = (int)$this->input->post( 'uid' );
				$userDetails = array(
					'firstname' => (string)$this->input->post( 'fname' ),
					'lastname' => (string)$this->input->post( 'lname' ),
					'phonenumber' => (string)$this->input->post( 'phone' ),
					'userid' => (string)$this->input->post( 'email' ),
					'gender' => (string)$this->input->post( 'gender' ),
					'cellnumber' => (string)$this->input->post( 'cellphone' ),
					'birthday' => (string)$this->input->post( 'bday' ),
					'address' => (string)$this->input->post( 'address' ),
				); 

				$insuranceDetails = array(
					'uid' => $uid,
					'userid' => (string)$this->input->post( 'email' ),
					'insurance_id' => (string)$this->input->post( 'insuruance_number' ),
					'insurance_company' => (string)$this->input->post( 'insurance_company' ),
					'other_insurance' => (string)$this->input->post( 'other_insurance' ),
					'primary_insured' => (string)$this->input->post( 'p_insured' ),
					'p_lname' => (string)$this->input->post( 'p_lname' ),
					'p_fname' => (string)$this->input->post( 'p_fname' ),
					'p_bday' => (string)$this->input->post( 'p_bday' ),
				);

				
				if( $this->Familyfood_model->saveUserDetails( $userDetails, $uid,(string)$this->input->post( 'email' ) ) == false ){
					echo false;exit;
				}
				$this->Familyfood_model->saveInsuranceDetails( $insuranceDetails, $uid );
				echo true;
				exit;
			}
		}
	}

	function clientdetails(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();

		$sessionvalue = $this->session->userdata('conuser');
		$admin = $this->session->userdata('userid');
		$cservice = $this->session->userdata('cservice');

		if ( $sessionvalue == "" && $admin == "" && $cservice == "" ) {

		    redirect('login/logins');

		} else {
			$usertype = ( $sessionvalue != "" ) ? 1 : ( ( $admin != "" ) ? 2 : ( ( $cservice != "" ) ? 3 : 0 ) );
			$data['usertype'] = $usertype;

			$comp = $this->Familyfood_model->getAllCompanyNames();
			$data['companies'] = $comp->result_array();
			$data['locations'] = $this->Familyfood_model->getAllLocationNames("");
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');
			$this->load->view("diet_edit_client_details.php", $data);

		}

	}

	function impact(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');
		$sessionvalue_admin = $this->session->userdata('userid');

		if ( $sessionvalue == "" && $sessionvalue_admin == "" ) {

		    redirect('login/logins');

		} else {
			if( $sessionvalue != "" ){
				$dietitian_details = $this->Familyfood_model->getDietitianDetails( $this->session->userdata('conuser') );
				$data['user'] = $dietitian_details->dietitian_id;
				$data['dietitian_id'] = $dietitian_details->dietitian_id;

				$data['impact_details'] = $this->Familyfood_model->getImpactByID( $dietitian_details->dietitian_id );
			}else{
				$dietitian_details = $this->Familyfood_model->getDietitianDetails( $this->session->userdata('conuser') );

				$data['user'] = 0;
				$data['dietitian_id'] = 0;

				$data['dietitian_list'] = $this->Familyfood_model->getDietitianMembers();

				$data['impact_details'] = $this->Familyfood_model->getImpactByID( 0, false, true );
			}
			$this->load->view("diet_impact.php", $data);
		}
	}
	
	function impactList(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');
		$sessionvalue_admin = $this->session->userdata('userid');

		if ( $sessionvalue == "" && $sessionvalue_admin == "" ) {

		    redirect('login/logins');

		} else {
			if( $sessionvalue != "" ){
				$dietitian_details = $this->Familyfood_model->getDietitianDetails( $this->session->userdata('conuser') );
				$data['user'] = $dietitian_details->dietitian_id;
				$data['dietitian_id'] = $dietitian_details->dietitian_id;

				$data['impact_details'] = $this->Familyfood_model->getImpactByID( $dietitian_details->dietitian_id, true );
			}else{
				$dietitian_details = $this->Familyfood_model->getDietitianDetails( $this->session->userdata('conuser') );

				$data['user'] = 0;
				$data['dietitian_id'] = 0;

				$data['dietitian_list'] = $this->Familyfood_model->getDietitianMembers();

				$data['impact_details'] = $this->Familyfood_model->getImpactByID( 0, false, true, true );
			}
			$this->load->view("diet_impact_list.php", $data);
		}
	}
	
	function saveImpactLike(){
	    $diet_id = $this->input->get( 'dietitian_id' );
	    $impact_id = $this->input->get( 'impact_id' );
	    if( $diet_id > 0 && $impact_id > 0 ){
	        $result = $this->Familyfood_model->getInsertUpdateLikes( $diet_id, $impact_id );
    	    
    	    echo die( json_encode( $result ) );   
	    }
	}
	
	function getLikers(){
	    $diet_id = $this->input->get( 'dietitian_id' );
	    $impact_id = $this->input->get( 'impact_id' );
	    
	    $result = $this->Familyfood_model->getDietitianLikes( $impact_id );
	    
	    echo die( json_encode( $result->result_array() ) );
	}

	function getImpact(){
		$diet_id = $this->input->get( 'dietitian_id' );
		$result = $this->Familyfood_model->getImpactByID( $diet_id );

		echo die( json_encode( $result ) );
	}

	function saveimpact(){
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "" && $this->session->userdata('userid') == "" ) {

		    echo 'Error Login';

		} else {
			$dietitian_id = $this->input->get( 'dietitian_id' );
			$di_title = $this->input->get( 'di_title' );
			$di_details = $this->input->get( 'di_details' );
			$di_status = $this->input->get( 'di_status' );
			$by = $this->input->get( 'by' );
			
			echo $this->Familyfood_model->saveImpact( $dietitian_id, $di_title, $di_details, $di_status, $by );
			
		}
	}

	function updateImpactStatus(){
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "" && $this->session->userdata('userid') == "" ) {

		    echo 'Error Login';

		} else {

			$di_id = $this->input->get( 'di_id' );
			$di_status = $this->input->get( 'di_status' );
			
			echo $this->Familyfood_model->updateImpactStatus( $di_id, $di_status );
			
		}
	}



function logins(){
//$this->mail('filart.ervin@gmail.com ', 'test live ervin smtp', 'test live ervin smtp', 'fpwd');
//echo mail( 'filart.ervin@gmail.com', 'test', 'test' );
	 $data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['regerromsg'] = "";
		$data['logindisplay'] = "none";
		$data['reglogindisplay'] = "none";
		$data['cuser'] = "";

		$userid = $this->session->userdata('userid');
		$cuser = $this->session->userdata('cuser');
		$conuser = $this->session->userdata('conuser');
		$cservice = $this->session->userdata('cservice');
		$companyuser = $this->session->userdata('companyuser');

		//check if post
		if( $this->input->post() ){
			$username = $this->input->post( 'inputUserID' );
			$password = $this->input->post( 'inputPassword' );

			if( $username !== '' && $password !== '' ){
				$data = $this->authenticateuser( $username, $password );
				if( !$data ){
					// check for dietitian
					
					if( !$data = $this->counselordetails( $username, $password ) ){
						$data['erromsg'] = '<div class="example example-popover">
							<button type="button" class="btn btn-danger popover-danger sr-only">Danger</button>
							<div class="popover top">
							<div class="arrow"></div>
							<h3 class="popover-title">Login Error</h3>
							<div class="popover-content">
							<p style="color:#808080">Please ensure that your username and password is correct.</p>
							</div>
							</div>
							</div>';
					}else{
						//set dietitian data
						$diet_details = $this->Familyfood_model->getDietitianDetails( $username );
						$this->session->set_userdata('dietitian_id', $diet_details->dietitian_id);
						$this->session->set_userdata('conuser', $username);
						//redirect to dietitian home page
						redirect("login/viewappointments");
					}
					$data['erromsg'] = '<div class="example example-popover">
							<button type="button" class="btn btn-danger popover-danger sr-only">Danger</button>
							<div class="popover top">
							<div class="arrow"></div>
							<h3 class="popover-title">Login Error</h3>
							<div class="popover-content">
							<p style="color:#808080">Please ensure that your username and password is correct.</p>
							</div>
							</div>
							</div>';
				}else{
					if( !$this->checkUserType( $data ) ){
						$data['erromsg'] = '<div class="example example-popover">
							<button type="button" class="btn btn-danger popover-danger sr-only">Danger</button>
							<div class="popover top">
							<div class="arrow"></div>
							<h3 class="popover-title">Login Error</h3>
							<div class="popover-content">
							<p style="color:#808080">Please ensure that your username and password is correct.</p>
							</div>
							</div>
							</div>';
					}
				}

			}else{
				$data['erromsg'] = '<div class="example example-popover">
							<button type="button" class="btn btn-danger popover-danger sr-only">Danger</button>
							<div class="popover top">
							<div class="arrow"></div>
							<h3 class="popover-title">Login Error</h3>
							<div class="popover-content">
							<p style="color:#808080">Please ensure that your username and password is correct.</p>
							</div>
							</div>
							</div>';
			}
		}else{
            if ( ($userid == "") && ($cuser == "") && ($conuser == "") && ($cservice == "") && ($companyuser == "") ) {
                 		   	    
    			$this->load->view('login.php',$data);
    		}
    		else{
    			if($cuser != "") {
    			   	$data['username'] = $this->session->userdata('cuser');
    				redirect("login/searchdietitian");
    		    }
    
    			if($conuser != "") {
    			    $data['conuser'] = $this->session->userdata('conuser');
    				redirect("login/viewappointments");
    		    }
    
    		   	if($cservice != "") {
   
    			    $data['cservice'] = $this->session->userdata('cservice');
    				redirect("login/manageappointments");
    		   	}
    
    		    if($userid != "") {
    				$data['username'] = $this->session->userdata('userid');
    				// redirect("login/index");
    				redirect("login/admin");
    			}
    
    			if($companyuser != "") {
    				$data['companyuser'] = $this->session->userdata('userid');
    				// redirect("login/index");
    				redirect("login/appointments");
    			}
    
    		}   
		}
	$this->load->view('login.php',$data);
	}

	function counselordetails( $username, $pwd ) {

	    $sessionvalue = $this->session->userdata('conuser');
		// $username = $this->input->get_post('username');
		// $pwd = $this->input->get_post('password');
		$query = $this->Familyfood_model->get_counselortype($username,$pwd);

		if ( $sessionvalue == "" ) {

			if ( $query->num_rows() > 0) {

			    $row = $query->row_array(); 
			    
				if ($row['type'] == "counselor" ) {
					
					return true;

				} else {

			        return false;

				}

			} else {

				return false;

			}

		} else {

		    $data['conuser'] = $this->session->userdata('conuser');
			$this->load->view("viewappointments.php", $data);

		}

	}

	function register(){
		$this->load->view('register.php');
	}

	function authenticateuser( $username, $pwd ) {

		$query = $this->Familyfood_model->get_usertype($username,$pwd);

		if ( $query->num_rows() > 0) {
		    $row = $query->row_array();
		    return $row;
		}

		return false;
	}

	function checkUserType( $userDetails ){
		if ( $userDetails['usertype'] == "customer" ) {

			$data['username'] = $this->session->userdata('cuser');
			$this->session->set_userdata( 'cuser', $userDetails['userid'] );
			//redirect to
			redirect("login/searchdietitian");
		}
		elseif( $userDetails['usertype'] == "admin" ){

			$data['username'] = $this->session->userdata('userid');
			$this->session->set_userdata ( 'userid', $userDetails['userid'] );
			// redirect("login/admin");
			redirect("login/admin");
		}elseif( $userDetails['usertype'] == "customerservice" ){
			$this->session->set_userdata( 'cservice', $userDetails['userid'] );
			//redirect to
			redirect("login/manageappointments" );
		}elseif( $userDetails['usertype'] == "companyuser" ){
			$this->session->set_userdata( 'companyuser', $userDetails['userid'] );
			$this->session->set_userdata( 'user_commpany_id', $userDetails['company_id'] );
			//redirect to
			redirect("login/appointments" );
		}else{
			return false;
		}
	}

	function signout() {
	    $cuser = $this->session->userdata('cuser');
		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('cuser');
		$this->session->unset_userdata('conuser');
		$this->session->unset_userdata('cservice');
		$this->session->unset_userdata('companyuser');

		$this->session->unset_userdata($cuser.'serviceid');
		$this->session->unset_userdata($cuser.'servicename');
		$this->session->unset_userdata($cuser.'searchlocation');
		$this->session->unset_userdata($cuser.'company_name');
		$this->session->unset_userdata($cuser.'location_id');
		$this->session->unset_userdata($cuser.'locationname');
		$this->session->sess_destroy();

		$this->cache->clean();
		
		redirect("login/logins");
		ob_clean();
		// redirect("http://localhost/ffstaging/service/login/logins");
		// redirect("http://365webdays.com/ffstaging/service/login/logins");
	}

	function admin(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['username'] = "";

		$sessionvalue = $this->session->userdata('userid');
        
		if ( $sessionvalue == "") {

			// redirect("login/logins");
			redirect("login/logins");

		} else {
			$data['latestBooked'] = $this->Familyfood_model->getLatest5Appointments();
			$data['username'] = $this->session->userdata('userid');
			$data['goalMeterValue'] = $this->Familyfood_model->getGoalMeter();

			$this->load->view( 'index.php', $data );

		}
	}

	function saveGoalMeter(){
		$gm_val = $this->input->get_post('gm_val');
		$gm_max = $this->input->get_post('gm_max');
		
		$output=$this->Familyfood_model->saveGoalMeter($gm_val, $gm_max);

		echo json_encode($output);
	}

	function company() {
        $data['username'] = $this->session->userdata('userid');
		$session = $this->session->userdata('userid');

		if ($session != "") {

			$data['categoryList'] = $this->Familyfood_model->getCategoryList();
			$outputList = $this->displayAllDietitianMembersForCategory();
			$dietitianList1 = "";
			$dietitianList2 = "";
			$dietitianList3 = "";
			$dietitianList4 = "";
			$dietitianList5 = "";
			$dietitianID = 0;
			$dietitianName = "";
			$services = "";

			$data['serviceList'] = $this->Familyfood_model->getAllServices()->result_array();

			foreach( $outputList as $dietitian ){
				if( ( $dietitianID == $dietitian['dietitian_id'] ) || ( $dietitianID == 0 ) ){
					// $services .= $dietitian['name'];
					$services .= '<br />'.$dietitian['name'].', ';
				}else{
					// $dietitianList .= '<optgroup label="'.$dietitianName.'">
					// <option class="small testClass" value="'.$dietitianID.'">'.$services.'</option>
					// </optgroup>';
					$dietitianList1 .= '<li><a href="javascript:void(0);" data-value="option1" tabIndex="-1"><input type="checkbox" id="1_'.$dietitianID.'" onclick="addRemoveDietitian( `'.$dietitianID.'`, this, 1 )"/>&nbsp;<strong>'.$dietitianName.'</strong> <span class="small" style="white-space:normal">'.$services.'</span></a></li>';
					$dietitianList2 .= '<li><a href="javascript:void(0);" data-value="option1" tabIndex="-1"><input type="checkbox" id="2_'.$dietitianID.'" onclick="addRemoveDietitian( `'.$dietitianID.'`, this, 2 )"/>&nbsp;<strong>'.$dietitianName.'</strong> <span class="small" style="white-space:normal">'.$services.'</span></a></li>';
					$dietitianList3 .= '<li><a href="javascript:void(0);" data-value="option1" tabIndex="-1"><input type="checkbox" id="3_'.$dietitianID.'" onclick="addRemoveDietitian( `'.$dietitianID.'`, this, 3 )"/>&nbsp;<strong>'.$dietitianName.'</strong> <span class="small" style="white-space:normal">'.$services.'</span></a></li>';
					$dietitianList4 .= '<li><a href="javascript:void(0);" data-value="option1" tabIndex="-1"><input type="checkbox" id="4_'.$dietitianID.'" onclick="addRemoveDietitian( `'.$dietitianID.'`, this, 4 )"/>&nbsp;<strong>'.$dietitianName.'</strong> <span class="small" style="white-space:normal">'.$services.'</span></a></li>';
					$dietitianList5 .= '<li><a href="javascript:void(0);" data-value="option1" tabIndex="-1"><input type="checkbox" id="5_'.$dietitianID.'" onclick="addRemoveDietitian( `'.$dietitianID.'`, this, 5 )"/>&nbsp;<strong>'.$dietitianName.'</strong> <span class="small" style="white-space:normal">'.$services.'</span></a></li>';
					$services = '<br />'.$dietitian['name'];
				}
				$dietitianName = $dietitian['first_name'].' '.$dietitian['last_name'];
				$dietitianID = $dietitian['dietitian_id'];
			}

			$data['dietitianList1'] = $dietitianList1;
			$data['dietitianList2'] = $dietitianList2;
			$data['dietitianList3'] = $dietitianList3;
			$data['dietitianList4'] = $dietitianList4;
			$data['dietitianList5'] = $dietitianList5;

			$this->load->view("admin_company_view.php", $data);

		} else {

			// redirect("login/logins");
			redirect("login/logins");

		}

	}

	function companyAdd() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ( $sessionvalue != "") {

			$data['servieDetails'] = $this->getServiceDetails();
			$data['result'] = "";
			if( $this->input->get() ){

				$company = $this->input->get( 'company' );
				$data['result'] = $this->addNewCategory( $company );
				
			}

		    $this->load->view( 'admin_company_add.php', $data );

		} else {

		    redirect("login/logins");
		}

	}
	
	function saveCompanyUser(){
		$companyID = $this->input->get_post('companyID');
		$firstname = $this->input->get_post('firstname');
		$lastname = $this->input->get_post('lastname');
		$email = $this->input->get_post('email');

		$user_check = $this->Familyfood_model->get_user_by_userid( $email );
		
		if( !empty( $user_check ) ){
			die('User Already registered!');
		}

		$result = $this->Familyfood_model->saveCompanyUser($companyID, $firstname, $lastname, $email);
		$res = ( !$result ) ? 'Something went wrong, User saving failed! Please try again.' : 'Save Successfully';
		die( json_encode( $res ) );
	}

	function getCompanyUser(){
		$companyID = $this->input->get_post('companyID');
		$companyUsers = $this->Familyfood_model->getCompanyUser( $companyID );
		die( json_encode($companyUsers->result_array()) );
	}

	function service() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ( $sessionvalue != "") {

			$data['servieDetails'] = $this->getServiceDetails();
			$data['dietitianList'] = $this->displayAllDietitians();

		    $this->load->view( 'admin_service_view.php', $data );

		} else {

		    redirect("login/logins");
		}

	}

	function serviceAdd(){

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ( $sessionvalue != "") {

		    $this->load->view( 'admin_service_add.php', $data );

		} else {

		    redirect("login/logins");
		}

	}

	function dietitian(){

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ( $sessionvalue != "") {
			$data['dietitianList'] = $this->getDietitianMembers();
			$data['edit_dietitian_result'] = '';
			$comp = $this->Familyfood_model->getAllCompanyNames();
			$data['companies'] = $comp->result_array();
			$data['locations'] = $this->Familyfood_model->getAllLocationNames("");
			// foreach( $this->Familyfood_model->getAllLocationNames("") as $loc ){
			// 	print_r( $loc );exit;
			// }
		    if( $this->input->get() ){
		    	$dietitian_id = $this->input->get( 'dietitian_id' );
		    	$fname = $this->input->get( 'standard_fullName' );
				$lname = $this->input->get( 'standard_lastName' );
				$alias = $this->input->get( 'standard_Alias' );
				$email = $this->input->get( 'standard_email' );
				$phone = $this->input->get( 'phone_num' );
				$showPhone = $this->input->get( 'showPhonenumberToCustomer' );

				$phone_stat = "No";
				if( $showPhone != "" ){
					$phone_stat = "Yes";
				}

				$res = $this->saveEditDietitianMember( $dietitian_id, $fname, $lname, $alias, $email, $phone, $phone_stat );
				if( $res ){
					$data['edit_dietitian_result'] = 'Update Successfull!';
				}
		    }

		    $this->load->view( 'admin_dietitian_view.php', $data );

		} else {

		    redirect("login/logins");
		}

	}

	function saveEditDietitianMember( $dietitian_id, $fname, $lname, $alias, $email, $mobile, $showPhone ) {

		$smsNotif = "No";
		$emailNotif = "No";

	    $output = $this->Familyfood_model->saveEditDietitianMember($dietitian_id,$fname,$lname,$alias,$email,$mobile,$showPhone,$smsNotif,$emailNotif);

	    return $output;
	}

	function dietitianAdd(){

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$data['dietitianOut'] = "";
		$sessionvalue = $this->session->userdata('userid');

		if( $this->input->get() ){
			$fname = $this->input->get( 'dt_fname' );
			$lname = $this->input->get( 'dt_lname' );
			$alias = $this->input->get( 'dt_alias' );
			$email = $this->input->get( 'dt_email' );
			$phone = $this->input->get( 'dt_phone' );
			$show_phone = "No";

			if( $this->input->get( 'showPhonenumberToCustomer' ) ){
				$show_phone = "Yes";
			}

			$data['dietitianOut'] = $this->saveDietitianMember( $fname, $lname, $alias, $email, $phone, $show_phone );

		}

		if ( $sessionvalue != "") {
		    $this->load->view( 'admin_dietitian_add.php', $data );

		} else {

		    redirect("login/logins");
		}

	}

	function customers(){

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		$page = $this->input->get('page');
		$limit = 25;
		$searchName = "";
		if( $this->input->get() ){
			$searchName = $this->input->get('search');
		}
		if ( $sessionvalue != "") {
			$count = $this->Familyfood_model->countCustomers( $searchName );
			if( $page != "" ){
				$data['curr_page'] = intval($page);
				$data['searchName'] = $searchName;
				$data['customers'] = $this->Familyfood_model->getCustomerPerPage( $limit, $page, $searchName );
			}else{
				$data['searchName'] = $searchName;
				$data['curr_page'] = 0;
				$data['customers'] = $this->Familyfood_model->getCustomerPerPage( $limit, 0, $searchName );
			}

			$data['total_count'] = $count->cust_count;
			// print_r($this->Familyfood_model->countCustomers());exit;
		    $this->load->view( 'admin_customers.php', $data );

		} else {

		    redirect("login/logins");

		}

	}

	function inbox() {

	    $data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		$page = $this->input->get('page');
		$limit = 25;
		$searchName = "";
		if( $this->input->get() ){
			$searchName = $this->input->get('search');
		}

		if ($sessionvalue != "") {
			$count = $this->Familyfood_model->countAppointments( $searchName );
			if( $page != "" ){
				$data['curr_page'] = intval($page);
				$data['searchName'] = $searchName;
				$data['inboxList'] = $this->Familyfood_model->getListOfCurrentAppointmentsPerPage( $limit, $page, $searchName );
			}else{
				$data['searchName'] = $searchName;
				$data['curr_page'] = 0;
				$data['inboxList'] = $this->Familyfood_model->getListOfCurrentAppointmentsPerPage( $limit, 0, $searchName );
			}
			$data['total_count'] = $count->appointment_count;
			// $data['inboxList'] = $this->getListOfAllCurrentAppointments();
			$data['dietitianList'] = $this->displayAllDietitians();
			$this->load->view("admin_inbox.php", $data);

		} else {

			redirect("login/logins");

		}

	}

	function reviews() {

	    $data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$data['reviews'] = $this->displayReviews();
			$this->load->view("admin_reviews.php", $data);

		} else {

			redirect("login/logins");

		}

	}

	function appointments() {

	    $data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');
		$data['companyuser'] = $this->session->userdata('companyuser');
		$data['searchResult'] = array();
		if ($this->session->userdata('userid') != "" || $this->session->userdata('companyuser') != "" ) {
			$company_id = 0;
			if( $this->session->userdata('companyuser') != "" ){
				$company_id = $this->session->userdata('user_commpany_id');
			}
			
			$data['Co_Loc_Srvc_Dietitian'] = $this->getAllCompaniesLocationsServicesandDietitians( $company_id );
			
			$data['client_name'] = "";
			$data['followup_input'] = "";
			$data['company'] = "";
			$data['location'] = "";
			$data['service'] = "";
			$data['dietitian'] = "";
			$data['nameInput'] = "";
			$data['singleDate'] = "";
			$data['rangeDateFrom'] = "";
			$data['rangeDateTo'] = "";
			$data['firstload'] = false;
			if( $this->input->get() ){
				$company = $this->input->get( 'company' );
				$location = $this->input->get( 'location' );
				$service = $this->input->get( 'service' );
				$dietitian = $this->input->get( 'dietitian' );
				$client_name = $this->input->get( 'nameInput' );
				$followup_input = $this->input->get( 'followup_input' );
				$singleDate = $this->input->get( 'singleDate' );
				$rangeDateFrom = $this->input->get( 'rangeDateFrom' );
				$rangeDateTo = $this->input->get( 'rangeDateTo' );

				$data['company'] = $company;
				$data['location'] = $location;
				$data['service'] = $service;
				$data['dietitian'] = $dietitian;
				$data['client_name'] = $client_name;
				$data['followup_input'] = $followup_input;
				$data['singleDate'] = $singleDate;
				$data['rangeDateFrom'] = $rangeDateFrom;
				$data['rangeDateTo'] = $rangeDateTo;

				if( ( $singleDate != "" ) || ( ( $rangeDateFrom !="" ) && ( $rangeDateTo !="" ) ) || 
					( $company !="" ) || ( $location !="" ) || ( $service !="" ) || ( $dietitian !="" ) || ( $client_name !="" ) ) {
					
					$resultSearch = $this->Familyfood_model->getListOfAppointmentsBasedOnCriteria($client_name, $singleDate,$rangeDateFrom,$rangeDateTo,$company,$location,$service,$dietitian, false, $followup_input);
					$newResult = array();
					if( !empty( $resultSearch ) ){
					    foreach( $resultSearch as $res ){
					        $followup = $this->Familyfood_model->getAppointmentFollowup( $res['userid'] );
					        $res['followup'] = '';
					        if( !empty( $followup ) ){
					            $res['followup'] = $followup->da_followup;
					        }
					        
					        $newResult[] = $res;
					    }
					}
					$data['searchResult'] = $newResult;
					$data['firstload'] = false;
				}
			}

			$this->load->view("admin_appointments.php", $data);

		} else {

			redirect("login/logins");

		}

	}

	function calendar() {

		    $data['userid'] = $this->session->userdata('userid');
			$data['username'] = $this->session->userdata('userid');
			$sessionvalue = $this->session->userdata('userid');
			$data['companyuser'] = $this->session->userdata('companyuser');
			$user_commpany_id = 0;
			if( $this->session->userdata('companyuser') != "" ){
				$user_commpany_id = $this->session->userdata('user_commpany_id');
			}
			$output = $this->Familyfood_model->getAllCompanyNames( $user_commpany_id );
			$display_calender= '';
			$company_name = "";
			$outputLocations= '';
			if($output->num_rows() > 0) {

				$first_company=$output->result_array();

				$company_id = 0;
				$list_locations = "";
				foreach( $first_company as $company ){
					$company_name = $company['company_name'];
					$company_id = $company['company_id'];
					
					$list_locations=$this->Familyfood_model->getLocationForCorporateClient($company_id);
					$outputLocations = $list_locations->result_array();
					if( !empty( $outputLocations ) ){
						break;
					}
				}
				
				$locationidforConferences = "";
				if(count($outputLocations) > 0) {

					$locationidforConferences =$outputLocations[0]['location_id'];

				}

				$outputConferences = $this->Familyfood_model->getAllConferenceNames($locationidforConferences);

				$list_locations=$list_locations->result_array();
				// sort($list_locations);
				$result = $this->Familyfood_model->calender($company_id,@date("Y-m-d"));
				$result=$result->result_array();
				$display_calender=array();
				foreach ($list_locations as $key => $value) {
					$i=0;
					if(($result!=='')&&(count($result)>0)){

						foreach($result as $k=>$v){
							if($value['location_id']==$v['location_id']){
								
								$display_calender[$value['location_id']][]=$v;
								$i=1;

							}

						}

					}

					if($i==0){

						$display_calender[$value['location_id']][]=$value;

					}

					break;

				}

			}

			if ($this->session->userdata('userid') != "" || $this->session->userdata('companyuser') != "" ) {
				$company_id = 0;
				if( $this->session->userdata('companyuser') != "" ){
					$company_id = $this->session->userdata('user_commpany_id');
				}

				if($output->num_rows() > 0) {

				$this->load->view("admin_calendar.php", 
					array('company_names'=>$output->result_array(),
						'data'=>$data, //was not used
						'company_data'=>$display_calender,//not yet
						'company_name'=>$company_name,//was not used
						'company_allocations' => $outputLocations,
						'results' => 'Yes',
						'company_locationconfrooms' => $outputConferences->result_array()
					));	

				} else {

				$this->load->view("admin_calendar.php", 
					array(
					'company_names'=>'',
					'data'=>$data,
					'company_data'=>'',
					'company_name'=>'',
					'company_allocations' => '',
					'results' => 'No',
					'company_locationconfrooms' => ''
				));	

			}

			} else {

				redirect( "login/logins" );

			}

	}
	
	function companyresource(){
	    $companyuser = $this->session->userdata('companyuser');
		$data['companyuser'] = $companyuser;
		if( empty( $companyuser ) ){
		    redirect('login/logins');
		}
		
		$this->load->view('company_resource.php',$data);
	}

	function searchdietitian() {

		$cuser = $this->session->userdata('cuser');
		$cservice = $this->session->userdata('cservice');
		$fdietitian = $this->session->userdata('fdietitian');
		$companyuser = $this->session->userdata('companyuser');
		$data['companyuser'] = $companyuser;
		$data['cuser'] = $cuser;
		$data['cservice'] = $cservice;
		$data['fdietitian'] = $fdietitian;
		$fuserid = $this->session->userdata('fuserid');
  		$data['fuserid'] = $fuserid;
		$data['searchlocation']= $this->session->userdata('searchlocation');
        $data['company_name']= $this->session->userdata('company_name');
        $data['companyDetails'] = [];
        if( !empty( $companyuser ) ){
            // get company and state
            $company_id = $this->session->userdata('user_commpany_id');
            $companyDetails = $this->Familyfood_model->getCompanyLocation( $company_id );
            $data['companyDetails'] = $companyDetails;
        }
		$this->load->view('user_index.php',$data);

  	}

  	function selectservice() {

		$cuser = $this->session->userdata('cuser');
		$cservice = $this->session->userdata('cservice');
		$companyuser = $this->session->userdata('companyuser');
		$data['companyuser'] = $companyuser;
		$data['cuser'] = $cuser;

		$data['cservice'] = $cservice;

		$fdietitian = $this->session->userdata('fdietitian');
		
		$data['fdietitian'] = $fdietitian;
		$fuserid = $this->session->userdata('fuserid');
  		$data['fuserid'] = $fuserid;

		$this->load->view('select_service.php',$data);

  	}

  	function timeslots() {

		$cuser = $this->session->userdata('cuser');
		$cservice = $this->session->userdata('cservice');
		$companyuser = $this->session->userdata('companyuser');
		$data['companyuser'] = $companyuser;
		$data['cuser'] = $cuser;
		$data['cservice'] = $cservice;
		$fdietitian = $this->session->userdata('fdietitian');
		$data['fdietitian'] = $fdietitian;
		$fuserid = $this->session->userdata('fuserid');
		$data['fuserid'] = $fuserid;

		$this->load->view('time_slots.php',$data); 

	}

  	// function selectService() {
  	// 	$this->load->view('user_index2.php');
  	// }

  	function insuranceinfo() {

		$admin = $this->session->userdata('userid');
		$customerID = $this->session->userdata('customerID');
		$cuser = $this->session->userdata('cuser');
		$cservice = $this->session->userdata('cservice');
		$companyuser = $this->session->userdata('companyuser');
		$data['companyuser'] = $companyuser;
		$data['admin'] = $admin;
		$data['customerID'] = $customerID;
		$data['cuser'] = $cuser;
		$data['cservice'] = $cservice;
		$fdietitian = $this->session->userdata('fdietitian');
		$data['fdietitian'] = $fdietitian;
		$fuserid = $this->session->userdata('fuserid');
		$data['fuserid'] = $fuserid;
		//edited : get user details
		$data['privacy_consent'] = "";
		if( $cuser != "" ){
			$userDetails = $this->Familyfood_model->getUserDetailsForEdit($cuser);

			$userDetails = $userDetails->result_array() ;

			if( !empty( $userDetails ) ){
				$data['privacy_consent'] = $userDetails[0]['privacy_consent'];
			}else{
				$data['privacy_consent'] = "";
			}
		}
		//end of edit
		$this->load->view("insurance_info.php", $data);

	}

  	function searchdietitian3() {
  		$this->load->view('index_user3.php');
  	}

  	function searchdietitian4() {
  		$this->load->view('index_user4.php');
  	}

  	// function insuranceinfo2() {
  	// 	$data['servicename'] = $this->input->get_post('servicename');
  	// 	$data['datetimeLocation'] = $this->input->get_post('datetimeLocation');
  	// 	$data['nameNumID'] = $this->input->get_post('nameNumID');
  	// 	$data['reason'] = $this->input->get_post('reason');
  	// 	$this->load->view( 'insurance_info2.php', $data );
  	// }

  	function manageappointments() {
  	   
		$sessionvalue = $this->session->userdata('cuser');
		$sessionvalue1 = $this->session->userdata('cservice');
		$data['logindisplay'] = "none";
		$data['cuser'] = "";
		$data['erromsg'] = "";
		$data['regerromsg'] = "";
		$data['reglogindisplay'] = "none";
	   	$data['cuser'] = $sessionvalue;
	   	$data['cservice'] = $sessionvalue1;

		if (($sessionvalue != "") || ($sessionvalue1 != "")) {
			$this->load->view('user_manage.php',$data);
		} else{
		    redirect('login/logins');
		}
	}

	function changepassword() {

		$cuser = $this->session->userdata('cuser');
		$conuser = $this->session->userdata('conuser');
		$editUser = "";

		if($cuser != "") {
			$editUser = $cuser;
		} elseif ($conuser != "") {
			$editUser = $conuser;
		}

		if( $editUser != "" ){
			$output = $this->Familyfood_model->getUserDetailsForEdit( $editUser );

			$data['edituser'] = $editUser;
		}else{
			redirect('login/logins');
		}

		$data['conuser'] = $this->session->userdata('conuser');
		$data['cuser'] = $this->session->userdata('cuser');
		
	    $this->load->view('user_password.php',$data);

	}

	function editprofile() {

		$cuser = $this->session->userdata('cuser');
		$conuser = $this->session->userdata('conuser');
		$editUser = "";

		if($cuser != "") {
			$editUser = $cuser;
		} elseif ($conuser != "") {
			$editUser = $conuser;
		}

		if( $editUser != "" ){
			$output = $this->Familyfood_model->getUserDetailsForEdit( $editUser );

			$data['edituser'] = $output->row_array();
		}else{
			redirect('login/logins');
		}

		$data['conuser'] = $this->session->userdata('conuser');
		$data['cuser'] = $this->session->userdata('cuser');
		
	    $this->load->view('user_profile.php',$data);

	}

	function userreviews () {

		$cservice = $this->session->userdata('cservice');
		$data['cservice'] = $cservice;

		// if( $cservice != "" ){
		$data['reviews'] = $this->Familyfood_model->displayPublishedReviews()->result_array();
		// }else{
		// 	redirect('login/logins');
		// }
		
		$this->load->view('user_reviews.php',$data);

	}

	function viewappointments() {
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "") {

		    redirect('login/logins');

		} else {
            $data['diet_details'] = $this->Familyfood_model->getDietitianDetails($this->session->userdata('conuser'));
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');
			$data['goalMeterValue'] = $this->Familyfood_model->getGoalMeter();
			$this->load->view("diet_view.php", $data);

		}

	} 

	function viewuserappointments(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "") {

		    redirect('login/logins');

		} else {
			$data['userid'] = $this->input->get('userid');
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');
			// $data['goalMeterValue'] = $this->Familyfood_model->getGoalMeter();
			$this->load->view("diet_user_appointments.php", $data);
		}
		
	}

	function walkin(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "") {

		    redirect('login/logins');

		} else {
			$comp = $this->Familyfood_model->getAllCompanyNames();
			$data['companies'] = $comp->result_array();

			$data['locations'] = $this->Familyfood_model->getAllLocationNames("");
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');
			$this->load->view("diet_walkin.php", $data);

		}

	}
	
	function sessionflow(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$data['error'] = "";
		$data['uid'] = 0;
		$data['dietAdvice'] = array( 'da_id', 'da_userid', 'da_weight', 'da_height', 'da_bmi', 'da_whole_grains', 
			'da_vegetables', 'da_fruit', 'da_dairy', 'da_fish', 'da_water', 'da_physical', 'da_body_type', 'da_waist', 'da_neck', 'da_timePerDay', 'da_intensity', 'da_notes' );

		$this->removeSDetails();
		$data['session_note_details'] = array( 'sn_score', 'sn_quest1', 'sn_quest2', 'sn_quest3', 'sn_quest4', 'sn_quest5', 'sn_quest6', 'sn_quest7', 'sn_quest8', 'sn_quest9', 'sn_quest10', 'sn_quest11', 'sn_quest2'
			, 'sn_quest13', 'sn_quest14', 'sn_quest15', 'sn_quest16', 'sn_quest17', 'sn_quest18', 'sn_quest19', 'sn_quest20','sn_quest21', 'sn_quest22', 'sn_quest23', 'sn_diabetes' );
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "") {

		    redirect('login/logins');

		} else {
			$data['dietitian_id'] = $this->session->userdata('dietitian_id');
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');
			$uid = $this->session->userdata('session_note_id');
			$data['user_full_name'] = "";
			$data['dob'] = "";
			if( $this->input->get() || $this->input->post() || $uid != "" ){
				// uid is get
				if( $uid == "" ){
					$uid = $this->input->get( 'uid' );
					$this->session->set_userdata( 'session_note_id', $uid );
				}else{
					if( $uid != $this->input->get( 'uid') && $this->input->get( 'uid' ) != "" ){
						$uid = $this->input->get( 'uid' );
						$this->session->set_userdata( 'session_note_id', $uid );
					}
				}
				$data['uid'] = $uid;
				if( $userName_email = $this->getUserByUid( $uid ) ){
					$data['user_full_name'] = $userName_email->name;
					$data['dob'] = $userName_email->birthday;
				}

				$userid = $this->session->userdata('session_note_userid');

				if( $uid != "" && $uid > 0 ){
					$dietAdvice = (array)$this->Familyfood_model->getAdvice_byUID( $uid );
					$session_note1 = (array)$this->Familyfood_model->getSessionNote1_byUID( $uid );

					$data['dietAdvice'] = $dietAdvice;
					$data['session_note_details'] = $session_note1;
				}else{
					$data['error'] = "Please select client";
				}

				
				$submitType = $this->input->post( 'submit_type' );
				if( $submitType != "" && $uid != "" && $uid > 0 ){
					$now = date( 'Y-m-d H:i:s');
					//session_note 1 details
					$session_note_details = array();
					$session_note_details['sn_score'] = !is_null($this->input->post( 'score' )) ? $this->input->post( 'score' ) : 0;
					$session_note_details['sn_quest1'] = $this->input->post( 'q1' );
					$session_note_details['sn_quest2'] = $this->input->post( 'q2' );
					$session_note_details['sn_quest3'] = $this->input->post( 'q3' );
					$session_note_details['sn_quest4'] = $this->input->post( 'q4' );
					$session_note_details['sn_quest5'] = $this->input->post( 'q5' );
					$session_note_details['sn_quest6'] = $this->input->post( 'q6' );
					$session_note_details['sn_quest7'] = $this->input->post( 'q7' );
					$session_note_details['sn_quest8'] = $this->input->post( 'q8' );
					$session_note_details['sn_quest9'] = $this->input->post( 'q9' );
					$session_note_details['sn_quest10'] = $this->input->post( 'q10' );
					$session_note_details['sn_quest11'] = $this->input->post( 'q11' );
					$session_note_details['sn_quest12'] = $this->input->post( 'q12' );
					$session_note_details['sn_quest13'] = $this->input->post( 'q13' );
					$session_note_details['sn_quest14'] = $this->input->post( 'q14' );
					$session_note_details['sn_quest15'] = $this->input->post( 'q15' );
					$session_note_details['sn_quest16'] = $this->input->post( 'q16' );
					$session_note_details['sn_quest17'] = $this->input->post( 'q17' );
					$session_note_details['sn_quest18'] = $this->input->post( 'q18' );
					$session_note_details['sn_quest19'] = $this->input->post( 'q19' );
					$session_note_details['sn_quest20'] = $this->input->post( 'q20' );
					$session_note_details['sn_quest21'] = $this->input->post( 'q21' );
					$session_note_details['sn_quest22'] = $this->input->post( 'q22' );
					$session_note_details['sn_quest23'] = $this->input->post( 'q23' );
					$session_note_details['sn_diabetes'] = $this->input->post( 'sn_diabetes' );
                    
					$session_note_details['sn_uid'] = (int)$uid;
					$session_note_details['sn_date_created'] = $now;
					$session_note_details['sn_date_updated'] = $now;
					// BMI
					$handouts = '';
					$hand_out = $this->input->post( 'handout' );
					if( !empty( $hand_out ) ){
						$handouts = implode( ',', $this->input->post( 'handout' ) );
					}

					$diet_advice = array();
					$diet_advice['da_userid'] = $userid;
					$diet_advice['da_diet_id'] = $this->session->userdata('dietitian_id');
					$diet_advice['da_weight'] = !is_null($this->input->post( 'weight' )) ? (int)$this->input->post( 'weight' ) : 0;
					$diet_advice['da_height'] = !is_null($this->input->post( 'height' )) ? (int)$this->input->post( 'height' ) : 0;
					$diet_advice['da_systolic'] = !is_null($this->input->post( 'systolic' )) ? (int)$this->input->post( 'systolic' ) : 0;
					$diet_advice['da_diastolic'] = !is_null($this->input->post( 'diastolic' )) ? (int)$this->input->post( 'diastolic' ) : 0;
					$diet_advice['da_body_type'] = !is_null($this->input->post( 'bodyShape' )) ? (int)$this->input->post( 'bodyShape' ) : 0;
					$diet_advice['da_neck'] = !is_null($this->input->post( 'neck' )) ? (int)$this->input->post( 'neck' ) : 0;
					$diet_advice['da_waist'] = !is_null($this->input->post( 'waist' )) ? (int)$this->input->post( 'waist' ) : 0;
					$diet_advice['da_bmi'] = !is_null($this->input->post( 'bmi' )) ? $this->input->post( 'bmi' ) : 0;
					$diet_advice['da_goalMet'] = $this->input->post( 'da_goalMet' );
					$diet_advice['da_whole_grains'] = (int)$this->input->post( 'da_whole_grains' );
					$diet_advice['da_vegetables'] = (int)$this->input->post( 'da_vegetables' );
					$diet_advice['da_fruit'] = (int)$this->input->post( 'da_fruit' );
					$diet_advice['da_dairy'] = (int)$this->input->post( 'da_dairy' );
					$diet_advice['da_fish'] = (int)$this->input->post( 'da_fish' );
					$diet_advice['da_water'] =(int) $this->input->post( 'da_water' );
					$diet_advice['da_physical'] = (int)$this->input->post( 'da_physical' );
					$diet_advice['da_uid'] = (int)$uid;
					$diet_advice['da_nutritionalGoal'] = $this->input->post( 'da_nutritionalGoal' );
					$diet_advice['da_physicalGoal'] = $this->input->post( 'da_physicalGoal' );
					$diet_advice['da_timePerDay'] = $this->input->post( 'da_timePerDay' );
					$diet_advice['da_intensity'] = $this->input->post( 'da_intensity' );
					$diet_advice['da_notes'] = $this->input->post( 'da_notes' );
					//$diet_advice['da_followup'] = $this->input->post( 'da_followup' );
					$diet_advice['da_date_created'] = $now;
					$diet_advice['da_date_updated'] = $now;
					
					$data['dietAdvice'] = $diet_advice;

					$data['session_note_details'] = $session_note_details;

					// insert session note 1 details
					if( !$this->Familyfood_model->insertSessionNote1( $session_note_details, $uid ) ){
						$data['error'] = "Error on saving Nutrion Assessment";
					}

					// insert advice 
					if( !$this->Familyfood_model->insertDietAdvice( $diet_advice, $uid ) ){
						$data['error'] = "Error on saving advice";
					}

					if( $submitType == 1 ){
						redirect('login/sessionflow2');
					}
				}
			}

			$this->load->view("diet_session_notes.php", $data);

		}

	}

	function getuser(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "") {

		    echo 'Login failed';

		} else {
			$diet_details = $this->Familyfood_model->getDietitianDetails( $this->session->userdata('conuser') );

			$users = $this->Familyfood_model->getClientNameDetails( $diet_details->dietitian_id );
			
			die( json_encode( $users ) );
		}
	}

	function getAlluser(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('userid');
		$sessionvalue1 = $this->session->userdata('cservice');

		if ( $sessionvalue == "" && $sessionvalue1 == "" ) {

		    echo 'Login failed';

		} else {
			// $diet_details = $this->Familyfood_model->getDietitianDetails( $this->session->userdata('conuser') );

			$users = $this->Familyfood_model->getClientNameDetails( 0 );
			
			die( json_encode( $users ) );
		}
	}

	function getUser_ajax(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');
		$admin = $this->session->userdata('userid');
		$cservice = $this->session->userdata('cservice');

		if ( $sessionvalue == "" && $admin == "" && $cservice == "" ) {

		    echo 'Login failed';

		} else {
			if( $this->input->post() ){
				$users = $this->Familyfood_model->getUser_byID( $this->input->post( 'uid' ) );

				die( json_encode( $users ) );
			}
		}
	}

	function getUserByUid( $uid ){
		if( $uid > 0 && $uid != "" ){
			$users = $this->Familyfood_model->getUserDetails_byUID( $uid );
			$this->session->set_userdata( 'session_note_userid', $users->userid );

			return $users;
		}else{ return false; }
	}

	function getUserDetailsSessionNote(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "") {

		    echo 'Login failed';

		} else {
			if( $this->input->get() ){
				$userid = $this->input->get( 'userid' );

				$users = $this->Familyfood_model->getClientDetails( $userid );
				die( json_encode( $users ) );
			}
		}
	}
	
	function sessionflow2(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$data['session_note_details2'] = array( 'bundle1' => array(), 'bundle2' => array(), 'bundle3' => array(), 'bundle4' => array(), 'bundle5' => array(),
		'bundle6' => array(), 'bundle7' => array(), 'bundle8' => array(), 'bundle9' => array(), 'bundle10' => array(),
		'bundle11' => array(), 'bundle12' => array(), 'bundle13' => array(), 'bundle14' => array(), 'bundle15' => array(),
		'bundle16' => array(), 'bundle17' => array(), 'bundle18' => array(), 'bundle19' => array(), 'bundle20' => array() );

		$data['dietAdvice'] = array( 'da_id', 'da_userid', 'da_weight', 'da_height', 'da_bmi', 'da_whole_grains', 
			'da_vegetables', 'da_fruit', 'da_dairy', 'da_fish', 'da_water', 'da_physical', 'da_body_type', 'da_waist', 'da_neck', 'da_timePerDay', 'da_intensity', 'da_notes' );

		$data['user_full_name'] = "";
		$data['dob'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');
		$uid = $this->session->userdata('session_note_id');

		if ( $sessionvalue == "" ) {

		    redirect('login/logins');

		} else {
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');

			if( $this->input->post() || ( $uid != "" && $uid > 0 ) ){
				// uid is get
				$dietAdvice = (array)$this->Familyfood_model->getAdvice_byUID( $uid );

				$data['dietAdvice'] = $dietAdvice;

				if( $userName_email = $this->getUserByUid( $uid ) ){
					$data['user_full_name'] = $userName_email->name;
					$data['dob'] = $userName_email->birthday;
				}
				//get session note details 2
				$session2Details = $this->Familyfood_model->getSessionNote2_byUID( $uid );
				if( !empty( $session2Details ) ){
					$data['session_note_details2'] = array( 
						'bundle1' => preg_split('/\h*[][]/', $session2Details->sn2_bundle1, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle2' => preg_split('/\h*[][]/', $session2Details->sn2_bundle2, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle3' => preg_split('/\h*[][]/', $session2Details->sn2_bundle3, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle4' => preg_split('/\h*[][]/', $session2Details->sn2_bundle4, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle5' => preg_split('/\h*[][]/', $session2Details->sn2_bundle5, -1, PREG_SPLIT_NO_EMPTY ),
						'bundle6' => preg_split('/\h*[][]/', $session2Details->sn2_bundle6, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle7' => preg_split('/\h*[][]/', $session2Details->sn2_bundle7, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle8' => preg_split('/\h*[][]/', $session2Details->sn2_bundle8, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle9' => preg_split('/\h*[][]/', $session2Details->sn2_bundle9, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle10' => preg_split('/\h*[][]/', $session2Details->sn2_bundle10, -1, PREG_SPLIT_NO_EMPTY ),
						'bundle11' => preg_split('/\h*[][]/', $session2Details->sn2_bundle11, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle12' => preg_split('/\h*[][]/', $session2Details->sn2_bundle12, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle13' => preg_split('/\h*[][]/', $session2Details->sn2_bundle13, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle14' => preg_split('/\h*[][]/', $session2Details->sn2_bundle14, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle15' => preg_split('/\h*[][]/', $session2Details->sn2_bundle15, -1, PREG_SPLIT_NO_EMPTY ),
						'bundle16' => preg_split('/\h*[][]/', $session2Details->sn2_bundle16, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle17' => preg_split('/\h*[][]/', $session2Details->sn2_bundle17, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle18' => preg_split('/\h*[][]/', $session2Details->sn2_bundle18, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle19' => preg_split('/\h*[][]/', $session2Details->sn2_bundle19, -1, PREG_SPLIT_NO_EMPTY ), 
						'bundle20' => preg_split('/\h*[][]/', $session2Details->sn2_bundle20, -1, PREG_SPLIT_NO_EMPTY ),
					);
				}
				$submitType = $this->input->post( 'submit_type' );
				$save = $this->input->post( 'save' );
				if( $submitType > 0 || $save == 'Save' ){
					//bundle multiple select
					$bundle1_select = array_key_exists('bundle1_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle1_select' ) ) : "''";
					$bundle2_select = array_key_exists('bundle2_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle2_select' ) ) : "''";
					$bundle3_select = array_key_exists('bundle3_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle3_select' ) ) : "''";
					$bundle4_select = array_key_exists('bundle4_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle4_select' ) ) : "''";
					$bundle5_select = array_key_exists('bundle5_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle5_select' ) ) : "''";
					$bundle6_select = array_key_exists('bundle6_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle6_select' ) ) : "''";
					$bundle7_select = array_key_exists('bundle7_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle7_select' ) ) : "''";
					$bundle8_select = array_key_exists('bundle8_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle8_select' ) ) : "''";
					$bundle9_select = array_key_exists('bundle9_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle9_select' ) ) : "''";
					$bundle10_select = array_key_exists('bundle10_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle10_select' ) ) : "''";
					$bundle11_select = array_key_exists('bundle11_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle11_select' ) ) : "''";
					$bundle12_select = array_key_exists('bundle12_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle12_select' ) ) : "''";
					$bundle13_select = array_key_exists('bundle13_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle13_select' ) ) : "''";
					$bundle14_select = array_key_exists('bundle14_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle14_select' ) ) : "''";
					$bundle15_select = array_key_exists('bundle15_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle15_select' ) ) : "''";
					$bundle16_select = array_key_exists('bundle16_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle16_select' ) ) : "''";
					$bundle17_select = array_key_exists('bundle17_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle17_select' ) ) : "''";
					$bundle18_select = array_key_exists('bundle18_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle18_select' ) ) : "''";
					$bundle19_select = array_key_exists('bundle19_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle19_select' ) ) : "''";
					$bundle20_select = array_key_exists('bundle20_select', $this->input->post()) ? implode( ',', $this->input->post( 'bundle20_select' ) ) : "''";
					//bundle etimology
					$b1_eti = $this->input->post( 'bundle1_eti' );
					$b2_eti = $this->input->post( 'bundle2_eti' );
					$b3_eti = $this->input->post( 'bundle3_eti' );
					$b4_eti = $this->input->post( 'bundle4_eti' );
					$b5_eti = $this->input->post( 'bundle5_eti' );
					$b6_eti = $this->input->post( 'bundle6_eti' );
					$b7_eti = $this->input->post( 'bundle7_eti' );
					$b8_eti = $this->input->post( 'bundle8_eti' );
					$b9_eti = $this->input->post( 'bundle9_eti' );
					$b10_eti = $this->input->post( 'bundle10_eti' );
					$b11_eti = $this->input->post( 'bundle11_eti' );
					$b12_eti = $this->input->post( 'bundle12_eti' );
					$b13_eti = $this->input->post( 'bundle13_eti' );
					$b14_eti = $this->input->post( 'bundle14_eti' );
					$b15_eti = $this->input->post( 'bundle15_eti' );
					$b16_eti = $this->input->post( 'bundle16_eti' );
					$b17_eti = $this->input->post( 'bundle17_eti' );
					$b18_eti = $this->input->post( 'bundle18_eti' );
					$b19_eti = $this->input->post( 'bundle19_eti' );
					$b20_eti = $this->input->post( 'bundle20_eti' );

					$bundle1_eti = !empty( $b1_eti ) ? $this->input->post( 'bundle1_eti' ) : "NULL";
					$bundle2_eti = !empty( $b2_eti ) ? $this->input->post( 'bundle2_eti' ) : "NULL";
					$bundle3_eti = !empty( $b3_eti ) ? $this->input->post( 'bundle3_eti' ) : "NULL";
					$bundle4_eti = !empty( $b4_eti ) ? $this->input->post( 'bundle4_eti' ) : "NULL";
					$bundle5_eti = !empty( $b5_eti ) ? $this->input->post( 'bundle5_eti' ) : "NULL";
					$bundle6_eti = !empty( $b6_eti ) ? $this->input->post( 'bundle6_eti' ) : "NULL";
					$bundle7_eti = !empty( $b7_eti ) ? $this->input->post( 'bundle7_eti' ) : "NULL";
					$bundle8_eti = !empty( $b8_eti ) ? $this->input->post( 'bundle8_eti' ) : "NULL";
					$bundle9_eti = !empty( $b9_eti ) ? $this->input->post( 'bundle9_eti' ) : "NULL";
					$bundle10_eti = !empty( $b10_eti ) ? $this->input->post( 'bundle10_eti' ) : "NULL";
					$bundle11_eti = !empty( $b11_eti ) ? $this->input->post( 'bundle11_eti' ) : "NULL";
					$bundle12_eti = !empty( $b12_eti ) ? $this->input->post( 'bundle12_eti' ) : "NULL";
					$bundle13_eti = !empty( $b13_eti ) ? $this->input->post( 'bundle13_eti' ) : "NULL";
					$bundle14_eti = !empty( $b14_eti ) ? $this->input->post( 'bundle14_eti' ) : "NULL";
					$bundle15_eti = !empty( $b15_eti ) ? $this->input->post( 'bundle15_eti' ) : "NULL";
					$bundle16_eti = !empty( $b16_eti ) ? $this->input->post( 'bundle16_eti' ) : "NULL";
					$bundle17_eti = !empty( $b17_eti ) ? $this->input->post( 'bundle17_eti' ) : "NULL";
					$bundle18_eti = !empty( $b18_eti ) ? $this->input->post( 'bundle18_eti' ) : "NULL";
					$bundle19_eti = !empty( $b19_eti ) ? $this->input->post( 'bundle19_eti' ) : "NULL";
					$bundle20_eti = !empty( $b20_eti ) ? $this->input->post( 'bundle20_eti' ) : "NULL";
					//bundle sign
					$b1_sign = $this->input->post( 'bundle1_sign' );
					$b2_sign = $this->input->post( 'bundle2_sign' );
					$b3_sign = $this->input->post( 'bundle3_sign' );
					$b4_sign = $this->input->post( 'bundle4_sign' );
					$b5_sign = $this->input->post( 'bundle5_sign' );
					$b6_sign = $this->input->post( 'bundle6_sign' );
					$b7_sign = $this->input->post( 'bundle7_sign' );
					$b8_sign = $this->input->post( 'bundle8_sign' );
					$b9_sign = $this->input->post( 'bundle9_sign' );
					$b10_sign = $this->input->post( 'bundle10_sign' );
					$b11_sign = $this->input->post( 'bundle11_sign' );
					$b12_sign = $this->input->post( 'bundle12_sign' );
					$b13_sign = $this->input->post( 'bundle13_sign' );
					$b14_sign = $this->input->post( 'bundle14_sign' );
					$b15_sign = $this->input->post( 'bundle15_sign' );
					$b16_sign = $this->input->post( 'bundle16_sign' );
					$b17_sign = $this->input->post( 'bundle17_sign' );
					$b18_sign = $this->input->post( 'bundle19_sign' );
					$b19_sign = $this->input->post( 'bundle19_sign' );
					$b20_sign = $this->input->post( 'bundle20_sign' );

					$bundle1_sign = !empty($b1_sign) ? $this->input->post( 'bundle1_sign' ) : "NULL";
					$bundle2_sign = !empty($b2_sign) ? $this->input->post( 'bundle2_sign' ) : "NULL";
					$bundle3_sign = !empty($b3_sign) ? $this->input->post( 'bundle3_sign' ) : "NULL";
					$bundle4_sign = !empty($b4_sign) ? $this->input->post( 'bundle4_sign' ) : "NULL";
					$bundle5_sign = !empty($b5_sign) ? $this->input->post( 'bundle5_sign' ) : "NULL";
					$bundle6_sign = !empty($b6_sign) ? $this->input->post( 'bundle6_sign' ) : "NULL";
					$bundle7_sign = !empty($b7_sign) ? $this->input->post( 'bundle7_sign' ) : "NULL";
					$bundle8_sign = !empty($b8_sign) ? $this->input->post( 'bundle8_sign' ) : "NULL";
					$bundle9_sign = !empty($b9_sign) ? $this->input->post( 'bundle9_sign' ) : "NULL";
					$bundle10_sign = !empty($b10_sign) ? $this->input->post( 'bundle10_sign' ) : "NULL";
					$bundle11_sign = !empty($b11_sign) ? $this->input->post( 'bundle11_sign' ) : "NULL";
					$bundle12_sign = !empty($b12_sign) ? $this->input->post( 'bundle12_sign' ) : "NULL";
					$bundle13_sign = !empty($b13_sign) ? $this->input->post( 'bundle13_sign' ) : "NULL";
					$bundle14_sign = !empty($b14_sign) ? $this->input->post( 'bundle14_sign' ) : "NULL";
					$bundle15_sign = !empty($b15_sign) ? $this->input->post( 'bundle15_sign' ) : "NULL";
					$bundle16_sign = !empty($b16_sign) ? $this->input->post( 'bundle16_sign' ) : "NULL";
					$bundle17_sign = !empty($b17_sign) ? $this->input->post( 'bundle17_sign' ) : "NULL";
					$bundle18_sign = !empty($b18_sign) ? $this->input->post( 'bundle18_sign' ) : "NULL";
					$bundle19_sign = !empty($b19_sign) ? $this->input->post( 'bundle19_sign' ) : "NULL";
					$bundle20_sign = !empty($b20_sign) ? $this->input->post( 'bundle20_sign' ) : "NULL";

					//bundle specific
					$b5_spec = $this->input->post( 'bundle5_spec' );
					$b6_spec = $this->input->post( 'bundle6_spec' );
					$b7_spec = $this->input->post( 'bundle7_spec' );
					$b8_spec = $this->input->post( 'bundle8_spec' );
					$b9_spec = $this->input->post( 'bundle9_spec' );
					$b10_spec = $this->input->post( 'bundl10_spec' );
					$b12_spec = $this->input->post( 'bundle12_spec' );
					$b14_spec = $this->input->post( 'bundle14_spec' );

					$bundle5_spec = !empty($b5_spec) ? $this->input->post( 'bundle5_spec' ) : "NULL";
					$bundle6_spec = !empty($b5_spec) ? $this->input->post( 'bundle6_spec' ) : "NULL";
					$bundle7_spec = !empty($b5_spec) ? $this->input->post( 'bundle7_spec' ) : "NULL";
					$bundle8_spec = !empty($b5_spec) ? $this->input->post( 'bundle8_spec' ) : "NULL";
					$bundle9_spec = !empty($b5_spec) ? $this->input->post( 'bundle9_spec' ) : "NULL";
					$bundle10_spec = !empty($b5_spec) ? $this->input->post( 'bundle10_spec' ) : "NULL";
					$bundle12_spec = !empty($b5_spec) ? $this->input->post( 'bundle12_spec' ) : "NULL";
					$bundle14_spec = !empty($b5_spec) ? $this->input->post( 'bundle14_spec' ) : "NULL";


					//bundle diagnosis
					$b1_diag = $this->input->post( 'bundle1_diag' );
					$b2_diag = $this->input->post( 'bundle2_diag' );
					$b3_diag = $this->input->post( 'bundle3_diag' );
					$b4_diag = $this->input->post( 'bundle4_diag' );
					$b5_diag = $this->input->post( 'bundle5_diag' );
					$b6_diag = $this->input->post( 'bundle6_diag' );
					$b7_diag = $this->input->post( 'bundle7_diag' );
					$b8_diag = $this->input->post( 'bundle8_diag' );
					$b9_diag = $this->input->post( 'bundle9_diag' );
					$b10_diag = $this->input->post( 'bundle10_diag' );
					$b11_diag = $this->input->post( 'bundle11_diag' );
					$b12_diag = $this->input->post( 'bundle12_diag' );
					$b13_diag = $this->input->post( 'bundle13_diag' );
					$b14_diag = $this->input->post( 'bundle14_diag' );
					$b15_diag = $this->input->post( 'bundle15_diag' );
					$b16_diag = $this->input->post( 'bundle16_diag' );
					$b17_diag = $this->input->post( 'bundle17_diag' );
					$b18_diag = $this->input->post( 'bundle19_diag' );
					$b19_diag = $this->input->post( 'bundle19_diag' );
					$b20_diag = $this->input->post( 'bundle20_diag' );

					$bundle1_diag = !empty($b1_diag) ? $this->input->post( 'bundle1_diag' ) : "NULL";
					$bundle2_diag = !empty($b2_diag) ? $this->input->post( 'bundle2_diag' ) : "NULL";
					$bundle3_diag = !empty($b3_diag) ? $this->input->post( 'bundle3_diag' ) : "NULL";
					$bundle4_diag = !empty($b4_diag) ? $this->input->post( 'bundle4_diag' ) : "NULL";
					$bundle5_diag = !empty($b5_diag) ? $this->input->post( 'bundle5_diag' ) : "NULL";
					$bundle6_diag = !empty($b6_diag) ? $this->input->post( 'bundle6_diag' ) : "NULL";
					$bundle7_diag = !empty($b7_diag) ? $this->input->post( 'bundle7_diag' ) : "NULL";
					$bundle8_diag = !empty($b8_diag) ? $this->input->post( 'bundle8_diag' ) : "NULL";
					$bundle9_diag = !empty($b9_diag) ? $this->input->post( 'bundle9_diag' ) : "NULL";
					$bundle10_diag = !empty($b10_diag) ? $this->input->post( 'bundle10_diag' ) : "NULL";
					$bundle11_diag = !empty($b11_diag) ? $this->input->post( 'bundle11_diag' ) : "NULL";
					$bundle12_diag = !empty($b12_diag) ? $this->input->post( 'bundle12_diag' ) : "NULL";
					$bundle13_diag = !empty($b13_diag) ? $this->input->post( 'bundle13_diag' ) : "NULL";
					$bundle14_diag = !empty($b14_diag) ? $this->input->post( 'bundle14_diag' ) : "NULL";
					$bundle15_diag = !empty($b15_diag) ? $this->input->post( 'bundle15_diag' ) : "NULL";
					$bundle16_diag = !empty($b16_diag) ? $this->input->post( 'bundle16_diag' ) : "NULL";
					$bundle17_diag = !empty($b17_diag) ? $this->input->post( 'bundle17_diag' ) : "NULL";
					$bundle18_diag = !empty($b18_diag) ? $this->input->post( 'bundle18_diag' ) : "NULL";
					$bundle19_diag = !empty($b19_diag) ? $this->input->post( 'bundle19_diag' ) : "NULL";
					$bundle20_diag = !empty($b20_diag) ? $this->input->post( 'bundle20_diag' ) : "NULL";
					//combined strings
					$bundle1 = '['.$bundle1_select.']'.'['.$bundle1_eti.']'.'['.$bundle1_sign.']'.'['.$bundle1_diag.']';
					$bundle2 = '['.$bundle2_select.']'.'['.$bundle2_eti.']'.'['.$bundle2_sign.']'.'['.$bundle2_diag.']';
					$bundle3 = '['.$bundle3_select.']'.'['.$bundle3_eti.']'.'['.$bundle3_sign.']'.'['.$bundle3_diag.']';
					$bundle4 = '['.$bundle4_select.']'.'['.$bundle4_eti.']'.'['.$bundle4_sign.']'.'['.$bundle4_diag.']';
					$bundle5 = '['.$bundle5_select.']'.'['.$bundle5_spec.']'.'['.$bundle5_eti.']'.'['.$bundle5_sign.']'.'['.$bundle5_diag.']';
					$bundle6 = '['.$bundle6_select.']'.'['.$bundle6_spec.']'.'['.$bundle6_eti.']'.'['.$bundle6_sign.']'.'['.$bundle6_diag.']';
					$bundle7 = '['.$bundle7_select.']'.'['.$bundle7_spec.']'.'['.$bundle7_eti.']'.'['.$bundle7_sign.']'.'['.$bundle7_diag.']';
					$bundle8 = '['.$bundle8_select.']'.'['.$bundle8_spec.']'.'['.$bundle8_eti.']'.'['.$bundle8_sign.']'.'['.$bundle8_diag.']';
					$bundle9 = '['.$bundle9_select.']'.'['.$bundle9_spec.']'.'['.$bundle9_eti.']'.'['.$bundle9_sign.']'.'['.$bundle9_diag.']';
					$bundle10 = '['.$bundle10_select.']'.'['.$bundle10_spec.']'.'['.$bundle10_eti.']'.'['.$bundle10_sign.']'.'['.$bundle10_diag.']';
					$bundle11 = '['.$bundle11_select.']'.'['.$bundle11_eti.']'.'['.$bundle11_sign.']'.'['.$bundle11_diag.']';
					$bundle12 = '['.$bundle12_select.']'.'['.$bundle12_spec.']'.'['.$bundle12_eti.']'.'['.$bundle12_sign.']'.'['.$bundle12_diag.']';
					$bundle13 = '['.$bundle13_select.']'.'['.$bundle13_eti.']'.'['.$bundle13_sign.']'.'['.$bundle13_diag.']';
					$bundle14 = '['.$bundle14_select.']'.'['.$bundle14_spec.']'.'['.$bundle14_eti.']'.'['.$bundle14_sign.']'.'['.$bundle14_diag.']';
					$bundle15 = '['.$bundle15_select.']'.'['.$bundle15_eti.']'.'['.$bundle15_sign.']'.'['.$bundle15_diag.']';
					$bundle16 = '['.$bundle16_select.']'.'['.$bundle16_eti.']'.'['.$bundle16_sign.']'.'['.$bundle16_diag.']';
					$bundle17 = '['.$bundle17_select.']'.'['.$bundle17_eti.']'.'['.$bundle17_sign.']'.'['.$bundle17_diag.']';
					$bundle18 = '['.$bundle18_select.']'.'['.$bundle18_eti.']'.'['.$bundle18_sign.']'.'['.$bundle18_diag.']';
					$bundle19 = '['.$bundle19_select.']'.'['.$bundle19_eti.']'.'['.$bundle19_sign.']'.'['.$bundle19_diag.']';
					$bundle20 = '['.$bundle20_select.']'.'['.$bundle20_eti.']'.'['.$bundle20_sign.']'.'['.$bundle20_diag.']';

					$data['session_note_details2'] = array(
						'bundle1' => preg_split('/\h*[][]/', $bundle1, -1, PREG_SPLIT_NO_EMPTY),
						'bundle2' => preg_split('/\h*[][]/', $bundle2, -1, PREG_SPLIT_NO_EMPTY),
						'bundle3' => preg_split('/\h*[][]/', $bundle3, -1, PREG_SPLIT_NO_EMPTY),
						'bundle4' => preg_split('/\h*[][]/', $bundle4, -1, PREG_SPLIT_NO_EMPTY),
						'bundle5' => preg_split('/\h*[][]/', $bundle5, -1, PREG_SPLIT_NO_EMPTY),
						'bundle6' => preg_split('/\h*[][]/', $bundle6, -1, PREG_SPLIT_NO_EMPTY),
						'bundle7' => preg_split('/\h*[][]/', $bundle7, -1, PREG_SPLIT_NO_EMPTY),
						'bundle8' => preg_split('/\h*[][]/', $bundle8, -1, PREG_SPLIT_NO_EMPTY),
						'bundle9' => preg_split('/\h*[][]/', $bundle9, -1, PREG_SPLIT_NO_EMPTY),
						'bundle10' => preg_split('/\h*[][]/', $bundle10, -1, PREG_SPLIT_NO_EMPTY),
						'bundle11' => preg_split('/\h*[][]/', $bundle11, -1, PREG_SPLIT_NO_EMPTY),
						'bundle12' => preg_split('/\h*[][]/', $bundle12, -1, PREG_SPLIT_NO_EMPTY),
						'bundle13' => preg_split('/\h*[][]/', $bundle13, -1, PREG_SPLIT_NO_EMPTY),
						'bundle14' => preg_split('/\h*[][]/', $bundle14, -1, PREG_SPLIT_NO_EMPTY),
						'bundle15' => preg_split('/\h*[][]/', $bundle15, -1, PREG_SPLIT_NO_EMPTY),
						'bundle16' => preg_split('/\h*[][]/', $bundle16, -1, PREG_SPLIT_NO_EMPTY),
						'bundle17' => preg_split('/\h*[][]/', $bundle17, -1, PREG_SPLIT_NO_EMPTY),
						'bundle18' => preg_split('/\h*[][]/', $bundle18, -1, PREG_SPLIT_NO_EMPTY),
						'bundle19' => preg_split('/\h*[][]/', $bundle19, -1, PREG_SPLIT_NO_EMPTY),
						'bundle20' => preg_split('/\h*[][]/', $bundle20, -1, PREG_SPLIT_NO_EMPTY),
					);
					// print_r( $split );
					//insert to session note 2
					$now = date( 'Y-m-d H:i:s');
					$regist_data = array(
						'sn2_bundle1' => $bundle1, 
						'sn2_bundle2' => $bundle2,
						'sn2_bundle3' => $bundle3,
						'sn2_bundle4' => $bundle4,
						'sn2_bundle5' => $bundle5,
						'sn2_bundle6' => $bundle6, 
						'sn2_bundle7' => $bundle7,
						'sn2_bundle8' => $bundle8,
						'sn2_bundle9' => $bundle9,
						'sn2_bundle10' => $bundle10,
						'sn2_bundle11' => $bundle11, 
						'sn2_bundle12' => $bundle12,
						'sn2_bundle13' => $bundle13,
						'sn2_bundle14' => $bundle14,
						'sn2_bundle15' => $bundle15,
						'sn2_bundle16' => $bundle16, 
						'sn2_bundle17' => $bundle17,
						'sn2_bundle18' => $bundle18,
						'sn2_bundle19' => $bundle19,
						'sn2_bundle20' => $bundle20,
						'sn2_uid' => (int)$uid,
						'sn2_date_created' => $now,
						'sn2_date_updated' => $now,
						);
					$insertResult = $this->Familyfood_model->insertSessionNote2( $regist_data, $uid );

					if( $submitType == 1 ){
						redirect('login/sessionflow');
					}else if( $submitType == 3 ){
						redirect('login/sessionflow3');
					}
				}

				// exit;
				
			}else{
				redirect('login/sessionflow');
			}

			$this->load->view("diet_session_notes_2.php", $data);

		}

	}
	
	function sessionflow3(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "") {

		    redirect('login/logins');

		} else {
			$comp = $this->Familyfood_model->getAllCompanyNames();
			$data['companies'] = $comp->result_array();
			$data['locations'] = $this->Familyfood_model->getAllLocationNames("");
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');
			$uid = $this->session->userdata('session_note_id');
			$data['user_full_name'] = "";
			$data['dob'] = "";

			if( $this->input->post() || ( $uid != "" && $uid > 0 ) ){
				$dietAdvice = (array)$this->Familyfood_model->getAdvice_byUID( $uid );
				$data['dietAdvice'] = $dietAdvice;
				if( $userName_email = $this->getUserByUid( $uid ) ){
					$data['user_full_name'] = $userName_email->name;
					$data['dob'] = $userName_email->birthday;
					$data['sesssion3Details'] = array(
						'sn3_details' => '', 
						'sn3_t1' => '', 
						'sn3_t2' => '', 
						'sn3_t3' => '', 
						'sn3_t4' => '', 
						'sn3_t5' => '', 
						'sn3_t6' => '', 
						'sn3_t7' => '', 
						'sn3_t8' => '', 
						'sn3_t9' => '', 
						'sn3_t10' => '', 
						'sn3_t11' => '', 
						'sn3_t12' => ''
					);
					$postData = $this->input->post();
					$checkBoxList = "";

					$sesssion3Details = $this->Familyfood_model->getSessionNote3_byUid( $uid );

					if( !empty( $postData ) ){
						foreach( $postData as $key => $value ){
							if( $key !== 't1' && $key !== 't2' && $key !== 'submit' ){
								if( $checkBoxList !== '' ){
									$checkBoxList .= ','.$value;
								}else{
									$checkBoxList .= $value;
								}
							}
						}

						$now = date( 'Y-m-d H:i:s' );
						$regist_data = array( 
							'sn3_details' => $checkBoxList, 
							'sn3_t1' => $postData['t1'], 
							'sn3_t2' => $postData['t2'], 
							'sn3_t3' => $postData['t3'], 
							'sn3_t4' => $postData['t4'], 
							'sn3_t5' => $postData['t5'], 
							'sn3_t6' => $postData['t6'], 
							'sn3_t7' => $postData['t7'], 
							'sn3_t8' => $postData['t8'], 
							'sn3_t9' => $postData['t9'], 
							'sn3_t10' => $postData['t10'], 
							'sn3_t11' => $postData['t11'], 
							'sn3_t12' => $postData['t12'], 
							'sn3_uid' => (int)$uid ,
							'sn3_date_updated' => $now,
						);

						// if( !empty( $sesssion3Details ) ){
						// 	//update
						// 	$result = $this->Familyfood_model->updatedSessionNote3( $regist_data, $sesssion3Details->sn3_id );
						// 	$sesssion3Details->sn3_details = $checkBoxList;
						// 	$sesssion3Details->sn3_t1 = $postData['t1'];
						// 	$sesssion3Details->sn3_t2 = $postData['t2'];
						// }else{
							//insert
							$regist_data['sn3_date_created'] = $now;
							$result = $this->Familyfood_model->insertSessionNote3( $regist_data, $uid );
							$sesssion3Details = $regist_data;
							//$sesssion3Details->sn3_details = $checkBoxList;
							//$sesssion3Details->sn3_t1 = $postData['t1'];
							//$sesssion3Details->sn3_t2 = $postData['t2'];
						// }
					}

					$data['sesssion3Details'] = $sesssion3Details;

					if( $postData['submit'] == 3 ){
						redirect('login/sessionflow2');
					}else if( $postData['submit'] == 2 ){
						redirect('login/sessionNotesDaily');
					}
				}
			}
			else{
				redirect('login/sessionflow');
			}


			$this->load->view("diet_session_notes_3.php", $data);

		}

	}

	function sessionflow4(){
		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$data['error'] = "";
		$data['uid'] = 0;
		$data['dietAdvice'] = array( 'da_id', 'da_userid', 'da_followup', 'da_weight', 'da_height', 'da_bmi', 'da_whole_grains', 
			'da_vegetables', 'da_fruit', 'da_dairy', 'da_fish', 'da_water', 'da_physical', 'da_goalMet' );
		$this->removeSDetails();
		$data['session_note_details'] = array( 'sn_score', 'sn_quest1', 'sn_quest2', 'sn_quest3', 'sn_quest4', 'sn_quest5', 'sn_quest6', 'sn_quest7', 'sn_quest8', 'sn_quest9', 'sn_quest10', 'sn_quest11', 'sn_quest2'
			, 'sn_quest13', 'sn_quest14', 'sn_quest15', 'sn_quest16', 'sn_quest17', 'sn_quest18', 'sn_quest19', 'sn_quest20','sn_quest21','sn_quest22','sn_quest23' );
		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "") {

		    redirect('login/logins');

		} else {
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');
			$uid = $this->session->userdata('session_note_id');
			$data['user_full_name'] = "";
			if( $this->input->get() || $this->input->post() || $uid != "" ){
				// uid is get
				if( $uid == "" ){
					$uid = $this->input->get( 'uid' );
					$this->session->set_userdata( 'session_note_id', $uid );
				}else{
					if( $uid != $this->input->get( 'uid') && $this->input->get( 'uid' ) != "" ){
						$uid = $this->input->get( 'uid' );
						$this->session->set_userdata( 'session_note_id', $uid );
					}
				}
				$data['uid'] = $uid;
				if( $userName_email = $this->getUserByUid( $uid ) ){
					$data['user_full_name'] = $userName_email->name;
				}

				$userid = $this->session->userdata('session_note_userid');

				if( $uid != "" && $uid > 0 ){
					$dietAdvice = (array)$this->Familyfood_model->getAdvice_byUID( $uid );
					// $session_note1 = (array)$this->Familyfood_model->getSessionNote1_byUID( $uid );

					$data['dietAdvice'] = $dietAdvice;
					// $data['session_note_details'] = $session_note1;
				}else{
					$data['error'] = "Please select client";
				}

			}

				
			// 	$submitType = $this->input->post( 'submit_type' );
			// 	if( $submitType != "" && $uid != "" && $uid > 0 ){
			// 		$now = date( 'Y-m-d H:i:s');
			// 		//session_note 1 details
			// 		$session_note_details = array();
			// 		$session_note_details['sn_score'] = !is_null($this->input->post( 'score' )) ? $this->input->post( 'score' ) : 0;
			// 		$session_note_details['sn_quest1'] = $this->input->post( 'q1' );
			// 		$session_note_details['sn_quest2'] = $this->input->post( 'q2' );
			// 		$session_note_details['sn_quest3'] = $this->input->post( 'q3' );
			// 		$session_note_details['sn_quest4'] = $this->input->post( 'q4' );
			// 		$session_note_details['sn_quest5'] = $this->input->post( 'q5' );
			// 		$session_note_details['sn_quest6'] = $this->input->post( 'q6' );
			// 		$session_note_details['sn_quest7'] = $this->input->post( 'q7' );
			// 		$session_note_details['sn_quest8'] = $this->input->post( 'q8' );
			// 		$session_note_details['sn_quest9'] = $this->input->post( 'q9' );
			// 		$session_note_details['sn_quest10'] = $this->input->post( 'q10' );
			// 		$session_note_details['sn_quest11'] = $this->input->post( 'q11' );
			// 		$session_note_details['sn_quest12'] = $this->input->post( 'q12' );
			// 		$session_note_details['sn_quest13'] = $this->input->post( 'q13' );
			// 		$session_note_details['sn_quest14'] = $this->input->post( 'q14' );
			// 		$session_note_details['sn_quest15'] = $this->input->post( 'q15' );
			// 		$session_note_details['sn_quest16'] = $this->input->post( 'q16' );
			// 		$session_note_details['sn_quest17'] = $this->input->post( 'q17' );
			// 		$session_note_details['sn_quest18'] = $this->input->post( 'q18' );
			// 		$session_note_details['sn_quest19'] = $this->input->post( 'q19' );
			// 		$session_note_details['sn_quest20'] = $this->input->post( 'q20' );
			// 		$session_note_details['sn_quest21'] = $this->input->post( 'q21' );

			// 		$session_note_details['sn_uid'] = (int)$uid;
			// 		$session_note_details['sn_date_created'] = $now;
			// 		$session_note_details['sn_date_updated'] = $now;
			// 		//BMI
			// 		$handouts = '';
			// 		if( !empty( $this->input->post( 'handout' ) ) ){
			// 			$handouts = implode( ',', $this->input->post( 'handout' ) );
			// 		}

			// 		$diet_advice = array();
			// 		$diet_advice['da_userid'] = $userid;
			// 		$diet_advice['da_weight'] = !is_null($this->input->post( 'weight' )) ? (int)$this->input->post( 'weight' ) : 0;
			// 		$diet_advice['da_height'] = !is_null($this->input->post( 'height' )) ? (int)$this->input->post( 'height' ) : 0;
			// 		$diet_advice['da_systolic'] = !is_null($this->input->post( 'systolic' )) ? (int)$this->input->post( 'systolic' ) : 0;
			// 		$diet_advice['da_diastolic'] = !is_null($this->input->post( 'diastolic' )) ? (int)$this->input->post( 'diastolic' ) : 0;
			// 		$diet_advice['da_body_type'] = !is_null($this->input->post( 'bodyShape' )) ? (int)$this->input->post( 'bodyShape' ) : 0;
			// 		$diet_advice['da_bmi'] = !is_null($this->input->post( 'bmi' )) ? (int)$this->input->post( 'bmi' ) : 0;
			// 		$diet_advice['da_goalMet'] = $this->input->post( 'da_goalMet' );
			// 		$diet_advice['da_whole_grains'] = (int)$this->input->post( 'da_whole_grains' );
			// 		$diet_advice['da_vegetables'] = (int)$this->input->post( 'da_vegetables' );
			// 		$diet_advice['da_fruit'] = (int)$this->input->post( 'da_fruit' );
			// 		$diet_advice['da_dairy'] = (int)$this->input->post( 'da_dairy' );
			// 		$diet_advice['da_fish'] = (int)$this->input->post( 'da_fish' );
			// 		$diet_advice['da_water'] =(int) $this->input->post( 'da_water' );
			// 		$diet_advice['da_physical'] = (int)$this->input->post( 'da_physical' );
			// 		$diet_advice['da_uid'] = (int)$uid;
			// 		$diet_advice['da_nutritionalGoal'] = $this->input->post( 'da_nutritionalGoal' );
			// 		$diet_advice['da_physicalGoal'] = $this->input->post( 'da_physicalGoal' );
			// 		$diet_advice['da_notes'] = $this->input->post( 'da_notes' );
			// 		$diet_advice['da_socialGoal'] = $this->input->post( 'da_socialGoal' );
			// 		$diet_advice['da_handouts'] = $handouts;
			// 		$diet_advice['da_date_created'] = $now;
			// 		$diet_advice['da_date_updated'] = $now;

			// 		$data['dietAdvice'] = $diet_advice;

			// 		$data['session_note_details'] = $session_note_details;
					
			// 		// insert session note 1 details
			// 		if( !$this->Familyfood_model->insertSessionNote1( $session_note_details, $uid ) ){
			// 			$data['error'] = "Error on saving Nutrion Assessment";
			// 		}

			// 		// insert advice 
			// 		if( !$this->Familyfood_model->insertDietAdvice( $diet_advice, $uid ) ){
			// 			$data['error'] = "Error on saving advice";
			// 		}

			// 		if( $submitType == 1 ){
			// 			redirect('login/sessionflow2');
			// 		}
			// 	}
			// }

			$this->load->view("diet_session_notes_4.php", $data);

		}

	}

	function sessionDownload(){

	}

	public function saveWalkIn(){
		$company = $this->input->get_post('company');
		$location = $this->input->get_post('location');
		$conference = $this->input->get_post('conference');
		$email = $this->input->get_post('email');
		$fname = $this->input->get_post('fname');
		$lname = $this->input->get_post('lname');
		$phone = $this->input->get_post('phone');
		$service = $this->input->get_post('service');
		$reason = $this->input->get_post('reason');
		$dietEmail = $this->input->get_post('dietEmail');
		$reason = $this->input->get_post('reason');
		$hinsuranceid = $this->input->get_post('hinsuranceid');
		$hinsurancecompany = $this->input->get_post('hinsurancecompany');
		$today = date( 'Y-m-d' );
		$query = $this->Familyfood_model->saveWalkIn( $today, $company, $location, $conference, $email, $fname, $lname, $phone, $dietEmail, $service, $reason, $hinsuranceid, $hinsurancecompany );
		
		echo $query;
	}

	public function resourcecenter(){

		$data['erromsg'] = "";
		$data['logindisplay'] = "none";
		$data['conuser'] = "";
		$data['userid'] = "";
		$this->removeSDetails();
		$sessionvalue = $this->session->userdata('conuser');
		$userid = $this->session->userdata('userid');
		if ( $sessionvalue == "" && $userid == "" ) {

		    redirect('login/logins');

		} else {
			$data['userid'] = $this->session->userdata('userid');
			$data['conuser'] = $this->session->userdata('conuser');
			$data['fdietitian'] = $this->session->userdata('fdietitian');
			$this->load->view("diet_resource.php", $data);

		}
	}

	function getServiceDetails() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$output = $this->Familyfood_model->getServiceDetails();
			return( $output );

		} else {

			redirect("login/logins");

		}

	}

	function getLocationDetails() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$locationid = $this->input->get_post( 'location_id' );
			$output = $this->Familyfood_model->getLocationdata( $locationid );
			echo json_encode( $output );

		} else {

			redirect("login/logins");

		}

	}

	function getLocationHolidays() {

		$locationid = $this->input->get_post('location_id');
		$today = $this->input->get_post('today');

		$query = $this->Familyfood_model->getLocationHolidays($locationid, $today);
		
		echo json_encode($query->result_array());

	}

	function displayAllDietitianMembersForCategory() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$query = $this->Familyfood_model->displayAllDietitianMembersForCategory();
			return $query->result_array();

		} else {

			redirect("login/logins");

		}

	}

	function editExistingService() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$servicename = $this->input->get_post('servicename');
			$description = $this->input->get_post('description');
			$cost = $this->input->get_post('cost');
			$duration = $this->input->get_post('duration');
			$showprice = $this->input->get_post('showprice');
			$serviceid = $this->input->get_post('service_id');

			$output = $this->Familyfood_model->editExistingService($servicename,$description,$duration,$cost,$showprice,$serviceid);
			echo $output;

		} else {

			redirect("login/logins");

		}

	}

	function removeServiceDetails() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$serviceid = $this->input->get_post('service_id');

			$output = $this->Familyfood_model->removeServiceDetails($serviceid);
			return $output;

		} else {

			redirect("login/logins");

		}

	}

	function removeLocationDetails() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$locationid = $this->input->get_post('location_id');

			$output = $this->Familyfood_model->removeLocationdata($locationid);
			return $output;

		} else {

			redirect("login/logins");

		}

	}

	function getDietitianMembers() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$output = $this->Familyfood_model->getDietitianMembers();
			return $output;

		} else {

			redirect("login/logins");

		}

  	}

  	function saveDietitianMember( $sfirstname, $slastname, $saliasname, $semail, $smobile, $showphonenumber ) {

  		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$smobilenotificationtextmsg = "No";
			$semailnotification = "No";

			$output = $this->Familyfood_model->addDietitian($sfirstname,$slastname,$saliasname,$semail,$smobile,$showphonenumber,$smobilenotificationtextmsg,$semailnotification);

			return $output;

		} else {

			redirect("login/logins");

		}

  	}

  	function removeDietitianMember() {

  		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$dietitian_id = $this->input->get_post('dietitian_id');
			$output = $this->Familyfood_model->removeDietitianMember($dietitian_id);
		  	return $output;

		} else {

			redirect("login/logins");

		}

  	}

  	function activateDietitianMember() {

  		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$dietitian_id = $this->input->get_post('dietitian_id');
			$output = $this->Familyfood_model->activateDietitianMember($dietitian_id);
		  	return $output;

		} else {

			redirect("login/logins");

		}

  	}

  	public function getCustomerList(){

  		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$output = $this->Familyfood_model->getCustomerList();

			return $output;

		} else {

			redirect("login/logins");

		}

	}

	public function displayCustomerDetails(){

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$userid = $this->input->get_post('userid');
			$output = $this->Familyfood_model->displayCustomerDetails($userid);

			echo $output;

		} else {

			redirect("login/logins");

		}

	}

	function getListOfAllCurrentAppointments() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$output = $this->Familyfood_model->getListOfAllCurrentAppointments();

	  		return $output;

		} else {

			redirect("login/logins");

		}

  	}

  	function displayAllDietitians() {

  		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$serviceid = $this->input->get_post('service_id');

			$output = $this->Familyfood_model->displayAllDietitians($serviceid);

			return $output->result_array();

		} else {

			redirect("login/logins");

		}

	}

	function submitChangeDietitian() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$dietitian_id = $this->input->get_post('dietitian_id');
	  		$confirmation_number = $this->input->get_post('confirmation_number');
		  	$output = $this->Familyfood_model->submitChangeDietitian($dietitian_id,$confirmation_number);
		  	if($output) {

		   		echo "Sucessfully changed dietitian";

		  	} else {

		  		echo "Dietitian is not changed";

		  	}

		} else {

			redirect("login/logins");

		}

  	}

	function submitChangeConference() {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$conference_id = $this->input->get_post('conference_id');
	  		$confirmation_number = $this->input->get_post('confirmation_number');
		  	$output = $this->Familyfood_model->submitChangeConference($conference_id,$confirmation_number);
		  	if($output) {

		   		echo "Sucessfully changed Conference Room";

		  	} else {

		  		echo "Conference Room is not changed";

		  	}

		} else {

			redirect("login/logins");

		}

  	}

  	function displayReviews() {

  		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$output = $this->Familyfood_model->displayReviews();

			return $output->result_array();

		} else {

			redirect("login/logins");

		}

	}

	function getAllCompaniesLocationsServicesandDietitians( $company_id ) {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');
        $data['companyuser'] = $this->session->userdata('companyuser');

		if ($sessionvalue != "" || $this->session->userdata('companyuser') != "") {

			$output = $this->Familyfood_model->getAllCompaniesLocationsServicesandDietitians( $company_id );//$singledate,$fromdate,$todate,$company_id,$locationid,$serviceid,$dietitian_id);

	   		return $output->result_array();

		} else {

			redirect("login/logins");

		}

  	}

  	function getAllLocationNames() {

  		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {
			$company_id = $this->input->get_post('company_id');

		  	$output = $this->Familyfood_model->getAllLocationNames($company_id);

		  	echo json_encode( $output );  

		} else {

			if( $sessionvalue = $this->session->userdata('conuser') !== "" ){

				$company_id = $this->input->get_post('company_id');

			  	$output = $this->Familyfood_model->getAllLocationNames($company_id);

			  	echo json_encode( $output );  

			}else{
				
				redirect("login/logins");

			}

		}

  	}
  	// not yet used
  	function getListOfAppointmentsBasedOnCriteria() {

  		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$singledate =$this->input->get_post('singledate');
		  	$fromdate =$this->input->get_post('fromdate');
		  	$todate =$this->input->get_post('todate');
		  	$company_id =$this->input->get_post('company_id');
		  	$locationid =$this->input->get_post('locationid');
		  	$serviceid =$this->input->get_post('serviceid');
		  	$dietitian_id =$this->input->get_post('dietitian_id');
		  	$client_name =$this->input->get_post('client_name');
		  	$output = $this->Familyfood_model->getListOfAppointmentsBasedOnCriteria($client_name, $singledate,$fromdate,$todate,$company_id,$locationid,$serviceid,$dietitian_id);

		  	return $output->result_array();

		} else {

			redirect("login/logins");

		}

  	}

  	function getlocationbycompany(){

  		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			$company_id = $this->input->get('company');
			$date = $this->input->get('com_date');
			$location = $this->input->get('locationid');
			$confroom = $this->input->get('confroom');

			$list_locations=$this->Familyfood_model->getLocationdata($location);
			
			$outputLocations = $list_locations;

			$result =$this->Familyfood_model->calender1($company_id, date("Y-m-d", strtotime($date)),$location,$confroom);

			$result=$result->result_array();

			$display_calender=array();

			if(($result!=='')&&(count($result)>0)){

				foreach($result as $k=>$v){

						$display_calender[]=$v;

					}

			}

			echo json_encode( $display_calender );

		} else {

			redirect("login/logins");

		}

	}

	function addNewCategory( $comapnyName ) {

		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {

			if( $comapnyName != "" ) {

				$output = $this->Familyfood_model->addCategory($comapnyName);
				if( $output == 1 ){
					return 'Company Added!';
				}else if( $output == 2 ){
					return 'Company failed to add!';
				}else if( $output == 3 ){
					return 'Company Already Exists!';
				}

			} else {

			   return 'Add Company Name';

			}

		} else {

			redirect("login/logins");

		}

	}

	function newEditLocationDetails() {

		$company_id= $this->input->get_post('company_id');
		$add1 = $this->input->get_post('add1');
		$add2 = $this->input->get_post('add2');
		$state = $this->input->get_post('state');
		$country = $this->input->get_post('country');
		$zpc = $this->input->get_post('zpc');
		$conf1 = $this->input->get_post('conf1');
		$conf2 = $this->input->get_post('conf2');
		$conf3 = $this->input->get_post('conf3');
		$conf4 = $this->input->get_post('conf4');
		$conf5 = $this->input->get_post('conf5');
		$locationid = $this->input->get_post('locationid');

		$notes = $this->input->get_post('notes');

		$conf1dietitiancheck = $this->input->get_post('conf1dietitiancheck');
		$conf1dietitianuncheck = $this->input->get_post('conf1dietitianuncheck');	

		$conf2dietitiancheck = $this->input->get_post('conf2dietitiancheck');
		$conf2dietitianuncheck = $this->input->get_post('conf2dietitianuncheck');

		$conf3dietitiancheck = $this->input->get_post('conf3dietitiancheck');
		$conf3dietitianuncheck = $this->input->get_post('conf3dietitianuncheck');

		$conf4dietitiancheck = $this->input->get_post('conf4dietitiancheck');
		$conf4dietitianuncheck = $this->input->get_post('conf4dietitianuncheck');

		$conf5dietitiancheck = $this->input->get_post('conf5dietitiancheck');
		$conf5dietitianuncheck = $this->input->get_post('conf5dietitianuncheck');

		$locaAvailableDateAndTime = $this->input->get_post('locaAvailableDateAndTime');

		$query = $this->Familyfood_model->newEditLocation(
			$company_id,$locationid,$add1,$add2,$state,$country,$zpc,$conf1,
			$conf2,$conf3,$conf4,$conf5,$conf1dietitiancheck,$conf1dietitianuncheck,
			$conf2dietitiancheck,$conf2dietitianuncheck,$conf3dietitiancheck,
			$conf3dietitianuncheck,$conf4dietitiancheck,$conf4dietitianuncheck,
			$conf5dietitiancheck,$conf5dietitianuncheck,$locaAvailableDateAndTime, $notes
		);

		echo $query;

	}

	function selectDisplayedDietitianCheckboxes() {

		$locationid = $this->input->get_post('location_id');
		$confnumber = $this->input->get_post('confnumber');	
		$query = $this->Familyfood_model->selectDisplayedDietitianCheckboxes($locationid,$confnumber);

		echo json_encode($query->result_array());

	}

	function getLocationsForCorporateClient() {

		$company_id = $this->input->get_post('company_id');
		$output = $this->Familyfood_model->getLocationForCorporateClient($company_id);

		echo json_encode($output->result_array());

	}

	public function getAllConferenceNames() {

		$locationid = $this->input->get_post('location_id');
		$output=$this->Familyfood_model->getAllConferenceNames($locationid);

		echo json_encode($output->result_array());

	}

	function saveavailableDates() {

	  	$availabledatefrom = $this->input->get_post('availabledatefrom');
		$availabledateto = $this->input->get_post('availabledateto');
	  	$dietitian_id = $this->input->get_post('dietitian_id');
	  	$company_id = $this->input->get_post('company_id');
	  	$locationid = $this->input->get_post('locationid');
	  	$conferenceid = $this->input->get_post('conferenceid');
	  	$output = $this->Familyfood_model->saveavailableDates($availabledatefrom,$dietitian_id,$availabledateto,$company_id,$locationid,$conferenceid);

	  	echo json_encode( $output );

  	}

  	function getSessiondetails() {

		$cuser = $this->session->userdata('cuser');
		$output = "";

		if($this->session->userdata($cuser.'searchlocation')) {
			$output['searchlocation'] = $this->session->userdata($cuser.'searchlocation');
		} else {
			$output['searchlocation'] = "";
		}

		if($this->session->userdata($cuser.'company_name')) {
			$output['company_name'] =$this->session->userdata($cuser.'company_name');
		} else {
			$output['company_name'] ="";
		}

		if ($this->session->userdata($cuser.'location_id')) {
			$output['location_id'] =$this->session->userdata($cuser.'location_id');
		} else {
			$output['location_id'] ="";
		}

		if ($this->session->userdata($cuser.'serviceid')) {
			$output['service_id'] =$this->session->userdata($cuser.'serviceid');
		} else {
			$output['service_id'] ="";
		}

		if($this->session->userdata($cuser.'servicename')) {
			$output['servicename'] =$this->session->userdata($cuser.'servicename');
		} else {
			$output['servicename'] ="";
		}

		if($this->session->userdata($cuser.'hour')) {
			$output['hour'] =$this->session->userdata($cuser.'hour');
		} else {
			$output['hour'] ="";
		}

		if($this->session->userdata($cuser.'minutes')) {
			$output['minutes'] =$this->session->userdata($cuser.'minutes');
		} else {
			$output['minutes'] ="";
		}

		if($this->session->userdata($cuser.'timestatus')) {
			$output['timestatus'] =$this->session->userdata($cuser.'timestatus');
		} else {
			$output['timestatus'] ="";
		}

		if($this->session->userdata($cuser.'calendarday')) {
			$output['calendarday'] =$this->session->userdata($cuser.'calendarday');
		} else {
			$output['calendarday'] ="";
		}

		if($this->session->userdata($cuser.'selectCalendarDate')) {
			$output['calenderdate'] =$this->session->userdata($cuser.'selectCalendarDate');
		} else {
			$output['calenderdate'] ="";
		}

		if($this->session->userdata($cuser.'locationname')) {
			$output['locationname'] =$this->session->userdata($cuser.'locationname');
		} else {
			$output['locationname'] ="";
		}

		if($this->session->userdata($cuser.'appointConfNum')) {
			$output['appointConfNum'] =$this->session->userdata($cuser.'appointConfNum');
		} else {
			$output['appointConfNum'] ="";
		}

		if($this->session->userdata($cuser.'timezone')) {
			$output['timezone'] =$this->session->userdata($cuser.'timezone');
		} else {
			$output['timezone'] ="";
		}

		echo json_encode($output);
	}

	function deleteAppointments() {

	  	$confirmationid = $this->input->get_post('confirmationid');
	  	$date = $this->input->get_post('date');
	  	$output = $this->Familyfood_model->deleteAppointments($confirmationid,$date);

		echo $output;

  	}

  	function setSessiondetails() {

		$cuser= $this->session->userdata('cuser');
		$searchlocation = $this->input->get_post('searchLocation');
		$company_name = $this->input->get_post('searchComName');
		$location_id = $this->input->get_post('location_id');
		$locationname = $this->input->get_post('locationname');
		$this->session->set_userdata($cuser.'searchlocation', $searchlocation);
		$this->session->set_userdata($cuser.'company_name', $company_name);
		$this->session->set_userdata($cuser.'location_id',$location_id);
		$this->session->set_userdata($cuser.'locationname',$locationname);

		echo "success";

	}

	function displayservices() {

		$cuser= $this->session->userdata('cuser');

		$searchlocationid = $this->input->get_post('locationid');

		$output = $this->Familyfood_model->getAllServiceDetail($searchlocationid);

		echo json_encode($output->result_array());

	}

	function displayservicesByDiet() {

		$cuser= $this->session->userdata('cuser');

		$searchlocationid = $this->input->get_post('locationid');
		$diet_id = $this->session->userdata('dietitian_id');
		$output = $this->Familyfood_model->getAllServiceDetail_by_loc_and_dietitian($searchlocationid, $diet_id);

		echo json_encode($output->result_array());

	}

	function setLocationid() {

		$cuser= $this->session->userdata('cuser');
		$serviceid = $this->input->get_post('service_id');
		$servicename = $this->input->get_post('servicename');
		$this->session->set_userdata($cuser.'serviceid', $serviceid);
		$this->session->set_userdata($cuser.'servicename', $servicename);

		echo "success";

  	}

  	function getServiceDetailsForTimeSlots() {

		$sessionvalue = $this->session->userdata('cuser');
		$serviceid = $this->input->get_post('service_id');
		$currentdate = $this->input->get_post('currentdate');
		$output = $this->Familyfood_model->getServiceDetailsForTimeSlots($serviceid,$currentdate);

		echo json_encode($output);

	}

	function externalBlockingTimeslots() {

		$locationid = $this->input->get_post('locationid');
		$date = $this->input->get_post('appointmentdate');
		$serviceid = $this->input->get_post('serviceid');
		$activeTimes = $this->input->get_post('activeTimes');
		$output = $this->Familyfood_model->externalBlockingTimeslots($serviceid,$date,$locationid,$activeTimes);
		echo json_encode($output); 

  	}

  	function setTimingsForService() {

		$cuser = $this->session->userdata('cuser');
		$hour = $this->input->get_post('hour');
		$minutes = $this->input->get_post('minutes');
		$calendarday = $this->input->get_post("day");
		$timestatus = $this->input->get_post('timestatus');
		$timezone = $this->input->get_post('timezone');
		$selectCalendarDate = $this->input->get_post('selectCalendarDate');
		$this->session->set_userdata($cuser.'hour', $hour);
		$this->session->set_userdata($cuser.'minutes', $minutes);
		$this->session->set_userdata($cuser.'timestatus', $timestatus);
		$this->session->set_userdata($cuser.'calendarday', $calendarday);
		$this->session->set_userdata($cuser.'selectCalendarDate', $selectCalendarDate);
		$this->session->set_userdata($cuser.'timezone', $timezone);

		echo "success";

  }

	function deleteAppointmentsInPening() {

		$confirmationid = $this->input->get_post('confirmationid');
		$date = $this->input->get_post('date');
		$output = $this->Familyfood_model->deleteAppointmentsInPening($confirmationid,$date);

		echo $output;

  	}

  	function bookAppointmentInPendingState() {

		$userid = $this->input->get_post('userid');
		$serviceid = $this->input->get_post('serviceid');
		$appointmentdate = $this->input->get_post('appointmentdate');
		$appointmenttime = $this->input->get_post('appointmenttime');
		$location_id = $this->input->get_post('location_id');
		$appointmentnumber = $this->input->get_post('appointConfNum');
		$bookedby = $this->input->get_post('bookedby');
		$fname = $this->input->get_post('fname');
		$lname = $this->input->get_post('lname');
		$phone = $this->input->get_post('phone');
		$clickalreadyuser = $this->input->get_post('clickalreadyuser');
		$reason = $this->input->get_post('reason');
		$timezone = $this->input->get_post('timezone');
		$insurancename = $this->input->get_post('insuranceCompany');
		$insuranceid = $this->input->get_post('insurnaceCompanyId');

		$output = $this->Familyfood_model->bookAppointmentInPendingState($userid,$serviceid,$appointmentdate,$appointmenttime,$location_id,$appointmentnumber,$bookedby,$fname,$lname,$phone,  $clickalreadyuser,$reason,$timezone,$insurancename,$insuranceid);

		$locationDetails = $this->Familyfood_model->getLocationdata($location_id);

		if($output['Confirmation_Number'] != "" ) {
			$confroom = $this->Familyfood_model->getConferenceName($output['Conferenceroom']);
			$confroom =  $confroom->result_array();
			$output['Conferenceroom'] = $confroom[0]['conf_room'];
		}

		echo json_encode($output);

  	}

  	function bookAppointment() {

	  	$userid = $this->input->get_post('userid');
	  	$serviceid = $this->input->get_post('serviceid');
	  	$appointmentdate = $this->input->get_post('appointmentdate');
	  	$appointmenttime = $this->input->get_post('appointmenttime');
	   	$location_id = $this->input->get_post('location_id');
	    $appointmentnumber = $this->input->get_post('appointConfNum');
		$bookedby = $this->input->get_post('bookedby');
		$fname = $this->input->get_post('fname');
		$lname = $this->input->get_post('lname');
		$phone = $this->input->get_post('phone');
		$clickalreadyuser = $this->input->get_post('clickalreadyuser');
		$reason = $this->input->get_post('reason');
		$timezone = $this->input->get_post('timezone');
		$insurancename = $this->input->get_post('insuranceCompany');
		$insuranceid = $this->input->get_post('insurnaceCompanyId');
		$pendingAppointment = $this->input->get_post('pendingAppointment');
		$confroom = $this->input->get_post('confroom');
		$company = $this->input->get_post('company'); 
		
		//edited : update privacy_consent
		$this->Familyfood_model->updatePrivacyConsent( $userid );	   
		$output = $this->Familyfood_model->bookAppointment($userid,$serviceid,$appointmentdate,$appointmenttime,$location_id,$appointmentnumber,$bookedby,$fname,$lname,$phone,  $clickalreadyuser,$reason,$timezone,$insurancename,$insuranceid,$pendingAppointment,$confroom,$company);
		$locationDetails = $this->Familyfood_model->getLocationdata($location_id);
		
		if($output['Confirmation_Number'] != "" ) {

			$html = "<br>Date:<b>".$appointmentdate ."</b><br>";
			$html = $html . 'Time:<b>'.$appointmenttime ."</b><br>";
			$html = $html . 'Time Zone:<b>'.$timezone ."</b><br>";
			$html = $html . 'Location:<b>'.$locationDetails->address2."</b><br>";
			$html = $html . 'State:<b>'.$locationDetails->city."</b><br>";
			$html = $html . 'City:<b>'.$locationDetails->address2."</b><br>";
			$html = $html . 'Company:<b>'.$company ."</b><br>";
			$html = $html . 'Conference Room:<b>'.$output['Conferenceroom']."</b><br><br>";
			$output['Conferenceroom'] = $output['Conferenceroom'];

			if($output['appointmentmodified'] == "Yes") {
				$mailsuccess = $this->mail($userid,CHANGESMADESUBJECT,"<html><body><img alt=\"Family Food, LLC\" src=\"".base_url()."images/family-food-logo.png\" /> <br><br><hr>".CHANGESMADEMESSAGE1."<br>".$html.CHANGESMADEMESSAGE2. base_url() . CHANGESMADEMESSAGE3 . base_url() . CHANGESMADEMESSAGE4."</body></html>","");
				$newHtml = 'UserName:<b>'.$userid.'</b><br>'.$html;
				//$mailsuccess = $this->mail(FFLLCADMINMAIL,CHANGESMADESUBJECT,"<html><body><img alt=\"Family Food, LLC\" src=\"".base_url()."images/family-food-logo.png\" /> <br><br><hr><br>".$newHtml."</body></html>","");
			} else {
				$mailsuccess = $this->mail($userid,CONFIRMMAILSUBJECT,"<html><body><img alt=\"Family Food, LLC\" src=\"".base_url()."images/family-food-logo.png\" /> <br><br><hr>".CONFIRMMAILMESSAGE1."<br>".$html.CONFIRMMAILMESSAGE2. base_url() . CONFIRMMAILMESSAGE3 . base_url() . CONFIRMMAILMESSAGE4 . "</body></html>" ,"");
				$newHtml = 'UserName:<b>'.$userid.'</b><br>'.$html;
				//$mailsuccess = $this->mail(FFLLCADMINMAIL,CONFIRMMAILSUBJECT,"<html><body><img alt=\"Family Food, LLC\" src=\"".base_url()."images/family-food-logo.png\" /> <br><br><hr>".CONFIRMMAILMESSAGE1."<br>".$newHtml. "</body></html>" ,"");
			}    
		}

	  	echo json_encode($output);

  	}

  	function publishThis(){

 		$reviewID = $this->input->get_post('reviewID');
 		$output = $this->Familyfood_model->publishThis( $reviewID );

 		echo $output;

  	}

  	function exportReviewsInCSV() {

	    $file = date('dmY-His');
		header("Content-type: text/csv");
		header("Content-Disposition: attachment; filename=visitors-$file.csv");
		header("Pragma: no-cache");
		header("Expires: 0");

	    $output = "Published Date, Customer, Review, Description \n";
	    $output1 = $this->Familyfood_model->displayPublishedReviews();
	    foreach ($output1->result() as $row)
	    {
	        $output .= "\"".$row->recieved_date."\",\"".$row->posted_by."\",\"".$row->review."\",\"".$row->description."\"";
	    	$output = $output . "\n";
	    }

		$filename = "familyfoodllc_reviews.csv";

		header('Content-type: application/csv');

		header('Content-Disposition: attachment; filename='.$filename);

	    echo $output;

  	}

  	function getUserDetailsForEdit() {

		$userid = $this->input->get_post('user_id');
		$output = $this->Familyfood_model->getUserDetailsForEdit($userid);

		echo json_encode($output->result_array());

  	}

  	function updateprofile() {

		$firstname = $this->input->get_post('firstname');
		$lastname = $this->input->get_post('lastname');
		$gender = $this->input->get_post('gender');
		$birthday = $this->input->get_post('birthdate');
		$phoneno = $this->input->get_post('phoneno');
		$address = $this->input->get_post('address');
		$cuser = $this->session->userdata('cuser');
		$conuser = $this->session->userdata('conuser');

		$userid = $this->input->get_post('userid');

		if( $userid != $cuser && $userid != $conuser ){
			echo "Your session timed out! Please login again";
		}else{
			if (($firstname != "") && ($lastname != "") && ($gender != "") && ($birthday != "") && ($phoneno != "") && ($address != "")) {
				$query = $this->Familyfood_model->updateprofile($firstname,$lastname,$birthday,$phoneno,$address,$gender);
				if( $query ){
					echo "Your profile has been updated";
				}else{
					echo "Your profile details are not updated";
				}
			}else{
				echo "Please Fill up all the details";
			}
		}
		
		// if($cuser != "") {
		// 	$data['edituser'] = $this->session->userdata('cuser');
		// } elseif ($conuser != "") {
		// 	$data['edituser'] = $this->session->userdata('conuser');
		// }

		// 	$data['conuser'] = $this->session->userdata('conuser');
		// 	$data['cuser'] = $this->session->userdata('cuser');
		// 	$data['fdietitian'] = $this->session->userdata('fdietitian');

		// if (($firstname != "") && ($lastname != "") && ($gender != "") && ($birthday != "") && ($phoneno != "") && ($address != "")) {
		// 	$query = $this->Familyfood_model->updateprofile($firstname,$lastname,$birthday,$phoneno,$address,$gender);
		// 	if ( $query) {
		// 		$data['profileupdatemsg']  = "Your profile has been updated ";
		// 		$data['profiledisplay']  = "block";
		// 		$data['color'] = "green";
		// 	} else {
		// 		$data['profileupdatemsg'] = "Your profile details are not updated";
		// 		$data['profiledisplay'] = "block";
		// 		$data['color'] = "red";
		// 	}
		// } else {
		// 	$data['profileupdatemsg'] = "Please fill details";
		// 	$data['profiledisplay'] = "block";
		// 	$data['color'] = "red";
		// }
		
		// $this->load->view('editprofile.php',$data);
	}

	function exportDataInCSV() {
 
		$file = date('dmY-His');
		header("Content-type: text/csv");
		header("Content-Disposition: attachment; filename=visitors-$file.csv");
		header("Pragma: no-cache");
		header("Expires: 0");
		if(  $this->session->userdata('companyuser') != "" ){
			$output = "Name, Company, Location, Service, Date, Time \n"; 
		}else{
			$output = "First Name,Last Name,Gender,Birthday,Address,Contact Number,Email,Appointment Date,Appointment Time,Reason,TimeZone,Customer,UserID,Phone,Insurance Company,Insurance ID,Primary Insured,Company Name,Location,Conference Room,Service,Cost,Dietitian,DietitianID,Booking date,Booking Status,Booked by,Advice, Weight, Height, Systolic, Diastolic, Body Type, Waist Circumference(cm), Neck Circumference(cm), BMI, Nutritional Goals Met, Whole Grains, Vegetables, Fruit, Dairy, Fish, Water, Physical, Nutritional Goal, Social Goal, Handouts, Now out of all these options we discussed, which changes do you think are best for you at this time?, FOOD AND/OR NUTRIENT DELIVERY (ND), What changes have taken place since last visit?, What is working well?, What barriers have you encountered?,Plan for next visit \n";
		}
		$output1 = $this->Familyfood_model->getListOfAllAppointments();

		foreach ($output1->result() as $row)
		{
			if( $this->session->userdata('companyuser') != "" ){
				$timeWalkIn = "";
				if( $row->appointment_time == "00:00" ){
					$timeWalkIn = "Walk-in";
				}else{
					$timeWalkIn = $row->appointment_time;
				}
				$name = $row->firstname." ".$row->lastname;
				$output .= "\"".$name."\",\"".$row->company_name."\",\"".$row->address2."\",\"".$row->name."\",\"".$row->appointment_date."\",\"".$timeWalkIn."\" \n";
			}else{
				$advice = $this->Familyfood_model->getUserAdvice( $row->uid, $row->appointment_date );
		    	$adviceList = "";
		    	if( !empty( $advice ) ){
		    		$body_type = "";
		    		if( $advice->da_body_type == 1 ){
		    			$body_type = "Pear Shape";
		    		}else if( $advice->da_body_type == 2 ){
		    			$body_type = "Apple Shape";
		    		}
		    		$adviceList = "\"".$advice->da_followup."\",\"".$advice->da_weight."\",\"".$advice->da_height."\",\"".$advice->da_systolic."\", \"".$advice->da_diastolic."\", \"".$body_type."\", \"".$advice->da_waist."\", \"".$advice->da_neck."\" ,\"".$advice->da_bmi."\",\"".$advice->da_goalMet."\",\"".$advice->da_whole_grains."\",\"".$advice->da_vegetables."\",\"".$advice->da_fruit."\",\"".$advice->da_dairy."\",\"".$advice->da_fish."\",\"".$advice->da_water."\",\"".$advice->da_physicalGoal."\",\"".$advice->da_nutritionalGoal."\",\"".$advice->da_socialGoal."\",\"".$advice->da_handouts."\",\"".$advice->da_q1."\",\"".$advice->da_q5."\",\"".$advice->da_q2."\",\"".$advice->da_q3."\",\"".$advice->da_q4."\",\"".$advice->da_q6."\"";
		    	}
		    	$timeWalkIn = "";
				if( $row->appointment_time == "00:00" ){
					$timeWalkIn = "Walk-in";
				}else{
					$timeWalkIn = $row->appointment_time;
				}
				$primary_insured = '';
				if( $row->primary_insured == 1 ){
					$primary_insured = 'Self';
				}else if( $row->primary_insured == 2 ){
					$primary_insured = 'Spouse';
				}else if( $row->primary_insured == 3 ){
					$primary_insured = 'Child';
				}
			    $output .= "\"".$row->firstname."\",\"".$row->lastname."\",\"".$row->gender."\",\"".$row->birthday."\",\"".$row->address."\",\"".$row->phonenumber."\",\"".$row->userid."\",\"".$row->appointment_date."\",\"".$timeWalkIn."\",\"".$row->reason."\",\"".$row->timezone."\",\"".$row->firstname." ".$row->lastname."\",\"".$row->userid."\",\"".$row->phonenumber."\",\"".$row->insurance_company."\",\"".$row->insurance_id."\",\"".$primary_insured."\",\"".$row->company_name."\",\"".$row->address2."\",\"".$row->conf_room."\",\"".$row->name."\",\"".$row->cost."\",\"".$row->first_name."".$row->last_name."\",\"".$row->email."\",\"".$row->booked_date."\",\"".$row->booking_status."\",\"".$row->booked_by."\",";
			    $output .= $adviceList;
				$output = $output . "\n";
			}
		}

		$filename = "familyfoodllc_appointments.csv";
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename='.$filename);

		echo $output;

	}

	function updatePWD(){
		$oldpwd = $this->input->get_post('oldpassword');
		$newpwd = $this->input->get_post('newpassword');
		$confirmpwd = $this->input->get_post('confirmpassword');
		$cuser = $this->session->userdata('cuser');
		$conuser = $this->session->userdata('conuser');
		$user = "";
		if( $cuser != "" ){
			$user = $cuser;
		}else if( $conuser != "" ){
			$user = $conuser;
		}

		if( $user != "" ){
			if( $oldpwd != "" && $newpwd != "" && $confirmpwd != "" ){
				if( $newpwd == $confirmpwd ){
					$output = $this->Familyfood_model->getUserDetailsForEdit( $user );
					$result = $output->row_array();
					if( !empty( $result ) ){
						if( $newpwd != $oldpwd ){
							$currPWD = "";
							if( $cuser != "" ){
								$currPWD = $result['pwd'];
							}else{
								$currPWD = $result['password'];
							}
							if( $oldpwd == $currPWD ){
								if( $this->Familyfood_model->updatePassword( $newpwd, $user ) ){
									echo "Password updated successfully!";
								}else{
									echo "Password updated failed!";
								}
							}else{
								echo "Old password is incorrect!";
							}
						}else{
							echo "Your new password entered is your current password.";
						}
					}else{
						echo "You were logged out due to inactivity! Please Login again.";
					}
				}else{
					echo "New Password did not matched!";
				}
			}else{
				echo "Please fill up details!";
			}
		}else{
			echo "Please Login.";
		}
	}
	//not used, using above code now
	function updatepassword() {

	$oldpwd = $this->input->get_post('oldpassword');
	$newpwd = $this->input->get_post('newpassword');
	$confirmpwd = $this->input->get_post('confirmpassword');
	$cuser = $this->session->userdata('cuser');
	$conuser = $this->session->userdata('conuser');
	$data['edituser'] = "";

	if($cuser != "") {
		$data['edituser'] = $this->session->userdata('cuser');
	} elseif ($conuser != "") {
		$data['edituser'] = $this->session->userdata('conuser');
	}

	$data['conuser'] = $this->session->userdata('conuser');
	$data['cuser'] = $this->session->userdata('cuser');
	$data['fdietitian'] = $this->session->userdata('fdietitian');

	if (($oldpwd !="") && ($newpwd != "") && ($confirmpwd != "")) {
		$olddbpwd = $this->Familyfood_model->getOldPassword($data['edituser']);
		if ($oldpwd == $olddbpwd) {
		
			if ($oldpwd != $newpwd) {

			if ($newpwd == $confirmpwd ) {
				$query=  $this->Familyfood_model->updatePassword($newpwd,$data['edituser']);
			       if ( $query) {
				         $data['changepassword']  = "Successfully updated ";
						 $data['profilechangepassword']  = "block";
						 $data['color']  = "green";
			       } else {
					$data['changepassword'] = "Password is not updated";
					$data['profilechangepassword'] = "block";
				   $data['color']  = "red";
				   }
			} else {
			$data['changepassword'] = "New password and Confirm password should be same";
			$data['profilechangepassword'] = "display";
			$data['color']  = "red";
			}
			} else {
			$data['changepassword'] = "Old password and New password should not be same";
			$data['profilechangepassword'] = "display";
			$data['color']  = "red";
			}
			} else {
			$data['changepassword'] = "Old password is incorrect";
			$data['profilechangepassword'] = "display";
			$data['color']  = "red";
			}
	} else {
			$data['changepassword'] = "Please fill details";
			$data['profilechangepassword'] = "block";
			$data['color']  = "red";
	}
	$this->load->view('layout/layout.php');
    $this->load->view('changepassword.php',$data);

	}

	function userReviewForm(){
		$sessionvalue = $this->session->userdata('cuser');
		$data['cuser'] = $sessionvalue;
		$cservice = $this->session->userdata('cservice');
		$user_for_edit = !empty($sessionvalue) ? $sessionvalue : $cservice;

		$output = $this->Familyfood_model->getAllCompanyNames();
		$userDetails = $this->Familyfood_model->getUserDetailsForEdit( $user_for_edit );

		$data['companyList'] = $output->result_array();
		$userData = $userDetails->first_row();
		$userData->firstname = !empty( $userData->firstname ) ? $userData->firstname : 'Customer Service';
		$data['userDetails'] = $userData;

		if( $sessionvalue != "" || $cservice != '' ){
			$this->load->view('user_reviewform.php', $data);
		}else{
			redirect( "login/logins" );
		}
	}


	function registerDetails() {
		$sessionvalue = $this->session->userdata('cuser');
		$email = $this->input->get_post('email');
		$password = $this->input->get_post('password');
		$confpwd = $this->input->get_post('confpwd');
		$phoneno = $this->input->get_post('phoneno');
		$query = $this->Familyfood_model->registerDetails($email,$password,$confpwd,$phoneno);
		if($query == 1) {
			echo " You have already registered";
		} elseif ( $query == 0) {
			$this->session->set_userdata('cuser', $email);
			try{
		    	$this->mail($email,"familyfoodllc","<img alt=\"Family Food, LLC\" src=\"".base_url()."images/family-food-logo.png\" /> <br><br>"."You have been added to the familyfoodllc.<br> <b> Your id: </b>".$email." <br> <b>Your password is:</b>".$password." <br> Please change your password after <a href = \"".base_url() ."login/logins\"> login </a>","");
		} catch (Exception $e){
		}
			echo "success";
		} elseif($query == 2) {
		   echo "This id is already registered in the system. Please try with another user id.";
		}
	}

	function getAllCompanyNames() {

	  	$output = $this->Familyfood_model->getAllCompanyNames();
		echo json_encode($output->result_array());

  	}

  	function getDietitianAvailability(){
	  	$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {
			$dietitian_id = $this->input->get_post('dietitian_id');
			$availabilityList = $this->Familyfood_model->getDietitianAvailability( $dietitian_id );

			echo json_encode( $availabilityList );
		}
  	
  	}

  	function cancelDietitianAppointment(){
  		$data['userid'] = $this->session->userdata('userid');
		$data['username'] = $this->session->userdata('userid');
		$sessionvalue = $this->session->userdata('userid');

		if ($sessionvalue != "") {
			$id = $this->input->get_post('diet_avail_id');
			$availabilityList = $this->Familyfood_model->cancelDietitianAppointment( $id );

			echo $availabilityList;
		}
  		
  	}

  	function removeSessiondetails() {
		$cuser= $this->session->userdata('cuser');
		$this->session->unset_userdata($cuser.'searchlocation');
		$this->session->unset_userdata($cuser.'company_name');
		$this->session->unset_userdata($cuser.'location_id');
		$this->session->unset_userdata($cuser.'locationname');
		$this->session->unset_userdata($cuser.'serviceid');
		$this->session->unset_userdata($cuser.'servicename');
		$this->session->set_userdata($cuser.'hour');
		$this->session->set_userdata($cuser.'minutes');
		$this->session->set_userdata($cuser.'timestatus');
		$this->session->set_userdata($cuser.'calendarday');
		$this->session->set_userdata($cuser.'selectCalendarDate');
		$this->session->set_userdata($cuser.'calenderdate');
		$this->session->set_userdata($cuser.'appointConfNum');
		$this->session->set_userdata('fdietitian');
		$this->session->set_userdata('fuserid');

		echo "success";
  	}

  	function saveDietitianService(){
  		$dietAddList = $this->input->get_post('dietAddList');
		$dietDelList = $this->input->get_post('dietDelList');
		$serviceid = $this->input->get_post('service_id');
		$output = $this->Familyfood_model->saveDietitianService($dietAddList,$serviceid,$dietDelList);
		echo $output;
  	}

  	function forgotpassword() {

        $data['erromsg'] = "";
		$data['regerromsg'] = "";
		$data['logindisplay'] = "none";
		$data['reglogindisplay'] = "none";
		$data['cuser'] = "";
		$data['result'] = "";

	  	$sessionvalue = $this->session->userdata('cuser');
	  	if ( $sessionvalue == "") {
			if( $this->input->post() ){
				$username = $this->input->post( 'email' );
				if( $username !=="" ){
					if( $this->forgotpasswordsend( $username ) ){
						$data['result'] = '<div class="example example-popover">
						<button type="button" class="btn btn-success popover-success sr-only">Success</button>
						<div class="popover top">
						<div class="arrow"></div>
						<h3 class="popover-title">Password Reset</h3>
						<div class="popover-content">
						<p style="color:#808080">Please check your email for your password.</p>
						</div>
						</div>
						</div>';
					}else{
						if( $this->diettianforgotpasswordsend( $username ) ){
							$data['result'] = '<div class="example example-popover">
							<button type="button" class="btn btn-success popover-success sr-only">Success</button>
							<div class="popover top">
							<div class="arrow"></div>
							<h3 class="popover-title">Password Reset</h3>
							<div class="popover-content">
							<p style="color:#808080">Please check your email for your password.</p>
							</div>
							</div>
							</div>';	
						}else{
							$data['result'] = '<div class="example example-popover">
							<button type="button" class="btn btn-danger popover-danger sr-only">Success</button>
							<div class="popover top">
							<div class="arrow"></div>
							<h3 class="popover-title">Password Reset</h3>
							<div class="popover-content">
							<p style="color:#808080">Invalid UserName/E-mail Address.</p>
							</div>
							</div>
							</div>';
						}
					}
				}
			}
			$this->load->view('forgot-password.php',$data);
		} else {
			$this->load->view('user_manage.php',$data);
		}
  	}

  	function forgotpasswordsend( $userid ) {
	   	$output = "";
	   	$output = $this->Familyfood_model->getPassWord($userid);
	   	$output1 = $output->result_array();
	   	if( !empty( $output1 ) ){
	   		$mailsuccess = $this->mail($userid,"forgot password","your password: <b>".$output1[0]['pwd'] ."</b>","fpwd");
	   	}else{
	   		return false;
	   	}

	   	if($mailsuccess == "success") {
	   		return true;
	   	} else {
	   		return false;
	   	}
  	}

  	function diettianforgotpasswordsend( $username ) {
		$output = "";
		$output = $this->Familyfood_model->getDietitianPassWord( $username );
		$output1 = $output->result_array();
		if( !empty( $output1 ) ){
			$mailsuccess = $this->mail($username,"forgotpassword","your password: <b>".$output1[0]['password'] ."</b>","fpwd");
		}else{
			return false;
		}

		if($mailsuccess == "success") {
	   		return true;
	   	} else {
	   		return false;
	   	}
	}

	function checkDatesAvailability(){
		$dateFrom = $this->input->get_post('availabledatefrom');
		$dateTo = $this->input->get_post('availabledateto');
		$dietitianID = $this->input->get_post('dietitian_id');

		if( $this->Familyfood_model->checkDatesAvailability( $dateFrom, $dateTo, $dietitianID ) ){
			
		}else{

		}
	}

	////////////////END

	function reviewform() {

            $sessionvalue = $this->session->userdata('cuser');

			$data['erromsg'] = "";

			$data['logindisplay'] = "none";

			$data['cuser'] = $sessionvalue;

			$userid = $this->input->get_post('userid');

			$confirmnumber = $this->input->get_post('confnumber');

			$data['user'] = $userid;

			$data['confnumber'] = $confirmnumber ;

			$data['sessionexists'] = $sessionvalue;

		    $this->load->view('layout/layout.php');

			$this->load->view('reviewform.php',$data); 

            			

    }

	

	function customerservicelogin()

	{

	    $data['erromsg'] = "";

		$data['logindisplay'] = "none";

		$data['cuser'] = "";

		$sessionvalue = $this->session->userdata('cservice');

		if ( $sessionvalue == "") {

		    $this->load->view('layout/layout.php');

			$this->load->view('customer-service.php',$data);

		} else {

			$data['cuser'] = $this->session->userdata('cuser');

			$data['cservice'] = $this->session->userdata('cservice');

			$this->load->view('layout/layout.php');

			$this->load->view("manageappointments.php", $data);

		}

	}

	function reviewFormAuthenticate() {

	$sessionvalue = $this->session->userdata('cuser');

	$username = $this->input->get_post('username');

	$pwd = $this->input->get_post('password');

	$query = $this->Familyfood_model->get_usertype($username,$pwd);

	 

	if ( ($sessionvalue == "") || ($sessionvalue == "undefined") ) {

				if ( $query->num_rows() > 0) {

				    $row = $query->row_array(); 

					if ($row['usertype'] == "customer" ) {

							echo "success";

							$this->session->set_userdata('cuser', $username);						

					}  else {

				        echo "fail";   

				   }

				} else {

				        echo "fail";  

				}

	    } 	

		//echo "ddddddddddddddddd";

	}

	

	function submitReviews() {

	$username = $this->input->get_post('bookedby');

	$company = $this->input->get_post('company');

	$rating = $this->input->get_post('rating');

	$reviewtitle = $this->input->get_post('reviewtitle');

	$reviewdiscription = $this->input->get_post('reviewdiscription');

	$confnumber = $this->input->get_post('confnumber');

	$userid = $this->input->get_post('userid');



	

	$query = $this->Familyfood_model->submitreview($username,$rating,$reviewtitle,$reviewdiscription,$userid,$confnumber,$company);

	

	echo $query;

	}

	function customerservicedetails() {

   // $sessionvalue = $this->session->userdata('userid');

    $sessionvalue = $this->session->userdata('cservice');

	$username = $this->input->get_post('username');

	$pwd = $this->input->get_post('password');

	$query = $this->Familyfood_model->get_usertype($username,$pwd);

	 

	if ( $sessionvalue == "" ) {

				if ( $query->num_rows() > 0) {

				    $row = $query->row_array(); 

					if ($row['usertype'] == "customerservice" ) {

					echo "success";

					$this->session->set_userdata('cservice', $username);

						

					}  else {

				        echo "fail";

				    

				}

				} else {

				        echo "fail";

				    

				}

	    } else {

		    $data['cuser'] = $this->session->userdata('cuser');

			$data['cservice'] = $this->session->userdata('cservice');

			//$this->session->set_userdata('cuser', $data['cuser']);

			$this->load->view('layout/layout.php');

			$this->load->view("manageappointments.php", $data);

		}

	

	}

	function dietitianlogin()

	{

	    $data['erromsg'] = "";

		$data['logindisplay'] = "none";

		$data['conuser'] = "";

		$sessionvalue = $this->session->userdata('conuser');

		if ( $sessionvalue == "") {

		    $this->load->view('layout/layout.php');

			$this->load->view('counselor.php',$data);

		} else {

			$data['conuser'] = $this->session->userdata('conuser');

			$this->load->view('layout/layout.php');

			$this->load->view("viewappointments.php", $data);

		}

	}

	

	function getCustomerListByName() {

	$svalue = $this->input->get_post('searchValue');

	$output =$this->Familyfood_model->getCustomerListByName($svalue);

	echo json_encode($output->result_array());

	}

	//edited added page
	public function cronAdviceMail(){
//		$this->mail( 'filart.ervin@gmail.com', 'Cron Advice mail page','test' );
		//$output=$this->Familyfood_model->cronAdviceMail( 0 );

		if( $this->input->get() ){ 
			$page = intval( $this->input->get( 'page' ) );
			$output=$this->Familyfood_model->cronAdviceMail( $page );
			//if( $output ){
			//	$nextPage = $page + 1;
			//	header("Location: http://familyfoodllc.com/service/login/cronAdviceMail?page=".$nextPage);
			//	exit;
			//}
			//$this->mail( 'filart.ervin@gmail.com', 'Cron Advice mail page', 'Page : '.$page, '' );
		}else{
			$advice_total_cnt = $this->Familyfood_model->cronAdviceMail_cnt();
			$total_pages = $advice_total_cnt / 50;
			$data['total_page'] = $total_pages;
			$this->load->view("cronAdviceMail.php", $data);
		}
	}

	public function testAttachment(){
		$output=$this->Familyfood_model->testAttachment();
	}

	public function getUserAppts(){	

    $dietitian_id = $this->input->get_post('dietitian_id');

	//$date= $this->input->get_post('date');
	//$date2= $this->input->get_post('date2');
	$date = date( 'Y-m-d' );
	$date2 = date('Y-m-d',strtotime($date . " +1 days"));
	$output=$this->Familyfood_model->getUserAppts($dietitian_id,$date,$date2);

	echo json_encode($output);	

	}

	public function getAllUserAppts(){	

    $dietitian_id = $this->input->get_post('dietitian_id');

	$output=$this->Familyfood_model->getAllUserAppts($dietitian_id);

	echo json_encode($output);	

	}

	

	public function  displayViewDetails(){

	$confNum = $this->input->get_post('confNum');

	$output=$this->Familyfood_model-> displayViewDetails($confNum);

	echo json_encode($output->result_array());

	}

	/*function customerservice()

{

	$sessionvalue = $this->session->userdata('cuser');



	    $data['erromsg'] = "";

		$data['logindisplay'] = "none";

		$data['username'] = "";

		$data['cuser'] = "";

		$sessionvalue = $this->session->userdata('cuser');

		if ( $sessionvalue == "") {

		    $this->load->view('layout/layout.php');

			$this->load->view('customer-service.php',$data);

		} else {

			$data['cuser'] = $this->session->userdata('cuser');

			$this->load->view('layout/layout.php');

			redirect("login/manageappointments");

		}

	

	}*/

	

	

	

	

	

	function userlogin () {

	    $data['erromsg'] = "";

		$data['regerromsg'] = "";

		$data['logindisplay'] = "none";

		$data['reglogindisplay'] = "none";

		$data['cuser'] = "";

		$sessionvalue = $this->session->userdata('cuser');

		if ( $sessionvalue == "") {

		    $this->load->view('layout/layout.php');

			$this->load->view('userlogin.php',$data);

		} else {

			$data['cuser'] = $this->session->userdata('cuser');

			$this->load->view('layout/layout.php');
			// edited, redirect changed on user login
			// redirect("login/manageappointments");
			redirect("login/searchdietitian");

		}

	

	}

	
	

	function authenticateregistereduser() {

	$output = "";

	//$sessionvalue = $this->session->userdata('cuser');

	$username = $this->input->get_post('username');

	

	$pwd = $this->input->get_post('password');

	$query = $this->Familyfood_model->getUserDetailsForAlreadyRegistered($username,$pwd);

	if ( $query->num_rows() > 0) {

				    $row = $query->row_array(); 

					if ($row['usertype'] == "customer" ) {

					    $data['cuser'] = $username;

						$output [] = $row;

						echo json_encode($output);

						//echo "success";

					} else {

					echo $output;

						//echo "fail";

					}

	} else {

	   echo $output;

	  // echo "fail";

	}

	

	}

	

	

	function authenticate() {

    $sessionvalue = $this->session->userdata('userid');

	$username = $this->input->get_post('username');

	$pwd = $this->input->get_post('password');

	$query = $this->Familyfood_model->get_usertype($username,$pwd);

	 

	if ( $sessionvalue == "" ) {

				if ( $query->num_rows() > 0) {

				    $row = $query->row_array(); 

					

					if ($row['usertype'] == "admin" ) {

					echo "success";

						//$data['username'] = $row['userid'];

					//	$data['pwd'] = $row['pwd'];

						$this->session->set_userdata('userid', $username);

						//$this->load->view('layout/layout.php');

						//$this->load->view("company.php", $data);

					} else {

					echo "fail";

					   //$data['erromsg'] = "Invalid username, password";

					   //$data['logindisplay'] = "block";

				     //  $this->load->view('layout/layout.php');

					  // $this->load->view('index_login.php', $data);

					}

				} else {

				        echo "fail";

				      // $data['erromsg'] = "Invalid username, password";

					   //$data['logindisplay'] = "block";

				       //$this->load->view('layout/layout.php');

					   //$this->load->view('index_login.php', $data);

				}

	    } else {

		    $data['username'] = $this->session->userdata('userid');

			$this->session->set_userdata('userid', $data['username']);

			$this->load->view('layout/layout.php');

			$this->load->view("company.php", $data);

		}

	

	}

	

	  /*  function calendar() {

		    $data['userid'] = $this->session->userdata('userid');

			$data['username'] = $this->session->userdata('userid');

			$sessionvalue = $this->session->userdata('userid');

			if ($sessionvalue != "") {

			$this->load->view('layout/layout.php');					

			$this->load->view("calendar.php", $data);			

			} else {

			$data['erromsg'] = "";

		    $data['logindisplay'] = "none";

			redirect("/login/adminlogin");

			}

	

	}*/

	

	function saveLocationDetails() {

	

	$company_id= $this->input->get_post('company_id');

	$add1 = $this->input->get_post('add1');

	$add2 = $this->input->get_post('add2');

	$state = $this->input->get_post('state');

	$country = $this->input->get_post('country');

	$zpc = $this->input->get_post('zpc');

	$conf1 = $this->input->get_post('conf1');

	

	$conf2 = $this->input->get_post('conf2');

	$conf3 = $this->input->get_post('conf3');

	$conf4 = $this->input->get_post('conf4');

	$conf5 = $this->input->get_post('conf5');

	

	$conf1dietitiancheck = $this->input->get_post('conf1dietitiancheck');

	$conf1dietitianuncheck = $this->input->get_post('conf1dietitianuncheck');	

	

	$conf2dietitiancheck = $this->input->get_post('conf2dietitiancheck');

	$conf2dietitianuncheck = $this->input->get_post('conf2dietitianuncheck');

	

	$conf3dietitiancheck = $this->input->get_post('conf3dietitiancheck');

	$conf3dietitianuncheck = $this->input->get_post('conf3dietitianuncheck');

	

	$conf4dietitiancheck = $this->input->get_post('conf4dietitiancheck');

	$conf4dietitianuncheck = $this->input->get_post('conf4dietitianuncheck');

	

	$conf5dietitiancheck = $this->input->get_post('conf5dietitiancheck');

	$conf5dietitianuncheck = $this->input->get_post('conf5dietitianuncheck');

	

	$locationunavailabledates = $this->input->get_post('locationunavailabledates');

	// $businessfrom = $this->input->get_post('businessfrom');

	// $businessto = $this->input->get_post('businessto');

	

	//echo $businessfrom."----------------".$businessto;

	$query = $this->Familyfood_model->saveLocation($company_id,$add1,$add2,$state,$country,$zpc,$conf1,$conf2,$conf3,$conf4,$conf5,$conf1dietitiancheck,$conf1dietitianuncheck,$conf2dietitiancheck,$conf2dietitianuncheck,$conf3dietitiancheck,$conf3dietitianuncheck,$conf4dietitiancheck,$conf4dietitianuncheck,$conf5dietitiancheck,$conf5dietitianuncheck,$locationunavailabledates);

	echo $query;

	

	

	

	

	}

	

	function displayAllDietitianMembers() {

	

	$query = $this->Familyfood_model->displayAllDietitianMembers();

	echo json_encode($query->result_array());

	

	}

	function editLocationDetails() {

	

	$company_id= $this->input->get_post('company_id');

	$add1 = $this->input->get_post('add1');

	$add2 = $this->input->get_post('add2');

	$state = $this->input->get_post('state');

	$country = $this->input->get_post('country');

	$zpc = $this->input->get_post('zpc');

	$conf1 = $this->input->get_post('conf1');

	$conf2 = $this->input->get_post('conf2');

	$conf3 = $this->input->get_post('conf3');

	$conf4 = $this->input->get_post('conf4');

		$conf5 = $this->input->get_post('conf5');

	$locationid = $this->input->get_post('locationid');

	

	$conf1dietitiancheck = $this->input->get_post('conf1dietitiancheck');

	$conf1dietitianuncheck = $this->input->get_post('conf1dietitianuncheck');	

	

	$conf2dietitiancheck = $this->input->get_post('conf2dietitiancheck');

	$conf2dietitianuncheck = $this->input->get_post('conf2dietitianuncheck');

	

	$conf3dietitiancheck = $this->input->get_post('conf3dietitiancheck');

	$conf3dietitianuncheck = $this->input->get_post('conf3dietitianuncheck');

	

	$conf4dietitiancheck = $this->input->get_post('conf4dietitiancheck');

	$conf4dietitianuncheck = $this->input->get_post('conf4dietitianuncheck');

	

	$conf5dietitiancheck = $this->input->get_post('conf5dietitiancheck');

	$conf5dietitianuncheck = $this->input->get_post('conf5dietitianuncheck');

	

	$locationunavailabledates = $this->input->get_post('locationunavailabledates');

	

	$businessfrom = $this->input->get_post('businessfrom');

	$businessto = $this->input->get_post('businessto');

	

	

	

	$query = $this->Familyfood_model->editLocation($company_id,$locationid,$add1,$add2,$state,$country,$zpc,$conf1,$conf2,$conf3,$conf4,$conf5,$conf1dietitiancheck,$conf1dietitianuncheck,$conf2dietitiancheck,$conf2dietitianuncheck,$conf3dietitiancheck,$conf3dietitianuncheck,$conf4dietitiancheck,$conf4dietitianuncheck,$conf5dietitiancheck,$conf5dietitianuncheck,$locationunavailabledates,$businessfrom,$businessto);

	echo $query;

	

	}


	


	function blockOnLocationBasedHolidays() {

	$locationid = $this->input->get_post('locationid');

	$date = $this->input->get_post('date');

	$query = $this->Familyfood_model->blockOnLocationBasedHolidays($locationid,$date);

	echo json_encode($query->result_array());

	

	

	}
	

	function displayPublishedReviews() {

	$output = $this->Familyfood_model->displayPublishedReviews();

	echo json_encode($output->result_array());

	}

	//edited : added function
	function save_dietitian_advice(){
		$userid = $this->input->get_post('userid');
		$followup = $this->input->get_post('followup');
		$weight = $this->input->get_post('weight');
		$height = $this->input->get_post('height');
		$bmi = $this->input->get_post('bmi');
		$goalMet = $this->input->get_post('goalMet');
		$whole_grains = $this->input->get_post('whole_grains');
		$vegetables = $this->input->get_post('vegetables');
		$fruit = $this->input->get_post('fruit');
		$dairy = $this->input->get_post('dairy');
		$fish = $this->input->get_post('fish');
		$water = $this->input->get_post('water');
		$nutrition = $this->input->get_post('nutrition');
		$physical = $this->input->get_post('physical');
		$physicalGoal = $this->input->get_post('physicalGoal');
		$socialGoal = $this->input->get_post('socialGoal');
		$handouts = $this->input->get_post('handouts');
		$appointment_date = $this->input->get_post('appointment_date');
			
		$output = $this->Familyfood_model->save_dietitian_advice( $userid,$followup,$weight,$height,$bmi,$goalMet,$whole_grains,$vegetables,$fruit,$dairy,$fish,$water,$physical,$nutrition,$physicalGoal,$socialGoal,$handouts,$appointment_date );

		echo json_encode( $output );		
	}

	function save_dietitian_advice_followup(){
		$diet_advice = array();
		$uid = $this->input->get_post('uid');
		$diet_advice['da_userid'] = $this->input->get_post('userid');
		$diet_advice['da_uid'] = $uid;
		$diet_advice['da_followup'] = !is_null($this->input->get_post('followup')) ? $this->input->get_post('followup') : '';
		$diet_advice['da_date_created'] = date( 'Y-m-d H:i:s' );
		$diet_advice['da_date_updated'] = date( 'Y-m-d H:i:s' );
		if( $this->Familyfood_model->insertDietAdvice( $diet_advice, $uid ) == true ){
			if( $diet_advice['da_followup'] == 'No-show' ){
				$headers = "From: contact@familyfoodllc.com \r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$message = "<br /><br /><br /><a style='border-radius: 25px;border: 2px solid #5dade2; padding: 10px;' href='https://www.familyfoodllc.com/service/login/logins'>Login to reschedule</a><br /><br /><br />";
				$res = mail( $diet_advice['da_userid'], DELETEAPPOINTMENTSUBJECT,DELETEAPPOINTMENTMESSAGE.''.$message, $headers );
			}
			echo json_encode( 'Successfully Advised Client' );
		}else{
			echo json_encode( 'Advising Client Failed' );
		}
	}

	
	//end

	function publish () {

	$publisharray = $this->input->get_post('publisharray');

	$output = $this->Familyfood_model->publish($publisharray);

	echo $output;

	

	}

	

	function unpublish() {

	

	$unpublisharray = $this->input->get_post('unpublisharray');

	$output = $this->Familyfood_model->unpublish($unpublisharray);

	echo $output;

	

	}

	

	function removeCategories() {

	    $rCategoryid = $this->input->get_post('removecompany_id');

		$output = $this->Familyfood_model->removeCategory($rCategoryid);

		echo $output;

	}

	

	function addNewService() {

	$servicename = $this->input->get_post('servicename');

	$description = $this->input->get_post('description');

	//$company = $this->input->get_post('company');

	$cost = $this->input->get_post('cost');

	$duration = $this->input->get_post('duration');

	$showprice = $this->input->get_post('showprice');

	//$locationid = $this->input->get_post('location_id');

	if ( $showprice == "true" ) {

		 $showprice = "Yes";

	} else {

	     $showprice = "No";

	}

	

	$data['userid'] = $this->session->userdata('userid');

	//$output = $this->Familyfood_model->insertService($servicename,$description,$company,$duration,$cost,$showprice,$locationid);

	$output = $this->Familyfood_model->insertService($servicename,$description,$duration,$cost,$showprice);

	echo $output;

	

	}    

    //added function

    function exportSearchList(){

        $file = date('dmY-His');

        header("Content-type: text/csv");

   	header("Content-Disposition: attachment; filename=visitors-$file.csv");


    	header("Pragma: no-cache");

    	header("Expires: 0");
    	if(  $this->session->userdata('companyuser') != "" ){
			$newoutput = "Name, Company, Location, Service, Date, Time, Advised \n"; 
		}else{
			$newoutput = "First Name,Last Name,Gender,Birthday,Address,Contact Number,Email,Appointment Date,Appointment Time,Reason,TimeZone,Customer,UserID,Phone,Insurance Company,Primary Insured,Insurance ID,Company Name,Location,Conference Room,Service,Cost,Dietitian,DietitianID,Booking date,Booking Status,Booked by,Advice, Weight, Height, Systolic, Diastolic, Body Type, Waist Circumference(cm), Neck Circumference(cm), BMI, Nutritional Goals Met, Whole Grains, Vegetables, Fruit, Dairy, Fish, Water, Diabetes, Intensity, Physical, Physical Goal, Time per day, Nutritional Goal, Social Goal, Handouts, Now out of all these options we discussed and which changes do you think are best for you at this time?, FOOD AND/OR NUTRIENT DELIVERY (ND), What changes have taken place since last visit?, What is working well?, What barriers have you encountered?,Plan for next visit, health in the past (PMH)., Do you have a primary care physician?, The first statement is. The food that (I/we) bought just didn’t last and (I/we) didn`t have money to get more. Was that often/ sometimes or never true for (you/your household) in the last 12 months?, (I/we) couldn`t afford to eat balanced meals. Was that often/ sometimes/ or never true for (you/your household) in the last 12 months?, sess2, sess3 \n";
		}
        // $newoutput = "Name,Contact Number,Email,Appointment Date,Appointment Time,Reason,TimeZone,Customer,UserID,Phone,Insurance Company,Insurance ID,Company Name,Location,Conference Room,Service,Cost,Dietitian,DietitianID,Booking date,Booking Status,Booked by,Advice, Weight, Height, BMI, Nutritional Goal Met, Whole Grains, Vegetables, Fruit, Dairy, Fish, Water, Physical, Nutritional Goal, Social Goal, Handouts \n";

        $client_name = $this->input->get_post('client_name');
        
        $followup_input = $this->input->get_post('followup_input');

        $singledate =$this->input->get_post('singledate');

        $fromdate =$this->input->get_post('fromdate');

        $todate =$this->input->get_post('todate');

        $company_id =$this->input->get_post('company_id');

        $locationid =$this->input->get_post('locationid');

        $serviceid =$this->input->get_post('serviceid');

        $dietitian_id =$this->input->get_post('dietitian_id');

      

        $newoutput1 = $this->Familyfood_model->getListOfAppointmentsBasedOnCriteria($client_name,$singledate,$fromdate,$todate,$company_id,$locationid,$serviceid,$dietitian_id, true,$followup_input);
        // print_r( $newoutput1 );
		$intensity = array( '' => '','INT_light'=>'Light', 'INT_moderate'=>'Moderate', 'INT_high'=>'High');
		$diabetes = array( '' => '', 'N/A', 'Yes', 'No' );
        foreach ( $newoutput1 as $row )

        {
            
        	if( $this->session->userdata('companyuser') != "" ){
				$timeWalkIn = "";
				if( $row['appointment_time'] == "00:00" ){
					$timeWalkIn = "Walk-in";
				}else{
					$timeWalkIn = $row['appointment_time'];
				}
				
				$followup = $this->Familyfood_model->getAppointmentFollowup( $row['userid'] );
		        $res_followup = '';
		        if( !empty( $followup ) ){
		            $res_followup = $followup->da_followup;
		        }
				
				$name = $row['firstname']." ".$row['lastname'];
				$newoutput .= "\"".$name."\",\"".$row['company_name']."\",\"".$row['address2']."\",\"".$row['name']."\",\"".$row['appointment_date']."\",\"".$timeWalkIn."\",\"".$res_followup."\" \n";
			}
        	else{
        	    if( !is_null( $row['uid']) ){
        		$advice = $this->Familyfood_model->getUserAdvice( $row['uid'], $row['appointment_date'] );
        	        	$adviceList = "";
        				$sess2ArrList = array();
        				$sess3ArrList = array();
        				$session2Details = $this->Familyfood_model->getReport_session2( $row['appointment_date'], $row['uid'] );
        				if( !empty( $session2Details ) ){
        					$bundle1 = preg_split('/\h*[][]/', $session2Details->sn2_bundle1, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle2 = preg_split('/\h*[][]/', $session2Details->sn2_bundle2, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle3 = preg_split('/\h*[][]/', $session2Details->sn2_bundle3, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle4 = preg_split('/\h*[][]/', $session2Details->sn2_bundle4, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle5 = preg_split('/\h*[][]/', $session2Details->sn2_bundle5, -1, PREG_SPLIT_NO_EMPTY );
        					$bundle6 = preg_split('/\h*[][]/', $session2Details->sn2_bundle6, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle7 = preg_split('/\h*[][]/', $session2Details->sn2_bundle7, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle8 = preg_split('/\h*[][]/', $session2Details->sn2_bundle8, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle9 = preg_split('/\h*[][]/', $session2Details->sn2_bundle9, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle10 = preg_split('/\h*[][]/', $session2Details->sn2_bundle10, -1, PREG_SPLIT_NO_EMPTY );
        					$bundle11 = preg_split('/\h*[][]/', $session2Details->sn2_bundle11, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle12 = preg_split('/\h*[][]/', $session2Details->sn2_bundle12, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle13 = preg_split('/\h*[][]/', $session2Details->sn2_bundle13, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle14 = preg_split('/\h*[][]/', $session2Details->sn2_bundle14, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle15 = preg_split('/\h*[][]/', $session2Details->sn2_bundle15, -1, PREG_SPLIT_NO_EMPTY );
        					$bundle16 = preg_split('/\h*[][]/', $session2Details->sn2_bundle16, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle17 = preg_split('/\h*[][]/', $session2Details->sn2_bundle17, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle18 = preg_split('/\h*[][]/', $session2Details->sn2_bundle18, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle19 = preg_split('/\h*[][]/', $session2Details->sn2_bundle19, -1, PREG_SPLIT_NO_EMPTY ); 
        					$bundle20 = preg_split('/\h*[][]/', $session2Details->sn2_bundle10, -1, PREG_SPLIT_NO_EMPTY );
        					$sn2_q1 = $session2Details->sn2_q1;
        					$sn2_q2 = $session2Details->sn2_q2;
        					$sn2_q3 = $session2Details->sn2_q3;
        	
        					for( $i = 1; $i <= 20; $i++ ){
        						$holder = 'bundle'.$i;
        						$passed = $$holder;
        						$sess2Data = explode( ',', $passed[0] );
        			
        						foreach( $sess2Data as $select ){
        							if( isset( $this->SESSION_FLOW_2_CODES[ $select ] ) ){
        								$sess2ArrList[] = $this->SESSION_FLOW_2_CODES[ $select ];
        							}
        						}
        					}
        				}
        	
        				$sesssion3Details = $this->Familyfood_model->getReport_session3( $row['appointment_date'], $row['uid'] );
        				if( !empty( $sesssion3Details->sn3_details ) ){
        					$sess3 = explode( ',', $sesssion3Details->sn3_details );
        					foreach( $sess3 as $session3 ){
        						if( isset( $this->SESSION_FLOW_2_CODES[ $session3 ] ) ){
        							$sess3ArrList[] = $this->SESSION_FLOW_3_CODES[ $session3 ];
        						}
        					}
        				}
        				$sess2String = "";
        				if( !empty( $sess2ArrList ) ){
        					$sess2String = implode( "\r\n", $sess2ArrList );
        					$sess2String = str_replace( '"', "'", $sess2String );
        				}
        	
        				$sess3String = "";
        				if( !empty( $sess3ArrList ) ){
        					$sess3String = implode( "\r\n", $sess3ArrList );
        					$sess3String = str_replace( '"', "'", $sess3String );
        				}
        	
        	        	if( !empty( $advice ) ){
        	        		$body_type = "";
        		    		if( $advice->da_body_type == 1 ){
        		    			$body_type = "Pear Shape";
        		    		}else if( $advice->da_body_type == 2 ){
        		    			$body_type = "Apple Shape";
        		    		}
        		    		foreach( $advice as $key => $val ){
        		    		    $advice->$key = str_replace( '"', "'", $val );
        		    		}
        					$da_intensity = $intensity[$advice->da_intensity];
        					$da_diabetes = $diabetes[$advice->sn_diabetes];
        		    		$adviceList = "\"".$advice->da_followup."\",\"".$advice->da_weight."\",\"".$advice->da_height."\",\"".$advice->da_systolic."\", \"".$advice->da_diastolic."\", \"".$body_type."\", \"".$advice->da_waist."\", \"".$advice->da_neck."\" ,\"".$advice->da_bmi."\",\"".$advice->da_goalMet."\",\"".$advice->da_whole_grains."\",\"".$advice->da_vegetables."\",\"".$advice->da_fruit."\",\"".$advice->da_dairy."\",\"".$advice->da_fish."\",\"".$advice->da_water."\",\"".$da_diabetes."\",\"".$da_intensity."\",\"".$advice->da_physical."\",\"".$advice->da_physicalGoal."\",\"".$advice->da_timePerDay."\",\"".$advice->da_nutritionalGoal."\",\"".$advice->da_socialGoal."\",\"".$advice->da_handouts."\",\"".$advice->da_q1."\",\"".$advice->da_q5."\",\"".$advice->da_q2."\",\"".$advice->da_q3."\",\"".$advice->da_q4."\",\"".$advice->da_q6."\",\"".$advice->sn_quest12."\",\"".$advice->sn_quest17."\",\"".$advice->sn_quest22."\",\"".$advice->sn_quest23."\"";
        	        	}
        	        	$timeWalkIn = "";
        				if( $row['appointment_time'] == "00:00" ){
        					$timeWalkIn = "Walk-in";
        				}else{
        					$timeWalkIn = $row['appointment_time'];
        				}
        				$primary_insured = '';
        				if( $row['primary_insured'] == 1 ){
        					$primary_insured = 'Self';
        				}else if( $row['primary_insured'] == 2 ){
        					$primary_insured = 'Spouse';
        				}else if( $row['primary_insured'] == 3 ){
        					$primary_insured = 'Child';
        				}
        	            $newoutput .= "\"".$row['firstname']."\",\"".$row['lastname']."\",\"".$row['gender']."\",\"".$row['birthday']."\",\"".$row['address']."\",\"".$row['phonenumber']."\",\"".$row['userid']."\",\"".$row['appointment_date']."\",\"".$timeWalkIn."\",\"".$row['reason']."\",\"".$row['timezone']."\",\"".$row['firstname']." ".$row['lastname']."\",\"".$row['userid']."\",\"".$row['phonenumber']."\",\"".$row['insurance_company']."\",\"".$primary_insured."\",\"".$row['insurance_id']."\",\"".$row['company_name']."\",\"".$row['address2']."\",\"".$row['conf_room']."\",\"".$row['name']."\",\"".$row['cost']."\",\"".$row['first_name']."".$row['last_name']."\",\"".$row['email']."\",\"".$row['booked_date']."\",\"".$row['booking_status']."\",\"".$row['booked_by']."\",";
        	            $newoutput .= $adviceList;
        	            $newoutput .= ",\"".$sess2String."\",\"".$sess3String."\"";
        	        	$newoutput .= "\n";
        	    }
			}

        }

        

    	$filename = "familyfoodllc_appointments.csv";

    	header('Content-type: application/csv');

    	header('Content-Disposition: attachment; filename='.$filename);

    

        echo $newoutput;

    }

	//new function End


	function getAllServices() {

	$output = $this->Familyfood_model->getAllServices();

	echo json_encode($output->result_array());

	

	}

	function saveServicesToLocations() {

	

	$servicearray = $this->input->get_post('servicearray');

	$locationid = $this->input->get_post('location_id');

	$serviceArrayuncheck = $this->input->get_post('serviceArrayuncheck');

	$output = $this->Familyfood_model->saveServicesToLocations($servicearray,$locationid,$serviceArrayuncheck);

	echo $output;

	}

	

	function saveDietitianToServices() {

	$dietitianarray = $this->input->get_post('dietitianArray');

	$dietitianarrayunchecked = $this->input->get_post('dietitianArrayUnchecked');

	$serviceid = $this->input->get_post('service_id');

	$output = $this->Familyfood_model->saveDietitianToServices($dietitianarray,$serviceid,$dietitianarrayunchecked);

	echo $output;

	

	

	}

	

	function selectServiceCheckboxes() {

	$locationid = $this->input->get_post('location_id');

	$output = $this->Familyfood_model->selectServiceCheckboxes($locationid);

	echo json_encode($output->result_array());

	}

	function displayEditSereviceDetails() {

	$serviceid = $this->input->get_post('service_id');

	$output = $this->Familyfood_model->displayEditSereviceDetails($serviceid);

	echo json_encode($output->result_array());

	

	

	}

  

  function editDietitianMember() {

  

  $dietitian_id = $this->input->get_post('dietitian_id');

  $serviceid = $this->input->get_post('serviceid');

  $output = $this->Familyfood_model->editDietitianMember($dietitian_id,$serviceid);

  echo json_encode($output->result_array());

  

  

  

  }

  function selectDietitianCheckboxes() {

  $serviceid = $this->input->get_post('service_id');

  $output = $this->Familyfood_model->selectDietitianCheckboxes($serviceid);

  echo json_encode($output->result_array());

  

  

  

  }

  

  

 /* function postreviewform() {

       /* $sessionvalue = $this->session->userdata('cuser');

		if ( $sessionvalue == "") {

		    $this->load->view('layout/layout.php');

			redirect('login/userlogin');

		} else {*/

			//$data['cuser'] = $this->session->userdata('cuser');

			

		/*	$cuser = $this->session->userdata('cuser');

			$cservice = $this->session->userdata('cservice');

			$data['cuser'] = $cuser;

			$data['cservice'] = $cservice;

			

			//$data['searchlocation']= $this->session->userdata('searchlocation');

           // $data['company_name']= $this->session->userdata('company_name');

			$this->load->view('layout/layout.php');

			$this->load->view('postreviewform.php',$data);

		//}

  

  

  }*/



  function getCompaniesData() {

  $location = $this->input->get_post('location');

  $output = $this->Familyfood_model->getCompaniesData($location);

  echo json_encode($output->result_array());

  

  }

  

  function getCompaniesData1() {

  $zipcode = $this->input->get_post('zipcode');

  $output = $this->Familyfood_model->getCompaniesData1($zipcode);

  echo json_encode($output);

  

  }

  

  function getCompaniesDetails() {

	  $value = $this->input->get_post('value');

	  $output = $this->Familyfood_model->getCompaniesDetails($value);

	  echo json_encode($output);

  }


  

  

  function setSessionForEditAppointment() {

  

  $cuser= $this->session->userdata('cuser');

  $searchlocation = $this->input->get_post('serachlocation');

  $company_name = $this->input->get_post('company_name');

  $location_id = $this->input->get_post('location_id');

  $locationname = $this->input->get_post('locationname');

  $service_id = $this->input->get_post('service_id');

  $servicename = $this->input->get_post('servicename');

  $hour = $this->input->get_post('hour');

  $minutes = $this->input->get_post('minutes');

  $calenderdate = $this->input->get_post('calenderdate');

  $timestatus = $this->input->get_post('timestatus');

  $appointConfNum = $this->input->get_post('appointConfNum');

  $customerID = $this->input->get_post('customerID');

   $calendarday = $this->input->get_post('calendarday');

    $dietitian = $this->input->get_post('dietitian');

	 $fuserid = $this->input->get_post('fuserid');

		  

  $this->session->set_userdata($cuser.'searchlocation', $searchlocation);

  $this->session->set_userdata($cuser.'company_name', $company_name);

  $this->session->set_userdata($cuser.'location_id',$location_id);

  $this->session->set_userdata($cuser.'locationname',$locationname);

  $this->session->set_userdata($cuser.'serviceid',$service_id);

  $this->session->set_userdata($cuser.'servicename',$servicename);

  $this->session->set_userdata($cuser.'hour',$hour);

  $this->session->set_userdata($cuser.'minutes',$minutes);

  $this->session->set_userdata($cuser.'selectCalendarDate',$calenderdate);

  $this->session->set_userdata($cuser.'calendarday',$calendarday);

  $this->session->set_userdata($cuser.'timestatus',$timestatus);

  $this->session->set_userdata($cuser.'appointConfNum',$appointConfNum);

  $this->session->set_userdata($cuser.'customerID', $customerID);

  $this->session->set_userdata('fdietitian',$dietitian);

  $this->session->set_userdata('fuserid',$fuserid);

  

 // echo $service_id."---------------";

  echo "success";

  

  

 

  }


  function removeSDetails() {

  $cuser= $this->session->userdata('cuser');

  $this->session->unset_userdata($cuser.'searchlocation');

  $this->session->unset_userdata($cuser.'company_name');

  $this->session->unset_userdata($cuser.'location_id');

  $this->session->unset_userdata($cuser.'locationname');

  

  $this->session->unset_userdata($cuser.'serviceid');

  $this->session->unset_userdata($cuser.'servicename');

  $this->session->set_userdata($cuser.'hour');

  $this->session->set_userdata($cuser.'minutes');

  $this->session->set_userdata($cuser.'timestatus');

  $this->session->set_userdata($cuser.'calendarday');

  $this->session->set_userdata($cuser.'selectCalendarDate');

  $this->session->set_userdata($cuser.'calenderdate');

  $this->session->set_userdata($cuser.'appointConfNum');

  $this->session->set_userdata('fdietitian');

  $this->session->set_userdata('fuserid');

 // echo "success";

  

  }

  

  function postreviews() {

  $data['cuser'] = $this->session->userdata('cuser');

  $this->load->view('layout/layout.php');

  $this->load->view('postreviews.php',$data);



  }

  

  function diettianforgotpassword() {

        $data['erromsg'] = "";

		$data['regerromsg'] = "";

		$data['logindisplay'] = "none";

		$data['reglogindisplay'] = "none";

		$data['cuser'] = "";

  $sessionvalue = $this->session->userdata('conuser');

  if ( $sessionvalue == "") {

		    $this->load->view('layout/layout.php');

			$this->load->view('diettianforgotpassword.php',$data);

	} else {

			$this->load->view('layout/layout.php');

			 redirect('login/viewappointments');

	}

  }

  

  function getUserDetails() {

  $userid = $this->input->get_post('user_id');

  $cnumber = $this->input->get_post('confirmationnumber');

  $cservice = $this->input->get_post('cservice');

  $output = $this->Familyfood_model->getUserDetails($userid,$cnumber,$cservice);

  echo json_encode($output->result_array());

  }

  

  function authenticateuseremailid() {

  $userid = $this->input->get_post('userid');

  $output = $this->Familyfood_model->authenticateuseremailid($userid);

  echo json_encode($output->result_array());

  

  

  }

  

  function appointmentconfirmation() {

	$sessionvalue = $this->session->userdata('cuser');

	if ($sessionvalue == "") {

	   redirect('login/userlogin');

	} else {

	    $data['cuser'] = $this->session->userdata('cuser');

		$this->load->view('layout/layout.php');

		$this->load->view("appointmentconfirmation.php", $data);

	}

	}

  function getInsuranceDeails() {

  $userid = $this->input->get_post('user_id');

  $output = $this->Familyfood_model->getInsuranceDeails($userid);

  echo json_encode($output->result_array());

  

  

  }

  function setInsuranceAndUserDeails() {

  $userid = $this->input->get_post('user_id');

  $hinsurancecompany = $this->input->get_post('hinsurancecompany');

  $hinsuranceid = $this->input->get_post('hinsuranceid');

  $fname = $this->input->get_post('fname');

  $lname = $this->input->get_post('lname');

  $cnumber = $this->input->get_post('cnumber');

  $email = $this->input->get_post('email');

  $dateandtime = $this->input->get_post('dateandtime');

  

  $output = $this->Familyfood_model->setInsuranceAndUserDeails($userid, $hinsurancecompany ,  $hinsuranceid,  $fname,  $lname,$cnumber,  $email, $dateandtime);

  echo $output;

  

  

  }


  

  function finished() {

  $sessionvalue = $this->session->userdata('cuser');

	if ($sessionvalue == "") {

	   redirect('login/userlogin');

	} else {

	    $data['cuser'] = $this->session->userdata('cuser');

		$this->load->view('layout/layout.php');

		$this->load->view("finished.php", $data);

	}

  

  

  }

  

  function displayAllLocations() {

  $searchLocation = $this->input->get_post('searchLocation');

  $searchCompany = $this->input->get_post('searchComName');

  $output = $this->Familyfood_model->displayAllLocations($searchLocation,$searchCompany);

  echo json_encode($output);

  }

  

  function saveUnavailableDates() {

  $unavailabledate = $this->input->get_post('unavailabledate');

  $unavailabledateto = $this->input->get_post('unavailabledateto');

  $dietitian_id = $this->input->get_post('dietitian_id');

  $output = $this->Familyfood_model->saveUnavailableDates($unavailabledate,$dietitian_id,$unavailabledateto);

  echo $output;

  

  

  }

  

  

  function checkForDietitianAvailableOnConferenceBased() {

  

  $locationid = $this->input->get_post('locationid');

  $date = $this->input->get_post('date');

  $serviceid = $this->input->get_post('serviceid');

  

  $output= $this->Familyfood_model->checkForDietitianAvailableOnConferenceBased($serviceid,$locationid,$date);

  

  echo json_encode($output->result_array());

  

  }

  

  function getAppointmentsForReviewPost() {

  $userid = $this->input->get_post('userid');

  $date = $this->input->get_post('date');

   $output = $this->Familyfood_model->getAppointmentsForReviewPost($userid,$date);

   echo json_encode($output->result_array());

  }

  

  function getAppointments() {

    $userid = $this->input->get_post('userid');

	$bookedby = $this->input->get_post('bookedby');

	$output = $this->Familyfood_model->getAppointments($userid,$bookedby);

    echo json_encode($output);

  }

  	function getAppointmentsOrderBy(){
  		$userid = $this->input->get_post('userid');

		$bookedby = $this->input->get_post('bookedby');

		$orderby = $this->input->get_post('order');

		$output = $this->Familyfood_model->getAppointmentsOrderBy($userid,$bookedby,$orderby);

	    echo json_encode($output->result_array());
  	}

  	//end

  

  function blockAlreadyBookedTimes() {

  $userid = $this->input->get_post('user_id');

  $appointmentdate = $this->input->get_post('appointmentdate');

  $output = $this->Familyfood_model->blockAlreadyBookedTimes($userid,$appointmentdate);

  echo json_encode($output->result_array());

  

  }

  function getTimeZones() {

  $locationid = $this->input->get_post('location_id');

  $output = $this->Familyfood_model->getTimeZones($locationid);

  echo json_encode($output->result_array());

  

  

  }

  

  function blockAlreadyBookedTimesWithoutLogin() {

  

  //$serviceid = $this->input->get_post('service_id');

  $locationid = $this->input->get_post('location_id');

  $appointmentdate = $this->input->get_post('appointmentdate');

  //$output = $this->Familyfood_model->blockAlreadyBookedTimesWithoutLogin($serviceid,$appointmentdate);

  $output = $this->Familyfood_model->blockAlreadyBookedTimesWithoutLogin($locationid,$appointmentdate);

  echo json_encode($output);  

  }

  

  function getListOfAllAppointments() {

  $userid = $this->session->userdata('userid');

  $output = $this->Familyfood_model->getListOfAllAppointments();

  echo json_encode($output->result_array());



  }

  

    function getAllServiceNames() {

	$locationid = $this->input->get_post('locationid');

  $output = $this->Familyfood_model->getAllServiceNames($locationid);

  echo json_encode($output->result_array());

  

  }

  

    function getAllDietitianNames() {

	  $serviceid = $this->input->get_post('serviceid');

	  $output = $this->Familyfood_model->getAllDietitianNames($serviceid) ;

	  echo json_encode($output->result_array());

  

  }

  

  function getCustomerServiceDetails() {

  

  $output = $this->Familyfood_model->getCustomerServiceDetails();

  echo json_encode($output->result_array());

 

  }

  function removePendingAppointments(){
      $this->Familyfood_model->removePendingAppointments();
  }

  function reminder1day() {
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 1hr', 'This is test', '' );
$email_list = "";
$email_fail = "";
$now = date( 'Y-m-d' );
$output = $this->Familyfood_model->getAppointmentsFor1dayReminder( $now );

$output = $output->result_array();

if(count($output) > 0) {

for($i=0 ; $i<count($output) ; $i++) {

$userid = $output[$i]['userid'];

$confnumber = $output[$i]['confirmation_number'];



$msg = $this->mail($userid, ONEHOURAFTERVISITSUBJECT, ONEHOURAFTERVISITMESSAGE.'<br> <a href ="' . base_url() . 'login/reviewform?userid=' . $userid . '&confnumber=' . $confnumber . '">'. base_url() . 'login/reviewform</a>', "");



if($msg == "success" ) {
$email_list .= ",".$userid;
$this->Familyfood_model->changehourlymailstatusmsg($confnumber);

}else{ $email_fail .= ",".$userid; }

}
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 1hr', $email_list.'<br />'.$email_fail, '' );
echo $email_list.'<br />'.$email_fail;
}

}



function reminder24hours() {
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 24hr', 'This is test', '' );

$email_list = "";
$email_fail = "";
$output = $this->Familyfood_model->getAppointmentsFor24hourReminder();

$output = $output->result_array();

if(count($output) > 0) {
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 24hr', 'went after count', '' );

for($i=0 ; $i<count($output) ; $i++) {
//if( $i== 0 ){$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 24hr', 'first loop', '' );}
$userid = $output[$i]['userid'];


$time = $output[$i]['appointment_time'];

$timezone = $output[$i]['timezone'];

$locaion = $output[$i]['address2'];
$conference = $output[$i]['conf_room'];

$appointmentdate = $output[$i]['appointment_date'];

$confnumber = $output[$i]['confirmation_number'];





$html = 'Date:<b>'.$appointmentdate .'</b><br>';

	$html = $html . 'Time:<b>'.$time .'</b><br>';

	$html = $html . 'Time Zone:<b>'.$timezone .'</b><br>';

	$html = $html . 'Location:<b>'.$locaion .'</b><br>';

	$html = $html . 'Conference Room:<b>'.$conference.'</b><br>';

	
//if( $userid == 'test3@gmail.com' ){ $userid = 'filart.ervin@gmail.com'; }
 $msg = $this->mail($userid, ONEDAYBEFOREVISITSUBJECT, ONEDAYBEFOREVISITMESSAGE1 . "<br>" . $html . "<br>" . ONEDAYBEFOREVISITMESSAGE2 , "fpwd");

 if($msg == "success" ) {
	$email_list .= "<br />".$userid;
 	//$msg = $this->mail('filart.ervin@gmail.com', ONEDAYBEFOREVISITSUBJECT, ONEDAYBEFOREVISITMESSAGE1 . "<br>" . $html . "<br>" . ONEDAYBEFOREVISITMESSAGE2 , "fpwd");
	$this->Familyfood_model->changedailymailstatusmsg($confnumber);

 }else{ 
$email_fail .= "<br />".$userid; 
}



}
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 24hr', $email_list.'<br />'.$email_fail, '' );
echo 'Email Success<br />'.$email_list.'<br />Email Fail:'.$email_fail;
if( $email_list !== '' ){
//	$msg = $this->mail('filart.ervin@gmail.com', 'succeful mail sent', $email_list, "");
}
if( $email_fail !== '' ){
//	$msg = $this->mail('filart.ervin@gmail.com', 'FAILED mail sent', $email_fail, "");
}
}

}



function reminderoneweek() {
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 1wk', 'This is test', '' );
$email_list = "";
$email_fail = "";

$output = $this->Familyfood_model->getAppointmentsFor1weekReminder();

$output = $output->result_array();

if(count($output) > 0) {

for($i=0 ; $i<count($output) ; $i++) {

$userid = $output[$i]['userid'];

$time = $output[$i]['appointment_time'];

$timezone = $output[$i]['timezone'];

$locaion = $output[$i]['address2'];

$conference = $output[$i]['conf_room'];

$appointmentdate = $output[$i]['appointment_date'];

$confnumber = $output[$i]['confirmation_number'];

		$message = '<html></body>';
		$message .= '<div style="width:100%;background-color:#e5e8e8;text-align:center;padding:0 0 20px 0;">
						<h4 style="margin-bottom:0 !important">Date</h4>
						<p style="margin:0 !important">'.$appointmentdate.'</p>
						<p style="margin:0 !important">'.$time.'</p>
						<h4 style="margin-bottom:0 !important">Time zone</h4>
						<p style="margin:0 !important">'.$timezone.'</p>
						<h4 style="margin-bottom:0 !important">Location</h4>
						<p style="margin:0 !important">'.$locaion.'</p>
						<h4 style="margin-bottom:0 !important">Conference Room</h4>
						<p style="margin:0 !important">'.$conference.'</p>
						<h4>Please Confirm your appointment</h4>
						<a style="background-color:#82e0aa; padding: 5px 25px; color:white;font-weight:600;text-decoration: none !important;" href="http://www.familyfoodllc.com/service/login/confirmMail?confid='.$confnumber.'">Confirm Appointment</a>
					</div>';
		$message .= '</body></html>';

	
$msg = $this->mail($userid, ONEWEEKBEFOREVISITSUBJECT, ONEWEEKBEFOREVISITMESSAGE1 . "<br>" . $message . "<br>" . ONEWEEKBEFOREVISITMESSAGE2 . '<br> <a href ="' . base_url() . '">'. base_url() . '</a>' . ONEWEEKBEFOREVISITMESSAGE3 , "");



if($msg == "success" ) {
	$email_list .= ",".$userid;
	$this->Familyfood_model->changeweeklymailstatusmsg($confnumber);

 }else{ $email_fail .= ",".$userid; }

}
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 1wk', $email_list.'<br />'.$email_fail, '' );
echo $email_list.'<br />'.$email_fail;
}



}


  function getUserFutureAppointments(){
  	$userid = $this->input->get_post('userid');
  	$diet_id = $this->input->get_post('dietitian_id');
  	$today = date( 'Y-m-d');
  	
	$output = $this->Familyfood_model->getUserFutureAppointments( $userid, $diet_id, $today );

  	echo json_encode($output->result_array());  	
  }
  
    function submitFeedBackLoc(){
        $location_id = $this->input->get_post('location_id');
        $company_id = $this->input->get_post('company_id');
  	    $diet_id = $this->input->get_post('dietitian_id');
  	    $feedback = $this->input->get_post('feedback');
  	    
  	    $today = date( 'Y-m-d H:i:s');
  	
	    $output = $this->Familyfood_model->saveFeedBack( $location_id, $company_id, $diet_id, $feedback, $today );

  	    echo json_encode($output);
    }
    
    function getFeedBack(){
        $file = date('dmY-His');
		header("Content-type: text/csv");
		header("Content-Disposition: attachment; filename=visitors-$file.csv");
		header("Pragma: no-cache");
		header("Expires: 0");

		$location_id = $this->input->get_post('location_id');
        $company_id = $this->input->get_post('company_id');
  	    
  	
	    $result = $this->Familyfood_model->getFeedBack( $location_id, $company_id );

	    $output = "Company, Location, Date, Dietitian, Feedback \n";
	    
	    foreach ($result->result() as $row)
	    {
	        $output .= "\"".$row->company_name."\",\"".$row->city." ".$row->address2."\",\"".$row->lf_date_created."\",\"".$row->first_name." ".$row->last_name."\",\"".str_replace(',',' ',$row->lf_feedback)."\"";
	    	$output = $output . "\n";
	    }

		$filename = $row->city."_".$row->address2."_feedback.csv";
        if( $location_id == 0 && $company_id == 0 ){
            $filename = "location_feedback.csv";
        }
		header('Content-type: application/csv');

		header('Content-Disposition: attachment; filename='.$filename);

	    echo $output;
	    
    }

  function getLatestImpact(){
	$data['erromsg'] = "";
	$data['logindisplay'] = "none";
	$data['username'] = "";

	$sessionvalue = $this->session->userdata('userid');
	$sessionvalue2 = $this->session->userdata('conuser');

	if ( $sessionvalue == "" && $sessionvalue2 == "" ) {

		// redirect("login/logins");
		redirect("login/logins");
	} else {
	  $output = $this->Familyfood_model->getLatestImpact();

  	  echo json_encode($output->result_array());  	
	}
  }

  function mail($mailTo, $subject, $messageFormat, $fromFeature)

	{     
		if( $fromFeature == "html" ){
			$this->email->set_mailtype("html");
		}

         $this->email->from(FFLLCADMINMAIL, FFLLCADMINMAILNAME);

         $this->email->to($mailTo); // $mailTo - can be a comma separated email-ids

            //$this->email->cc('filart.ervin@gmail.com'); 

            //$this->email->bcc('365webdays@gmail.com'); 



         $this->email->subject($subject);

         $this->email->message($messageFormat);	



            if($this->email->send()){

				if($fromFeature =="fpwd" || $fromFeature =="html") {

						return "success";

				}

			} else {

				echo "ERROR = ".$this->email->print_debugger();

			}

	}

	

}





	

		



/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */



?>