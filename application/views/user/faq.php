  <!--Awalan untuk appointment--> 
  <form>
    <div class="col-md-12">
      <div class="sec-title max-width text-center gambarr2">
        <h1>Get Your Answer Here</h1>
        <p>Here you can get your answers about our dental company,service and more...</p>
      </div>
    </div>
  </form>
  <!--Akhiran untuk appointments-->  

  <div class="container">
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        This section contains a wealth of information, related to <strong>PrepBootstrap</strong> and its store. If you cannot find an answer to your question, 
        make sure to contact us. 
    </div>

    <br />

    <div class="" id="accordion">
        <div class="faqHeader text-center">Frequently Asked Questions</div>
        <?php foreach($faq_data as $af => $row){?>
            <?php if($row->id_faq % 2 == 1){ ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-header menu">
                            <a class="accordion-toggle collapsed text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven<?= $row->id_faq?>"><?= $row->pertanyaan ?></a>
                        </h5>
                    </div>
                    <div id="collapseEleven<?= $row->id_faq?>" class="panel-collapse collapse in">
                        <div class="card-block letak2">
                        <?= $row->jawaban ?>
                        </div>
                    </div>
                </div>
            <?php }elseif($row->id_faq % 2 == 0){?>
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-header warna">
                            <a class="accordion-toggle collapsed text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven<?= $row->id_faq?>"><?= $row->pertanyaan ?></a>
                        </h5>
                    </div>
                    <div id="collapseEleven<?= $row->id_faq?>" class="panel-collapse collapse in">
                        <div class="card-block letak2">
                        <?= $row->jawaban ?>
                        </div>
                    </div>
                </div>
            <?php }?>
        <?php }?>
        </div>
    </div>
