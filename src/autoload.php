<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'theseer\\templado\\asset' => '/asset/Asset.php',
                'theseer\\templado\\assetcollection' => '/asset/AssetCollection.php',
                'theseer\\templado\\assetcollectionexception' => '/asset/AssetCollectionException.php',
                'theseer\\templado\\assetexception' => '/asset/AssetException.php',
                'theseer\\templado\\assetrenderer' => '/asset/AssetRenderer.php',
                'theseer\\templado\\csrfprotection' => '/csrfprotection/CSRFProtection.php',
                'theseer\\templado\\csrfprotectionrenderer' => '/csrfprotection/CSRFProtectionRenderer.php',
                'theseer\\templado\\exception' => '/Exception.php',
                'theseer\\templado\\filename' => '/FileName.php',
                'theseer\\templado\\formdata' => '/formdata/FormData.php',
                'theseer\\templado\\formdataexception' => '/formdata/FormDataException.php',
                'theseer\\templado\\formdatarenderer' => '/formdata/FormDataRenderer.php',
                'theseer\\templado\\formdatarendererexception' => '/formdata/FormDataRendererException.php',
                'theseer\\templado\\page' => '/Page.php',
                'theseer\\templado\\templado' => '/Templado.php',
                'theseer\\templado\\templadoexception' => '/TempladoException.php',
                'theseer\\templado\\viewmodelrenderer' => '/viewmodel/ViewModelRenderer.php',
                'theseer\\templado\\viewmodelrendererexception' => '/viewmodel/ViewModelRendererException.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    true
);
// @codeCoverageIgnoreEnd
