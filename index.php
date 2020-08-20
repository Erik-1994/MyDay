<?php 
        include '_partials/header.php';
        include 'config.php'
?>

<div class="wrapper">
  
   
    <div class="leftwrap">

        <!--  -->
        
        <?php $data = $database->select(''.date("F").'', ['id',/* 'notes', */'created_at','kcal','exercise','water','meditation','sleepstart','sleepend','weight','vakum','streching','coldshower','reading','running','day']); ?>

       

        <ul class="newday  <?php echo $month ?> ">
        <?php  echo '<h1>'.$month.'</h1>'; ?>
                <?php
                    foreach ( $data as $item ) {

                        if ($item['exercise'] == 1) {$exercise='<i class="fas fa-dumbbell done"></i>';} else { $exercise = '<i class="fas fa-couch undone"></i>';}

                        if ($item['vakum'] == 1) {$vakum='<i class="fas fa-lungs done"></i>';} else { $vakum = '<i class="fas fa-lungs undone"></i>';}

                        if ($item['streching'] == 1) {$streching='<i class="fas fa-child done"></i>';} else { $streching = '<i class="fas fa-child undone"></i>';}

                        if ($item['coldshower'] == 1) {$coldShower='<i class="fas fa-shower done"></i>';} else { $coldShower = '<i class="fas fa-shower undone"></i>';}

                        if ($item['running'] == 1) {$running='<i class="fas fa-running done"></i>';} else { $running = '<i class="fas fa-running undone"></i>';}
                
                        if ($item['reading'] == 1) {$reading='<i class="fas fa-book done"></i>';} else { $reading = '<i class="fas fa-book undone"></i>';}

                            
                        $formatted_datetime = date("d/m/y ", strtotime($item['created_at']));
                        
                        echo '<li class="'.$item['id'].' ">';
                        echo '<p>'.$item['day'].'</p>';
                        echo '<p>'.$formatted_datetime.'</p>';  
                        echo '<p>'.$exercise.'</p>';
                        echo '<p><i class="fas fa-utensils variable"></i> '.$item['kcal'].' kcal</p>';
                        echo '<p><i class="fas fa-tint variable"></i> '.$item['water'].' l</p>';
                        echo '<p><i class="fas fa-brain variable"></i> '.$item['meditation'].'</p>';
                        echo '<p><i class="fas fa-bed variable"></i> '.$item['sleepend'].'</p>';
                        echo '<p><i class="fas fa-sun variable"></i> '.$item['sleepstart'].'</p>';
                        echo '<p><i class="fas fa-weight variable"></i> '.$item['weight'].' kg</p>';
                        echo '<p>'.$vakum.'</p>';
                        echo '<p>'.$streching.'</p>';
                        echo '<p>'.$coldShower.'</p>';
                        echo '<p>'.$running.'</p>';
                        echo '<p>'.$reading.'</p>';
                    /*     echo '<p>'.$item['notes'].'</p>'; */
                        echo '</li>';
                       
                    }
                ?>
        </ul>  
    </div>
    
    <!--  -->

            

    <div class="setter">
        <h2> <?php echo "<p class=\"time\">" . date("d.m.") . "</p>"; ?> </h2>
        <h2> <?php echo "<p class=\"time\">" . $day."</p>"; ?> </h2>

        <form id="add-form" class="col-sm-6" action="proces.php" method="post">
            
            <label for="exercise">
                Exercise
                <input type="hidden" name="exercise" value="0">
                <input type="checkbox" name="exercise"id="exercise"  value="1"  >
            </label> 

            <label for="kcal">
                Kcal/Day
                <input type="text" name="kcal"  >
            </label>

            <label for="water">
                Water/l 
                <input type="text" name="water" >
            </label>

            <label for="meditation">
                Meditation
                <select name="meditation" id="meditation">
                
                <?php 
                
                for ($i=5; $i <= 30; $i++) { 
                    
                    echo  '<option value="' .$i. ' min">' .$i. ' min</option>';
                }

                ?>
                </select>
            </label>

            <label for="sleepstart sleepend">
                Sleep</p>
                <input class="not" type="time" id="sleepstart" name="sleepstart" value="23:00">
                <input class="not not2" type="time" id="sleepend" name="sleepend" value="07:00">
            </label>
            
            
            <label class="slidecontainer" for="weight">
                Weight <span id="demo"></span> kg  
                <input type="range" min="1" max="100" name='weight' class="slider" id="weight">   
            </label>

            <label for="vakum">
                Vakum
                <input type="hidden" name="vakum" value="0">
                <input type="checkbox" name="vakum" id="vakum"  value="1" >
            </label> 
            <label for="streching">
                Steching
                <input type="hidden" name="streching" value="0">
                <input type="checkbox" name="streching" id="streching"  value="1" >
            </label> 
            <label for="coldshower">
                Cold shower
                <input type="hidden" name="coldshower" value="0">
                <input type="checkbox" name="coldshower" id="coldshower"  value="1" >
            </label> 
            <label for="running">
                Running
                <input type="hidden" name="running" value="0">
                <input type="checkbox" name="running" id="running"  value="1" >
            </label> 
            <label for="reading">
                Reading
                <input type="hidden" name="reading" value="0">
                <input type="checkbox" name="reading" id="reading"  value="1" >
            </label> 
            
            <!--  <textarea class="form-control" name="notes" id="notes" rows="4" ></textarea> -->
        
            <input type="hidden" name="day" id="day" value="<?php echo $day ?>">
            <input type="submit" id="submit" value="Confirm">

        </form>
        
    </div>
    
</div>

  

<?php 
        include '_partials/footer.php';
?>