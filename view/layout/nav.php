<aside>
    <div class="contents">
        <div class="logo">
            <img src="/dist/Cascadium-256.png" alt="">
            <h1>
                Cascadium
            </h1>
        </div>
        <nav>
            <div class="item" <?= $page == 'home' ? 'active' : '' ?>>
                <a href="/">
                    home
                </a>
            </div>
            <div class="item" <?= $page == 'get-started' ? 'active' : '' ?>>
                <a href="/get-started">
                    get started
                </a>
                <div class="sub-items">
                    <a href="/get-started/dotnet" <?= $page == 'get-started-dotnet' ? 'active' : '' ?>>
                        .NET
                    </a>
                    <a href="/get-started/cli" <?= $page == 'get-started-cli' ? 'active' : '' ?>>
                        CLI
                    </a>
                </div>
            </div>
            <div class="item" <?= $page == 'options' ? 'active' : '' ?>>
                <a href="/options">
                    options & features
                </a>
                <div class="sub-items">
                    <a href="#Pretty">
                        Pretty
                    </a>
                    <a href="#KeepNestingSpace">
                        Keep-Nesting-Space
                    </a>
                    <a href="#Merge">
                        Merge
                    </a>
                    <a href="#UseVarShortcut">
                        Use-Var-Shortcut
                    </a>
                    <a href="#AtRulesRewrites">
                        At-Rules-Rewrites
                    </a>
                    <a href="#Converters">
                        Converters
                    </a>
                </div>
            </div>
            <div class="item" <?= $page == 'roadmap' ? 'active' : '' ?>>
                <a href="/roadmap">
                    roadmap
                </a>
            </div>
            <div class="label">
                useful links
            </div>
            <div class="item">
                <a target="_blank" href="https://github.com/CypherPotato/cascadium">
                    github
                </a>
                <a target="_blank" href="https://github.com/CypherPotato/cascadium/releases">
                    download
                </a>
            </div>
        </nav>
    </div>
</aside>