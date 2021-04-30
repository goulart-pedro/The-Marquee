<?php
if (!isset($_COOKIE['USER_SESSION'])) header('Location: ?page=login');
$database = new Database
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Marquee Admin</title>
</head>

<body>

    <?php
    if (isset($_POST['page-content'])) {
        $content = addslashes($_POST['page-content']);
        $page = addslashes($_POST['current-page']);

        $database->updatePages($page, $content);
    }

    ?>

    <main>


        <h1>Admin</h1>
        <form method="POST">
            <div>
                <select id="pageSelect" onchange="updateTextareaContent()" name="current-page" id="">
                    <?php
                    $pages = $database->getPages();

                    # prints options tags with db page name
                    foreach ($pages as $key => $value) : ?>
                        <option value=<?= $value['name'] ?>>
                            <?= $value['name'] ?>
                        </option>
                    <?php endforeach ?>
                    ?>

                </select>

            </div>

            <!--style="background-color: #efefef; border-radius: 3px;border: none;"-->
            <textarea name="page-content" id="pageContentView" cols="60" rows="20"></textarea>
            <div style="padding-top: 1rem;">
                <button type="submit" id="record-button" class="button" btn-variant="contained">
                    <span class="button__label">Gravar</span>
                </button>
            </div>
        </form>

    </main>
</body>
<script>
    const ajax = (url, method, callback) => {
        const xhr = new XMLHttpRequest();
        xhr.onload = () => callback(xhr)

        xhr.open(method, url, true);
        xhr.setRequestHeader("Content-type", "application/json");
        xhr.send();
    }

    function updateTextareaContent() {
        const pageSelect = document.querySelector('#pageSelect');
        const contentView = document.querySelector('#pageContentView');

        ajax(`api/api.php?display=page&pageName=${pageSelect.value}`, "get", (xhr) => {
            contentView.value = xhr.responseText;
        })
    };
</script>

</html>