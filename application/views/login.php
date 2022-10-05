<style>
    .card-body {
        background-color: aqua;
        box-shadow: black;
    }
</style>
<!-- ======= Departments Section ======= -->
<section id="departments" class="departments">
    <div class="container bg-transparent">

        <div class="section-title mt-4">
            <h2><?= $title; ?> </h2>
        </div>
        <div class="container-login">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0" id="card">
                    <div class=" row mb-3 mt-3 p-5">

                        <form class="user" action="<?php echo base_url(); ?>home/proses_login" method="POST">
                            <input name="<?= $this->security->get_csrf_token_name(); ?>" type="hidden" value="<?= $this->security->get_csrf_hash(); ?>" />


                            <div class="form-group mt-3">
                                <input type="email" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                            </div>

                            <div class="form-group col-md-2 mt-3">
                                <select name="pilihan" class="form-control form-control-user">
                                    <option value="">Pilih..</option>
                                    <option value="user">User</option>
                                    <option value="dokter">Dokter</option>
                                </select>
                            </div>

                            <button class="btn btn-primary btn-user btn-block col-md-3 mt-3 mb-3" type="submit">Login</button>


                        </form>

                    </div>

                </div>
            </div>
        </div>
</section><!-- End Departments Section -->