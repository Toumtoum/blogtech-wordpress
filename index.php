<?php get_header(); ?>
<div class="container">
         <div class="row">
           <div class="col-md-3 profil"><!--Profil-->
             <aside>

             <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/avatar.jpg"
                           alt="AVATAR" class="img-circle">
             <h4>@Toumtoum</h4>
             <p><i>Developpeur Web au stade embryonnaire<br/>Tech enthusiast</i></p>
             <hr>
             <ul>

               <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/icônes/twitter.jpg"
                             alt="TWITTER" class="img-circle">


               <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/icônes/email.jpg"
                             alt="EMAIL" class="img-circle">

               <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/icônes/linkedin.jpg"
                             alt="LINKEDIN" class="img-circle">

             </hr>
           </aside>
           </div>

           <div class="col-md-8"><!--Posts-->
             <article>
               <h2>Mon premier article</h2>
                 <h4>Posté le 19/06/2017</h4>
                   <div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                   <a href="#">Lire</a></div>
                   <hr>
               <h2>Mon deuxième article</h2>
                 <h4>Posté le 19/06/2017</h4>
                   <div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                   <a href="#">Lire</a></div>
                   <hr>
               <h2>Mon troisième article</h2>
                 <h4>Posté le 19/06/2017</h4>
                   <div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                   <a href="#">Lire</a></div>
                   <hr>
             </article>
           </div>
         </div>
       </div>
<?php get_footer(); ?>
