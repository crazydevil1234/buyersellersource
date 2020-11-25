<?php
namespace Moto\System\Backup\Step; use Moto; use RecursiveDirectoryIterator; class SettingsCreateStep extends Moto\System\Backup\Step\AbstractStep { const NAME = 'settings:create'; public function handle($backup) { $absolutePath = Moto\System::getAbsolutePath('@websiteSettings'); $content = file_get_contents($absolutePath); $content = preg_replace('/(\/\* USER_SETTINGS:START \*\/)(.*)(\/\* USER_SETTINGS:END \*\/)/uis', "$1\n$3", $content); $content = str_replace("define('MOTO_INSTALLED', true)", "define('MOTO_INSTALLED', false)", $content); $backup->addFromString('@websiteSettings', $content); $engine = Moto\System\Settings::getEngine()->getPublicData(); $engine['version'] = Moto\Version::getCurrentVersion(); $engine['build'] = Moto\Version::getCurrentBuild(); $engine['product_id'] = Moto\System\ProductInformation::getProductId(); $user = Moto\System::getUser(); $meta = [ 'version' => 1, 'type' => $backup->type, 'engine' => $engine, 'website' => [ 'address' => Moto\Website\Settings::get('address'), 'title' => Moto\Website\Settings::get('title'), 'language_code' => Moto\Website\Settings::get('language_code'), 'language_locale' => Moto\Website\Settings::get('language_locale'), 'theme' => Moto\Util::arrayOnly(Moto\Website\Theme::getInfo(), ['name', 'label', 'version', 'build', 'template_id',]), ], 'user' => ($user ? Moto\Util::arrayOnly($user->toArray(), ['id', 'language_locale',]) : null), 'created_at' => date('Y-m-d H:i:s', time()), 'metaSteps' => $backup->getAttribute('metaSteps'), ]; $content = '<' . '?php

        return ' . var_export($meta, true) . ';'; $backup->addFromString('mt-backup/index.php', $content); return $this->returnCompleted(); } } 