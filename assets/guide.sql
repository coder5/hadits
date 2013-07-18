INSERT INTO kitab_all (imam_id, kitab_imam_id, kitab_indonesia, kitab_arab)
SELECT 1,ID_Kitab, Kitab_Indonesia, Kitab_Arab FROM datakitab_ahmad

INSERT INTO kitab_all (imam_id, kitab_imam_id, kitab_indonesia, kitab_arab)
SELECT 4,ID_Kitab, Kitab_Indonesia, Kitab_Arab FROM datakitab_abudaud

INSERT INTO kitab_all (imam_id, kitab_imam_id, kitab_indonesia, kitab_arab)
SELECT 9,ID_Kitab, Kitab_Indonesia, Kitab_Arab FROM datakitab_darimi

INSERT INTO kitab_all (imam_id, kitab_imam_id, kitab_indonesia, kitab_arab)
SELECT 7,ID_Kitab, Kitab_Indonesia, Kitab_Arab FROM datakitab_ibnumajah

INSERT INTO kitab_all (imam_id, kitab_imam_id, kitab_indonesia, kitab_arab)
SELECT 8,ID_Kitab, Kitab_Indonesia, Kitab_Arab FROM datakitab_malik

INSERT INTO kitab_all (imam_id, kitab_imam_id, kitab_indonesia, kitab_arab)
SELECT 3,ID_Kitab, Kitab_Indonesia, Kitab_Arab FROM datakitab_muslim

INSERT INTO kitab_all (imam_id, kitab_imam_id, kitab_indonesia, kitab_arab)
SELECT 6,ID_Kitab, Kitab_Indonesia, Kitab_Arab FROM datakitab_nasai

INSERT INTO kitab_all (imam_id, kitab_imam_id, kitab_indonesia, kitab_arab)
SELECT 5,ID_Kitab, Kitab_Indonesia, Kitab_Arab FROM datakitab_tirmidzi


INSERT INTO bab_all (imam_id, kitab_imam_id, bab_imam_id, bab_indonesia, bab_arab)
SELECT 1,ID_Kitab, ID_Bab, Bab_Indonesia, Bab_Arab FROM databab_ahmad;

INSERT INTO bab_all (imam_id, kitab_imam_id, bab_imam_id, bab_indonesia, bab_arab)
SELECT 2,ID_Kitab, ID_Bab, Bab_Indonesia, Bab_Arab FROM databab_bukhari;

INSERT INTO bab_all (imam_id, kitab_imam_id, bab_imam_id, bab_indonesia, bab_arab)
SELECT 4,ID_Kitab, ID_Bab, Bab_Indonesia, Bab_Arab FROM databab_abudaud;

INSERT INTO bab_all (imam_id, kitab_imam_id, bab_imam_id, bab_indonesia, bab_arab)
SELECT 9,ID_Kitab, ID_Bab, Bab_Indonesia, Bab_Arab FROM databab_darimi;

INSERT INTO bab_all (imam_id, kitab_imam_id, bab_imam_id, bab_indonesia, bab_arab)
SELECT 7,ID_Kitab, ID_Bab, Bab_Indonesia, Bab_Arab FROM databab_ibnumajah;

INSERT INTO bab_all (imam_id, kitab_imam_id, bab_imam_id, bab_indonesia, bab_arab)
SELECT 8,ID_Kitab, ID_Bab, Bab_Indonesia, Bab_Arab FROM databab_malik;

INSERT INTO bab_all (imam_id, kitab_imam_id, bab_imam_id, bab_indonesia, bab_arab)
SELECT 3,ID_Kitab, ID_Bab, Bab_Indonesia, Bab_Arab FROM databab_muslim;

INSERT INTO bab_all (imam_id, kitab_imam_id, bab_imam_id, bab_indonesia, bab_arab)
SELECT 6,ID_Kitab, ID_Bab, Bab_Indonesia, Bab_Arab FROM databab_nasai;

INSERT INTO bab_all (imam_id, kitab_imam_id, bab_imam_id, bab_indonesia, bab_arab)
SELECT 5,ID_Kitab, ID_Bab, Bab_Indonesia, Bab_Arab FROM databab_tirmidzi;

INSERT INTO `hadistdbnew`.`had_all` (`imamId`, `NoHdt`, `Isi_Arab`, `Isi_Indonesia`, `Isi_Arab_Gundul`) 
SELECT 4,`NoHdt`,`Isi_Arab`,`Isi_Indonesia`,`Isi_Arab_Gundul` FROM `had_abudaud`	

INSERT INTO `hadistdbnew`.`had_all` (`imamId`, `NoHdt`, `Isi_Arab`, `Isi_Indonesia`, `Isi_Arab_Gundul`) 
SELECT 1,`NoHdt`,`Isi_Arab`,`Isi_Indonesia`,`Isi_Arab_Gundul` FROM `had_ahmad`	

INSERT INTO `hadistdbnew`.`had_all` (`imamId`, `NoHdt`, `Isi_Arab`, `Isi_Indonesia`, `Isi_Arab_Gundul`) 
SELECT 2,`NoHdt`,`Isi_Arab`,`Isi_Indonesia`,`Isi_Arab_Gundul` FROM `had_bukhari`	

