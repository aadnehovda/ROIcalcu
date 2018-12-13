var modalcomp = document.getElementById('companyval');

  function lblindstry(val){
  if (val==1){
    document.getElementById('dl-industry').innerHTML = 'Engineering';
    $('#customerstory').attr("href","https://openit.com/customer-stories/chiyoda-philippines-corporation/");
    $("body").css('backgroundImage', "url('images/bg/engg_rec.png')");
    $("#industrytxt").css('display',"none");
    $("#industryinput").attr('required',false);
  }
  else if (val==2){
    document.getElementById('dl-industry').innerHTML = 'Automotive';
    $('#customerstory').attr("href","https://openit.com/customer-stories/nissan-motor-corp-ltd/");
    $("body").css('backgroundImage', "url('images/bg/auto2_rec.png')");
    $("#industrytxt").css('display',"none");
    $("#industryinput").attr('required',false);
  }
  else if (val==3){
    document.getElementById('dl-industry').innerHTML = 'O & G';
    $('#customerstory').attr("href","https://openit.com/customer-stories/maersk-oil/");
    $("body").css('backgroundImage', "url('images/bg/og2_rec.png')");
    $("#industrytxt").css('display',"none");
    $("#industryinput").attr('required',false);
  }
  else if (val==4){
    document.getElementById('dl-industry').innerHTML = 'M & P';
    $('#customerstory').attr("href","https://openit.com/resources/customer-stories");
    $("body").css('backgroundImage', "url('images/bg/mp2_rec.png')");
    $("#industrytxt").css('display',"none");
    $("#industryinput").attr('required',false);
  }
  else if (val==5){
    document.getElementById('dl-industry').innerHTML = 'Government';
    $('#customerstory').attr("href","https://openit.com/resources/customer-stories");
    $("body").css('backgroundImage', "url('images/bg/Gov_bg.jpg')");
    $("#industrytxt").css('display',"none");
    $("#industryinput").attr('required',false);
  }
  else if (val==7){
    document.getElementById('dl-industry').innerHTML = 'Aerospace';
    $('#customerstory').attr("href","https://openit.com/customer-stories/avio-aerospace/");
    $("body").css('backgroundImage', "url('images/bg/aero2_rec.png')");
    $("#industrytxt").css('display',"none");
    $("#industryinput").attr('required',false);
  }
  else{
    document.getElementById('dl-industry').innerHTML = 'Others';
    $('#customerstory').attr("href","https://openit.com/customer-stories/avio-aerospace/");
    $("body").css('backgroundImage', "url('images/bg/oth_rec.png')");
    $("#industrytxt").css('display',"block");
    $("#industryinput").attr('required',true);
  }
}

var validemail = document.getElementById("validemail");

validemail.addEventListener("input", function (event) {
  if (validemail.validity.typeMismatch) {
    validemail.setCustomValidity("Please enter a valid email.");
  }
  else {
    validemail.setCustomValidity("");
  }
});

window.onclick = function(event) {
  if (event.target == modalcomp)
    {
    modalcomp.style.display = "none";
    }
}

$(document).keydown(function(e) {
 if (e.key === "Escape") {
     modalcomp.style.display  = "none";
}
});

function valthisform(){
  if (document.getElementById("comname").value == '' ||
      document.getElementById("website").value == '' ||
      document.getElementById("validemail").value == '' ||
      document.getElementById("numusers").value == '') {
        document.getElementById('companyval').style.display = 'block';
        return false;
      }
}
