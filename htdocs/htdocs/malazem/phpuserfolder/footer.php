<?php
    include("../phpadminefolder/hosting.php");

?>
    
    <footer>
        <div class="scrollbutton"><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
        <p>حقوق الطباعة و النشر <span> © </span>  <?php echo date('Y'); ?>  : <span>موقع ملازم</span> |  جميع الحقوق محفوظة | تصميم <span>م/أحمد</span></p>
    </footer>
    <script>
document.querySelector('.scrollbutton').onclick=function(){
    scroll(0,10000);
}
</script> 
<div class="animation"> <!-- loading animation -->
        <div></div>
        <div></div>
        <div></div>
    </div>
<script>
    window.onload=function(){
        document.querySelector(".animation").style.cssText="display:none";
    };
</script>