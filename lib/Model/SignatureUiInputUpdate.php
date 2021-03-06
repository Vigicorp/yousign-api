<?php
/**
 * SignatureUiInputUpdate
 *
 * PHP version 5
 *
 * @category Class
 * @package  YouSign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Yousign API Swagger
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * Contact: support@yousign.fr
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YouSign\Client\Model;

use \ArrayAccess;
use \YouSign\Client\ObjectSerializer;

/**
 * SignatureUiInputUpdate Class Doc Comment
 *
 * @category Class
 * @package  YouSign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignatureUiInputUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignatureUiInputUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'enable_header_bar' => 'bool',
        'enable_header_bar_sign_as' => 'bool',
        'enable_sidebar' => 'bool',
        'enable_member_list' => 'bool',
        'enable_document_list' => 'bool',
        'enable_document_download' => 'bool',
        'enable_activities' => 'bool',
        'authentication_popup' => 'bool',
        'default_zoom' => 'float',
        'logo' => 'string',
        'sign_image_types_available' => 'string[]',
        'default_language' => 'string',
        'languages' => 'string[]',
        'fonts' => 'string[]',
        'style' => 'string',
        'redirect_cancel' => '\YouSign\Client\Model\SignatureUiOutputRedirectCancel',
        'redirect_error' => '\YouSign\Client\Model\SignatureUiOutputRedirectError',
        'redirect_success' => '\YouSign\Client\Model\SignatureUiOutputRedirectSuccess'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'enable_header_bar' => null,
        'enable_header_bar_sign_as' => null,
        'enable_sidebar' => null,
        'enable_member_list' => null,
        'enable_document_list' => null,
        'enable_document_download' => null,
        'enable_activities' => null,
        'authentication_popup' => null,
        'default_zoom' => null,
        'logo' => null,
        'sign_image_types_available' => null,
        'default_language' => null,
        'languages' => null,
        'fonts' => null,
        'style' => null,
        'redirect_cancel' => null,
        'redirect_error' => null,
        'redirect_success' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'description' => 'description',
        'enable_header_bar' => 'enableHeaderBar',
        'enable_header_bar_sign_as' => 'enableHeaderBarSignAs',
        'enable_sidebar' => 'enableSidebar',
        'enable_member_list' => 'enableMemberList',
        'enable_document_list' => 'enableDocumentList',
        'enable_document_download' => 'enableDocumentDownload',
        'enable_activities' => 'enableActivities',
        'authentication_popup' => 'authenticationPopup',
        'default_zoom' => 'defaultZoom',
        'logo' => 'logo',
        'sign_image_types_available' => 'signImageTypesAvailable',
        'default_language' => 'defaultLanguage',
        'languages' => 'languages',
        'fonts' => 'fonts',
        'style' => 'style',
        'redirect_cancel' => 'redirectCancel',
        'redirect_error' => 'redirectError',
        'redirect_success' => 'redirectSuccess'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'enable_header_bar' => 'setEnableHeaderBar',
        'enable_header_bar_sign_as' => 'setEnableHeaderBarSignAs',
        'enable_sidebar' => 'setEnableSidebar',
        'enable_member_list' => 'setEnableMemberList',
        'enable_document_list' => 'setEnableDocumentList',
        'enable_document_download' => 'setEnableDocumentDownload',
        'enable_activities' => 'setEnableActivities',
        'authentication_popup' => 'setAuthenticationPopup',
        'default_zoom' => 'setDefaultZoom',
        'logo' => 'setLogo',
        'sign_image_types_available' => 'setSignImageTypesAvailable',
        'default_language' => 'setDefaultLanguage',
        'languages' => 'setLanguages',
        'fonts' => 'setFonts',
        'style' => 'setStyle',
        'redirect_cancel' => 'setRedirectCancel',
        'redirect_error' => 'setRedirectError',
        'redirect_success' => 'setRedirectSuccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'enable_header_bar' => 'getEnableHeaderBar',
        'enable_header_bar_sign_as' => 'getEnableHeaderBarSignAs',
        'enable_sidebar' => 'getEnableSidebar',
        'enable_member_list' => 'getEnableMemberList',
        'enable_document_list' => 'getEnableDocumentList',
        'enable_document_download' => 'getEnableDocumentDownload',
        'enable_activities' => 'getEnableActivities',
        'authentication_popup' => 'getAuthenticationPopup',
        'default_zoom' => 'getDefaultZoom',
        'logo' => 'getLogo',
        'sign_image_types_available' => 'getSignImageTypesAvailable',
        'default_language' => 'getDefaultLanguage',
        'languages' => 'getLanguages',
        'fonts' => 'getFonts',
        'style' => 'getStyle',
        'redirect_cancel' => 'getRedirectCancel',
        'redirect_error' => 'getRedirectError',
        'redirect_success' => 'getRedirectSuccess'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const SIGN_IMAGE_TYPES_AVAILABLE_NAME = 'name';
    const SIGN_IMAGE_TYPES_AVAILABLE_DRAW = 'draw';
    const SIGN_IMAGE_TYPES_AVAILABLE_CUSTOM = 'custom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignImageTypesAvailableAllowableValues()
    {
        return [
            self::SIGN_IMAGE_TYPES_AVAILABLE_NAME,
            self::SIGN_IMAGE_TYPES_AVAILABLE_DRAW,
            self::SIGN_IMAGE_TYPES_AVAILABLE_CUSTOM,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enable_header_bar'] = isset($data['enable_header_bar']) ? $data['enable_header_bar'] : true;
        $this->container['enable_header_bar_sign_as'] = isset($data['enable_header_bar_sign_as']) ? $data['enable_header_bar_sign_as'] : true;
        $this->container['enable_sidebar'] = isset($data['enable_sidebar']) ? $data['enable_sidebar'] : true;
        $this->container['enable_member_list'] = isset($data['enable_member_list']) ? $data['enable_member_list'] : true;
        $this->container['enable_document_list'] = isset($data['enable_document_list']) ? $data['enable_document_list'] : true;
        $this->container['enable_document_download'] = isset($data['enable_document_download']) ? $data['enable_document_download'] : true;
        $this->container['enable_activities'] = isset($data['enable_activities']) ? $data['enable_activities'] : true;
        $this->container['authentication_popup'] = isset($data['authentication_popup']) ? $data['authentication_popup'] : false;
        $this->container['default_zoom'] = isset($data['default_zoom']) ? $data['default_zoom'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['sign_image_types_available'] = isset($data['sign_image_types_available']) ? $data['sign_image_types_available'] : null;
        $this->container['default_language'] = isset($data['default_language']) ? $data['default_language'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['fonts'] = isset($data['fonts']) ? $data['fonts'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['redirect_cancel'] = isset($data['redirect_cancel']) ? $data['redirect_cancel'] : null;
        $this->container['redirect_error'] = isset($data['redirect_error']) ? $data['redirect_error'] : null;
        $this->container['redirect_success'] = isset($data['redirect_success']) ? $data['redirect_success'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Resource's name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Signature UI's description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets enable_header_bar
     *
     * @return bool
     */
    public function getEnableHeaderBar()
    {
        return $this->container['enable_header_bar'];
    }

    /**
     * Sets enable_header_bar
     *
     * @param bool $enable_header_bar Toggle header bar of the app view
     *
     * @return $this
     */
    public function setEnableHeaderBar($enable_header_bar)
    {
        $this->container['enable_header_bar'] = $enable_header_bar;

        return $this;
    }

    /**
     * Gets enable_header_bar_sign_as
     *
     * @return bool
     */
    public function getEnableHeaderBarSignAs()
    {
        return $this->container['enable_header_bar_sign_as'];
    }

    /**
     * Sets enable_header_bar_sign_as
     *
     * @param bool $enable_header_bar_sign_as Toggle \"Sign as\" band on the top of the app view
     *
     * @return $this
     */
    public function setEnableHeaderBarSignAs($enable_header_bar_sign_as)
    {
        $this->container['enable_header_bar_sign_as'] = $enable_header_bar_sign_as;

        return $this;
    }

    /**
     * Gets enable_sidebar
     *
     * @return bool
     */
    public function getEnableSidebar()
    {
        return $this->container['enable_sidebar'];
    }

    /**
     * Sets enable_sidebar
     *
     * @param bool $enable_sidebar Toggle sidebar of the app view
     *
     * @return $this
     */
    public function setEnableSidebar($enable_sidebar)
    {
        $this->container['enable_sidebar'] = $enable_sidebar;

        return $this;
    }

    /**
     * Gets enable_member_list
     *
     * @return bool
     */
    public function getEnableMemberList()
    {
        return $this->container['enable_member_list'];
    }

    /**
     * Sets enable_member_list
     *
     * @param bool $enable_member_list Toggle list of members in the procedure
     *
     * @return $this
     */
    public function setEnableMemberList($enable_member_list)
    {
        $this->container['enable_member_list'] = $enable_member_list;

        return $this;
    }

    /**
     * Gets enable_document_list
     *
     * @return bool
     */
    public function getEnableDocumentList()
    {
        return $this->container['enable_document_list'];
    }

    /**
     * Sets enable_document_list
     *
     * @param bool $enable_document_list Toggle list of documents in the procedure
     *
     * @return $this
     */
    public function setEnableDocumentList($enable_document_list)
    {
        $this->container['enable_document_list'] = $enable_document_list;

        return $this;
    }

    /**
     * Gets enable_document_download
     *
     * @return bool
     */
    public function getEnableDocumentDownload()
    {
        return $this->container['enable_document_download'];
    }

    /**
     * Sets enable_document_download
     *
     * @param bool $enable_document_download Toggle downloads buttons for documents
     *
     * @return $this
     */
    public function setEnableDocumentDownload($enable_document_download)
    {
        $this->container['enable_document_download'] = $enable_document_download;

        return $this;
    }

    /**
     * Gets enable_activities
     *
     * @return bool
     */
    public function getEnableActivities()
    {
        return $this->container['enable_activities'];
    }

    /**
     * Sets enable_activities
     *
     * @param bool $enable_activities Toggle activity feed
     *
     * @return $this
     */
    public function setEnableActivities($enable_activities)
    {
        $this->container['enable_activities'] = $enable_activities;

        return $this;
    }

    /**
     * Gets authentication_popup
     *
     * @return bool
     */
    public function getAuthenticationPopup()
    {
        return $this->container['authentication_popup'];
    }

    /**
     * Sets authentication_popup
     *
     * @param bool $authentication_popup True for use a popup for enter the SMS code, false for use a fullscreen view.
     *
     * @return $this
     */
    public function setAuthenticationPopup($authentication_popup)
    {
        $this->container['authentication_popup'] = $authentication_popup;

        return $this;
    }

    /**
     * Gets default_zoom
     *
     * @return float
     */
    public function getDefaultZoom()
    {
        return $this->container['default_zoom'];
    }

    /**
     * Sets default_zoom
     *
     * @param float $default_zoom Default zoom of the pdf viewer. Default is the adapted to the resolution of your screen.
     *
     * @return $this
     */
    public function setDefaultZoom($default_zoom)
    {
        $this->container['default_zoom'] = $default_zoom;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo Base64 of your logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets sign_image_types_available
     *
     * @return string[]
     */
    public function getSignImageTypesAvailable()
    {
        return $this->container['sign_image_types_available'];
    }

    /**
     * Sets sign_image_types_available
     *
     * @param string[] $sign_image_types_available Allow sign images types available for signature.
     *
     * @return $this
     */
    public function setSignImageTypesAvailable($sign_image_types_available)
    {
        $allowedValues = $this->getSignImageTypesAvailableAllowableValues();
        if (!is_null($sign_image_types_available) && array_diff($sign_image_types_available, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sign_image_types_available', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sign_image_types_available'] = $sign_image_types_available;

        return $this;
    }

    /**
     * Gets default_language
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->container['default_language'];
    }

    /**
     * Sets default_language
     *
     * @param string $default_language Default language of the view. Must be in \"languages\" field.
     *
     * @return $this
     */
    public function setDefaultLanguage($default_language)
    {
        $this->container['default_language'] = $default_language;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return string[]
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     *
     * @param string[] $languages Array of allowed languages, use country code
     *
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets fonts
     *
     * @return string[]
     */
    public function getFonts()
    {
        return $this->container['fonts'];
    }

    /**
     * Sets fonts
     *
     * @param string[] $fonts List of fonts to load on the view. (Loaded via google fonts)
     *
     * @return $this
     */
    public function setFonts($fonts)
    {
        $this->container['fonts'] = $fonts;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string $style CSS for customize the view
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets redirect_cancel
     *
     * @return \YouSign\Client\Model\SignatureUiOutputRedirectCancel
     */
    public function getRedirectCancel()
    {
        return $this->container['redirect_cancel'];
    }

    /**
     * Sets redirect_cancel
     *
     * @param \YouSign\Client\Model\SignatureUiOutputRedirectCancel $redirect_cancel redirect_cancel
     *
     * @return $this
     */
    public function setRedirectCancel($redirect_cancel)
    {
        $this->container['redirect_cancel'] = $redirect_cancel;

        return $this;
    }

    /**
     * Gets redirect_error
     *
     * @return \YouSign\Client\Model\SignatureUiOutputRedirectError
     */
    public function getRedirectError()
    {
        return $this->container['redirect_error'];
    }

    /**
     * Sets redirect_error
     *
     * @param \YouSign\Client\Model\SignatureUiOutputRedirectError $redirect_error redirect_error
     *
     * @return $this
     */
    public function setRedirectError($redirect_error)
    {
        $this->container['redirect_error'] = $redirect_error;

        return $this;
    }

    /**
     * Gets redirect_success
     *
     * @return \YouSign\Client\Model\SignatureUiOutputRedirectSuccess
     */
    public function getRedirectSuccess()
    {
        return $this->container['redirect_success'];
    }

    /**
     * Sets redirect_success
     *
     * @param \YouSign\Client\Model\SignatureUiOutputRedirectSuccess $redirect_success redirect_success
     *
     * @return $this
     */
    public function setRedirectSuccess($redirect_success)
    {
        $this->container['redirect_success'] = $redirect_success;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


