<section class="signup search-main search-template">

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{% if search.performed %}
					{% if search.terms != blank %}
						{% if search.results.size == 0 %}
							<div class="bg-danger padding-15 margin-bottom-15">
								<p class="margin-0">Không tìm thấy bất kỳ kết quả với từ khóa: <b class="keysearch">"{{ search.terms | escape }}"</b></p>	
							</div>
						{% else %}
							<div class="bg-success padding-15 margin-bottom-15">
								<p class="margin-0">Có <b>{{ search.results.size }}</b> kết quả tìm kiếm với từ khoá <b>"{{ search.terms }}"</b></p>
							</div>

							<section class="section-products products-view products-view-grid lg4">
								<div class="product-grid-show products">
									<div class="row">
										{% for product in search.results %}
										<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item" >
											{% include 'product-grid-item' %}
										</div>
										{% endfor %}
									</div>
								</div>
							</section>


						{% endif %}
					{% else %}
						<div class="bg-danger padding-15 margin-bottom-15">Vui lòng nhập từ khóa tìm kiếm</div>
						{% include 'search-module' %}
					{% endif %}
				{% endif %}
			</div>
		</div>
	</div>
</section>