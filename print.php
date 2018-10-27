<script>
    function printDiv(divName){
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }
  </script>
<h1> do not print this </h1>

<div id='printMe'>
  Print this only 
</div>

<button onclick="printDiv('printMe')">Print only the above div</button>