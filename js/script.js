function loadFrame(id_num) {
  let ifrm = document.getElementById('inlineFrame' + id_num)
  ifrm.src = ifrm.contentWindow.document.getElementById('inputURL').value
  let name = ifrm.contentWindow.document.getElementById('inputName').value
  name = name.trim()
  if (name != '') {
    document.getElementById('header' + id_num).innerText = name
  }
  document.getElementById('btnLoad' + id_num).disabled = true
  document.getElementById('btnReset' + id_num).disabled = false
  document.getElementById('btnOpen' + id_num).disabled = false
}

function resetFrame(id_num) {
  document.getElementById('inlineFrame' + id_num).src = "./url-form.html"
  document.getElementById('header' + id_num).innerText = 'Student ' + id_num
  document.getElementById('btnLoad' + id_num).disabled = false
  document.getElementById('btnReset' + id_num).disabled = true
  document.getElementById('btnOpen' + id_num).disabled = true
}

function openFrame(id_num) {
  window.open(document.getElementById('inlineFrame' + id_num).src)
}
