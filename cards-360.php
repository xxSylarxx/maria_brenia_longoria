
  <style>


        .wrapper {
            width: 90%;
            margin: 0 auto;
            max-width: 80rem;
        }

        .cols {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .cols > .col {
            width: calc(25% - 2rem);
            margin: 1rem;
            cursor: pointer;
        }

        .container-card {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-perspective: 1000px;
            perspective: 1000px;
        }

        .front,
        .back {
            background-size: cover;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            background-position: center;
            -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            text-align: center;
            min-height: 280px;
            box-shadow: 0 0 10px solid blue;

            height: auto;
            border-radius: 10px;
            color: #fff;
            font-size: 1.5rem;
        }

        .back {
            background: var(--color4);
            background: -webkit-linear-gradient(45deg, var(--color4) 0%, #D39F15 100%);
            background: -o-linear-gradient(45deg, var(--color4) 0%, #D39F1572 100%);
            background: linear-gradient(45deg, var(--color4) 0%, #D39F15 100%);
        }

        .front:after {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            content: '';
            display: block;
            opacity: .4;
            background-color: #000;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 10px;
        }

        .container-card:hover .front,
        .container-card:hover .back {
            -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        }

        .back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .inner {
            -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
            transform: translateY(-50%) translateZ(60px) scale(0.94);
            top:80%;
            position: absolute;
            left: 0;
            width: 100%;
            padding: 2rem;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            outline: 1px solid transparent;
            -webkit-perspective: inherit;
            perspective: inherit;
            z-index: 2;
        }
        .inner2 {
            -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
            transform: translateY(-50%) translateZ(60px) scale(0.94);
            top:60%;
            position: absolute;
            left: 0;
            width: 100%;
            padding: 2rem;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            outline: 1px solid transparent;
            -webkit-perspective: inherit;
            perspective: inherit;
            z-index: 2;
        }

        .container-card .back {
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .container-card .front {
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .container-card:hover .back {
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .container-card:hover .front {
            -webkit-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .front .inner p {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .front .inner p:after {
            content: '';
            width: 4rem;
            height: 2px;
            position: absolute;
            background: #C6D4DF;
            display: block;
            left: 0;
            right: 0;
            margin: 0 auto;
            bottom: -.75rem;
        }

        .front .inner span {
            color: rgba(255, 255, 255, 0.7);
            font-family: 'Montserrat';
            font-weight: 300;
        }

        @media screen and (max-width: 64rem) {
            .cols > .col {
                width: calc(33.333333% - 2rem);
            }
        }

        @media screen and (max-width: 48rem) {
            .cols > .col {
                width: calc(50% - 2rem);
            }
        }

        @media screen and (max-width: 32rem) {
            .cols > .col {
                width: 100%;
                margin: 0 0 2rem 0;
            }
        }

       
    </style>
<div class="wrapper">
        <div class="cols">
            <a href="./primaria.php" class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container-card">
                    <div class="front" style="background-image: url(./public/img/web/p-inicio-primaria.jpg)">
                        <div class="inner">
                            <p>Nivel Primaria</p>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner2">
                            <p >Este perfil busca formar una estudiante alegre, comprometida con su entorno, su fe y su formación como agente de cambio.</p>
                            <span>Ver Más</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="./secundaria.php" class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container-card">
                    <div class="front" style="background-image: url(./public/img/web/p-inicio-secundaria.jpg)">
                        <div class="inner">
                            <p>Nivel Secundaria</p>
                            
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner2">
                            <p>La egresada del nivel secundaria se forma como una joven íntegra, comprometida con su fe, su entorno y su proyecto de vida.</p>
                            <span>Ver Más</span>
                        </div>
                    </div>
                </div>
            </a>
            <!--<div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container-card">
                          <div class="front" style="background-image: url(https://unsplash.it/502/502/)">
                              <div class="inner">
                                  <p>Strizzes</p>
                    <span>Lorem ipsum</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container-card">
                          <div class="front" style="background-image: url(https://unsplash.it/503/503/)">
                              <div class="inner">
                                  <p>Clossyo</p>
                    <span>Lorem ipsum</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container-card">
                          <div class="front" style="background-image: url(https://unsplash.it/504/504/">
                              <div class="inner">
                                  <p>Rendann</p>
                    <span>Lorem ipsum</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container-card">
                          <div class="front" style="background-image: url(https://unsplash.it/505/505/)">
                              <div class="inner">
                                  <p>Reflupper</p>
                    <span>Lorem ipsum</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container-card">
                          <div class="front" style="background-image: url(https://unsplash.it/506/506/)">
                              <div class="inner">
                                  <p>Acirassi</p>
                    <span>Lorem ipsum</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container-card">
                          <div class="front" style="background-image: url(https://unsplash.it/508/508/)">
                              <div class="inner">
                                  <p>Sohanidd</p>
                    <span>Lorem ipsum</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
                              </div>
                          </div>
                      </div>
                  </div>-->
        </div>
    </div>