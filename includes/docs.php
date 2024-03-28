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
        background-image: url(https://imgs.search.brave.com/_h8WRortqN3-ViRvRM6lfYCBuXEKIO2HpFgKX8cO5Yw/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/Z2xhc3NjdWJlcy5j/b20vYXNzZXRzL1Vw/bG9hZHMvRURNUy1B/bnN3ZXJzLVRvLTYt/RkFRcy1BYm91dC1F/bGVjdHJvbmljLURv/Y3VtZW50LU1hbmFn/ZW1lbnQtU29mdHdh/cmUuanBn);
      "></div>
        <div class="col col-text">
            <div class="Aligner-item">
                <h3>EDMS solutions</h3>
                <p>
                    Our wide range of solutions help organizations of all sizes to capture, distribute and centrally store, organize, and efficiently and securely manage electronic documents.
            </div>
        </div>
    </div>
<!-- <div class="small" style="margin:20px;"></div> -->
    <div class="grid-flex">
        <div class="col col-image" style="
        background-image: url(https://5.imimg.com/data5/SELLER/Default/2023/1/GG/WX/UY/11335431/records-document-digitization-service-500x500.jpg);
      ">
            &nbsp;
        </div>
        <div class="col col-text col-left">
            <div class="Aligner-item">
                <h3>Digitization services</h3>
                <p>
                Our team of professionals help organizations to convert their paper documents and images into electronic records to reduce paper usage, save storage space, improve access to information and collaboration, while safeguarding and enhancing information security.                 </p>
            </div>
        </div>
    </div>
    <div class="grid-flex">
        <div class="col col-image" style="
        background-image: url(https://img.freepik.com/free-photo/young-businessman-working-office_273609-5631.jpg?w=996&t=st=1711621052~exp=1711621652~hmac=706f5872a6f6bd9ed638b0aabdb6a3b97de6a40c01ef6654f34fe13f75773d3b);
      "></div>
        <div class="col col-text">
            <div class="Aligner-item">
                <h3>Records management consultancy</h3>
                <p>
                We help organizations to understand the nature of records, draw policies and procedures that govern records management. We also help them to process their physical archives and create a properly organized physical archive that meets the standards and complies with the policies.            </div>
        </div>
    </div>
<!-- <h4 style="text-align: center;">RWANDA</h4>
<p>
    descr
</p> -->
    <div class="grid-flex">
        <div class="col col-image" style="
        background-image: url(https://cc.sj-cdn.net/instructor/253npnay2ssjj-egnyte/courses/1x0icko0o6x5b/promo-image.1673395359.png);
      ">
            &nbsp;
        </div>
        <div class="col col-text col-left">
            <div class="Aligner-item">
                <h3>Document & records management training</h3>
                <p>
                We help organizations to build capacity of their internal records management team through training and continuous improvement programs tailored to each every organization.                </p>
            </div>
        </div>
    </div>

</section>