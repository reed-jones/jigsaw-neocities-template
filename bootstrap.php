<?php

use ReedJones\Neocities\NeocitiesDeployment;
use TightenCo\Jigsaw\Jigsaw;

/* @var $container \Illuminate\Container\Container */
/* @var $events \TightenCo\Jigsaw\Events\EventBus */

/*
 * Adds 'deploy' command. Always builds before deployment.
 *  - jigsaw deploy
 *  - jigsaw deploy production
 */
Jigsaw::mixin(new NeocitiesDeployment($container));

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     if ($jigsaw->getEnvironment() === 'production') {
 *         $jigsaw->deployToNeocities();
 *     }
 * });
 */
