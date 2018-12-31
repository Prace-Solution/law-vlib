 document.addEventListener("keydown", function(e) {
     if (e.keyCode == 83 && (navigator.platform.match("mac") ? e.metaKey : e.ctrlKey)) {
         e.preventDefault();
         // alert("captured");
     }
 }, false);

 document.addEventListener("keydown", function(e) {
     if ((e.keyCode == 83 || e.keyCode == 44) && (navigator.platform.match("Win32") ? e.metaKey : e.ctrlKey)) {
         e.preventDefault();
         alert("captured Win32");
     }
 }, false);

 //  $(document).bind('keydown', 'ctrl', function(e) {
 //      //e.preventDefault();

 //      //  alert(e, 'sorry, you are not allow to do this operation. The end result is operation is a blank pdf viewer page.');
 //      //  return false;
 //      if (e.ctrlKey && e.which == 83) {

 //          e.preventDefault();
 //          alert('ctrl+s 83');
 //          return false;
 //      } else {
 //          console.log(e);
 //          return true;
 //      }
 //  });

 $(document).bind('keydown', function(e) {
     if (e.ctrlKey && (e.keyCode == 44 || e.which == 65 || e.which == 67 || e.which == 79 || e.which == 83 || e.which == 86)) {

         e.preventDefault();
         alert('sorry, you are not allow to do this operation. The end result is operation is a blank pdf viewer page.');
         return false;

     } else {
         console.log(e);
         return true;
     }
 });