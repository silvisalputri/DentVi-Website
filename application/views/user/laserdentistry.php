  <!--Awalan untuk appointment--> 
  <form>
    <div class="col-md-12">
      <div class="sec-title max-width text-center gambarr2">
        <h1>Laser Dentistry <img src="https://img.icons8.com/bubbles/100/000000/dental-machine.png"/></h1> 
        <p>Dental Implants helps patients to gain back their confidence by improving the overall health through natural appearing finish of the oral cavity that functions well.</p>
      </div>
    </div>
      <div class="card mb-3 ml-5 mr-5 warna2 shadow rounded">
        <div class="col-md-12">
          <div class="card-body">
            <div class="container">
              <h3 class="fontqu">What is a Laser Dentistry?</h3>
              <p>Laser dentistry is the use of lasers to treat a number of different dental conditions. It became commercially used in clinical dental practice for procedures involving tooth tissue in 1989.</p>
              <p>Laser dentistry potentially offers a more comfortable treatment option for a number of dental procedures involving hard or soft tissue compared to drills and other non-laser tools.</p>
              <p>LASER stands for “light amplification by the stimulated emission of radiation.” The instrument creates light energy in a very narrow and focused beam. This laser light produces a reaction when it hits tissue, allowing it to remove or shape the tissue.</p>
              <p>Laser dentistry is used in a variety of procedures, including:
                <ul>
                  <li>treating hypersensitivity</li>
                  <li>treating tooth decay</li>
                  <li>treating gum disease</li>
                  <li>whitening teeth</li>
                </ul> 
              <p>Lasers can make dental treatments more efficient, cost effective, and comfortable. The Food and Drug Administration (FDA) has approved laser dentistry as a treatment option for several dental conditions. It’s worth noting that the American Dental Association (ADA) currently has yet to do so, though they are hopeful about the potential of the field.</p>
              <hr width="50%">
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3 ml-5 mr-5 bg-light">
        <div class="col-md-12">
          <div class="card-body">
            <div class="container">
              <h3 class="fontqu">How are laser treatments performed?</h3>
              <p>The two main types of procedures used for laser dentistry are hard tissue and soft tissue procedures. Hard tissue refers to the teeth, and soft tissue refers to the gums.</p>
              <br>
              <h5 class="fontqu">Hard Issue</h5>
              <div class="card-deck">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-text">Cavity detection</h5>
                    <p>Lasers can detect cavities early by finding evidence of tooth decay.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-text">Tooth preparations and dental fillings</h5>
                    <p>Local anesthesia and traditional drills are often not needed with laser treatments. Lasers can kill bacteria in a cavity, which can aid in the long-term health of a tooth.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-text">Treating tooth sensitivity</h5>
                    <p>Teeth that have sensitivity to hot and cold can be treated with dental lasers that seal tubules on the tooth’s root.</p>
                  </div>
                </div>
              </div>

              <br>
              <h5 class="fontqu">Soft Issue</h5>
              <div class="card-deck">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-text">Treating a <br>“gummy smile”</h5>
                    <p>Lasers are used to reshape gum tissue associated with “gummy smile,” in which the gums’ length covers much of the tooth.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-text">Crown lengthening</h5>
                    <p>This procedure reshapes both gum tissue and bone for healthier tooth structure, which helps with placing restorations on the teeth.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-text">Treating tongue frenulum attachment.</h5>
                    <p>Those with a thick or tight frenulum (the fold of skin under the front part of tongue that anchors to the mouth floor) may benefit from a laser frenectomy.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-text">Removing soft tissue folds.</h5>
                    <p>Lasers can remove soft tissue folds from ill-fitting dentures without pain or sutures.</p>
                  </div>
                </div>
              </div>
              <br>
              <hr width="50%">
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3 ml-5 mr-5 warna2 shadow rounded">
        <div class="col-md-12">
          <div class="card-body">
            <div class="container">
              <h3 class="fontqu">What is benefits of using Laser Dentistry?</h3>
              <br>
              <ul>
                <li>Lasers can’t be used on teeth that already have certain types of filling, such as metal amalgam.</li>
                <li>Hard lasers can sometimes injure tooth pulp.</li>
                <li>Some laser procedures still require anesthesia.</li>
                <li>Drills are still sometimes needed to complete fillings, including shaping, adjusting the bite, and polishing the filling.</li>
                <li>Certain procedures can’t be done with laser treatment, depending on the preexisting surrounding tissue or components involving the tooth or gums.</li>
                <li>There is a risk of gum injury.</li>
              </ul>
              <br>
              <hr width="50%">
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3 ml-5 mr-5 bg-light">
        <div class="col-md-12">
          <div class="card-body">
            <div class="container">
              <h3 class="fontqu">Price of Laser Dentistry </h3>
              <div class="">Rp
                <?php $no = 1; 
                foreach($laser as $ar =>$row){?>
                  <tr>
                    <td><?= $row->harga ?></td>
                  </tr>  
                <?php }?>
              </div>
              <hr width="50%">
            </div>
          </div>
        </div>
      </div>
    </form>
  <!--Akhiran untuk appointments-->  
  <ul class="centerr form-inline justify-content-between" type="none" id="middle">
    <li class=""><a href=<?= site_url('User/ControlSpecialist/dentalImplant')?>><i class='fas fa-arrow-circle-left starcu' style='font-size:36px'></i></li>
    <li class=""><a href=<?= site_url('User/ControlSpecialist/orthoDontics')?>><i class='fas fa-arrow-circle-right starcu' style='font-size:36px'></i></a></li>
  </ul>