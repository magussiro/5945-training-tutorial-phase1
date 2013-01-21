  $("#post-form").submit(function(){
    if($.trim($("[name=UserName]").val()) ==""){
      $("[name=UserName]").focus();
      alert("請填寫使用者名稱");
      return false;
    }
    if($.trim($("[name=Content]").val()) ==""){
      $("[name=Content]").focus();
      alert("請填寫內容");
      return false;
    }
  });
  
