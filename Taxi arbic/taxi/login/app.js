const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});


//confirm password ----------------
// استهداف العناصر
let passwordInput = document.getElementById("password");
let confirmPasswordInput = document.getElementById("Confirm Password");
let errorElement = document.getElementById("error");

// إضافة استماع لحدث تقديم النموذج
document.getElementById("signup").addEventListener("sign-up", function(event) {
  // التحقق من صحة كلمة المرور
  if (passwordInput.value !== confirmPasswordInput.value) {
    // إلغاء إرسال النموذج وعرض رسالة الخطأ
    event.preventDefault();
    errorElement.innerHTML = "كلمة المرور غير متطابقة";
  }
});
