<div class="header"><?php echo $headervalue; ?>
    <i class="fas fa-bars menu" id="icon" title="القائمة"></i>
    <a href="<?php echo $HOST; ?>/index.php"><i class="fas fa-home home" title="الصفحة الرئيسية"></i></a>
    <div id="list" class="thelistclass">
        <ul>
            <li><p>كلية تجارة</p></li>
            <li><a href="<?php echo $HOST; ?>/phpuserfolder/course.php?classnumber=filetigara1">كلية تجارة الفرقة الأولى</a>  </li>
            <li><a href="<?php echo $HOST; ?>/phpuserfolder/course.php?classnumber=filetigara2">كلية تجارة الفرقة الثانية</a></li>
            <li><a href="<?php echo $HOST; ?>/phpuserfolder/course.php?classnumber=filetigara3">كلية تجارة الفرقة الثالثة</a></li>
            <li><a href="<?php echo $HOST; ?>/phpuserfolder/course.php?classnumber=filetigara4">كلية تجارة الفرقة الرابعة</a></li>
            <li><p>كلية حقوق</p></li>
            <li><a href="<?php echo $HOST; ?>/phpuserfolder/course.php?classnumber=filehokok1">كلية حقوق الفرقة الأولى</a>   </li>
            <li><a href="<?php echo $HOST; ?>/phpuserfolder/course.php?classnumber=filehokok2">كلية حقوق الفرقة الثانية</a> </li>
            <li><a href="<?php echo $HOST; ?>/phpuserfolder/course.php?classnumber=filehokok3">كلية حقوق الفرقة الثالثة</a> </li>
            <li><a href="<?php echo $HOST; ?>/phpuserfolder/course.php?classnumber=filehokok4">كلية حقوق الفرقة الرابعة</a> </li>
        </ul>
    </div>
</div>
<script>
    document.getElementById("icon").onclick=function(){
        document.getElementById("list").classList.toggle("thelistclass");
        document.getElementById("list").classList.toggle("thelistclass2");
    }
</script>