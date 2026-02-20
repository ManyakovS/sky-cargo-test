document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector(".lead-form");
  if (!form) return;

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const messageBox = form.querySelector(".js-form-message");
    const submitBtn = form.querySelector('button[type="submit"]');

    messageBox.className = "lead-form__message js-form-message";
    messageBox.textContent = "Отправка...";
    submitBtn.disabled = true;

    const formData = new FormData(form);

    try {
      const response = await fetch(form.getAttribute("action"), {
        method: "POST",
        body: formData,
      });

      const result = await response.json();

      if (result.success) {
        messageBox.classList.add("lead-form__message--success");
        messageBox.textContent = result.data;
        form.reset();
      } else {
        messageBox.classList.add("lead-form__message--error");
        messageBox.textContent = result.data;
      }
    } catch (error) {
      messageBox.classList.add("lead-form__message--error");
      messageBox.textContent =
        "Произошла ошибка при отправке. Попробуйте позже.";
      console.error("Form Submit Error:", error);
    } finally {
      submitBtn.disabled = false;
    }
  });
});
