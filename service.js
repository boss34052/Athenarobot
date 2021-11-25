
/*document.getElementById("select2").disabled = true;
document.getElementById("mySelect").disabled = true;*/

function forlock() {
    document.getElementById("switch1").checked = true;
    document.getElementById("switch2").checked = true;
    document.getElementById("switch3").checked = true;
    document.getElementById("switch4").checked = true;
    document.getElementById("switch5").checked = true;
    document.getElementById("switch6").checked = true;
    document.getElementById("switch7").checked = true;
    document.getElementById("switch8").checked = true;
} 

function forcancel() {
  document.getElementById("switch1").checked = true;
  document.getElementById("switch2").checked = true;
  document.getElementById("switch3").checked = true;
  document.getElementById("switch4").checked = true;
  document.getElementById("switch5").checked = true;
  document.getElementById("switch6").checked = true;
  document.getElementById("switch7").checked = true;
  document.getElementById("switch8").checked = true;
    document.getElementById("select1").removeAttribute("disabled", "disabled");
    document.getElementById("switch1").removeAttribute("disabled", "disabled");
    document.getElementById("select2").setAttribute("disabled", "disabled");
    document.getElementById("switch2").setAttribute("disabled", "disabled");
    document.getElementById("select3").setAttribute("disabled", "disabled");
    document.getElementById("switch3").setAttribute("disabled", "disabled");
    document.getElementById("select4").setAttribute("disabled", "disabled");
    document.getElementById("switch4").setAttribute("disabled", "disabled");
    document.getElementById("select5").setAttribute("disabled", "disabled");
    document.getElementById("switch5").setAttribute("disabled", "disabled");
    document.getElementById("select6").setAttribute("disabled", "disabled");
    document.getElementById("select7").setAttribute("disabled", "disabled");
    document.getElementById("switch6").setAttribute("disabled", "disabled");
    document.getElementById("switch7").setAttribute("disabled", "disabled");
    document.getElementById("select8").setAttribute("disabled", "disabled");
    document.getElementById("switch8").setAttribute("disabled", "disabled");
    document.getElementById("select1").value = "";
    document.getElementById("select2").value = "";
    document.getElementById("select3").value = "";
    document.getElementById("select4").value = "";
    document.getElementById("select5").value = "";
    document.getElementById("select6").value = "";
    document.getElementById("select7").value = "";
    document.getElementById("select8").value = "";

    disableUsedOptions($table);
}




document.getElementById("select1").onselect = function () {

    document.getElementById("Bed1").setAttribute("disabled", "disabled");

}

document.getElementById("switch1").onchange = function () {
    document.getElementById("select2").removeAttribute("disabled", "disabled");
    document.getElementById("switch2").removeAttribute("disabled", "disabled");
   // document.getElementById("select1").setAttribute("disabled", "disabled");
   /*
   if (document.getElementById("switch1").checked = true)
   {
      let key_access = String.fromCharCode(49);
      document.getElementById("switch1").innerHTML = key_access;
   }
    */
  };

document.getElementById("switch2").onchange = function () {
    document.getElementById("select3").removeAttribute("disabled", "disabled");
    document.getElementById("switch3").removeAttribute("disabled", "disabled");
   // document.getElementById("select2").setAttribute("disabled", "disabled");
  };

document.getElementById("switch3").onchange = function () {
    document.getElementById("select4").removeAttribute("disabled", "disabled");
    document.getElementById("switch4").removeAttribute("disabled", "disabled");
    //document.getElementById("select3").setAttribute("disabled", "disabled");
  };

document.getElementById("switch4").onchange = function () {
    document.getElementById("select5").removeAttribute("disabled", "disabled");
    document.getElementById("switch5").removeAttribute("disabled", "disabled");
    //document.getElementById("select4").setAttribute("disabled", "disabled");
  };

document.getElementById("switch5").onchange = function () {
    document.getElementById("select6").removeAttribute("disabled", "disabled");
    document.getElementById("switch6").removeAttribute("disabled", "disabled");
    //document.getElementById("select5").setAttribute("disabled", "disabled");
  };

document.getElementById("switch6").onchange = function () {
    document.getElementById("select7").removeAttribute("disabled", "disabled");
    document.getElementById("switch7").removeAttribute("disabled", "disabled");
    //document.getElementById("select6").setAttribute("disabled", "disabled");
  };

document.getElementById("switch7").onchange = function () {
    document.getElementById("select8").removeAttribute("disabled", "disabled");
    document.getElementById("switch8").removeAttribute("disabled", "disabled");
    //document.getElementById("select7").setAttribute("disabled", "disabled");
  };

document.getElementById("switch8").onchange = function () {
    document.getElementById("select1").removeAttribute("disabled", "disabled");
    document.getElementById("switch1").setAttribute("disabled", "disabled");
    document.getElementById("select2").removeAttribute("disabled", "disabled");
    document.getElementById("switch2").setAttribute("disabled", "disabled");
    document.getElementById("select3").removeAttribute("disabled", "disabled");
    document.getElementById("switch3").setAttribute("disabled", "disabled");
    document.getElementById("select4").removeAttribute("disabled", "disabled");
    document.getElementById("switch4").setAttribute("disabled", "disabled");
    document.getElementById("select5").removeAttribute("disabled", "disabled");
    document.getElementById("switch5").setAttribute("disabled", "disabled");
    document.getElementById("select6").removeAttribute("disabled", "disabled");
    document.getElementById("select7").removeAttribute("disabled", "disabled");
    document.getElementById("switch6").setAttribute("disabled", "disabled");
    document.getElementById("switch7").setAttribute("disabled", "disabled");
    document.getElementById("select8").removeAttribute("disabled", "disabled");
    document.getElementById("switch8").setAttribute("disabled", "disabled");
  };

  function disableUsedOptions($table) {
    $selects = $table.find("select");
    $selects.on("change", function() {
      $selects = $table.find("select");
  
      console.log("In table:");
      console.log($table);
      console.log("there are " + $selects.length + " selects");
      if ($selects.length <= 1) return;
      let selected = [];
      
      $selects.each(function(index, select) {
        if (select.value !== "") {
          selected.push(select.value);
        }
      });
  
      console.log("option values, that are being deactivated: " + selected);
  
      $table.find("option").prop("disabled", false);
      for (var index in selected) {
       $table
                  .find('option[value="' + selected[index] + '"]:not(:selected)')
                  .prop("disabled", true);
      }
    });
    $selects.trigger("change");
  }
  
  $tables = $("table");
  $tables.each(function(index) {
    $table = $(this);
    disableUsedOptions($table);
  });