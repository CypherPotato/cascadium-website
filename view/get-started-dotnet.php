<!DOCTYPE html>
<html lang="en">
<?= render_view('layout.head', ['title' => 'Getting started with .NET']) ?>

<body>
    <main>
        <?= render_view('layout.nav', ['page' => 'get-started-dotnet']) ?>
        <div class="contents">
            <section>
                <h1>Getting started with .NET</h1>
                <p>
                    After installing the <a href="https://www.nuget.org/packages/Cascadium.Compiler">
                        Nuget package
                    </a>, you should be able to call Cascadium compiler from your code with:
                </p>
                <pre><code class="lang-cs">
                    string xcss = @"
                        div {
                            background-color: red;

                            > span {
                                color: yellow;
                            }
                        }
                        ";

                    string css = Cascadium.CascadiumCompiler.Compile(xcss);

                    Console.Write(css);
                </code></pre>
                <p>
                    And get the output:
                </p>
                <pre><code class="lang-css">
                    div{background-color:red}div>span{color:yellow}
                </code></pre>
                <p>
                    You can also specify compilation options with:
                </p>
                <pre><code class="lang-cs">
                    string css = Cascadium.CascadiumCompiler.Compile(xcss, new CascadiumOptions()
                    {
                        Pretty = true
                    });
                </code></pre>
                <p>
                    To view all compilation options,
                    <a href="/options">click here</a>.
                </p>
            </section>
        </div>
    </main>
</body>

</html>