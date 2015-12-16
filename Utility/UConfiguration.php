<?php

	namespace KMS\FroalaEditorBundle\Utility;

	use Symfony\Component\Config\Definition\Builder\NodeBuilder;


	/**
	 * Class UConfiguration
	 * @package KMS\FroalaEditorBundle\Utility
	 */
	abstract class UConfiguration
	{

		public static $OPTIONS_BOOLEAN = array(
			"charCounterCount"               => null, //
			"codeBeautifier"                 => null, //
			"codeMirror"                     => null, //
			"disableRightClick"              => null, //
			"editInPopup"                    => null, //
			"editorClass"                    => null, //
			"fileUseSelectedText"            => null, //
			"fontFamilySelection"            => null, //
			"fontSizeSelection"              => null, //
			"fullPage"                       => null, //
			"htmlAllowComments"              => null, //
			"htmlSimpleAmpersand"            => null, //
			"iframe"                         => null, //
			"imageMove"                      => null, //
			"imageMultipleStyles"            => null, //
			"imagePaste"                     => null, //
			"imageResize"                    => null, //
			"imageResizeWithPercent"         => null, //
			"imageTextNear"                  => null, //
			"initOnClick"                    => null, //
			"keepFormatOnDelete"             => null, //
			"linkAlwaysBlank"                => null, //
			"linkAlwaysNoFollow"             => null, //
			"linkConvertEmailAddress"        => null, //
			"linkMultipleStyles"             => null, //
			"linkText"                       => null, //
			"multiLine"                      => null, //
			"paragraphFormatSelection"       => null, //
			"paragraphMultipleStyles"        => null, //
			"pasteAllowLocalImages"          => null, //
			"pastePlain"                     => null, //
			"requestWithCORS"                => null, //
			"spellcheck"                     => null, //
			"tableCellMultipleStyles"        => null, //
			"tableMultipleStyles"            => null, //
			"toolbarBottom"                  => null, //
			"toolbarInline"                  => null, //
			"toolbarSticky"                  => null, //
			"toolbarVisibleWithoutSelection" => null, //
			"useClasses"                     => null, //
			"videoResize"                    => null, //
			"videoTextNear"                  => null
		);

		public static $OPTIONS_BOOLEAN_CUSTOM = array(
			"includeJS"          => true, //
			"includeJQuery"      => true, //
			"includeFontAwesome" => true, //
			"includeCSS"         => true
		);

		public static $OPTIONS_INTEGER = array(
			"charCounterMax"           => null, //
			"colorsStep"               => null, //
			"emoticonsStep"            => null, //
			"fileMaxSize"              => null, //
			"height"                   => null, //
			"heightMax"                => null, //
			"heightMin"                => null, //
			"imageDefaultWidth"        => null, //
			"imageManagerPageSize"     => null, //
			"imageManagerScrollOffset" => null, //
			"imageMaxSize"             => null, //
			"lineBreakerOffset"        => null, //
			"saveInterval"             => null, //
			"tabSpaces"                => null, //
			"tableColorsStep"          => null, //
			"tableInsertMaxSize"       => null, //
			"tableResizerOffset"       => null, //
			"tableResizingLimit"       => null, //
			"toolbarStickyOffset"      => null, //
			"typingTimer"              => null, //
			"zIndex"                   => null
		);

		public static $OPTIONS_STRING = array(
			"colorsDefaultTab"         => null, //
			"direction"                => null, //
			"enter"                    => null, //
			"entities"                 => null, //
			"fileUploadMethod"         => null, //
			"fileUploadParam"          => null, //
			"fileUploadURL"            => "kms_froala_editor_upload_file", //
			"iframeStyle"              => null, //
			"imageDefaultAlign"        => null, //
			"imageDefaultDisplay"      => null, //
			"imageManagerDeleteMethod" => null, //
			"imageManagerDeleteURL"    => "kms_froala_editor_delete_image", //
			"imageManagerLoadMethod"   => null, //
			"imageManagerLoadURL"      => "kms_froala_editor_load_images", //
			"imageManagerPreloader"    => null, //
			"imageUploadMethod"        => null, //
			"imageUploadParam"         => null, //
			"imageUploadURL"           => "kms_froala_editor_upload_image", //
			"language"                 => null, //
			"linkAutoPrefix"           => null, //
			"placeholderText"          => null, //
			"saveMethod"               => null, //
			"saveParam"                => null, //
			"saveURL"                  => null, //
			"scrollableContainer"      => null, //
			"theme"                    => null, //
			"videoDefaultAlign"        => null, //
			"videoDefaultDisplay"      => null, //
			"width"                    => null
		);

		public static $OPTIONS_STRING_CUSTOM = array(
			"basePath"          => "/bundles/kmsfroalaeditor/froala_editor_2.0.5", //
			"imageUploadFolder" => "/upload", //
			"imageUploadPath"   => null, //
			"fileUploadFolder"  => "/upload", //
			"fileUploadPath"    => null, //
			"serialNumber"      => null
		);

		public static $OPTIONS_ARRAY = array(
			"colorsBackground"     => array(), //
			"colorsText"           => array(), //
			//"emoticonsSet"         => array(), //
			"fileAllowedTypes"     => array(), //
			"fontSize"             => array(), //
			"htmlAllowedAttrs"     => array(), //
			"htmlAllowedEmptyTags" => array(), //
			"htmlAllowedTags"      => array(), //
			"htmlRemoveTags"       => array(), //
			"imageAllowedTypes"    => array(), //
			"imageAltButtons"      => array(), //
			"imageEditButtons"     => array(), //
			"imageInsertButtons"   => array(), //
			"imageSizeButtons"     => array(), //
			"lineBreakerTags"      => array(), //
			"linkEditButtons"      => array(), //
			"linkInsertButtons"    => array(), //
			"linkList"             => array(), //
			"pasteDeniedAttrs"     => array(), //
			"pasteDeniedTags"      => array(), //
			"shortcutsEnabled"     => array(), //
			"tableColors"          => array(), //
			"tableColorsButtons"   => array(), //
			"tableEditButtons"     => array(), //
			"tableInsertButtons"   => array(), //
			"toolbarButtons"       => array(), //
			"toolbarButtonsMD"     => array(), //
			"toolbarButtonsSM"     => array(), //
			"toolbarButtonsXS"     => array(), //
			"videoEditButtons"     => array(), //
			"videoInsertButtons"   => array(), //
			"videoSizeButtons"     => array()
		);

		public static $OPTIONS_ARRAY_CUSTOM = array(
			"pluginsEnabled"  => array(), //
			"pluginsDisabled" => array()
		);

		public static $OPTIONS_OBJECT = array(
			"codeMirrorOptions"        => array(), //
			"fileUploadParams"         => array(), //
			"fileUploadToS3"           => array(), //
			"fontFamily"               => array(), //
			"imageManagerDeleteParams" => array(), //
			"imageManagerLoadParams"   => array(), //
			"imageStyles"              => array(), //
			"imageUploadParams"        => array(), //
			"imageUploadToS3"          => array(), //
			"inlineStyles"             => array(), //
			"linkAttributes"           => array(), //
			"linkStyles"               => array(), //
			"paragraphFormat"          => array(), //
			"paragraphStyles"          => array(), //
			"requestHeaders"           => array(), //
			"saveParams"               => array(), //
			"tableStyles"              => array(), //
			"tableCellStyles"          => array()
		);

		public static $OPTIONS_OBJECT_CUSTOM = array(
			"imageManagerDeleteURLParams" => array(), //
			"imageManagerLoadURLParams"   => array(), //
			"imageUploadURLParams"        => array(), //
			"saveURLParams"               => array(), //
			"fileUploadURLParams"         => array(), //
		);

		/**
		 * @return array
		 */
		public static function getArrOptionAll()
		{
			//------------------------- DECLARE ---------------------------//

			return array_merge( self::getArrOption(), self::getArrOptionCustom() );
		}

		/**
		 * @return array
		 */
		public static function getArrOption()
		{
			//------------------------- DECLARE ---------------------------//

			return array_merge( array_merge(
									array_merge(
										array_merge(
											array_keys( UConfiguration::$OPTIONS_BOOLEAN ),
											array_keys( UConfiguration::$OPTIONS_INTEGER ) ),
										array_keys( UConfiguration::$OPTIONS_STRING ) ),
									array_keys( UConfiguration::$OPTIONS_ARRAY ) ),
								array_keys( UConfiguration::$OPTIONS_OBJECT ) );
		}

		/**
		 * @return array
		 */
		public static function getArrOptionCustom()
		{
			//------------------------- DECLARE ---------------------------//

			return array_merge( array_merge(
									array_merge(
										array_keys( UConfiguration::$OPTIONS_BOOLEAN_CUSTOM ),
										array_keys( UConfiguration::$OPTIONS_STRING_CUSTOM ) ),
									array_keys( UConfiguration::$OPTIONS_ARRAY_CUSTOM ) ),
								array_keys( UConfiguration::$OPTIONS_OBJECT_CUSTOM ) );
		}

		/**
		 * @param \Symfony\Component\Config\Definition\Builder\NodeBuilder $p_nodeBuilder
		 */
		public static function addArrOptionBoolean( NodeBuilder $p_nodeBuilder )
		{
			$array = array_merge( UConfiguration::$OPTIONS_BOOLEAN, UConfiguration::$OPTIONS_BOOLEAN_CUSTOM );
			//------------------------- DECLARE ---------------------------//

			foreach( $array as $option => $defaultValue )
			{
				$p_nodeBuilder = $p_nodeBuilder->booleanNode( $option )->defaultValue( $defaultValue )->end();
			}
		}

		/**
		 * @param \Symfony\Component\Config\Definition\Builder\NodeBuilder $p_nodeBuilder
		 */
		public static function addArrOptionInteger( NodeBuilder $p_nodeBuilder )
		{
			//------------------------- DECLARE ---------------------------//

			foreach( UConfiguration::$OPTIONS_INTEGER as $option => $defaultValue )
			{
				$p_nodeBuilder = $p_nodeBuilder->integerNode( $option )->defaultValue( $defaultValue )->end();
			}
		}

		/**
		 * @param \Symfony\Component\Config\Definition\Builder\NodeBuilder $p_nodeBuilder
		 */
		public static function addArrOptionString( NodeBuilder $p_nodeBuilder )
		{
			$array = array_merge( UConfiguration::$OPTIONS_STRING, UConfiguration::$OPTIONS_STRING_CUSTOM );
			//------------------------- DECLARE ---------------------------//

			foreach( $array as $option => $defaultValue )
			{
				$p_nodeBuilder = $p_nodeBuilder->scalarNode( $option )->defaultValue( $defaultValue )->end();
			}
		}

		/**
		 * @param \Symfony\Component\Config\Definition\Builder\NodeBuilder $p_nodeBuilder
		 */
		public static function addArrOptionArray( NodeBuilder $p_nodeBuilder )
		{
			$array = array_merge( UConfiguration::$OPTIONS_ARRAY, UConfiguration::$OPTIONS_ARRAY_CUSTOM );
			//------------------------- DECLARE ---------------------------//

			foreach( $array as $option => $defaultValue )
			{
				$p_nodeBuilder =
					$p_nodeBuilder->arrayNode( $option )->prototype( 'scalar' )->end()->defaultValue( $defaultValue )
								  ->end();
			}
		}

		/**
		 * @param \Symfony\Component\Config\Definition\Builder\NodeBuilder $p_nodeBuilder
		 */
		public static function addArrOptionObject( NodeBuilder $p_nodeBuilder )
		{
			$array = array_merge( UConfiguration::$OPTIONS_OBJECT, UConfiguration::$OPTIONS_OBJECT_CUSTOM );
			//------------------------- DECLARE ---------------------------//

			foreach( $array as $option => $defaultValue )
			{
				$p_nodeBuilder =
					$p_nodeBuilder->arrayNode( $option )->prototype( 'scalar' )->end()->defaultValue( $defaultValue )
								  ->end();
			}
		}

	}