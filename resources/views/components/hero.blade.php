<section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
        <div class="row">
            <div class="col-12">
                <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper" id="slide">

                    </div>
                    <div class="custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                    </div>
                    <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>



Hero();

  async  function Hero() {

      try {
          let URL = "/heroData";

          let response = await axios.get(URL);

          response.data.forEach(function (item) {
              document.getElementById('slide').innerHTML += (`
<div class="swiper-slide">
                            <a href="{{url('/Single-Post')}}" class="img-bg d-flex align-items-end" style="background-image: url(${item['image']});">
                                <div class="img-bg-inner">
                                    <h2>${item['head']}</h2>
                                    <p>${item['paragraph']}</p>
                                </div>
                            </a>
                        </div>
              `);
          });
      }catch (e) {
          alert(e);
      }


    }



</script>














