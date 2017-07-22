<?php

/* Родительский контроллер для всех страниц пользовательской части
 * запросы будет обрабатывать дочерний контроллер
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller{

   /* свойство для хранения объекта класса PortfolioRepository,
    * класс для хранения логики по работе с портфолио
    */
   protected $p_rep;

   /* свойство для хранения объекта класса SliderRepository,
    * класс для хранения логики по работе со слайером
    */
   protected $s_rep;

   /* свойство для хранения объекта класса ArticleRepository,
    * класс для хранения логики по работе с статьями блога
    */
   protected $a_rep;

   /* свойство для хранения объекта класса MenuRepository,
    * класс для хранения логики по работе с пунктами меню
    */
   protected $m_rep;

   /* свойство для хранения имени шаблона
    * для отображения инф. на конкретной странице
    */
   protected $template;

   /* Массив передаваемых переменных в шаблон*/
   protected $vars = array();

   /* Свойство будет показывать значение
    * что есть определённый саидбар
    * false указывает что на стр. сайдбара нет
    */
   protected $bar = false;

   /*Свой-тва для правого ил евого сайдбара, если они есть на стр*/
   protected $contentRightBar = false;
   protected $contentLeftBar = false;

   /*Будем определять значние некоторых свойств*/
   public function __construct(){

   }
   /* Метод будет возвращать конкретный вид*/
   protected function renderOutput(){
      return view($this->template)->with($this->vars);
   }

}
