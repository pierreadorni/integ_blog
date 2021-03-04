

const articleTextArea = document.getElementById('articleTextArea');
const articlePreview = document.getElementById('articlePreview');

var articleCodeMirror = CodeMirror.fromTextArea(articleTextArea,{
    lineNumbers: 'true',
    mode: 'htmlmixed'
});

articleCodeMirror.on('change', ()=>{
    let code = articleCodeMirror.getValue();
    articlePreview.innerHTML = code;
})
