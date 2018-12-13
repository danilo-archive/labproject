create database videogame_db;
use videogame_db;

create table Game(
    gameID int(11) unsigned auto_increment primary key,
    name varchar(255) not null,
    artwork varchar(255) not null,
    genre varchar(30),
    rating int(1),
    description varchar(255),
    releaseDate date,
    developer varchar(255),
    price int(10)
);

create table GameCopy (
    copyID int(11) unsigned auto_increment primary key,
    gameID int(11) unsigned not null,
    platform varchar(100) not null,
    damageValue double not null,
    foreign key (gameID) references Game(gameID)
);

create table Member (
    memberID int(11) unsigned auto_increment primary key,
    fname varchar(50) not null,
    lname varchar(50) not null,
    email varchar(254) not null
);

create table Rental (
    rentalID int(11) unsigned auto_increment primary key,
    copyID int(11) unsigned not null,
    memberID int(11) unsigned not null,
    dateBorrowed date,
    dateDue date,
    
    foreign key (copyID) references GameCopy(copyID),
    foreign key (memberID) references Member(memberID)
);


use videogame_db;

insert into Member(memberId, fname, lname, email)
    values (1, "Hannah", "Paulding", "hannah.paulding@email.com");

insert into Member(memberId, fname, lname, email)
    values (2, "Danilo", "Del Busso", "danilo@email.com");

insert into Member(memberId, fname, lname, email)
    values (3, "Maren-Sofie", "Stubo", "maren-sofie@email.com");

insert into Member(memberId, fname, lname, email)
    values (4, "Mahum", "Hashmi", "mahum@email.com");

insert into Member(memberId, fname, lname, email)
    values (5, "John", "Smith", "john@email.com");


insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(1, "Counter-Strike: Global Offensive", "1.jpg", "Action", 5, 
"Counter-Strike: Global Offensive (CS: GO) will expand upon the team-based action gameplay that it pioneered when it was launched 14 years ago. CS: GO features new maps, characters, and weapons and delivers updated versions of the classic CS content (de_dust2, etc.)",
"2012–08-21", "Valve", "15");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(2, "Europa Universalis IV", "2.jpg", "Strategy", 4, 
"The empire building game Europa Universalis IV gives you control of a nation to guide through the years in order to create a dominant global empire. Rule your nation through the centuries, with unparalleled freedom, depth and historical accuracy.",
"2013–08-13", "Paradox Development Studio", "40");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(3, "DARK SOULS™: Prepare To Die Edition", "3.jpg", "Action", 5, 
"Dark Souls will be the most deeply challenging game you play this year. Can you live through a million deaths and earn your legacy?",
"2012–08-24", "FromSoftware", "40");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(4, "The Elder Scrolls V: Skyrim", "4.jpg", "RPG", 1, 
"EPIC FANTASY REBORN The next chapter in the highly anticipated Elder Scrolls saga arrives from the makers of the 2006 and 2008 Games of the Year, Bethesda Game Studios. Skyrim reimagines and revolutionizes the open-world fantasy epic, bringing to life a complete virtual world open for you to explore any way you choose.",
"2011–11-10", "Bethesda Game Studios", "20");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(5, "DARK SOULS™ III", "5.jpg", "FromSoftware", 3, 
"Dark Souls continues to push the boundaries with the latest, ambitious chapter in the critically-acclaimed and genre-defining series. Prepare yourself and Embrace The Darkness!",
"2016–04-11", "FromSoftware", "20");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(6, "Victoria II", "6.jpg", "Strategy", 4, 
"Carefully guide your nation from the era of absolute monarchies in the early 19th century, through expansion and colonization, to finally become a truly great power by the dawn of the 20th century. Victoria II is a grand strategy game played during the colonial era of the 19th century, where the player takes control of a country, guiding...",
"2010-08-30", "Paradox Development Studio", "20");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(7, "Grand Theft Auto V", "7.jpg", "Action", 2, 
"Los Santos is a city of bright lights, long nights and dirty secrets, and they don’t come brighter, longer or dirtier than in GTA Online: After Hours. The party starts now.",
"2015-04-13", "Rockstar North", "60");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(8, "BioShock Infinite", "8.jpg", "Action", 1, 
"Indebted to the wrong people, with his life on the line, veteran of the U.S. Cavalry and now hired gun, Booker DeWitt has only one opportunity to wipe his slate clean. He must rescue Elizabeth, a mysterious girl imprisoned since childhood and locked up in the flying city of Columbia.",
"2013-03-25", "Irrational Games", "30");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(9, "Borderlands 2", "9.jpg", "Co-op", 3, 
"A new era of shoot and loot is about to begin. Play as one of four new vault hunters facing off against a massive new world of creatures, psychos and the evil mastermind, Handsome Jack. Make new friends, arm them with a bazillion weapons and fight alongside them in 4 player co-op on a relentless quest for revenge and redemption across the undiscovered and unpredictable living planet.",
"2012-09-18", "Gearbox Software", "20");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(10, "PAYDAY: The Heist", "10.jpg", "Co-op", 5, 
"Take on the role of a hardened career criminal executing intense, dynamic heists in constant pursuit of the next “big score”",
"2011-10-20", "OVERKILL Software", "15");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(11, "Rust", "11.jpg", "Adventure", 3, 
"The only aim in Rust is to survive. To do this you will need to overcome struggles such as hunger, thirst and cold. Build a fire. Build a shelter. Kill animals for meat. Protect yourself from other players, and kill them for meat. Create alliances with other players and form a town. Do whatever it takes to survive.",
"2018-02-08", "Facepunch Studios", "35");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(12, "Arma 3", "12.jpg", "Action", 4, 
"Experience true combat gameplay in a massive military sandbox. Deploying a wide variety of single- and multiplayer content, over 20 vehicles and 40 weapons, and limitless opportunities for content creation, this is the PC’s premier military game. Authentic, diverse, open - Arma 3 sends you to war.",
"2013-10-12", "Bohemia Interactive", "40");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(13, "South Park™: The Stick of Truth™", "13.jpg", "RPG", 2, 
"From the perilous battlefields of the fourth-grade playground, a young hero will rise, destined to be South Park’s savior. From the creators of South Park, Trey Parker and Matt Stone, comes an epic quest to become… cool. Introducing South Park™: The Stick of Truth™.For a thousand years, the battle has been waged.",
"2014-03-03", "Obsidian Entertainment", "30");

insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(14, "Broforce", "14.jpg", "Co-op", 3, 
"When evil threatens the world, the world calls on Broforce - an under-funded, over-powered paramilitary organization dealing exclusively in excessive force. Brace your loins with up to four players to run ‘n’ gun as dozens of different bros and eliminate the opposing terrorist forces that threaten our way of life.",
"2015-10-15", "Free Lives", "15");

insert into GameCopy(copyID, gameID, platform, damageValue)
values(100 , 9 , 'XBOX' , 0.31411589526964256);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(1 , 2 , 'PC' , 0.8848018097730894);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(2 , 1 , 'PC' , 0.6997908278481362);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(3 , 11 , 'PC' , 0.17225209659896001);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(4 , 12 , 'PC' , 0.29726316341681236);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(5 , 10 , 'PS4' , 0.42748536357774736);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(6 , 9 , 'PC' , 0.5215091142196504);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(7 , 7 , 'XBOX' , 0.9522348017815832);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(8 , 7 , 'PS4' , 0.9207987752510098);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(9 , 2 , 'XBOX' , 0.8575559040939056);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(10 , 13 , 'XBOX' , 0.5617040230744463);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(11 , 11 , 'PC' , 0.9471951510739851);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(12 , 6 , 'PC' , 0.6348142734707904);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(13 , 10 , 'PS4' , 0.9598611100269778);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(14 , 3 , 'XBOX' , 0.5243095483210207);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(15 , 10 , 'PS4' , 0.18176830807382838);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(16 , 1 , 'PS4' , 0.08527566400996967);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(17 , 14 , 'PS4' , 0.03156564860196154);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(18 , 5 , 'PS4' , 0.9550835851110246);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(19 , 8 , 'PS4' , 0.9399999823917866);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(20 , 10 , 'PS4' , 0.5152919341574864);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(21 , 8 , 'PS4' , 0.03764046752479033);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(22 , 6 , 'PC' , 0.8438617375993807);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(23 , 6 , 'PC' , 0.5930942991169701);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(24 , 13 , 'XBOX' , 0.11303615269632905);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(25 , 12 , 'XBOX' , 0.49291293274591697);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(26 , 14 , 'PS4' , 0.7807116999925992);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(27 , 13 , 'PS4' , 0.11309345500341528);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(28 , 11 , 'PS4' , 0.5199705115274422);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(29 , 6 , 'XBOX' , 0.3136181863743641);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(30 , 3 , 'XBOX' , 0.11943515046031572);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(31 , 11 , 'XBOX' , 0.2686983445513256);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(32 , 11 , 'PC' , 0.058811882970975615);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(33 , 8 , 'PS4' , 0.9382668357294857);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(34 , 9 , 'PC' , 0.0060024303115171485);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(35 , 1 , 'PS4' , 0.14706276987330558);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(36 , 3 , 'XBOX' , 0.2370335198721023);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(37 , 5 , 'PS4' , 0.22003632815559682);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(38 , 1 , 'XBOX' , 0.1681545469142689);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(39 , 14 , 'XBOX' , 0.38725265394706465);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(40 , 6 , 'PS4' , 0.011444014006945835);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(41 , 11 , 'XBOX' , 0.9583929777743749);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(42 , 2 , 'PC' , 0.32829527494956);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(43 , 8 , 'PC' , 0.690961172668209);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(44 , 10 , 'XBOX' , 0.38789262074270203);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(45 , 6 , 'PS4' , 0.8602337959754285);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(46 , 4 , 'PC' , 0.2560082650663924);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(47 , 8 , 'PS4' , 0.1997326844515379);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(48 , 11 , 'XBOX' , 0.6706380468869528);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(49 , 1 , 'XBOX' , 0.6494838935021201);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(50 , 2 , 'PC' , 0.3201948347837622);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(51 , 14 , 'XBOX' , 0.8791202283947934);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(52 , 5 , 'PS4' , 0.94974163906382);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(53 , 7 , 'XBOX' , 0.06804080946141133);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(54 , 9 , 'PC' , 0.9466476392204242);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(55 , 1 , 'PS4' , 0.9020600048667875);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(56 , 2 , 'PS4' , 0.5150531148842883);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(57 , 8 , 'PC' , 0.31959524701738884);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(58 , 12 , 'XBOX' , 0.8020781692798737);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(59 , 5 , 'PC' , 0.6736049094516512);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(60 , 4 , 'PC' , 0.44599818242165656);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(61 , 13 , 'PS4' , 0.4836925547226034);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(62 , 2 , 'PC' , 0.22854425887687357);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(63 , 5 , 'XBOX' , 0.2622030899089385);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(64 , 4 , 'XBOX' , 0.1373474379770272);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(65 , 11 , 'PC' , 0.10584896323999637);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(66 , 5 , 'XBOX' , 0.7050301950584881);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(67 , 5 , 'PC' , 0.9314093975788558);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(68 , 14 , 'PC' , 0.6221870466329529);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(69 , 13 , 'PS4' , 0.1905774929856361);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(70 , 1 , 'XBOX' , 0.15318865988874864);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(71 , 8 , 'PS4' , 0.39319542046498923);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(72 , 2 , 'PC' , 0.9923357203570213);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(73 , 7 , 'XBOX' , 0.9680554667094268);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(74 , 3 , 'PS4' , 0.6479447492174746);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(75 , 6 , 'PS4' , 0.13075874220341244);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(76 , 12 , 'PC' , 0.5459732682555651);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(77 , 10 , 'PS4' , 0.014137312828514936);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(78 , 3 , 'PC' , 0.3418813969726169);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(79 , 5 , 'XBOX' , 0.6728878958241469);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(80 , 4 , 'PS4' , 0.2068976914648546);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(81 , 3 , 'PS4' , 0.34934368814048034);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(82 , 10 , 'PS4' , 0.024937818564791048);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(83 , 10 , 'PC' , 0.26402515244765246);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(84 , 1 , 'PS4' , 0.4227155760569119);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(85 , 11 , 'XBOX' , 0.5978495488930511);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(86 , 2 , 'PS4' , 0.3186959135028331);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(87 , 7 , 'XBOX' , 0.9544038164364292);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(88 , 2 , 'PS4' , 0.1683106787560893);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(89 , 5 , 'PS4' , 0.3505455712032788);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(90 , 3 , 'PC' , 0.53629003516969);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(91 , 7 , 'PS4' , 0.6308540969193925);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(92 , 14 , 'PC' , 0.961651983201379);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(93 , 4 , 'PC' , 0.28261185556829727);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(94 , 2 , 'XBOX' , 0.7878274876324232);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(95 , 3 , 'PS4' , 0.1615695651213922);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(96 , 5 , 'XBOX' , 0.435644156252339);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(97 , 8 , 'XBOX' , 0.15896404172681877);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(98 , 5 , 'PC' , 0.15888654272398894);

insert into GameCopy(copyID, gameID, platform, damageValue)
values(99 , 14 , 'PC' , 0.16692750163757686);

