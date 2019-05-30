<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: 'textarea',
	theme: 'modern',
	 directionality: 'ltr',

    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save contextmenu directionality emoticons paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
  });
  </script>
