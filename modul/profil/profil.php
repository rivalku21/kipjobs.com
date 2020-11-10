<?php 

include "modul/profil/uploadphoto.php";
if (isset($_GET['page'])) {

  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_user where id_user='$_GET[id]'");
  $data = mysqli_fetch_array($tampil);
  if($data) {
        $vname = $data['name'];
        $vusername = $data['username'];
        $vemail = $data['email'];
        $vphone_number = $data['phone_number'];
        $vprofesi = $data['profesi'];
        $vuser_photo = $data['user_photo'];

      }
  if(isset($_POST['upload'])){
    $userupload = uploadphoto();
    $savephoto = mysqli_query($koneksi, "UPDATE tbl_user(user_photo) SET user_photo = '$userupload'");
        if($savephoto){
          echo "<script>
            alert('Ubah Data Sukses');
            document.location='';
            </script>";
        }else{
          echo "<script>
            alert('Ubah Data Gagal');
            document.location='';
            </script>";
            return false;
        }
  }
}
?>

<style>
    body {
        background-attachment: fixed;
        background-image: linear-gradient(0deg, transparent 0%, transparent 58%,rgba(104, 104, 104,0.05) 58%, rgba(104, 104, 104,0.05) 92%,transparent 92%, transparent 100%),linear-gradient(45deg, transparent 0%, transparent 34%,rgba(104, 104, 104,0.05) 34%, rgba(104, 104, 104,0.05) 77%,transparent 77%, transparent 100%),linear-gradient(0deg, transparent 0%, transparent 33%,rgba(104, 104, 104,0.05) 33%, rgba(104, 104, 104,0.05) 53%,transparent 53%, transparent 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));
    }
</style>
<link rel="stylesheet" href="assets/css/style1.css">
<div class="container">
  <div class="center">
    <div class="front-face">
      <div class="contents front">
        <p><?=@$vname?></p>
        <span><?=@$vphone_number?></span>
      </div>
    </div>
    <div class="back-face">
      <div class="contents back">
        <h2><?=@$vemail?></h2>
        <span>Follow Me</span>
        <div class="icons">
          <a href=""><i class="fa fa-facebook-f"></i></a>
          <a href=""><i class="fa fa-twitter"></i></a>
          <a href=""><i class="fa fa-instagram"></i></a>
          <a href=""><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-sm-8 float-sm-right">
      <div class="container emp-profile">
          <div class="row">
              <div class="col-sm-4">
                  <div class="profile-img">
                      <img src="image/1200px-Circle-icons-profile.svg.png" alt="">
                      <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-camera"></i></button>

                      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Upload Your Photo Here!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="image/1200px-Circle-icons-profile.svg.png" alt="">
                              <img class="preview" id="preview" src="#" alt="">
                              <form method="POST" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                      <div class="form-group files">
                                        <input type="file" name="userupload" class="userupload" id="userupload" multiple="" onchange="readURL(this);">
                                      </div>
                                  <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="upload" id="upload" class="btn btn-primary">Save change</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6">
                    <div class="profile-head">
                        <h5>
                            <?=@$vname?>  
                        </h5>
                        <h6>
                            <?=@$vprofesi?>
                        </h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul>
                    </div>
              </div>
              <div class="col-sm-2">
                <div class="editbtn">
                    <a class="fa fa-cogs" href="?page=profil&id=<?php echo $id_user; ?>&why=edit"></a>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              
            </div>
            <div class="col-sm-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>User</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <p><?=@$vusername?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <p><?=@$vname?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <p><?=@$vemail?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <p><?=@$vphone_number?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <p><?=@$vprofesi?></p>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
function readURL(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader
 
reader.onload = function (e) { // Mulai pembacaan file
$('#preview') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result) // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};
 
reader.readAsDataURL(input.files[0]);
}
}
</script>


