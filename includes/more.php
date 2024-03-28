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
        background-image: url(https://kikde.com/assets/uploads/media-uploader/da-art-0001-rev100-digital-consulting1671190966.png);
      "></div>
        <div class="col col-text">
            <div class="Aligner-item">
                <h3>Digital transformation consulting</h3>
                <p>
                    We provide expert consultation, aligning digital strategies with business goals, ensuring a roadmap for successful and tailored digital transformations
                </p>
            </div>
        </div>
    </div>

    <div class="grid-flex">
        <div class="col col-image" style="
        background-image: url(https://learn.g2.com/hubfs/lead%20generation%20strategies.jpg);
      ">
            &nbsp;
        </div>
        <div class="col col-text col-left">
            <div class="Aligner-item">
                <h3>Digital strategies development</h3>
                <p>
                Working in collaboration with our clients, we help them leverage the power of digital technologies to achieve their goals and stay competitive in today's digital age.
                </p>
            </div>
        </div>
    </div>

    <div class="grid-flex">
        <div class="col col-image" style="
        background-image: url(https://img.freepik.com/free-photo/business-marketing-planning-trategy-graph_53876-121052.jpg?t=st=1711628885~exp=1711632485~hmac=8d4a8f26e1a4dcbf099a231e60321ce889169930b2f07f3142fb57faf082d1cb&w=1380);
      ">
            &nbsp;
        </div>
        <div class="col col-text">
            <div class="Aligner-item">
                <h3>Digital transformation strategy implementation</h3>
                <p>
                Our team of seasoned professionals understands the intricacies of transforming businesses and leveraging technology for growth. With a track record of successful projects and satisfied clients, we offer tailored services, cutting-edge technologies, and a commitment to delivering exceptional results.
                </p>
            </div>
        </div>
    </div>

    <div class="grid-flex">
        <div class="col col-image" style="
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/280406/madison-overture.jpg);
      ">
            &nbsp;
        </div>
        <div class="col col-text col-left">
            <div class="Aligner-item">
                <h3>Change management and training</h3>
                <p>
                Navigating organizational change is among the most intricate facets of digital transformation. while some digital transformation services providers focus on processes and technology, we help our client to focus on the human element to drive change withing organization.
                </p>
            </div>
        </div>
    </div>

    <div class="grid-flex">
        <div class="col col-image" style="
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/280406/madison-rainbow.jpg);
      ">
            &nbsp;
        </div>
        <div class="col col-text">
            <div class="Aligner-item">
                <h3>Business Processes improvement</h3>
                <p>
                We work with our clients’ teams to identify any inefficiencies and bottlenecks in their processes and design processes to be more streamlined, automated, and responsive to changing demands.
                </p>
            </div>
        </div>
    </div>
    <div class="grid-flex">
        <div class="col col-image" style="
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/280406/madison-overture.jpg);
      ">
            &nbsp;
        </div>
        <div class="col col-text col-left">
            <div class="Aligner-item">
                <h3>Workflow automation</h3>
                <p>
                We automate business processes for enhanced productivity and reduced manual workload, streamlining workflows to prioritize strategic growth and innovation.
                </p>
            </div>
        </div>
    </div>
</section>