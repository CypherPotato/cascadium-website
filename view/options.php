<!DOCTYPE html>
<html lang="en">
<?= render_view('layout.head', ['title' => 'Options and features']) ?>

<body>
    <main>
        <?= render_view('layout.nav', ['page' => 'options']) ?>
        <div class="contents">
            <section>
                <h1>
                    Compiler options
                </h1>
                <p>
                    The options described here can be used in both .NET and CLI.
                </p>
            </section>
            <section>
                <h2 id="Pretty">
                    Pretty
                </h2>
                <p>
                    Type: boolean
                </p>
                <p>
                    Determines whether the CSS output should be exported indented and well-formatted.
                </p>
                <p>
                    Syntaxes and usages:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="CLI" current>
                        <pre><code class="lang-batch">
                            cascadium --p:pretty false
                        </code></pre>
                    </div>
                    <div class="code-item" data-item=".NET">
                        <pre><code class="lang-csharp">
                            Cascadium.CascadiumCompiler.Compile(xcss, new CascadiumOptions()
                            {
                                Pretty = false
                            });
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="JSON Config">
                        <pre><code class="lang-json">
                            {
                                "pretty": false
                            }
                        </code></pre>
                    </div>
                </div>
                <p>
                    Example:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="Cascadium" current>
                        <pre><code class="lang-scss">
                            div {
                                background-color: red;

                                > span {
                                    color: yellow;
                                }

                                & :hover {
                                    background-color: blue;
                                }
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="CSS (Pretty on)">
                        <pre><code class="lang-css">
                            div {
                                background-color: red;
                            }

                            div > span {
                                color: yellow;
                            }

                            div:hover {
                                background-color: blue;
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="CSS (Pretty off)">
                        <pre><code class="lang-css">
                            div{background-color:red}div>span{color:yellow}div:hover{background-color:blue}
                        </code></pre>
                    </div>
                </div>
            </section>
            <section>
                <h2 id="KeepNestingSpace">
                    KeepNestingSpace
                </h2>
                <p>
                    Type: boolean
                </p>
                <p>
                    Determines whether the space between the &amp; operator
                    and the selector should be keept.
                </p>
                <p>
                    Syntaxes and usages:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="CLI" current>
                        <pre><code class="lang-batch">
                            cascadium --p:keepNestingSpace false
                        </code></pre>
                    </div>
                    <div class="code-item" data-item=".NET">
                        <pre><code class="lang-csharp">
                            Cascadium.CascadiumCompiler.Compile(xcss, new CascadiumOptions()
                            {
                                KeepNestingSpace = false
                            });
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="JSON Config">
                        <pre><code class="lang-json">
                            {
                                "keepNestingSpace": false
                            }
                        </code></pre>
                    </div>
                </div>
                <p>
                    Example:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="Cascadium" current>
                        <pre><code class="lang-scss">
                            div {
                                & :hover {
                                    background-color: blue;
                                }

                                &:active {
                                    background-color: red;
                                }
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="CSS (KeepNestingSpace on)">
                        <pre><code class="lang-css">
                            div :hover {
                                background-color: blue;
                            }

                            div:active {
                                background-color: red;
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="CSS (KeepNestingSpace off)">
                        <pre><code class="lang-css">
                            div:hover {
                                background-color: blue;
                            }

                            div:active {
                                background-color: red;
                            }
                        </code></pre>
                    </div>
                </div>
            </section>
            <section>
                <h2 id="Merge">
                    Merge
                </h2>
                <p>
                    Type: boolean
                </p>
                <p>
                    Determines whether equals rules and at-rules
                    declarations should be merged or not.
                </p>
                <p>
                    Syntaxes and usages:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="CLI" current>
                        <pre><code class="lang-batch">
                            cascadium --p:merge false
                        </code></pre>
                    </div>
                    <div class="code-item" data-item=".NET">
                        <pre><code class="lang-csharp">
                            Cascadium.CascadiumCompiler.Compile(xcss, new CascadiumOptions()
                            {
                                Merge = false
                            });
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="JSON Config">
                        <pre><code class="lang-json">
                            {
                                "merge": false
                            }
                        </code></pre>
                    </div>
                </div>
                <p>
                    Example:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="Cascadium" current>
                        <pre><code class="lang-scss">
                            div {
                                color: red;
                                font-family: Arial;

                                > .card {
                                    background-color: gainsboro;
                                }

                                @media abc {
                                    border: none;
                                }
                            }

                            div {
                                position: relative;
                            }

                            div > .card {
                                color: black;
                            }

                            @media abc {
                                div {
                                    outline-offset: 2px;
                                }
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="CSS (Merge off)">
                        <pre><code class="lang-css">
                            div {
                                color: red;
                                font-family: Arial;
                            }

                            div > .card {
                                background-color: gainsboro;
                            }

                            div {
                                position: relative;
                            }

                            div > .card {
                                color: black;
                            }

                            @media abc {
                                div {
                                    border: none;
                                }
                            }

                            @media abc {
                                div {
                                    outline-offset: 2px;
                                }
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="CSS (Merge on)">
                        <pre><code class="lang-css">
                            div {
                                color: red;
                                font-family: Arial;
                                position: relative;
                            }

                            div > .card {
                                background-color: gainsboro;
                                color: black;
                            }

                            @media abc {
                                div {
                                    border: none;
                                    outline-offset: 2px;
                                }
                            }
                        </code></pre>
                    </div>
                </div>
            </section>
            <section>
                <h2 id="UseVarShortcut">
                    UseVarShortcut
                </h2>
                <p>
                    Type: boolean
                </p>
                <p>
                    Determines whether the Cascadium compiler should automatically
                    rewrite <code>--variable</code> to <code>var(--variable)</code>
                </p>
                <p>
                    Syntaxes and usages:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="CLI" current>
                        <pre><code class="lang-batch">
                            cascadium --p:useVarShortcut false
                        </code></pre>
                    </div>
                    <div class="code-item" data-item=".NET">
                        <pre><code class="lang-csharp">
                            Cascadium.CascadiumCompiler.Compile(xcss, new CascadiumOptions()
                            {
                                UseVarShortcut = false
                            });
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="JSON Config">
                        <pre><code class="lang-json">
                            {
                                "useVarShortcut": false
                            }
                        </code></pre>
                    </div>
                </div>
                <p>
                    Example:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="Cascadium" current>
                        <pre><code class="lang-scss">
                            :root {
                                --bg-color: rose;
                            }

                            html, body {
                                background-color: --bg-color;
                                background: url('--bg-color'); // safe escape
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="CSS (UseVarShortcut on)">
                        <pre><code class="lang-css">
                            :root {
                                --bg-color: rose;
                            }

                            html, body {
                                background-color: var(--bg-color);
                                background: url('--bg-color');
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="CSS (UseVarShortcut off)">
                        <pre><code class="lang-css">
                            :root {
                                --bg-color: rose;
                            }

                            html, body {
                                background-color: --bg-color; /* syntax error */
                                background: url('--bg-color');
                            }
                        </code></pre>
                    </div>
                </div>
            </section>
            <section>
                <h2 id="AtRulesRewrites">
                    AtRulesRewrites
                </h2>
                <p>
                    Type: array
                </p>
                <p>
                    Specifies an list of @-rules which will be replaced by the specified values.
                </p>
                <p>
                    Syntaxes and usages:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item=".NET" current>
                        <pre><code class="lang-csharp">
                            Cascadium.CascadiumCompiler.Compile(xcss, new CascadiumOptions()
                            {
                                AtRulesRewrites =
                                {
                                    { "media mobile", "media only screen and (max-width: 712px)" },
                                    { "abcdef", "media (max-width: 1000px)" }
                                }
                            });
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="JSON Config">
                        <pre><code class="lang-json">
                            {
                                "atRulesRewrites": {
                                    "media mobile": "media only screen and (max-width: 712px)",
                                    "abcdef": "media (max-width: 1000px)"
                                }
                            }
                        </code></pre>
                    </div>
                </div>
                <p>
                    Example:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="Cascadium" current>
                        <pre><code class="lang-scss">
                            div {
                                color: red;
                            }

                            @media mobile {
                                div {
                                    color: green;
                                }
                            }

                            @abcdef {
                                div {
                                    color: blue;
                                }
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="CSS">
                        <pre><code class="lang-css">
                            div {
                                color: red;
                            }

                            @media only screen and (max-width: 712px) {
                                div {
                                    color: green;
                                }
                            }

                            @media (max-width: 1000px) {
                                div {
                                    color: blue;
                                }
                            }
                        </code></pre>
                    </div>
                </div>
            </section>
            <section>
                <h2 id="Converters">
                    Converters
                </h2>
                <p>
                    Type: array
                </p>
                <p>
                    Specifies an list of CSSConverter which will be used in the CSS Compiler.
                </p>
                <p>
                    Syntaxes and usages:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item=".NET" current>
                        <pre><code class="lang-csharp">
                            Cascadium.CascadiumCompiler.Compile(xcss, new CascadiumOptions()
                            {
                                Pretty = true,
                                Converters =
                                {
                                    new StaticCSSConverter()
                                    {
                                        MatchProperty = "$size",
                                        ArgumentCount = 2,
                                        Output =
                                        {
                                            { "width", "$1" },
                                            { "height", "$2" }
                                        }
                                    },
                                    new StaticCSSConverter()
                                    {
                                        MatchProperty = "border",
                                        ArgumentCount = null,
                                        Output =
                                        {
                                            { "-webkit-border", "$*" },
                                            { "-moz-border", "$*" },
                                            { "-ms-border", "$*" },
                                            { "-o-border", "$*" },
                                            { "border", "$*" }
                                        }
                                    },
                                    // any other converter which implements CSSConverter
                                }
                            });
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="JSON Config">
                        <pre><code class="lang-json">
                            "converters": [
                                {
                                    "matchProperty": "$size",
                                    "argumentCount": 2,
                                    "output": {
                                        "width": "$1",
                                        "height": "$2"
                                    }
                                },
                                {
                                    "matchProperty": "border",
                                    "argumentCount": null,
                                    "output": {
                                        "-webkit-border": "$*",
                                        "-moz-border": "$*",
                                        "-ms-border": "$*",
                                        "-o-border": "$*",
                                        "border": "$*"
                                    }
                                }
                            ]
                        </code></pre>
                    </div>
                </div>
                <p>
                    Example:
                </p>
                <div class="code-block">
                    <div class="code-item" data-item="Cascadium" current>
                        <pre><code class="lang-scss">
                            div {
                                $size: 200px 400px;
                                border: 12px solid yellow;
                            }
                        </code></pre>
                    </div>
                    <div class="code-item" data-item="CSS">
                        <pre><code class="lang-css">
                            div {
                                width: 200px;
                                height: 400px;
                                -webkit-border: 12px solid yellow;
                                -moz-border: 12px solid yellow;
                                -ms-border: 12px solid yellow;
                                -o-border: 12px solid yellow;
                                border: 12px solid yellow;
                            }
                        </code></pre>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>