INSERT INTO `hadistdbnew`.`had_all` (`imamId`, `NoHdt`, `Isi_Arab`, `Isi_Indonesia`, `Isi_Arab_Gundul`) 
SELECT 9,`NoHdt`,`Isi_Arab`,`Isi_Indonesia`,`Isi_Arab_Gundul` FROM `had_darimi`	

INSERT INTO `hadistdbnew`.`had_all` (`imamId`, `NoHdt`, `Isi_Arab`, `Isi_Indonesia`, `Isi_Arab_Gundul`) 
SELECT 7,`NoHdt`,`Isi_Arab`,`Isi_Indonesia`,`Isi_Arab_Gundul` FROM `had_ibnumajah`	

INSERT INTO `hadistdbnew`.`had_all` (`imamId`, `NoHdt`, `Isi_Arab`, `Isi_Indonesia`, `Isi_Arab_Gundul`) 
SELECT 8,`NoHdt`,`Isi_Arab`,`Isi_Indonesia`,`Isi_Arab_Gundul` FROM `had_malik`

INSERT INTO `hadistdbnew`.`had_all` (`imamId`, `NoHdt`, `Isi_Arab`, `Isi_Indonesia`, `Isi_Arab_Gundul`) 
SELECT 3,`NoHdt`,`Isi_Arab`,`Isi_Indonesia`,`Isi_Arab_Gundul` FROM `had_muslim`

INSERT INTO `hadistdbnew`.`had_all` (`imamId`, `NoHdt`, `Isi_Arab`, `Isi_Indonesia`, `Isi_Arab_Gundul`) 
SELECT 6,`NoHdt`,`Isi_Arab`,`Isi_Indonesia`,`Isi_Arab_Gundul` FROM `had_nasai`

INSERT INTO `hadistdbnew`.`had_all` (`imamId`, `NoHdt`, `Isi_Arab`, `Isi_Indonesia`, `Isi_Arab_Gundul`) 
SELECT 5,`NoHdt`,`Isi_Arab`,`Isi_Indonesia`,`Isi_Arab_Gundul` FROM `had_tirmidzi`



/* QUERY TEST FOR using LIKE and MATCH in fts*/

SELECT
	a.no_hdt AS no_hdt,tema,isi_indonesia,imam_nama, isi_arab
FROM
	`had_all` a
INNER JOIN imam i ON a.imam_id = i.imam_id
WHERE
	isi_indonesia LIKE '%iblis%'  AND isi_indonesia LIKE '%air%'
ORDER BY
	i.imam_sorting ASC;


SELECT a.no_hdt as no_hdt, tema, isi_indonesia, imam_nama, isi_arab FROM `had_all` a
				INNER JOIN imam i ON a.imam_id = i.imam_id
				WHERE MATCH (isi_indonesia) AGAINST ('+iblis +air' IN BOOLEAN MODE) 
				ORDER BY i.imam_sorting ASC;
				
Creating Fts4


CREATE VIRTUAL  TABLE had_all_fts4 USING fts4(
"had_id"  INTEGER(11) NOT NULL,
"imam_id"  INTEGER(2) NOT NULL,
"no_hdt"  INTEGER(11),
"tema"  TEXT,
"isi_arab"  TEXT,
"isi_indonesia"  TEXT,
"isi_arab_gundul"  TEXT NOT NULL,
"kitab_imam_id"  INTEGER(11) NOT NULL,
"bab_imam_id"  INTEGER(11) NOT NULL
);

INSERT INTO had_all_fts4 SELECT * FROM had_all;

UPDATE had_all h
INNER JOIN imam i ON h.imam_id = i.imam_id
SET h.imam_new_id = i.imam_new_id;

UPDATE imam
SET imam_new_id = imam_sorting;

UPDATE had_all as h INNER JOIN imam i ON h.imam_id = i.imam_id
SET h.imam_new_id = i.imam_new_id;

UPDATE kitab_all as k INNER JOIN imam i ON k.imam_id = i.imam_id
SET k.imam_new_id = i.imam_new_id;

UPDATE bab_all as b INNER JOIN imam i ON b.imam_id = i.imam_id
SET b.imam_new_id = i.imam_new_id;

UPDATE tema_all as t INNER JOIN imam i ON t.imam_id = i.imam_id
SET t.imam_new_id = i.imam_new_id;



CREATE TABLE "imam_test" (
"imam_id"  INTEGER NOT NULL,
"slug"  TEXT(255),
"imam_nama"  TEXT(255),
PRIMARY KEY ("imam_id" ASC, "imam_new_id" ASC)
);


CREATE VIRTUAL TABLE had_all_fts4 USING fts4(
"had_id"  INTEGER(11) NOT NULL,
"imam_id"  INTEGER(2) NOT NULL,
"no_hdt"  INTEGER(11),
"tema"  TEXT,
"isi_arab"  TEXT,
"isi_indonesia"  TEXT,
"isi_arab_gundul"  TEXT NOT NULL,
"kitab_imam_id"  INTEGER(11) NOT NULL,
"bab_imam_id"  INTEGER(11) NOT NULL
);
