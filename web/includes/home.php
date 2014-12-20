            <p class="panel">This site provides a mirror of the WordPress <a href="http://plugins.svn.wordpress.org/">plugin</a>
                and <a href="http://themes.svn.wordpress.org/">theme</a> directories as a <a href="http://getcomposer.org/">Composer</a>
                repository.</p>


<?php include __DIR__ . '/searchbar.php'; ?>

            <div class="row">
                <div class="large-6 columns">
                    <h3>How do I use it?</h3>
                    <ol>
                        <li>Add the repository to your <code>composer.json</code></li>
                        <li>Add the desired plugins and themes to your requirements using <code>wpackagist-plugin</code> or <code>wpackagist-theme</code> as the vendor name.</li>
                        <li>Run <code>$ composer.phar update</code></li>
                        <li>Packages are <a href="https://github.com/composer/installers">installed</a> to <code>wp-content/plugins/</code> or <code>wp-content/themes/</code></li>
                    </ol>

                    <h3>Example</h3>
                    <pre>{
    "name": "acme/brilliant-wordpress-site",
    "description": "My brilliant WordPress site",
<div class="highlighter">    "repositories":[
        {
            "type":"composer",
            "url":"http://wpackagist.org"
        }
    ],
</div>    "require": {
        "aws/aws-sdk-php":"*",
<div class="highlighter">        "wpackagist-plugin/akismet":"dev-trunk",
        "wpackagist-plugin/captcha":">=3.9",
        "wpackagist-theme/hueman":"*"
</div>    },
    "autoload": {
        "psr-0": {
            "Acme": "src/"
        }
    }
}</pre>
                    <p>This example <code>composer.json</code> file adds the Wpackagist repository and
                        includes the latest version of Akismet, at least version 3.9 of Captcha, and the latest Hueman theme
                        along with the Amazon Web Services SDK from the main <a href="https://packagist.org/">Packagist</a>
                        repository.</p>
                    <p>Find out more about <a href="http://getcomposer.org/doc/01-basic-usage.md">using Composer</a> including
                        <a href="https://github.com/composer/installers#custom-install-paths">custom install paths</a>.</p>
                    <p>The old vendor prefix <code>wpackagist</code> is now <strong>removed</strong> in favour of <code>wpackagist-plugin</code>.</p>
                </div>
                <div class="large-6 columns">
                    <h3>Why use Composer?</h3>
                    <blockquote class="clearfix">
                        &ldquo;Composer is a tool for dependency management in PHP. It allows you to declare the dependent
                        libraries your project needs and it will install them in your project for you.&rdquo;
                        <div class="right">&mdash; <a href="http://getcomposer.org/doc/00-intro.md">getcomposer.org</a></div>
                    </blockquote>
                    <ul>
                        <li>Avoid committing plugins and themes into source control.</li>
                        <li>Avoid having to use git submodules.</li>
                        <li>Manage WordPress and non-WordPress project libraries with the same tools.</li>
                        <li>Could eventually be used to manage dependencies between plugins.</li>
                    </ul>

                    <h3>How does the repository work?</h3>
                    <ul>
                        <li>Scans the WordPress Subversion repository for <a href="http://plugins.svn.wordpress.org/">plugins</a>
                            and <a href="http://themes.svn.wordpress.org/">themes</a>.</li>
                        <li>Fetches the <code>tags</code> for each updated package and maps those to versions.</li>
                        <li>For plugins, adds <code>trunk</code> as a dev version.</li>
                        <li>Rebuilds the composer package JSON files.</li>
                    </ul>

                    <h3>Known issues</h3>
                    <ul>
                        <li>Requires Composer 1.0.0-alpha7 or more recent</li>
                        <li>Version strings which Composer cannot parse are ignored. All plugins have at least the trunk build available.</li>
                        <li>Themes do not have a trunk version. It is recommended to use <code>"*"</code> as the required version.</li>
                        <li>Packages with unicode names might not work properly.</li>
                    </ul>

                    <h3>Contribute or get support</h3>
                    <p>Please visit our <a href="https://github.com/outlandishideas/wpackagist">GitHub page</a>.</p>
                </div>
            </div>
