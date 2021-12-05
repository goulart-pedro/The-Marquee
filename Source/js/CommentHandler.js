function setListener() {
  const form = document.querySelector("#comment-form");
  const button = document.querySelector("#submit-comment");

  button.addEventListener("click", (event) => sendComment(event, form));
  button.addEventListener("click", async (event) => renderComment(form));
}

function renderComment(form) {
  const commentList = document.querySelector(".comment-list");
  const comlisttemp = commentList.innerHTML;
  commentList.innerHTML = `<div class="comment-wrapper">
                    <div class="pic-wrapper">
                        <p class="pic">${form["Author"].value[0]}</p>
                    </div>
                    <div>
                        <p id="author">${form["Author"].value}</p>
                        <p id="comment">${form["Text"].value}</p>
                    </div>
                </div> `;
  commentList.innerHTML += comlisttemp;
}

async function sendComment(event, form) {
  event.preventDefault();
  await fetch("api/api.php?action=comment", {
    body: getFormData(form),
    method: "post",
  });
  return false;
}

function getFormData(form) {
  let formData = new FormData();
  formData.append("Movie", form["Movie"].value);
  formData.append("Text", form["Text"].value);
  formData.append("Author", form["Author"].value);

  return formData;
}

setListener();
