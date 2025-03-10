<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $video_link = 'footer-video.mp4';
        $video_title = 'Hacienda Catrina es México';
        $video_subtitle = 'Es boutique, es sabor, es descanso, es celebración… Hacienda Catrina es México.';

        return view('index')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function aboutUs()
    {
        $video_link = 'footer-video.mp4';
        $video_title = 'Hacienda Catrina es México';
        $video_subtitle = 'Es boutique, es sabor, es descanso, es celebración… Hacienda Catrina es México.';

        return view('about_us')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function socialClub()
    {
        $video_link = 'footer-video.mp4';
        $video_title = 'Hacienda Catrina es México';
        $video_subtitle = 'Es boutique, es sabor, es descanso, es celebración… Hacienda Catrina es México.';

        return view('social_club')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function gym()
    {
        $video_link = 'footer-video.mp4';
        $video_title = 'Hacienda Catrina es México';
        $video_subtitle = 'Es boutique, es sabor, es descanso, es celebración… Hacienda Catrina es México.';

        return view('gym')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function boutique()
    {
        $video_link = 'footer-boutique.mp4';
        $video_title = 'Hacienda Catrina es México';
        $video_subtitle = 'Es boutique, es sabor, es descanso, es celebración… Hacienda Catrina es México.';

        return view('boutique')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function business()
    {
        $video_link = 'footer-video.mp4';
        $video_title = 'Hacienda Catrina es Negocios';
        $video_subtitle = 'Es boutique, es sabor, es descanso, es celebración… Hacienda Catrina es Negocios.';

        return view('business')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function eventWedding()
    {
        $video_link = 'footer-celeb.mp4';
        $video_title = 'Hacienda Catrina es México';
        $video_subtitle = 'Es boutique, es descanso, es hospitalidad… Hacienda Catrina es Celebración.';

        return view('events')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function eventGeneral()
    {
        $video_link = 'footer-celeb.mp4';
        $video_title = 'Hacienda Catrina es México';
        $video_subtitle = 'Es boutique, es sabor, es descanso, es celebración… Hacienda Catrina es México.';

        return view('events')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function spa()
    {
        /* Hospitalidad */
        $video_link = 'footer-hospi.mp4';
        $video_title = 'Hacienda Catrina es Hospitalidad';
        $video_subtitle = 'Es boutique, es sabor, es descanso, es celebración… Hacienda Catrina es México.';

        return view('spa')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function life()
    {
        $video_link = 'footer-video.mp4';
        $video_title = 'Hacienda Catrina es Origen';
        $video_subtitle = 'Es boutique, es sabor, es descanso, es reconexión… Hacienda Catrina es México.';

        return view('life')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function gastro()
    {
        $video_link = 'footer-video.mp4';
        $video_title = 'Hacienda Catrina es Sabor';
        $video_subtitle = 'Es boutique, es descanso, es celebración... Hacienda Catrina es México.';
        
        return view('gastro')
        ->with('video_link', $video_link)
        ->with('video_title', $video_title)
        ->with('video_subtitle', $video_subtitle);
    }

    public function boutiqueDetail($name)
    {
        switch ($name) {
            case 'master-suite-101':
                $slug = $name;

                $room_name = 'Master Suite 101';
                $description = 'Habitación decorada con un hermoso estilo tradicional mexicano.';
                $capacity = '2';
                $size = '30';

                $content_title = 'Lujo en cada detalle.';
                $content_subtitle = 'estilo clásico mexicano.';

                $main_p = [
                    'Servicio de Lavandería.',
                    'Servicio de cuna (sujeto a previa reserva y disponibilidad)',
                    'Servicio de Alimentos a la habitación.',
                    'Servicio de Pick Up Aeropuerto - Hotel  - Aeropuerto.',
                ];

                $descriptive_p = 'Habitación decorada con un hermoso estilo tradicional mexicano con aire acondicionado. Encontrarás una cómoda cama King Size con sus mesas lámparas de noche, un escritorio con iluminación adicional en el caso de que lo necesites. Sala de televisión con pantalla de 65 pulgadas con sistema SKY, espacioso closet, baño completo con tina y sales de baño, con amenidades de lujo: pantuflas, bata de baño, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor vertical de mano, caja de seguridad, café de cápsula de cortesía y minibar.  Cuenta con una pequeña sala de estar en terraza para disfrutar de la vista del área de la alberca del hotel.';

                $characteristics = [
                    'Cama King Size',
                    'Smart TV 65" con SKY',
                    'Sala de TV',
                    'Tina de baño',
                    'Terraza con sala',
                    'Caja de seguridad',
                    'Amenidades de lujo',
                    'Escritorio',
                    'Nespresso con aeroccino',
                    'Mini Bar',
                    'Aire Acondicionado',
                    'Room Service 24/7',
                ];

                $room_images = [
                    ['img' => 'main_img_1.jpg'],
                    ['img' => 'main_img_2.jpg'],  
                ];

                $gallery = [
                    ['title' => 'Cama King Size', 'img' => 'gallery_1.jpg'],
                    ['title' => 'Sala Smart TV 65"', 'img' => 'gallery_2.jpg'],
                    ['title' => 'Escritorio con iluminación', 'img' => 'gallery_3.jpg'],
                    ['title' => 'Baño completo', 'img' => 'gallery_4.jpg'],
                    ['title' => 'Tina personal con sales de baño.', 'img' => 'gallery_5.jpg'],
                    ['title' => 'Terraza con sala', 'img' => 'gallery_6.jpg'],
                ];

                $video_link = 'Tr0E5K58UbA';

                break;

            case 'master-suite-201':
                $slug = $name;

                $room_name = 'Master Suite 201';
                $description = 'Habitación decorada con un hermoso estilo contemporáneo mexicano.';
                $capacity = '2';
                $size = '30';

                $content_title = 'Una expresión del México contemporáneo.';
                $content_subtitle = 'estilo mexicano en tendencia.';

                $main_p = [
                    'Servicio de Lavandería.',
                    'Servicio de cuna (sujeto a previa reserva y disponibilidad)',
                    'Servicio de Alimentos a la habitación.',
                    'Servicio de Pick Up Aeropuerto - Hotel  - Aeropuerto.',
                ];

                $descriptive_p = 'Habitación decorada con un hermoso estilo contemporáneo mexicano con aire acondicionado. Encontrarás una cómoda cama King Size con sus mesas lámparas de noche, un escritorio con iluminación adicional en el caso de que lo necesites. Sala de televisión con pantalla de 55 pulgadas con sistema SKY, espacioso closet, baño completo con tina y sales de baño, con amenidades de lujo: pantuflas, bata de baño, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor vertical de mano, caja de seguridad, café de cápsula de cortesía y minibar.  Cuenta con una pequeña sala de estar en terraza para disfrutar de la vista del área de la alberca del hotel.';

                $characteristics = [
                    'Cama King Size',
                    'Smart TV 65" con SKY',
                    'Sala de TV',
                    'Tina de baño',
                    'Terraza con sala',
                    'Caja de seguridad',
                    'Amenidades de lujo',
                    'Escritorio',
                    'Nespresso con aeroccino',
                    'Mini Bar',
                    'Aire Acondicionado',
                    'Room Service 24/7',
                ];

                $room_images = [
                    ['img' => 'main_img_1.jpg'],
                    ['img' => 'main_img_2.jpg'],  
                ];

                $gallery = [
                    ['title' => 'Cama King Size', 'img' => 'gallery_1.jpg'],
                    ['title' => 'Terraza de descanso ', 'img' => 'gallery_2.jpg'],
                    ['title' => 'Déjate llevar por la comodidad ', 'img' => 'gallery_3.jpg'],
                    ['title' => 'Cómoda Sala de TV ', 'img' => 'gallery_4.jpg'],
                    ['title' => 'Amenidades de lujo', 'img' => 'gallery_5.jpg'],
                    ['title' => 'Habitación para un magnífico descanso', 'img' => 'gallery_6.jpg'],
                ];

                $video_link = 'kfb8P7rkOa4';

                break;
            
            case 'gran-class-king':
                $slug = $name;

                $room_name = 'Grand Class King';
                $description = 'Habitación decorada con un hermoso estilo contemporáneo mexicano.';
                $capacity = '2-4';
                $size = '30';

                $content_title = 'Diseño e inspiración heredados.';
                $content_subtitle = 'estilo clásico mexicano.';

                $main_p = [
                    'Servicio de Alimentos a la habitación.',
                    'Servicio de Pick Up Aeropuerto - Hotel  - Aeropuerto.',
                ];

                $descriptive_p = 'Habitación decorada con un hermoso estilo tradicional mexicano con aire acondicionado. Encontrarás una cómoda cama King Size, un escritorio de trabajo en el caso de que lo necesites. Pantalla de 55" con sistema SKY, espacioso closet, baño completo con Regadera tipo lluvia. Amenidades de lujo: pantuflas, bata, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor vertical de mano, secadore de cabello, caja de seguridad electrónica, Nespresso y café de cápsula de cortesía, Teléfono con línea directa, Internet inalámbrico, Sistema de llaves electrónicas y servicio de minibar.  Algunas habitaciones cuentan con balcón o una pequeña sala de estar en terraza para disfrutar de la vista a las áreas verdes del hotel.';

                $characteristics = [
                    'Cama King Size',
                    'Smart TV 55" con SKY',
                    'Amenidades de lujo',
                    'Escritorio',
                    'Terraza con sala / Balcón',
                    'Caja de seguridad',
                    'Aire Acondicionado',
                    'Nespresso',
                    'Mini Bar',
                    'Aire Acondicionado',
                    'Room Service 24/7',
                    'Servicio de cuna (sujeto a previa reserva y disponibilidad)',
                    'Servicio de Lavandería'
                ];

                $room_images = [
                    ['img' => 'main_img_1.jpg'],
                    ['img' => 'main_img_2.jpg'],  
                ];

                $gallery = [
                    ['title' => 'Cama King Size', 'img' => 'gallery_1.jpg'],
                    ['title' => 'Cuidamos todos los detalles del confort', 'img' => 'gallery_2.jpg'],
                    ['title' => 'Smart TV 55" con SKY', 'img' => 'gallery_3.jpg'],
                    ['title' => 'Escritorio de trabajo', 'img' => 'gallery_4.jpg'],
                    ['title' => 'Amenidades de lujo', 'img' => 'gallery_5.jpg'],
                    ['title' => 'Terraza con sala / Balcón', 'img' => 'gallery_6.jpg'],
                ];

                $video_link = 'NJ2KPZFjCtE';

                break;
            
            case 'gran-class-double-queen':
                $slug = $name;

                $room_name = 'Grand Double Queen';
                $description = 'Habitación decorada con un hermoso estilo contemporáneo mexicano.';
                $capacity = '2-4';
                $size = '30';

                $content_title = 'Diseño e inspiración heredados';
                $content_subtitle = 'del estilo contemporáneo mexicano';

                $main_p = [
                    'Servicio de Alimentos a la habitación.',
                    'Servicio de Pick Up Aeropuerto - Hotel  - Aeropuerto.',
                ];

                $descriptive_p = 'Habitación decorada con un hermoso estilo mexicano con aire acondicionado. Encontrarás dos cómodas camas Queen Size, un escritorio de trabajo, Pantalla de 55" con sistema SKY,  closet, baño completo con Regadera tipo lluvia. Amenidades de lujo: pantuflas, bata, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor de mano, secadora de cabello, caja de seguridad electrónica, Nespresso y café de cápsula de cortesía. Teléfono con línea directa, Internet inalámbrico, Sistema de llaves electrónicas y servicio de minibar. Algunas habitaciones cuentan con blacón o con una pequeña sala de estar en terraza con vista a la alberca del hotel o hacia jardines y lago, de acuerdo a su configuración. Algunas de estas habitaciones cuentan con sofá cama adicional.';

                $characteristics = [
                    'Doble cama Queen Size',
                    'Smart TV 55" con SKY',
                    'Amenidades de lujo',
                    'Escritorio',
                    'Terraza con sala / Balcón',
                    'Caja de seguridad',
                    'Aire Acondicionado',
                    'Nespresso',
                    'Mini Bar',
                    'Room Service 24/7',
                    'Servicio de cuna (sujeto a previa reserva y disponibilidad)',
                    'Servicio de Lavandería',
                ];

                $room_images = [
                    ['img' => 'main_img_1.jpg'],
                    ['img' => 'main_img_2.jpg'],  
                ];

                $gallery = [
                    ['title' => 'Cómodas camas gemelas Quee Size', 'img' => 'gallery_1.jpg'],
                    ['title' => 'Amenidades de lujo', 'img' => 'gallery_2.jpg'],
                    ['title' => 'Mini Bar a tu servicio ', 'img' => 'gallery_3.jpg'],
                    ['title' => 'Cuidamos cada detalle del confort.', 'img' => 'gallery_4.jpg'],
                    ['title' => 'Smart TV de 55"', 'img' => 'gallery_5.jpg'],
                    ['title' => 'Cómoda terraza o balcón', 'img' => 'gallery_6.jpg'],
                ];

                $video_link = 'Vq-tK8MJR2w';

                break;
            
            case 'villa-catrina':
                $slug = $name;

                $room_name = 'Villa Catrina';
                $description = 'Habitación decorada con un hermoso estilo tradicional mexicano.';
                $capacity = '4-6';
                $size = '30';

                $content_title = 'El corazón del lujo mexicano';
                $content_subtitle = 'estilo clásico mexicano.';

                $main_p = [
                    'Servicio de Lavandería.',
                    'Servicio de cuna (sujeto a previa reserva y disponibilidad)',
                    'Servicio de Alimentos a la habitación.',
                    'Servicio de Pick Up Aeropuerto - Hotel  - Aeropuerto.',
                ];

                $descriptive_p = 'Hermosa casa de campo decorada con un estilo tradicional mexicano totalmente privada. Encontrarás dos recámaras una con cama King Size y baño completo y otra con dos cómodas camas Queen Size con sus mesas lámparas de noche y baño completo. Cuenta con sala de estar con aire acondicionado, pantalla de 55 pulgadas con sistema SKY, comedor completo para 6 personas, wc para invitados, cocineta completa con Nespresso con café de cápsula de cortesía y servicio de minibar. Las habitaciones cuentan con espacio de closets, baño completo con regadera tipo lluvia y exclusivas amenidades de lujo: pantuflas, bata de baño, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor vertical de mano, secadora de cabello, caja de seguridad electrónica. La villa cuenta también con teléfono con línea directa, Internet inalámbrico, Sistema de llaves electrónicas. Cuenta con una amplia terraza con sala de estar, comedor completo con parrilla, alberca y solario con camastros rodeados de un hermoso jardín totalmente privado.';

                $characteristics = [
                    'Cama King Size',
                    'Smart TV 65" con SKY',
                    'Sala de TV',
                    'Tina de baño',
                    'Terraza con sala',
                    'Caja de seguridad',
                    'Amenidades de lujo',
                    'Escritorio',
                    'Nespresso con aeroccino',
                    'Mini Bar',
                    'Aire Acondicionado',
                    'Room Service 24/7',
                ];

                $room_images = [
                    ['img' => 'main_img_1.jpg'],
                    ['img' => 'main_img_2.jpg'],
                    ['img' => 'main_img_3.jpg'],  
                ];

                $gallery = [
                    ['title' => 'Residencia totalmente privada', 'img' => 'gallery_1.jpg'],
                    ['title' => 'Habitación Doble Queen Size', 'img' => 'gallery_2.jpg'],
                    ['title' => 'Sala de TV y Comedor ', 'img' => 'gallery_3.jpg'],
                    ['title' => 'Alberca con camastros privados', 'img' => 'gallery_4.jpg'],
                    ['title' => 'Terraza con asador', 'img' => 'gallery_5.jpg'],
                    ['title' => 'Habitación King Size ', 'img' => 'gallery_6.jpg'],
                ];

                $video_link = 'PDP3Sw4hQJY';

                break;
                
            default:
                return view('boutique');

                break;
        }

        return view('boutique_detail')
        ->with('slug', $slug)
        ->with('room_name', $room_name)
        ->with('description', $description)
        ->with('capacity', $capacity)
        ->with('size', $size)
        ->with('content_title', $content_title)
        ->with('content_subtitle', $content_subtitle)
        ->with('main_p', $main_p)
        ->with('descriptive_p', $descriptive_p)
        ->with('characteristics', $characteristics)
        ->with('room_images', $room_images)
        ->with('gallery', $gallery)
        ->with('video_link', $video_link);
    }

    public function terms()
    {
        $text = 'Terminos y Condiciones';

        return view('legal')->with('text', $text);
    }

    public function privacy()
    {
        $text = 'Aviso de Privacidad';
        
        return view('legal')->with('text', $text);
    }

    public function cookies()
    {
        $text = 'Uso de Cookies';

        return view('legal')->with('text', $text);
    }
}
