<?php
header('Content-type: text/css');

// get template params
$brandcolor = $this->params->get('brandcolor');
$maxwidth = $this->params->get('maxwidth');
$basefontsize = $this->params->get('basefontsize');
$bodybackground = $this->params->get('bodybackground');
$textindent = $this->params->get('textindent');

?>

<style type="text/css">

    html {
        font-size: <?php echo $basefontsize;?>%;
    }

    h1 {
        color: <?php echo $brandcolor;?> !important;
    }

    <?php if ($textindent == 1): ?>
        article p + p {
            text-indent: 1.5em;
            margin-top: -.75em;
        }

        article p.bild + p,
        article p.lead + p,
        article p.bildlegende + p,
        article p.autor + p {
            text-indent: 0 !important;
        }

        article p.readmore {
            text-indent: 0 !important;
            display: block;
            padding: 1em 0 2em 0;
        }

        article p.readmore a {
            margin: 0 !important;
        }
    <?php endif; ?>

    @media screen and (min-width: 48em){

        <?php if ($bodybackground): ?>
            body {
                background: url(<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($bodybackground);?>) center top no-repeat fixed;
                background-size: cover;
            }
        <?php endif; ?>

        .wrapper-push {
            max-width: <?php echo $maxwidth;?>em;
        }
    }

</style>