<link rel="stylesheet" href="/public/app/landings/editor/editor.css?v=<?= filemtime("public/app/landings/editor/editor.css") ?>">

<div class="editor-landing">
    <div class="editor-landing__info">
        <div class="editor-landing__emoji">
            <img class="editor-landing__emoji-item" src="/public/app/landings/editor/img/star-struck-emoji.png" alt="Star-struck emoji">
            <img class="editor-landing__emoji-item" src="/public/app/landings/editor/img/socks-emoji.png" alt="Socks emoji">
            <img class="editor-landing__emoji-item" src="/public/app/landings/editor/img/raised-eyebrow-emoji.png" alt="Raised eyebrow emoji">
        </div>
        <h1 class="editor-landing__title">CodeX Editor</h1>
        <div class="editor-landing__description">Next generation block styled editor. Free. Use for pleasure.</div>

        <div class="editor-landing__links clearfix">
            <a href="#" class="editor-landing__links-item">Documentation</a>
            <a href="#" class="editor-landing__links-item">Plugins</a>
        </div>
    </div>
    <div class="editor-landing__demo" data-module="editor pluginsFilter">
        <module-settings hidden>
            [
                {
                    "blocks" : [
                        {
                            "type" : "header",
                            "data" : {
                                "text" : "Outputs clear data at JSON",
                                "level" : 2
                            }
                        },
                        {
                            "type" : "paragraph",
                            "data" : {
                                "text" : "Use it in Web, mobile, APM, Instant Articles, speech readers — everywhere."
                            }
                        },
                        {
                            "type" : "header",
                            "data" : {
                                "text" : "API is the feature",
                                "level" : 2
                            }
                        },
                        {
                            "type" : "paragraph",
                            "data" : {
                                "text" : "Easy to build Plugins. Dozens of created."
                            }
                        }
                    ],
                    "button_id" : "saveButton",
                    "output_id" : "output"
                },
                {
                    "inlineFilterButtonClass" : ".js-inline-tools-filter",
                    "blockFilterButtonClass" : ".js-block-tools-filter",
                    "blockToolsClass" : ".js-block-tool",
                    "inlineToolsClass" : ".js-inline-tool",
                    "allPluginsButtonClass" : ".js-all-plugins-button"
                }
            ]
        </module-settings>

        <div id="codex-editor"></div>

        <div class="editor-landing__button-wrapper">
            <div class="button editor-landing__button" id="saveButton">
                View Output
            </div>
        </div>
    </div>
    <div class="editor-landing__preview">
        <pre id="output"></pre>
    </div>
    <div class="editor-landing__loved-by">
        <div class="editor-landing__loved-by-companies">
            <a rel="nofollow" class="editor-landing__loved-by-item" target="_blank" href="//tjournal.ru">
                <? include(DOCROOT . '/public/app/landings/editor/svg/tj.svg'); ?>
            </a>
            <a rel="nofollow" class="editor-landing__loved-by-item" target="_blank" href="//dtf.ru">
                <? include(DOCROOT . '/public/app/landings/editor/svg/dtf.svg'); ?>
            </a>
            <a rel="nofollow" class="editor-landing__loved-by-item" target="_blank" href="//vc.ru">
                <? include(DOCROOT . '/public/app/landings/editor/svg/vc-ru.svg'); ?>
            </a>
        </div>
    </div>
    <?
        $plugins = array(
            array(
                'name' => 'Header',
                'type' => 'Block',
                'js-class' => 'js-block-tool',
                'description' => 'How will you live without headers?',
                'contributors' => array(
                    array( 'name' => 'neSpecc', 'photo' => 'https://avatars0.githubusercontent.com/u/3684889?v=4&s=60' ),
                    array( 'name' => 'talyguryn', 'photo' => 'https://avatars1.githubusercontent.com/u/15259299?v=4&s=60' ),
                    array( 'name' => 'n0str', 'photo' => 'https://avatars1.githubusercontent.com/u/988885?v=4&s=60' )
                ),
                'url' => 'github.com/codex-editor/header'
            ),
            array(
                'name' => 'Marker',
                'type' => 'Inline Tool',
                'js-class' => 'js-inline-tool',
                'description' => 'Highlight text fragments in your beautiful articles.',
                'contributors' => array(
                    array( 'name' => 'PolinaShneider', 'photo' => 'https://avatars3.githubusercontent.com/u/15448200?s=460&v=4' )
                ),
                'url' => 'github.com/codex-editor/marker'
            ),
            array(
                'name' => 'Personality',
                'type' => 'Block',
                'js-class' => 'js-block-tool',
                'description' => 'Beautiful widgets for beautiful persons.',
                'contributors' => array(
                    array( 'name' => 'neSpecc', 'photo' => 'https://avatars0.githubusercontent.com/u/3684889?v=4&s=60' ),
                    array( 'name' => 'talyguryn', 'photo' => 'https://avatars1.githubusercontent.com/u/15259299?v=4&s=60' )
                ),
                'url' => 'github.com/codex-editor/personality'
            ),
            array(
                'name' => 'Code',
                'type' => 'Block',
                'js-class' => 'js-block-tool',
                'description' => 'Include code examples in your writings.',
                'contributors' => array(
                    array( 'name' => 'talyguryn', 'photo' => 'https://avatars1.githubusercontent.com/u/15259299?v=4&s=60' ),
                    array( 'name' => 'PolinaShneider', 'photo' => 'https://avatars3.githubusercontent.com/u/15448200?s=460&v=4' )
                ),
                'url' => 'github.com/codex-editor/code'
            ),
            array(
                'name' => 'Link',
                'type' => 'Inline Tool',
                'js-class' => 'js-inline-tool',
                'description' => 'Embed links in your articles.',
                'contributors' => array(
                    array( 'name' => 'neSpecc', 'photo' => 'https://avatars0.githubusercontent.com/u/3684889?v=4&s=60' ),
                    array( 'name' => 'talyguryn', 'photo' => 'https://avatars1.githubusercontent.com/u/15259299?v=4&s=60' ),
                    array( 'name' => 'khaydarov', 'photo' => 'https://avatars1.githubusercontent.com/u/6507765?s=400&v=4' ),
                ),
                'url' => 'github.com/codex-editor/link'
            )

        )
    ?>
    <div class="editor-landing__plugins">
        <h2 class="editor-landing__plugins-title">
            Best plugins
        </h2>
        <p class="editor-landing__plugins-description">
            Plugins can represent any Blocks: Quotes, Galleries, Polls, Embeds, Tables — anything you need. Also they can implement Inline Tools such as Marker, Term, Comments etc.
        </p>
        <div class="editor-landing__plugins-filter">
            <span class="editor-landing__plugins-filter-button js-block-tools-filter">
                <? include(DOCROOT . '/public/app/landings/editor/svg/plus-icon.svg'); ?>
                Blocks
            </span>
            <span class="editor-landing__plugins-filter-button js-inline-tools-filter">
                <? include(DOCROOT . '/public/app/landings/editor/svg/marker-icon.svg'); ?>
                Inline Tools
            </span>
        </div>
        <? foreach ( $plugins as $plugin ): ?>
            <div class="editor-plugin clearfix <?= $plugin['js-class'] ?>">
                <a href="//<?= $plugin['url'] ?>" target="_blank">
                    <h3 class="editor-plugin__title"><?= $plugin['name'] ?></h3>
                    <span class="editor-plugin__label"><?= $plugin['type'] ?></span>
                </a>
                <div class="editor-plugin__gif"></div>
                <div class="editor-plugin__description"><?= $plugin['description'] ?></div>
                <div class="editor-plugin__contributors">
                    <? foreach ( $plugin['contributors'] as $contributor ): ?>
                        <a href="//github.com/<?= $contributor['name']; ?>" class="editor-plugin__contributors-item" title="<?= $contributor['name'] ?>" target="_blank">
                            <img src="<?= $contributor['photo'] ?>" alt="<?= $contributor['name'] ?>">
                        </a>
                    <? endforeach; ?>
                </div>
            </div>
        <? endforeach; ?>
        <div class="editor-landing__actions clearfix">
            <span class="editor-landing__more-plugins js-all-plugins-button">
                <? include(DOCROOT . '/public/app/landings/editor/svg/arrow-icon.svg'); ?>
                View all plugins
            </span>
            <a class="editor-landing__contribute" href="#">
                <? include(DOCROOT . '/public/app/landings/editor/svg/plus-icon.svg'); ?>
                Contribute your plugin to this featured list
            </a>
        </div>
    </div>
</div>