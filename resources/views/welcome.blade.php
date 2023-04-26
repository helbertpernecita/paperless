@extends('layouts.guest')
@section('guest-content')


<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- <div class="card-columns"> -->
                <div class="card">
                    <div style="width:100%;height:0;padding-bottom:56%;position:relative;" class="intro">
                        <iframe src="https://giphy.com/embed/QpVUMRUJGokfqXyfa1" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><img src="/asset/dist/img/images.jpg"  alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">What does HHP innovation does?</h5>
                        <p class="card-text">provide services to all willing to innovate and have a succesful business in the future.</p>
                        <cite class="mt-1">We will digitalized your transactions.</cite>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                        <h5 class="card-title">What does HHP innovation beliefs?</h5>
                        <p>We have a humble attitude to adapt and learn about your business</p>

                        <p>"Your most unhappy customers are your greatest source of learning."</p>
                        <footer class="blockquote-footer text-info pl-2">
                            <small>
                                <cite title="Source Title"> Bill Gates</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                            <h5 class="card-title">Why choose us over big campanies?</h5>
                            <p class="card-text" style="font-size: .85rem">With HHPI, you need not to spend to much. We will be your partner, together, will pursue the road to success and will never leave you behind.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card bg-light text-center p-3">
                    <img src="{{asset('img/photo1.png')}}" class="card-img-top intro" alt="..." >
                    <!-- style="transform:skew(10deg)" -->

                    <blockquote class="blockquote mb-0 card-body">
                        <p style="font-size: .85rem">"Excellent customer service is our number one goal! It is our personality and the reason for the customers to trust. Without customers there is no us!"
                        </p>
                            <footer class="blockquote-footer float-right text-info">
                                <cite>Helbert Pernecita</cite>
                            </footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Revolutionizing your Digital Marketing</h5>
                        <p class="card-text" style="font-size: .85rem">Our offer is to provide you the best options you may have to. From storing of datas, creating of reports, seeing all transactions in your business even if your out of town. We will let you keep in touch with your business wherever you are.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card intro">
                    <div id="about" style="width:100%;height:0;padding-bottom:56%;position:relative;">
                        <img src="{{asset('img/photo2.png')}}"  alt="..." width="100%" height="100%" style="position:absolute" >
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Our Promise</h5>
                        <p class="card-text">We will help you until you reach the top of your goal then give you something more over yuor goal. We will keep your business innovation as normal.</p>
                    </div>
                </div>
                <div class="card p-3">
                    <blockquote class="blockquote mb-0">
                        <small class="text-muted">
                            Our business clients...
                        </small>
                        <div class="cardtitle mt-3 ml-4">
                                <a href="leadpack-login">
                                    <em> ...Leadpack Corporation</em></a><br>
                                <a href="#" title="coming soon">
                                    <em>...Braveheart Buy & Sell</em></a><br>
                                <a href="#" title="coming soon">
                                    <em>...Find to Rent App</em></a><br>
                            </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card intro">
                    <div class="card-body">
                        <div style="width:100%;height:0;padding-bottom:56%;position:relative;" class="intro">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=california&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card intro">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Contact us..</h2>
                        </div>
                    </div>
                    <div class="card-body" id="contact">
                        <form action="#">
                            <label for="fname">Complete Name</label>
                            <input type="text" id="fname"  class="form-control mb-2" name="firstname" placeholder="Your name..">
                            <label for="email">Email</label>
                            <input type="email" id="email"  class="form-control mb-2" name="email" placeholder="guest_mail@example.com">
                            <label for="message">Message</label>																				
                            <textarea id="message" class="form-control" name="message" placeholder="Write something.." style="height:200px"></textarea>
                            <input type="submit" class="btn btn-info float-right my-2" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>



@endsection