function navigateToEdit(id) {
  location = "edit.php?id=" + id;
}

function navigateToDelete(id, name) {
  const answer = confirm("Are you sure you want to delete " + name + "?");
  if (!answer) {
    return;
  }
  $.ajax({
    method: "POST",
    url: "lead_controller.php",
    data: `id=${id}&command=deleteLead`,
    error: (err) => alert(err.message),
    success: (result) => {
      alert("Done");
      location = "index.php";
    },
  });
}
