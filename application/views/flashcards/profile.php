<?php echo $header; ?>
<div class="ccontent">
    <div class="container">
        <div class="row">
            <?php echo $sidebar; ?>
            <div class="col-sm-9 col-md-9">                
                <?php echo $top_sidebar; ?>	

                <ul class="nav nav-tabs">
                    <li><a href="<?php echo site_url('john-doe'); ?>">Desk</a></li>
                    <li><a href="<?php echo site_url('john-doe/portfolio'); ?>">Portfolio</a></li>
                    <li class="active"><a href="<?php echo site_url('john-doe/profile'); ?>">Profile</a></li>
                    <li><a href="<?php echo site_url('blog/john-doe'); ?>">Blog</a></li>
                </ul>
                <br>

				<div class="profile">
					<a href="<?php echo site_url('blog/john-doe/blog-test'); ?>">
	                    <img class="img-responsive" width="900" height="450" src="<?php echo base_url('assets/img/placeholder-2x1.jpg'); ?>" alt="flashcard cover">
	                </a>
	                <br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, provident, sunt nesciunt officiis enim sapiente mollitia esse soluta exercitationem delectus nam dolor rem necessitatibus quibusdam perspiciatis. Quia, amet, optio, id, impedit dolores nobis blanditiis nihil corporis voluptatum enim magnam commodi nam veniam esse alias sit doloremque obcaecati in necessitatibus laborum.</p>
					<p>Mollitia, eos, rem quam iste delectus laudantium nesciunt illum tenetur soluta quasi voluptatum molestias suscipit nulla libero repellat vero sit error commodi quibusdam aspernatur quas atque reprehenderit aut modi sapiente quos illo voluptatem ratione sint molestiae. Aliquam, voluptas, inventore, repellat minus dignissimos debitis ex culpa alias vel voluptatem porro quam.</p>
					<p>Rem, voluptatem tempore commodi dolores consectetur adipisci odio suscipit perferendis sit ratione. Iusto, vel, odio optio sit eos rerum voluptas adipisci atque ab amet ut aspernatur facere laborum quae vitae cupiditate dolore omnis veritatis ea sint! Alias, et, amet nostrum commodi vitae ipsum atque illo quae eligendi ut. Soluta, architecto.</p>
					<p>Necessitatibus, laborum, vero, dicta cumque perferendis repudiandae perspiciatis dolore fuga dignissimos omnis enim dolores natus aperiam iusto ullam corporis sed illo est doloribus consequuntur nihil autem magnam! Tempore, facere, similique ab cupiditate voluptate deserunt aliquam error quia voluptatem deleniti illo dignissimos neque illum quaerat numquam nam repellendus? Maxime, possimus voluptas.</p>
					<p>Et pariatur dolorum iure beatae assumenda doloremque culpa. Unde, inventore, similique deserunt reiciendis quod quasi aperiam a sequi explicabo eum quis molestias saepe perspiciatis nulla dicta sit vel veritatis tenetur accusamus odit harum est cupiditate sapiente dignissimos totam laudantium asperiores animi magnam nobis pariatur ut quisquam nemo debitis voluptatibus obcaecati.</p>
				</div>
            </div>
        </div>
    </div>
</div>
<?php echo $footer; ?>