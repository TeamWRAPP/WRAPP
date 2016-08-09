<script type="text/javascript">
         function Pilla1() {
  var multi = $('input[name="multiling"]:checked').val();
  var adapt = $('input[name="adapt"]:checked').val();
  var browser = $('input[name="browser"]:checked').val();
  var fiveOeight = $('input[name="508"]:checked').val();

 var pillar1 = Number(multi) + Number(adapt) + Number(browser) + Number(fiveOeight);
 pillar1 = pillar1 * 100;
 var p1 = pillar1.toFixed(2);
 alert("Your score for Accessibility is: " + p1 + "%");

 
     // $("input[type=radio]").each(function() {
    //   var arry = [];
    //   var i = 0;
    //   arry.push($(this).val(i));
    //   alert($(arry.val(i)));
    //   i = i++;
    //     });
    // alert($(arry).val());
};

function Pilla2() {
  var about = $('input[name="about"]:checked').val();
  var FAQ = $('input[name="FAQ"]:checked').val();
  var contact = $('input[name="contact"]:checked').val();
  var fourOfour = $('input[name="404"]:checked').val();
  var Proofread = $('input[name="proofread"]:checked').val();
  var cite = $('input[name="citation"]:checked').val();
  var current = $('input[name="uptodate"]:checked').val();
  var article = $('input[name="article"]:checked').val();
  var transparent = $('input[name="transparent"]:checked').val();
  var mstate = $('input[name="mission"]:checked').val();
  var hyperlinks = $('input[name="hyperlinks"]:checked').val();
  var breaktext = $('input[name="breaktext"]:checked').val();
  var endgoal = $('input[name="endgoal"]:checked').val();
  var cms = $('input[name="CMS"]:checked').val();

  var pillar2 = Number(about) + Number(FAQ) + Number(contact) + Number(fourOfour) + Number(Proofread) + Number(cite) + Number(current) + Number(article) + Number(transparent) + Number(mstate) + Number(hyperlinks) + Number(breaktext) + Number(endgoal) + Number(cms);
  pillar2 = pillar2 *100;
  var p2 = pillar2.toFixed(2);
  alert("Your score for Content is: " + p2 + "%");
}




// pop-up window code
function newPopup(url) {
  popupWindow = window.open(
    url,'popUpWindow','height=300,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
}



  </script>