// احصل على جميع صناديق الاختيار ضمن المجموعة
var checkboxes = document.querySelectorAll('input[type="checkbox"][name="chek"]');

// استمع إلى حدث تغيير (change) في كل صندوق اختيار
checkboxes.forEach(function(checkbox) {
  checkbox.addEventListener('change', function() {
    // إلغاء تحديد جميع صناديق الاختيار
    checkboxes.forEach(function(checkbox) {
      checkbox.checked = false;
    });
    
    // تحديد الصندوق الحالي فقط
    this.checked = true;
  });
});

//------------------------------
function validateForm() {
  var firstName = document.getElementById('firsnam').value;
  var lastName = document.getElementById('lasnim').value;
  var email = document.getElementById('email').value;
  var phone = document.getElementById('numro').value;
  var chicken = document.getElementById('chicken1').checked;
  var chicken2 = document.getElementById('chicken2').checked;
  var nationalId = document.getElementById('cartnamber').value;
  var city = document.getElementById('cty').value;

  
  var firstNameMessage = document.getElementById('firstNameMessage');
  var lastNameMessage = document.getElementById('lastNameMessage');
  var emailMessage = document.getElementById('emailMessage');
  var phoneMessage = document.getElementById('phoneMessage');
  var chickenMessage = document.getElementById('chickenMessage');
  var nationalIdMessage = document.getElementById('nationalIdMessage');
  var cityIdMessage = document.getElementById('cityIdMessage');


  firstNameMessage.innerText = '';
  lastNameMessage.innerText = '';
  emailMessage.innerText = '';
  phoneMessage.innerText = '';
  chickenMessage.innerText = '';
  nationalIdMessage.innerText = '';
  cityIdMessage.innerText = '';

  var isValid = true;
  // Check first name input field is empty or not
  if (firstName === '') {
    firstNameMessage.innerText = 'يرجى إدخال الاسم الأول';
    isValid = false;
}
if (lastName === '') {
    lastNameMessage.innerText = 'يرجى إدخال اسم العائلة';
    isValid = false;
}

if (email === '') {
    emailMessage.innerText = 'يرجى إدخال البريد الإلكتروني';
    isValid = false;
}

if (phone === '') {
    phoneMessage.innerText = 'يرجى إدخال رقم الهاتف';
    isValid = false;
}

if (!chicken== !chicken2  ) {
    chickenMessage.innerText = 'يرجى تحديد خيار "Chicken"';
    isValid = false;
}

if (nationalId === '') {
    nationalIdMessage.innerText = 'يرجى إدخال رقم البطاقة الوطنية';
    isValid = false;
}
if (city === '') {
  cityIdMessage.innerText = 'يرجى إدخال رقم البطاقة الوطنية';
  isValid = false;
}


return isValid;
}



// احضر زر الفتح والنافذة القائمة
const loginform = document.getElementById("login-btn");
const btnlogin = document.getElementById("btnlogin");

const btnsig = document.getElementById("btnsig");
const signform = document.getElementById("sing_form");



btnlogin.addEventListener("click", () => {
  loginform.style.display='block';
  signform.style.display='none';

});

btnsig.addEventListener("click", () => {
  loginform.style.display='none';
  signform.style.display='block';

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
