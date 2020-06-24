  <!--Awalan untuk appointment--> 
  <form>
    <div class="col-md-12">
      <div class="sec-title max-width text-center gambarr2">
        <h1>Specialist Dental Care</h1>
        <p>Your teeth play an important part in your daily life. It not only helps you to chew and eat your food, but frames your face.<br> Any missing tooth can have a major impact on your quality of life.</p>
      </div>
    </div>
      <div class="card mb-3 ml-5 mr-5">
        <div class="row no-gutters">
          <div class="col-md-2">
            <img src=<?= base_url(). 'assets/images/dentalimplant.jpg'?> class="card-img gambarr" alt="...">
          </div>
          <div class="col-md-10">
            <div class="card-body textt">
              <h5 class="card-title">Dental Implant</h5>
              <p class="card-text">A dental implant (also known as an endosseous implant or fixture) is a surgical component that interfaces with the bone of the jaw or skull to support a dental prosthesis such as a crown, bridge, denture, facial prosthesis or to act as an orthodontic anchor. The basis for modern dental implants is a biologic process called osseointegration, in which materials such as titanium form an intimate bond to bone.</p>
              <a href=<?= site_url('User/ControlSpecialist/dentalImplant')?> class="btn menu oval btn-lg active text-white navbarq" style="font-size: 13px;" role="button" aria-pressed="true">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3 ml-5 mr-5">
        <div class="row no-gutters">
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title">Laser Dentistry</h5>
              <p class="card-text">A dental laser is a type of laser designed specifically for use in oral surgery or dentistry. In the United States, the use of lasers on the gums was first approved by the Food and Drug Administration in the early 1990s, and use on hard tissue like teeth or the bone of the mandible gained approval in 1996. Several variants of dental lasers are in use with different wavelengths and these mean they are better suited for different applications.</p>
              <a href=<?= site_url('User/ControlSpecialist/laserDetistry')?> class="btn menu oval btn-lg active text-white navbarq" style="font-size: 13px;" role="button" aria-pressed="true">Read More</a>
            </div>
          </div>
          <div class="col-md-3">
            <img src=<?= base_url(). 'assets/images/laser.jpg'?> class="card-img " alt="...">
          </div>
        </div>
      </div>
      <div class="card mb-3 ml-5 mr-5">
        <div class="row no-gutters">
          <div class="col-md-2">
            <img src=<?= base_url(). 'assets/images/ortho.jpg'?> class="card-img gambarr" alt="...">
          </div>
          <div class="col-md-10">
            <div class="card-body textt">
              <h5 class="card-title">Orthodontics</h5>
              <p class="card-text">Orthodontics is a specialty of dentistry that deals with the diagnosis, prevention and correction of malpositioned teeth and jaws. It can also focus on modifying facial growth, known as dentofacial orthopedics.</p>
              <a href=<?= site_url('User/ControlSpecialist/orthoDontics')?> class="btn menu oval btn-lg active text-white navbarq" style="font-size: 13px;" role="button" aria-pressed="true">Read More</a>
            </div>
          </div>
        </div>
      </div>
</form>
