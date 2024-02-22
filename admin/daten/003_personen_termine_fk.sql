-- 003_personen_termine_fk.sql

USE mvc3;

--
-- 2 x Constraints for table `personen_termine`
-- personen_id`
-- termine_id
--
-- SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE `personen_termine`
	ADD CONSTRAINT `personen_fk_1` FOREIGN KEY (`personen_id`)
		REFERENCES `personen` (`id`),
		
	ADD CONSTRAINT `termine_fk_2` FOREIGN KEY (`termine_id`)
		REFERENCES `termine` (`id`);
-- SET FOREIGN_KEY_CHECKS=1;
