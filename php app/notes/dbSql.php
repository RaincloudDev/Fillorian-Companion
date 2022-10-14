<!--created table inside DB "pie_chart"-->

create table MagicianFood(
    id int(3) not null PRIMARY KEY AUTO_INCREMENT,
    foodName varchar(10) not null,
	foodFlavorText varchar(50) not null,
    foodBuff varchar(6) not null,
	foodBuffStat varchar(8) not null,
	foodDebuff varchar(6) not NULL,
    foodDebuffStat varchar(8) not null
);

<!--insert new item, basic sql-->
<!--use "n/A" to fill empty fields for now.-->

INSERT INTO `magicianfood`(`foodName`, `foodFlavorText`, `foodBuff`, `foodBuffStat`, `foodDebuff`, `foodDebuffStat`) VALUES ('Cat Food','\"The kitties will never know! ..Until I open it..\"','+1d4','AnmlHndl','n/A','n/A');

INSERT INTO `magicianfood`(`foodName`, `foodFlavorText`, `foodBuff`, `foodBuffStat`, `foodDebuff`, `foodDebuffStat`) VALUES ('Soggy Burnt Fries','\"It had been raining for days when my cat found these under the tent..\"','+1d8','HP','-1d6','Con');