<?php

class Model_Portfolio extends Model
{
    public function get_yslugi()
    {
        $conn = $this -> connectBD();
        $sel = $conn -> query("SELECT * FROM yslygi");
        $numrows=$sel->num_rows;
             $x=0;
        while($x<$numrows) {
            $data[]=$sel->fetch_assoc();
            $x++;
        }
        //var_dump($data);
        return $data;
        
    }
    
    public function yslygi()
    {
        $yslyga = $_POST['yslyga'];
        $cena = $_POST['cena'];
        $conn = $this -> connectBD();
        $sel = $conn -> query("SELECT * FROM yslygi WHERE id = '$id'");
        $data=$sel->fetch_assoc();
        return $data;
    }
	public function get_data()
	{	
                // Здесь мы просто сэмулируем реальные данные.
		return array(
			
			array(
				'yslyga' => '2012',
				'Site' => 'http://DunkelBeer.ru',
				'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'
			),

			array(
				'yslyga' => '2012',
				'Site' => 'http://ZopoMobile.ru',
				'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
			),

			array(
				'yslyga' => '2012',
				'Site' => 'http://GeekWear.ru',
				'Description' => 'Интернет-магазин брендовой одежды для гиков.'
			),

			array(
				'yslyga' => '2011',
				'Site' => 'http://РоналВарвар.рф',
				'Description' => 'Промо-сайт мультфильма "Ронал-варвар" от норвежских режиссеров. Мультфильм о самом нетипичном варваре на Земле, переполненный интересными приключениями и забавными ситуациями.'
			),

			array(
				'yslyga' => '2011',
				'Site' => 'http://TompsonTatoo.ru',
				'Description' => 'Персональный сайт-блог художника-татуировщика Алексея Томпсона из Санкт-Петербурга.'
			),

			array(
				'yslyga' => '2011',
				'Site' => 'http://DaftState.ru',
				'Description' => 'Страничка музыкальных и сануд продюсеров из команды "DaftState", работающих в стилях BreakBeat и BigBeat.'
			),

			array(
				'yslyga' => '2011',
				'Site' => 'http://TiltPeople.ru',
				'Description' => 'Сайт сообщества фотографов в стиле Tilt Shif.'
			),

			array(
				'yslyga' => '2011',
				'Site' => 'http://AbsurdGames.ru',
				'Description' => 'Страничка российской команды разработчиков независимых игр с необычной физикой и сюрреалистической графикой.'
			),

		);
	}

}
