<script src="https://kit.fontawesome.com/897dbd24c8.js" crossorigin="anonymous"></script>
<?php include_once "addons/header.php"; ?>
<main>
    <!------------------------------ eerste div ----------------------------->
    <div id="q0">
        <div class="shadow_item_1"></div>
        <div class="item_1">
            <!------------ next knop -------------->
            <button onclick="next()" type="submit" name="next" id="next">
                <p>Next <i class="fas fa-caret-right"></i></p>
            </button>
            <!------------ einde next knop -------------->

            <!----------- logo links boven ---------------------->
            <div class="styling_item_1"></div>
            <div class="styling_item_2">
                <h1>K</h1>
                <p>人</p>
                <p>大</p>
                <img src="image/plaatje1.png" alt="">
            </div>
            <!----------- einde logo links boven ---------------------->
            <div class="styling_item_3"></div>
        </div>
    </div>

    <!--------------------------- einde eerste div -------------------------------------------->


    <!----------------- tweede div -------------->
    <div id="q1">
        <div class="shadow_item_2">
            <div class="shadow_styling_item_1"></div>
            <div class="shadow_styling_item_2"></div>
        </div>
        <div class="item_2">
            <div id="infinity"></div>
            <div class="styling_item_4"></div>
            <div class="styling_item_5"></div>

            <!-- logo links boven --->
            <div class="styling_item_6">
                <h1>A</h1>
                <p>柜</p>
                <p>最</p>
                <img src="image/plaatje1.png" alt="">
            </div>
            <!-- einde logo links boven --->

            <button  onclick="next()"  type="submit" name="next" id="next">
                <p>Next <i class="fas fa-caret-right"></i></p>
            </button>
        </div>
    </div>
    <!----------------- einde tweede div ---------------->


    <!--------------- derde div ----------------->
    <div id="q2">
        <div class="shadow_item_3"></div>
        <div class="item_3">
            <div id="yin_yang"></div>
            <div class="styling_item_7"></div>
            <div class="styling_item_8"></div>
            <div class="styling_item_9"></div>

            <!-- logo links boven -->
            <div class="styling_item_10">
                <h1>B</h1>
                <p>在</p>
                <p>提</p>
                <img src="image/plaatje1.png" alt="">
            </div>
            <!-- einde logo links boven -->

            <div class="styling_item_11"></div>

            <button  onclick="next()"  type="submit" name="next" id="next">
                <p>Next <i class="fas fa-caret-right"></i></p>
            </button>
        </div>
    </div>
    <!--------------- einde derde div ---------------->


    <!--------- dna spinners -------------->
    <div id="dna_holder" class="dna1">
        <img src="image/kisspng-dna-scalable-vector-graphics-computer-icons-gene-kaznmu-kz-pictures-to-pin-on-pinterest-5cd2d759551760.1028175115573215613485.png"
             alt="">
    </div>
    <div id="dna_holder" class="dna2">
        <img src="image/kisspng-dna-scalable-vector-graphics-computer-icons-gene-kaznmu-kz-pictures-to-pin-on-pinterest-5cd2d759551760.1028175115573215613485.png"
             alt="">
    </div>
    <div id="dna_holder" class="dna3">
        <img src="image/kisspng-dna-scalable-vector-graphics-computer-icons-gene-kaznmu-kz-pictures-to-pin-on-pinterest-5cd2d759551760.1028175115573215613485.png"
             alt="">
    </div>
    <div id="dna_holder" class="dna4">
        <img src="image/kisspng-dna-scalable-vector-graphics-computer-icons-gene-kaznmu-kz-pictures-to-pin-on-pinterest-5cd2d759551760.1028175115573215613485.png"
             alt="">
    </div>
    <div id="dna_holder" class="dna5">
        <img src="image/kisspng-dna-scalable-vector-graphics-computer-icons-gene-kaznmu-kz-pictures-to-pin-on-pinterest-5cd2d759551760.1028175115573215613485.png"
             alt="">
    </div>
    <div id="dna_holder" class="dna6">
        <img src="image/kisspng-dna-scalable-vector-graphics-computer-icons-gene-kaznmu-kz-pictures-to-pin-on-pinterest-5cd2d759551760.1028175115573215613485.png"
             alt="">
    </div>
    <div id="dna_holder" class="dna7">
        <img src="image/dna_paars.png" alt="">
    </div>
    <div id="dna_holder" class="dna8">
        <img src="image/dna_paars.png" alt="">
    </div>
    <div id="dna_holder" class="dna9">
        <img src="image/dna_paars.png" alt="">
    </div>
    <!--------------- einde dna spinners --------------->


</main>
<script>
    var showing = [1, 0, 0];
    var questions = ['q0', 'q1', 'q2'];
    function next() {
        var qElems = [];
        for (var i = 0; i < questions.length; i++) {
            qElems.push(document.getElementById(questions[i]));
        }
        for (var i = 0; i < showing.length; i++) {
            if (showing[i] == 1) {
                qElems[i].style.display = 'none';
                showing[i] = 0;
                if (i == showing.length - 1) {
                    qElems[0].style.display = 'block';
                    showing[0] = 1;
                } else {
                    qElems[i + 1].style.display = 'block';
                    showing[i + 1] = 1;
                }
                break;
            }
        }
    }

</script>
