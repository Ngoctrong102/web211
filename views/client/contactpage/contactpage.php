<div class="container">
    <div class="breadcum">
        <ul>
            <li>
                <a href="#">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
            <li class="active">
                <a href="#">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="coverContactPage">
        <div class="contactpage">
            <div class="col1">
                <div class="titleContact">
                    <span>Contact Us</span>
                </div>
                <div class="address">
                    <div class="row1">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <span>Address</span>
                    </div>
                    <div class="row2">
                        <p>Bach Khoa Tp.HCM, Dong Hoa, Di An</p>
                    </div>
                </div>
                <div class="phone">
                    <div class="row1">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>         
                        <span>Phone</span>
                    </div>
                    <div class="row2">
                        <p>Hotline: 0848 806 872</p>
                    </div>
                </div>
                <div class="email">
                    <div class="row1">
                        <div class="icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <span>Email</span>
                    </div>
                    <div class="row2">
                        <p>Email: hovaten@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="titleContact">
                    <span>Tell Us Your Message</span>
                </div>
                <form action="contact/addnewcontact" method="POST" class="formContact">
                    <div class="inputform">
                        <div class="nametext">
                            <span>Your Name</span> 
                        </div>
                        <input type="text" name="name">
                    </div>
                    <div class="inputform">
                        <div class="nametext">
                            <span>Your Email</span>
                        </div>
                        <input type="text" name="email">
                    </div>
                    <div class="inputform">
                        <div class="nametext">
                            <span>Title</span>
                        </div>  
                        <input type="text" name="title">
                    </div>
                    <div class="inputMess">
                        <div class="nametext">
                            <span>Your Message</span> 
                        </div>
                        <textarea  id="messContact" cols="30" rows="8" name="message"></textarea>
                    </div>
                    <button type="submit">Send</button>
                </form>
            </div>
            <div class="row3">
    
            </div>
        </div>
    </div> 