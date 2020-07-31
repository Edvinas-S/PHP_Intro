<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-07-30</title>
</head>
<body>
    <!-- SQL commands for making examples...

        CREATE TABLE test_aggr (
            id INT,
            name VARCHAR(255),
            surname VARCHAR(255),
            salary INT
        );

        INSERT INTO test_aggr 
            (`id`, `name`, `surname`, `salary`)
        VALUES 
            (1, "Mindaugas", "Bern", 500),
            (2, "Jonas", "Kur", 1500),
            (3, "Petras", "Per", 500),
            (4, "Juozas", "Ten", 100);

        --MIN salary
        SELECT min(salary) FROM test_aggr;

        --MIN and MAX salary
        SELECT max(salary), min(salary) FROM test_aggr;

        --SUM of salary
        SELECT sum(salary) FROM test_aggr;

        -- sum(salary) / count(salary) == avg(salary)
        SELECT avg(salary) FROM test_aggr; 

        --no same double value
        SELECT group_concat(name), salary FROM test_aggr 
        GROUP BY salary;

        -- išrinkti unikalias salary reikšmes
        select salary from test_aggr group by salary;

        -- kokie darbuotojai, gauna kažkokį konkretų atlyginimą
        SELECT group_concat(name), salary
        FROM test_aggr 
        GROUP BY salary 
        ORDER BY salary DESC;

        -- Sujungia visas reikšmes stulpelyje, kurios yra ne null, pagal group by sąlygą. Pvz: sujugiame 
            --kiekvienai eilutei vardus ir pavardes (į fullname) ir tada grupuodami sujungiame tuos vardus ir pavardes pagal salary stulpelį.
        SELECT GROUP_CONCAT(CONCAT_WS(" ", name, surname)) as fullname, salary FROM test_aggr GROUP BY salary;
    -->
    <?php

    ?>
</body>
</html>