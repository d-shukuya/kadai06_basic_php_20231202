$("#file_btn").on("click", function () {
  $("#file_upload").click();
});

$("#file_upload").on("change", function () {
  var selectedFile = this.files[0];
  var formData = new FormData();
  formData.append("file", selectedFile);

  $.ajax({
    url: "./php/save_img.php",
    type: "POST",
    data: formData,
    processData: false,
    contentType: false,
    success: function (data) {
      let res = JSON.parse(data);
      if (res.status === "success") {
        console.log("File has been uploaded successfully");
        $("#memo_list_box").load("./php/load_img.php", function () {
          console.log("Content has been loaded successfully");
        });
      }
    },
  });
});
