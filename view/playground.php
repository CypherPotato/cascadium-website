<!DOCTYPE html>
<html lang="en">
<?= render_view('layout.head', ['title' => 'Roadmap']) ?>

<body>
    <script src="/dist/prism-live.js?load=css,html,javascript"></script>
    <main class="bigger">
        <?= render_view('layout.nav', ['page' => 'playground']) ?>
        <div class="contents">
            <section>
                <h1>Playground</h1>
                <p>
                    Cascadium is an independent study maintained by just one person. No guarantees are promised here.
                </p>
                <div class="playground">
                    <pre id="highlight" aria-hidden="true">
                        <code class="language-scss" id="highlighting-content"></code>
                    </pre>
                    <textarea onscroll="sync_scroll(this)" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" id="input">@import url("https://foo.bar/");

div {
    display: block;
    width: 400px; // it does support comments
    /* native multi-line comments too */

    height: 300px;

    > a {
        align-self: center;

        & :hover {
            color: red;
        }
    }

    & .test {
        font-size: 20px;
    }
}

@media (max-width: 700px) {
    div.test {
        width: 100%;
    }
}</textarea>
                    <pre aria-hidden="true" id="output-wrapper">
                        <code class="language-scss" id="output"></code>
                    </pre>
                </div>
            </section>
        </div>
        <script>
            const API_ENDPOINT = "https://cascadium.project-principium.dev/";
            var intervalToken = 0;
            document.getElementById("input").addEventListener('keydown', e => {
                let {
                    target
                } = e;

                if (e.keyCode === 9) {
                    var start = target.selectionStart;
                    var end = target.selectionEnd;

                    target.value = target.value.substr(0, start) + "    " + target.value.substr(end);
                    target.selectionStart = target.selectionEnd = start + 4;

                    e.preventDefault();
                }
            }, false);

            document.getElementById("input").addEventListener("input", e => {
                let {
                    target
                } = e;

                invokeHighlighter();
                invokeApi();
            })

            function invokeApi() {
                clearTimeout(intervalToken);
                intervalToken = setTimeout(() => {
                    fetch(API_ENDPOINT + "compile", {
                        body: document.getElementById("input").value,
                        method: "POST"
                    }).then(async res => {
                        let css = await res.text();
                        let out = document.getElementById("output");
                        out.innerHTML = css;
                        Prism.highlightElement(out);
                    })
                }, 750);
            }

            function sync_scroll(element) {
                let result_element = document.getElementById("highlight");
                result_element.scrollTop = element.scrollTop;
                result_element.scrollLeft = element.scrollLeft;
            }

            function invokeHighlighter() {
                let highlightElement = document.getElementById("highlighting-content");
                highlightElement.innerHTML = document.getElementById("input").value;
                Prism.highlightElement(highlightElement);
            }

            invokeHighlighter();
            invokeApi();
        </script>
    </main>
</body>

</html>