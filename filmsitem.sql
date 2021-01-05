-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 23 May 2018, 18:27:30
-- Sunucu sürümü: 5.7.21
-- PHP Sürümü: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `filmsitem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filmler`
--

DROP TABLE IF EXISTS `filmler`;
CREATE TABLE IF NOT EXISTS `filmler` (
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_id` int(11) NOT NULL,
  `filmbaslik` varchar(45) NOT NULL,
  `filmdetay` text,
  `tarih` varchar(100) NOT NULL,
  `kucukresimyol` varchar(255) DEFAULT NULL,
  `buyukresimyol` varchar(255) DEFAULT NULL,
  `kategoriler` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`film_id`),
  KEY `uye_id` (`uye_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `filmler`
--

INSERT INTO `filmler` (`film_id`, `uye_id`, `filmbaslik`, `filmdetay`, `tarih`, `kucukresimyol`, `buyukresimyol`, `kategoriler`) VALUES
(1, 4, 'The Amazing Dabbe', 'Örümcek Adam (Özgün adı: Spider-Man), David Koepp\'in yazdığı ve Sam Raimi\'nin yönettiği Marvel Comics\'in süper kahramanı Örümcek-Adam\'ı sinemaya taşıyan film serisinin ilkidir. Sony Pictures\'ın prodüksiyonluğunda gerçekleştirilen filmde başrolleri Tobey Maguire, Kirsten Dunst ve Willem Dafoe paylaşıyor.', '02.05.2018 14:56:43', 'uploads//20072283005353722612kresim.jpg', 'uploads//20072283065784722612kresim.jpg', '0'),
(2, 1, 'Inception', 'Dom Cobb (Leonardo DiCaprio) çok yetenekli bir hırsızdır. Uzmanlık alanı, zihnin en savunmasız olduğu rüya görme anında, bilinçaltının derinliklerindeki değerli sırları çekip çıkarmak ve onları çalmaktır. Cobb’un bu ender mahareti, onu kurumsal casusluğun tehlikeli yeni dünyasında aranan bir oyuncu yapmıştır. Ancak, aynı zamanda bu durum onu uluslararası bir kaçak yapmış ve sevdiği her şeye mal olmuştur.\r\n\r\nCobb’a içinde bulunduğu durumdan kurtulmasını sağlayacak bir fırsat sunulur. Ona hayatını geri verebilecek son bir iş; tabi eğer imkânsız “başlangıç”ı tamamlayabilirse. Mükemmel soygun yerine, Cobb ve takımındaki profesyoneller bu sefer tam tersini yapmak zorundadır; görevleri bir fikri çalmak değil onu yerleştirmektir. Eğer başarırlarsa, mükemmel suç bu olacaktır.\r\n\r\nAma ne dikkatle yapılan planlamalar, ne de uzmanlıkları onları, her hareketlerini önceden tahmin ettiği anlaşılan tehlikeli düşmanlarına karşı hazırlıklı kılabilir. Bu, gelişini sadece Cobb’un görebildiği bir düşmandır.\r\n\r\nOlay yeri ise zihniniz.', '04.05.2018 14:58:43', 'uploads//20072283004783722612kresim.jpg', 'uploads//20072288767034722612kresim.jpg', '1'),
(4, 2, 'Avengers', 'Dr.Selvig SHIELD binasında Nick Fury izninde Tesseract üzerinde deneyler yapmaktadır. Tesseract gezegenler arası bir kapı açar ve kapıdan Loki girer. SHIELD ajanlarına saldırır. Tesseractı asasına koyar. Asasıyla Dr.Selvig ve Hawkeye\'ı etkisi altına alır. Tesseract tüm SHIELD binasını yıkacak bir patlama yaratır. Fury, Ajan Coulson ve Maria Hill güçlükle kaçarlar. Black Widow, Bruce Banner ile görüşerek dünyadaki tehditten bahseder ve Tesseract\'i bulmakta kendilerine yardım etmesini ister. Fury, Kaptan Amerika ile görüşür, Ajan Coulson Demir Adam ile. Loki bu arada uzaylı bir ırkla tesseractı verme sözü karşılığında dünyaya saldırmaları için anlaşır. Loki Almanya da bir insan grubuna saldırır ve onların kralı olduğun söyler ve önünde eğilmelerini emreder. Kaptan Amerika ve Demir Adam gelir ve Loki\'yi yenerek tutsak alırlar. Uçakla üsse dönecekleri sırada Thor gelir ve Loki\'yi Asgard\'a tutsak götüreceğini söyler ve Loki\'yi alır. Demir Adam peşinden gider ve onu engellemek için kapışırlar. Kaptan Amerika gelir ve kavgayı sonlandırır. Thor\'a Tesseract\'tan bahseder ve böylece Thor da ekibe katılır. Loki\'nin tutsak olduğu hücreye giden Black Widow onunla konuşur ve kandırma ustası Loki\'yi kandırarak onun asıl amacını öğrenir. Loki kendini kasıtlı olarak yakalatmıştır. Hedefi Hulk\'tur. Hawkeye ve adamları SHIELD helikoptaşırına saldırıp oluşan gerginlikte Bruce\'u Hulk\'a dönüştürüp toplu bir yıkım yapmasını planlamıştır. Black Widow olanı ekibe anlatınca ekip arasında Fury\'nin planları üzerinden bir tartışma çıkar. Özellikle Kaptan Amerika ve Demir Adam çok zıt düşerler. Bu sırada gerilen Bruce Banner asayı farkında olmadan eline alır. Sinyal eşleşmesi olur ve Hawkeye helikoptaşır a saldırır. Loki’nin Planladığı gibi olur. Hulk önce Black Widow a saldırır. Sonra onu kurtarmaya gelen Thor ile kapışırlar. Fury onu helikoptaşırdan uzaklaştırmak için savaş uçağına ona saldırmasını söyler. Hulk uçağa atlar. Bu sırada helikoptaşırın motorları durmuştur. Demir adam motorları çalıştırmak için pervanleri iter. Kaptan Amerika da Loki nin adamlarını ondan uzak tutar. Black Widow eski dostu Hawkeye ile dövüşür ve onu alt eder. Thor, Loki\'nin hücresine gider ama Loki onu kandırır ve Thor\'u hücreye kapatır ve kendisini durdurmaya çalışan Ajan Coulson\'u öldürür. Sonrasında da Thor\'u hücresiyle gökyüzünden dünyaya salar. Loki gider. Nick Fury Ajan Coulson\'un biriktirdiği kan bulaşmış Kaptan Amerika kartlarını ekibin önüne atar ve takım olmaları gerektiğini söyler. Bu tüm ekibi etkiler ve artık olay kişisel hale gelir onlar için. Hawkeye, Loki\'nin etkisinden kurtulur. Tony Loki\'nin peşinden Stark Kulesi\'ne gider. Stark Kulesi\'nin tepesine yerleştirilen anahtar ile Dr.Selvig gezegenler arası kapıyı açar ve uzaylı ırk dünyaya saldırır. Thor, Stark Kule\'ye gelir ve Loki ile dövüşür. Loki Thor\'u bıçaklar ve kaçar. Tüm ekip yıkıntıların arasında bir araya gelir. Uzaylılarla zorlu bir mücadeleye girerler. Hulk Loki\'yi Stark Kule\'de yakalar ve onu epeyce döver. Ordu uzaylıları durdurmak için nükleer füze atar. Ama bu halkı da etkileyecektir. Tony füzeyi havada yakalar ve onu uzaylıların geldiği geçide doğru sürükler. Bu onun da öleceği anlamını taşır. Tony füzeyi geçitten geçirir ve bırakır. Füze patlar. Dünyadaki uzaylılar etkisiz olur. Tony bilincini kaybeder. Aşağıda Avengers ekibi olanı izlemektedir. Kaptan Amerika, Black Widow\'a geçidi kapatmasını söyler. Geçit kapatılır. Ancak Tony son anda geçitten düşmüştür. Gökyüzünden hızla inerken Hulk onu havada yakalar ve kurtarır. Avengers ekibi dünyayı kurtarmıştır. Ekip, Thor\'un Loki\'yi tutuklamasına ve Tesseract\'ı da teslim alıp Asgard\'a geri götürmesine karar verir.', '14.05.2018 16:56:54', 'uploads//20072283002034722612kresim.jpg', 'uploads//29312310762366822329bresim.jpg', '2'),
(5, 2, 'Örümcek Adam 2', 'Birinci filmden iki yıl geçmiştir. Peter Parker (Tobey Maguire) bir yandan güçlerinin \"laneti ve nimeti\" ile uğraşırken, bir yandan da yeni zorluklarla mücadele etmek ve süper kahraman Örümcek-Adam ile üniversite öğrencisi kimlikleri arasındaki dengeyi korumak zorundadır. Sakladığı sır yüzünden acı çeken Peter, en önem verdiği ilişkinin şimdi gün ışığına çıkma tehlikesi olduğunu fark eder ve sevdiği herkes onun yüzünden farkında olmadıkları bir tehlike içindedirler. Çünkü çok kollu Dr. Octavius\'la karşı karşıyadır.Peter\'ın hayatı boyunca M.J. için duyduğu arzu, gizli yaşamını terk etme ve aşkını ilan etme dürtüsüyle daha da güçlü bir hale gelir. En yakın dostu Harry Osborn\'la da arası açılmıştır çünkü arkadaşı babasını öldüren Örümcek-Adam\'a gittikce kin besleyen bir intikam duygusundadır. Kocasını kaybettiğinden beri çok zor zamanlar geçiren, çok sevdiği May Hala\'nın bile yeğeni hakkında kuşkulanmaya başlaması Peter\'ı içinden çıkırılmaz bir duruma getirir.', '12.10.2018 15:45:25', 'uploads//28630208742144521158alper.jpg', 'uploads//24216295462527021801bresim.jpg', '3'),
(6, 5, 'Hababam Sınıfı', 'Hababam Sınıfı, Rıfat Ilgaz\'ın Dolmuş dergisinde yazmaya başladığı öykülerden bir bölümünü birleştirerek 1957 yılında Hababam Sınıfı ismi ile kitaplaştırdığı eserinden çıkarak oluşan medya imtiyazlarıdır. Daha sonra, 1970\'li yıllarda Ertem Eğilmez tarafından bu roman sinemaya uyarlanmıştır. 2000\'li yılların başında ise üç filmden oluşan yeni bir seri olarak uyarlanmıştır. Filmin ilk serisinde Münir Özkul, Adile Naşit, Kemal Sunal, Tarık Akan, Halit Akçatepe, Feridun Şavlı, Cem Gürdap, Ahmet Arıman, Cengiz Nezir ve Bülent İğdiroğlu gibi isimler yer alıyordu. İlk film, Hababam Sınıfı 1 Nisan 1975 tarihinde vizyona girdiğinde izlenme rekorları kırdı ve tam yirmi sekiz hafta vizyonda kaldı. Daha sonra film çok tuttu ve ikinci film Hababam Sınıfı Sınıfta Kaldı vizyona girdi otuz hafta vizyonda kalan film ve serinin en çok hasılat yapan filmi oldu. 1970\'li yıllarda sinemanın televizyona karşı verdiği mücadelenin öncüsü oldu.\r\n\r\nArzu Film tarafından 16 Ocak 2004 tarihinde ikinci yeni serinin ilk filmi Hababam Sınıfı Merhaba vizyona girdi. Ardından, Hababam Sınıfı Askerde (2005) ve Hababam Sınıfı Üç Buçuk (2006) filmleri yayınlanmıştır. Fakat ilk seri kadar ilgi görmemiştir ve pek çok eleştirmen tarafından kötülenmiştir', '02.05.2018 21:20:00', 'uploads//26611230002752125109hababam.jpg', 'uploads//26738256412515225676.jpg', '4'),
(7, 6, 'Yenilmezler Ultron Çağı', 'Yenilmezler: Ultron &Ccedil;ağı ( Avengers: Age of Ultron) birinci filmin başarısından sonra, Mayıs 2012&#39;de duyurulmuştur. Whedon, Nisan 2013&#39;te senaryo taslağını tamamlamış ve &ccedil;ekimler Robert Downey Jr.&#39;ın anlaşmayı imzalamasıyla başlamıştır. İkinci &Uuml;nite &ccedil;ekimleri Ocak 2014&#39;te G&uuml;ney Afrika&#39;da başlamıştır.\r\n\r\nFilm, &ouml;ncelikli olarak Surrey&#39;de bulunan Shepperton St&uuml;dyoları&#39;nda, ek sahneler ise İtalya, G&uuml;ney Kore ve İngiltere&#39;nin &ccedil;eşitli b&ouml;lgelerinde &ccedil;ekilmeye başlanmıştır.\r\n\r\nYenilmezler: Ultron &Ccedil;ağı&#39;nın T&uuml;rkiye i&ccedil;in 1 Mayıs 2015&#39;te 2D, 3D ve IMAX 3D olarak sinemalara &ccedil;ıkmıştır.250 milyon dolara malolan film, a&ccedil;ılış haftası 191 milyon dolar hasılat yapmıştır.\r\n\r\nTony Stark etkin olmayan Ultron adlı barış koruyucu bir programı &ccedil;alıştırınca, işler ters gider ve D&uuml;nyanın En G&uuml;&ccedil;l&uuml; Kahramanları olan Demir Adam, Kaptan Amerika, Thor, Hulk, Kara Dul ve Şahing&ouml;z, gezegenin kaderi tehlikedeyken zorlu bir sınavdan ge&ccedil;erler. Yenilmezler, birden ortaya &ccedil;ıkan Hain Ultron&#39;un korkun&ccedil; planını hayata ge&ccedil;irmesini engellemek zorundadır, b&ouml;ylece huzursuz ittifaklar ve beklenmedik aksiyonlar evrensel bir maceraya zemin hazırlar.\r\n', '03.05.2018 00:37:00', 'uploads//31217250532052223772kresim.jpg', 'uploads//29769268922965721052bresim.jpg', '5'),
(8, 1, 'Örümcek adam 3', 'Peter amcasının katilini bulur. Katil bir deney sonucu yanlışlıkla kum adama d&ouml;n&uuml;ş&uuml;r. Onunla kanalisazyonda d&ouml;v&uuml;ş&uuml;r, Peter onu yener. Peter Parker artık karanlık yanıyla y&uuml;zleşir. Artık karar vermek zorundadır. Ya aydınlık ya da karanlık. Karanlığı se&ccedil;er ve bu yanlış bir se&ccedil;imdir. &Ccedil;&uuml;nk&uuml; karanlık taraf onu k&ouml;t&uuml; yapar. G&ouml;z&uuml; eğlenceden başka bir şey g&ouml;rmez.Gazetecilik işine Eddie diye birisi ge&ccedil;er, Peter işsizdir ve bu duruma &ccedil;ok sinirlenir. Sergide Eddie&#39;yi rezil eder. Arkadaşı Harry babasını &ouml;r&uuml;mcek adam &ouml;ld&uuml;rd&uuml;ğ&uuml; i&ccedil;in intikamını almaya artık hazırdır. &Ouml;r&uuml;mcek-Adam ile d&ouml;v&uuml;ş&uuml;r. Artık Harry yarım kalan işi bitirmeye &ccedil;alışır bomba atar. &Ouml;r&uuml;mcek-adam bombayı geri fırlatır. Bomba patlar. &Ouml;r&uuml;mcek-adam karanlığı se&ccedil;tiğini fark eder kilisenin &ccedil;an kulesinde paraziti v&uuml;cudundan atmaya &ccedil;alışır. O sırada Eddie kilisede Peter Parker&#39;in &ouml;lmesini diler. Eddie yukardan sesler geldiği i&ccedil;in &ccedil;ıkar, tam o sırada &ccedil;an sesi ile &ouml;r&uuml;mcek adam karanlığı aşağı atar ve Eddie artık k&ouml;t&uuml;d&uuml;r. Kumadam ve Eddie intikam i&ccedil;in bir inşaat yerinde Mary Jane&#39;ni ka&ccedil;ırır ve tepeye bağlar. &Ouml;r&uuml;mcek adam onu kurtarır; ama bu bir tuzaktır. &Ouml;r&uuml;mcek adam ile ikisi d&ouml;v&uuml;ş&uuml;r. &Ouml;r&uuml;mcek adam ağır darbeyi tam alacakken Harry gelir ve onu kurtarır. En sonunda &ouml;r&uuml;mcek adam sağ kalır. Harry&#39;de &ouml;l&uuml;r.\r\n', '21.05.2018 15:24:27', 'uploads//20177310912046930320oa3k.png', 'uploads//28279239643043528291oa3b.jpg', '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `uyemail` varchar(45) NOT NULL,
  `uyesifre` varchar(45) NOT NULL,
  `uyeadsoyad` varchar(45) NOT NULL,
  `uyetelefon` varchar(10) NOT NULL,
  `uyeil` varchar(45) NOT NULL,
  PRIMARY KEY (`uye_id`),
  UNIQUE KEY `uyemail_UNIQUE` (`uyemail`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uyemail`, `uyesifre`, `uyeadsoyad`, `uyetelefon`, `uyeil`) VALUES
(1, 'aliekber@aliekber.com', '6A54CEC65E4C790AAD4BD0E64E85319A', 'Aliekber Bingöl', '5486523245', 'Kocaeli'),
(2, 'derya@derya.com', 'E10ADC3949BA59ABBE56E057F20F883E', 'Derya Çakıcı', '5489651236', 'Bursa'),
(3, 'bingol@bingol.com', '95574432C9DEC32B2C46ACFF9DAB78D9', 'ali bingöl', '5812145214', 'Çankırı'),
(4, 'darkorbiticktok@gmail.com', '4DE35585E43001E7436DE75DAE44B67F', 'ALPER SAHINTURK', '5396738319', 'adana'),
(5, 'ahmet@ahmet.com', '159159', 'ahmet fevzi satıcı', '5412541245', 'Gaziantep'),
(6, 'berkay@berkay.com', '123456', 'berkay yemişci', '5485412415', 'Çorum'),
(7, 'sag_sol@gmail.com', '159951', 'sağ<br>\' sağ<br>\'', '5486521452', 'Denizli'),
(8, 'bilal@bilal.com', '62026aaed5419a1ceaa229bf6886443e', '<br><b>Bilal<b></br> Karademirşü', '5426254125', 'Edirne');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE IF NOT EXISTS `yorumlar` (
  `yorum_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `yorum` text,
  `tarih` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`yorum_id`),
  KEY `fk_yorumlar_uyeler1_idx` (`uye_id`),
  KEY `fk_yorumlar_filmler1_idx` (`film_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `uye_id`, `film_id`, `yorum`, `tarih`) VALUES
(1, 1, 1, 'güzel film tavsiye ederim', '2018-04-11'),
(2, 2, 1, 'Bayıldım filme', '2018-04-10'),
(3, 6, 1, 'asgasg', '10.05.2018 13:25:59'),
(4, 6, 1, 'muthis film', '10.05.2018 13:26:21'),
(5, 5, 7, 'Yenilmezler güzel filmdir.', '10.05.2018 13:27:02'),
(6, 1, 7, 'Ahmet hocamıza katılıyorum yenilmezler güzel filmdir.', '21.05.2018 12:43:23'),
(7, 1, 5, 'Örümcek Adam 2', '21.05.2018 13:00:20'),
(8, 7, 8, 'Örümcek adam 3', '23.05.2018 11:54:31');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `filmler`
--
ALTER TABLE `filmler`
  ADD CONSTRAINT `filmler_ibfk_1` FOREIGN KEY (`uye_id`) REFERENCES `uyeler` (`uye_id`);

--
-- Tablo kısıtlamaları `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD CONSTRAINT `fk_yorumlar_filmler1` FOREIGN KEY (`film_id`) REFERENCES `filmler` (`film_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_yorumlar_uyeler1` FOREIGN KEY (`uye_id`) REFERENCES `uyeler` (`uye_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
