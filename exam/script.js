function validateRegister() {
  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let username = document.getElementById("username").value.trim();
  let password = document.getElementById("password").value.trim();

  if (!name || !email || !username || !password) {
    alert("All fields are required!");
    return false;
  }
  if (!email.includes("@")) {
    alert("Invalid email address!");
    return false;
  }
  if (password.length < 6) {
    alert("Password must be at least 6 characters!");
    return false;
  }
  return true;
}

function validateLogin() {
  let username = document.getElementById("loginUsername").value.trim();
  let password = document.getElementById("loginPassword").value.trim();

  if (!username || !password) {
    alert("All fields are required!");
    return false;
  }
  return true;
}