<?php include('v_header.php'); $this->load->helper('html'); ?>

    <div id="page-wrapper">
        <div class="container-fluid gainsboro breadcrumb">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                      Règlement du jeu
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>">Accueil</a>
                        </li>                        
                        <li class="active">
                            <i class="fa fa-desktop"></i>
                            Règlement du jeu
                        </li>
                    </ol>
                </div>
            </div>  <!-- Row -->
            <div class="textarea_tiny">
                 <form name="formulaire" method="post" action="<?php echo base_url('C_form_management'); ?>">
                     <div>
                         <textarea name="rules"></textarea>
                     </div><br/>
                     <input class="enregister" type="submit" name="enregistrer" value="Enregistrer">
                 </form>
            </div>

        </div>  <!-- Container-fluid -->
    </div>  <!-- Page Wrapper -->
  </div>  <!-- Wrapper -->

<?php include('v_footer.php'); $this->load->helper('html'); ?> 