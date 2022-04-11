-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 09 Nis 2022, 14:17:49
-- Sunucu sürümü: 10.3.34-MariaDB
-- PHP Sürümü: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pilanlidiyet_bpdb21`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dosyalar`
--

CREATE TABLE `dosyalar` (
  `id` int(11) NOT NULL,
  `dosya` varchar(255) DEFAULT '',
  `baglanti` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(11) NOT NULL,
  `konu` varchar(255) DEFAULT NULL,
  `adi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `mesaj` longtext DEFAULT NULL,
  `tarih` varchar(255) DEFAULT '',
  `durum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `konu`, `adi`, `email`, `telefon`, `mesaj`, `tarih`, `durum`) VALUES
(2, 'Mesajın Konusu', 'Mustafa SARIAY', 'asd@asd.asd', 'asd@asd.asd', 'Mesajın metni', '13/06/2021', 1),
(5, 'pilanlidiyet.com', 'Penney', 'penney.manns@gmail.com', '0660 718 41 22', 'Hi there\r\n\r\nOur Medical-Grade Toenail Clippers is the safest and especially recommended for those with troubles with winding nails, hard nails, two nails, nail cracks, deep nails, thickened nails etc..\r\n\r\nGet yours: thepodiatrist.online\r\n\r\nThanks and Best Regards,\r\n\r\nPenney\r\nPilanlı Diyet| Büşra Pilan', '27/07/2021', 0),
(6, 'pilanlidiyet.com', 'Cecil', 'doe.cecil70@gmail.com', '(02) 4781 4429', 'Hi \r\n \r\nBuy all styles of Ray-Ban Sunglasses only 24.99 dollars with FREE SHIPPING & Returns.  If interested, please visit our site: lensoutlet.online\r\n \r\nBest, \r\n\r\nCecil \r\nPilanlı Diyet| Büşra Pilan', '30/07/2021', 0),
(7, 'pilanlidiyet.com', 'Eddie', 'eddie.grishin@gmail.com', '660-668-6214', 'Hey there \r\n \r\nMeet your best Buds - True Wireless Earbuds with amazing sound, convenience, portability, & affordability!\r\n\r\nOrder yours now at 50% OFF with FREE Shipping: musicontrol.online\r\n \r\nAll the best, \r\n \r\nEddie\r\nPilanlı Diyet| Büşra Pilan', '31/07/2021', 0),
(8, 'Pilanlı Diyet| Büşra Pilan', 'Allie', 'deatherage.allie@gmail.com', '954-297-1345', 'Good day \r\n \r\nCAREDOGBEST™ - Personalized Dog Harness. All sizes from XS to XXL.  Easy ON/OFF in just 2 seconds.  LIFETIME WARRANTY.\r\n\r\nClick here: caredogbest.com\r\n \r\nThanks and Best Regards, \r\n \r\nAllie\r\nPilanlı Diyet| Büşra Pilan', '02/08/2021', 0),
(9, 'Pilanlı Diyet| Büşra Pilan', 'Florene', 'wildman.florene@yahoo.com', '0495 54 94 88', 'Good day \r\n \r\nBody Revolution - Medico Postura™ Body Posture Corrector\r\nImprove Your Posture INSTANTLY!\r\n\r\nGet it while it\'s still 60% OFF!  FREE Worldwide Shipping!\r\n\r\nGet yours here: medicopostura.com\r\n \r\nSincerely, \r\n \r\nFlorene\r\nPilanlı Diyet| Büşra Pilan', '07/08/2021', 0),
(10, 'Pilanlı Diyet| Büşra Pilan', 'Stacia', 'stacia.myres@hotmail.com', '04180 25 14 14', 'Get The Worlds Greatest Magic Sand Free Beach Mat!\r\n\r\nWatch sand, dirt & dust disappear right before your eyes! It\'s perfect for beach, picnic, camping or hiking.\r\n\r\nAct Now And Receive A Special Discount For Our Magic Mat!\r\n\r\nGet Yours Here:  magicmat.shop\r\n\r\nKind Regards, \r\n \r\nStacia\r\nPilanlı Diyet| Büşra Pilan', '10/08/2021', 0),
(11, 'Pilanlı Diyet| Büşra Pilan', 'Shawn', 'stowers.shawn@gmail.com', '044 829 45 37', 'Morning\r\n\r\nBuy medical disposable face mask to protect your loved ones from the deadly CoronaVirus.  The price is $0.28 each.  If interested, please visit our site: pharmacyoutlets.online\r\n\r\nAll the best,\r\n\r\nShawn\r\nPilanlı Diyet| Büşra Pilan', '15/08/2021', 0),
(12, 'Thalia Askew', 'Thalia', 'askew.thalia55@gmail.com', '0940-2558594', 'New Multifunction Anti-theft Waterproof Sling Bag\r\n\r\nThe best ever SUPER Sling Bag: Drop-proof/Anti-theft/Scratch-resistant/USB Charging\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time\r\n\r\nBuy now: fashiondaily.online\r\n\r\nSincerely, \r\n\r\nThalia\r\nPilanlı Diyet| Büşra Pilan', '18/08/2021', 0),
(13, 'Elvia Shang', 'Elvia', 'shang.elvia@gmail.com', '0387 1503576', 'Hey\r\n\r\nBuy medical disposable face mask to protect your loved ones from the deadly CoronaVirus.  The price is $0.28 each.  If interested, please visit our site: pharmacyoutlets.online\r\n\r\nAll the best,\r\n\r\nElvia', '22/08/2021', 0),
(14, 'Teddy McIlveen', 'Teddy', 'teddy.mcilveen@outlook.com', '0311 7675524', 'Hello \r\n\r\n50% OFF!! Hurry to get your Baseball Cap Now!\r\n\r\nThese Caps are SO cool! Perfect for this Summer!\r\n\r\nFree worldwide shipping!\r\n\r\nGET IT HERE: capshop.online\r\n\r\nKind Regards, \r\n \r\nTeddy', '03/09/2021', 0),
(15, 'Ofelia Wherry', 'Ofelia', 'wherry.ofelia@googlemail.com', '0951 83 43 60', 'Color-changing swimshorts \r\n\r\nDive into the ocean and your swimshorts suddenly change color! These swimshorts ara AMAZING!\r\n\r\nHurry! 50% Off Worldwide For Limited Time Only!\r\n\r\nGet it here: coolshorts.online\r\n\r\nThank You, \r\n\r\nOfelia', '05/09/2021', 0),
(16, 'Ashli Barham', 'Ashli', 'barham.ashli@gmail.com', '077 7494 8175', 'Hi\r\n\r\nYou need a pair of Quick Dry Beach Shoes, going out shoes, going OUT OUT shoes, trainers, a spare pair of trainers in case it rains...\r\n\r\nAct Now And Receive A Special Discount For Our Quick Dry Beach Shoes!\r\n\r\nGet Yours Here:  tonature.online\r\n\r\nCheers, \r\n \r\nAshli', '08/09/2021', 0),
(17, 'Matilda Hargis', 'Matilda', 'hargis.matilda@gmail.com', '940-230-5564', 'Morning\r\n\r\nBuy medical disposable face mask to protect your loved ones from the deadly CoronaVirus.  The price is $0.28 each.  If interested, please check our site: pharmacyoutlets.online\r\n\r\nRegards,\r\n\r\nMatilda', '11/09/2021', 0),
(18, 'Pilanlı Diyet| Büşra Pilan', 'Ada', 'ada.freel@yahoo.com', '052 405 67 77', 'Hi there \r\n \r\nCAREDOGBEST™ - Personalized Dog Harness. All sizes from XS to XXL.  Easy ON/OFF in just 2 seconds.  LIFETIME WARRANTY.\r\n\r\nClick here: caredogbest.com\r\n \r\nAll the best, \r\n \r\nAda\r\nPilanlı Diyet| Büşra Pilan', '14/09/2021', 0),
(19, 'Haley Ellis', 'Haley', 'ellis.haley@gmail.com', '(11) 2895-5715', 'Hey\r\n\r\nFull Body Resistance Band Kit - The best and cheapest athletic gear available on the market today. \r\nDo a full body workout from the comfort of your home. You don\'t even need a gym anymore! \r\n\r\nSave 50% OFF + FREE Worldwide Shipping\r\nShop Now: ametathletics.online\r\n\r\nMany Thanks, \r\n \r\nHaley', '17/09/2021', 0),
(20, 'pilanlidiyet.com', 'Corrine', 'corrine.collicott@outlook.com', '', 'Hey there \r\n \r\nLEARN HOW PawSafer™ CAN SAFELY TRIM YOUR DOG\'S NAILS IN NO TIME FROM HOME.\r\n\r\nGet it while it\'s still 50% OFF + FREE Shipping\r\n\r\nBuy here: pawsafer.shop\r\n \r\nThe Best, \r\n \r\nCorrine', '20/09/2021', 0),
(21, 'Derick Shaver', 'Derick', 'shaver.derick@yahoo.com', '', 'Hello \r\n\r\nThe New Powerful LED Flashlight is The Perfect Flashlight For Any Situation!\r\n\r\nThe 3,000 Lumens & Adjustable Zoom gives you the wide field of view and brightness other flashlights don’t have.\r\n\r\n50% OFF + Free Shipping!  Get it Now: linterna.shop\r\n\r\nThanks and Best Regards, \r\n\r\nDerick', '23/09/2021', 0),
(22, 'Jerilyn Vessels', 'Jerilyn', 'jerilyn.vessels@msn.com', '06-83656271', 'Hey \r\n\r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time.\r\n\r\nBuy now: thawking.online\r\n\r\nBest, \r\n\r\nJerilyn', '26/09/2021', 0),
(23, 'Michale Byrum', 'Michale', 'michale.byrum@gmail.com', '0377 7790053', 'EASE YOUR PAIN IN 10 MINUTES EFFORTLESSLY\r\n\r\nBe Free from Neck Pain! Try NeckFlexer & Relieve Neck Pain Effortlessly In 10 Min!\r\n\r\nSave 50% OFF + FREE Worldwide Shipping\r\n\r\nShop Now: neckflexer.online\r\n\r\nMany Thanks, \r\n\r\nMichale', '05/10/2021', 0),
(24, 'Regan Penington', 'Regan', 'regan@pilanlidiyet.com', '71-69-59-25', 'Good day\r\n\r\nBe Buzz Free! The Original Mosquito Trap.\r\n\r\n60% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping\r\n✔️LED Bionic Wave Technology\r\n✔️Eco-Friendly\r\n✔️15 Day Money-Back Guarantee\r\n\r\nShop Now: mosquitotrap.online\r\n\r\nCheers,\r\n\r\nRegan\r\nPilanlı Diyet| Büşra Pilan', '09/10/2021', 0),
(25, 'Ute Vanatta', 'Ute', 'ute.vanatta@hotmail.com', '06-50900007', 'World\'s Best Neck Massager Get it Now 50% OFF + Free Shipping!\r\n\r\nWellness Enthusiasts! There has never been a better time to take care of your neck pain! \r\n\r\nOur clinical-grade TENS technology will ensure you have neck relief in as little as 20 minutes.\r\n\r\nGet Yours: hineck.online\r\n\r\nSincerely,\r\n\r\nUte\r\nPilanlı Diyet| Büşra Pilan', '12/10/2021', 0),
(26, 'Best Ad Network For Publishers And Bloggers In 2021', 'Chamberlin', 'jenny@foremedia.net', '', 'Hey, I visited your site and I think that your content is amazing! It is really engaging and original, you must have worked so hard to generate such a quality content. We are ForeMedia and we help website owners with great websites to maximize the revenue they make from their website. I would love to buy Ad Spaces on your website and pay you per each impression of the ads on your site. We are Google Ad Exchange Premium partners and we work with more than 100 Ad Network & thousands of premium direct advertisers who would LOVE to buy Ads directly from your site and we can guarantee to increase your revenue by at least 45% compared to other advertising solutions you are currently using. You deserve to earn more for your content and maximize your earning potential and I will help you unlock that potential! There is no cost, you can register to our monetization platform for free on this link: https://foremedia.net/start I will be available for you on the Live Chat if you need any help, or you can email me back to: jenny@foremedia.net if you have any questions. I have at least 17 Premium Advertisers that have asked me to approach you because they would like to advertise on your website on Premium eCPM [cost per impressions] basis. Have a good day & feel free to ping me for any question! Click the link here for 1 minute registration to our platform [it\'s free!]: https://go.foremedia.net/u/start/', '09/11/2021', 0),
(27, '14 Best WordPress SEO Plugins and Tools That You Should Use', 'Castleberry', 'castleberry.donnie@gmail.com', '0380 0022234', '14 Best WordPress SEO Plugins and Tools That You Should Use\r\nThings You Must Know About WordPress SEO Plugins & Tools\r\nWhen reading SEO tips or searching for “best free WordPress SEO plugins”, you will come across articles that feature several dozen tools.\r\n\r\nClick Here to get the showcase\r\n\r\nhttps://growbigger.net/14-best-wordpress-seo-plugins-and-tools-that-you-should-use/', '28/11/2021', 0),
(28, 'Best Ad Network For Publishers And Bloggers In 2021', 'Traylor', 'jenny@foremedia.net', '', 'Hey, I visited your site and I think that your content is amazing! It is really engaging and original, you must have worked so hard to generate such a quality content. We are ForeMedia and we help website owners with great websites to maximize the revenue they make from their website. I would love to buy Ad Spaces on your website and pay you per each impression of the ads on your site. We are Google Ad Exchange Premium partners and we work with more than 100 Ad Network & thousands of premium direct advertisers who would LOVE to buy Ads directly from your site and we can guarantee to increase your revenue by at least 45% compared to other advertising solutions you are currently using. You deserve to earn more for your content and maximize your earning potential and I will help you unlock that potential! There is no cost, you can register to our monetization platform for free on this link: https://foremedia.net/start I will be available for you on the Live Chat if you need any help, or you can email me back to: jenny@foremedia.net if you have any questions. I have at least 17 Premium Advertisers that have asked me to approach you because they would like to advertise on your website on Premium eCPM [cost per impressions] basis. Have a good day & feel free to ping me for any question! Click the link here for 1 minute registration to our platform [it\'s free!]: https://go.foremedia.net/u/start/', '30/11/2021', 0),
(29, 'How to Add Facebook Open Graph Meta Data in WordPress', 'Benavides', 'benavides.reynaldo@gmail.com', '070 2060 8507', 'Do you want to add Facebook Open Graph meta data to your WordPress themes?\r\nOpen Graph metadata helps Facebook and other social media websites get meta data about your posts pages. It also allows you to control how your content appears when shared on Facebook.\r\n\r\nClick Here to get the Tutorial\r\n\r\nhttps://growbigger.net/how-to-add-facebook-open-graph-meta-data-in-wordpress-themes/', '02/12/2021', 0),
(30, 'Best Ad Network For Publishers And Bloggers In 2021', 'Hutton', 'jenny@foremedia.net', '', 'Hey, I visited your site and I think that your content is amazing! It is really engaging and original, you must have worked so hard to generate such a quality content. We are ForeMedia and we help website owners with great websites to maximize the revenue they make from their website. I would love to buy Ad Spaces on your website and pay you per each impression of the ads on your site. We are Google Ad Exchange Premium partners and we work with more than 100 Ad Network & thousands of premium direct advertisers who would LOVE to buy Ads directly from your site and we can guarantee to increase your revenue by at least 45% compared to other advertising solutions you are currently using. You deserve to earn more for your content and maximize your earning potential and I will help you unlock that potential! There is no cost, you can register to our monetization platform for free on this link: https://foremedia.net/start I will be available for you on the Live Chat if you need any help, or you can email me back to: jenny@foremedia.net if you have any questions. I have at least 17 Premium Advertisers that have asked me to approach you because they would like to advertise on your website on Premium eCPM [cost per impressions] basis. Have a good day & feel free to ping me for any question! Click the link here for 1 minute registration to our platform [it\'s free!]: https://go.foremedia.net/u/start/', '11/01/2022', 0),
(31, 'Best Ad Network For Publishers And Bloggers In 2021', 'Arthur', 'jenny@foremedia.net', '', 'Hey, I visited your site and I think that your content is amazing! It is really engaging and original, you must have worked so hard to generate such a quality content. We are ForeMedia and we help website owners with great websites to maximize the revenue they make from their website. I would love to buy Ad Spaces on your website and pay you per each impression of the ads on your site. We are Google Ad Exchange Premium partners and we work with more than 100 Ad Network & thousands of premium direct advertisers who would LOVE to buy Ads directly from your site and we can guarantee to increase your revenue by at least 45% compared to other advertising solutions you are currently using. You deserve to earn more for your content and maximize your earning potential and I will help you unlock that potential! There is no cost, you can register to our monetization platform for free on this link: https://foremedia.net/start I will be available for you on the Live Chat if you need any help, or you can email me back to: jenny@foremedia.net if you have any questions. I have at least 17 Premium Advertisers that have asked me to approach you because they would like to advertise on your website on Premium eCPM [cost per impressions] basis. Have a good day & feel free to ping me for any question! Click the link here for 1 minute registration to our platform [it\'s free!]: https://go.foremedia.net/u/start/', '12/01/2022', 0),
(32, 'The Best Ad Network for Affiliates & Advertisers in 2022', 'Clifton', 'jenny@foremedia.net', '', 'Do you advertise on Google / Facebook / Native? You are leaving money on the table!\r\n\r\nHey, my name is Jenny from ForeMedia.net, I saw your site and noticed that while It looks great, you could use a little bit more traffic you drive more visitors & conversions...\r\n\r\nLuckily for you, I can help you with that!\r\n\r\nI can get you tens of thousands of visitors from pretty much every country on the globe, for 10-15% of the cost you would normally pay on Google or Facebook and the traffic is of a much higher quality because your ads will be placed on high quality sites we work with directly...\r\n\r\nSounds good? You can reply to this email:  jenny.sa@foremedia.net\r\nOr visit our self-serve platform here: https://go.foremedia.net/u/v/\r\n\r\nWe also have Live chat with English speaking agents willing to help you start and optimize your ads for maximum traffic, give it a try here:\r\n\r\nhttps://go.foremedia.net/u/v/', '09/02/2022', 0),
(33, 'The Best Ad Network for Affiliates & Advertisers in 2022', 'Chipman', 'jenny@foremedia.net', '', 'Do you advertise on Google / Facebook / Native? You are leaving money on the table!\r\n\r\nHey, my name is Jenny from ForeMedia.net, I saw your site and noticed that while It looks great, you could use a little bit more traffic you drive more visitors & conversions...\r\n\r\nLuckily for you, I can help you with that!\r\n\r\nI can get you tens of thousands of visitors from pretty much every country on the globe, for 10-15% of the cost you would normally pay on Google or Facebook and the traffic is of a much higher quality because your ads will be placed on high quality sites we work with directly...\r\n\r\nSounds good? You can reply to this email:  jenny.sa@foremedia.net\r\nOr visit our self-serve platform here: https://go.foremedia.net/u/v/\r\n\r\nWe also have Live chat with English speaking agents willing to help you start and optimize your ads for maximum traffic, give it a try here:\r\n\r\nhttps://go.foremedia.net/u/v/', '23/02/2022', 0),
(34, 'Best Ad Network For Publishers And Bloggers In 2021', 'Koop', 'jenny@foremedia.net', '', 'Hey, I visited your site and I think that your content is amazing! It is really engaging and original, you must have worked so hard to generate such a quality content. We are ForeMedia and we help website owners with great websites to maximize the revenue they make from their website. I would love to buy Ad Spaces on your website and pay you per each impression of the ads on your site. We are Google Ad Exchange Premium partners and we work with more than 100 Ad Network & thousands of premium direct advertisers who would LOVE to buy Ads directly from your site and we can guarantee to increase your revenue by at least 45% compared to other advertising solutions you are currently using. You deserve to earn more for your content and maximize your earning potential and I will help you unlock that potential! There is no cost, you can register to our monetization platform for free on this link: https://foremedia.net/start I will be available for you on the Live Chat if you need any help, or you can email me back to: jenny@foremedia.net if you have any questions. I have at least 17 Premium Advertisers that have asked me to approach you because they would like to advertise on your website on Premium eCPM [cost per impressions] basis. Have a good day & feel free to ping me for any question! Click the link here for 1 minute registration to our platform [it\'s free!]: https://go.foremedia.net/u/start/', '24/02/2022', 0),
(35, 'DataList.biz Shutting Down', 'Rivero', 'adelaide@datalist.biz', '08165 49 66 88', 'Hello,\r\n\r\nIt is with sad regret to inform you that DataList.biz is shutting down. We have made all our databases available for you at a one-time fee.\r\n\r\nYou can visit us on DataList.biz\r\n\r\nRegards.\r\nAdelaide', '11/03/2022', 0),
(36, 'Products', 'Stroup', 'stroup.jesus19@gmail.com', '+1 304-873-4360', 'Hi, I am interested in some of your products.\r\n\r\nPlease give me a call on +1 304-873-4360', '20/03/2022', 0),
(37, '31 March 2022', 'Partin', 'george', '+1 304-873-4360', 'It is with sad regret to inform you DataList.biz is shutting down on 31 March 2022. \r\n\r\nWe have made available databases per country for all companies available.. \r\n\r\nYou can view our samples and download databases instantly on our website DataList.biz', '28/03/2022', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `id` int(11) NOT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `tip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`id`, `resim`, `baslik`, `link`, `tip`) VALUES
(2, '1.jpg', NULL, NULL, 1),
(7, '2.jpg', NULL, NULL, 1),
(8, '3.jpg', NULL, NULL, 1),
(9, 'a1.jpg', NULL, NULL, 2),
(10, 'a2.jpg', NULL, NULL, 2),
(11, 'a3.jpg', NULL, NULL, 2),
(12, 'a4.jpg', NULL, NULL, 2),
(13, 'a5.jpg', NULL, NULL, 2),
(14, 'a6.jpg', NULL, NULL, 2),
(15, 'a7.jpg', NULL, NULL, 2),
(16, 'a8.jpg', NULL, NULL, 2),
(17, 'a9.jpg', NULL, NULL, 2),
(18, 'a10.jpg', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyonlar`
--

CREATE TABLE `rezervasyonlar` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `cinsiyet` varchar(255) DEFAULT NULL,
  `boy` varchar(255) DEFAULT NULL,
  `kilo` varchar(255) DEFAULT NULL,
  `yas` varchar(255) DEFAULT NULL,
  `bilgiler` longtext DEFAULT NULL,
  `tarih` varchar(255) DEFAULT '',
  `durum` int(11) DEFAULT NULL,
  `randevu_tarih` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `rezervasyonlar`
--

INSERT INTO `rezervasyonlar` (`id`, `adi`, `email`, `telefon`, `cinsiyet`, `boy`, `kilo`, `yas`, `bilgiler`, `tarih`, `durum`, `randevu_tarih`) VALUES
(1, 'Mustafa SARIAY', 'asd@asd.asd', '05555555555', 'Erkek', '187', '108', '40', 'Eyvaahh Eyvahhh. Yarın 40 oluyorum :(', '13-06-2021', 1, '2021-06-14'),
(2, 'Mustafa SARIAY', 'asd@asd.asd', '05555555555', 'Erkek', '187', '108', '40', 'Eyvaahh Eyvahhh. Yarın 40 oluyorum :(', '13-06-2021', 1, '2021-06-14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `yazi` longtext DEFAULT NULL,
  `tarih` varchar(255) DEFAULT '',
  `tip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `baslik`, `resim`, `yazi`, `tarih`, `tip`) VALUES
(1, 'Ana Sayfa Yazısı', '', '<section class=\"py-5\" id=\"features\" style=\"background:#061a25;\">\r\n                <div class=\"container px-5 my-5\">\r\n                    <div class=\"row gx-5\">\r\n                        <table class=\"yazi-1\">\r\n                        <tbody><tr>\r\n                            <td><img src=\"//pilanlidiyet.com/images/pilanli-diyet-busra-pilan.png\"></td>\r\n                            <td>\r\n                                <div class=\"icerik\">\r\n                                    <h1>Sağlıklı Yaşam</h1>\r\n                                  Sağlıklı bir yaşam elde etmek için sağlıklı beslenmek ve spor yapmak gerekir.Dengeli beslenme ve düzenli spor yapmak insan sağlığının korunmasında etkili olur.Sağlıklı ve uzun bir ömür için uzmanların tavsiyesi de dengeli ve doğal beslenmektir. <br>\r\n                                  <br>\r\n                                  Temel gıda maddelerinin yetiştirilmesi ve tüketilmesi, doğal olarak elde edilmesi sağlıklı bir yaşamı mümkün kılmaktadır. Temel besin kaynaklarının tüketiminde doğal besinleri tercih edilmesi gerekir. Temel besin kaynaklarının miktarı ve gün içindeki öğün ve yemek düzeni de sağlıklı bir yaşamın oluşmasında etkilidir. <br>\r\n                                  <br>\r\n                                  Sağlıklı bir yaşam için spor yapmak gerekir.<br>\r\n                                  <br>\r\n                                  Düzenli spor etkinlikleri yapmak vücudu zinde tutar. Dinç olan vücudun da sistemleri en iyi şekildegörevlerine devam eder. Böylece dengeli beslenme ve düzenli spor faaliyeti ile sağlıklı bir hayatsürmek mümkün olur. <br>\r\n                                  <br>\r\n                                  Doğal alanlarda yaşamak, doğal çevreye uyum sağlamak, doğayı sevmek ve doğayı korumak dainsan hayatında sağlıklı bir hayatı mümkün kılan bir diğer etkendir.Bu nedenle doğanın da korunması gerekir.\r\n                                </div>\r\n                            </td>\r\n                        </tr>\r\n                    </tbody></table>\r\n                    </div>\r\n                </div>\r\n            </section>\r\n            <!-- Testimonial section-->\r\n            <div class=\"py-2 bg-body\">\r\n                <div class=\"container px-5 my-5\">\r\n                    <div class=\"row gx-5 justify-content-center\">\r\n                        <table class=\"sistem-yazisi\">\r\n		<tbody><tr>\r\n			<td><img src=\"//pilanlidiyet.com/images/arkaplan-1.jpg\"></td>\r\n            <td>\r\n            	<table>\r\n            		<tbody><tr>\r\n            			<td>\r\n            				<h1>SİSTEM NASIL İŞLİYOR?</h1>\r\n                            <ul>\r\n                            	<li>\r\n                                	<h2>Detaylıca Sizleri Tanımak</h2>\r\n                                    <p>Mevcut Durumunuzu, alışkanlıklarınızı, sevdiğiniz ve sevmediğiniz şeyleri öğrenmek, sizin için en uygun diyet programının temelini oluşturmaktadır.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                	<h2>Beslenme ve Fiziksel Aktivite Planlamak</h2>\r\n                                    <p>Sizleri tanıdıktan sonra, beraberce keyifli bir beslenme ve aktivite planı hazırlayarak en verimli şekilde kilo vermeye başlıyoruz.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                	<h2>Takip ve Kontrol</h2>\r\n                                    <p>Sürekli olarak kaydedilen ilerlemeyi takip edip gözlemliyor ve programı sürekli güncel tutarak diyetinizden sıkılmamanızı sağlıyoruz.</p>\r\n                                </li>\r\n                            </ul>\r\n            			</td>\r\n            		</tr>\r\n            	</tbody></table>\r\n            </td>\r\n		</tr>        \r\n	</tbody></table>\r\n                    </div>\r\n                </div>\r\n            </div>', '2021-06-06', 1),
(2, 'Hakkımızda', '', '<div class=\"container px-5 my-5\">\r\n                    <div class=\"row gx-5\">\r\n                    <h1 class=\"hakkimda\">HAKKIMDA</h1>\r\n                        <table class=\"yazi-1\">\r\n                        <tbody><tr>\r\n                            <td><img src=\"//pilanlidiyet.com/images/pilanli-diyet-busra-pilan.png\"></td>\r\n                            <td>\r\n                                <div class=\"icerik\">\r\n                                  Selamlar Ben Diyetisyen Büşra Pilan,<br> \r\nOnline Diyet Danışmanlığı verdiğim PilanlıDiyet’in kurucu üyesiyim.<br>\r\nMesleğimizin temeli olan mutfak eğitimimi BigChef’s gibi 60 şubesi olan büyük bir firmada 10 aylık bir sürede gerçekleştirdim. Menülerin içerisindeki gıda alerjenlerini, besinlerin kalori değerlerini, besinlerin birbirleriyle olan etkileşimlerini, periyodik olarak gerçekleşen Şube denetimlerini uygulayarak mutfağı temelden öğrendim.<br>\r\nSamsun Ondokuz Mayıs Üniversitesi Hastanesinde Hastalıklarda Beslenme eğitiminin temelini alarak bir çok hastalıkta dikkat edilmesi gereken özel beslenme koşullarını uygulayarak öğrendim.<br>\r\nNeşeli Yüzler Anaokulunda çocukların gelişim grafiklerini inceleyerek, yaşlarına göre özel beslenme programları düzenleyerek çocuklara ve velilere sağlıklı beslenmenin büyüme ve gelişmedeki önemini anlattım.<br>\r\n<ul>\r\n<li>Sağlıklı Beslenme, </li>\r\n<li>Sağlıklı Tarifler, </li>\r\n<li>Kilo Alma, </li>\r\n<li>Kilo verme, </li>\r\n<li>Hastalıklarda Beslenme, </li>\r\n<li>Diyabet, </li>\r\n<li>Gut, </li>\r\n<li>İBS, </li>\r\n<li>Reflü, </li>\r\n<li>Gebelik ve Çocuk Beslenmesi, </li>\r\n<li>Bebeklerde Ek Gıda Dönemi Beslenmesi, </li>\r\n<li>Adölesan Beslenmesi, </li>\r\n<li>Sporcu Beslenmesi Uzmanlık Alanlarım.</li>\r\n</ul>\r\n<br><br></div>\r\n                            </td>\r\n                        </tr>\r\n                    </tbody></table>\r\n                    </div>\r\n                </div>', '2021-06-08', 1),
(3, 'Online Diyet', '', '<section class=\"beyaz-bg py-5\">\r\n	<div class=\"container px-5 my-5\">\r\n   	  <div class=\"row\">\r\n      	<h1 class=\"ortala\">İLK ÖNCELİĞİMİZ SİZLERİ TANIMAK</h1>\r\n        <hr>\r\n        <div class=\"col-md-6\"><img src=\"//pilanlidiyet.com/images/online-diyet.jpg\" width=\"100%\"></div>\r\n        <div class=\"col-md-6\" style=\"font-size:19px;\">\r\n        	Online diyet programımıza hazırlamak için aşağıdaki bilgilere ihtiyaç duymaktayız. Size en uygun programı hazırlayabilmek için,<br><br>\r\n        	<ul>        		\r\n                <li>Hayat rutininizi öğrenmek</li>\r\n                <li>Günlük beslenme sisteminiz hakkında bilgi sahibi olmak</li>\r\n                <li>Mevcut sağlık durumunu incelemek</li>\r\n                <li>Varsa diyet geçmişinizi öğrenmek</li>\r\n                <li>Fiziksel aktivite durumunuz konusunda bilgi edinmek olacaktır.</li>\r\n        	</ul>\r\n             Tüm bunları öğrendikten sonra gerekli değerlendirmeleri ve hesaplamalari yapacağız. Bu işlemler yapıldıktan sonra, yani tam anlamıyle sizi tanıdıktan sonra sadece size özel bir sağlıklı beslenme programı oluşturacağız.<br><br>\r\n                İlk görüşmemiz ücretsizdir.\r\n        </div>\r\n      </div>\r\n    </div>   \r\n</section>\r\n\r\n<section>\r\n	<div class=\"container px-5 my-5\">\r\n    	\r\n\r\n        <div class=\"col-lg-12 pilanli-diyet\">\r\n        	<p>Biz Pilanlı Diyet Ailesi olarak 2 Diyetisyen çalışıyoruz. Bu yüzden alanımıza özel danışan kabul ediyoruz. Hastalıklara Özel Beslenme Gebelik Öncesi Hazırlık Beslenmesi Gebelik Döneminde Beslenme Yeni Doğan Beslenmesi ve Ek Gıdaya Geçiş Süreci Çocukluk ve Adölesan Dönemi Beslenmesi Obezite Beslenmesi Sağlıklı Kilo Verme Sürecinin kontrol altında tutulduğu bir Beslenme Süreci için sizlere özel Beslenme Danışmanlığı Hizmetine başladık. </p>\r\n            <p>Bizlere Instagram üzerinden DM yoluyla veya iletişim sayfamızda bulunan iletişim formu ve iletişim bilgileri üzerinden ulaşabilirsiniz. Sağlıklı Kilo Verme Sürecinin kontrol altında tutulduğu bir beslenme süreci için sizlere özel Beslenme Danışmanlığı Hizmetine başladık.</p>\r\n            <p>Bu Danışmanlık süresinde sizlere Tükettiğiniz besinleri kayıt aldında tutabileceğiniz bir çizelge takip formu Sağlıklı alışveris listesi Sağlıklı yemek tarifleri Sağlıklı beslenme önerilerini sizlerle paylaşıyor olacağız</p>\r\n			<p>İlk olarak sizlere 1 haftalık bir beslenme programı gönderip anlık olarak whatsapp üzerinden listeye uyum sürecinizi takip ediyoruz Her hafta farklı bir Beslenme Programı göndererek sağlıklı beslenmeye uyum sürecinizi kolaylaştırıyoruz. Tüm bu süreçte telefonumuz 09.00-21.00 arası tüm sorularınızı yanıtlamak için açık durumda bırakıyoruz. </p>\r\n        </div>  \r\n        \r\n        \r\n    </div>   \r\n</section>\r\n<section>\r\n<img src=\"//pilanlidiyet.com/images/online-bar.jpg\" width=\"100%\">\r\n</section>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '2021-06-11', 1),
(6, 'Hangi Besinleri Tercih Etmeliyiz?', 'blog-1.jpg', '<p><b>KARPUZ:</b> Benim bugün ki ara öğünümde tercihim 1 dilim karpuz ve 1 dilim beyaz peynir oldu Neden birlikte tüketilmesi gerekiyor derseniz;</p><p>Meyveler tek başına tüketildiklerinde kan şekerini hızlı olarak yükselttikleri için yanında mutlaka süt ve süt ürünleri tüketmek kan şekerinin dengelenmesi için önemlidir&nbsp;</p><p>Karpuzun vücudumuz için sağlayacağı faydalara gelirsek Öncelikle içeriğindeki likopen sayesinde bizleri kanserden, kalp ve damar hastalıklarından koruyucu etkisi bizler için önemlidir Ayrıca Lif içeriği sayesinde bağırsak sağlığımıza katkı sağlar&nbsp;</p><p><b>ŞEFTALİ:</b> içerisinde ki A,B,C vitaminleri,Kalsiyum,Demir ve Potasyum mineralleri sayesinde Kanı temizliyor Kalbi koruyor Karaciğer ve safra kesisindeki çalışmayı destekliyor Şeker ihtiyacını karşılıyor Cilde nem veriyor Hastalıklara karşı vücuda direnç veriyor Hemde bunları sadece 59 kcal kullanarak yapıyor Herkes bugun en tatlı şeker kaynağı olan meyvesini yedi mi&nbsp;</p><p><b>KAHVALTIDA MEYVE TÜKETİMİ:</b> Meyveler Lif içeriği olarak zengin oldukları için günün ilk temel öğünü olan kahvaltıda tüketilmesi oldukça yararlıdır. Lifli yapıları sayesinde tüm Gastrointestinal Sistemi temizleyerek yeni güne toksinlerimizden arınmış bir şekilde başlamamızı sağlayabilirler. içerisindeki \'meyve şekeri\' yani fruktoz sizi masadaki rafine şekerlerden kurtararak doğal şeker tüketmenizi sağlar Porsiyon kontrolüne dikkat ederek, yanında mutlaka süt ürünü ve karbonhidrat kaynağı tüketerek sizlerde kahvaltılarınızı renklendirerek aromalandırarak sağlıklı hale getirebiliriz ÜZÜM: Her gün tüketilen 100 gr yani yaklaşık 1 salkım üzüm Güçlü bir antioksidan kaynağıdır Migren tedavisinde önerilir Kansere karşı koruyucu özellik gösteren antioksidan görevindedir. İçeriğindeki lifler sayesinde sindirim sistemini temizleyerek biriken toksik maddelerin dışarıya atılımına destek olur. Yüksek fruktoz içeriği sebebiyle kan şekerinin dengesini bozmamak açısından yanında süt ürünleri tüketilmesi önemlidir.&nbsp;</p><p><b>KEFİR:</b> Kefirin içerisindeki #probiyotik sindirim sistemini düzenlemeye ve bağışıklık sistemini desteklemeye yardımcı olur. içerisindeki #kalsiyum kemik gelişimine destek verir. Havanın ve gündemin yoğun olduğu bu dönemlerde vücudumuza iyi bakmakta fayda var&nbsp;</p><p><b>KURUYEMİŞ:</b> Kuruyemişleri toplum olarak çok seviyor ve porsiyon kontrolünü malesef genellikle ayarlayamıyoruz Ben danışanlarıma genellikle bu yüzden 8-10 adet demeyi tercih ediyorum Ama artık öğrendik ki 1 avuç demek, avucumuzu kapattığımızda içinde kalabilecek miktarmış&nbsp;</p><div><br></div>', '13/06-2021', 3),
(7, 'Tarif 1: Kabak Spagetti', 'blog-2.jpg', '<p>Size nefis bir kabak spagetti tarifi veriyorum hemde tüm tabak 204 kcall.</p><p>Kabakların kabuğunu soyduktan sonra soyacakla kabağın hepsini kesiyoruz.</p><p>Kesilen kabakları 1 tk zeytinyağda soteliyoruz.</p><p>Ayrı bir tavada 1 domatesi rendeleyip pişiriyoruz, içerisinde dilediğiniz baharatı katabilirsiniz.</p><p>Kabaklar piştikten sonra servis tabağına alıp üzerine 3 yk yoğurt ilave edip pişirdiğimiz domates sosu ilave ediyoruz...</p><p> Afiyet olsun</p>', '13/06/2021', 3),
(8, 'Tarif 2: KIRMIZI BİBERLİ YOĞURT', 'blog-3.jpg', '<p>Bu muhteşem tabağın faydaları, güzelliğinin bile önüne geçebilecek potansiyelde içerdiği A vitamini, C vitamini, beta-karoten ve antioksidanlarla kalp hastalıklarına yakalanma riskini azaltır.</p><p>Kırmızı biber dolaşımı hızlandırarak kalp krizi ve felce karşı koruma sağlar. İçeriğindeki likopen kansere karşı oldukça etkilidir. Pankreas, prostat ve rahim kanseri bu kanser çeşitleri arasında yer alır.</p><p><b>Tarifi için;</b></p><p>1 tk zeytin yağ ile 4 kapya biberi tavada 6-7 dk soteleyin üzerine 3 yk yoğurt dökün :). Afiyet olsun. Toplamda 156 kcal</p>', '13/06/2021', 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `dosyalar`
--
ALTER TABLE `dosyalar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `rezervasyonlar`
--
ALTER TABLE `rezervasyonlar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dosyalar`
--
ALTER TABLE `dosyalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `rezervasyonlar`
--
ALTER TABLE `rezervasyonlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
