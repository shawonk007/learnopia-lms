$(document).ready(function() {
  tinymce.init({
    selector: '#highlights',
    height: 300,
    // plugins: 'powerpaste advcode table lists checklist',
    // toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'
    plugins: [
        'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
        'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
        'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount', 'code'
    ],
    toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify |' +
        'bullist numlist checklist outdent indent | removeformat | code table help'
  })

  tinymce.init({
    selector: '#description',
    height: 600,
    // plugins: 'powerpaste advcode table lists checklist',
    // toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'
    plugins: [
        'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
        'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
        'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount', 'code'
    ],
    toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify |' +
        'bullist numlist checklist outdent indent | removeformat | code table help'
  })
});