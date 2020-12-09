-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 09. pro 2020, 16:01
-- Verze serveru: 10.4.11-MariaDB
-- Verze PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `pokusy`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `chemie`
--

CREATE TABLE `chemie` (
  `id_chemie` int(11) NOT NULL,
  `nazev_pokusu` varchar(150) DEFAULT NULL,
  `pomucky` varchar(200) DEFAULT NULL,
  `postup` varchar(1500) DEFAULT NULL,
  `popis_pokusu` varchar(1500) DEFAULT NULL,
  `obrazek` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `chemie`
--

INSERT INTO `chemie` (`id_chemie`, `nazev_pokusu`, `pomucky`, `postup`, `popis_pokusu`, `obrazek`) VALUES
(1, ' Horký led ', 'K pokusu budeme potřebovat: hrnec, lžičku, sklenici, lednici, vodu a octan sodný (dbáme zvýšené opatrnosti při práci s octanem sodným).', 'Do hrnce nalijeme zhruba 250 cm³ vody a zahřejeme ji na 60 °C. Do zahřáté vody přidáme deset lžiček octanu sodného a necháme ho rozpustit. Roztok přelijeme do jiné nejlépe čisté sklenice a necháme ho ochladit v lednici. Po ochlazení se lehce dotkneme prstem povrchu roztoku a tím začne probíhat \"nucená krystalizace\". Celý roztok se začne měnit v horký led a ohřívat se na 50 °C.', 'Horký led lze připravit z octanu sodného. Octan sodný je sůl kyseliny octové a lze jej připravit také působením kyseliny octové na soli slabších kyselin. Pokud krystaly octanu sodného rozpustíme ve vodě zahřáté nad 58 °C, vznikne kapalina, která po jejím vychlazením na teplotu zhruba 15 °C začne dotknutím prstu samovolně krystalizovat a měnit se zpět na pevné skupenství. Při této reakci se uvolňuje teplo, jedná se tedy o reakci exotermickou, teplota krystalů tedy dosáhne až 50 °C.', ''),
(2, ' Neviditelné písmo ', 'K pokusu budeme potřebovat: dva papíry (nejlépe velikosti A4), vatové tyčinky, svíčku, zápalky, citronovou šťávu a mléko.', 'Vatovou tyčinku namočíme do citronové šťávy a na papír napíšeme zprávu, stejně tak namočíme vatovou tyčinku do mléka a také napíšeme na papír zprávu. Následně chvíli počkáme až papíry vyschnou. Po vyschnutí oba papíry zahříváme nad plamenem svíčky do té doby než nepůjde text přečíst.', 'Tento pokus se dá připravit pomocí jednoduchých organických látek, které jsou běžné v každé domácnosti. Tyto organické látky obsahují uhlík, který se za pokojové teploty nemění, avšak při zahřívání místa, kde se nachází použitá organická látka, dochází k uhelnatění této látky a vzniku uhlíku a tím zviditelněním daného místa.', ''),
(3, ' Oheň, který nespálí ', 'K pokusu budeme potřebovat: čistý kapesník (nejlépe bavlněný), pinzetu nebo jiný nástroj na uchopení kapesníku, zápalky, hrnek nebo nějakou nádobu, umyvadlo, vodu a alkohol (zhrzuba 50%).', 'Do hrnku nebo nádoby nalijeme zhruba 10 cm³ alkoholu (například slivovice) a 5cm³ vody. V tomto roztoku pořádně a důkladně vymácháme kapesník. Ten následně uchopíme pinzetou nebo jiným nástrojem a zapálíme ho nad umyvadlem. Kapesník necháme hořet, ten avšak neshoří.', 'Voda obsažená ve směsi izoluje kapesník od hoření a zároveň ji ochlazuje. Teplo, které uvolňuje při hoření par etanolu, se spotřebovává na vypařování vody v kapesníku a tím znemožňuje hoření kapesníku. ', '');

-- --------------------------------------------------------

--
-- Struktura tabulky `fyzika`
--

CREATE TABLE `fyzika` (
  `id_fyzika` int(11) NOT NULL,
  `nazev_pokusu` varchar(150) DEFAULT NULL,
  `pomucky` varchar(200) DEFAULT NULL,
  `postup` varchar(1500) DEFAULT NULL,
  `popis_pokusu` varchar(1500) DEFAULT NULL,
  `obrazek` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `fyzika`
--

INSERT INTO `fyzika` (`id_fyzika`, `nazev_pokusu`, `pomucky`, `postup`, `popis_pokusu`, `obrazek`) VALUES
(1, ' Vznášedlo ', 'K pokusu budeme potřebovat: CD disk, sekundové lepidlo (nebo jiné lepidlo), balónek a plastové pouzdro od kinofilmu.', 'Do středu dna plastového pouzdra vytvoříme malý otvor. Následně přilepíme dno pouzdra k CD disku tak, aby se středový otvor CD disku a pouzdra najvzájem kryly. Na opačný konec plastového pouzdra pak navlékneme balónek. Balónek nafoukneme otvorem v CD disku a přiloženým prstem nebo jiným způsobem zamezíme úniku vzduchu. Vznášedlo položíme na hladkou podložku a odkryjeme otvor pro únik vzduchu. Vznášedlo se pohybuje samo po podložce vlastní silou, dokud se vzduch z balónku nevyfoukne.', 'Vzduch uniká z balónku otvorem v plastovém pouzdře, který musí být přiměřeně velký, aby unikalo dostatečné množství vzduchu. Z otvoru se následně vzduch šíří všemi směry a vytváří tak mezi podložkou a CD diskem vzduchový polštář, po kterém se vznášedlo pohybuje. Tíha vznášedla je vyrovnávána tlakem unikajícího vzduchu z balónku. Ke správné funkčnosti je nutné udělat správně velký vypouštěcí otvor. Z velkého otvoru uniká vzduch příliš rychle a malý otvor nestačí na vyvinutí dostatečného tlaku.', ''),
(2, ' Vzduchový vír ', 'K pokusu budeme potřebovat: plastovou láhev naplňěnou vodou, svíčku, misku nebo jiný podklad pod svíčku a zápalky.', 'Plastovou láhev naplňěnou vodou, postavíme na stůl a sedneme si před ni. Za láhev umístíme hořící svíčku položenou na podložce nebo v misce. Foukáním se snažíme svíčku zhasnout. Můžeme měnit jak vzdálenost od láhve tak i sílu foukání.', 'V případě že by se někdo díval ze strany uviděl by plamen svíčky naklánějící se směrem k láhvi. Plamen nakonec samozřejmě zhasne. Příčinou tohoto jevu je vířivý pohyb vzduchu za lahví. Vzduch obtéká láhev velkou rychlostí a vytváří za ní vír, který vychyluje plamen svíčky opačným směrem, než bychom čekali. Ve víru má totiž proudící vzduch opačný směr, než kterým ho foukáme před lahví.', ''),
(3, ' Tvorba kompasu ', 'K pokusu budeme potřebovat: nádobu s vodou, dvě jehly, tvrdý papír, magnet a nůžky.', 'Jako první zmagnetujeme jehlu - zhruba dvacetkrát ji přejedeme stále stejným směrem od očka ke špičce jehly severním pólem magnetu (je označen červeně). Na hrotu jehly vznikne jižní a na očku severní pól. Do misky s vodou vložíme tvrdý papír (musí plavat na hladině), na který opatrně položíme zmagnetovanou jehlu. Po chvíli se papír s jehlou ustálí tak, že očko jehly ukáže severním směrem. Položíme-li na hladinu dvě zmagnetované jehly, přiblíží se k sobě opačnými magnetickými póly.', 'Umístíme-li těleso (v tomto případě ocelovou jehlu) do blízkosti magnetu, stane se také magnetem. Z ocelové jehly se tedy stane magnet. Opačné póly magnetu se vzájemně přitahují, proto se očko jehly otočí ve směru jižního magnetického pólu Země.', '');

-- --------------------------------------------------------

--
-- Struktura tabulky `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `polozka_menu` varchar(45) DEFAULT NULL,
  `displej_nazev` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `menu`
--

INSERT INTO `menu` (`id_menu`, `polozka_menu`, `displej_nazev`) VALUES
(1, 'home', 'Domů'),
(2, 'fyzika', 'Fyzikální pokusy'),
(3, 'chemie', 'Chemické pokusy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
