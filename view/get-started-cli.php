<!DOCTYPE html>
<html lang="en">
<?= render_view('layout.head', ['title' => 'Getting started with CLI']) ?>

<body>
    <main>
        <?= render_view('layout.nav', ['page' => 'get-started-cli']) ?>
        <div class="contents">
            <section>
                <h1>Getting started with CLI tool</h1>
                <p>
                    The Cascadium CLI tool works with any
                    type of project out-of-box.
                </p>
                <p>
                    Firstly, download latest <a href="https://github.com/CypherPotato/cascadium/releases">
                        Cascadium binaries
                    </a> from the official Github repository. Cascadium is available for
                    Windows, Linux-based systems and Mac OS.
                </p>
                <p>
                    Cascadium does not have an official installer, so you
                    need to put it in the environment path manually.
                </p>
                <p>
                    When running the utility without parameters, this
                    is the list of parameters available in Cascadium:
                </p>
                <pre><code class="lang-none">
                    Copyright (C) 2023 cascadium

                        -f, --file              Specifies a relative path to an input file.

                        -d, --dir               Specifies a relative path to recursively include an
                                                directory.

                        -x, --extensions        Specify extensions (starting with dot) which the
                                                compiler will search for input directories.

                        -e, --exclude           Exclude an file or directory that matches the
                                                specified regex.

                        -o, --outfile           Specifies the output file where the compile CSS files
                                                will be written to.

                        -c, --config            Specifies the relative or absolute path to the
                                                configuration file.

                        --stdin                 Specifies that the stdin should be included as an
                                                input.

                        --p:Pretty              (Default: True) Specifies whether the compiler should
                                                generate an pretty, indented and formatted code.

                        --p:UseVarShortcut      (Default: True) Specifies whether the compiler should
                                                rewrite variable shortcuts.

                        --p:KeepNestingSpace    (Default: False) Specifies whether the compiler should
                                                keep spaces after the & operator.

                        --p:Merge               (Default: False) Specifies whether the compiler should
                                                merge rules and at-rules.

                        --watch                 Specifies if the compiler should watch for file
                                                changes and rebuild on each save.

                        --help                  Display this help screen.

                        --version               Display version information.
                </code></pre>
                <p>
                    Explanation of each parameter:
                </p>

                <ul>
                    <li>
                        <h4>
                            <code>-f, --file</code>
                        </h4>
                        <p>
                            Specify an absolute or relative path to include an file in the
                            compiler input.
                        </p>
                        <p>
                            Examples:
                        </p>
                        <pre><code class="lang-batch">
                            :: input multiple files
                            cascadium -f my-file.xcss -f my-other-file.xcss -f ..\styles\file.xcss

                            :: input an absolute path to file
                            cascadium -f C:\Users\Adminstrator\Repo\styles\app.xcss
                        </code></pre>
                    </li>
                    <li>
                        <h4>
                            <code>-d, --dir</code>
                        </h4>
                        <p>
                            Specify an absolute or relative path to include an entire directory in the
                            compiler input. This option includes all files in the indicated folder,
                            recursively, including sub-directories.
                        </p>
                        <p>
                            By default it will look for all files ending with <b>.xcss</b>, but you can
                            specify more extensions with <b>-x</b>.
                        </p>
                        <p>
                            Examples:
                        </p>
                        <pre><code class="lang-batch">
                            :: input directories
                            cascadium -d .\styles --dir .\js\vendor\styles
                        </code></pre>
                    </li>
                    <li>
                        <h4>
                            <code>-x, --extensions</code>
                        </h4>
                        <p>
                            Specify extensions to include when searching for files using `-d`.
                        </p>
                        <p>
                            The extension <b>.xcss</b> is already included by default.
                        </p>
                        <p>
                            Examples:
                        </p>
                        <pre><code class="lang-batch">
                            :: will search for all files terminating with
                            :: .css, .xcss and .scss in ./styles, recursively
                            cascadium -d .\styles -x .scss -x .css
                        </code></pre>
                    </li>
                    <li>
                        <h4>
                            <code>-e, --exclude</code>
                        </h4>
                        <p>
                            Specify regex patterns to exclude files from the compilation
                            input. The provided regex is case-insensitive.
                        </p>
                        <p>
                            The expression is applied to files only. If used with `-d`, it will
                            perform the expression on the files obtained from the
                            directory search.
                        </p>
                        <p>
                            Examples:
                        </p>
                        <pre><code class="lang-batch">
                            cascadium -d . -e "node_modules"
                        </code></pre>
                    </li>
                    <li>
                        <h4>
                            <code>-o, --outfile</code>
                        </h4>
                        <p>
                            Specify the output CSS file location.
                        </p>
                        <p>
                            For now, the compilation only generates
                            a single merged output file for all input files.
                        </p>
                        <p>
                            Examples:
                        </p>
                        <pre><code class="lang-batch">
                            cascadium -d .\styles -o .\dist\app.css
                        </code></pre>
                    </li>
                    <li>
                        <h4>
                            <code>-c, --config</code>
                        </h4>
                        <p>
                            Specify an configuration file.
                        </p>
                        <p>
                            Configuration file is a structured way of calling Cascadium,
                            eliminating the need to send all input parameters at once.
                            To better understand the settings file, read the <a href="/options">Options</a> section.
                        </p>
                        <p>
                            Examples:
                        </p>
                        <pre><code class="lang-batch">
                            cascadium -c .\cascadium.json
                        </code></pre>
                    </li>
                    <li>
                        <h4>
                            <code>--stdin</code>
                        </h4>
                        <p>
                            Reads the stdin input to the compiler output.
                        </p>
                        <p>
                            Examples:
                        </p>
                        <pre><code class="lang-batch">
                            echo div { color: red; } | cascadium --stdin
                        </code></pre>
                    </li>
                    <li>
                        <h4>
                            <code>--watch</code>
                        </h4>
                        <p>
                            Runs Cascadium in the background and compiles whenever
                            any of the input files change or a new file
                            is created or removed.
                        </p>
                        <p>
                            Examples:
                        </p>
                        <pre><code class="lang-batch">
                            cascadium -d .\styles --watch
                        </code></pre>
                    </li>
                </ul>
                <p>
                    For the parameters starting with <b>--p:*</b>, indicates that
                    it is a compiler setting and they are explained <a href="/options">here</a>.
                </p>
            </section>
        </div>
    </main>
</body>

</html>