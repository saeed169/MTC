<?php
	$uri = get_template_directory_uri();
	$count = get_queried_object()->count;
?>

<div id="categories-page">
	<div class="top-breadcrumb py-3">
		<div class="container">
			<?php do_action( 'woocommerce_before_main_content' ); ?>			
		</div>
	</div>
	<div class="grid">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4">
					<div class="filters bg-white">
						<?= do_shortcode( '[VIWCPF_SHORTCODE id_menu="35"]' ); ?>
						<!-- <div class="d-flex flex-wrap justify-content-between align">
							<h6 class="text-darkGray fw-600 mb-3">Filters</h6>
							<p class="text-primary fs-7">Clear All</p>
						</div>
						<div>
							<input type="text" name="filter-search" id="filter-search" class="form-control" placeholder="Search">
						</div>
						<div class="accordion mt-3" id="filterAccordion">
							<div class="accordion-item border-0">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#CategoryCollapse" aria-expanded="true" aria-controls="CategoryCollapse">
										Category
									</button>
								</h2>
								<div id="CategoryCollapse" class="accordion-collapse collapse show"
									aria-labelledby="headingOne">
									<div class="accordion-body">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
											<label class="form-check-label" for="flexCheckChecked">Food cupboard (121)</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-2">
											<label class="form-check-label" for="flexCheckChecked"> Breakfast & Spreads(124)</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-3">
											<label class="form-check-label" for="flexCheckChecked">Grocery (128)</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-4">
											<label class="form-check-label" for="flexCheckChecked">Cereals (40)</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-5">
											<label class="form-check-label" for="flexCheckChecked">Oats & bars (12)</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-6">
											<label class="form-check-label" for="flexCheckChecked">Baru Cina(128)</label>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item border-0">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button" type="button" data-bs-toggle="collapse"
										data-bs-target="#BrandCollapse" aria-expanded="false"
										aria-controls="BrandCollapse">
										Brand
									</button>
								</h2>
								<div id="BrandCollapse" class="accordion-collapse collapse show"
									aria-labelledby="headingTwo">
									<div class="accordion-body">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="brandCheckChecked" checked>
											<label class="form-check-label" for="brandCheckChecked"> Al Shifa (8)</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="brandCheckChecked2">
											<label class="form-check-label" for="brandCheckChecked2"> Madu Tj (7)</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="brandCheckChecked3">
											<label class="form-check-label" for="brandCheckChecked3"> Energen (6)</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="brandCheckChecked4"> 
												<label class="form-check-label" for="brandCheckChecked4"> Koko Krunch (6)</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="brandCheckChecked5"> 
												<label class="form-check-label" for="brandCheckChecked4"> Nusantara (6)</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="brandCheckChecked6"> 
												<label class="form-check-label" for="brandCheckChecked4"> Oatsy (4)</label>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item border-0">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapsePrice" aria-expanded="false"
										aria-controls="collapsePrice">
										Price
									</button>
								</h2>
								<div id="collapsePrice" class="accordion-collapse collapse show"
									aria-labelledby="headingThree">
									<div class="accordion-body">
										<p class="mt-2 mb-4">
											<input type="text" id="amount" disabled>
										</p>
										<div id="slider-range"></div>
										<div class="reset mt-4">
											<a href="#">
												<span class="icon"><i class="fas fa-undo"></i></span>
												<span>Reset Price filter</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="col-xl-9 col-lg-8 mt-5 mt-lg-0">
					<div class="d-sm-flex justify-content-between top-products">
						<div class="title d-flex d-sm-block justify-content-between text-lightGray">
							<h5 class="fw-bold text-capitalize mb-0"><?= single_term_title(); ?></h5>
							<span class="fw-400 fs-7"><?php if($count) echo $count?> Items</span>
						</div>
						<div class="sort d-flex flex-wrap align-items-center justify-content-end my-2 my-sm-0">
							<label class="text-lightGray fs-7 me-2">Sort by:</label>
							<?php do_action( 'woocommerce_before_shop_loop' ); ?>
							<div id="filter-btn" class="text-darkGray d-block d-lg-none">
								<i class="fas fa-filter"></i>
								<span>filter</span>
							</div>
						</div>
					</div>
					<div class="filter-selected my-3">
						<!-- <div class="d-flex flex-wrap gap-3">
							<div class="item">
								<span class="me-2">Food cupboard</span>
								<span> <i class="fas fa-xmark"></i> </span>
							</div>
							<div class="item">
								<span class="me-2">Al Shifa</span>
								<span> <i class="fas fa-xmark"></i> </span>
							</div>
						</div> -->
						<?php do_action( 'woocommerce_before_shop_loop' ); ?>
					</div>
					<div id="products">
						<?php if ( have_posts() ) : ?>
						<div class="row mt-3">

							<?php woocommerce_product_subcategories(); ?>
							
							<?php while ( have_posts() ) : the_post(); ?>

								<?php wc_get_template_part( 'content', 'product' ); ?>

							<?php endwhile; // end of the loop. ?>

							<?php
								/**
								* woocommerce_after_shop_loop hook.
								*
								* @hooked woocommerce_pagination - 10
								*/
								do_action( 'woocommerce_after_shop_loop' );
							?>

							<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

							<?php wc_get_template( 'loop/no-products-found.php' ); ?>

						</div>
						<?php endif; ?>
					</div>
					<div id="pagination">
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link page-prev"><i class="fas fa-chevron-left"></i></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">...</a></li>
								<li class="page-item"><a class="page-link" href="#">16</a></li>
								<li class="page-item">
									<a class="page-link page-next" href="#"><i class="fas fa-chevron-right"></i></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>