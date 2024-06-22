<!-- Book A Table Section -->
<section id="book-a-table" class="book-a-table section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Book A Table</h2>
        <p><span>Book Your</span> <span class="description-title">Stay With Us<br></span></p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-4 reservation-img" style="background-image: url({{ asset('assets/gambar/PK3.jpeg') }});">
            </div>

            <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200">
                <form method="get" role="form" class="php-email-form">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="Your Phone">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="date" name="date" class="form-control" id="date" placeholder="Date">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="time" class="form-control" name="time" id="time" placeholder="Time">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="number" class="form-control" name="people" id="people"
                                placeholder="Jumlah Pesanan Minimal 20" min="20">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your booking request was sent. We will call back or send an
                            Email to confirm your reservation. Thank you!</div>
                    </div>
                    <div class="text-center">
                        <a href="https://wa.me/6285800000000?text=Halo%20saya%20%3A%0A%0A%20Nama%20%3A%20{{ request()->input('name') }}%0A%0A%20Email%20%3A%20{{ request()->input('email') }}%0A%0A%20Tanggal%20%3A%20{{ request()->input('date') }}%0A%0A%20Jam%20%3A%20{{ request()->input('time') }}%0A%0A%20Orang%20%3A%20{{ request()->input('people') }}%0A%0A%20Pesan%20%3A%0A%0A%20%3A%20{{ request()->input('message') }}"
                            target="_blank" class="btn btn-success">Book a Table</a>
                    </div>
                </form>
            </div><!-- End Reservation Form -->

        </div>

    </div>

</section><!-- /Book A Table Section -->
