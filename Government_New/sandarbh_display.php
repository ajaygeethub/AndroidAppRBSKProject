
				<?php
							
						
							$output='';
							$sql="select hid from health order by hid desc limit 1";
							$result=mysql_query($sql);
							$childid=mysql_fetch_array($result);
							
							$sql1="select * from sandarbh_card where childid=".$childid[0]."";
							$result1=mysql_query($sql1);
							$dataset=mysql_fetch_array($result1);
							$output.= "<table class='table table-bordered'><tr><th colspan=6>Sandarbh Card</th></tr><tr><td class=title>Name</td><td>".$dataset[0]."</td><td class=title>Gender</td><td>".$dataset[1]."</td><td class=title>IDNO</td><td>".$dataset[2]."</td></tr><tr><td class=title>DOB</td><td>".$dataset[3]."</td><td class=title>Age</td><td>".$dataset[4]."</td><td class=title>Cast</td><td>".$dataset[5]."</td></tr><tr><td class=title>Father Name</td><td>".$dataset[6]."</td><td class=title>Mother Name</td><td>".$dataset[7]."</td><td class=title>Address</td><td>".$dataset[8]."</td></tr><tr><td class=title>Village</th><td>".$dataset[9]."</td><td class=title>Taluka</td><td>".$dataset[10]."</td><td class=title>Dist</td><td>".$dataset[11]."</td></tr><tr><td class=title>School</td><td>".$dataset[12]."</td><td class=title>School Name</td><td>".$dataset[13]."</td><td class=title>School Address</td><td>".$dataset[14]."</td></tr><tr><td class=title>4D</td><td>".$dataset[15]."</td><td class=title>User id</td><td>".$dataset[16]."</td><td class=title>Child ID</td><td>".$dataset[18]."</td></tr>";
									
								
							$output.= "</table>";
							
							echo $output;
														
						
				
			?>