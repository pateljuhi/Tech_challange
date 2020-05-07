#question 4.a
SELECT id as Root FROM ResponseSets  WHERE parent_set_id=0;

#question 4.b
SELECT id AS Node, IF(parent_set_id = 0, 'Root', IF(id IN (SELECT parent_set_id FROM responsesets), 'Inner', 'Leaf')) AS Type FROM responsesets ORDER BY id;

#question 4.c
set @setID = 22;

SELECT @setID as Root, GROUP_CONCAT(Level SEPARATOR ',') as Children FROM (
   SELECT @Ids := (SELECT GROUP_CONCAT(id SEPARATOR ',') FROM responsesets  WHERE FIND_IN_SET(parent_set_id, @Ids)) Level
   FROM responsesets 
   JOIN (SELECT @Ids := 22) temp1
) temp2;



