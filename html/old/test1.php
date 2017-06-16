<?php
				//loop for main photo
				for ($i=0; $i<1; $i++) {

					echo '<img class="project-large" srcset="'.$infophoto_array[$i].'320.jpg 320w, '.$infophoto_array[$i].'500.jpg 500w, '.$infophoto_array[$i].'640.jpg 640w, '.$infophoto_array[$i].'900.jpg 900w">';

				}
			?>
			
			<div class="project-work-content-small">

				<?php
					//this doesn't work if I dont have a 3rd photo, it just shows a broken image
					if ($infophoto_array>1) {
					//loop for smaller photos(2nd and 3rd photos)
					for ($i=1; $i<=2; $i++) {

						echo '<img class="project-small" srcset="'.$infophoto_array[$i].'320.jpg 320w, '.$infophoto_array[$i].'500.jpg 500w, '.$infophoto_array[$i].'640.jpg 640w, '.$infophoto_array[$i].'900.jpg 900w">';
			    }

					} else {
						echo " ";
					}
				?>

			</div>

			<?php

				if (count($infophoto_array)>3) {
				//loop for large 4th photo
				for ($i=3; $i<4; $i++) {

					echo '<img class="project-large" srcset="'.$infophoto_array[$i].'320.jpg 320w, '.$infophoto_array[$i].'500.jpg 500w, '.$infophoto_array[$i].'640.jpg 640w, '.$infophoto_array[$i].'900.jpg 900w">';
		    }

				} else {
					echo " ";
				}
			?>
		<p class="info-text ff-regular">Portraits ></p>
			<!-- <a href="project-info.php?id=<?php echo $nextproject_id; ?> "><?php echo $nextproject . '>'; ?></a> -->

			<?php 

			$id = $row['id'];
			$photo = $row['photo'];
			$photo_array = explode(",", $photo);

			$url_page ="project-info.php";
			$param = $row['id'];

			$url = rawurlencode($url_page);
			$url.="?" . "id=". urlencode($param);
			
			for ($i=0; $i<count($photo_array); $i++) {
				$build = "<a href=\"{$url}\">";
				$build .= '<img srcset="'.$photo_array[$i].'320.jpg 320w, '.$photo_array[$i].'500.jpg 500w, '.$photo_array[$i].'640.jpg 640w, '.$photo_array[$i].'900.jpg 900w" 
					sizes="(min-width: 59.94rem) 30vw, 
	           (min-width: 37.44rem) 45vw">';
				echo $build;
			}
		
			}
			mysqli_free_result($result);

			?>