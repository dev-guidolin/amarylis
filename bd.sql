-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.8-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para amarylis
DROP DATABASE IF EXISTS `amarylis`;
CREATE DATABASE IF NOT EXISTS `amarylis` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `amarylis`;

-- Copiando estrutura para tabela amarylis.fake_sales
DROP TABLE IF EXISTS `fake_sales`;
CREATE TABLE IF NOT EXISTS `fake_sales` (
  `produto_id` int(11) DEFAULT NULL,
  `sales` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela amarylis.fake_sales: ~7 rows (aproximadamente)
DELETE FROM `fake_sales`;
/*!40000 ALTER TABLE `fake_sales` DISABLE KEYS */;
INSERT INTO `fake_sales` (`produto_id`, `sales`) VALUES
	(1, 43),
	(2, 24),
	(4, 11),
	(5, 11),
	(6, 13),
	(3, 11),
	(7, 16),
	(8, 45);
/*!40000 ALTER TABLE `fake_sales` ENABLE KEYS */;

-- Copiando estrutura para tabela amarylis.flores
DROP TABLE IF EXISTS `flores`;
CREATE TABLE IF NOT EXISTS `flores` (
  `id_flor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_flor` varchar(50) NOT NULL,
  `url_flor` varchar(50) NOT NULL,
  `preco_flor` float NOT NULL,
  `descricao_flor` longtext NOT NULL,
  `code_produto` varchar(50) NOT NULL,
  `categoria` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `contatos` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_flor`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela amarylis.flores: ~8 rows (aproximadamente)
DELETE FROM `flores`;
/*!40000 ALTER TABLE `flores` DISABLE KEYS */;
INSERT INTO `flores` (`id_flor`, `nome_flor`, `url_flor`, `preco_flor`, `descricao_flor`, `code_produto`, `categoria`, `views`, `contatos`, `status`) VALUES
	(1, 'Buquê de Noiva', 'buque-de-noiva-iuhsc', 789.45, '<p>Buqu&ecirc; de Noiva</p>', 'iuhsc', 1, 2, 0, 0),
	(2, 'Cesta CAfe da manhã bombástico', 'cesta-cafe-da-manha-bombastico-tlp', 999.99, '<p>Qualquer coisa</p>', 'tlp', 1, 7, 0, 1),
	(3, 'Rosas Vermelhas Holandesas', 'rosas-vermelhas-holandesasl-rshlds', 148.89, '<p><span style="color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore eveniet impedit molestias repellendus repudiandae sit ut. Amet cupiditate eveniet illum minima, rerum veritatis! Autem dolorem modi quis soluta ullam.</span></p>', 'rshlds', 1, 1, 0, 1),
	(4, 'Cesta Café da manhã emoção', 'cesta-cafe-damanha-emocao-abc', 231.49, '<p><span style="color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore eveniet impedit molestias repellendus repudiandae sit ut. Amet cupiditate eveniet illum minima, rerum veritatis! Autem dolorem modi quis soluta ullam.</span></p>', 'abc', 2, 3, 0, 1),
	(5, 'Cesta Café da manhã emoção', 'cesta-cafe-damanha-emocao-def', 231.49, '<p><span style="color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore eveniet impedit molestias repellendus repudiandae sit ut. Amet cupiditate eveniet illum minima, rerum veritatis! Autem dolorem modi quis soluta ullam.</span></p>', 'def', 2, 3, 0, 1),
	(6, 'Cesta Café da manhã emoção', 'cesta-cafe-damanha-emocao-ghi', 231.49, '<p><span style="color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore eveniet impedit molestias repellendus repudiandae sit ut. Amet cupiditate eveniet illum minima, rerum veritatis! Autem dolorem modi quis soluta ullam.</span></p>', 'ghi', 2, 1, 0, 1),
	(7, 'Cesta Café da manhã emoção', 'cesta-cafe-damanha-emocao-jkl', 231.49, '<p><span style="color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore eveniet impedit molestias repellendus repudiandae sit ut. Amet cupiditate eveniet illum minima, rerum veritatis! Autem dolorem modi quis soluta ullam.</span></p>', 'jkl', 2, 13, 2, 1),
	(8, 'Copo de leite', 'copo-de-leite-qhbcw', 89.45, '<p>Seria muito bom se tudo desse certo.</p>', 'qhbcw', 1, 2, 0, 1);
/*!40000 ALTER TABLE `flores` ENABLE KEYS */;

-- Copiando estrutura para tabela amarylis.frases
DROP TABLE IF EXISTS `frases`;
CREATE TABLE IF NOT EXISTS `frases` (
  `id_frase` int(11) NOT NULL,
  `frase` varchar(256) NOT NULL,
  PRIMARY KEY (`id_frase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela amarylis.frases: ~28 rows (aproximadamente)
DELETE FROM `frases`;
/*!40000 ALTER TABLE `frases` DISABLE KEYS */;
INSERT INTO `frases` (`id_frase`, `frase`) VALUES
	(1, 'O amor não se vê com os olhos mas com o coração.'),
	(2, 'Um coração feliz é o resultado inevitável de um coração ardente de amor.'),
	(3, 'Eu + você + beijos + abraços = Quando?'),
	(4, 'Se o amor é fantasia, eu me encontro ultimamente em pleno carnaval.'),
	(6, 'Cada qual sabe amar a seu modo; o modo, pouco importa; o essencial é que saiba amar.'),
	(7, 'Amar não é olhar um para o outro, é olhar juntos na mesma direção.'),
	(9, 'É um amopr pobre, aquele que se pode medir.'),
	(10, 'O amor é a força mais sutil do mundo.'),
	(11, 'Amor de mãe é a mais elevada forma de altruísmo.'),
	(12, 'E tem como não sorrir quando me lembro de você?'),
	(13, 'Se você não existisse, eu te inventaria.'),
	(14, 'Aprenda a dar valor a quem te ama.'),
	(15, 'Pra nós, todo o amor do mundo.'),
	(16, 'Tudo o que eu precisava encontrei em você.'),
	(17, 'Sabe o que combina com você? Eu.'),
	(18, 'O amor é a resposta, não importa a pergunta.'),
	(19, 'A melhor coisa de nossas vidas é a família.'),
	(20, 'Estranho seria se eu não me apaixonasse por você.'),
	(21, 'Quando a felicidade de alguém é a sua felicidade, isso é amor.'),
	(22, 'Que as declarações sejam diárias e o amor seja constante!'),
	(23, 'Só quero que nunca esqueça que pra sempre eu vou te amar.'),
	(24, 'Amar é querer a felicidade do outro.'),
	(25, 'Por que me apaixonei tanto pelo teu sorriso?'),
	(26, 'E dos perfumes mais raros, eu escolheria teu cheiro.'),
	(27, 'Se for pra me perder, que seja em você.'),
	(28, 'Na dúvida, coloca um pouquinho mais de amor. Não tem erro!'),
	(29, 'Todo amor é bonito. Feio é não amar.'),
	(30, 'Amor de mãe não morre, só muda de atmosfera.');
/*!40000 ALTER TABLE `frases` ENABLE KEYS */;

-- Copiando estrutura para tabela amarylis.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(128) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `hierarquia` int(11) NOT NULL,
  `token` longtext NOT NULL DEFAULT '',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela amarylis.user: ~0 rows (aproximadamente)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `user`, `senha`, `hierarquia`, `token`) VALUES
	(1, 'admin', 'c0f79bbff0a23c3c45949c58e9dcbdc3d2706f1b', 1, 'KZCAN03NOSBKDQNNKZ3XWEA7UEDOG2GXBLMM86AEQDPLIAFKZK0NMI3RPVSYNDRP');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
