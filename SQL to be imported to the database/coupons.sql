SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `coupons` (
  `id` int NOT NULL,
  `Code` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Date` date NOT NULL,
  `Hour` time NOT NULL,
  `is_used` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `coupons` (`id`, `Code`, `Date`, `Hour`, `is_used`) VALUES
(72, 'Delete_This_Row', '2023-09-14', '07:55:14', 0),

ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `coupons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;
