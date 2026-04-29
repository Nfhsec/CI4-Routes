<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="row">
  <div class="col-12 col-xl-10">
    <div class="card border-0 shadow-sm">
      <div class="card-body p-4 p-md-5">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center gap-3 mb-4">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center bg-primary text-white" style="width:64px;height:64px;">
            <i class="bi bi-person fs-3"></i>
          </div>
          <div>
            <h3 class="mb-1">Profil Pengguna</h3>
            <p class="text-muted mb-0">Informasi akun aktif.</p>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <tbody>
              <tr>
                <th class="text-nowrap" style="width: 220px;">Username</th>
                <td><span class="fw-semibold"><?= esc($username ?? '-') ?></span></td>
              </tr>
              <tr>
                <th class="text-nowrap">Role</th>
                <td><span class="badge bg-primary"><?= esc($role ?? '-') ?></span></td>
              </tr>
              <tr>
                <th class="text-nowrap">Email</th>
                <td><?= esc($email ?? '-') ?></td>
              </tr>
              <tr>
                <th class="text-nowrap">Waktu Login</th>
                <td><?= esc($login_time ?? '-') ?></td>
              </tr>
              <tr>
                <th class="text-nowrap">Status Login</th>
                <td><span class="badge bg-success"><?= esc($login_status ?? 'Belum Login') ?></span></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="d-flex flex-wrap gap-2 mt-4">
          <a href="<?= site_url('/') ?>" class="btn btn-outline-secondary">
            <i class="bi bi-house-door me-1"></i> Home
          </a>
          <a href="<?= site_url('logout') ?>" class="btn btn-primary">
            <i class="bi bi-box-arrow-right me-1"></i> Logout
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
