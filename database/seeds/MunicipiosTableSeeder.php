<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipios = [
            [ 'estado_id' => 1, 'municipio'=> 'Alto Orinoco' ],
            [ 'estado_id' => 1, 'municipio'=> 'Atabapo' ],
            [ 'estado_id' => 1, 'municipio'=> 'Atures' ],
            [ 'estado_id' => 1, 'municipio'=> 'Autana' ],
            [ 'estado_id' => 1, 'municipio'=> 'Manapiare' ],
            [ 'estado_id' => 1, 'municipio'=> 'Maroa' ],
            [ 'estado_id' => 1, 'municipio'=> 'Río Negro' ],
            [ 'estado_id' => 2, 'municipio'=> 'Anaco' ],
            [ 'estado_id' => 2, 'municipio'=> 'Aragua' ],
            [ 'estado_id' => 2, 'municipio'=> 'Manuel Ezequiel Bruzual' ],
            [ 'estado_id' => 2, 'municipio'=> 'Diego Bautista Urbaneja' ],
            [ 'estado_id' => 2, 'municipio'=> 'Fernando Peñalver' ],
            [ 'estado_id' => 2, 'municipio'=> 'Francisco Del Carmen Carvajal' ],
            [ 'estado_id' => 2, 'municipio'=> 'General Sir Arthur McGregor' ],
            [ 'estado_id' => 2, 'municipio'=> 'Guanta' ],
            [ 'estado_id' => 2, 'municipio'=> 'Independencia' ],
            [ 'estado_id' => 2, 'municipio'=> 'José Gregorio Monagas' ],
            [ 'estado_id' => 2, 'municipio'=> 'Juan Antonio Sotillo' ],
            [ 'estado_id' => 2, 'municipio'=> 'Juan Manuel Cajigal' ],
            [ 'estado_id' => 2, 'municipio'=> 'Libertad' ],
            [ 'estado_id' => 2, 'municipio'=> 'Francisco de Miranda' ],
            [ 'estado_id' => 2, 'municipio'=> 'Pedro María Freites' ],
            [ 'estado_id' => 2, 'municipio'=> 'Píritu' ],
            [ 'estado_id' => 2, 'municipio'=> 'San José de Guanipa' ],
            [ 'estado_id' => 2, 'municipio'=> 'San Juan de Capistrano' ],
            [ 'estado_id' => 2, 'municipio'=> 'Santa Ana' ],
            [ 'estado_id' => 2, 'municipio'=> 'Simón Bolívar' ],
            [ 'estado_id' => 2, 'municipio'=> 'Simón Rodríguez' ],
            [ 'estado_id' => 3, 'municipio'=> 'Achaguas' ],
            [ 'estado_id' => 3, 'municipio'=> 'Biruaca' ],
            [ 'estado_id' => 3, 'municipio'=> 'Muñóz' ],
            [ 'estado_id' => 3, 'municipio'=> 'Páez' ],
            [ 'estado_id' => 3, 'municipio'=> 'Pedro Camejo' ],
            [ 'estado_id' => 3, 'municipio'=> 'Rómulo Gallegos' ],
            [ 'estado_id' => 3, 'municipio'=> 'San Fernando' ],
            [ 'estado_id' => 4, 'municipio'=> 'Atanasio Girardot' ],
            [ 'estado_id' => 4, 'municipio'=> 'Bolívar' ],
            [ 'estado_id' => 4, 'municipio'=> 'Camatagua' ],
            [ 'estado_id' => 4, 'municipio'=> 'Francisco Linares Alcántara' ],
            [ 'estado_id' => 4, 'municipio'=> 'José Ángel Lamas' ],
            [ 'estado_id' => 4, 'municipio'=> 'José Félix Ribas' ],
            [ 'estado_id' => 4, 'municipio'=> 'José Rafael Revenga' ],
            [ 'estado_id' => 4, 'municipio'=> 'Libertador' ],
            [ 'estado_id' => 4, 'municipio'=> 'Mario Briceño Iragorry' ],
            [ 'estado_id' => 4, 'municipio'=> 'Ocumare de la Costa de Oro' ],
            [ 'estado_id' => 4, 'municipio'=> 'San Casimiro' ],
            [ 'estado_id' => 4, 'municipio'=> 'San Sebastián' ],
            [ 'estado_id' => 4, 'municipio'=> 'Santiago Mariño' ],
            [ 'estado_id' => 4, 'municipio'=> 'Santos Michelena' ],
            [ 'estado_id' => 4, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 4, 'municipio'=> 'Tovar' ],
            [ 'estado_id' => 4, 'municipio'=> 'Urdaneta' ],
            [ 'estado_id' => 4, 'municipio'=> 'Zamora' ],
            [ 'estado_id' => 5, 'municipio'=> 'Alberto Arvelo Torrealba' ],
            [ 'estado_id' => 5, 'municipio'=> 'Andrés Eloy Blanco' ],
            [ 'estado_id' => 5, 'municipio'=> 'Antonio José de Sucre' ],
            [ 'estado_id' => 5, 'municipio'=> 'Arismendi' ],
            [ 'estado_id' => 5, 'municipio'=> 'Barinas' ],
            [ 'estado_id' => 5, 'municipio'=> 'Bolívar' ],
            [ 'estado_id' => 5, 'municipio'=> 'Cruz Paredes' ],
            [ 'estado_id' => 5, 'municipio'=> 'Ezequiel Zamora' ],
            [ 'estado_id' => 5, 'municipio'=> 'Obispos' ],
            [ 'estado_id' => 5, 'municipio'=> 'Pedraza' ],
            [ 'estado_id' => 5, 'municipio'=> 'Rojas' ],
            [ 'estado_id' => 5, 'municipio'=> 'Sosa' ],
            [ 'estado_id' => 6, 'municipio'=> 'Caroní' ],
            [ 'estado_id' => 6, 'municipio'=> 'Cedeño' ],
            [ 'estado_id' => 6, 'municipio'=> 'El Callao' ],
            [ 'estado_id' => 6, 'municipio'=> 'Gran Sabana' ],
            [ 'estado_id' => 6, 'municipio'=> 'Heres' ],
            [ 'estado_id' => 6, 'municipio'=> 'Piar' ],
            [ 'estado_id' => 6, 'municipio'=> 'Angostura (Raúl Leoni)' ],
            [ 'estado_id' => 6, 'municipio'=> 'Roscio' ],
            [ 'estado_id' => 6, 'municipio'=> 'Sifontes' ],
            [ 'estado_id' => 6, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 6, 'municipio'=> 'Padre Pedro Chien' ],
            [ 'estado_id' => 7, 'municipio'=> 'Bejuma' ],
            [ 'estado_id' => 7, 'municipio'=> 'Carlos Arvelo' ],
            [ 'estado_id' => 7, 'municipio'=> 'Diego Ibarra' ],
            [ 'estado_id' => 7, 'municipio'=> 'Guacara' ],
            [ 'estado_id' => 7, 'municipio'=> 'Juan José Mora' ],
            [ 'estado_id' => 7, 'municipio'=> 'Libertador' ],
            [ 'estado_id' => 7, 'municipio'=> 'Los Guayos' ],
            [ 'estado_id' => 7, 'municipio'=> 'Miranda' ],
            [ 'estado_id' => 7, 'municipio'=> 'Montalbán' ],
            [ 'estado_id' => 7, 'municipio'=> 'Naguanagua' ],
            [ 'estado_id' => 7, 'municipio'=> 'Puerto Cabello' ],
            [ 'estado_id' => 7, 'municipio'=> 'San Diego' ],
            [ 'estado_id' => 7, 'municipio'=> 'San Joaquín' ],
            [ 'estado_id' => 7, 'municipio'=> 'Valencia' ],
            [ 'estado_id' => 8, 'municipio'=> 'Anzoátegui' ],
            [ 'estado_id' => 8, 'municipio'=> 'Tinaquillo' ],
            [ 'estado_id' => 8, 'municipio'=> 'Girardot' ],
            [ 'estado_id' => 8, 'municipio'=> 'Lima Blanco' ],
            [ 'estado_id' => 8, 'municipio'=> 'Pao de San Juan Bautista' ],
            [ 'estado_id' => 8, 'municipio'=> 'Ricaurte' ],
            [ 'estado_id' => 8, 'municipio'=> 'Rómulo Gallegos' ],
            [ 'estado_id' => 8, 'municipio'=> 'San Carlos' ],
            [ 'estado_id' => 8, 'municipio'=> 'Tinaco' ],
            [ 'estado_id' => 9, 'municipio'=> 'Antonio Díaz' ],
            [ 'estado_id' => 9, 'municipio'=> 'Casacoima' ],
            [ 'estado_id' => 9, 'municipio'=> 'Pedernales' ],
            [ 'estado_id' => 9, 'municipio'=> 'Tucupita' ],
            [ 'estado_id' => 10, 'municipio'=> 'Acosta' ],
            [ 'estado_id' => 10, 'municipio'=> 'Bolívar' ],
            [ 'estado_id' => 10, 'municipio'=> 'Buchivacoa' ],
            [ 'estado_id' => 10, 'municipio'=> 'Cacique Manaure' ],
            [ 'estado_id' => 10, 'municipio'=> 'Carirubana' ],
            [ 'estado_id' => 10, 'municipio'=> 'Colina' ],
            [ 'estado_id' => 10, 'municipio'=> 'Dabajuro' ],
            [ 'estado_id' => 10, 'municipio'=> 'Democracia' ],
            [ 'estado_id' => 10, 'municipio'=> 'Falcón' ],
            [ 'estado_id' => 10, 'municipio'=> 'Federación' ],
            [ 'estado_id' => 10, 'municipio'=> 'Jacura' ],
            [ 'estado_id' => 10, 'municipio'=> 'José Laurencio Silva' ],
            [ 'estado_id' => 10, 'municipio'=> 'Los Taques' ],
            [ 'estado_id' => 10, 'municipio'=> 'Mauroa' ],
            [ 'estado_id' => 10, 'municipio'=> 'Miranda' ],
            [ 'estado_id' => 10, 'municipio'=> 'Monseñor Iturriza' ],
            [ 'estado_id' => 10, 'municipio'=> 'Palmasola' ],
            [ 'estado_id' => 10, 'municipio'=> 'Petit' ],
            [ 'estado_id' => 10, 'municipio'=> 'Píritu' ],
            [ 'estado_id' => 10, 'municipio'=> 'San Francisco' ],
            [ 'estado_id' => 10, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 10, 'municipio'=> 'Tocópero' ],
            [ 'estado_id' => 10, 'municipio'=> 'Unión' ],
            [ 'estado_id' => 10, 'municipio'=> 'Urumaco' ],
            [ 'estado_id' => 10, 'municipio'=> 'Zamora' ],
            [ 'estado_id' => 11, 'municipio'=> 'Camaguán' ],
            [ 'estado_id' => 11, 'municipio'=> 'Chaguaramas' ],
            [ 'estado_id' => 11, 'municipio'=> 'El Socorro' ],
            [ 'estado_id' => 11, 'municipio'=> 'José Félix Ribas' ],
            [ 'estado_id' => 11, 'municipio'=> 'José Tadeo Monagas' ],
            [ 'estado_id' => 11, 'municipio'=> 'Juan Germán Roscio' ],
            [ 'estado_id' => 11, 'municipio'=> 'Julián Mellado' ],
            [ 'estado_id' => 11, 'municipio'=> 'Las Mercedes' ],
            [ 'estado_id' => 11, 'municipio'=> 'Leonardo Infante' ],
            [ 'estado_id' => 11, 'municipio'=> 'Pedro Zaraza' ],
            [ 'estado_id' => 11, 'municipio'=> 'Ortíz' ],
            [ 'estado_id' => 11, 'municipio'=> 'San Gerónimo de Guayabal' ],
            [ 'estado_id' => 11, 'municipio'=> 'San José de Guaribe' ],
            [ 'estado_id' => 11, 'municipio'=> 'Santa María de Ipire' ],
            [ 'estado_id' => 11, 'municipio'=> 'Sebastián Francisco de Miranda' ],
            [ 'estado_id' => 12, 'municipio'=> 'Andrés Eloy Blanco' ],
            [ 'estado_id' => 12, 'municipio'=> 'Crespo' ],
            [ 'estado_id' => 12, 'municipio'=> 'Iribarren' ],
            [ 'estado_id' => 12, 'municipio'=> 'Jiménez' ],
            [ 'estado_id' => 12, 'municipio'=> 'Morán' ],
            [ 'estado_id' => 12, 'municipio'=> 'Palavecino' ],
            [ 'estado_id' => 12, 'municipio'=> 'Simón Planas' ],
            [ 'estado_id' => 12, 'municipio'=> 'Torres' ],
            [ 'estado_id' => 12, 'municipio'=> 'Urdaneta' ],
            [ 'estado_id' => 13, 'municipio'=> 'Alberto Adriani' ],
            [ 'estado_id' => 13, 'municipio'=> 'Andrés Bello' ],
            [ 'estado_id' => 13, 'municipio'=> 'Antonio Pinto Salinas' ],
            [ 'estado_id' => 13, 'municipio'=> 'Aricagua' ],
            [ 'estado_id' => 13, 'municipio'=> 'Arzobispo Chacón' ],
            [ 'estado_id' => 13, 'municipio'=> 'Campo Elías' ],
            [ 'estado_id' => 13, 'municipio'=> 'Caracciolo Parra Olmedo' ],
            [ 'estado_id' => 13, 'municipio'=> 'Cardenal Quintero' ],
            [ 'estado_id' => 13, 'municipio'=> 'Guaraque' ],
            [ 'estado_id' => 13, 'municipio'=> 'Julio César Salas' ],
            [ 'estado_id' => 13, 'municipio'=> 'Justo Briceño' ],
            [ 'estado_id' => 13, 'municipio'=> 'Libertador' ],
            [ 'estado_id' => 13, 'municipio'=> 'Miranda' ],
            [ 'estado_id' => 13, 'municipio'=> 'Obispo Ramos de Lora' ],
            [ 'estado_id' => 13, 'municipio'=> 'Padre Noguera' ],
            [ 'estado_id' => 13, 'municipio'=> 'Pueblo Llano' ],
            [ 'estado_id' => 13, 'municipio'=> 'Rangel' ],
            [ 'estado_id' => 13, 'municipio'=> 'Rivas Dávila' ],
            [ 'estado_id' => 13, 'municipio'=> 'Santos Marquina' ],
            [ 'estado_id' => 13, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 13, 'municipio'=> 'Tovar' ],
            [ 'estado_id' => 13, 'municipio'=> 'Tulio Febres Cordero' ],
            [ 'estado_id' => 13, 'municipio'=> 'Zea' ],
            [ 'estado_id' => 14, 'municipio'=> 'Acevedo' ],
            [ 'estado_id' => 14, 'municipio'=> 'Andrés Bello' ],
            [ 'estado_id' => 14, 'municipio'=> 'Baruta' ],
            [ 'estado_id' => 14, 'municipio'=> 'Brión' ],
            [ 'estado_id' => 14, 'municipio'=> 'Buroz' ],
            [ 'estado_id' => 14, 'municipio'=> 'Carrizal' ],
            [ 'estado_id' => 14, 'municipio'=> 'Chacao' ],
            [ 'estado_id' => 14, 'municipio'=> 'Cristóbal Rojas' ],
            [ 'estado_id' => 14, 'municipio'=> 'El Hatillo' ],
            [ 'estado_id' => 14, 'municipio'=> 'Guaicaipuro' ],
            [ 'estado_id' => 14, 'municipio'=> 'Independencia' ],
            [ 'estado_id' => 14, 'municipio'=> 'Lander' ],
            [ 'estado_id' => 14, 'municipio'=> 'Los Salias' ],
            [ 'estado_id' => 14, 'municipio'=> 'Páez' ],
            [ 'estado_id' => 14, 'municipio'=> 'Paz Castillo' ],
            [ 'estado_id' => 14, 'municipio'=> 'Pedro Gual' ],
            [ 'estado_id' => 14, 'municipio'=> 'Plaza' ],
            [ 'estado_id' => 14, 'municipio'=> 'Simón Bolívar' ],
            [ 'estado_id' => 14, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 14, 'municipio'=> 'Urdaneta' ],
            [ 'estado_id' => 14, 'municipio'=> 'Zamora' ],
            [ 'estado_id' => 15, 'municipio'=> 'Acosta' ],
            [ 'estado_id' => 15, 'municipio'=> 'Aguasay' ],
            [ 'estado_id' => 15, 'municipio'=> 'Bolívar' ],
            [ 'estado_id' => 15, 'municipio'=> 'Caripe' ],
            [ 'estado_id' => 15, 'municipio'=> 'Cedeño' ],
            [ 'estado_id' => 15, 'municipio'=> 'Ezequiel Zamora' ],
            [ 'estado_id' => 15, 'municipio'=> 'Libertador' ],
            [ 'estado_id' => 15, 'municipio'=> 'Maturín' ],
            [ 'estado_id' => 15, 'municipio'=> 'Piar' ],
            [ 'estado_id' => 15, 'municipio'=> 'Punceres' ],
            [ 'estado_id' => 15, 'municipio'=> 'Santa Bárbara' ],
            [ 'estado_id' => 15, 'municipio'=> 'Sotillo' ],
            [ 'estado_id' => 15, 'municipio'=> 'Uracoa' ],
            [ 'estado_id' => 16, 'municipio'=> 'Antolín del Campo' ],
            [ 'estado_id' => 16, 'municipio'=> 'Arismendi' ],
            [ 'estado_id' => 16, 'municipio'=> 'García' ],
            [ 'estado_id' => 16, 'municipio'=> 'Gómez' ],
            [ 'estado_id' => 16, 'municipio'=> 'Maneiro' ],
            [ 'estado_id' => 16, 'municipio'=> 'Marcano' ],
            [ 'estado_id' => 16, 'municipio'=> 'Mariño' ],
            [ 'estado_id' => 16, 'municipio'=> 'Península de Macanao' ],
            [ 'estado_id' => 16, 'municipio'=> 'Tubores' ],
            [ 'estado_id' => 16, 'municipio'=> 'Villalba' ],
            [ 'estado_id' => 16, 'municipio'=> 'Díaz' ],
            [ 'estado_id' => 17, 'municipio'=> 'Agua Blanca' ],
            [ 'estado_id' => 17, 'municipio'=> 'Araure' ],
            [ 'estado_id' => 17, 'municipio'=> 'Esteller' ],
            [ 'estado_id' => 17, 'municipio'=> 'Guanare' ],
            [ 'estado_id' => 17, 'municipio'=> 'Guanarito' ],
            [ 'estado_id' => 17, 'municipio'=> 'Monseñor José Vicente de Unda' ],
            [ 'estado_id' => 17, 'municipio'=> 'Ospino' ],
            [ 'estado_id' => 17, 'municipio'=> 'Páez' ],
            [ 'estado_id' => 17, 'municipio'=> 'Papelón' ],
            [ 'estado_id' => 17, 'municipio'=> 'San Genaro de Boconoíto' ],
            [ 'estado_id' => 17, 'municipio'=> 'San Rafael de Onoto' ],
            [ 'estado_id' => 17, 'municipio'=> 'Santa Rosalía' ],
            [ 'estado_id' => 17, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 17, 'municipio'=> 'Turén' ],
            [ 'estado_id' => 18, 'municipio'=> 'Andrés Eloy Blanco' ],
            [ 'estado_id' => 18, 'municipio'=> 'Andrés Mata' ],
            [ 'estado_id' => 18, 'municipio'=> 'Arismendi' ],
            [ 'estado_id' => 18, 'municipio'=> 'Benítez' ],
            [ 'estado_id' => 18, 'municipio'=> 'Bermúdez' ],
            [ 'estado_id' => 18, 'municipio'=> 'Bolívar' ],
            [ 'estado_id' => 18, 'municipio'=> 'Cajigal' ],
            [ 'estado_id' => 18, 'municipio'=> 'Cruz Salmerón Acosta' ],
            [ 'estado_id' => 18, 'municipio'=> 'Libertador' ],
            [ 'estado_id' => 18, 'municipio'=> 'Mariño' ],
            [ 'estado_id' => 18, 'municipio'=> 'Mejía' ],
            [ 'estado_id' => 18, 'municipio'=> 'Montes' ],
            [ 'estado_id' => 18, 'municipio'=> 'Ribero' ],
            [ 'estado_id' => 18, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 18, 'municipio'=> 'Valdéz' ],
            [ 'estado_id' => 19, 'municipio'=> 'Andrés Bello' ],
            [ 'estado_id' => 19, 'municipio'=> 'Antonio Rómulo Costa' ],
            [ 'estado_id' => 19, 'municipio'=> 'Ayacucho' ],
            [ 'estado_id' => 19, 'municipio'=> 'Bolívar' ],
            [ 'estado_id' => 19, 'municipio'=> 'Cárdenas' ],
            [ 'estado_id' => 19, 'municipio'=> 'Córdoba' ],
            [ 'estado_id' => 19, 'municipio'=> 'Fernández Feo' ],
            [ 'estado_id' => 19, 'municipio'=> 'Francisco de Miranda' ],
            [ 'estado_id' => 19, 'municipio'=> 'García de Hevia' ],
            [ 'estado_id' => 19, 'municipio'=> 'Guásimos' ],
            [ 'estado_id' => 19, 'municipio'=> 'Independencia' ],
            [ 'estado_id' => 19, 'municipio'=> 'Jáuregui' ],
            [ 'estado_id' => 19, 'municipio'=> 'José María Vargas' ],
            [ 'estado_id' => 19, 'municipio'=> 'Junín' ],
            [ 'estado_id' => 19, 'municipio'=> 'Libertad' ],
            [ 'estado_id' => 19, 'municipio'=> 'Libertador' ],
            [ 'estado_id' => 19, 'municipio'=> 'Lobatera' ],
            [ 'estado_id' => 19, 'municipio'=> 'Michelena' ],
            [ 'estado_id' => 19, 'municipio'=> 'Panamericano' ],
            [ 'estado_id' => 19, 'municipio'=> 'Pedro María Ureña' ],
            [ 'estado_id' => 19, 'municipio'=> 'Rafael Urdaneta' ],
            [ 'estado_id' => 19, 'municipio'=> 'Samuel Darío Maldonado' ],
            [ 'estado_id' => 19, 'municipio'=> 'San Cristóbal' ],
            [ 'estado_id' => 19, 'municipio'=> 'Seboruco' ],
            [ 'estado_id' => 19, 'municipio'=> 'Simón Rodríguez' ],
            [ 'estado_id' => 19, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 19, 'municipio'=> 'Torbes' ],
            [ 'estado_id' => 19, 'municipio'=> 'Uribante' ],
            [ 'estado_id' => 19, 'municipio'=> 'San Judas Tadeo' ],
            [ 'estado_id' => 20, 'municipio'=> 'Andrés Bello' ],
            [ 'estado_id' => 20, 'municipio'=> 'Boconó' ],
            [ 'estado_id' => 20, 'municipio'=> 'Bolívar' ],
            [ 'estado_id' => 20, 'municipio'=> 'Candelaria' ],
            [ 'estado_id' => 20, 'municipio'=> 'Carache' ],
            [ 'estado_id' => 20, 'municipio'=> 'Escuque' ],
            [ 'estado_id' => 20, 'municipio'=> 'José Felipe Márquez Cañizalez' ],
            [ 'estado_id' => 20, 'municipio'=> 'Juan Vicente Campos Elías' ],
            [ 'estado_id' => 20, 'municipio'=> 'La Ceiba' ],
            [ 'estado_id' => 20, 'municipio'=> 'Miranda' ],
            [ 'estado_id' => 20, 'municipio'=> 'Monte Carmelo' ],
            [ 'estado_id' => 20, 'municipio'=> 'Motatán' ],
            [ 'estado_id' => 20, 'municipio'=> 'Pampán' ],
            [ 'estado_id' => 20, 'municipio'=> 'Pampanito' ],
            [ 'estado_id' => 20, 'municipio'=> 'Rafael Rangel' ],
            [ 'estado_id' => 20, 'municipio'=> 'San Rafael de Carvajal' ],
            [ 'estado_id' => 20, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 20, 'municipio'=> 'Trujillo' ],
            [ 'estado_id' => 20, 'municipio'=> 'Urdaneta' ],
            [ 'estado_id' => 20, 'municipio'=> 'Valera' ],
            [ 'estado_id' => 21, 'municipio'=> 'Vargas' ],
            [ 'estado_id' => 22, 'municipio'=> 'Arístides Bastidas' ],
            [ 'estado_id' => 22, 'municipio'=> 'Bolívar' ],
            [ 'estado_id' => 22, 'municipio'=> 'Bruzual' ],
            [ 'estado_id' => 22, 'municipio'=> 'Cocorote' ],
            [ 'estado_id' => 22, 'municipio'=> 'Independencia' ],
            [ 'estado_id' => 22, 'municipio'=> 'José Antonio Páez' ],
            [ 'estado_id' => 22, 'municipio'=> 'La Trinidad' ],
            [ 'estado_id' => 22, 'municipio'=> 'Manuel Monge' ],
            [ 'estado_id' => 22, 'municipio'=> 'Nirgua' ],
            [ 'estado_id' => 22, 'municipio'=> 'Peña' ],
            [ 'estado_id' => 22, 'municipio'=> 'San Felipe' ],
            [ 'estado_id' => 22, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 22, 'municipio'=> 'Urachiche' ],
            [ 'estado_id' => 22, 'municipio'=> 'José Joaquín Veroes' ],
            [ 'estado_id' => 23, 'municipio'=> 'Almirante Padilla' ],
            [ 'estado_id' => 23, 'municipio'=> 'Baralt' ],
            [ 'estado_id' => 23, 'municipio'=> 'Cabimas' ],
            [ 'estado_id' => 23, 'municipio'=> 'Catatumbo' ],
            [ 'estado_id' => 23, 'municipio'=> 'Colón' ],
            [ 'estado_id' => 23, 'municipio'=> 'Francisco Javier Pulgar' ],
            [ 'estado_id' => 23, 'municipio'=> 'Páez' ],
            [ 'estado_id' => 23, 'municipio'=> 'Jesús Enrique Losada' ],
            [ 'estado_id' => 23, 'municipio'=> 'Jesús María Semprún' ],
            [ 'estado_id' => 23, 'municipio'=> 'La Cañada de Urdaneta' ],
            [ 'estado_id' => 23, 'municipio'=> 'Lagunillas' ],
            [ 'estado_id' => 23, 'municipio'=> 'Machiques de Perijá' ],
            [ 'estado_id' => 23, 'municipio'=> 'Mara' ],
            [ 'estado_id' => 23, 'municipio'=> 'Maracaibo' ],
            [ 'estado_id' => 23, 'municipio'=> 'Miranda' ],
            [ 'estado_id' => 23, 'municipio'=> 'Rosario de Perijá' ],
            [ 'estado_id' => 23, 'municipio'=> 'San Francisco' ],
            [ 'estado_id' => 23, 'municipio'=> 'Santa Rita' ],
            [ 'estado_id' => 23, 'municipio'=> 'Simón Bolívar' ],
            [ 'estado_id' => 23, 'municipio'=> 'Sucre' ],
            [ 'estado_id' => 23, 'municipio'=> 'Valmore Rodríguez' ],
            [ 'estado_id' => 24, 'municipio'=> 'Libertador' ],
        ];

        foreach ($municipios as $row) {
            App\Municipio::create($row);
        }
    }
}
