
function hide_show_table(col_name) {
    var list_value = document.getElementById(col_name).value;
    if (list_value == "hide") {
        var all_col = document.getElementsByClassName(col_name);
        for (var i = 0; i < all_col.length; i++) {
            all_col[i].style.display = "none";
        }
        document.getElementById(col_name + "_head").style.display = "none";
        document.getElementById(col_name).value = "show";
    }

    else {
        var all_col = document.getElementsByClassName(col_name);
        for (var i = 0; i < all_col.length; i++) {
            all_col[i].style.display = "table-cell";
        }
        document.getElementById(col_name + "_head").style.display = "table-cell";
        document.getElementById(col_name).value = "hide";
    }
}
/*
function sort(col_name){
    filterTable = document.querySelector(".table-data");
    sorted = true;
}

function sosrtseygijkesgjisae(col_name) {
    var list_value = document.getElementById(col_name).value;
    list_value.sort();
}
*/

function sortTableToLowerCase() {
    var filterTable, rows, sorted, i, x, y, sortFlag;
    filterTable = document.querySelector(".filterTable");
    sorted = true;
    while (sorted) {
       sorted = false;
       rows = filterTable.rows;
       for (i = 1; i < rows.length - 1; i++) {
          sortFlag = false;
          x = rows[i].getElementsByClassName("name")[0];
          y = rows[i + 1].getElementsByClassName("name")[0];
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
             sortFlag = true;
             break;
          }
       }
       if (sortFlag) {
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          sorted = true;
       }
    }
 }

 
 function sortTableToUpperCase() {
    var filterTable, rows, sorted, i, x, y, sortFlag;
    filterTable = document.querySelector(".filterTable");
    sorted = true;
    while (sorted) {
       sorted = false;
       rows = filterTable.rows;
       for (i = 1; i < rows.length - 1; i++) {
          sortFlag = false;
          x = rows[i].getElementsByClassName("name")[0];
          y = rows[i + 1].getElementsByClassName("name")[0];
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
             sortFlag = true;
             break;
          }
       }
       if (sortFlag) {
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          sorted = true;
       }
    }
 }
