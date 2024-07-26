-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 06:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(1) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `img1` text NOT NULL,
  `name1` text NOT NULL,
  `about1` text NOT NULL,
  `img2` text NOT NULL,
  `name2` text NOT NULL,
  `about2` text NOT NULL,
  `title1` text NOT NULL,
  `title2` text NOT NULL,
  `title3` text NOT NULL,
  `video1` text NOT NULL,
  `video2` text NOT NULL,
  `video3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `text1`, `text2`, `text3`, `img1`, `name1`, `about1`, `img2`, `name2`, `about2`, `title1`, `title2`, `title3`, `video1`, `video2`, `video3`) VALUES
(1, 'our attractive web design is visually appealing, easy to navigate, and engaging. It incorporates elements such as color, typography, and imagery to communicate information effectively and provide an enjoyable user experience.', 'Our web platform offers a diverse selection of movies, including action, adventure, comedy, drama, horror, romance, sci-fi, thriller, and more, catering to various tastes and preferences.', 'Our website offers the highest quality movie content, with a diverse selection of genres and titles to choose from, ensuring a satisfying viewing experience for all.', 'samir.jpg', 'MR.samir Nakrani', 'Mr. Samir Nakrani is a web developer who designs and develops websites, web applications, and other digital solutions for individuals and businesses, using his skills in programming languages and frameworks.', 'vivek.jpg', 'MR.vivek Radadiya', 'Mr. Vivek Radadiya is a web developer who specializes in creating dynamic and user-friendly websites using various programming languages and web technologies.', 'Attractive Web Design', 'Variety of Movies', 'Best Content', 'demo1.mp4', 'demo2.mp4', 'demo3.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, '@admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `documentory_detail`
--

CREATE TABLE `documentory_detail` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `desciption` text NOT NULL,
  `rating` int(255) NOT NULL,
  `Category` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `duration` time NOT NULL,
  `year` year(4) NOT NULL,
  `background_image` text NOT NULL,
  `thumnail` text NOT NULL,
  `thumbnail2` text NOT NULL,
  `video` text NOT NULL,
  `views` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `documentory_detail`
--

INSERT INTO `documentory_detail` (`id`, `title`, `desciption`, `rating`, `Category`, `type`, `duration`, `year`, `background_image`, `thumnail`, `thumbnail2`, `video`, `views`) VALUES
(35, 'yuvarathnaa', 'A reputed college that is now on the verge of closing due to the privatization of the education system and political reasons. The college Principal fights against privatization and the protagonist supports his vision.', 5, 'Drama', 'drama, action, comedy', '02:39:00', '2021', 'Yuvarathnaa-movie-poster.jpg', 'pxfuel.jpg', 'MV5BZmM3OTY5N2QtM2U1ZS00NmNjLTlkOTctNjI1ZDZhOTY1MDkyXkEyXkFqcGdeQXVyODEyNjEwMDk@._V1_.jpg', 'Yuvarathnaa 2021 Hindi Dual Audio www.downloadhub.kim 720p UNCUT HDRip ESubs.mkv', 104),
(36, 'yahan sabhi gyani hain\r\n', 'STORY: When all else fails, a desperate Pappu Tiwari (Atul Srivastava) resorts to selling his last piece of ancestral land to stay afloat. But, things do not go as planned and the Tiwari family is now at its wit’s end.\r\n\r\n\r\n\r\nREVIEW: Hailing from a small town in North India, a chirpy Goldie (Apoorva Arora) works as an anchor at a local news channel and has big dreams for her future. But, she struggles to put sense into her superstitious parents’ heads as they hold on to their age-old beliefs and go about making one Himalayan mistake after the other — including promising her hand in marriage to a politician’s son without consent.', 5, 'Drama', 'drama, comedy', '01:50:52', '2020', 'yahan-sabhi-gyani-hai-et00121752-23-12-2019-04-00-36 (1).jpg', '4202a0152c3129739ecadb37964c65846f26a2a9d2d231e2c3f6077f27fe9aee._RI_V_TTW_.jpg', 'Yahan-Sabhi-Gyani-Hain.jpg', 'Yahan Sabhi Gyani Hain  (2020) [Worldfree4u.Cloud] [Hindi] 720p HDRip x264 AAC.mkv', 201),
(37, 'anti matter', 'Ana going through the wormhole split her up into two parts. Ana-matter and Ana-light. Nate and Liv conclude that Ana-matter is real because she has mass and memories. However, the real Ana can be brought back only if Ana-matter and Ana-light were combined to become one again.\r\n', 6, 'Science_fiction', 'science_fiction, Historical', '01:45:00', '2016', 'fa981f006ed9549e7c2d8bf822969944_1920x1080.jpg', 'desktop-1920x1080 (1).jpg', 'IMG_6236.jpg', 'Anti Matter (2016) [Worldfree4u.Trade] 720p HDRip x264 [Dual Audio] [Hindi DD 2.0 + English DD 2.0].mkv', 463),
(38, 'ala vaikunthapurramuloo ', 'Bantu grows up being constantly subjected to his father\'s scorn. However, when he learns of his real parentage, he decides to carve a place for himself within the family he truly belongs to.\r\n', 7, 'Drama', 'drama, action', '02:45:00', '2020', 'maxresdefault.jpg', 'pxfuel.jpg', 'pxfuel 2.jpg', 'Ala Vaikuntapuramlo (2020) [Worldfree4u.Name] UNCUT 720p HDRip x264 [Dual Audio] [Hindi DD 2.0 + Tamil DD 2.0].mkv', 575),
(39, 'avengers: endgame', 'Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.\r\n', 8, 'Science_fiction', 'action, science_fiction', '03:01:00', '2019', 'Avenger-Endgame-Poster-2.jpg', 'peakpx 4.jpg', 'peakpx 3.jpg', 'Avengers Endgame (2019) [Worldfree4u.Wiki] 720p BluRay x264 ESub [Dual ORG Audio] [Hindi DD 5.1 + English DD 5.1].mkv', 238),
(40, 'asteroid: final impact', 'After finding his asteroids tracking satellite was being secretly used for military surveillance, Steve Thomas blew the whistle, costing his career, family and friends. When he discovers a threat to the entire world, Steve must become a fugitive from the law while trying to implement a desperate plan to save humanity.', 3, 'Science_fiction', 'action, science_fiction', '01:26:52', '2015', 'asteroid-field-foggy-atmosphere-panorama-landscape-outer-space-scenery-spacescape-d-rendering-illustration-191053271.jpg', 'peakpx.jpg', 'IMG_6240.JPG', 'Asteroid - Final Impact (2015) [Worldfree4u.Click] 720p HDRip x264 ESub [Dual Audio] [Hindi DD 2.0 + English DD 5.1].mkv', 879),
(42, '83', 'Cricketer Kapil Dev gets an opportunity to make his country famous on the world stage when he captains the Indian national cricket team at the 1983 Cricket World Cup.\r\n', 8, 'Drama', 'drama, fantasy', '02:45:00', '2021', '83cover-banner.jpg', 'wp10443159-83-movie-wallpapers.jpg', 'MV5BNTMyZTYyODYtMjUwNS00NmU1LWEzY2MtNjgxMjc3MjFiNWE0XkEyXkFqcGdeQXVyNjY1MTg4Mzc@._V1_.jpg', '83 2021 Hindi www.downloadhub.us 720p HDRip ESubs.mkv', 912),
(43, 'the arctic blast', 'A US research vessel gets shipwrecked in Australia, leaving its entire crew of 15 dead. Soon, a cold wind sweeps across the planet due to a solar eclipse and wreaks havoc everywhere.', 4, 'Action', 'action, advanture', '01:32:52', '2010', 'backdrop-1920.jpg', 'backdrop-1920.jpg', 'IMG_6238.JPG', 'Arctic Blast (2010) [Worldfree4u.Click] 720p BluRay x264 ESub [Dual Audio] [Hindi DD 2.0 + English DD 5.1].mkv', 236),
(44, 'big legend', 'Following the trail of his missing fiancée, one man finds more than he bargained for when he teams up with a local hunter who has his eyes set on the ultimate prize: finding Bigfoot.', 5, 'Horror', 'action, advanture, horror', '01:29:00', '2018', 'MV5BZGQxNzY3NGQtOTYzNy00MzVkLWE4NWItZjNmMmNlOTIxMWY4XkEyXkFqcGdeQXVyNzI1NzMxNzM@._V1_.jpg', 'pxfuel 4.jpg', 'peakpx 5.jpg', 'Big Legend (2018) [Worldfree4u.Trade] HEVC 720p HDRip x265 ESub [Dual Audio] [Hindi DD 2.0 + English DD 2.0].mkv', 1240),
(45, 'black panther', 'After the death of his father, T\'Challa returns home to the African nation of Wakanda to take his rightful place as king. When a powerful enemy suddenly reappears, T\'Challa\'s mettle as king -- and as Black Panther -- gets tested when he\'s drawn into a conflict that puts the fate of Wakanda and the entire world at risk. Faced with treachery and danger, the young king must rally his allies and release the full power of Black Panther to defeat his foes and secure the safety of his people.', 8, 'Action', 'action, advanture, Historical', '02:14:00', '2018', 'dcjxgyy-4e4e6040-c341-4d6a-9798-29fa00dfff5a.jpg', 'wallpapersden.com_marvel-black-panther-artwork-2018_1920x1080.jpg', 'HD-wallpaper-black-panther-2018-marvel-movie-poster-war.jpg', 'www.TamilRockers.li - Black Panther (2018) [720p - BDRip - Original Audios - [Hindi + English] - x264 -1.4GB - ESubs].mkv', 812),
(46, 'wonder woman 1984', 'Diana Prince lives quietly among mortals in the vibrant, sleek 1980s -- an era of excess driven by the pursuit of having it all. Though she\'s come into her full powers, she maintains a low profile by curating ancient artifacts, and only performing heroic acts incognito. But soon, Diana will have to muster all of her strength, wisdom and courage as she finds herself squaring off against Maxwell Lord and the Cheetah, a villainess who possesses superhuman strength and agility.', 6, 'Action', 'action, advanture, Historical', '02:31:00', '2020', 'banner_img.jpg', 'wonder-woman-1984-4k-2020-movie-8r-1920x1080.jpg', 'embed-5e8631fe4980e.jpg', 'Wonder_Woman_1984_-_2020__Worldfree4u.Download__IMAX_720p_WEBRip_x264_ESub__Dual_Audio___Hindi_CAM_DD_2.0___English_DD_5.1_.mkv', 776),
(47, 'blood monkey', 'When six students discover a species of killer chimps, they are assured by their professor of rightful credit. But a study in animal behaviour soon turns into a game of survival in a ruthless jungle.', 3, 'Horror', 'action, horror', '01:30:52', '2007', 'image-73940-b00odvg1p4.jpg', 'peakpx 6.jpg', 'IMG_6243.JPG', 'Blood_Monkey___40_2007__41___Worldfree4u.App__UNCUT_720p_HDRip_x264__Dual_Audio___Hindi_DD_2.0___English_DD_2.0_.mkv', 351),
(48, 'chicken curry law', 'Chicken Curry Law is a 2019 Bollywood drama film directed by Shekhar Sirrinn. The film stars Ashutosh Rana, Natalia Janoszek, Nivedita Bhattacharya and Mukesh Hariawala. It is distributed by Panorama Studios. It was theatrically released in India on 9 August 2019.', 6, 'Drama', 'drama, action, Crime', '02:07:00', '2019', '327357431_1567793290387892_7284268999131076960_n.png', 'pxfuel 5.jpg', 'IMG_6245.JPG', 'Chicken Curry Law 2019 Hindi 720p WEB-DL.mkv', 680),
(49, 'doctor strange', 'Dr. Stephen Strange\'s (Benedict Cumberbatch) life changes after a car accident robs him of the use of his hands. When traditional medicine fails him, he looks for healing, and hope, in a mysterious enclave. He quickly learns that the enclave is at the front line of a battle against unseen dark forces bent on destroying reality. Before long, Strange is forced to choose between his life of fortune and status or leave it all behind to defend the world as the most powerful sorcerer in existence.', 8, 'Action', 'action, advanture, fantasy', '01:55:52', '2016', 'Doctor-Strange-Benedict-Cumberbatch-magical-movie_3840x1200.jpg', 'peakpx 7.jpg', 'IMG_6247.JPG', 'Doctor Strange (2016) 720p BluRay x264 [Dual-Audio][Hindi 5.1 - English 5.1] ESubs - Downloadhub.mkv', 902),
(50, 'eternals', 'The Eternals, a race of immortal beings with superhuman powers who have secretly lived on Earth for thousands of years, reunite to battle the evil Deviants.\r\n', 5, 'Action', 'action, fantasy, Historical', '02:37:00', '2021', 'Babylon.jpg', 'wp10194481-eternals-movie-wallpapers.jpg', 'wp5343237-eternals-movie-wallpapers.png', 'Eternals 2021 Hindi ORG Dual Audio www.downloadhub.us 720p Web-DL ESubs.mkv', 681),
(51, 'inception', 'Dom Cobb (Leonardo DiCaprio) is a thief with the rare ability to enter people\'s dreams and steal their secrets from their subconscious. His skill has made him a hot commodity in the world of corporate espionage but has also cost him everything he loves. Cobb gets a chance at redemption when he is offered a seemingly impossible task: Plant an idea in someone\'s mind. If he succeeds, it will be the perfect crime, but a dangerous enemy anticipates Cobb\'s every move.', 9, 'Science_fiction', 'action, advanture, science_fiction', '02:28:00', '2010', 'Spider-Man_NWH_trailer_90.jpg', 'leonardo_dicaprio_in_inception-hd.jpg', 'url-4.jpg', 'Inception (2010) [Worldfree4u.Click] 720p BluRay x264 ESub [Dual Audio] [Hindi DD 5.1 + English DD 5.1].mkv', 707),
(52, 'ong bak 3', 'Tien is captured and almost beaten to death before he is saved and brought back to the Kana Khone villagers. But very soon his arch-rivals return, challenging Tien for a final duel.\r\n', 5, 'Action', 'drama, action, Crime', '01:39:52', '2010', 'ong-bak-3-5198ffdd96c9e.png', 'thumb-1920-808658.jpg', 'MV5BMTc3MjkyMzk4N15BMl5BanBnXkFtZTcwODQxMDg5Mw@@._V1_FMjpg_UX1000_.jpg', 'Ong Bak 3 (2010) [Worldfree4u.trade] 720p BRRip x264 [Hindi DD 2.0 + English DD 2.0 + Thai DD 2.0].mkv', 904),
(53, 'vitthal teedi', 'Vitthal Teedi is an Indian Gujarati-language drama web-series directed by Abhishek Jain. It is streamed on OHO Gujarati and stars Pratik Gandhi as the protagonist Vitthal Teedi. The first season, stylized as Chapter 1, was released on 7 May 2021', 9, 'Drama', 'drama, comedy', '03:05:00', '2021', 'maxresdefault (1).jpg', 'Vitthal-Teedi-SonyLIV.jpg', 'MV5BMDI3ODkyNDYtN2ZjYi00ZGVhLTgzMTctYWMyYjQzMDQwYzNlXkEyXkFqcGdeQXVyMTMyMDk5MDY0._V1_FMjpg_UX1000_.jpg', 'Vitthal Teedi (2021) New Gujarati Completed Web Series HEVC 720p.mkv', 349),
(54, 'sin city: a dame to kill for', 'The damaged denizens of Sin City return for another round of stories from the mind of Frank Miller. In \"Just Another Saturday Night,\" Marv (Mickey Rourke) struggles to recall a nasty run-in with some frat boys. In \"A Dame to Kill For,\" Dwight McCarthy (Josh Brolin) forsakes his battle with his inner demons to help Ava Lord (Eva Green), the woman of his dreams and nightmares. In \"Nancy\'s Last Dance,\" Nancy Callahan (Jessica Alba), mad with grief and rage over Hartigan\'s death, vows revenge.\r\n', 5, 'Horror', 'action, horror, Crime', '01:42:52', '2014', 'panorama-abandoned-room-table-has-icicles-black-white-urbex-68055968.jpg', '618104.jpg', 'Sin_City_A_Dame_to_Kill_For-417966373-large.jpg', 'Sin City A Dame to Kill For (2014) [Worldfree4u.Tube] 720p BluRay x264 ESub [Dual Audio] [Hindi DD 2.0 + English DD 2.0].mkv', 212),
(55, 'lucy', 'When a boyfriend tricks Lucy (Scarlett Johansson) into delivering a briefcase to a supposed business contact, the once-carefree student is abducted by thugs who intend to turn her into a drug mule. She is surgically implanted with a package containing a powerful chemical, but it leaks into her system, giving her superhuman abilities, including telekinesis and telepathy. With her former captors in pursuit, Lucy seeks out a neurologist (Morgan Freeman), who she hopes will be able to help her.', 7, 'Science_fiction', 'action, science_fiction', '01:29:52', '2014', 'Lucy.jpg', 'thumb-1920-610295.jpg', 'MV5BMGJmZjcwNTctZjE1Ny00MGY3LWJkNTgtNGM4MWFhZWVlN2ZlXkEyXkFqcGdeQXVyMTMxODYzNjg@._V1_.jpg', 'Lucy (2014) [Worldfree4u.Tube] 720p BluRay x264 ESub [Dual Audio] [Hindi DD 2.0 + English DD 2.0].mkv', 118),
(56, 'the sixth sense', 'Young Cole Sear (Haley Joel Osment) is haunted by a dark secret: he is visited by ghosts. Cole is frightened by visitations from those with unresolved problems who appear from the shadows. He is too afraid to tell anyone about his anguish, except child psychologist Dr. Malcolm Crowe (Bruce Willis). As Dr. Crowe tries to uncover the truth about Cole\'s supernatural abilities, the consequences for client and therapist are a jolt that awakens them both to something unexplainable.\r\n', 8, 'Horror', 'horror, fantasy', '01:48:52', '1999', 'mysterious-forest-scene-panorama-foggy-dark-haunted-fog-surreal-woods-light-trees-117150470.jpg', 'wp4120644 (1).jpg', 'MV5BM2U0NDQzNmYtNmFkNC00MWI3LThjNTktNzI5MjFjNWU4NmM2XkEyXkFqcGdeQXVyMTAyOTE2ODg0._V1_.jpg', 'The Sixth Sense 1999 [Worldfree4u.Tube] 720p BluRay x264 ESub [Dual Audio] [Hindi DD 2.0 + English DD 2.0].mkv', 127),
(59, 'the wailing', 'Suspicion leads to hysteria when rural villagers link a series of brutal murders to the arrival of a mysterious stranger (Kunimura Jun).\r\n', 7, 'Horror', 'action, horror', '02:36:00', '2016', 'mysterious-forest-scene-panorama-foggy-dark-haunted-fog-surreal-woods-light-trees-117150470.jpg', 'b36cabf3eafc0f8fa1e1c48dd9feebf7.jpg', 'fe76c9f5def096e1523b35a1be80af66.jpg', 'The Wailing (2016) Dual Audio {Hindi-English} 720p WEB-DL 1.2GB ESub [BollYFlix].mkv', 6),
(60, 'the matrix revolutions', 'In a dystopia overrun by robots, Neo (Keanu Reeves), mankind\'s greatest hope, is trapped in a limbo world. Meanwhile, the majority of the planet\'s population remains in a state of suspended virtual reality. The few humans who are cognizant of the grim realities of the world desperately try to hold off their mechanical enemies long enough for Neo to escape and save the day, but things turn disastrous when all-powerful computer program Agent Smith (Hugo Weaving) arrives in the flesh.\r\n', 7, 'Science_fiction', 'action, science_fiction', '02:09:00', '2003', '0_Jv1uD4XjEH58kUN4.jpg', '489649.jpg', 'The_Matrix_Revolutions-289564524-large.jpg', 'The Matrix Revolutions (2003) [Worldfree4u.Wiki] 720p BRRip x264 [Dual Audio] [Hindi DD 5.1 + English DD 5.1].mkv', 2),
(61, 'the conjuring: the devil made me do it', 'Paranormal investigators Ed and Lorraine Warren take on one of the most sensational cases of their careers after a cop stumbles upon a dazed and bloodied young man walking down the road. Accused of murder, the suspect claims demonic possession as his defense, forcing the Warrens into a supernatural inquiry unlike anything they\'ve ever seen before.', 6, 'Horror', 'action, horror, Crime', '01:52:00', '2021', '543762.jpg', 'wallpapersden.com_new-the-conjuring-2021_1920x1080.jpg', 'EXCLUSIVE-The-Conjuring-The-Devil-Made-Me-Do-It-expected-to-release-in-India-in-CINEMAS-on-July-2-2.jpg', 'The.Conjuring.The.Devil.Made.Me.Do.It.2021.1080pHindi.English.Esubs.Moviesmod.Co.mkv', 2),
(64, 'a nun curse', 'On a weekend trip, a group of friends are forced to seek shelter inside an abandoned prison where a nun named Sister Monday had once been assigned. During her time at the prison, Sister Monday was suspected of killing prisoners who were serving out.', 4, 'Horror', 'horror, Crime', '01:13:52', '2019', '3-5.jpg', 'thumb-1920-543762.jpg', 'MV5BMTcyOWQyZWItMTRjZC00OWUyLThjZGEtZWQxNGQxMWIzOGY2XkEyXkFqcGdeQXVyNTA0MDQ3NjY@._V1_FMjpg_UX1000_.jpg', 'The.Bad.Nun.2018.480p.BRRip.Hindi.English.Moviesmod.Co.mkv', 3),
(65, 'm3gan', 'M3GAN is a marvel of artificial intelligence, a lifelike doll that s programmed to be a child s greatest companion and a parent s greatest ally. Designed by Gemma, a brilliant roboticist, M3GAN can listen, watch and learn as it plays the role of friend and teacher, playmate and protector. When Gemma becomes the unexpected caretaker of her 8-year-old niece, she decides to give the girl an M3GAN prototype, a decision that leads to unimaginable consequences.', 8, 'Horror', 'horror, Crime', '01:42:52', '2022', 'm3gan2_526331_caer8a.jpg', 'wallpapersden.com_m3gan-2023-hd_1920x1080.jpg', 'MV5BMDk4MTdhYzEtODk3OS00ZDBjLWFhNTQtMDI2ODdjNzQzZTA3XkEyXkFqcGdeQXVyMjMxOTE0ODA@._V1_FMjpg_UX1000_.jpg', 'M3gan.Unrated.2023.1080p.10Bit.WeBDL.Hindi.English.Esubs.MoviesMod.co.mkv', 8),
(66, 'John Wick : Chapter 1', 'Legendary assassin John Wick retired from his violent career after marrying the love of his life. Her sudden death leaves John in deep mourning. When sadistic mobster Iosef Tarasov and his thugs steal John\'s prized car and kill the puppy that was a last gift from his wife, John unleashes the remorseless killing machine within and seeks vengeance. Meanwhile, Iosef\'s father John\'s former colleague puts a huge bounty on John\'s head.', 7, 'Action', 'action,crime,fantacy', '01:48:20', '2014', 'johnwick3banner.jpg', 'john-wick.jpg', 'this-john-wick-4-poster-is-peak-graphic-design-v0-iuo8uloekb4a1.webp', 'John Wick.mkv', 114),
(67, 'John Wick : Chapter 2', 'Ordered by Winston, the kingpin of secret assassin society The Continental, to respect the organisation\'s ancient code, Wick reluctantly accepts the assignment to travel to Rome to take out D\'Antonio\'s sister, the ruthless capo atop the Italian Camorra crime syndicate.', 8, 'Action', 'action,crime,fantacy', '02:02:20', '2017', 'DA58xQXXYAA9DM6.jpg', 'john wick chapter 22.jpg', 'john wick chapter 2.jpg', 'John.Wick.Chapter.2.1080p.Dual.Audio.(Hin.Eng).Vegamovies.NL.mkv', 111),
(68, 'John Wick : Chapter 3', 'After gunning down a member of the High Table -- the shadowy international assassin\'s guild -- legendary hit man John Wick finds himself stripped of the organization\'s protective services. Now stuck with a $14 million bounty on his head, Wick must fight his way through the streets of New York as he becomes the target of the world\'s most ruthless killers.', 7, 'Action', 'action,crime,fantacy', '02:11:00', '2019', '75cbcc39-f479-55e7-b9bd-78aeefda3b6e.jpg', 'john wick chapter 32.jpg', 'john wick chapter 3.png', 'John.Wick-Chapter.4.2023.720p.CAMRip.Hindi-English.x264-Vegamovies.to.mkv', 117),
(69, 'Mortal Engines', 'Hundreds of years after a cataclysmic event destroyed civilization, mysterious young Hester Shaw emerges as the only one who can stop the city of London -- now a giant predator on wheels -- from devouring everything in its path. Feral and fiercely driven by the memory of her mother, Hester joins forces with Tom Natsworthy, an outcast from London, and Anna Fang, a dangerous outlaw with a bounty on her head.', 6, 'science_fiction', 'action,science_fiction,fantacy', '02:02:20', '2018', 'wp3912139-mortal-engines-wallpapers.jpg', 'wp3912244.jpg', 'MV5BMTY1NDE1ODItNzI5Yy00MTQ5LThiMjktMjc2ZmE1NzFmNDYyXkEyXkFqcGdeQXVyMTAyOTE2ODg0._V1_.jpg', 'Mortal.Engines.2018.1080P.BluRay.Hindi.Eng.Esub.ThemoviezFlix.com.mkv', 451),
(70, 'Red Notice', 'In the world of international crime, an Interpol agent attempts to hunt down and capture the world\'s most wanted art thief.', 7, 'Action', 'drama,comedy,action', '01:58:00', '2021', 'wp10229612.jpg', '80833-red-notice-2021-movies-movies-dwayne-johnson-gal.jpg', '1402363-red-notice-2021-movies-movies-dwayne-johnson-gal.jpg', 'Red.Notice.2021.1080p.Hindi.English.Esubs.MoviesVerse.Co.mkv', 250),
(72, 'Sita Ramam', 'An orphaned soldiers life changes after he receives a letter from a girl named Sita. He meets her and love blossoms between them. When he returns to her camp in Kashmir, he sends a letter to Sita that will not reach her.', 9, 'Drama', 'drama,comedy,romance', '02:43:00', '2022', 'Pano_Jesus-M-Garcia.jpg', 'cb63b2bf1e1e4df8aeb7912fb5029a8a8e82a36e0c28f512199975f7a62ae112._UR1920,1080_.jpg', 'MV5BN2RjZDJhYzUtOTQ5Yy00OWM3LWE5OTctM2Y0YWVmNzAzODllXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_.jpg', '[AllMoviesHub.one]-Sita.Ramam.2022.1080p.HS.WEB-DL.AAC2.0.x264 - Copy.mkv', 5);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `username`, `useremail`, `message`) VALUES
(6, 'vivek', 'vivek@gmail.com', 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiii'),
(7, 'vivek', 'vivek@gmail.com', 'asdfghjkzxcvbnmqwertyuio'),
(9, 'gopu', 'govind@gmail.com', 'i like your project and containt.');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `views`) VALUES
(1, 'yuvarathnaa', 104),
(2, 'wonder woman 1984', 105),
(3, 'asteroid: final impact', 105),
(4, 'black panther', 105),
(5, 'yahan sabhi gyani hain\n', 200),
(6, 'anti matter', 105),
(7, 'big legend', 105),
(8, 'avengers: endgame', 105),
(9, '83', 105),
(10, 'the arctic blast', 105),
(11, 'ala vaikunthapurramuloo ', 105),
(12, 'blood monkey', 105),
(13, 'chicken curry law', 105),
(14, 'doctor strange', 105),
(15, 'eternals', 105),
(16, 'inception', 105),
(17, 'ong bak 3', 105),
(18, 'vitthal teedi', 105),
(19, 'sin city: a dame to kill for', 105),
(20, 'lucy', 105),
(21, 'the sixth sense', 105),
(22, 'the wailing', 105),
(23, 'the matrix revolutions', 105),
(24, 'the conjuring: the devil made me do it', 105),
(25, 'the conjuring', 103),
(26, 'the conjuring', 103),
(27, 'a nun curse', 105),
(28, 'm3gan', 105),
(29, 'dsf', 105);

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `pricing_amount` int(11) NOT NULL,
  `Price_s` int(11) NOT NULL,
  `Price_Y` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`pricing_amount`, `Price_s`, `Price_Y`) VALUES
(199, 299, 699);

-- --------------------------------------------------------

--
-- Table structure for table `slider_thumbnail`
--

CREATE TABLE `slider_thumbnail` (
  `id` int(11) NOT NULL,
  `thubnail` text NOT NULL,
  `text` text NOT NULL,
  `subtext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_thumbnail`
--

INSERT INTO `slider_thumbnail` (`id`, `thubnail`, `text`, `subtext`) VALUES
(1, '974619.jpg', '', ''),
(2, 'pxfuel12122312.jpg', '', ''),
(3, '1920x1080-561441-movies-inception.jpg', '', ''),
(7, '1365670-eternals-movies-2021-movies-hd-4k.jpg', '', ''),
(8, '70Ah12u1iP67hzH1RbQrk0fxam4.jpg', 'ong bak 3 ', '‧ Action/Martial Arts ‧');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow_thumbnail`
--

