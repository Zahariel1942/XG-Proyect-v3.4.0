// open minimized windows in the center of the screen
function openPopupWindow(url, name, width, height, left, top) {
  width = width || 800;
  height = height || 600;
  left = left || 0;
  top = top || 0;

  var win = window.open(
    url,
    name,
    `width=${width},height=${height},left=${left},top=${top},resizable=yes,scrollbars=yes,menubar=no,toolbar=no,`
  );
  win.focus();
}
