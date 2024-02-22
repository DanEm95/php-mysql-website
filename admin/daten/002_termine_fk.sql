-- 002_termine_fk.sql

USE mvc3;

--
-- 2 x Constraints for table `termine`
-- seminare_id`
-- standorte_id
--
ALTER TABLE `termine`
	ADD CONSTRAINT `seminare_fk_1` FOREIGN KEY (`seminare_id`)
		REFERENCES `seminare` (`id`),
		
	ADD CONSTRAINT `standorte_fk_2` FOREIGN KEY (`standorte_id`)
		REFERENCES `standorte` (`id`);
