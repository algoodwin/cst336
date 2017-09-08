<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <?php
    function displaySymbol($type, $randomValue){
   
            switch($randomValue){
                case 0: $symbol = "ace";
                break;
                case 1:  $symbol = "king";
                break;
                    
                case 2:  $symbol = "queen";
                break;
                
                case 3: $symbol = "jack";
                break;
                
                case 4: $symbol = "ten";
                break;
                
                 }
                 
            
            switch($type){
                case 0: $file = "clubs";
                break;
                case 1:  $file = "diamonds";
                break;
                    
                case 2:  $file = "hearts";
                break;
                
                case 3: $file = "spades";
                break;
    
                
                 }
          
        
    
       
        echo "<img id='reel$pos' src ='img/cards/$file/$symbol.png' alt='$symbol' title='".ucfirst($symbol) . "' width ='70'>";
        }
      
        
        function displayPoints($randomValue1, $randomValue2){
            
            echo "<div id='output'>";
           if($randomValue1 == 0)
           {
               if($randomValue2 == 0)
                 echo "<h2> Tie </h2>";
                else 
                    echo "<h2> Human Wins </h2>";
           }
            if($randomValue1 == 1)
           {
               if($randomValue2 == 1)
                 echo "<h2> Tie </h2>";
                else if($randomValue2 == 0)
                    echo "<h2> Computer Wins </h2>";
                else if ($randomValue2 !=0){
                    echo "<h2> Human Wins </h2>";
                }
           }
           
            if($randomValue1 == 2)
           {
               if($randomValue2 == 2)
                 echo "<h2> Tie </h2>";
                else if($randomValue2 == 0)
                    echo "<h2> Computer Wins </h2>";
                else if($randomValue2 == 1)
                    echo "<h2> Computer Wins </h2>";
                else {
                    echo "<h2> Human Wins </h2>";
                }
           }
              if($randomValue1 == 3)
           {
               if($randomValue2 == 3)
                 echo "<h2> Tie </h2>";
                else if($randomValue2 != 4)
                    echo "<h2> Human Wins </h2>";
                else 
                    echo "<h2> Computer wins Wins </h2>";
                }
        if($randomValue1 == 4)
           {
               if($randomValue2 == 4)
                 echo "<h2> Tie </h2>";
               
                else 
                    echo "<h2> Computer wins  </h2>";
                }
           
           
           
            
            echo"</div>"; 
        }
        
    function play(){
        for($i=1; $i<2; $i++)
        {
            ${"randomValue" .$i} = rand(0,3);
             ${"type" .$l} = rand(0,4);
            ${"randomValue2" .$i} = rand(0,3);
             ${"type2" .$l} = rand(0,4);
            displaySymbol(${"randomValue" . $i},  ${"type" .$l});
             displaySymbol(${"randomValue2" . $i},  ${"type2" .$l});
   
            
        }
        displayPoints($randomValue1, $randomValue2);
        }
        
        play();
        ?>
    </body>
</html>