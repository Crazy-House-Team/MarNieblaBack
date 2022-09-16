<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Competencies;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create(['name' => 'alumno1', 'email' => 'alumno1@alumno1.com','isAdmin'=>false]);
        User::factory()->create(['name' => 'alumno2', 'email' => 'alumno2@alumno2.com','isAdmin'=>false]);
        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com','isAdmin'=>true]);

        Competencies::factory()->create(['subject'=>'Matemáticas']);
        Competencies::factory()->create(['subject'=>'Lengua']);
        Competencies::factory()->create(['subject'=>'Inglés']);
        
        Question::factory()->create(["question"=>"En una guarder\u00eda el 50% de los alumnos tiene bicicleta. Entre los alumnos que tienen bicicleta, el 30% tiene patines. \u00bfQu\u00e9 porcentaje de alumnos tiene bicicleta y patines?", "answer_a"=>"20%", "answer_b"=>"25%", "answer_c"=>"5%", "answer_d"=>"15%", "competencies_id"=>2, "right_answer"=>"a"]);
        Question::factory()->create(["question"=>"Cuatro personas unieron sus capitales para iniciar un negocio, aportando el 15%, 20%, 25% y 40%, respectivamente del monto total. Si el menor de los aportes fue de 9 millones de pesos, \u00bfCu\u00e1l fue el mayor aporte?", "answer_a"=>"10. 5 millones", "answer_b"=>"12 millones", "answer_c"=>"28 millones", "answer_d"=>"24 millones", "competencies_id"=>2, "right_answer"=>"b"]);
        Question::factory()->create(["question"=>"Un equipo de sonido cuesta al contado en una tienda de electrodom\u00e9sticos 18.000 de entrada y 20 cuotas mensuales, de $4.495. \u00bfEn qu\u00e9 porcentaje aumenta el dinero desembolsado seg\u00fan esta segunda opci\u00f3n?", "answer_a"=>"12,01%", "answer_b"=>"34,46%", "answer_c"=>"20,02%", "answer_d"=>"16,28%", "competencies_id"=>2, "right_answer"=>"a"]);
        Question::factory()->create(["question"=>"Un env\u00edo contiene 120 cajas de libros con 12 paquetes de media docena de libros cada paquete. \u00bfCu\u00e1ntas decenas de libros contiene el env\u00edo?", "answer_a"=>"864", "answer_b"=>"72", "answer_c"=>"144", "answer_d"=>"24", "competencies_id"=>2, "right_answer"=>"d"]);
        Question::factory()->create(["question"=>"Los balones de f\u00fatbol y de baloncesto de una escuela deportiva suman 40 en total. Se sabe que hay 2 balones de baloncesto por cada 3 balones de f\u00fatbol. \u00bfCu\u00e1ntos hay de cada uno?", "answer_a"=>"24 de baloncesto y 16 de f\u00fatbol", "answer_b"=>"5 de baloncesto y 35 de f\u00fatbol", "answer_c"=>"80 de baloncesto y 120 de f\u00fatbol", "answer_d"=>"16 de baloncesto y 24 de f\u00fatbol", "competencies_id"=>2, "right_answer"=>"c"]);
        Question::factory()->create(["question"=>"Cuatro pintores de brocha gorda pintan una casa en 6 d\u00edas. \u00bfCu\u00e1ntos d\u00edas demorar\u00e1n 12 pintores en pintar la misma casa, si mantienen ese ritmo?", "answer_a"=>"2 d\u00edas", "answer_b"=>"4 d\u00edas", "answer_c"=>"12 d\u00edas", "answer_d"=>"6 d\u00eda", "competencies_id"=>2, "right_answer"=>"b"]);
        Question::factory()->create(["question"=>"Si p es mayor que 3 y p es un factor de 18, de 24 y de 36, \u00bfcu\u00e1l de los siguientes n\u00fameros es un posible valor de p?", "answer_a"=>"6", "answer_b"=>"36", "answer_c"=>"12", "answer_d"=>"18", "competencies_id"=>2, "right_answer"=>"d"]);
        Question::factory()->create(["question"=>"Contin\u00fae la secuencia=> 2 10 12 16 17 18 19, de acuerdo con el an\u00e1lisis que realice de la misma, se concluye que=>", "answer_a"=>"20", "answer_b"=>"310", "answer_c"=>"200", "answer_d"=>"190", "competencies_id"=>2, "right_answer"=>"a"]);
        Question::factory()->create(["question"=>"Daniel tiene tres juguetes electr\u00f3nicos. El primero suena cada 10 minutos, el segundo cada 20 minutos y el tercero cada 30 minutos. Si todos los juguetes suenan juntos a las 9=>00 a.m. \u00bfa qu\u00e9 hora vuelven a sonar los juguetes juntos?", "answer_a"=>"10=>00 p.m.", "answer_b"=>"9=>30 a.m.", "answer_c"=>"11=>00 a.m.", "answer_d"=>"10=>00 a.m.", "competencies_id"=>2, "right_answer"=>"c"]);
        Question::factory()->create(["question"=>"Dos ciudades A y B est\u00e1n separadas por una distancia de 540 km. De A sale hacia B un ciclista a 30 km/h, y justo al mismo tiempo, de B sale hacia A otro ciclista con una velocidad doble que el anterior. \u00bfEn qu\u00e9 punto kilom\u00e9trico (contando de A a B) se juntan?", "answer_a"=>"240", "answer_b"=>"210", "answer_c"=>"180", "answer_d"=>"150", "competencies_id"=>2, "right_answer"=>"c"]);

        Question::factory()->create(["question"=>"En una guarder\u00eda el 50% de los alumnos tiene bicicleta. Entre los alumnos que tienen bicicleta, el 30% tiene patines. \u00bfQu\u00e9 porcentaje de alumnos tiene bicicleta y patines?", "answer_a"=>"20%", "answer_b"=>"25%", "answer_c"=>"5%", "answer_d"=>"15%", "competencies_id"=>1, "right_answer"=>"a"]);
        Question::factory()->create(["question"=>"Cuatro personas unieron sus capitales para iniciar un negocio, aportando el 15%, 20%, 25% y 40%, respectivamente del monto total. Si el menor de los aportes fue de 9 millones de pesos, \u00bfCu\u00e1l fue el mayor aporte?", "answer_a"=>"10. 5 millones", "answer_b"=>"12 millones", "answer_c"=>"28 millones", "answer_d"=>"24 millones", "competencies_id"=>1, "right_answer"=>"b"]);
        Question::factory()->create(["question"=>"Un equipo de sonido cuesta al contado en una tienda de electrodom\u00e9sticos 18.000 de entrada y 20 cuotas mensuales, de $4.495. \u00bfEn qu\u00e9 porcentaje aumenta el dinero desembolsado seg\u00fan esta segunda opci\u00f3n?", "answer_a"=>"12,01%", "answer_b"=>"34,46%", "answer_c"=>"20,02%", "answer_d"=>"16,28%", "competencies_id"=>1, "right_answer"=>"a"]);
        Question::factory()->create(["question"=>"Un env\u00edo contiene 120 cajas de libros con 12 paquetes de media docena de libros cada paquete. \u00bfCu\u00e1ntas decenas de libros contiene el env\u00edo?", "answer_a"=>"864", "answer_b"=>"72", "answer_c"=>"144", "answer_d"=>"24", "competencies_id"=>1, "right_answer"=>"d"]);
        Question::factory()->create(["question"=>"Los balones de f\u00fatbol y de baloncesto de una escuela deportiva suman 40 en total. Se sabe que hay 2 balones de baloncesto por cada 3 balones de f\u00fatbol. \u00bfCu\u00e1ntos hay de cada uno?", "answer_a"=>"24 de baloncesto y 16 de f\u00fatbol", "answer_b"=>"5 de baloncesto y 35 de f\u00fatbol", "answer_c"=>"80 de baloncesto y 120 de f\u00fatbol", "answer_d"=>"16 de baloncesto y 24 de f\u00fatbol", "competencies_id"=>1, "right_answer"=>"c"]);
        Question::factory()->create(["question"=>"Cuatro pintores de brocha gorda pintan una casa en 6 d\u00edas. \u00bfCu\u00e1ntos d\u00edas demorar\u00e1n 12 pintores en pintar la misma casa, si mantienen ese ritmo?", "answer_a"=>"2 d\u00edas", "answer_b"=>"4 d\u00edas", "answer_c"=>"12 d\u00edas", "answer_d"=>"6 d\u00eda", "competencies_id"=>1, "right_answer"=>"b"]);
        Question::factory()->create(["question"=>"Si p es mayor que 3 y p es un factor de 18, de 24 y de 36, \u00bfcu\u00e1l de los siguientes n\u00fameros es un posible valor de p?", "answer_a"=>"6", "answer_b"=>"36", "answer_c"=>"12", "answer_d"=>"18", "competencies_id"=>1, "right_answer"=>"d"]);
        Question::factory()->create(["question"=>"Contin\u00fae la secuencia=> 2 10 12 16 17 18 19, de acuerdo con el an\u00e1lisis que realice de la misma, se concluye que=>", "answer_a"=>"20", "answer_b"=>"310", "answer_c"=>"200", "answer_d"=>"190", "competencies_id"=>1, "right_answer"=>"a"]);
        Question::factory()->create(["question"=>"Daniel tiene tres juguetes electr\u00f3nicos. El primero suena cada 10 minutos, el segundo cada 20 minutos y el tercero cada 30 minutos. Si todos los juguetes suenan juntos a las 9=>00 a.m. \u00bfa qu\u00e9 hora vuelven a sonar los juguetes juntos?", "answer_a"=>"10=>00 p.m.", "answer_b"=>"9=>30 a.m.", "answer_c"=>"11=>00 a.m.", "answer_d"=>"10=>00 a.m.", "competencies_id"=>1, "right_answer"=>"c"]);
        Question::factory()->create(["question"=>"Dos ciudades A y B est\u00e1n separadas por una distancia de 540 km. De A sale hacia B un ciclista a 30 km/h, y justo al mismo tiempo, de B sale hacia A otro ciclista con una velocidad doble que el anterior. \u00bfEn qu\u00e9 punto kilom\u00e9trico (contando de A a B) se juntan?", "answer_a"=>"240", "answer_b"=>"210", "answer_c"=>"180", "answer_d"=>"150", "competencies_id"=>1, "right_answer"=>"c"]);

        Question::factory()->create(["question"=>"En una guarder\u00eda el 50% de los alumnos tiene bicicleta. Entre los alumnos que tienen bicicleta, el 30% tiene patines. \u00bfQu\u00e9 porcentaje de alumnos tiene bicicleta y patines?", "answer_a"=>"20%", "answer_b"=>"25%", "answer_c"=>"5%", "answer_d"=>"15%", "competencies_id"=>3, "right_answer"=>"a"]);
        Question::factory()->create(["question"=>"Cuatro personas unieron sus capitales para iniciar un negocio, aportando el 15%, 20%, 25% y 40%, respectivamente del monto total. Si el menor de los aportes fue de 9 millones de pesos, \u00bfCu\u00e1l fue el mayor aporte?", "answer_a"=>"10. 5 millones", "answer_b"=>"12 millones", "answer_c"=>"28 millones", "answer_d"=>"24 millones", "competencies_id"=>3, "right_answer"=>"b"]);
        Question::factory()->create(["question"=>"Un equipo de sonido cuesta al contado en una tienda de electrodom\u00e9sticos 18.000 de entrada y 20 cuotas mensuales, de $4.495. \u00bfEn qu\u00e9 porcentaje aumenta el dinero desembolsado seg\u00fan esta segunda opci\u00f3n?", "answer_a"=>"12,01%", "answer_b"=>"34,46%", "answer_c"=>"20,02%", "answer_d"=>"16,28%", "competencies_id"=>3, "right_answer"=>"a"]);
        Question::factory()->create(["question"=>"Un env\u00edo contiene 120 cajas de libros con 12 paquetes de media docena de libros cada paquete. \u00bfCu\u00e1ntas decenas de libros contiene el env\u00edo?", "answer_a"=>"864", "answer_b"=>"72", "answer_c"=>"144", "answer_d"=>"24", "competencies_id"=>3, "right_answer"=>"d"]);
        Question::factory()->create(["question"=>"Los balones de f\u00fatbol y de baloncesto de una escuela deportiva suman 40 en total. Se sabe que hay 2 balones de baloncesto por cada 3 balones de f\u00fatbol. \u00bfCu\u00e1ntos hay de cada uno?", "answer_a"=>"24 de baloncesto y 16 de f\u00fatbol", "answer_b"=>"5 de baloncesto y 35 de f\u00fatbol", "answer_c"=>"80 de baloncesto y 120 de f\u00fatbol", "answer_d"=>"16 de baloncesto y 24 de f\u00fatbol", "competencies_id"=>3, "right_answer"=>"c"]);
        Question::factory()->create(["question"=>"Cuatro pintores de brocha gorda pintan una casa en 6 d\u00edas. \u00bfCu\u00e1ntos d\u00edas demorar\u00e1n 12 pintores en pintar la misma casa, si mantienen ese ritmo?", "answer_a"=>"2 d\u00edas", "answer_b"=>"4 d\u00edas", "answer_c"=>"12 d\u00edas", "answer_d"=>"6 d\u00eda", "competencies_id"=>3, "right_answer"=>"b"]);
        Question::factory()->create(["question"=>"Si p es mayor que 3 y p es un factor de 18, de 24 y de 36, \u00bfcu\u00e1l de los siguientes n\u00fameros es un posible valor de p?", "answer_a"=>"6", "answer_b"=>"36", "answer_c"=>"12", "answer_d"=>"18", "competencies_id"=>3, "right_answer"=>"d"]);
        Question::factory()->create(["question"=>"Contin\u00fae la secuencia=> 2 10 12 16 17 18 19, de acuerdo con el an\u00e1lisis que realice de la misma, se concluye que=>", "answer_a"=>"20", "answer_b"=>"310", "answer_c"=>"200", "answer_d"=>"190", "competencies_id"=>3, "right_answer"=>"a"]);
        Question::factory()->create(["question"=>"Daniel tiene tres juguetes electr\u00f3nicos. El primero suena cada 10 minutos, el segundo cada 20 minutos y el tercero cada 30 minutos. Si todos los juguetes suenan juntos a las 9=>00 a.m. \u00bfa qu\u00e9 hora vuelven a sonar los juguetes juntos?", "answer_a"=>"10=>00 p.m.", "answer_b"=>"9=>30 a.m.", "answer_c"=>"11=>00 a.m.", "answer_d"=>"10=>00 a.m.", "competencies_id"=>3, "right_answer"=>"c"]);
        Question::factory()->create(["question"=>"Dos ciudades A y B est\u00e1n separadas por una distancia de 540 km. De A sale hacia B un ciclista a 30 km/h, y justo al mismo tiempo, de B sale hacia A otro ciclista con una velocidad doble que el anterior. \u00bfEn qu\u00e9 punto kilom\u00e9trico (contando de A a B) se juntan?", "answer_a"=>"240", "answer_b"=>"210", "answer_c"=>"180", "answer_d"=>"150", "competencies_id"=>3, "right_answer"=>"c"]);

    }
}
