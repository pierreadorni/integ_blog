

const articleTextArea = document.getElementById('articleTextArea');
const articlePreview = document.getElementById('articlePreview');

const objectifsTextArea = document.getElementById('objectifsTextArea');
const objectifsPreview = document.getElementById('objectifsPreview');

const membresTextArea = document.getElementById('membresTextArea');
const membresPreview = document.getElementById('membresPreview');

var articleCodeMirror = CodeMirror.fromTextArea(articleTextArea,{
    lineNumbers: 'true',
    mode: 'htmlmixed'
});

var objectifsCodeMirror = CodeMirror.fromTextArea(objectifsTextArea,{
    lineNumbers: 'true',
    mode: 'htmlmixed'
});

var membresCodeMirror = CodeMirror.fromTextArea(membresTextArea,{
    lineNumbers: 'true',
    mode: 'htmlmixed'
});

articleCodeMirror.on('change', ()=>{
    let code = articleCodeMirror.getValue();
    articlePreview.innerHTML = code;
})

objectifsCodeMirror.on('change', ()=>{
    let code = objectifsCodeMirror.getValue();
    objectifsPreview.innerHTML = code;
})

membresCodeMirror.on('change', ()=>{
    let code = membresCodeMirror.getValue();
    membresPreview.innerHTML = code;
})
