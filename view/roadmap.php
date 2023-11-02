<!DOCTYPE html>
<html lang="en">
<?= render_view('layout.head', ['title' => 'Roadmap']) ?>

<body>
    <main>
        <?= render_view('layout.nav', ['page' => 'roadmap']) ?>
        <div class="contents">

            <section>
                <h1>Roadmap</h1>
                <p>
                    Cascadium is an independent study maintained by just one person. No guarantees are promised here.
                </p>
                <p>
                    Current version stage: <b>alpha</b>
                </p>
                <table>
                    <thead>
                        <th style="width: 60%">Feature</th>
                        <th style="width: 20%">Expected to</th>
                        <th style="width: 20%">Status</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <b>Output per-file:</b> generate multiple output files
                                instead a single one.
                            </td>
                            <td>
                                Q4'2023
                            </td>
                            <td>
                                Researching
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Beta launch:</b> release the first
                                beta version.
                            </td>
                            <td>
                                Q1'2024
                            </td>
                            <td>
                                In development
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Linter:</b> bring an simple linter to
                                identify syntax errors and warnings.
                            </td>
                            <td>
                                Q2'2024
                            </td>
                            <td>
                                Researching
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Source map generation:</b> generate source-map files
                                compatible with most source map readers.
                            </td>
                            <td>
                                Q2'2024
                            </td>
                            <td>
                                Researching
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
</body>

</html>