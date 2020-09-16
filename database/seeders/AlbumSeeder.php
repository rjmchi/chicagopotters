<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Support\Str;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::truncate();
        Album::truncate();
		$photos = array();

		$photos[] = [ 'filename' => "P1050484.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Nancy Pirri' ];
		$photos[] = [ 'filename' => "P1050485.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Nancy Pirri' ];
		$photos[] = [ 'filename' => "P1050486.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Stephanie Marder' ];
		$photos[] = [ 'filename' => "P1050487.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Stephanie Marder' ];
		$photos[] = [ 'filename' => "P1050488.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Rebecca Zemans' ];
		$photos[] = [ 'filename' => "P1050489.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Robert Milanowski &amp; Howard Skolnik' ];
		$photos[] = [ 'filename' => "P1050490.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Robert Milanowski &amp; Howard Skolnik' ];
		$photos[] = [ 'filename' => "P1050491.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Robert Milanowski &amp; Howard Skolnik' ];
		$photos[] = [ 'filename' => "P1050492.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Isabel Mikell' ];
		$photos[] = [ 'filename' => "P1050495.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Isabel Mikell' ];
		$photos[] = [ 'filename' => "P1050503.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Nancy Pirri' ];
		$photos[] = [ 'filename' => "P1050504.JPG", 'width' => "640", 'height' => "480", 'caption' => 'Nancy Pirri' ];

		$this->photos('Holiday Show &mdash; 2009', $photos );
		
		$photos = array();
		
$photos[] = ['filename'=>"P1070523.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Peter Hauschild'];

$photos[] = ['filename'=>"P1070524.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Mary Zender'];

$photos[] = ['filename'=>"P1070525.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Mary Zender'];

$photos[] = ['filename'=>"P1070526.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Nancy Pirri'];

$photos[] = ['filename'=>"P1070527.JPG" ,'width'=>"640" ,'height'=>"853"];

$photos[] = ['filename'=>"P1070528.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Robert Milanowski'];

$photos[] = ['filename'=>"P1070529.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Howard Skolnik'];

$photos[] = ['filename'=>"P1070530.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Robert Milanowski &amp; Howard Skolnik'];

$photos[] = ['filename'=>"P1070531.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Howard Skolnik'];

$photos[] = ['filename'=>"P1070532.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Isabel Mikell'];

$photos[] = ['filename'=>"P1070533.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Isabel Mikell'];

$photos[] = ['filename'=>"P1070534.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Isabel Mikell'];

$photos[] = ['filename'=>"P1070535.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Nancy Pirri'];

$photos[] = ['filename'=>"P1070536.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Mary Zender'];

$photos[] = ['filename'=>"P1070539.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Peter Hauschild'];

$photos[] = ['filename'=>"P1070540.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Robert Milanowski'];

$photos[] = ['filename'=>"P1070542.JPG" ,'width'=>"640" ,'height'=>"853",'caption'=>'Howard Skolnik'];

$photos[] = ['filename'=>"P1070543.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Howard Skolnik'];

$photos[] = ['filename'=>"P1070544.JPG" ,'width'=>"640" ,'height'=>"480",'caption'=>'Isabel Mikell'];

$photos[] = ['filename'=>"P1070545.JPG" ,'width'=>"640" ,'height'=>"853",'caption'=>'Isabel Mikell'];

$photos[] = ['filename'=>"P1070546.JPG" ,'width'=>"640" ,'height'=>"853"];

$photos[] = ['filename'=>"P1070541.JPG" ,'width'=>"640" ,'height'=>"480"];		
		
		$this->photos('Holiday Show &mdash; 2010', $photos);
		$photos = array();

$photos[]=['filename'=>"DSC00089.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Robert Milanowski &amp; Howard Skolnik"];
$photos[]=['filename'=>"DSC00091.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Robert Milanowski &amp; Howard Skolnik"];
$photos[]=['filename'=>"DSC00092.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Robert Milanowski &amp; Howard Skolnik"];
$photos[]=['filename'=>"DSC00093.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Robert Milanowski &amp; Howard Skolnik"];
$photos[]=['filename'=>"DSC00094.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Robert Milanowski &amp; Howard Skolnik"];
$photos[]=['filename'=>"DSC00095.JPG" , 'width'=>"640", 'height'=>"853","caption"=>"Isabel Mikell"];
$photos[]=['filename'=>"DSC00096.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Isabel Mikell"];
$photos[]=['filename'=>"DSC00097.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Isabel Mikell"];
$photos[]=['filename'=>"DSC00098.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'Peter Hauschild'];
$photos[]=['filename'=>"DSC00099.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'Cathrine Scwalbe'];
$photos[]=['filename'=>"DSC00100.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'Cathrine Scwalbe'];
$photos[]=['filename'=>"DSC00101.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'Nancy Pirri'];
$photos[]=['filename'=>"DSC00102.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'Nancy Pirri'];
$photos[]=['filename'=>"DSC00104.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Isabel Mikell"];
$photos[]=['filename'=>"DSC00105.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Cathi and Nancy"];
$photos[]=['filename'=>"DSC00109.JPG" , 'width'=>"640" ,'height'=>"853","caption"=>"Robert and Howard"];
$photos[]=['filename'=>"DSC00112.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Robert and Howard"];
$photos[]=['filename'=>"DSC00114.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Howard and Nancy"];
$photos[]=['filename'=>"DSC00115.JPG" , 'width'=>"640" ,'height'=>"480","caption"=>"Robert and Howard"];
$photos[]=['filename'=>"DSC00116.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'Peter'];
$photos[]=['filename'=>"DSC00117.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'Cathi'];
$photos[]=['filename'=>"DSC00118.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'Nancy'];
$photos[]=['filename'=>"DSC00120.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'David and Carol'];
$photos[]=['filename'=>"DSC00121.JPG" , 'width'=>"640" ,'height'=>"853"];
$photos[]=['filename'=>"DSC00122.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00123.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'Laura and Robert'];
$photos[]=['filename'=>"DSC00124.JPG" , 'width'=>"640" ,'height'=>"853"];
$photos[]=['filename'=>"DSC00125.JPG" , 'width'=>"640" ,'height'=>"853"];
$photos[]=['filename'=>"DSC00126.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00128.JPG" , 'width'=>"640" ,'height'=>"480",'caption'=>'Terri and Don'];
$photos[]=['filename'=>"DSC00129.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00130.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00131.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00132.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00133.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00134.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00135.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00136.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00137.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00138.JPG" , 'width'=>"640" ,'height'=>"853"];
$photos[]=['filename'=>"DSC00139.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00140.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00141.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00142.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00143.JPG" , 'width'=>"640" ,'height'=>"853",'caption'=>'Robert and Howard'];
$photos[]=['filename'=>"DSC00145.JPG" , 'width'=>"640" ,'height'=>"853"];
$photos[]=['filename'=>"DSC00146.JPG" , 'width'=>"640" ,'height'=>"853"];
$photos[]=['filename'=>"DSC00148.JPG" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC00151.JPG" , 'width'=>"640" ,'height'=>"361",'caption'=>'End of the day!'];
						
		$this->photos('Holiday Show &mdash; 2011', $photos);
		$photos = array();		
		

$photos[]=['filename'=>"DSC01373.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Feast Venue &mdash; Thank you Stephanie!"];
$photos[]=['filename'=>"DSC01374.JPG" , 'width'=>"800" , 'height'=>"631", 
'caption'=>"Amber, Cathi, Amber's husband Steve"];
$photos[]=['filename'=>"DSC01375.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Carryl"];
$photos[]=['filename'=>"DSC01376.JPG" , 'width'=>"800" , 'height'=>"670", 
'caption'=>"Robert's Root Vegetable Medley"];
$photos[]=['filename'=>"DSC01378.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Howard's Eggplant Brushetta"];
$photos[]=['filename'=>"DSC01379.JPG" , 'width'=>"800" , 'height'=>"995", 
'caption'=>"Julie's Spanakopita"];
$photos[]=['filename'=>"DSC01380.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Stephanie, Cathi and Rhubarb Lemonade"];
$photos[]=['filename'=>"DSC01382.JPG" , 'width'=>"800" , 'height'=>"575", 
'caption'=>"Jeff, Cathi, Nora"];
$photos[]=['filename'=>"DSC01383.JPG" , 'width'=>"800" , 'height'=>"577", 
'caption'=>"Steve, Amber, Carryl, Mike"];
$photos[]=['filename'=>"DSC01385.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Cathi &amp; Stephanie"];
$photos[]=['filename'=>"DSC01386.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Robert &amp; Howard"];
$photos[]=['filename'=>"DSC01387.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Isabel"];
$photos[]=['filename'=>"DSC01388.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Feast explanations"];
$photos[]=['filename'=>"DSC01389.JPG" , 'width'=>"800" , 'height'=>"598", 
'caption'=>"&nbsp;"];
$photos[]=['filename'=>"DSC01390.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Carryl's Beet Borscht"];
$photos[]=['filename'=>"DSC01391.JPG" , 'width'=>"800" , 'height'=>"600"];
$photos[]=['filename'=>"DSC01392.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Robert's Root Vegetable Medley"];
$photos[]=['filename'=>"DSC01393.JPG" , 'width'=>"800" , 'height'=>"1067", 
'caption'=>"Jeff's Saltimbocca di Pollo and Stephanie's Kale and Quinoa Salad"];
$photos[]=['filename'=>"DSC01394.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Outside with the Kimchi"];
$photos[]=['filename'=>"DSC01395.JPG" , 'width'=>"800" , 'height'=>"600"];
$photos[]=['filename'=>"DSC01396.JPG" , 'width'=>"800" , 'height'=>"1067"];
$photos[]=['filename'=>"DSC01398.JPG" , 'width'=>"800" , 'height'=>"600"];
$photos[]=['filename'=>"DSC01399.JPG" , 'width'=>"800" , 'height'=>"534"];
$photos[]=['filename'=>"DSC01400.JPG" , 'width'=>"800" , 'height'=>"635"];
$photos[]=['filename'=>"DSC01401.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"The class Kimchi"];
$photos[]=['filename'=>"DSC01402.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Everyone cleaned their plate!"];
$photos[]=['filename'=>"DSC01403.JPG" , 'width'=>"800" , 'height'=>"1008", 
'caption'=>"Clean up"];
$photos[]=['filename'=>"DSC01404.JPG" , 'width'=>"800" , 'height'=>"970"];
$photos[]=['filename'=>"DSC01405.JPG" , 'width'=>"800" , 'height'=>"599"];
$photos[]=['filename'=>"DSC01406.JPG" , 'width'=>"800" , 'height'=>"1067"];
$photos[]=['filename'=>"DSC01407.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"Making the recipe books"];
$photos[]=['filename'=>"DSC01409.JPG" , 'width'=>"800" , 'height'=>"574"];
$photos[]=['filename'=>"DSC01410.JPG" , 'width'=>"800" , 'height'=>"607", 
'caption'=>"Leah, Marsha"];
$photos[]=['filename'=>"DSC01411.JPG" , 'width'=>"800" , 'height'=>"1067"];
$photos[]=['filename'=>"DSC01412.JPG" , 'width'=>"800" , 'height'=>"1067", 
'caption'=>"&ldquo;People, can anyone thread this needle?!?!?&rdquo;"];
$photos[]=['filename'=>"DSC01415.JPG" , 'width'=>"800" , 'height'=>"482"];
$photos[]=['filename'=>"DSC01418.JPG" , 'width'=>"800" , 'height'=>"600", 
'caption'=>"The book!"];
$photos[]=['filename'=>"DSC01419.JPG" , 'width'=>"800" , 'height'=>"600"];
$photos[]=['filename'=>"DSC01420.JPG" , 'width'=>"800" , 'height'=>"428"];
$photos[]=['filename'=>"DSC01421.JPG" , 'width'=>"800" , 'height'=>"652"];
$photos[]=['filename'=>"DSC01423.JPG" , 'width'=>"800" , 'height'=>"584", 
'caption'=>"Dessert, Cathi's Rhubarb Crisp with Valpo Velvet Ice cream"];
$photos[]=['filename'=>"DSC01424.JPG" , 'width'=>"800" , 'height'=>"705"];
$photos[]=['filename'=>"DSC01427.JPG" , 'width'=>"800" , 'height'=>"756", 
'caption'=>"Another great Art of Food class Cathi! Thank you!"];
$photos[]=['filename'=>"DSC01428.JPG" , 'width'=>"800" , 'height'=>"600"];

		$this->photos( 'The Art of Food Feast &mdash; 2012', $photos );

	
		$photos = array();

$photos[]=['filename'=>"DSC01893.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01896.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01897.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01898.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01899.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01900.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01901.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01902.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01903.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01904.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01905.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01906.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01908.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01909.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01910.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01912.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01913.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01914.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01915.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01916.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01919.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01921.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01923.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01924.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01925.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01926.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01927.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01929.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01930.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01932.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01933.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01934.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01935.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01936.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01937.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01938.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01939.jpg" , 'width'=>"467" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01940.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01942.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01943.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01946.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01947.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01948.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01949.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01951.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01952.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01953.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01954.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01955.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01956.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01957.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01958.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01959.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01974.jpg" , 'width'=>"479" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01975.jpg" , 'width'=>"640" ,'height'=>"362"];
$photos[]=['filename'=>"DSC01976.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01978.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01979.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01980.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01981.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01982.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01983.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01987.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01988.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01990.jpg" , 'width'=>"480" ,'height'=>"640"];
$photos[]=['filename'=>"DSC01991.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01992.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01993.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01994.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01995.jpg" , 'width'=>"480" ,'height'=>"580"];
$photos[]=['filename'=>"DSC01996.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01997.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01998.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC01999.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC02000.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC02001.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC02002.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC02003.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC02004.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC02006.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC02007.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"DSC02009.jpg" , 'width'=>"640" ,'height'=>"480"];
$photos[]=['filename'=>"IMG_0192.jpg" , 'width'=>"640" ,'height'=>"478"];


        $this->photos('Holiday Show &mdash; 2012', $photos);	    
    }

private function photos( $album_name, $photos ) {
        $album = new Album();  
        $album->name = html_entity_decode($album_name);
        $album->slug = Str::slug($album->name);
        $album->save();
        

        echo "$album->slug -- album $album->name created -- id=$album->id\n\r";

		foreach ( $photos as $photo ) {
			$rec = new Photo();
			$rec->album_id = $album->id;
			$rec->filename = $photo[ 'filename' ];
			$rec->width = $photo[ 'width' ];
			$rec->height = $photo[ 'height' ];
			if ( isset( $photo[ 'caption' ] ) ) {
				$rec->caption = html_entity_decode($photo[ 'caption' ]);
			}
			$rec->save();
		}
    }
        
}
