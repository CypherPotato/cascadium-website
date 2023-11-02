<!DOCTYPE html>
<html lang="en">
<?= render_view('layout.head', ['title' => 'Home page']) ?>

<body>
    <main>
        <?= render_view('layout.nav', ['page' => 'home']) ?>
        <div class="contents">

            <section>
                <h1>Hello, Cascadium!</h1>
                <p>
                    Cascadium is an experimental high performance pre-processor for the CSS styling language.
                </p>
                <p>
                    This small module can compile CSS with the following
                    features into a legacy CSS file that is more compatible with most browsers.
                </p>
                <p>
                    It is written in C#, built to run in any operating
                    system without .NET installed thanks to Native AOT. Also, it's source code
                    is open-source.
                </p>
                <p>
                    Some of what it can do:
                </p>
                <ul>
                    <li>
                        nesting
                    </li>
                    <li>
                        single line comments
                    </li>
                    <li>
                        minify and compress
                    </li>
                    <li>
                        merge equivalent queries and selectors
                    </li>
                    <li>
                        converters
                    </li>
                    <li>
                        rewriters
                    </li>
                </ul>
                <p>
                    Example:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="Cascadium" current>
                        <pre><code class="lang-scss">
                            @import url("https://foo.bar/");

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
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="Css">
                        <pre><code class="lang-scss">
                            @import url("https://foo.bar/");

                            div {
                                display: block;
                                width: 400px;
                                height: 300px;
                            }

                            div > a {
                                align-self: center;
                            }

                            div > a:hover {
                                color: red;
                            }

                            div.test {
                                font-size: 20px;
                            }

                            @media (max-width: 700px) {
                                div.test {
                                    width: 100%;
                                }
                            }
                        </code></pre>
                    </div>
                </div>
            </section>
            <section>
                <h2>
                    Getting started
                </h2>
                <p>
                    Learn how to <a href="/get-started">get started</a> with Cascadium
                    and optimize your CSS development.
                </p>
            </section>
        </div>
    </main>
</body>

</html>