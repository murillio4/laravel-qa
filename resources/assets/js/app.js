$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.validator.setDefaults({
    ignore: ''
});

// mader jar, EN jævla setnign
tinymce.baseURL =  window.location.origin + "/tinymce/";

// Initialize the app
tinymce.init({
    selector: '#q_content',
    plugins: 'code codesample emoticons link table wordcount image autolink contextmenu autosave',
    codesample_languages: [
        {text: 'Bash', value: 'bash'},
        {text: 'C', value: 'c'},
        {text: 'C#', value: 'csharp'},
        {text: 'C++', value: 'cpp'},
        {text: 'CSS', value: 'css'},
        {text: 'Git', value: 'git'},
        {text: 'Go', value: 'go'},
        {text: 'HTML/XML', value: 'markup'},
        {text: 'Java', value: 'java'},
        {text: 'JavaScript', value: 'javascript'},
        {text: 'JSON', value: 'json'},
        {text: 'LaTeX', value: 'latex'},
        {text: 'Objective-C', value: 'objectivec'},
        {text: 'PHP', value: 'php'},
        {text: 'Python', value: 'python'},
        {text: 'Ruby', value: 'ruby'},
        {text: 'vim', value: 'vim'},
        {text: 'Sass', value: 'scss'},
        {text: 'SQL', value: 'sql'},
        {text: 'Swift', value: 'swift'}
    ],
    codesample_dialog_height: 600,
    codesample_dialog_width: 800,

    toolbar: 'bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table image codesample | link emoticons',
    contextmenu: 'link image inserttable | cell row column deletetable',
    skin: 'lightgray',
    branding: false,
    menubar: false
});


$( document ).ready(function() {
    $('#tags').tokenfield({
        limit: 5
    });

    $("form").each(function(){
        $(this).validate({
            errorElement: "span",
            errorClass: 'help-block',
            rules: {
                title: {
                    required: true,
                    minlength: 15,
                    maxlength: 150
                },
                q_content: {
                    required: true,
                    minlength: 30
                }
            },
            // Specify validation error messages
            messages: {
                title: {
                    required: "Title is missing",
                    minlength: "Title needs to be at least 5 characters long",
                    maxlength: "Title cannot be longer than 150 characters"
                },
                q_content: {
                    required: "Body is missing",
                    minlength: "Body must be at least 30 characters long"
                }
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            },

            highlight: function(element, errorClass, validClass) {
              $(element).parent().addClass("has-error");
            },

            unhighlight: function(element, errorClass, validClass) {
              $(element).parent().removeClass("has-error");
            }
        });
    });
});
