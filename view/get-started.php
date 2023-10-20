<!DOCTYPE html>
<html lang="en">
<?= render_view('layout.head', ['title' => 'Getting started']) ?>

<body>
    <main>
        <?= render_view('layout.nav', ['page' => 'get-started']) ?>
        <div class="contents">
            <section>
                <h1>Getting started</h1>
                <p>
                    Currently, you can use Cascadium with the Nuget
                    package in .NET projects or with the tool for any type of project.
                </p>
                <h2>
                    To install Cascadium in your .NET Project, use the command:
                </h2>
                <pre><code class="lang-batch">
                    dotnet add package Cascadium.Compiler
                </code></pre>
                <p>
                    After that, <a href="/get-started/dotnet">
                        click here
                    </a> to learn how to use Cascadium with .NET.
                </p>
                <h2>
                    To use Cascadium with any kind of project
                </h2>
                <p>
                    Firstly, download latest <a href="https://github.com/CypherPotato/cascadium/releases">
                        Cascadium binaries
                    </a> from Github repository. Cascadium is available for
                    Windows, Linux-based systems and Mac OS.
                </p>
                <p>
                    Remember to put path to Cascadium in your environment path
                    so you can quickly access it from the terminal.
                </p>
                <p>
                    After that, <a href="/get-started/cli">
                        click here
                    </a> to learn how to use Cascadium with CLI.
                </p>
            </section>
        </div>
    </main>
</body>

</html>