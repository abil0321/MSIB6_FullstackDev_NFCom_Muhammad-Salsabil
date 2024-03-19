let operatorAdded = false;

function appendToDisplay(value) {
  const display = document.getElementById("display");

  if (
    !operatorAdded ||
    (value !== "+" && value !== "-" && value !== "*" && value !== "/")
  ) {
    display.value += value;
    operatorAdded =
      value === "+" || value === "-" || value === "*" || value === "/";
  }
}

function clearDisplay() {
  const display = document.getElementById("display");
  display.value = "";
  operatorAdded = false;
}

function calculate() {
  const display = document.getElementById("display");
  try {
    display.value = eval(display.value);
  } catch (error) {
    display.value = "Error";
  }
}
