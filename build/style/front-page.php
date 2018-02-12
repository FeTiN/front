<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oa
 */

get_header(); ?>

	<main class="main">

		<div class="shell flex">
			
			<?php get_sidebar(); ?>

			<div class="content">
				
				<div class="slider_home">
					<div class="owl-carousel slider">
						<?php 
		                  $slider_home = new WP_Query('post_type=slider_home&posts_per_page=-1');
		                  if ( $slider_home->have_posts() ) : ?>
		                    <!-- the loop -->
	                      	<?php while ( $slider_home->have_posts() ) : $slider_home->the_post(); ?>
	                            <div class="item">
									<div class="img">
										<?php the_post_thumbnail(); ?>
										<p><?php the_title(); ?></p>
									</div>
									<div class="text">
										<?php the_content(); ?>
										<p class="price"><?php the_field('price'); ?></p>
										<a href="<?php the_field('share_link'); ?>">Подробнее</a>
									</div>
								</div>
	                        <?php endwhile; ?>
	                        <?php wp_reset_postdata(); ?>
		                  
		                  <?php else : ?>
		                <?php endif; ?>
					</div>
				</div>

				<div class="category">
					<ul class="flex fww">
						
						<?php
							$args = array(
								'post_type' => 'page',
								'category__in' => 16
							);
							$category = new WP_Query;
							$my_posts = $category->query($args);

			             ?>

			            <?php if ( $category->have_posts() ) : ?>
			            	
			            <!-- the loop -->
			            <?php while ( $category->have_posts() ) : $category->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php the_field('cat_bg'); ?>" alt="<?php the_field('cat_alt'); ?>">
									<h2><?php the_field('cat_title'); ?></h2>
									<p>
										<?php the_field('text_cat'); ?>
									</p>
	                  			</a>
	                  		</li>
			            <?php endwhile; ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata(); ?>

						<?php else : ?>
			            	<p><?php _e( 'По Вашему запросу ничего не найдено' ); ?></p>
			            <?php endif; ?>
					</ul>
				</div>

				<div class="advance">
					<h2><?php the_field('title_home'); ?></h2>
					<ul>
						<?php

							// check if the social field has rows of data
							if( have_rows('advance') ):

							 	// loop through the rows of data
							    while ( have_rows('advance') ) : the_row(); ?>

							        <li style="background: url('<?php the_sub_field('advance_pic'); ?>');">
							        	<?php the_sub_field('advance_text'); ?>
							        </li>

							    <?php endwhile;

							else :

							    // no rows found

							endif;

						?>
					</ul>
				</div>

				<div class="vid_day">
					<?php
						date_default_timezone_set('Europe/Moscow');
						$day= date(w);
						if ($day== 1) {
							the_field('Monday');
						}
						elseif ($day== 2) {
							the_field('Tuesday');
						}
						elseif ($day== 3) {
							the_field('Wednesday');
						}
						elseif ($day== 4) {
							the_field('Thursday');
						}
						elseif ($day== 5) {
							the_field('Friday');
						}
						elseif ($day== 6) {
							the_field('Saturday');
						}
						else {
							the_field('Sunday');
						}
					?>
				</div>

				<!-- <div class="reviews">
					<div class="owl-carousel slider">
						<div class="item">
							<img src="http://placekitten.com/g/120/135">
							<div class="text">
								<strong>Имя Фамилия</strong>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dolores ducimus delectus dolor, in sint inventore recusandae optio odio temporibus at quaerat, fuga natus aliquid velit cupiditate deleniti ratione tenetur facere, commodi labore modi quis. Reprehenderit quos, totam dolorum, ipsum nihil dolores. Hic error dolor voluptates aperiam nesciunt, consequuntur reiciendis?
								</p>
							</div>
						</div>
						<div class="item">
							<img src="http://placekitten.com/g/120/135">
							<div class="text">
								<strong>Имя Фамилия</strong>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aliquam, consectetur voluptatibus. Dolores nostrum a incidunt, quisquam architecto quam distinctio labore. Omnis illo explicabo repudiandae aperiam eius iste ratione recusandae quis, qui, minus enim unde, praesentium veniam accusantium ducimus ipsum. Quam, architecto ab omnis nihil voluptate ipsum! Unde, deserunt ea.
								</p>
							</div>
						</div>
						<div class="item">
							<img src="http://placekitten.com/g/120/135">
							<div class="text">
								<strong>Имя Фамилия</strong>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ipsum nulla quis numquam, exercitationem dolore recusandae, enim eaque rem deleniti. Vitae sapiente, aperiam reiciendis architecto adipisci in odit quod. Rem itaque culpa nulla repellat dolore ipsum saepe iusto similique illum! Necessitatibus itaque perferendis voluptatum mollitia numquam. Quibusdam optio esse, voluptates!
								</p>
							</div>
						</div>
					</div>
				</div> -->

				<div class="content_text">
					<?php the_post();the_content(); ?>
				</div>

				<div class="new">
					<ul class="flex jcsb v_center">
						<?php 
			            $news = new WP_Query('category__in=15&order=rand&posts_per_page=3'); ?>

			            <?php if ( $news->have_posts() ) : ?>
			            	
			            <!-- the loop -->
			            <?php while ( $news->have_posts() ) : $news->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<div class="img"><?php the_post_thumbnail(); ?></div>
	                  				<strong><?php the_title(); ?></strong>
	                  			</a>
	                  		</li>
			            <?php endwhile; ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata(); ?>

						<?php else : ?>
			            	<p><?php _e( 'По Вашему запросу ничего не найдено' ); ?></p>
			            <?php endif; ?>
					</ul>
					<a href="/category/news/" class="more">Все новости</a>
				</div>

				<div class="contact flex v_center">
					<div class="item">
						<?php the_field('address'); ?>
					</div>
					<div class="item map">
						<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
				        <script type="text/javascript">
				        	ymaps.ready(function () {
							      var myMap = new ymaps.Map('map', {
							          center: [<?php the_field('map'); ?>],
							          zoom: <?php the_field('zoom'); ?>
							      }, {
							          searchControlProvider: 'yandex#search'
							      }),

							      // Создаём макет содержимого.
							      MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
							          '<div style="color: #FFFFFF; font-weight: bold;">Какой то текст</div>'
							      ),

							      myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
							          hintContent: '',
							          balloonContent: ''
							      }, {
							          // Опции.
							          // Необходимо указать данный тип макета.
							          iconLayout: 'default#image',
							          // Своё изображение иконки метки.
							          iconImageHref: '<?php bloginfo('template_url'); ?>/images/<?php the_field('icon_map'); ?>',
							          // Размеры метки.
							          iconImageSize: [40, 50],
							          // Смещение левого верхнего угла иконки относительно
							          // её "ножки" (точки привязки).
							          iconImageOffset: [-10, -52]
							      });

							      myMap.geoObjects
							      .add(myPlacemark)
							      // .add(myPlacemarkWithContent);
							    }); 
				        </script>
				        <div id="map"></div>
				    </div>
				</div>

				<div class="robot">
					<?php the_field('robot'); ?>
				</div>
			</div>
		</div>

	</main>

<?php

get_footer();