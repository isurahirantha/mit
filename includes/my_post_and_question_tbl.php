
       <table class="table">

         <thead>

          <tr class="bg-primary text-warning">

            <th> Post ID</th>
            <th> Post Type</th>
            <th> Title</th>
            <th> Visibility</th>

          </tr>

        </thead>

        <tbody>
			<?php

			if($resultset = get_posts("post",$session_id)){

				while($mypost_set = mysqli_fetch_array($resultset)){

				echo "<tr class=\"text-warning bg-default\"><td>",$mypost_set['pid'],"</td>";

				if($mypost_set['posttype']==1){$post_type = 'Article';}else{$post_type = 'Question';}

				echo "<td>",$post_type,"</td>";

				echo "<td>"."<a 
				data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click To Edit Content\"
				href=\"home.php?edit_pid={$mypost_set['pid']}\">".$mypost_set['post_title']."</a></td>";

				if($mypost_set['visibility']==1){$visible = 'On';}else{$visible = 'Off';}

				echo "<td>",$visible,"</td></tr>";

				}

			}

			?>
		
      	</tbody>

     	</table>	
