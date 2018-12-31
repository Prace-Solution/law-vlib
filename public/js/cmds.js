        document.onkeydown = function(e) {
            e = e || window.event; //Get event 
            if (e.ctrlKey) {
                var c = e.which || e.keyCode; //Get key code
                //Block Ctrl+S case 87://Block Ctrl+W --Not work in Chrome e.preventDefault(); e.stopPropagation();
                // 8 : BackSpace , 46 : Delete , 37 : Left , 39 : Rigth , 144: Num Lock 
                if (e.which != 8 &&
                    e.which != 46 &&
                    e.which != 37 &&
                    e.which != 39 &&
                    e.which != 144 &&
                    (e.which < 96 || e.which > 105)) {

                    e.preventDefault();
                    e.stopPropagation();

                    return false;

                }
            }
        };


        function disableSelect() {
            if (document.addEventListener) {
                document.addEventListener("mousedown", disabler, "false");
            } else {
                document.attachEvent("onselectstart", disabler);
            }
        }

        function enableSelect() {
            if (document.addEventListener) {
                document.removeEventListener("mousedown", disabler, "false");
            } else {
                document.detachEvent("onselectstart", disabler);
            }
        }

        function disabler(e) {
            if (e.preventDefault) {
                e.preventDefault();
            }
            return false;
        }


        function handleKeyDown(e) {
            var ctrlPressed = 0;
            var altPressed = 0;
            var shiftPressed = 0;
            var evt = (e == null ? event :
                e);
            shiftPressed = evt.shiftKey;
            altPressed = evt.altKey;
            ctrlPressed = evt.ctrlKey;
            self.status = "" + "shiftKey=" + shiftPressed +
                ", altKey=" + altPressed + ",ctrlKey = " + ctrlPressed;
            if ((shiftPressed || altPressed || ctrlPressed) && (evt.keyCode < 16 || evt.keyCode > 18)) {
               // alert("You pressed the " + (evt.keyCode) + " key (keyCode " + evt.keyCode + ")\n" + "together with the following keys: \n " + (shiftPressed ? "Shift " : "") + (altPressed ? "Alt " : "") + (ctrlPressed ? " Ctrl " : ""))
                evt.preventDefault();
                evt.stopPropagation();

            }
            evt.preventDefault();
            evt.stopPropagation();
            return false;


        }

        disableSelect();
        document.onkeydown = handleKeyDown;

        document.onkeydown = function(e) {
            e = e || window.event; //Get event 
            if (e.ctrlKey) {
                var c = e.which || e.keyCode  ;
                //Getkey code
                switch (c) {
                    case 83: //Block Ctrl+S case 87://Block Ctrl+W --Not work in Chrome
                        e.preventDefault();
                        e.stopPropagation();

                        break; // 8 : BackSpace , 46 : Delete , 37 : Left , 39 : Rigth , 144: Num Lock

                }
                return false;
            }
        };

        document.onkeyup = function(e) {
            e = e || window.event; //Get event
            if (e.ctrlKey) {
                var c = e.which || e.keyCode;
                //Getkey
                code
                switch (c) {
                    case 44: //Block Ctrl+S case 87://Block Ctrl+W --Not work in Chrome e.preventDefault(); e.stopPropagation();
                        break; // 8 : BackSpace , 46 : Delete , 37 : Left , 39 : Rigth , 144: Num Lock case 44: //Block Ctrl+S case 87://Block Ctrl+W
                        e.preventDefault();
                        e.stopPropagation();
                        break;
                }
                return false;
            }
        };

        processKeyEvent = function(eventType, event) {
            if (window.event) {
                event = window.event;
            }
            if (event.keyCode == 44) {
                alert("copyright 2011, Crust Media ");
                return (false);
            }
        }
        processKeyUp = function(event) {
            processKeyEvent(" onkeyup ", event);
        };
        processKeyDown = function(event) {
            processKeyEvent("onkeydown", event);
        };
        document.onkeyup = processKeyUp;
        document.onkeydown = processKeyDown;
       
        window.onclick = function (event) {
			if (event.ctrlKey || macKeys.ctrlKey || macKeys.cmdKey) {
				//alert("Hello there");
				event.preventDefault();
				event.stopPropagation();

			}
		}
        try 
        {
           $(window).bind('keydown.ctrl_s keydown.meta_s', function(event) {
			    event.preventDefault();
		    	event.stopPropagation();
		    });
        } catch (error) {
            console.log('error',error);
        }
	 	