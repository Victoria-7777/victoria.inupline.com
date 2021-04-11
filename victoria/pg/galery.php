<!-- Сторінка галареї -->

<div class = "pbody">
  <h2>Gallery</h2> 

  <img class="responsive" onclick="showmodal(this)" id="myImg01" data-text="01" data-name="city" src="img/gallery/01.jpg" alt="Northern Lights, Norway" width="300" height="200">
  <img class="responsive" onclick="showmodal(this)" id="myImg02" data-text="02" data-name="city" src="img/gallery/cats.png" alt="Northern Lights, Norway" width="300" height="200">
  <img class="responsive" onclick="showmodal(this)" id="myImg03" data-text="03" data-name="city" src="img/gallery/cat and dog.jpg" alt="Northern Lights, Norway" width="300" height="200">
  <img class="responsive" onclick="showmodal(this)" id="myImg04" data-text="04" data-name="city" src="img/gallery/cats with dogs.jpg" alt="Northern Lights, Norway" width="300" height="200">
  <img class="responsive" onclick="showmodal(this)" id="myImg05" data-text="05" data-name="city" src="img/gallery/cute cat and dog.jpg" alt="Northern Lights, Norway" width="300" height="200">
  <img class="responsive" onclick="showmodal(this)" id="myImg06" data-text="06" data-name="city" src="img/gallery/descarga.jpg" alt="Northern Lights, Norway" width="300" height="200">
  <img class="responsive" onclick="showmodal(this)" id="myImg07" data-text="07" data-name="city" src="img/gallery/thumb-350-380977.jpg" alt="Northern Lights, Norway" width="300" height="200">
  <img class="responsive" onclick="showmodal(this)" id="myImg08" data-text="08" data-name="city" src="img/gallery/puppy.jpg" alt="Northern Lights, Norway" width="300" height="200">

  <img class="responsive" onclick="showmodal(this)" id="myImg09" data-text="09" data-name="retiro" src="img/gallery/IMG_2108.jpg" alt="hello" width="300" height="200">

</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
  var modal = document.getElementById('myModal');
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");

  function showmodal(indx){ // код кнопок меню
      modal.style.display = "block";
      modalImg.src = indx.src;
      captionText.innerHTML = indx.alt;
      //captionText.innerHTML = indx.getAttribute('data-name');
  };

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}


modal.onclick = function() { 
  modal.style.display = "none";
}
</script>