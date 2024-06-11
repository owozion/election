SELECT * FROM polling_unit JOIN lga ON polling_unit.polling_unit_id=lga.uniqueid JOIN announced_pu_results ON polling_unit.polling_unit_id=announced_pu_results.polling_unit_uniqueid WHERE polling_unit_name ='gra';



SELECT * FROM polling_unit JOIN lga ON polling_unit.polling_unit_id=lga.uniqueid JOIN announced_pu_results ON polling_unit.polling_unit_id=announced_pu_results.polling_unit_uniqueid WHERE polling_unit_id=8;


SELECT SUM(party_score) FROM announced_pu_results WHERE party_abbreviation='PDP';


SELECT * FROM polling_unit JOIN announced_pu_results ON polling_unit.polling_unit_id=announced_pu_results.polling_unit_uniqueid WHERE polling_unit_id =8;


SELECT * FROM lga JOIN announced_pu_results ON lga.lga_id=announced_pu_results.polling_unit_uniqueid WHERE lga_id=8; //working
