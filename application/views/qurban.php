  <h3 class="text-center">#Qurbankanlah</h3>
  <div class="row">
    <div class="col-md-4">
      <p>Informasi Kontak:</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>  Malang, Jawa Timur</p>
      <p><span class="glyphicon glyphicon-phone"></span>  Handphone: +62 811 222 333</p>
      <p><span class="glyphicon glyphicon-envelope"></span>  Email: qurban_mbeksite@gmail.com</p>
    </div>
    <?php echo form_open_multipart('qurban/tambahQurban');?>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
        <label for="jenis">Pilih Kambing</label>
        <select class="form-control" id="jenis" name="jenis">
          <option>Etawa</option>
          <option>Kacang</option>
          <option>Boer</option>
          <option>Saneen</option>
          <option>Kamori</option>
        </select>
        </div>
        <div class="col-sm-6 form-group">
        <label for="tujuan">Tujuan</label>
        <select class="form-control" id="tujuan" name="tujuan">
          <option>Yayasan Budi Bakti</option>
          <option>Yayasan Terbakti</option>
          <option>Yayasan Berbudi</option>
          <option>SDN 0510</option>
          <option>Panti Asuhan Al-Masyih</option>
        </select>
        </div>
        <div class="col-sm-12 form-group">
        <textarea class="form-control" id="pesan" name="pesan" placeholder="Pesan" rows="5"></textarea>
        </div>
        <div class="col-lg-12 form-group">
          <a href="<?php echo base_url('index.php/qurban'); ?>" class="btn">Qurban Saya</a>
          <input type="submit" name="kirim" class="btn" value="Kirim"/>
        </div>
      </div>
    </div>
  </form>
</div>