CREATE TABLE `slideshow_thumbnail` (
  `id` int(11) NOT NULL,
  `thumbnail_sli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slideshow_thumbnail`
--

INSERT INTO `slideshow_thumbnail` (`id`, `thumbnail_sli`) VALUES
(1, '1920x1080-1079842-face-galaxy-space-nebula-atmosphere-Scarlett-Johansson-universe-astronomy-outer-space-astronomical-object.jpg'),
(2, '70Ah12u1iP67hzH1RbQrk0fxam4.jpg'),
(3, '1920x1080-4592843-inception-skyscraper-aerial-view-typography-city-movies-digital-art.jpg'),
(4, '1920x1080-964457-artwork-digital-art-Wonder-Woman-DC-Comics-women.jpg'),
(5, '1920x1080-3001444-1950x1300-black-panther-marvel-comics-black-panther-movie.jpg'),
(6, '1920x1080-1365143-doctor-strange-in-the-multiverse-of-madness-doctor.jpg'),
(7, '1856085.jpg'),
(8, 'MV5BN2M1NWFmNDYtMjk3My00NDIwLWIyNGQtYjE4ZWM4NmIzYTM4XkEyXkFqcGdeQVRoaXJkUGFydHlJbmdlc3Rpb25Xb3JrZmxvdw@@._V1_.jpg'),
(9, '1920x1080-587994-avengers-endgame.jpg'),
(10, '1920x1080-86017-eternals-Ikaris-marvel-movies-2021-movies-hd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` text NOT NULL,
  `Duration` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `mobile`, `gender`, `password`, `profile_picture`, `Duration`, `Status`) VALUES
(34, 'samir2', 'sr__patel_@006', 'anilnakrani643@gmail.com', 1234567890, 'm', 'samir', 'DQyNHder4hmYdLZ4Wf5oS3-970-80.jpg.webp', '0000-00-00', ''),
(35, 'samir', 'healthcenter26@gmail.com', 'samirnakrani0007@gmail.com', 1234567890, 'm', 'sam', 'Gutenberg.jpg', '0000-00-00', ''),
(36, 'vivek', 'vivek@ggtgt', 'vivek@gmail.com', 1414241414, 'm', '12345654321', 'DALL·E 2023-02-23 17.33.17 - Epic Scenes of Asteroid Impact on Earth.png', '0000-00-00', ''),
(37, 'Samir nakrani', 'S@mir', 'samirnakrani@1212gamil.com', 2147483647, 'm', 'samir', 'peakpx 7.jpg', '0000-00-00', ''),
(38, 'gopu', 'patel@', 'govind@gmail.com', 2147483647, 'm', 'jaymataji', '', '0000-00-00', ''),
(39, 'Samir nakrani', 's@meer', 'samirnakrani12@gmail.com', 2147483647, 'm', 'samir', '', '2026-07-25', 'Done'),
(40, 'Sameer nakrani', 's@meeer', 'samirnakranie12@gmail.com', 2147483647, 'm', 'samir', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `watch_later`
--

CREATE TABLE `watch_later` (
  `Userid` text NOT NULL,
  `Documentoryid` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watch_later`
--

INSERT INTO `watch_later` (`Userid`, `Documentoryid`, `Status`) VALUES
('36', '20', 'saved'),
('36', '13', 'saved'),
('34', '13', 'saved'),
('34', '20', 'saved'),
('34', '20', 'saved'),
('34', '13', 'saved'),
('34', '13', 'saved'),
('34', '19', 'saved'),
('36', '55', 'saved'),
('37', '55', 'saved'),
('37', '56', 'saved'),
('37', '54', 'saved'),
('38', '55', 'saved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentory_detail`
--
ALTER TABLE `documentory_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_thumbnail`
--
ALTER TABLE `slider_thumbnail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow_thumbnail`
--
ALTER TABLE `slideshow_thumbnail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documentory_detail`
--
ALTER TABLE `documentory_detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `slider_thumbnail`
--
ALTER TABLE `slider_thumbnail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slideshow_thumbnail`
--
ALTER TABLE `slideshow_thumbnail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
