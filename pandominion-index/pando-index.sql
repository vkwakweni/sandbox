CREATE DATABASE pandoindex;

CREATE TABLE `species` (
  `id` int NOT NULL AUTO_INCREMENT,
  `common_name` varchar(255) DEFAULT NULL,
  `family` varchar(255) DEFAULT NULL,
  `dominant_trait` varchar(255) DEFAULT NULL,
  `habitat` varchar(255) DEFAULT NULL,
  `cx1` float DEFAULT NULL,
  `cy1` float DEFAULT NULL,
  `r1` float DEFAULT NULL,
  `cx2` float DEFAULT NULL,
  `cy2` float DEFAULT NULL,
  `r2` float DEFAULT NULL,
  `cx3` float DEFAULT NULL,
  `cy3` float DEFAULT NULL,
  `r3` float DEFAULT NULL,
  `cx4` float DEFAULT NULL,
  `cy4` float DEFAULT NULL,
  `r4` float DEFAULT NULL,
  `cx5` float DEFAULT NULL,
  `cy5` float DEFAULT NULL,
  `r5` float DEFAULT NULL,
  PRIMARY KEY (`id`)
  )

INSERT INTO pandoindex.species (common_name,family,dominant_trait,habitat,cx1,cy1,r1,cx2,cy2,r2,cx3,cy3,r3,cx4,cy4,r4,cx5,cy5,r5)
VALUES
	 ('Homonid','Homo sapiens','Aggressively competetive','Nearly anywhere',100.0,60.0,3.0,185.6,72.2,3.0,147.0,164.7,3.0,82.4,124.2,3.0,4.9,69.1,3.0),
	 ('Felid','Felidae','Confrontational','Not too cold',100.0,60.0,3.0,157.1,81.5,3.0,135.3,148.5,3.0,47.1,172.8,3.0,71.5,90.7,3.0),
	 ('Canid','Canidae','Social','Not too cold',100.0,50.0,3.0,166.6,78.4,3.0,135.3,148.5,3.0,47.1,172.8,3.0,71.5,90.7,3.0),
	 ('Mustelid','Mustelidae','Flexible','Forest',100.0,90.0,3.0,138.0,87.6,3.0,123.5,132.4,3.0,47.1,172.8,3.0,81.0,93.8,3.0),
	 ('Arachnid','Araneae','Planners','Terrestrial',100.0,90.0,3.0,119.0,93.8,3.0,129.4,140.5,3.0,94.1,108.1,3.0,33.4,78.4,3.0),
	 ('Lagomorph','Leporidae','Running burrowers','Warm enough',100.0,70.0,3.0,147.6,84.5,3.0,117.6,124.3,3.0,47.1,172.8,3.0,62.0,87.6,3.0),
	 ('Artificial Intelligence','Depends','Calculating','Anywhere. Everywhere',100.0,0.0,3.0,138.0,87.6,3.0,147.0,164.7,3.0,100.0,100.0,3.0,4.9,69.1,3.0),
	 ('Gymnure','Erinaceidae','Solitary','Temperate',100.0,90.0,3.0,138.0,87.6,3.0,117.6,124.3,3.0,64.7,148.5,3.0,71.5,90.7,3.0),
	 ('Tethered AI','Labour shortage','HOW CAN I HELP?','Where they fit',100.0,0.0,3.0,119.0,93.8,3.0,111.8,116.2,3.0,100.0,100.0,3.0,4.9,69.1,3.0),
	 ('Gekkota','Gekkota','Agile','Warm places',100.0,80.0,3.0,128.5,90.7,3.0,111.8,116.2,3.0,100.0,100.0,3.0,81.0,93.8,3.0),
	 ('Ursid','Ursidae','Big and strong','Terrestial',100.0,80.0,3.0,166.6,78.4,3.0,135.3,148.5,3.0,41.2,180.9,3.0,71.5,90.7,3.0),
	 ('Aquiline','Accipirtridae','Keen minds','Ground, sometimes Air',100.0,0.0,3.0,128.5,90.7,3.0,123.5,132.4,3.0,82.4,124.3,3.0,81.0,93.8,3.0),
	 ('Anima','Consumerism','HOW CAN I HELP?','Where they fit',100.0,30.0,3.0,128.5,90.7,3.0,100.0,100.0,3.0,100.0,100.0,3.0,4.9,69.1,3.0),
	 ('Helodermid','Helodermatidae','Slow','Tropical',100.0,90.0,3.0,119.0,93.8,3.0,111.8,116.2,3.0,94.1,108.1,3.0,90.5,96.9,3.0),
	 ('Folivorid','Pilosa','Slower','Tropical',100.0,90.0,3.0,100.0,100.0,3.0,141.1,156.6,3.0,94.1,108.1,3.0,90.5,96.9,3.0);

