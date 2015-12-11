<?php
//Sayta daxil olanin sehifeni gore bilmesi ucun qeydiyyatdan kecmeli oldugunu xeber vern func.
function mustSign() {
  return "Qeydiyyatdan kecmeden termin elave ede bilmezsiniz<br />
  <a href='login.php'>Qeydiyyat</a>dan kecin
  ";
}
//user termin elave ede bilmesi ucun form
function addTermin(){
  return '<form class="terminForm">
<div class="form-group">
  <label for="terminInput">Termin</label>
  <input type="email" class="form-control" id="terminInput" placeholder="Termin">
</div>
<div class="form-group">
  <label for="termDesc">Izahatı</label>
  <textarea type="password" class="form-control" id="termDesc" placeholder="Qısa izahı daxil edin"></textarea>
</div>
<div class="form-group">
  <label for="kateqoriya">Kateqoriya</label>
  <select type="text" class="form-control" name="source" id="kateqoriya" placeholder="Əgər varsa">
    <option value="Digər">Digər</option>
    <option value="IT">IT</option>
    <option value="Tibb">Tibb</option>
    <option value="Kimya">Kimya</option>
    <option value="Riyaziyyat">Riyaziyyat</option>
  </select>
</div>
<div class="form-group">
  <label for="source">Mənbə</label>
  <input type="text" class="form-control" name="source" id="source" placeholder="Əgər varsa">
</div>
<div class="form-group">
  <label for="keyWord">Açar söz (arasında vergül qoymaqla)</label>
  <input type="text" class="form-control" name="keyWord" id="keyWord" placeholder="Tags">
</div>
<button type="submit" class="btn btn-default">Göndər</button>
</form>';
}
function bestWriter(){

}

function newestTermin(){

}
function mostSearch(){

}
function tags(){

}
 ?>
