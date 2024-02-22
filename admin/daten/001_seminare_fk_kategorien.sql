-- 001_seminare_fk_kategorien.sql

USE mvc3;

--
-- Constraints for table `seminare`
--
ALTER TABLE `seminare`
	ADD CONSTRAINT `kategorien_fk_1` FOREIGN KEY (`kategorien_id`)
		REFERENCES `kategorien` (`id`);
