<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


<style>
#myFooter {
    background-color: #373a48;
    color:white;
}

#myFooter .footer-copyright{
    background-color: #383737;
    padding-top:3px;
    padding-bottom:3px;
    text-align: center;
}

#myFooter .footer-copyright p{
    margin:10px;
    color: #ccc;
}

#myFooter ul{
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;

}

#myFooter h5{
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter a{
    color:#d2d1d1;
    text-decoration: none;
}

#myFooter a:hover, #myFooter a:focus{
    text-decoration: none;
    color:white;
}

#myFooter .myCols{
    text-align: center;
}

#myFooter .social-networks{
    text-align: center;
    padding-top: 30px;
    padding-bottom: 38px;
}

#myFooter .social-networks a{
    font-size: 32px;
    margin-right: 5px;
    margin-left: 5px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

#myFooter .social-networks a:hover{
    text-decoration: none;

}

#myFooter .facebook:hover{
    color:#0077e2;
}

#myFooter .google:hover{
    color:#ef1a1a;
}

#myFooter .twitter:hover{
    color: #00aced;
}

@media screen and (max-width: 767px){
    #myFooter {
        text-align: center;
    }
}



/* CSS used for positioning the footers at the bottom of the page. */
/* You can remove this. */




.content{
    flex: 1 0 auto;
    -webkit-flex: 1 0 auto;
    min-height: 200px;
}

#myFooter{
    flex: 0 0 auto;
    -webkit-flex: 0 0 auto;
}


</style>

<div class="content">
</div>
<div class="content">
</div>
    <footer id="myFooter" class="footer">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-sm-3 myCols">
                    <h5>Hartă site</h5>
                    <ul>
                        <li><a href="index">Acasă</a></li>
                        <li><a href="products_pg">Produse</a></li>
                        <li><a href="admin/index">Admin</a></li>
                        <li><a href="privacy_pg">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Contact</h5>
                    <ul>
                        <li>0785-932-303</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="social-networks">
            <a href="https://www.facebook.com/livrariproduseromanesti/" class="facebook"><i class="fa fa-facebook-official"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Pop Rosian </p>
        </div>
    </footer>