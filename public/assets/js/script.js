const toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'code-block'],
    ['link', 'image', 'video', 'formula'],
  
    [{ 'header': 1 }, { 'header': 2 }],               // custom button values
    [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'list': 'check' }],
    [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
    [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
    [{ 'direction': 'rtl' }],                         // text direction
  
    [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
  
    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
    [{ 'font': [] }],
    [{ 'align': [] }],
  
    ['clean']                                         // remove formatting button
  ];
  
  const quill = new Quill('#editor', {
    modules: {
      toolbar: toolbarOptions
    },
    placeholder: 'أكتب مقالتك',
    theme: 'snow'
  });
  function test() {
    const html = quill.getSemanticHTML();
    document.getElementsByName("blogContent")[0].value = html;
    document.getElementsByName("mignature")[0].value = getPTags();
    document.getElementById("myForm").submit();
    
  }
  
  function getPTags() {
    var editorContainer = document.querySelector('.ql-editor');
    var pTags = editorContainer.querySelectorAll('p');
    let mignature ;
    // var htmlString = Array.from(firstPTag).map(function(node) {
    //   return node.outerHTML;
    // }).join('');
    for (const P of pTags) {
      if (P.innerHTML !== "<br>") {
        mignature += P.innerText;
      }
      
    }
    return mignature;
  }

  let container = document.getElementsByClassName("ql-editor");
  container[0].style= "text-align: right;";
  container[0].setAttribute("spellcheck","false");