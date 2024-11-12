/* window.addEventListener("load" , fg_load)

function fg_load(){
    document.getElementById("loading").style.display = "none";
}
 */
window.addEventListener('load', function () {
    setTimeout(function () {
      document.getElementById('loading').style.display = "none";
    }, 4500);
  });