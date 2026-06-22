use andercode_pokemonfiltro;

select * from tm_pokemon;
where nombre like '%nido%';

select distinct tipo from tm_pokemon;

select * from tm_pokemon 
Where est=1
And tipo in ("Grass", "Fire", "Water")
and nombre like "%bul%"

-- DELETE FROM `andercode_pokemonfiltro`.`tm_pokemon` WHERE (`id` = '172');

update tm_pokemon
set est=1