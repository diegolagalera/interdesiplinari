<?php
use Illuminate\Database\Seeder;
use App\productes;
class ProductesTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      productes::create([
        'nom'=>'Shampoo & body wash',
        'preu'=>6.00,
        'descripcio'=>'Sin alérgenos ni parabenos, el Shampoo & body wash BABY FashionKids Professional contiene dos elementos activos que aportan hidratación y favorecen la eliminación de la costra láctea',
        'caracteristiques'=>'El aceite de almendras dulces: Se utiliza desde hace milenios para mejorar la apariencia y el estado general de la piel, especialmente en casos de sequedad, deshidratación o escamación. Posee propiedades emolientes y suavizantes, ayuda a relajar y desinflamar los tejidos, es óptimo para aplicar en pieles muy sensibles como la de los bebés.
El azuleno: Tiiene propiedades antialérgicas, calmantes y reparadoras de los tejidos de la piel. Es especialmente aconsejado en el tratamiento de hipersensibilidades.
Ayuda a suavizar la dermis y eliminar rojeces, reforzando la barrera cutánea y las defensas naturales de la piel especial para bebés.',
        'imatge'=>'http://127.0.0.1:8000/images/1525362939.png',
      ]);
      productes::create([
        'nom'=>'Shampoo for children piruleta de cereza.',
        'preu'=>6.00,
        'descripcio'=>'El champú Piruleta de Cereza de FashionKids Professional tiene un aroma divertido y es alegre como nuestros niños. Además, posee FILTRO SOLAR.',
        'caracteristiques'=>'El extracto de cerezas: Posee propiedades hidratantes, protectoras y ligeramente exfoliantes, ayuda a limpiar en profundidad el cabello, revitalizándolo y aportándole luminosidad.',
        'imatge'=>'http://127.0.0.1:8000/images/1525363013.png',
      ]);
      productes::create([
        'nom'=>'Instant Conditioner for children',
        'preu'=>7.50,
        'descripcio'=>'El Instant conditioner for children de FashionKids Professional es un acondicionador sin aclarado de textura muy fresca y fluida que puede usarse diariamente.',
        'caracteristiques'=>'El extracto de algodón: Los carbohidratos de las semillas del algodón tienen la capacidad de absorber y retener el agua, actuando como una sustancia humectante, mejorando notablemente las propiedades biomecánicas del pelo. Las proteínas ofrecen adicionalmente un efecto tensor, acondicionando y aumentando la flexibilidad del cabello.
La dimeticona: Se utiliza como factor lubricante y emoliente del cabello, que combinado con el extracto de algodón, ayuda a crear una película alrededor del cabello, ayudándolo a aumentar su elasticidad, reparándolo y disminuyendo el riesgo de rotura.',
        'imatge'=>'http://127.0.0.1:8000/images/1525363118.png',
      ]);
      productes::create([
        'nom'=>'Hair Mask for children con extracto de cacao y aceite de argán',
        'preu'=>7.00,
        'descripcio'=>'La mascarilla FashionKids Professional con extracto de cacao y aceite de argán .Con un agradable aroma a chocolate aporta al cabello hidratación profunda.',
        'caracteristiques'=>'El extracto de cacao: Se obtiene a partir de los frutos del árbol del cacao. Es fuente importante de antioxidantes polifenólicos que protegen el cabello frente a los procesos oxidativos.
El aceite de argán: Proviene de las semillas del árbol Argania spinosa, crece en zonas desérticas con una vitalidad muy particular, sus raíces ayudan a la filtración del agua, protegiendo a los suelos de la erosión.',
        'imatge'=>'http://127.0.0.1:8000/images/1525363181.png',
      ]);
      productes::create([
        'nom'=>'Hair Mask for children al aceite del árbol del té y almendras dulces',
        'preu'=>7.00,
        'descripcio'=>'La mascarilla con aroma a fresa FashionKids Professional al aceite del árbol del té y almendras dulces, deja el cabello muy manejable e hidratado.',
        'caracteristiques'=>'El aceite del árbol del té: Se obtiene de la destilación en alambique de las hojas del árbol Melaleuca Alternifolia. Reconocido por sus cualidades antisépticas y de prevención frente a los piojos, es además regulador de las glándulas sebáceas, de utilización tanto en cabellos grasos como secos.
El aceite de almendras dulces: Extraído por presión de la semilla del almendra,  para mejorar la apariencia y el estado general de la piel, especialmente en casos de sequedad y deshidratación. Aplicado en cabellos quebradizos, produce efectos reconstituyentes.',
        'imatge'=>'http://127.0.0.1:8000/images/1525363238.png',
      ]);
      productes::create([
        'nom'=>'Cera de peinado',
        'preu'=>8.00,
        'descripcio'=>'La cera de peinado de FashionKids Professional te ofrece un acabado totalmente mate y natural, con una fijación media que puedes disfrutar el día entero.',
        'caracteristiques'=>'Es imprescindible para moldear tupés y peinados retro muy actuales. Posee una fantástica capacidad de adaptación con la que podrás modificar el estilo del peinado simplemente pasando los dedos por el cabello. No contiene parabenos ni sulfatos.',
        'imatge'=>'http://127.0.0.1:8000/images/1525363297.png',
      ]);
      productes::create([
        'nom'=>'Aceite de árbol del té',
        'preu'=>8.00,
        'descripcio'=>'El aceite de árbol del té, se obtiene de la destilación de las hojas del árbol Melaleuca Alternifolia.',
        'caracteristiques'=>'El aceite esencial de árbol del té posee un efecto antiséptico triple: actúa contra las bacterias, hongos y virus, además, es bactericida, fungicida, antiviral, cicatrizante, balsámico antiinflamatorio, desodorante y expectorante. Las propiedades antisépticas, fungicidas y anti-acnéicas están aceptadas y reconocidas por el departamento de salubridad Australiano.
No se le conoce ningún tipo de toxicidad, ni efectos secundarios, no irrita la piel por lo que no conlleva ningún riesgo para la salud.',
        'imatge'=>'http://127.0.0.1:8000/images/1525363370.png',
      ]);
      productes::create([
        'nom'=>'Styling gel',
        'preu'=>5.50,
        'descripcio'=>'La gomina para niños FashionKids Professional ofrece la posibilidad de moldear el pelo y crear peinados fáciles y divertidos. ¿Cómo lo hacemos?',
        'caracteristiques'=>'Para los niños: Con su gran poder de fijación da forma al peinado, creando estilos de larga duración. Pinchos, crestas, desfilados, ¡la imaginación al poder!
Para las niñas: El pelo perfectamente disciplinado y controlado. Elimina la estática. Es el complemento ideal en los recogidos de ballet, las coletas perfectas, las trenzas y en los estilos actuales y desenfadados.',
        'imatge'=>'http://127.0.0.1:8000/images/1525365244.png',
      ]);
    }
}
