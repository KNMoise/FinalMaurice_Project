<!--Griglia alternata testo e immagine, resposive con flexbox.-->


<style>
    .col-text {
        height: 20em;
    }

    .grid-flex {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        flex-direction: row;
        -webkit-flex-direction: row;
        -webkit-flex-wrap: wrap;
        -webkit-justify-content: space-around;
    }

    .col {
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
    }

    .col-left {
        -webkit-box-ordinal-group: -1;
        -webkit-order: -1;
        -ms-flex-order: -1;
        order: -1;
    }

    .col-text {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .Aligner-item {
        width: 60%;
    }

    .col-image {
        background-size: cover;
        background-position: center center;
    }

    @media (max-width: 640px) {
        .grid-flex {
            height: 40em;
            display: -webkit-flex;
            -webkit-flex-direction: column;
            flex-direction: column;
        }

        .col {
            order: vertical;
        }

        .col-left {
            -webkit-box-ordinal-group: 0;
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
        }

        .col-text div p {
            padding: 1em;
        }

        .Aligner-item {
            width: 90%;
        }
    }
</style>
<section>
    <div class="grid-flex">
        <div class="col col-image" style="
        background-image: url(https://i0.wp.com/www.seekho.ai/blog/wp-content/uploads/2022/05/Consultant-Roles.jpg?fit=1614%2C888&ssl=1);
      "></div>
        <div class="col col-text">
            <div class="Aligner-item">
                <h3>Software consultancy</h3>
                <p>
                    From planning to implementation, our team ensures efficient and effective software solutions tailored to your needs. Trust us to drive your business forward with innovative, quality-driven strategies. </p>
            </div>
        </div>
    </div>

    <div class="grid-flex">
        <div class="col col-image" style="
        background-image: url(https://img.freepik.com/free-photo/side-view-businesswoman-showing-analytical-charts-her-male-coworker_1098-20620.jpg?t=st=1711618129~exp=1711621729~hmac=57b6bc82da4cf275488573baa8ce54606159b75f9d141a48249295a4375f5ebd&w=996);
      ">
            &nbsp;
        </div>
        <div class="col col-text col-left">
            <div class="Aligner-item">
                <h3>Project management Office Consultancy</h3>
                <p>
                    PMO Consultancy We optimize processes for efficiency and growth. Trust InnovateWithUs for top-notch PMO solutions.
                </p>
            </div>
        </div>
    </div>
</section>