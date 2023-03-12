
<style type="text/css">
   .dz-preview .dz-image img{
       width: 100% !important;
       height: 100% !important;
       object-fit: cover;
    }
    </style>

      <title>Drag and Drop file upload with Dropzone in Laravel 8</title>

      <!-- Meta -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- CSS -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">

      <!-- JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js" type="text/javascript"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>



       <div class='content'>
              <!-- Dropzone -->
      
             <div class="dropzone bg-light-primary rounded border-primary border border-dashed dz-clickable" id="LogoUpload2">
             
       </div>

       <!-- Script -->
       <script>


      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    Dropzone.autoDiscover = false;

    var LogoUpload2 = new Dropzone("#LogoUpload2", {
        url: '{{ route("uploadFile") }}', // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFiles: 5,
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        accept: function(file, done) {
            console.log(file.name);
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        }
    });

    LogoUpload2.on("sending", function(file, xhr, formData) {
            formData.append("_token", CSRF_TOKEN);
       }); 
       LogoUpload2.on("success", function(file, response) {
            console.log(file);
            if(response.success == 0){ // Error
                  alert(response.error);
            }

       });

   

       </script>

