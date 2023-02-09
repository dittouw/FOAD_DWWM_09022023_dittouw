<?php include './partials/header.php';?>
    <nav>
      <div id="brand">Gourmet au catering</div>
      <ul id="menu">
        <li>About</li>
        <li>Menu</li>
        <li>Contact</li>
      </ul>
    </nav>
    <div id="imgHeader"><h1>Le Catering</h1></div>

    <section id="about">
      <div class="card">
        <img
          src="./assets/img/tablesetting2.jpg"
          alt="tablesetting2"
          class="image"
        />
      </div>

      <div class="card">
        <h2>About Catering</h2>
        <h3>Tradition since 1889</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus
          non error id accusamus assumenda molestiae porro, totam deleniti ipsam
          nobis odio explicabo laudantium tempora quisquam dolor perferendis
          consequatur expedita ullam. Quos asperiores aspernatur nostrum
          voluptatem ipsam explicabo tempora, natus ex numquam. Tenetur placeat
          maxime eius voluptatem esse totam? Dicta harum voluptatum totam fugiat
          dolore molestias quod dolorum quo libero id?
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores neque
          ipsa doloribus odio exercitationem. Incidunt rerum voluptas expedita
          minus quis iste quae. Consequatur totam, sit accusantium illo
          necessitatibus in culpa. Voluptatem alias nam quas ratione, laboriosam
          perferendis fugiat, maxime architecto sunt animi consequatur
          reiciendis, quo quis. Totam officiis et quis enim dignissimos ducimus
          nemo optio at deleniti nobis, omnis officia?
        </p>
      </div>
    </section>

    <section id="our-menu">
      <div class="our">
        <img src="./assets/img/tablesetting.jpg" alt="" class="image" />
      </div>
      <div class="card">
        <h2>Our Menu</h2>
        <h3>Bread Basket</h3>
        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>

        <h3>Honey almond Granole with fruits</h3>
        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>

        <h3>Belgian Waffle</h3>
        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>

        <h3>Scrambled eggs</h3>
        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>

        <h3>Blueberry Pancakes</h3>
        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
      </div>
    </section>
    <section id="contact">
      <h2>Contact</h2>
      <p>
        We offer full-service catering for any event, large or small. We
        understand your needs and we will cater the food to satisfy the biggest
        criteria of them all, both look and taste. Do not hesitate to contact
        us.
      </p>
      <h4>Catering Service,42nd Living st, 43043 New York, NY</h4>
      <p>
        You can also contact us by phone 00553123-2323 or email
        catering@catering.com, or you can send us a message here :
      </p>

      <form action="" method="post">
        <div>
          <input 
          type="text" 
          name="Name" 
          id="name" 
          placeholder="Name" />
        </div>
        <div>
          <input
            type="text"
            name="people"
            id="people"
            placeholder="How many people"
          />
        </div>
        <div>
          <input type="datetime-local" name="date" id="date" />
        </div>
        <div>
          <input
            type="text"
            name="message"
            id="message"
            placeholder="Message\Special requirements"
          />
        </div>
        <div>
          <input 
          type="submit" 
          value="SEND MESSAGE" 
          name="submited" 
          id="send" />
        </div>
      </form>
    </section>
    <?php include './partials/footer.php'; ?>