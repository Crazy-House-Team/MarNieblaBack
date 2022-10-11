<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Competencies;
use App\Models\Exam;
use App\Models\ExamsHasQuestion;
use App\Models\Question;
use App\Models\User;
use App\Models\UsersAnswer;
use App\Models\TemporalExam;
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
        User::factory()->create(['name' => 'alumno1', 'username' => 'alumno1','isAdmin'=>false]);
        User::factory()->create(['name' => 'alumno2', 'username' => 'alumno2','isAdmin'=>false]);
        User::factory()->create(['name' => 'admin', 'username' => 'admin','isAdmin'=>true]);

        Competencies::factory()->create(['subject'=>'Matemáticas']);
        Competencies::factory()->create(['subject'=>'Lengua']);
        Competencies::factory()->create(['subject'=>'Inglés']);

        Question::factory()->create(["question"=>"En una guardería el 50% de los alumnos tiene bicicleta. Entre los alumnos que tienen bicicleta, el 30% tiene patines. ¿Qué porcentaje de alumnos tiene bicicleta y patines?", "answer_a"=>"20%", "answer_b"=>"25%", "answer_c"=>"5%", "answer_d"=>"15%", "competencies_id"=>2, "right_answer"=>"A"]);
        Question::factory()->create(["question"=>"Cuatro personas unieron sus capitales para iniciar un negocio, aportando el 15%, 20%, 25% y 40%, respectivamente del monto total. Si el menor de los aportes fue de 9 millones de pesos, ¿Cuál fue el mayor aporte?", "answer_a"=>"10. 5 millones", "answer_b"=>"12 millones", "answer_c"=>"28 millones", "answer_d"=>"24 millones", "competencies_id"=>2, "right_answer"=>"B"]);
        Question::factory()->create(["question"=>"Un equipo de sonido cuesta al contado en una tienda de electrodomésticos 18.000 de entrada y 20 cuotas mensuales, de $4.495. ¿En qué porcentaje aumenta el dinero desembolsado según esta segunda opción?", "answer_a"=>"12,01%", "answer_b"=>"34,46%", "answer_c"=>"20,02%", "answer_d"=>"16,28%", "competencies_id"=>2, "right_answer"=>"A"]);
        Question::factory()->create(["question"=>"Un envío contiene 120 cajas de libros con 12 paquetes de media docena de libros cada paquete. ¿Cuántas decenas de libros contiene el envío?", "answer_a"=>"864", "answer_b"=>"72", "answer_c"=>"144", "answer_d"=>"24", "competencies_id"=>2, "right_answer"=>"D"]);
        Question::factory()->create(["question"=>"Los balones de fútbol y de baloncesto de una escuela deportiva suman 40 en total. Se sabe que hay 2 balones de baloncesto por cada 3 balones de fútbol. ¿Cuántos hay de cada uno?", "answer_a"=>"24 de baloncesto y 16 de fútbol", "answer_b"=>"5 de baloncesto y 35 de fútbol", "answer_c"=>"80 de baloncesto y 120 de fútbol", "answer_d"=>"16 de baloncesto y 24 de fútbol", "competencies_id"=>2, "right_answer"=>"C"]);
        Question::factory()->create(["question"=>"Cuatro pintores de brocha gorda pintan una casa en 6 días. ¿Cuántos días demorarán 12 pintores en pintar la misma casa, si mantienen ese ritmo?", "answer_a"=>"2 días", "answer_b"=>"4 días", "answer_c"=>"12 días", "answer_d"=>"6 día", "competencies_id"=>2, "right_answer"=>"B"]);
        Question::factory()->create(["question"=>"Si p es mayor que 3 y p es un factor de 18, de 24 y de 36, ¿cuál de los siguientes números es un posible valor de p?", "answer_a"=>"6", "answer_b"=>"36", "answer_c"=>"12", "answer_d"=>"18", "competencies_id"=>2, "right_answer"=>"D"]);
        Question::factory()->create(["question"=>"Continúe la secuencia=> 2 10 12 16 17 18 19, de acuerdo con el análisis que realice de la misma, se concluye que=>", "answer_a"=>"20", "answer_b"=>"310", "answer_c"=>"200", "answer_d"=>"190", "competencies_id"=>2, "right_answer"=>"A"]);
        Question::factory()->create(["question"=>"Daniel tiene tres juguetes electrónicos. El primero suena cada 10 minutos, el segundo cada 20 minutos y el tercero cada 30 minutos. Si todos los juguetes suenan juntos a las 9=>00 a.m. ¿a qué hora vuelven a sonar los juguetes juntos?", "answer_a"=>"10=>00 p.m.", "answer_b"=>"9=>30 a.m.", "answer_c"=>"11=>00 a.m.", "answer_d"=>"10=>00 a.m.", "competencies_id"=>2, "right_answer"=>"C"]);
        Question::factory()->create(["question"=>"Dos ciudades A y B están separadas por una distancia de 540 km. De A sale hacia B un ciclista a 30 km/h, y justo al mismo tiempo, de B sale hacia A otro ciclista con una velocidad doble que el anterior. ¿En qué punto kilométrico (contando de A a B) se juntan?", "answer_a"=>"240", "answer_b"=>"210", "answer_c"=>"180", "answer_d"=>"150", "competencies_id"=>2, "right_answer"=>"C"]);
        
        Question::factory()->create(["question"=>"En una guardería el 50% de los alumnos tiene bicicleta. Entre los alumnos que tienen bicicleta, el 30% tiene patines. ¿Qué porcentaje de alumnos tiene bicicleta y patines?", "answer_a"=>"20%", "answer_b"=>"25%", "answer_c"=>"5%", "answer_d"=>"15%", "competencies_id"=>2, "right_answer"=>"A"]);
        Question::factory()->create(["question"=>"Cuatro personas unieron sus capitales para iniciar un negocio, aportando el 15%, 20%, 25% y 40%, respectivamente del monto total. Si el menor de los aportes fue de 9 millones de pesos, ¿Cuál fue el mayor aporte?", "answer_a"=>"10. 5 millones", "answer_b"=>"12 millones", "answer_c"=>"28 millones", "answer_d"=>"24 millones", "competencies_id"=>2, "right_answer"=>"B"]);
        Question::factory()->create(["question"=>"Un equipo de sonido cuesta al contado en una tienda de electrodomésticos 18.000 de entrada y 20 cuotas mensuales, de $4.495. ¿En qué porcentaje aumenta el dinero desembolsado según esta segunda opción?", "answer_a"=>"12,01%", "answer_b"=>"34,46%", "answer_c"=>"20,02%", "answer_d"=>"16,28%", "competencies_id"=>2, "right_answer"=>"A"]);
        Question::factory()->create(["question"=>"Un envío contiene 120 cajas de libros con 12 paquetes de media docena de libros cada paquete. ¿Cuántas decenas de libros contiene el envío?", "answer_a"=>"864", "answer_b"=>"72", "answer_c"=>"144", "answer_d"=>"24", "competencies_id"=>2, "right_answer"=>"D"]);
        Question::factory()->create(["question"=>"Los balones de fútbol y de baloncesto de una escuela deportiva suman 40 en total. Se sabe que hay 2 balones de baloncesto por cada 3 balones de fútbol. ¿Cuántos hay de cada uno?", "answer_a"=>"24 de baloncesto y 16 de fútbol", "answer_b"=>"5 de baloncesto y 35 de fútbol", "answer_c"=>"80 de baloncesto y 120 de fútbol", "answer_d"=>"16 de baloncesto y 24 de fútbol", "competencies_id"=>2, "right_answer"=>"C"]);
        Question::factory()->create(["question"=>"Cuatro pintores de brocha gorda pintan una casa en 6 días. ¿Cuántos días demorarán 12 pintores en pintar la misma casa, si mantienen ese ritmo?", "answer_a"=>"2 días", "answer_b"=>"4 días", "answer_c"=>"12 días", "answer_d"=>"6 día", "competencies_id"=>2, "right_answer"=>"B"]);
        Question::factory()->create(["question"=>"Si p es mayor que 3 y p es un factor de 18, de 24 y de 36, ¿cuál de los siguientes números es un posible valor de p?", "answer_a"=>"6", "answer_b"=>"36", "answer_c"=>"12", "answer_d"=>"18", "competencies_id"=>2, "right_answer"=>"D"]);
        Question::factory()->create(["question"=>"Continúe la secuencia=> 2 10 12 16 17 18 19, de acuerdo con el análisis que realice de la misma, se concluye que=>", "answer_a"=>"20", "answer_b"=>"310", "answer_c"=>"200", "answer_d"=>"190", "competencies_id"=>2, "right_answer"=>"A"]);
        Question::factory()->create(["question"=>"Daniel tiene tres juguetes electrónicos. El primero suena cada 10 minutos, el segundo cada 20 minutos y el tercero cada 30 minutos. Si todos los juguetes suenan juntos a las 9=>00 a.m. ¿a qué hora vuelven a sonar los juguetes juntos?", "answer_a"=>"10=>00 p.m.", "answer_b"=>"9=>30 a.m.", "answer_c"=>"11=>00 a.m.", "answer_d"=>"10=>00 a.m.", "competencies_id"=>2, "right_answer"=>"C"]);
        Question::factory()->create(["question"=>"Dos ciudades A y B están separadas por una distancia de 540 km. De A sale hacia B un ciclista a 30 km/h, y justo al mismo tiempo, de B sale hacia A otro ciclista con una velocidad doble que el anterior. ¿En qué punto kilométrico (contando de A a B) se juntan?", "answer_a"=>"240", "answer_b"=>"210", "answer_c"=>"180", "answer_d"=>"150", "competencies_id"=>2, "right_answer"=>"C"]);
        
        Question::factory()->create(["question"=>"En una guardería el 50% de los alumnos tiene bicicleta. Entre los alumnos que tienen bicicleta, el 30% tiene patines. ¿Qué porcentaje de alumnos tiene bicicleta y patines?", "answer_a"=>"20%", "answer_b"=>"25%", "answer_c"=>"5%", "answer_d"=>"15%", "competencies_id"=>2, "right_answer"=>"A"]);
        Question::factory()->create(["question"=>"Cuatro personas unieron sus capitales para iniciar un negocio, aportando el 15%, 20%, 25% y 40%, respectivamente del monto total. Si el menor de los aportes fue de 9 millones de pesos, ¿Cuál fue el mayor aporte?", "answer_a"=>"10. 5 millones", "answer_b"=>"12 millones", "answer_c"=>"28 millones", "answer_d"=>"24 millones", "competencies_id"=>2, "right_answer"=>"B"]);
        Question::factory()->create(["question"=>"Un equipo de sonido cuesta al contado en una tienda de electrodomésticos 18.000 de entrada y 20 cuotas mensuales, de $4.495. ¿En qué porcentaje aumenta el dinero desembolsado según esta segunda opción?", "answer_a"=>"12,01%", "answer_b"=>"34,46%", "answer_c"=>"20,02%", "answer_d"=>"16,28%", "competencies_id"=>2, "right_answer"=>"A"]);
        Question::factory()->create(["question"=>"Un envío contiene 120 cajas de libros con 12 paquetes de media docena de libros cada paquete. ¿Cuántas decenas de libros contiene el envío?", "answer_a"=>"864", "answer_b"=>"72", "answer_c"=>"144", "answer_d"=>"24", "competencies_id"=>2, "right_answer"=>"D"]);
        Question::factory()->create(["question"=>"Los balones de fútbol y de baloncesto de una escuela deportiva suman 40 en total. Se sabe que hay 2 balones de baloncesto por cada 3 balones de fútbol. ¿Cuántos hay de cada uno?", "answer_a"=>"24 de baloncesto y 16 de fútbol", "answer_b"=>"5 de baloncesto y 35 de fútbol", "answer_c"=>"80 de baloncesto y 120 de fútbol", "answer_d"=>"16 de baloncesto y 24 de fútbol", "competencies_id"=>2, "right_answer"=>"C"]);
        Question::factory()->create(["question"=>"Cuatro pintores de brocha gorda pintan una casa en 6 días. ¿Cuántos días demorarán 12 pintores en pintar la misma casa, si mantienen ese ritmo?", "answer_a"=>"2 días", "answer_b"=>"4 días", "answer_c"=>"12 días", "answer_d"=>"6 día", "competencies_id"=>2, "right_answer"=>"B"]);
        Question::factory()->create(["question"=>"Si p es mayor que 3 y p es un factor de 18, de 24 y de 36, ¿cuál de los siguientes números es un posible valor de p?", "answer_a"=>"6", "answer_b"=>"36", "answer_c"=>"12", "answer_d"=>"18", "competencies_id"=>2, "right_answer"=>"D"]);
        Question::factory()->create(["question"=>"Continúe la secuencia=> 2 10 12 16 17 18 19, de acuerdo con el análisis que realice de la misma, se concluye que=>", "answer_a"=>"20", "answer_b"=>"310", "answer_c"=>"200", "answer_d"=>"190", "competencies_id"=>2, "right_answer"=>"A"]);
        Question::factory()->create(["question"=>"Daniel tiene tres juguetes electrónicos. El primero suena cada 10 minutos, el segundo cada 20 minutos y el tercero cada 30 minutos. Si todos los juguetes suenan juntos a las 9=>00 a.m. ¿a qué hora vuelven a sonar los juguetes juntos?", "answer_a"=>"10=>00 p.m.", "answer_b"=>"9=>30 a.m.", "answer_c"=>"11=>00 a.m.", "answer_d"=>"10=>00 a.m.", "competencies_id"=>2, "right_answer"=>"C"]);
        Question::factory()->create(["question"=>"Dos ciudades A y B están separadas por una distancia de 540 km. De A sale hacia B un ciclista a 30 km/h, y justo al mismo tiempo, de B sale hacia A otro ciclista con una velocidad doble que el anterior. ¿En qué punto kilométrico (contando de A a B) se juntan?", "answer_a"=>"240", "answer_b"=>"210", "answer_c"=>"180", "answer_d"=>"150", "competencies_id"=>2, "right_answer"=>"C"]);

        Exam::factory()->create(["name"=>"Test 1","status"=>true]);
        
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>1]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>3]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>5]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>7]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>9]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>11]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>13]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>15]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>17]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>19]);

        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>2]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>4]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>6]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>8]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>10]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>12]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>14]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>16]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>18]);
        ExamsHasQuestion::factory()->create(["exam_id"=>1,"question_id"=>20]);
        
        UsersAnswer::factory()->create(["date"=>"2022-09-05","user_id"=>1,"right_answer"=>14,"id_exam"=>1]);
        UsersAnswer::factory()->create(["date"=>"2022-09-05","user_id"=>2,"right_answer"=>18,"id_exam"=>0]);
        UsersAnswer::factory()->create(["date"=>"2022-09-15","user_id"=>1,"right_answer"=>20,"id_exam"=>0]);
        UsersAnswer::factory()->create(["date"=>"2022-09-15","user_id"=>1,"right_answer"=>14,"id_exam"=>0]);
        UsersAnswer::factory()->create(["date"=>"2022-09-19","user_id"=>1,"right_answer"=>13,"id_exam"=>3]);
        UsersAnswer::factory()->create(["date"=>"2022-09-20","user_id"=>2,"right_answer"=>10,"id_exam"=>5]);
        UsersAnswer::factory()->create(["date"=>"2022-09-20","user_id"=>2,"right_answer"=>18,"id_exam"=>7]);
        UsersAnswer::factory()->create(["date"=>"2022-09-22","user_id"=>1,"right_answer"=>20,"id_exam"=>2]);
        UsersAnswer::factory()->create(["date"=>"2022-09-22","user_id"=>2,"right_answer"=>12,"id_exam"=>0]);
        UsersAnswer::factory()->create(["date"=>"2022-09-25","user_id"=>2,"right_answer"=>3,"id_exam"=>0]);
        UsersAnswer::factory()->create(["date"=>"2022-09-25","user_id"=>1,"right_answer"=>9,"id_exam"=>0]);

        TemporalExam::factory()->create(["exam_id"=>1,"question_id"=>1]);

    }
}
