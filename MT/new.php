<!DOCTYPE html>
<html lang=en>
<title>Examples of DataTransfer.{types,items} properties</title>
<meta content="width=device-width">
<style>
  div {
    margin: 0em;
    padding: 2em;
  }
  #target {
    border: 1px solid black;
  }
</style>
<script>
function dragstart_handler(ev) {
    alert("dragStart: target.id = " + ev.target.id);
 // Add this element's id to the drag payload so the drop handler will
 // know which element to add to its tree
 ev.dataTransfer.setData("text/plain", ev.target.id);
 ev.dataTransfer.effectAllowed = "move";
}

function drop_handler(ev) {
    alert("drop: target.id = " + ev.target.id);
 ev.preventDefault();
 // Get the id of the target and add the moved element to the target's DOM
 var data = ev.dataTransfer.getData("text");
 ev.target.appendChild(document.getElementById(data));
 // Print each format type
 if (ev.dataTransfer.types != null) {
   for (var i=0; i < ev.dataTransfer.types.length; i++) {
    alert("... types[" + i + "] = " + ev.dataTransfer.types[i]);
   }
 }
 // Print each item's "kind" and "type"
 if (ev.dataTransfer.items != null) {
   for (var i=0; i < ev.dataTransfer.items.length; i++) {
     alert("... items[" + i + "].kind = " + ev.dataTransfer.items[i].kind + " ; type = " + ev.dataTransfer.items[i].type);
   }
 }
}

function dragover_handler(ev) {
 console.log("dragOver");
 ev.preventDefault();
 // Set the dropEffect to move
 ev.dataTransfer.dropEffect = "move"
}
</script>
<body>
<h1>Examples of <code>DataTransfer</code>.{<code>types</code>, <code>items</code>} properties</h1>
 <ul>
   <li id="i1" ondragstart="dragstart_handler(event);" draggable="true">Drag Item 1 to the Drop Zone</li>
   <li id="i2" ondragstart="dragstart_handler(event);" draggable="true">Drag Item 2 to the Drop Zone</li>
 </ul>
 <div id="target" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">Drop Zone</div>
</body>
</html>
